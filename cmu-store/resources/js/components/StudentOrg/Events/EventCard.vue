<template>
<div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/org_dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
        </div>
        <div class="mt-2">
            <div class="row head-container">
                <div class="col-md-6 col-sm-12">
                    <div class="input-container">
                        <i class="fa fa-search"></i>
                        <input type="text" placeholder="Search Event">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="display: flex; align-items: center; justify-content: flex-end;">
                    <button class="btn sort-btn"><i class="bi bi-sort-up"></i></button>
                    <div class="select-dropdown">
                        <select id="sort-select" class="form-control" style="text-align: center;">
                            <option value="">Select Semester</option>
                            <option value="option1">1st Semester 2023-2024</option>
                            <option value="option2">2nd Semester 2022-2023</option>
                            <option value="option3">1st Semester 2022-2023</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="event-buttons d-flex justify-content-end">
            <div class="btn-group" role="group">
            <button class="btn me-2" id="add-event-button" data-bs-toggle="modal" data-bs-target="#event-modal" @click="this.initialData()">
                <i class="bi bi-calendar-event"></i> Add Event
            </button>
            </div>
        </div>
        <h3> <i class="fas fa-list mt-2"></i>  Events</h3>
        <div class="event-list">
            <div class="col">

                <div class="event-list-scroll" id="event-cards">
                    <div class="spinner-border" id="event-spinner" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                        <div class="event-announcement-list ">
                            <div class="card mb-3" v-for="event in this.events" :id="event.event_id" >
                                <div class="card-body">
                                        <h5 class="card-title">Event Name: <strong>{{ event["name"] }}</strong></h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Scheduled Date: {{ event["start_date"] }}</h6>
                                        <h6 class="card-subtitle mb-2 text-muted">Scheduled Time: {{ event["start_attendance"] }} </h6>
                                        <h6 class="card-text">Location: {{ event["location"] }} </h6>
                                        <h6 class="card-text">Description: {{ event["description"] }} </h6>
                                        <div class="card-actions">
                                            <button class="ellipsis-button" @click=" FetchUpdateData(event.event_id) "   type="button"  data-bs-toggle="modal" data-bs-target="#event-modal" > <i class="bi bi-pencil-square"></i></button>
                                            <!-- <button class="ellipsis-button"  @click="deleteEvent(event.event_id)"  type="button"> <i class="bi bi-trash"></i></button> -->
                                            <button class="ellipsis-button" @click="this.id = event.event_id"  data-bs-toggle="modal" data-bs-target="#deleteConfirmation" type="button"> <i class="bi bi-trash"></i></button>
                                        </div>
                                </div>
                            </div>
                        </div>

                    <!-- Delete confirmation -->
                    <div class="modal fade " id="deleteConfirmation" tabindex="-1" aria-labelledby="deleteConfirmationLabel" aria-hidden="true" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><b>Are you sure you want to delete this event?</b></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" @click="deleteEvent()">Delete</button>
                            </div>
                            </div>
                        </div>
                    </div>

                        <!-- Event Modal -->
                    <div class="modal fade" id="event-modal" tabindex="-1" aria-labelledby="event-modal-label" aria-hidden="true" >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="event-modal-label">Create Event</h5>
                                </div>
                                <div class="modal-body">
                                    <form @submit="this.submit"  id="eventsForm"  >
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
                                        <div class="mb-3">
                                            <input class="form-check-input" type="checkbox" name="require_attendance" id="require-attendance" v-model="formData.require_attendance" true-value="1" false-value="0" @click="checkboxClick()">
                                            <label for="require-attendance" class="form-label">Require Attendance</label>
                                        </div>

                                        <div id="attendance-container" style="display: none;">
                                            <div class="mb-3">
                                                <label for="event-attendance" class="form-label">Number of Attendance</label>
                                                <select name="attendance_count" class="form-select" id="event-attendance" v-model="formData.attendance_count">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            </div>
                                        </div>
                                        <!-- <input type="hidden" name="org_id"  v-model="formData.org_id"> -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="save-event-button">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>


