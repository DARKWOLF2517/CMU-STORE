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
            'org_id'  => 'required',
            'event_id'  => 'required',
            'officer_id'  => 'required',
            'session'  => 'required',
        ]);
        $attendances = new Attendance();
        $attendances->user_id = $validatedData['user_id'];
        $attendances->org_id = $validatedData['org_id'];
        $attendances->event_id = $validatedData['event_id'];
        $attendances->officer_id = $validatedData['officer_id'];
        $attendances->session = $validatedData['session'];
        $attendances->save();

        return redirect()->back()->with('success', 'Event created successfully!');
    }
    public function attendanceRepetition($result_id, $session, $event_id)
    {
        $attendance = Attendance::where([
            ['user_id', $result_id],
            ['session', $session],
            ['event_id', $event_id]
        ])->get();
        $attendance = $attendance->count();
        return $attendance;
        
    }

    public function update($event_id,$status)
    {   
        $attendance = Event::find($event_id);
        $attendance->update(['status' => $status]);
        
        return response()->json(['message' => 'Status updated successfully']);

    }
    public function attendanceRecord($organization_id)
    {   
        $attendance = Event::where('org_id', $organization_id)->with('Attendance')->get();
        return $attendance->toJson();

    }
    public function showQR($event_id, $org_id, $session)
    {   

        return view('student_organization.student_organization_qr_scanner', ['event_id' => $event_id, 'org_id' => $org_id, 'session' => $session]);

    }
}
