<template>
    
        <div id='calendar'></div>
    

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
import { Calendar } from 'fullcalendar';
import { Modal } from 'bootstrap'
export default {
    
    mounted(){
        this.showCalendar();
    },
    // data(){

    // },
    methods:{
        showCalendar(){ 
            document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                editable: true,
                eventSources: [
                    {
                    events: [
                        {
                        title: 'Meeting',
                        start: '2023-09-19T10:00:00',
                        end: '2023-09-19T12:00:00',
                        backgroundColor: '#007bff',
                        borderColor: '#007bff'
                        },
                        {
                        title: 'Appointment',
                        start: '2023-08-20T14:00:00',
                        end: '2023-08-20T15:30:00',
                        backgroundColor: '#28a745',
                        borderColor: '#28a745'
                        },
                        {
                        title: 'Deadline',
                        start: '2023-08-22T08:00:00',
                        end: '2023-08-22T18:00:00',
                        backgroundColor: '#dc3545',
                        borderColor: '#dc3545'
                        }
                        // Add more events with different colors as needed
                    ],
                    }
                ],

                eventClick: function(info) {
                    console.log('askjdfkjsd')
                    // Display event details in the modal
                    document.getElementById('eventTitle').textContent = info.event.title;
                    document.getElementById('eventStart').textContent = info.event.start;
                    document.getElementById('eventEnd').textContent = info.event.end;

                    // Show the modal
                    let modal = new Modal(document.getElementById('eventModal'));
                    modal.show();
                },
                });

            calendar.render();
        });
        },
    }
}
</script>
