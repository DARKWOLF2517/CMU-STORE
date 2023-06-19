@extends('Layouts.main')


@section('main-content')

<title> Events</title>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
  <style>
    .event-container {
      margin-top: 20px;
      border: 1px solid #ddd;
      padding: 20px;
      width: 100%;
      box-sizing: border-box;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .head-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .event-list {
      margin-top: 20px;
      border: 1px solid #ddd;
      padding: 20px;
      width: 100%;
      box-sizing: border-box;
    }

    .event-list-scroll {
      max-height: 300px;
      overflow-y: auto;
    }

    .custom-select-width {
      width: 150px;
    }

    /* Added CSS for the "Add Event" button */
    .add-event-button {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .add-event-button h2 {
      margin: 0;
    }

    .add-event-button button {
      margin-left: auto;
    }
      /* Updated CSS for the "card-text" class */
  .card-text {
    margin-bottom: px;
  }
  </style>
</head>

<body>
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

        </div>
        <div class="modal-body">
          <form id="event-form">
            <div class="mb-3">
              <label for="event-title" class="form-label">Title of Event</label>
              <input type="text" class="form-control" id="event-title" required>
            </div>
            <div class="mb-3">
              <label for="event-start-date" class="form-label">Start date of Event</label>
              <input type="date" class="form-control" id="event-start-date" required>
            </div>
            <div class="mb-3">
              <label for="event-end-date" class="form-label">End date of Event</label>
              <input type="date" class="form-control" id="event-end-date" required>
            </div>
            <div class="mb-3">
              <label for="event-start-time" class="form-label">Start time of Event</label>
              <input type="time" class="form-control" id="event-start-time" required>
            </div>
            <div class="mb-3">
              <label for="event-end-time" class="form-label">End time of Event</label>
              <input type="time" class="form-control" id="event-end-time" required>
            </div>
            <div class="mb-3">
              <label for="event-location" class="form-label">Location of Event</label>
              <input type="text" class="form-control" id="event-location" required>
            </div>
            <div class="mb-3">
              <label for="event-description" class="form-label">Description</label>
              <textarea class="form-control" id="event-description" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="require-attendance">
                <label class="form-check-label" for="require-attendance">Require Attendance</label>
              </div>
            </div>
            <div class="mb-3" id="attendance-options" style="display: none;">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="attendance-option-1st-years">
                <label class="form-check-label" for="attendance-option-1st-years">1st years</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="attendance-option-2nd-years">
                <label class="form-check-label" for="attendance-option-2nd-years">2nd years</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="attendance-option-3rd-years">
                <label class="form-check-label" for="attendance-option-3rd-years">3rd years</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="attendance-option-4th-years">
                <label class="form-check-label" for="attendance-option-4th-years">4th years</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="attendance-option-5th-years">
                <label class="form-check-label" for="attendance-option-5th-years">5th years</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="attendance-option-extendees">
                <label class="form-check-label" for="attendance-option-extendees">Extendees</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="attendance-option-select-all">
                <label class="form-check-label" for="attendance-option-select-all">Select All Students</label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="save-event-button">Save</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
  <script>
   $(document).ready(function () {
  // Event handler for "Add Event" button
  $('#add-event-button').click(function () {
    $('#event-modal').modal('show');
  });

  // Event handler for "Require Attendance" checkbox
  $('#require-attendance').change(function () {
    $('#attendance-options').toggle(this.checked);
  });

  // Event handler for "Save" button in the modal
  $('#save-event-button').click(function () {
    // Get the form values
    var title = $('#event-title').val();
    var startDate = $('#event-start-date').val();
    var endDate = $('#event-end-date').val();
    var startTime = $('#event-start-time').val();
    var endTime = $('#event-end-time').val();
    var location = $('#event-location').val();
    var description = $('#event-description').val();
    var requireAttendance = $('#require-attendance').is(':checked');
    var attendanceOptions = {
      '1st-years': $('#attendance-option-1st-years').is(':checked'),
      '2nd-years': $('#attendance-option-2nd-years').is(':checked'),
      '3rd-years': $('#attendance-option-3rd-years').is(':checked'),
      '4th-years': $('#attendance-option-4th-years').is(':checked'),
      '5th-years': $('#attendance-option-5th-years').is(':checked'),
      'extendees': $('#attendance-option-extendees').is(':checked'),
      'select-all': $('#attendance-option-select-all').is(':checked')
    };

    // Create a new event card with the form values
    var eventCard = `
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">${title}</h5>
          <p class="card-text">Start Date: ${startDate}</p>
          <p class="card-text">End Date: ${endDate}</p>
          <p class="card-text">Start Time: ${startTime}</p>
          <p class="card-text">End Time: ${endTime}</p>
          <p class="card-text">Location: ${location}</p>
          <p class="card-text">Description: ${description}</p>
          <p class="card-text">Require Attendance: ${requireAttendance}</p>
        </div>
      </div>
    `;

    // Add the event card to the event list
    $('#event-cards').append(eventCard);

    // Reset the form values
    $('#event-form')[0].reset();
    $('#require-attendance').prop('checked', false);
    $('#attendance-options').hide();

    // Close the modal
    $('#event-modal').modal('hide');
  });

  // Event handler for "Close" button in the modal
  $('#event-modal').on('hidden.bs.modal', function () {
    // Reset the form values
    $('#event-form')[0].reset();
    $('#require-attendance').prop('checked', false);
    $('#attendance-options').hide();
  });

  // Event handler for "Cancel" button in the modal
  $('#event-modal').on('click', '.btn-secondary', function () {
    // Close the modal
    $('#event-modal').modal('hide');
  });
});

  </script>
</body>

</html>
