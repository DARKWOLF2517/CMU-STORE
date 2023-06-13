@extends('Layouts.main')



@section('main-content')

<div class="content">

    <!-- Dashboard  -->
    <h2>Student Organization Dashboard</h2>
    <div class="dashboard">
        <div class="dashboard-card">
          <i class="fas fa-users"></i>
            <h6> Number of Members</h6>
            <p id="memberCount">Loading...</p>
        </div>

        <div class="dashboard-card">
          <i class="far fa-calendar-alt"></i>
            <h6>Number of Events</h6>
            <p id="eventCount">Loading...</p>
        </div>

        <div class="dashboard-card">
          <i class="fas fa-check-circle"></i>
            <h6>Number of Completed Events</h6>
            <p id="completedEventCount">Loading...</p>
        </div>
    </div>
    <div class="dashboard-buttons">
      <div class="dashboard-button events">
          <i class="fas fa-calendar"></i>
          <h6>Events</h6>
      </div>

      <div class="dashboard-button accountabilities">
          <i class="fas fa-tasks"></i>
          <h6>Accountabilities</h6>
      </div>

      <div class="dashboard-button attendance">
          <i class="fas fa-clipboard-list"></i>
          <h6>Attendance</h6>
      </div>

      <div class="dashboard-button evaluation">
          <i class="fas fa-chart-bar"></i>
          <h6>Evaluation</h6>
      </div>

      <div class="dashboard-button student-organization">
          <i class="fas fa-users"></i>
          <h6>Student Organization</h6>
      </div>
  </div>
<!-- Timeline container -->
<div class="timeline-container">
<div class="timeline-header">
<h3>Timeline</h3>
</div>
<hr>
<div class="timeline-content">
<ul class="timeline-event-list">
  <li class="timeline-event">
    <div class="event-date">June 10, 2023</div>
    <div class="event-description">Event 1</div>
  </li>
  <li class="timeline-event">
    <div class="event-date">June 15, 2023</div>
    <div class="event-description">Event 2</div>
  </li>
  <li class="timeline-event">
    <div class="event-date">June 20, 2023</div>
    <div class="event-description">Event 3</div>
  </li>
</ul>
</div>
</div>

<div class="calendar-container">
<div>
<button id="prev-month" class="btn btn-link"><i class="bi bi-caret-left-fill"></i></button>
<span id="month-year"></span>
<button id="next-month" class="btn btn-link"><i class="bi bi-caret-right-fill"></i></button>
</div>
<table>
<tr>
  <th>Sun</th>
  <th>Mon</th>
  <th>Tue</th>
  <th>Wed</th>
  <th>Thu</th>
  <th>Fri</th>
  <th>Sat</th>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
</table>
</div>
</div>

<!-- Content class end -->
</div>
@endsection
