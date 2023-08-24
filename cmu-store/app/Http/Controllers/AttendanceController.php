<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
class AttendanceController extends Controller
{
    //
    public function showAttendanceList()
    {
        $attendance = Attendance::all();
        return $attendance->toJson();
    }
    public function addAttendance(Request $request){
        $validatedData = $request->validate([
            'user_id' => 'required',
        ]);

        $attendance = new Attendance();
        $attendance->user_id = $validatedData['user_id'];
        $attendance->save();
    }
}
