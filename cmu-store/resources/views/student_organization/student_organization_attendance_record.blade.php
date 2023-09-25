
@extends('layouts.student_organization_navigation_bar')
@section('main-content')

<div class="content">
    <div class="container">
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

            <div class="row head-container">
                <div class="col-md-6 col-sm-12">
                    <div class="input-container">
                        <i class="fa fa-search"></i>
                        <input type="text" placeholder="Search Event">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12" style="display: flex; align-items: center; justify-content: flex-end;">
                    <button class="btn sort-btn"><i class="bi bi-sort-up"></i></button>
                    <div class="select-dropdown">
                        <select id="sort-select" class="form-control" style="text-align: center;">
                            <option value="">Select Semester</option>
                            <option value="option1">1st Semester 2023-2024</option>
                            <option value="option2">2nd Semester 2022-2023</option>
                            <option value="option3">1st Semester 2022-2023</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
              <div class="container student-buttons d-flex justify-content-end" id="containers">
                <div class="btn-group" role="group">
                    <button class="btn me-2" id="add-student-list-button">
                        <i class="fas fa-print"></i> Print Recorded Attendance
                    </button>
                    <button class="btn me-2" id="add-student-button">
                        <i class="fas fa-download"></i> Download Recorded Attendance
                    </button>
                </div>
            </div>
            <hr>
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
    </div>
