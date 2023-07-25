<template>
    <div class="card mb-3" v-for="event in this.events" :id="event.event_id">
        <div class="card-body">
                <h6 class="card-title">Event Name: <strong>{{ event["name"] }}</strong></h6>
                <h6 class="card-subtitle mb-2 text-muted">Scheduled Date: {{ event["start_date"] }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Scheduled Time: {{ event["start_attendance"] }} </h6>
                <h6 class="card-text">Location: {{ event["location"] }} </h6>
                <h6 class="card-text">Description: {{ event["description"] }} </h6>
                <div class="card-actions">
                    <button class="ellipsis-button"   type="button" @click="editEvent(event.event_id)"> <i class="bi bi-pencil-square"></i></button>
                    <button class="ellipsis-button"  @click="this.id = event.event_id "  data-bs-toggle="modal" data-bs-target="#deleteConfirmation" type="button"> <i class="bi bi-trash"></i></button>
                </div>
        </div>
    </div>


        <!-- Delete confirmation-->
    <div class="modal fade" id="deleteConfirmation" tabindex="-1" aria-labelledby="startAttendanceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete Events?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" @click="deleteEvent()">Start</button>
            </div>
            </div>
        </div>
    </div>
</template>

<script>

import {convertDate} from "../Functions/DateConverter.js";

export default {
    props: ['target_route']  ,
    data() { 
        return {
            events: [],
            id: 0,
            
        }
    },
    created() {
        this.fetchData();
        console.log("mounted")
    },
    methods: {
        fetchData() {
            // document.getElementById("event-spinner").show();
            fetch(this.target_route, {
                method: "GET",
                headers: {
                    //TYPE OF DATA THAT THE SERVER SHOULD RESPOND
                    "Content-Type":"application/json"
                }
            }).then( (response) => {
                document.getElementById("event-spinner").classList.add("hidden");
                response.json().then((data) => {
                    data.forEach(element => {
                        // console.log(element);
                        // console.log(element[])
                        element["start_date"] = convertDate(element["start_date"]);
                        element["end_date"] = convertDate(element["end_date"]);

                    });
                    this.events = data;
                })
            })
        },
        deleteEvent() {
            console.log(this.id);
            axios.delete(`/events/${this.id}`)
                    .then(response => {
                        location.reload();
                    })
                    .catch(error => {
                        if (error.response && error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        }
                        alert(error)
                        
            });
        },
        editEvent(id) {
            //Show modal here
        }
    }
}
</script>