@extends('layouts.student_navigation_bar')

@section('main-content')

<div class="content">
    <div class="container breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
            <li class="breadcrumb-item">Student Organization</li>
            <li class="breadcrumb-item"><a href="/student_organization_attendance">Attendance</a></li>
            <li class="breadcrumb-item active" aria-current="page">Attendance Record</li>
          </ol>
        </nav>
    </div>

    <div class="container" id="tablecontainer">

        <table class="table table-styled" >

          <thead>
            <tr>
              <th>Student ID</th>
              <th>Name</th>
              <th>Membership Fee Status</th>
              <th>Fines Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>12345</td>
              <td>John Doe</td>
              <td>Paid</td>
              <td>No fines</td>
            </tr>
          </tbody>
        </table>
      </div>
</div>
