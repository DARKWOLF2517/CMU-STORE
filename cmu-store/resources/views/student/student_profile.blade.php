@extends('layouts.student_navigation_bar')

@section('main-content')
<div class="content">
    <div class="container md-6 mt-4">
        <div class="row">
          <!-- Student Profile Container -->
          <div class="col-md-3">
            <div class="card profile-card"> <!-- Add the "profile-card" class here -->
              <div class="card-body text-center">
                {{QrCode::generate('2020400')}}
                <!-- Student's Name -->
                <h3 class="mt-3">Taylor Swift</h3>
                <!-- Student ID -->
                <p>Student ID: 2020301072</p>
              </div>
            </div>
          </div>
          <!-- Additional Information Container -->
          <div class="col-md-7 mt-4 mt-md-0">
            <div class="card">
              <div class="card-header"> 
                <h3>Student Information</h3>
              </div>
              
              <div class="card-body">
                <!-- Year Level -->
                <h6>Year Level</h6>
                <p>Year 3</p>
                <!-- College Department -->
                <h6>College Department</h6>
                <p>Department of Computer Science</p>
                <!-- Student Organizations -->
                <h6>Student Organizations</h6>
                <ul>
                  <li>Computer Science Club</li>
                  <li>Student Council</li>
                  <li>Volunteer Club</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection