@extends('Layouts.main')



@section('main-content')
<link href="/css/SOAttendance.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="button-container">
      <button class="btn btn-primary">
        <i class="fa fa-user-plus"></i> Add a member
      </button>
      <button class="btn btn-primary">
        <i class="fa fa-list"></i> List of Members
      </button>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="calendar-container">
          <div class="calendar-navigation">
            <button onclick="prevWeek()">&lt;</button>
            <h5 id="currentWeek"></h5>
            <span class="calendar-year" id="currentYear"></span>
            <button onclick="nextWeek()">&gt;</button>
          </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="day">SUN</th>
                <th class="day">MON</th>
                <th class="day">TUE</th>
                <th class="day">WED</th>
                <th class="day">THU</th>
                <th class="day">FRI</th>
                <th class="day">SAT</th>
              </tr>
            </thead>
            <tbody id="calendarBody">
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Scheduled Events</h5>
          </div>
          <div class="card-body">
            <table class="table">
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



<script>
    let currentDate = new Date();

    function updateCalendar() {
      const calendarBody = document.getElementById('calendarBody');
      calendarBody.innerHTML = '';

      let weekStart = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate() - currentDate.getDay());
      let weekEnd = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate() + (6 - currentDate.getDay()));

      let row = document.createElement('tr');

      for (let i = 0; i < 7; i++) {
        const cell = document.createElement('td');

        const dateCell = document.createElement('div');
        dateCell.textContent = weekStart.getDate();
        cell.appendChild(dateCell);

        if (isCurrentDate(weekStart)) {
          dateCell.classList.add('current-day');
        }

        weekStart.setDate(weekStart.getDate() + 1);
        row.appendChild(cell);
      }

      calendarBody.appendChild(row);

      const currentWeek = document.getElementById('currentWeek');
      const weekStartFormatted = formatDate(weekStart);
      const weekEndFormatted = formatDate(weekEnd);
      currentWeek.textContent = weekStartFormatted + ' - ' + weekEndFormatted;

      const currentYear = document.getElementById('currentYear');
      currentYear.textContent = currentDate.getFullYear();
    }

    function prevWeek() {
      currentDate.setDate(currentDate.getDate() - 7);
      updateCalendar();
    }

    function nextWeek() {
      currentDate.setDate(currentDate.getDate() + 7);
      updateCalendar();
    }

    function formatDate(date) {
      return date.toLocaleDateString('default', { month: 'short', day: 'numeric' });
    }

    function isCurrentDate(date) {
      const today = new Date();
      return (
        date.getDate() === today.getDate() &&
        date.getMonth() === today.getMonth() &&
        date.getFullYear() === today.getFullYear()
      );
    }

    function recordAttendance(event) {
      // Code for recording attendance
      console.log('Attendance recorded for: ' + event);
    }

    function viewAttendance(event) {
      // Code for viewing attendance
      console.log('Attendance viewed for: ' + event);
    }

    updateCalendar();
  </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

  </body>
