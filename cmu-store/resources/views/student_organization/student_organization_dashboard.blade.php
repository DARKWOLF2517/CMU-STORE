
@extends('layouts.student_organization_navigation_bar')
@section('main-content')
{{-- <link href="/css/SODashboard.css" rel="stylesheet"> --}}

<div class="content">

    <div class="container dashboard">
        <div class="row">

            <div class="row">
                <div class="col-md-4">
                  <div class="card shadow">
                    <div class="card-body">
                      <h6 class="card-title">
                        <b>NUMBER OF MEMBERS</b>
                        <i class="bi bi-people"></i>
                      </h6>
                      {{-- <h3 class="card-text">{{ numberOfMembers }}</h3> --}}
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
                      {{-- <h3 class="card-text">{{ numberOfUpcomingEvents }}</h3> --}}
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
                      {{-- <h3 class="card-text">{{ numberOfCompletedEvents }}</h3> --}}
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
    export default {
      data() {
        return {
          numberOfMembers: 100,
          numberOfUpcomingEvents: 0,
          numberOfCompletedEvents: 10,
        };x
      },
    };
    </script>
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
          const today = new Date();
          let currentMonth = today.getMonth();
          let currentYear = today.getFullYear();
          const cells = document.getElementsByTagName('td');

          function updateCalendar() {
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            const firstDay = new Date(currentYear, currentMonth, 1);
            const lastDay = new Date(currentYear, currentMonth + 1, 0);
            const numDays = lastDay.getDate();
            const startDay = firstDay.getDay();

            for (let i = 0; i < cells.length; i++) {
              cells[i].innerHTML = '';
              cells[i].classList.remove('today');
            }

            document.getElementById('month-year').textContent = `${monthNames[currentMonth]} ${currentYear}`;

            let date = 1;
            for (let i = startDay; i < startDay + numDays; i++) {
              cells[i].innerHTML = date;
              if (date === today.getDate() && currentMonth === today.getMonth() && currentYear === today.getFullYear()) {
                cells[i].classList.add('today');
              }
              date++;
            }
          }

          updateCalendar();

          document.getElementById('prev-month').addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
              currentMonth = 11;
              currentYear--;
            }
            updateCalendar();
          });

          document.getElementById('next-month').addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
              currentMonth = 0;
              currentYear++;
            }
            updateCalendar();
          });
        });
      </script>

@endsection
