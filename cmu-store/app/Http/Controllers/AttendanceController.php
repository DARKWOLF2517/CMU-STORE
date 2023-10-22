<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Event;
class AttendanceController extends Controller
{
    public function showAttendanceList()
    {
        $attendance = Attendance::all();
        return $attendance->toJson();
    }


    public function store(Request $request){

        $validatedData = $request->validate([
            'user_id' => 'required',
            'org_id'  => 'required'
        ]);
        $attendances = new Attendance();
        $attendances->user_id = $validatedData['user_id'];
        $attendances->org_id = $validatedData['org_id'];
        $attendances->save();

        // return response()->json(['message' => $validatedData['user_id']]);
        // Redirect or return a response
        return redirect()->back()->with('success', 'Event created successfully!');
    }
    public function attendanceRepetition($id)
    {
        $data = Attendance::find($id);

        if ($data) {
            // Data exists, you can work with it here
            return true;
        }
        // Data with the specific ID doesn't exist
        return false;
    }

    public function update($event_id,$status)
    {   
        $attendance = Event::find($event_id);
        $attendance->update(['status' => $status]);
        
        return response()->json(['message' => 'Status updated successfully']);

    }
}
