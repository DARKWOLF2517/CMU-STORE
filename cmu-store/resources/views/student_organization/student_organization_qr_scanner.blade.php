{{-- <!DOCTYPE html>
<html>
<head>
  <title>QR Code Scanner</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 400px;
      height: 300px;
      margin: 20px auto;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    #video {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    #qrData {
      text-align: center;
      margin-top: 20px;
      font-size: 18px;
      font-weight: bold;
    }

    /* Style for the pop-up box */
    #popupBox {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    #popupContent {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    #popupData {
      font-size: 16px;
      font-weight: normal;
      text-align: center;
    }

    button {
      margin-top: 10px;
      padding: 8px 16px;
      border: none;
      background-color: #4CAF50;
      color: #fff;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <video id="video" autoplay></video>
  </div>
  <h1>QR Code Scanner</h1>
  <div id="qrData"></div>

  <!-- Add a pop-up box for displaying the QR code data -->
  <div id="popupBox" style="display: none;">
    <div id="popupContent">
      <h2>Scanned QR Code Data:</h2>
      <p id="popupData"></p>
      <button onclick="closePopup()">Close</button>
    </div>
  </div>

  <script src="https://rawgit.com/LazarSoft/jsqrcode/master/src/qr_packed.js"></script>
  <script>
    navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
      .then(function(stream) {
        var video = document.getElementById("video");
        video.srcObject = stream;
        video.play();
      })
      .catch(function(err) {
        console.error("Error accessing the camera.", err);
      });

    // Function to show the QR code data in the pop-up box
    function showQRData(data) {
      var popupDataElement = document.getElementById("popupData");
      popupDataElement.innerText = data;

      var popupBox = document.getElementById("popupBox");
      popupBox.style.display = "flex"; // Show the pop-up box
    }

    // Function to close the pop-up box
    function closePopup() {
      var popupBox = document.getElementById("popupBox");
      popupBox.style.display = "none"; // Hide the pop-up box
    }

    // Modify the code section where the QR code is detected
    function scanQRCode() {
      var video = document.getElementById("video");
      var canvas = document.createElement("canvas");
      var context = canvas.getContext("2d");
      canvas.width = video.videoWidth;
      canvas.height = video.videoHeight;
      context.drawImage(video, 0, 0, canvas.width, canvas.height);

      var imageData = context.getImageData(0, 0, canvas.width, canvas.height);
      var code = jsQR(imageData.data, imageData.width, imageData.height);

      if (code) {
        var qrDataElement = document.getElementById("qrData");
        qrDataElement.innerText = "QR Code Data: " + code.data;

        // Show the QR code data in the pop-up box
        showQRData(code.data);
      }

      requestAnimationFrame(scanQRCode);
    }

    scanQRCode();
  </script>
</body>
</html>


{{QrCode::generate('ss')}} --}}


 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/js/app.js')
  <title>Document</title>
</head>
<body>
  <div id="app"> 
    <qr-scanner></qr-scanner>
 </div>
</body>
</html>



{{-- 
@extends('layouts.student_organization_navigation_bar')

@section('main-content')

@endsection --}}
