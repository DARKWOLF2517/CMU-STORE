<template>
<div>

    <main>
        <div id="reader"></div>
        <div id="result"></div>
    </main>
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
},
data() {
    return {
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
        document.getElementById('result').innerHTML = `
        <h2>Success!</h2>
        <p><a href="${result}">${result}</a></p>
        `;
        // Prints result as a link inside result element

        // scanner.clear();
        // Clears scanning instance

        // document.getElementById('reader').remove();
        // Removes reader element from DOM since no longer needed
    },
    error(err) {
        // console.error(err);
        // Prints any errors to the console
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
</style>