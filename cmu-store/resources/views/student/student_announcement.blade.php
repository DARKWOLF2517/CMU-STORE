
@extends('layouts.student_navigation_bar')
@section('main-content')
<link href="/custom_css/evaluation.css" rel="stylesheet">
<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/login/org_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item">Student Organization</li>
                    <li class="breadcrumb-item active" aria-current="page">Evaluation</li>
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
            <div class="mt-4">
                <h3><i class="fas fa-list"></i> Events</h3>
            </div>

            <div id="evaluation-container">
                <div class="evaluation-event-cards">
                    <div class="event-card">
                        <div class="event-title">Palaro</div>
                        <small>Schedule Date: September 23, 2023 - September 23, 2023</small>
                        <div class="event-description">Good day mga Ka IT! We will have our palaro this</div>
                        <button type="button" class="btn btn-primary" href = "">View</button>
                    </div>
                    
                </div>
        </div>
        </div>

    </div>
    </div>

@endsection
