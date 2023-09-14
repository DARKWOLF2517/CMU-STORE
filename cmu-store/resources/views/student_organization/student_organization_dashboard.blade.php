@extends('layouts.student_organization_navigation_bar')
@section('main-content')
<link href="/custom_css/SODashboard.css" rel="stylesheet">
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col mt-2">
                <div class="welcome-card">
                    <h1>Welcome, User!</h1>
                    <p>College of Information Sciences and Computing</p>
                </div>
            </div>

            <div class="col-md-4 mt-0">
                <div class="row text-center" id="statistic">
                    {{-- <div class="col-sm-4">
                        <div class="statistic">
                            <p class="stat-label">Number of Members:</p>
                            <b><p class="stat-number">200</p></b>
                        </div>
                    </div> --}}
                    <div class="col-sm-4">
                        <div class="statistic">
                            <event-count
                            card_label = "Members:"
                            target_route = ""
                        ></event-count>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="statistic">
                            <event-count
                            card_label = "Created Events:"
                            target_route = ""
                        ></event-count>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="statistic">
                            <event-count
                            card_label = "Completed Events:"
                            target_route = ""
                        ></event-count>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-2">
                <div class="announcement-container">
                    <h4>Recent Announcements</h4>
                    <div class="row" id="announcement-row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Announcement 1</h6>
                                    <p class="card-text">SSC General Assembly</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Announcement 2</h6>
                                    <p class="card-text">Foundation Day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Announcement 3</h6>
                                    <p class="card-text">Palaro 2024</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <div class="mt-2">
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="timeline">
                    <h3>Schedule</h3>
                    <hr>
                    <div class="Schedule">
                    <event-dashboard>

                    </event-dashboard>
                </div>
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
@endsection
@section('custom-script')
<script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
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
        console.log('askjdfkjsd')
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
