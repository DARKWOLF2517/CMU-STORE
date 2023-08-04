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
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/js/app.js')
  <title>Document</title>
  <style>


    /* Custom style for the table header */
    .table thead th {
      background-color: #007bff;
      color: white;
    }

    /* Custom style for alternating rows */
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #f2f2f2;
    }

    /* Custom style for table cells */
    .table td, .table th {
      padding: 12px;
      text-align: center;
    }

    /* Custom style for the table header on small screens */
    @media (max-width: 576px) {
      .table thead th {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
    <div class="top-nav">
        <a href="#" class="nav-link link-dark">
            <span class="nav-name">CMU-STORE-AMS</span>
        </a>

        </div>
    </div>
</div>
  <div id="app">

    <div style="width: 50%; margin: auto">
      <qr-scanner></qr-scanner>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>Year Level</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Taylor Swift</td>
            <td>3rd Year</td>
            <td>
              <button type="button" class="btn btn-info">Edit</button>
              <button type="button" class="btn btn-danger">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

 </div>
</body>
</html>



{{--
@extends('layouts.student_organization_navigation_bar')

@section('main-content')

@endsection --}}