</template>

<script>

import {convertDate} from "../Functions/DateConverter.js";
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';

export default {
    props: ['organization_id'] ,
    data() {
        return {
            submit : this.sendData,
            events: [],
            id: 0,
            formData:{
                    name:'',
                    start_date:'',
                    end_date:'',
                    start_attendance:'',
                    end_attendance:'',
                    location:'',
                    description:'',
                    require_attendance: '',
                    attendance_count: '',
                    org_id: '',

                },
                errors: {},
        }
    },
    created() {
        this.fetchData();

    },
    methods: {
        checkboxClick(){
            document.getElementById('require-attendance').addEventListener('change', function() {
                const attendanceContainer = document.getElementById('attendance-container');
                if (this.checked) {
                    attendanceContainer.style.display = 'block';
                } else {
                    attendanceContainer.style.display = 'none';
                }
            });
        },

        sendData() {
            // alert(this.formData.org_id);
                axios.post('/events', this.formData)
                    .then(response => {
                        location.reload();
                    })
                    .catch(error => {
                        alert(error)

                });
        },
        // fetchData() {
        //     // document.getElementById("event-spinner").show();
        //     fetch(`/events/show/${this.org_id}`, {
        //         method: "GET",
        //         headers: {
        //             //TYPE OF DATA THAT THE SERVER SHOULD RESPOND
        //             "Content-Type":"application/json"
        //         }
        //     }).then( (response) => {
        //         console.log(response);
        //         // document.getElementById("event-spinner").classList.add("hidden");
        //         // response.json().then((data) => {
        //         //     data.forEach(element => {
        //         //         // console.log(element);
        //         //         // console.log(element[])
        //         //         element["start_date"] = convertDate(element["start_date"]);
        //         //         element["end_date"] = convertDate(element["end_date"]);

        //         //     });
        //         //     this.events = data;
        //         //     console.log(data)
        //         // })
        //     })
        // },
        fetchData(){
                axios.get(`/events/show/${this.organization_id}`)
                .then(response => {
                    document.getElementById("event-spinner").classList.add("hidden");
                    // console.log(response.data)
                    this.events = response.data;
                })
                .catch(error => {
                    console.log('error')
                });

            },

        FetchUpdateData(id){
            axios.get(`edit/events/${id}`)
                .then(response => {
                    this.formData = response.data
                    this.id = id
                    this.submit = this.UpdateData
                    // console.log(this.submit)
                    // console.log(id)
                    // console.log(response.data)
                })
                .catch(error => {

                });
        },
        UpdateData() {
            axios.put(`/events/${this.id}`, this.formData)
                .then(response => {
                // The update was successful, handle any additional logic here
                // console.log('User updated successfully:', response.data);
                    this.showSucces(response.message.success);
                })
                .catch(error => {
                    // console.error('Error updating user:', error);
                    alert('Error updating user:', error)
                });
        },
        deleteEvent() {
            console.log(this.id);
            axios.delete(`/events/${this.id}`)
                    .then(response => {
                        // const closeButton = $('.modal button[data-bs-dismiss="modal"]');
                        // closeButton.trigger('click');
                        this.showSucces(response.data.message);
                        this.fetchData();

                    })
                    .catch(error => {
                        if (error.response && error.response.status === 422) {
                            this.errors = error.response.data.errors;
                        }
                        alert(error)

            });

        },
        showSucces(message){
            toast.info(message),{
                autoClose: 100,
            }
        },
        initialData(){
            this.formData = {
                    name:'',
                    start_date:'',
                    end_date:'',
                    start_attendance:'',
                    end_attendance:'',
                    location:'',
                    description:'',
                    require_attendance: '',
                    org_id: this.organization_id,

                }
        },
    }
}
</script>
