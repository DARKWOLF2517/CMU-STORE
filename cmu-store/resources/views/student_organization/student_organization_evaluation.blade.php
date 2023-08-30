
@extends('layouts.student_organization_navigation_bar')
@section('main-content')

<div class="content">

    <div class="container breadcrumb">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
            <li class="breadcrumb-item">Student Organization</li>
            <li class="breadcrumb-item active" aria-current="page">Evaluation</li>
          </ol>
        </nav>
    </div>
    <div id="evaluation-container">
        <div class="event-card">
          <div class="event-date-container"><span class="event-date">August 31, 2023</span></div>
          <div class="event-title">Event 1</div>
          <div class="event-description">Join us for an exciting event filled with fun and entertainment.</div>
          <a class="view-button" href="/student_organization_evaluation_results"><i class="fas fa-chevron-right button-icon"></i></a>
        </div>
        <div class="event-card">
          <div class="event-date-container"><span class="event-date">September 10, 2023</span></div>
          <div class="event-title">Event 2</div>
          <div class="event-description">A night to remember with live music, food, and games.</div>
          <button class="view-button"><i class="fas fa-chevron-right button-icon"></i></button>
        </div>
        <div class="event-card">
          <div class="event-date-container"><span class="event-date">October 5, 2023</span></div>
          <div class="event-title">Event 3</div>
          <div class="event-description">An educational event featuring industry experts and workshops.</div>
          <button class="view-button"><i class="fas fa-chevron-right button-icon"></i></button>
        </div>
        <!-- Add more event cards here -->
      </div>
</div>
@endsection
