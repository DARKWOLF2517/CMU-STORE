<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function showEvents()
    {
        // Retrieve the events with necessary fields
        $events = Event::all();
    
        return view('StudOrg.StudOrgAddEvent', compact('events'));
    }
}
