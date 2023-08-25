@extends('layouts.student_navigation_bar')
@section('main-content')
<div class="content">
  <div class="alert alert-primary mt-5" role="alert">
    Welcome, Student!
</div>

<!-- Dashboard Content -->
<div class="container mt-5" id="announcement-cont">
  <H4>Recent Announcements</H4>
  <div class="row" id="announcement-row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Announcement 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget augue vel urna ullamcorper accumsan in vel ex.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#announcementModal1">
            Read More
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Announcement 2</h5>
          <p class="card-text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#announcementModal2">
            Read More
          </button>
        </div>
      </div>
    </div>
    <!-- New Announcement Card -->
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Announcement 3</h5>
          <p class="card-text">Aliquam erat volutpat. Curabitur varius enim nec tortor ultricies, in varius nibh malesuada.</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#announcementModal3">
            Read More
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Upcoming Events Section -->
<div class="container mt-3">
  <div class="row">
  <div class="col-md-6" id="events">
    <h3>Events</h3>
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
  <div class="col-md-8" id="calendar"></div>
</div>
</div>
  
  <div id="calendar"></div>
</div>

<!-- Modals for Announcements -->
<div class="modal fade" id="announcementModal1" tabindex="-1" aria-labelledby="announcementModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="announcementModal1Label">Announcement 1 Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Details about Announcement 1...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="announcementModal2" tabindex="-1" aria-labelledby="announcementModal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="announcementModal2Label">Announcement 2 Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Details about Announcement 2...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="announcementModal3" tabindex="-1" aria-labelledby="announcementModal3Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="announcementModal3Label">Announcement 3 Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Details about Announcement 3...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
@endsection
