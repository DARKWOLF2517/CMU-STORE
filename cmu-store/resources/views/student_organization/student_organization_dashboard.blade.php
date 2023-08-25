@extends('layouts.student_organization_navigation_bar')
@section('main-content')
<div class="content">

<div class="container">
    <div class="row">
      <div class="col-sm-8 mt-2">
        <div class="card welcome-card">

          <h2>Welcome, User!</h2>
          <p>College of Information Sciences and Computing</p>
      </div>
      <div class="col mt-4">
        <H4>Recent Announcements</H4>
        <div class="row" id="announcement-row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Announcement 1</h5>
                <p class="card-text">SSC General Assembly</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Announcement 2</h5>
                <p class="card-text">Foundation Day</p>
              </div>
            </div>
          </div>
          <!-- New Announcement Card -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Announcement 3</h5>
                <p class="card-text">Palaro 2024</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-3" id="events">
        <h3>Scheduled Events</h3>
        <div id="event-list" class="list-group">
          <div class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-1">Event 1</h5>
              <small class="blue-date">August 15, 2023, 10:00 AM - 12:00 PM</small>
            </div>
          </div>
          <div class="list-group-item">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-1">Event 2</h5>
              <small class="blue-date">August 20, 2023, 3:30 PM - 5:00 PM</small>
            </div>
          </div>
          <!-- Add more event items here -->
        </div>
      </div>
      </div>
{{--
    <div class="dashboard">
      <div class="row">

          <div class="row">
                <event-count
                    target_route = "{{ route ('get-user-count') }}"
                    card_icon = "bi bi-people"
                    card_title = "MEMBERS"
                >
                </event-count>
                <event-count
                    target_route = "{{ route('get-events-count') }}"
                    card_icon = "bi bi-calendar-event"
                    card_title = "UPCOMING EVENTS"
                >
                </event-count>
                <event-count
                    target_route = ""
                    card_icon = "bi bi-check-circle"
                    card_title = "COMPLETED EVENTS"
                >
                </event-count>
          </div> --}}


          <div class="col-sm-4 text-center">
            <div class="row" id="statistic">
            <div class="col-sm">
              <div class="statistic">
                <p class="label">Number of Members:</p>
                <b><p class="number">200</p></b>
            </div>
            </div>
          <div class="col-sm">
            <div class="statistic">
              <p class="label">Created Events:</p>
              <b><p class="number">150</p></b>
          </div>
          </div>
          <div class="col-sm">
            <div class="statistic">
              <p class="label">Completed Events:</p>
              <b><p class="number">10</p> </b>
          </div>
          </div>

          </div>
          <div id="calendar"></div>


        </div>
      </div>

      <div class="container">
        <div class="row">

      </div>
  <!-- Bootstrap Modal -->
  <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Title:</strong> <span id="eventTitle"></span></p>
          <p><strong>Start:</strong> <span id="eventStart"></span></p>
          <p><strong>End:</strong> <span id="eventEnd"></span></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: 'dayGridMonth',
      editable: true,
      eventSources: [
        {
          events: [
            {
              title: 'Meeting',
              start: '2023-08-19T10:00:00',
              end: '2023-08-19T12:00:00',
              backgroundColor: '#007bff',
              borderColor: '#007bff'
            },
            {
              title: 'Appointment',
              start: '2023-08-20T14:00:00',
              end: '2023-08-20T15:30:00',
              backgroundColor: '#28a745',
              borderColor: '#28a745'
            },
            {
              title: 'Deadline',
              start: '2023-08-22T08:00:00',
              end: '2023-08-22T18:00:00',
              backgroundColor: '#dc3545',
              borderColor: '#dc3545'
            }
            // Add more events with different colors as needed
          ],
        }
      ],

      eventClick: function(info) {
        // Display event details in the modal
        document.getElementById('eventTitle').textContent = info.event.title;
        document.getElementById('eventStart').textContent = info.event.start;
        document.getElementById('eventEnd').textContent = info.event.end;

        // Show the modal
        var modal = new bootstrap.Modal(document.getElementById('eventModal'));
        modal.show();
      },
    });

    calendar.render();
  });
</script>
          {{-- <div class="row">
            <div class="col-md-6">
              <div class="timeline shadow">
                <h4>Schedule</h4>
                <hr>
                  <event-dashboard
                    target_route="{{ route('get-events') }}"
                    >
                  </event-dashboard>
              </div>
            </div>
            <div class="col-md-6">
              <div class="calendar shadow">
                <dashboard-calendar></dashboard-calendar>

              </div>
            </div>
          </div>
      </div>
    </div>
</div> --}}


    {{-- <script>
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
      </script> --}}
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <!-- FullCalendar JS -->
 <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
 <script>
   document.addEventListener('DOMContentLoaded', function() {
     var announcementRow = document.getElementById('announcement-row');
     var announcementCards = announcementRow.querySelectorAll('.card');

     // Limit the maximum number of announcement cards to show
     var maxAnnouncementCards = 3;
     for (var i = 0; i < announcementCards.length; i++) {
       if (i >= maxAnnouncementCards) {
         announcementCards[i].style.display = 'none';
       }
     }

     var calendarEl = document.getElementById('calendar');
     var calendar = new FullCalendar.Calendar(calendarEl, {
       initialView: 'dayGridMonth', // You can change the initial view as needed
       events: [
         {
           title: 'Event 1',
           start: '2023-08-15'
         },
         {
           title: 'Event 2',
           start: '2023-08-20'
         }
         // Add more events here
       ]
     });
     calendar.render();
   });
 </script>
@endsection
