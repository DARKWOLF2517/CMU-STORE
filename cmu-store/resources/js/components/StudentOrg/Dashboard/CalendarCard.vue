<template>
    <FullCalendar 
    :options="calendarOptions"
    :events ="events" 
    @eventClick="eventClick"   />    
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
</template>

<script>
import FullCalendar from '@fullcalendar/vue3'
import dayGridPlugin from '@fullcalendar/daygrid'
import interactionPlugin from '@fullcalendar/interaction'
import { Modal } from 'bootstrap'

export default {
components: {
    FullCalendar // make the <FullCalendar> tag available
},
data() {
    return {
        events: [],

        calendarOptions: {
            plugins: [ dayGridPlugin, interactionPlugin ],
            initialView: 'dayGridMonth',
            eventClick: this.eventClick,
            events: [

                { title: 'event 1', date: '2023-09-01' },
                { title: 'event 2', date: '2023-09-01' }
                ],
        },

    }
},
methods: {
    fetchData(){
            axios.get('/events/show')
                .then(response => {
                    this.events = data; 

                })
                .catch(error => {

                });

    },
    eventClick(info){
        console.log('askjdfkjsd')
        // Display event details in the modal
        document.getElementById('eventTitle').textContent = info.event.title;
        document.getElementById('eventStart').textContent = info.event.start;
        document.getElementById('eventEnd').textContent = info.event.end;

        // Show the modal
        let modal = new Modal(document.getElementById('eventModal'));
        modal.show();
    }
}
}
</script>
