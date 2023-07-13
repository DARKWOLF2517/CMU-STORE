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

            <div class="col-md-3">
              <div class="sort">
                <select class="form-select custom-select-width">
                  <option selected>Sort by</option>
                  <option>Alphabetical Order</option>
                  <option>Year Level</option>
                </select>
              </div>
            </div>

        <table class="table table-styled" >

          <thead>
            <tr>
              <th>Events</th>
              <th>Date</th>
              <th>Status</th>
              <th>Remarks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Event 1</td>
              <td>June 23, 2023</td>
              <td>Present</td>
              <td></td>
            </tr>
            <tr>
                <td>Event 3</td>
                <td>June 24, 2023</td>
                <td>Absent</td>
                <td></td>
              </tr>
            <!-- Add more rows for additional students -->
          </tbody>
        </table>
      </div>
</div>
