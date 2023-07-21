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
                        <div class="mb-3">
                            <label for="event-title" class="form-label">Event Name</label>
                            <input type="text" name="name" class="form-control" id="event-title" v-model="formData.name" required>
                        </div>
                        <div class="mb-3">
                            <label for="event-start-date" class="form-label">Start Date</label>
                            <input type="date" name="start_date" class="form-control" id="event-start-date" v-model="formData.start_date" required>
                        </div>
                            <div class="mb-3">
                            <label for="event-end-date" class="form-label">End Date</label>
                            <input type="date" name="end_date" class="form-control" id="event-end-date" v-model="formData.end_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="event-start-time" class="form-label">Start Attendance</label>
                            <input type="time" name="start_attendance" class="form-control" id="event-start-time" v-model="formData.start_attendance" required>
                        </div>
                        <div class="mb-3">
                            <label for="event-end-time" class="form-label">End Attendance</label>
                            <input type="time" name="end_attendance" class="form-control" id="event-end-time" v-model="formData.end_attendance" required>
                        </div>
                        <div class="mb-3">
                            <label for="event-location" class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" id="event-location" v-model="formData.location" required>
                        </div>
                        <div class="mb-3">
                                <label for="event-description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="event-description" rows="3" v-model="formData.description" required></textarea>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="require_attendance" id="require-attendance" v-model="formData.require_attendance" true-value="1" false-value="0" >
                            <label class="form-check-label" for="require-attendance">
                                Require Attendance
                            </label>
                        </div>
                        <input type="hidden" name="org_id"  v-model="formData.org_id">
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
        data() {
            return {
                formData:{
                    name:'',
                    start_date:'',
                    end_date:'',
                    start_attendance:'',
                    end_attendance:'',
                    location:'',
                    description:'',
                    require_attendance: '',
                    org_id: '1',
                    
                },
                errors: {},
            }
        },
        methods: {
            sendData() {
                axios.post(this.target_route, this.formData)
                    .then(response => {
                
                    })
                    .catch(error => {
                        if (error.response && error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        }
                        console.log(this.formData)
                        alert('error    ')
                        
    });
            },
        },
        mounted() {
            // console.log('mounted-add event')
            // console.log(this.target_route)
            // console.log(this.method)
        },
    }
</script>