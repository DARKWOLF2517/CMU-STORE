
@extends('layouts.student_organization_navigation_bar')
<link href="/custom_css/SOAttendance.css" rel="stylesheet">

@section('main-content')

<div class="content">
    <div class="container breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
            <li class="breadcrumb-item">Student Organization</li>
            <li class="breadcrumb-item active" aria-current="page">Attendance</li>
          </ol>
        </nav>
    </div>
    <div class="container" id="tablecontainer">
        <h1 class="mt-4">Attendance Monitoring</h1>

        <div class="row mt-4">
          <div class="col-md-6">
            <div class="ScheduledEventContainer">
              <h4>Scheduled Attendance</h4>

              <div class="card">
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
              </div>

            </div>
          </div>

          <div class="col-md-6">
            <div class="PreviousEventContainer">
              <h4>Previous Recorded Attendance</h4>

              <div class="card">
                <div class="card-header">Event Name: Freshmen Orientation</div>
                <div class="card-body d-flex justify-content-between align-items-start">
                  <div>
                    <h5 class="card-title">Date: June 2, 2023</h5>
                  </div>
                  <div class="ml-auto">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewAttendanceModal">View Attendance</button>
                  </div>
                </div>
              </div>

              <div class="card mt-3">
                <div class="card-header">Event Name: Freshmen Orientation</div>
                <div class="card-body d-flex justify-content-between align-items-start">
                  <div>
                    <h5 class="card-title">Date: June 2, 2023</h5>
                  </div>
                  <div class="ml-auto">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewAttendanceModal">View Attendance</button>
                  </div>
                </div>
              </div>

              <div class="card mt-3">
                <div class="card-header">Event Name: Freshmen Orientation</div>
                <div class="card-body d-flex justify-content-between align-items-start">
                  <div>
                    <h5 class="card-title">Date: June 2, 2023</h5>
                  </div>
                  <div class="ml-auto">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewAttendanceModal">View Attendance</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Start Attendance Modal -->
      <div class="modal fade" id="startAttendanceModal" tabindex="-1" aria-labelledby="startAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to start attendance?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">Start</button>
            </div>
          </div>
        </div>
      </div>

      <!-- View Attendance Modal -->
      <div class="modal fade" id="viewAttendanceModal" tabindex="-1" aria-labelledby="viewAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewAttendanceModalLabel">View Attendance</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Attendance details go here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

</div>
