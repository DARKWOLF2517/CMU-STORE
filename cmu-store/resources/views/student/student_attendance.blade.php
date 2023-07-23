@extends('layouts.student_navigation_bar')


@section('main-content')

<div class="content">
    <div class="container breadcrumbs">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
            <li class="breadcrumb-item">Student Organization</li>
            <li class="breadcrumb-item"><a href="/student_organization_attendance">Attendance</a></li>
          </ol>
        </nav>
    </div>

    <div class="container" id="tablecontainer">

            <div class="col-md-3">
              <div class="sort">
                <select class="form-select custom-select-width">
                  <option selected>Sort by</option>
                  <option>1st semester events</option>
                  <option>2nd semester events</option>
                </select>
              </div>
            </div>

        {{-- <table class="table table-styled" >

          <thead>
            <tr>
              <th>Events</th>
              <th>Date</th>
              <th>Status</th>
              <th>Evaluation status</th>
              <th>Remarks</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Event 1</td>
              <td>June 23, 2023</td>
              <td>Present</td>
              <th>Complete</th>
              <td></td>
            </tr>
            <tr>
                <td>Event 3</td>
                <td>June 24, 2023</td>
                <td>Absent</td>
                <th><a  class="btn btn-warning" href ="/student_evaluationform">Evaluate Now</a></th>
                <td></td>
              </tr>

          </tbody>
        </table> --}}
        <student-attendance
        target_route="{{ route('get-events') }}"
        show = {{true}}
        >

        </student-attendance>
    </div>
</div>

@endsection
