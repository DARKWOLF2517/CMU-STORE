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
        ]);
        $attendances = new Attendance();
        $attendances->user_id = $validatedData['user_id'];
        $attendances->user_id = $validatedData['user_id'];
        $attendances->save();
        
        return response()->json(['message' => $validatedData['user_id']]);
        // Redirect or return a response
        // return redirect()->back()->with('success', 'Event created successfully!');
    }
}
