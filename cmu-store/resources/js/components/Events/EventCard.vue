<template>
    <div class="card mb-3" v-for="event in this.events" :id="event.event_id">
        <div class="card-body">
                <h6 class="card-title">Event Name: <strong>{{ event["name"] }}</strong></h6>
                <h6 class="card-subtitle mb-2 text-muted">Scheduled Date: {{ event["start_date"] }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Scheduled Time: {{ event["start_attendance"] }} </h6>
                <h6 class="card-text">Location: {{ event["location"] }} </h6>
                <h6 class="card-text">Description: {{ event["description"] }} </h6>
                <div class="card-actions">
                    <button class="ellipsis-button" type="button" @click="editEvent(event.event_id)"> <i class="bi bi-pencil-square"></i></button>
                    <button class="ellipsis-button" type="button" @click="deleteEvent(event.event_id)"> <i class="bi bi-trash"></i></button>
                </div>
        </div>
    </div>
</template>

<script>

import {convertDate} from "../Functions/DateConverter.js";

export default {
    props: ['target_route'],
    data() { 
        return {
            events: []
        }
    },
    created() {
        this.fetchData();  
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
                        console.log(element);
                        // console.log(element[])
                        element["start_date"] = convertDate(element["start_date"]);
                        element["end_date"] = convertDate(element["end_date"]);
                        element["start_attendance"] = convertTime(element["start_attendance"]);
                        element["end_attendance"] = convertTime(element["end_attendance"]);
                    });
                    this.events = data;
                })
            })
        },
        deleteEvent(id) {
            console.log(id);
            //Send fetch delete type here.
        },
        editEvent(id) {
            //Show modal here
        }
    }
}
</script>