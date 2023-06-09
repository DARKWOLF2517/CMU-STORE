
@extends('layouts.student_navigation_bar')

@section('main-content')

    <div class="content">
        <div class="container breadcrumb">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/homepage">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
              </ol>
            </nav>
        </div>
    <div class="container event-container" id="tablecontainer">
        <div class="row head-container">
          <div class="col-md-6">
            <div class="input-group search-bar">
              <input type="text" class="form-control rounded-start" placeholder="Search Events" aria-label="Search"
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
                <option>1st semester events</option>
                <option>2nd semester events</option>
              </select>
            </div>
          </div>
        </div>

      <div class="container event-list">
        <div class="row">
          <div class="col-md-12">
            <div class="add-event-button">
              <h2>Events</h2>
            </div>
            <div class="event-list-scroll" id="event-cards">
              <div class="spinner-border" id="event-spinner" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>
              <event-card
                target_route="{{ route('get-events') }}"
              >
              </event-card>
            </div>
          </div>
        </div>
      </div>
