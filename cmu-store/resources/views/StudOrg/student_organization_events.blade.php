@extends('Layouts.main')

@section('main-content')

<div class="content">
<div class="container event-container">
    <div class="row head-container">
      <div class="col-md-6">
        <div class="input-group search-bar">
          <input type="text" class="form-control rounded-start" placeholder="Search Events" aria-label="Search"
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
            <option>Upcoming Events</option>
            <option>Completed Events</option>
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
            <i class="bi bi-plus">Add Event</i> 
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
          <h5 class="modal-title" id="event-modal-label">Create Event</h5>
        </div>
        <div class="modal-body">
          <form id="eventsForm" action="{{ route('events.store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="event-title" class="form-label">Event Name</label>
              <input type="text" name="name" class="form-control" id="event-title" value="{{ old('name') }}">
            </div>
            <div class="mb-3">
              <label for="event-start-date" class="form-label">Start Date</label>
              <input type="date" name="start_date" class="form-control" id="event-start-date" value="{{ old('start_date') }}">
            </div>
            <div class="mb-3">
              <label for="event-end-date" class="form-label">End Date</label>
              <input type="date" name="end_date" class="form-control" id="event-end-date" value="{{ old('end_date') }}">
            </div>
            <div class="mb-3">
              <label for="event-start-time" class="form-label">Start Attendance</label>
              <input type="time" name="start_attendance" class="form-control" id="event-start-time" value="{{ old('start_attendance') }}">
            </div>
            <div class="mb-3">
              <label for="event-end-time" class="form-label">End Attendance</label>
              <input type="time" name="end_attendance" class="form-control" id="event-end-time" value="{{ old('end_attendance') }}">
            </div>
            <div class="mb-3">
              <label for="event-location" class="form-label">Location</label>
              <input type="text" name="location" class="form-control" id="event-location" value="{{ old('location') }}">
            </div>
            <div class="mb-3">
              <label for="event-description" class="form-label">Description</label>
              <textarea class="form-control" name="description" id="event-description" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="require-attendance" name="require_attendance" value="1" {{ old('require_attendance') ? 'checked' : '' }}>
              <label class="form-check-label" for="require-attendance">
                Require Attendance
              </label>
            </div>
            <input type="hidden" name="org_id" value="1">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="save-event-button">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>

{{-- <!-- Update Event Modal -->
<div class="modal fade" id="update-event-modal" tabindex="-1" aria-labelledby="update-event-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="update-event-modal-label">Update Event</h5>
      </div>
      <div class="modal-body">
        <form id="update-eventsForm"action="{{ route('events.update', $event->event_id) }}"  method="POST">
          @csrf
          @method('PUT')
          <div class="mb-3">
            <label for="event-update-title" class="form-label">Event Name</label>
            <input type="text" name="name" class="form-control" id="event-update-title">
          </div>
          <div class="mb-3">
            <label for="event-update-start-date" class="form-label">Start Date</label>
            <input type="date" name="start_date" class="form-control" id="event-update-start-date">
          </div>
          <div class="mb-3">
            <label for="event-update-end-date" class="form-label">End Date</label>
            <input type="date" name="end_date" class="form-control" id="event-update-end-date">
          </div>
          <div class="mb-3">
            <label for="event-update-start-time" class="form-label">Start Attendance</label>
            <input type="time" name="start_attendance" class="form-control" id="event-update-start-time">
          </div>
          <div class="mb-3">
            <label for="event-update-end-time" class="form-label">End Attendance</label>
            <input type="time" name="end_attendance" class="form-control" id="event-update-end-time">
          </div>
          <div class="mb-3">
            <label for="event-update-location" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" id="event-update-location">
          </div>
          <div class="mb-3">
            <label for="event-update-description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="event-update-description" rows="3"></textarea>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="event-update-require-attendance" name="require_attendance" value="1">
            <label class="form-check-label" for="event-update-require-attendance">
              Require Attendance
            </label>
          </div>
          <input type="hidden" name="org_id" value="1">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="update-event-button">Save</button>
      </div>
    </div>
  </div>
</div> --}}



</div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>


    function displayEvents() {
    // Pass the events data to JavaScript
    const events = @json($events);

// Loop through the events and create cards
const cards = events.map(event => {
    return `



        <div class="card mb-3">
            <div class="card-body">
              <h6 class="card-title">Event Name:</strong> ${event.name}</h6>
              <h6 class="card-subtitle mb-2 text-muted">Scheduled Date: ${event.start_date}</h6>
              <h6 class="card-subtitle mb-2 text-muted">Scheduled Time: ${event.start_attendance}</h6>
              <h6 class="card-text">Location: ${event.location}</h6>
              <h6 class="card-text">Description: ${event.description}</h6>
              <div class="card-actions">
                <button class="ellipsis-button" onclick="editEvent(${event.event_id})"> <i class="bi bi-pencil-square"></i></button>
                <button class="ellipsis-button" onclick="deleteEvent(${event.event_id})"> <i class="bi bi-trash"></i></button>
              </div>
            </div>
        </div>
    `;
});

// Append the cards to the events container
const eventsContainer = document.getElementById('event-cards');
eventsContainer.innerHTML = cards.join('');

    }


    $(document).ready(function () {
      $('#add-event-button').click(function () {
        $('#event-modal').modal('show');
      });
      // $('#save-event-button').click(function () {
      //   addEvent();
      // });

      displayEvents();
    });




//     function editEvent(eventId) {
//   // Perform an AJAX request to fetch the event data
//   $.ajax({
//     url: `/events/${eventId}/edit`,
//     method: 'GET',
//     success: function (response) {
//       // Populate the fields in the update event modal with the event data
//       const event = response.event;
//       $('#event-update-title').val(event.name);
//       $('#event-update-start-date').val(event.start_date);
//       $('#event-update-end-date').val(event.end_date);
//       $('#event-update-start-time').val(event.start_attendance);
//       $('#event-update-end-time').val(event.end_attendance);
//       $('#event-update-location').val(event.location);
//       $('#event-update-description').val(event.description);
//       $('#update-event-modal').modal('show');
//     },
//     error: function (xhr, status, error) {
//       // Handle the error appropriately
//       console.error(error);
//     }
//   });
// }
// function deleteEvent(eventId) {
//   console.log("Delete button clicked");
//   console.log(eventId);  // Add this line
//   // Perform an AJAX request to delete the event
//   $.ajax({
//     url: `/events/${eventId}`,
//     method: 'DELETE',
//     success: function (response) {
//       // Handle the success response
//       console.log(response.message);
//       // Reload or update the event list after deletion
//       displayEvents();
//     },
//     error: function (xhr, status, error) {
//       // Handle the error appropriately
//       console.error(error);
//     }
//   });
// }
function deleteEvent(eventId) {
  if (confirm('Are you sure you want to delete this event?')) {
    fetch(`/events/${eventId}`, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Content-Type': 'application/json',
      },
    })
      .then(response => response.json())
      .then(data => {
        alert(data.message);
        // You may choose to update the UI or refresh the event list
        // after successful deletion.
        location.reload();
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
}


  </script>
