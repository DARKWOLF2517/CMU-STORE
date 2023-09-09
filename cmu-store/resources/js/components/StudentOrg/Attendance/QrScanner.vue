<template>
<div>


        <div id="reader"></div>
        <div id="result"></div>

        <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="table-container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                    </tr>
                    <tr v-for="attendances in this.attendance" :id="attendances.user_id">
                        <td> {{  attendances["user_id"] }}</td>
                    </tr> 
                    </thead>
                    <tbody>
                    <tr v-for="(item, index) in this.temporary" :key="index">
                        <td>{{ item.ID }}</td>
                        <td>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            </div>
            <form @submit="this.submit"  id="eventsForm"  >
                        <div class="mb-3">
                            <label for="event-title" class="form-label">ID number</label>
                            <input type="text" name="id_number" class="form-control" id="event-title" v-model="formData.user_id" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="save-event-button">Save</button>
                        </div>
                    </form>

    
</div>
</template>

<script>


import { QrcodeStream } from 'vue-qrcode-reader'
import {Html5QrcodeScanner} from "html5-qrcode";
import {Html5Qrcode} from "html5-qrcode";
export default {
components: { QrcodeStream },
mounted() {
    this.startQrReading();
    this.fetchData();
},
data() {
    return {
        submit : this.submitForm,
        attendance: [],
        formData:{
            user_id:'',
            org_id: '1'
        },
    }
},

methods: {
    startQrReading(){
        const scanner = new Html5QrcodeScanner('reader', { 
        // Scanner will be initialized in DOM inside element with id of 'reader'
        qrbox: {
            width: 250,
            height: 250,
        },  // Sets dimensions of scanning box (set relative to reader element width)
        fps: 20, // Frames per second to attempt a scan
    });
        scanner.render(this.success, this.error);
        // Starts scanner
    },
    success(result){
        this.formData.user_id = result;
        this.submitForm();
    },
    error(err) {
        // console.error(err);
        // Prints any errors to the console
    },
    fetchData(){
        axios.get('/attendance/show')
            .then(response => {
                this.attendance = response.data
            })
            .catch(error => {
                
            });

    },
    submitForm(){
        //get the repeating data using id number of the student 
        axios.get(`/attendance_repetition/${this.formData.user_id}`)
            .then(response => {
                if (response.data == 1){

                }
                else{
                     //add attendance
                    axios.post('/attendance', this.formData)
                        .then(response => {
                                console.log(response.data.message);
                                // alert(response.data.message);
                                
                        })
                        .catch(error => {
                            alert(error);
                            // alert(this.formData.id_number);
                        });
                }

            })
            .catch(error => {
                alert(error);
                // alert(this.formData.id_number);
            });
            window.location.reload();

    
    }
}
}
</script>

<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    #reader {
        width: 600px;
    }
    #result {
        text-align: center;
        font-size: 1.5rem;
    }
    
    .table thead th {
        background-color: #007bff;
        color: white;
        margin-top: 20px;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #ffffff;
    }


    .table td, .table th {
        padding: 10px;
        text-align: center;
    }

</style>
