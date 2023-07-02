
@extends('layouts.student_organization_navigation_bar')


@section('main-content')


<div class="content">
<div class="container attendance">


    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Scheduled Events</h5>
          </div>
          <div class="card-body">
            <table class="table event">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>Event</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2023-06-25</td>
                  <td>Event A</td>
                  <td>
                    <button class="btn btn-primary btn-sm" onclick="recordAttendance('Event A')">Record Attendance</button>
                  </td>
                </tr>
                <tr>
                  <td>2023-06-26</td>
                  <td>Event B</td>
                  <td>
                    <!-- No action button for events on other days -->
                  </td>
                </tr>
                <tr>
                  <td>2023-06-27</td>
                  <td>Event C</td>
                  <td>
                    <!-- No action button for events on other days -->
                  </td>
                </tr>
                <tr>
                  <td>2023-06-27</td>
                  <td>Event C</td>
                  <td>
                    <!-- No action button for events on other days -->
                  </td>
                </tr>
                <tr>
                  <td>2023-06-27</td>
                  <td>Event C</td>
                  <td>
                    <!-- No action button for events on other days -->
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Previous Events</h5>
          </div>
          <div class="card-body">
            <ul class="list-group" id="previousEventsList">
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Event X
                <button class="btn btn-primary btn-sm" onclick="viewAttendance('Event X')">View Attendance</button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Event Y
                <button class="btn btn-primary btn-sm" onclick="viewAttendance('Event Y')">View Attendance</button>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center">
                Event Z
                <button class="btn btn-primary btn-sm" onclick="viewAttendance('Event Z')">View Attendance</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

  </body>
