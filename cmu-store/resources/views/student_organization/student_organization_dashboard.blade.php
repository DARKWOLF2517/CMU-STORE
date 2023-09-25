@extends('layouts.student_organization_navigation_bar')
@section('main-content')
<link href="/custom_css/SODashboard.css" rel="stylesheet">
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col mt-2">
                <div class="welcome-card">
                    <div class="welcome-text">
                    <h1>Welcome, User!</h1>
                    <p>College of Information Sciences and Computing</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class=" text-center" id="statistic">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="statistic">
                        <event-count
                        card_label = "Members"
                        target_route = ""
                        icons = "fas fa-users card-icon"
                    ></event-count>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="statistic">
                        <event-count
                        card_label = "Created Events"
                        target_route = ""
                        icons = "fas fa-clock card-icon ongoing-events"
                    ></event-count>
                </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="statistic">
                        <event-count
                        card_label = "Completed Events"
                        target_route = ""
                        icons = "fas fa-check card-icon completed-events"
                    ></event-count>
                </div>
            </div>
        </div>
        </div>
            {{-- <div class="col mt-2 mb-2">
                <div class="announcement-container">
                    <h4>  <i class="bi bi-megaphone"></i> Recent Announcements</h4>
                    <div class="row" id="announcement-row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <span class="capsule"><h6 class="card-title">Announcement 1</h6></span>
                                    <p class="card-text">SSC General Assembly</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <span class="capsule"><h6 class="card-title">Announcement 2</h6></span>
                                    <p class="card-text">Foundation Day</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <span class="capsule"><h6 class="card-title">Announcement 3</h6></span>
                                    <p class="card-text">Palaro 2024</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="col-lg-6 col-md-12 mb-2">
                    <div id="calendar">
                        <dashboard-calendar>
                        </dashboard-calendar>
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="timeline">
                        <h3><i class="bi bi-list"></i> Schedule</h3>
                        <hr>
                        <div class="Schedule">
                            <event-dashboard>
                            </event-dashboard>
                        </div>
                    </div>
                </div> --}}
                <div class="col mt-2">
                    <div class="row align-items-start">
                        <div class="col-lg-6 col-md-12">
                            <!-- This column takes half the width on all screen sizes (xs, sm, md, lg, and xl). -->
                            <div id="calendar">
                                <dashboard-calendar>
                                </dashboard-calendar>
                            </div>
                        </div>
                        <div class="col">
                            <!-- This column takes the full width on all screen sizes (xs, sm, md, lg, and xl). -->
                            <div class="timeline">
                                <h6> Announcement</h6>
                                <hr>
                                <div class="Schedule">
                                    <event-dashboard>
                                    </event-dashboard>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                            <div class="timeline-schedule">

                                <h1><i class="bi bi-list"></i> Event Timeline</h1>
                                <ul class="sessions">
                                    <li>
                                        <div class="date">October 07, 2023</div>
                                        <small>Few more minutes of sleep won't do anyone any harm 🤷.</small>
                                    </li>
                                    <li>
                                        <div class="date">September 30, 2023</div>
                                        <small>Few more minutes of sleep won't do anyone any harm 🤷.</small>
                                    </li>
                                    <li>
                                        <div class="date">September 20, 2023</div>
                                        <small>Few more minutes of sleep won't do anyone any harm 🤷.</small>
                                    </li>
                                    <li>
                                        <div class="date">July 30, 2023</div>
                                        <small>How is it already 9:00? Just how??? 🤯🤯</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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


        // document.addEventListener('DOMContentLoaded', function() {
        //     var calendarEl = document.getElementById('calendar');

        // var calendar = new FullCalendar.Calendar(calendarEl, {
        //     initialView: 'dayGridMonth',
        //     editable: true,
        //     eventSources: [
        //         {
        //         events: [
        //             {
        //             title: 'Meeting',
        //             start: '2023-09-19T10:00:00',
        //             end: '2023-09-19T12:00:00',
        //             backgroundColor: '#007bff',
        //             borderColor: '#007bff'
        //             },
        //             {
        //             title: 'Appointment',
        //             start: '2023-08-20T14:00:00',
        //             end: '2023-08-20T15:30:00',
        //             backgroundColor: '#28a745',
        //             borderColor: '#28a745'
        //             },
        //             {
        //             title: 'Deadline',
        //             start: '2023-08-22T08:00:00',
        //             end: '2023-08-22T18:00:00',
        //             backgroundColor: '#dc3545',
        //             borderColor: '#dc3545'
        //             }
        //             // Add more events with different colors as needed
        //         ],
        //         }
        //     ],

        //     eventClick: function(info) {
        //         console.log('askjdfkjsd')
        //         // Display event details in the modal
        //         document.getElementById('eventTitle').textContent = info.event.title;
        //         document.getElementById('eventStart').textContent = info.event.start;
        //         document.getElementById('eventEnd').textContent = info.event.end;

        //         // Show the modal
        //         var modal = new bootstrap.Modal(document.getElementById('eventModal'));
        //         modal.show();
        //     },
        //     });

        //     calendar.render();
        // });
</script>

@endsection
