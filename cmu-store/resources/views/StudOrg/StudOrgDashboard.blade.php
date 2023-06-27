@extends('Layouts.main')
@section('main-content')
<link href="/css/SODashboard.css" rel="stylesheet">

<div class="content">

    <div class="container dashboard">
        <div class="row">

          <div class="col-md-4">
            <div class="card shadow">
              <div class="card-body">
                <h6 class="card-title">
                 <b> NUMBER OF MEMBERS</b>
                  <i class="bi bi-people"></i>
                </h6>
                <h3 class="card-text">100</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <div class="card-body">
                <h6 class="card-title">
                  <b>NUMBER OF UPCOMING EVENTS</b>
                  <i class="bi bi-calendar-event"></i>
                </h6>
                <h3 class="card-text">0</h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow">
              <div class="card-body">
                <h6 class="card-title">
                  <b>NUMBER OF COMPLETED EVENTS</b>
                  <i class="bi bi-check-circle"></i>
                </h6>
                <h3 class="card-text">10</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="timeline shadow">
              <h4>Schedule</h4>
              <hr>
              <div class="list-group">
                <div class="list-group-item">
                  <h6 class="mb-0">Event 1</h6>
                  <small>2023-06-20 10:00 AM - 2023-06-20 12:00 PM</small>
                </div>
                <div class="list-group-item">
                  <h6 class="mb-0">Event 2</h6>
                  <small>2023-06-22 02:00 PM - 2023-06-22 04:00 PM</small>
                </div>
                <div class="list-group-item">
                  <h6 class="mb-0">Event 3</h6>
                  <small>2023-06-25 09:00 AM - 2023-06-25 11:00 AM</small>
                </div>
                <div class="list-group-item">
                  <h6 class="mb-0">Event 3</h6>
                  <small>2023-06-25 09:00 AM - 2023-06-25 11:00 AM</small>
                </div>
                <div class="list-group-item">
                  <h6 class="mb-0">Event 3</h6>
                  <small>2023-06-25 09:00 AM - 2023-06-25 11:00 AM</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="calendar shadow">
              <div class="calendar-container">
                <div>
                  <button id="prev-month" class="btn btn-link"><i class="bi bi-caret-left"></i></button>
                  <b><span id="month-year"></span></b>
                  <button id="next-month" class="btn btn-link"><i class="bi bi-caret-right"></i></button>
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
          </div>
        </div>
      </div>
<!-- Content class end -->
</div>

<script>
    // Simulating data retrieval from an API or database
    setTimeout(() => {
        const memberCount = 100; // Replace with actual member count
        const eventCount = 10; // Replace with actual event count
        const completedEventCount = 5; // Replace with actual completed event count

        document.getElementById('memberCount').textContent = memberCount;
        document.getElementById('eventCount').textContent = eventCount;
        document.getElementById('completedEventCount').textContent = completedEventCount;
    }, 1000); // Simulating a delay of 1 second for data retrieval
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
  <script>
    const attendanceCheckbox = document.getElementById('attendanceCheckbox');
    const attendanceOptions = document.getElementById('attendanceOptions');

    attendanceCheckbox.addEventListener('change', function () {
      attendanceOptions.style.display = this.checked ? 'block' : 'none';
    });
  </script>
@endsection
