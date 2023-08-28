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
        attendance: [],
        Data: '',
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
        // console.log(result)
        this.Data = result;
        this.addData();
        console.log(this.Data)

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
    addData(){
        axios.post('/attendance/add', this.Data)
            .then(response => {
                    window.location.reload();
                
            })
            .catch(error => {
                
            });

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
