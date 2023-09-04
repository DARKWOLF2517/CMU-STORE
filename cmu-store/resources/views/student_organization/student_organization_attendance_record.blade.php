
@extends('layouts.student_organization_navigation_bar')
@section('main-content')

<div class="content">

    <div class="container breadcrumb">
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

        <div class="row head-container">
            <div class="col-md-6">
              <div class="input-group search-bar">
                <input type="text" class="form-control rounded-start" placeholder="Search Student" aria-label="Search"
                  aria-describedby="search-icon">
                <button class="btn btn-primary rounded-end" type="button" id="search-icon">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </div>
            <div class="col-md-3">
              <div class="d-flex justify-content-end">
                <select class="form-select custom-select-width">
                  <option selected>Sort by</option>
                  <option>Alphabetical Order</option>
                  <option>Year Level</option>
                </select>
              </div>
            </div>
          </div>
        <h3>Attendance Record</h3>
        <h4 id="Eventtitle"> Event: </h4>
        <p>Date: </p>
        <div class="scroll-pane">
          <table id="accountabilities-table">
            <thead>
                <tr>
                  <th>Student ID number</th>
                  <th>Name</th>
                  <th>Time In </th>
                  <th>Time out</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>2023-05-01</td>
                  <td>John Smith</td>
                  <td>7:00 AM</td>
                  <td>12:00 PM</td>
                  <td>Present</td>
                </tr>
              </tbody>
          </table>
        </div>
        <div class="pagination">
          <button id="first-page-button" disabled>&lt;&lt;</button>
          <button id="previous-page-button" disabled>&lt; Previous</button>
          <span id="pagination-numbers"></span>
          <button id="next-page-button">Next &gt;</button>
          <button id="last-page-button">&gt;&gt;</button>
        </div>
      </div>
    </div>

</div>
