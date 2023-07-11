<template>
    <!-- Event Modal -->
    <div class="modal fade" id="event-modal" tabindex="-1" aria-labelledby="event-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="event-modal-label">Create Event</h5>
                </div>
                <div class="modal-body">
                    <form @submit="sendData"  id="eventsForm"  >
                        @csrf
                        <div class="mb-3">
                            <label for="event-title" class="form-label">Event Name</label>
                            <input type="text" name="name" class="form-control" id="event-title" value="{{ old('name') }}">
                        </div>
                        <div class="mb-3">
                            <label for="event-start-date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" id="event-start-date" value="">
                        </div>
                            <div class="mb-3">
                            <label for="event-end-date" class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" id="event-end-date" value="">
                        </div>
                        <div class="mb-3">
                            <label for="event-start-time" class="form-label">Start Attendance</label>
                            <input type="time" name="start_attendance" class="form-control" id="event-start-time" value="">
                        </div>
                        <div class="mb-3">
                            <label for="event-end-time" class="form-label">End Attendance</label>
                            <input type="time" name="end_attendance" class="form-control" id="event-end-time" value="">
                        </div>
                        <div class="mb-3">
                            <label for="event-location" class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" id="event-location" value="">
                        </div>
                        <div class="mb-3">
                                <label for="event-description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="event-description" rows="3"></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="require-attendance" name="require_attendance" value="1">
                            <label class="form-check-label" for="require-attendance">
                                Require Attendance
                            </label>
                        </div>
                        <input type="hidden" name="org_id" value="1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="save-event-button">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default{
        props: ['target_route', 'method'],
        methods: {
            sendData() {
                fetch(this.target_route, {
                    method: this.method,
                    headers: {
                        //TYPE OF DATA THAT THE SERVER SHOULD RESPOND
                        "Content-Type":"application/json"
                    }
                }).then( (response) => {
                    response.json().then((data) => {
                        data.forEach(element => {
                            console.log(element);
                            // console.log(element[])
                            element["start_date"] = convertDate(element["start_date"]);
                            element["end_date"] = convertDate(element["end_date"]);
                        });
                        this.events = data;
                    })
                })
            },
        },
    }
</script>
