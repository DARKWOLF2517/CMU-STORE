
@extends('layouts.student_organization_navigation_bar')
<link href="/custom_css/SOAttendance.css" rel="stylesheet">

@section('main-content')
<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Attendance</li>
              </ol>
            </nav>
        </div>

        <div class="container" id="tablecontainer" >
            <h3 class="mt-2">
                <i class="fas fa-list"></i> Scheduled Attendance
            </h3>

            <div class="row mt-4">
              <div class="col-md-6">
                <div class="ScheduledEventContainer">
                  {{-- <h4> <i class="fas fa-calendar-alt"></i> Scheduled Attendance</h4> --}}
                    {{-- <div class="card">
                <div class="card-header">Event Name: General Assembly</div>
                <div class="card-body d-flex justify-content-between align-items-start">
                  <div>
                    <h5 class="card-title">Start Date: July 3, 2023</h5>
                    <p class="card-text">Time starts at: 1:00 PM</p>
                  </div>
                  <div class="ml-auto">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#startAttendanceModal">Start Attendance</button>
                  </div>
                </div>
              </div>

              <div class="card mt-3">
                <div class="card-header">Event Name: Palaro</div>
                <div class="card-body d-flex justify-content-between align-items-start">
                  <div>
                    <h5 class="card-title">Start Date: November 13, 2023</h5>
                    <p class="card-text">Time starts at: 1:00 PM</p>
                  </div>
                  <div class="ml-auto">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#startAttendanceModal">Start Attendance</button>
                  </div>
                </div>
              </div> --}}
                <event-attendance-list
                target_route="{{ route('get-events') }}"
                >
                </event-attendance-list>
            </div>
        </div>

    </div>
</div>
    </div>




@endsection
