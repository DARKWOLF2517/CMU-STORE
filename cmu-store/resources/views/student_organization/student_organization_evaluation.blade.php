
@extends('layouts.student_organization_navigation_bar')
@section('main-content')

<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Evaluation</li>
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
                    <label for="sort-select"></label>
                    <select id="sort-select">
                        <option value="option1">1st Semester 2023-2024</option>
                        <option value="option2">2nd Semester 2022-2023</option>
                        <option value="option3">1st Semester 2022-2023</option>
                    </select>
                  </div>
                </div>
              </div>
              <h3><i class="fas fa-list"></i> Evaluation</h3>

              <div id="evaluation-container">
                <div class="evaluation-event-cards">
                    <div class="event-card">
                        <div class="event-date-container"><span class="event-date">August 31, 2023</span></div>
                        <div class="event-title">Event 1</div>
                        <div class="event-description">Total Responses: 120</div>
                        <a class="view-button" href="/student_organization_evaluation_results"><i class="fas fa-chevron-right button-icon"></i></a>
                      </div>
                      <div class="event-card">
                        <div class="event-date-container"><span class="event-date">September 10, 2023</span></div>
                        <div class="event-title">Event 2</div>
                        <div class="event-description">Total Responses: 120</div>
                        <button class="view-button"><i class="fas fa-chevron-right button-icon"></i></button>
                      </div>
                      <div class="event-card">
                        <div class="event-date-container"><span class="event-date">October 5, 2023</span></div>
                        <div class="event-title">Event 3</div>
                        <div class="event-description">Total Responses: 120</div>
                        <button class="view-button"><i class="fas fa-chevron-right button-icon"></i></button>
                      </div>
                      <div class="event-card">
                        <div class="event-date-container"><span class="event-date">October 5, 2023</span></div>
                        <div class="event-title">Event 3</div>
                        <div class="event-description">Total Responses: 120</div>
                        <button class="view-button"><i class="fas fa-chevron-right button-icon"></i></button>
                      </div>
                      <!-- Add more event cards here -->
                    </div>
                </div>

        </div>
        </div>

    </div>
    </div>

@endsection
