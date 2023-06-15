@extends('Layouts.main')


@section('main-content')

<title> Events</title>

<div class="content">
    <div class="head-container">
      <button class="btn btn-primary btn-sm mt-3" id="addEventBtn" data-bs-toggle="modal" data-bs-target="#eventModal">
        <i class="fas fa-plus"></i> Add Event
      </button>
    </div>
  </div>

  <!-- Event Modal -->
  <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eventModalLabel">Add Event</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="eventName" class="form-label">Name of Event</label>
              <input type="text" class="form-control" id="eventName">
            </div>
            <div class="mb-3">
              <label for="eventDate" class="form-label">Date of Event</label>
              <input type="date" class="form-control" id="eventDate">
            </div>
            <div class="mb-3">
              <label for="eventTime" class="form-label">Time of Event</label>
              <input type="time" class="form-control" id="eventTime">
            </div>
            <div class="mb-3">
              <label for="eventLocation" class="form-label">Location of Event</label>
              <input type="text" class="form-control" id="eventLocation">
            </div>
            <div class="mb-3">
              <label for="eventDescription" class="form-label">Description of Event</label>
              <textarea class="form-control" id="eventDescription" rows="3"></textarea>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="attendanceCheckbox">
              <label class="form-check-label" for="attendanceCheckbox">Require attendance</label>
            </div>
            <div id="attendanceOptions" style="display: none;">
              <div class="mb-3">
                <label class="form-label">Require attendance to:</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="All Students">
                <label class="form-check-label">All Students</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="First Year">
                <label class="form-check-label">First Year</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Second Year">
                <label class="form-check-label">Second Year</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Third Year">
                <label class="form-check-label">Third Year</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Fourth Year">
                <label class="form-check-label">Fourth Year</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Fifth Year">
                <label class="form-check-label">Fifth Year</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Extendee">
                <label class="form-check-label">Extendee</label>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Event</button>
        </div>
      </div>
    </div>
  </div>
