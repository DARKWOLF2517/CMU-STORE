{{-- <!DOCTYPE html>
<html>
<head>
  <title>QR Code Reader</title>
</head>
<body>
  <h1>QR Code Reader</h1>
  <video id="camera" width="100%" height="auto" autoplay></video>
  <div id="output"></div>

  <script src="path/to/instascan.min.js"></script>
  <script>
    const video = document.getElementById('camera');
    const output = document.getElementById('output');

    // Show an alert to request permission before accessing the camera
    window.alert('This website would like to access your camera for scanning QR codes.');

    // Initialize the QR code scanner
    const scanner = new Instascan.Scanner({ video: video });

    scanner.addListener('scan', result => {
      output.textContent = `QR Code detected: ${result}`;
    });

    Instascan.Camera.getCameras()
      .then(cameras => {
        if (cameras.length > 0) {
          scanner.start(cameras[0]); // Use the rear camera by default
        } else {
          console.error('No cameras found.');
        }
      })
      .catch(error => {
        console.error('Error accessing the camera:', error);
      });
  </script>
</body>
</html>


{{QrCode::generate('ss')}} --}}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Add Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add Font Awesome CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link href="/custom_css/stylesheet.css" rel="stylesheet">
<link href="/custom_css/qrscanner.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
@vite('resources/js/app.js')
<title>Document</title>
</head>
<body>
  <!-- Bootstrap Top Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand center link-light " href="#">CMU-STORE-AMS</a>
    <div class="collapse navbar-collapse" id="navbarNav">
    </div>
</nav>

  {{-- <div id="app"> --}}
    <div id="app" class="container ">
        {{-- <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="container-with-buttons d-flex justify-content-end">
                <button class="btn btn-primary">Save</button>
                <button class="btn btn-secondary"  style="margin-left: 10px;">Cancel</button>
              </div>
            </div>
          </div> --}}

          <div class="row justify-content-center">
            <div class="col-md-4 qr-scanner-container mx-4 mb-2
            border-top border-5 border-success border-bottom-0 py-3">
                <h4><i class="bi bi-camera-video "></i>QR Scanner</h4>
                <qr-scanner></qr-scanner>
            </div>
            <div class="col-md-4 qr-scanned-container
            border-top border-5 border-warning border-bottom-0 py-3">
                <h4>Scanned Data</h4>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>


{{--
@extends('layouts.student_organization_navigation_bar')

@section('main-content')

@endsection --}}
