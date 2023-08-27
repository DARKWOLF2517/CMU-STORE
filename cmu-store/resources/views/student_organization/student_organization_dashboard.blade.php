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
</div>
@endsection
