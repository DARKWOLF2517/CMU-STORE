
@extends('layouts.student_organization_navigation_bar')
{{-- @section('custom-style')
  <link href="/custom_css/SOEvents.css" rel="stylesheet">
@endsection --}}
<link href="/custom_css/SOEvents.css" rel="stylesheet">
@section('main-content')

<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/org_dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
              </ol>
            </nav>
        </div>
    <div class="container event-container" id="tablecontainer">
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

    <div class="container event-list" id="tablecontainer">
        <div class="col">
            <div class="event-list-scroll" id="event-cards">
                <div class="spinner-border" id="event-spinner" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <event-card
                organization_id = {{Session::get('org_id')}}>
                </event-card>
            </div>
            </div>
        </div>
    </div>

    @endsection

    @section('custom-script')
      <script>
      // $(document).ready(function () {
      //   $('#add-event-button').click(function () {
      //     $('#event-modal').modal('show');
      //   });
      // });
      </script>

    </div>

@endsection
