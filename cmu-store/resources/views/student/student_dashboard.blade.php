@extends('layouts.student_navigation_bar')
@section('main-content')
<div class="content">

<div class="alert alert-primary" role="alert">
    Welcome, <b>Student</b>
  </div>

  <!-- Dashboard Content -->
  <div class="container mt-3" id="announcement-cont">
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
  <div class="container mt-3 flex-container" >
    <div id="events">
      <h3>Events</h3>
      <ul class="list-group">
        <li class="list-group-item">Event 1 - August 15</li>
        <li class="list-group-item">Event 2 - August 20</li>
        <li class="list-group-item">Event 3</li>
        <li class="list-group-item">Event 3</li>
        <li class="list-group-item">Event 3</li>
        <li class="list-group-item">Event 3</li>
        <li class="list-group-item">Event 3</li>
        <li class="list-group-item">Event 3</li>
      </ul>
    </div>

    <div id="calendar" style="width: 40%; height: 40%;"></div>
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
</div>

@endsection
