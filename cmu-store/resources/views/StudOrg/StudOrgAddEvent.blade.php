@extends('Layouts.main')


@section('main-content')

    <div class="content">
        <div class="container event-container">
            <div class="row head-container">
              <div class="col-md-9">
                <div class="input-group search-bar">
                  <input type="text" class="form-control rounded-start" placeholder="Search" aria-label="Search"
                    aria-describedby="search-icon">
                  <button class="btn btn-primary rounded-end" type="button" id="search-icon">
                    <i class="bi bi-search"></i>
                  </button>
                </div>
              </div>
              <div class="col-md-3">
                <div class="d-flex justify-content-end">
                  <select class="form-select custom-select-width">
                    <option selected>Sort by</option>
                    <option>Date</option>
                    <option>Location</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="container event-list">
            <div class="row">
              <div class="col-md-12">
                <div class="add-event-button">
                  <h2>Events</h2>
                  <button class="btn btn-primary me-2" id="add-event-button">
                    <i class="bi bi-plus"></i> Add Event
                  </button>
                </div>
                <div class="event-list-scroll" id="event-cards"></div>
              </div>
            </div>
          </div>

          <!-- Event Modal -->
          <div class="modal fade" id="event-modal" tabindex="-1" aria-labelledby="event-modal-label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="event-modal-label">Add Event</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="event-title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="event-title">
                  </div>
                  <div class="mb-3">
                    <label for="event-start-date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="event-start-date">
                  </div>
                  <div class="mb-3">
                    <label for="event-end-date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="event-end-date">
                  </div>
                  <div class="mb-3">
                    <label for="event-start-time" class="form-label">Start Time</label>
                    <input type="time" class="form-control" id="event-start-time">
                  </div>
                  <div class="mb-3">
                    <label for="event-end-time" class="form-label">End Time</label>
                    <input type="time" class="form-control" id="event-end-time">
                  </div>
                  <div class="mb-3">
                    <label for="event-location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="event-location">
                  </div>
                  <div class="mb-3">
                    <label for="event-description" class="form-label">Description</label>
                    <textarea class="form-control" id="event-description" rows="3"></textarea>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="require-attendance">
                    <label class="form-check-label" for="require-attendance">
                      Require Attendance
                    </label>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="save-event-button">Save</button>
                </div>
              </div>
            </div>
          </div>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
          <script>
            var events = [];

            // Display events
            function displayEvents() {
              $('#event-cards').empty();
              if (events.length > 0) {
                events.forEach(function (event, index) {
                  var card = `
                    <div class="card mb-3">
                      <div class="card-body">
                        <h5 class="card-title">${event.title}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">${event.startDate} - ${event.endDate}</h6>
                        <p class="card-text">${event.location}</p>
                        <p class="card-text">${event.description}</p>
                        <div class="card-actions">
                          <button class="btn btn-primary edit-event-button" data-index="${index}">
                            <i class="bi bi-pencil-fill"></i> Edit
                          </button>
                          <button class="btn btn-danger delete-event-button" data-index="${index}">
                            <i class="bi bi-trash-fill"></i> Delete
                          </button>
                        </div>
                      </div>
                    </div>
                  `;
                  $('#event-cards').append(card);
                });
              } else {
                var noEventMessage = `
                  <div class="alert alert-info" role="alert">
                    No events found.
                  </div>
                `;
                $('#event-cards').append(noEventMessage);
              }
            }

            // Add event
            function addEvent(event) {
              events.push(event);
              displayEvents();
            }

            // Edit event
            function editEvent(index, event) {
              events[index] = event;
              displayEvents();
            }

            // Delete event
            function deleteEvent(index) {
              events.splice(index, 1);
              displayEvents();
            }



            $(document).ready(function () {
              // Add Event button click handler
              $('#add-event-button').click(function () {
                $('#event-modal-label').text('Add Event');
                $('#event-modal').modal('show');
              });

              // Save Event button click handler
              $('#save-event-button').click(function () {
                var title = $('#event-title').val();
                var startDate = $('#event-start-date').val();
                var endDate = $('#event-end-date').val();
                var startTime = $('#event-start-time').val();
                var endTime = $('#event-end-time').val();
                var location = $('#event-location').val();
                var description = $('#event-description').val();
                var requireAttendance = $('#require-attendance').is(':checked');

                var event = {
                  title: title,
                  startDate: startDate,
                  endDate: endDate,
                  startTime: startTime,
                  endTime: endTime,
                  location: location,
                  description: description,
                  requireAttendance: requireAttendance
                };

                if ($('#event-modal-label').text() === 'Add Event') {
                  addEvent(event);
                } else {
                  var index = parseInt($('#event-modal').data('index'));
                  editEvent(index, event);
                }

                $('#event-modal').modal('hide');
              });

              // Edit Event button click handler
              $(document).on('click', '.edit-event-button', function () {
                var index = parseInt($(this).data('index'));
                var event = events[index];

                $('#event-modal-label').text('Edit Event');
                $('#event-modal').data('index', index);
                $('#event-title').val(event.title);
                $('#event-start-date').val(event.startDate);
                $('#event-end-date').val(event.endDate);
                $('#event-start-time').val(event.startTime);
                $('#event-end-time').val(event.endTime);
                $('#event-location').val(event.location);
                $('#event-description').val(event.description);
                $('#require-attendance').prop('checked', event.requireAttendance);

                $('#event-modal').modal('show');
              });

              // Delete Event button click handler
              $(document).on('click', '.delete-event-button', function () {
                var index = parseInt($(this).data('index'));
                deleteEvent(index);
              });
            });
          </script>

