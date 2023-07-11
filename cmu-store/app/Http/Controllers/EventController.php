<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function showEvents()
    {           
        return view('student_organization.student_organization_events');
    }

    public function getEvents()
    {
        $events = Event::all();
        return $events->toJson();
    }

    /**
     * @param $request
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_attendance' => 'required',
            'end_attendance' => 'required',
            'location' => 'required',
            'description' => 'required',
            'require_attendance' => 'nullable|boolean',
            'org_id' => 'required|exists:organizations,org_id',
        ]);

        // Create a new Event instance
        $event = new Event();
        $event->name = $validatedData['name'];
        $event->start_date = $validatedData['start_date'];
        $event->end_date = $validatedData['end_date'];
        $event->start_attendance = $validatedData['start_attendance'];
        $event->end_attendance = $validatedData['end_attendance'];
        $event->location = $validatedData['location'];
        $event->description = $validatedData['description'];
        $event->require_attendance = $validatedData['require_attendance'] ?? 0;
        $event->org_id = $validatedData['org_id'];
        $event->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Event created successfully!');
    }

    public function edit(Event $event_id)
    {   
        $events = Event::findOrFail($event_id);
        return view('student_organization.student_organization_events', compact('events'));
    }

    public function update(Request $request, Event $event)
    {   
        $request->validate([
            'name' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'start_attendance' => 'required',
            'end_attendance' => 'required',
            'location' => 'required',
            'description' => 'required',
            'require_attendance' => 'nullable|boolean',
        
        ]);

        $event->update($request->all());

        return redirect()->route('events')->with('success', 'Event updated successfully.');
    }
    public function destroy(Event $event)
    {
        $event->delete();
        return response()->json(['message' => 'Event deleted successfully']);
    }
}
