<template>
<div>
    <p class="decode-result">
    Last result: <b>{{ result }}</b>
    </p>

    <qrcode-stream :paused="paused" @detect="onDetect" @camera-on="onCameraOn" @init="onInit" @camera-off="onCameraOff" @decode="onDecode" @error="onError" >
    <div v-show="showScanConfirmation" class="scan-confirmation">
        <img :src="('https://image.pngaaa.com/263/2709263-middle.png')" alt="Checkmark" width="128" />
    </div>
    </qrcode-stream>
</div>
</template>

<script>


import { QrcodeStream } from 'vue-qrcode-reader'

export default {
components: { QrcodeStream },

data() {
    return {
    paused: false,
    result: "1",
    showScanConfirmation: false
    }
},

methods: {
    onDecode(){
        console.log(this.result);
    },
    onCameraOn() {
    this.showScanConfirmation = false
    },

    onCameraOff() {
    this.showScanConfirmation = true
    },

    onError: console.error,

    async onDetect(detectedCodes) {
    console.log(this.result);
    this.result = JSON.stringify(
        detectedCodes.map(code => code.rawValue)
    )

    this.paused = true
    await this.timeout(500)
    this.paused = false
    },

    timeout(ms) {
    return new Promise((resolve) => {
        window.setTimeout(resolve, ms)
    })
    },

    // withBase

async onInit (promise) {
// show loading indicator

try {
    const { capabilities } = await promise

    // successfully initialized
} catch (error) {
    if (error.name === 'NotAllowedError') {
    // user denied camera access permisson
    } else if (error.name === 'NotFoundError') {
    // no suitable camera device installed
    } else if (error.name === 'NotSupportedError') {
    // page is not served over HTTPS (or localhost)
    } else if (error.name === 'NotReadableError') {
    // maybe camera is already in use
    } else if (error.name === 'OverconstrainedError') {
    // did you requested the front camera although there is none?
    } else if (error.name === 'StreamApiNotSupportedError') {
    // browser seems to be lacking features
    }
} finally {
    // hide loading indicator
}
}
}
}
</script>

<style scoped>
.scan-confirmation {
position: absolute;
width: 100%;
height: 100%;

background-color: rgba(255, 255, 255, 0.8);

display: flex;
flex-flow: row nowrap;
justify-content: center;
}
</style>