@extends('layouts.student_organization_navigation_bar')
@section('main-content')

<div class="content">
    <div class="container">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/org_dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Student Organization</li>
                <li class="breadcrumb-item"><a href="/student_organization_evaluation">Evaluation</a></li>
                <li class="breadcrumb-item active" aria-current="page">Evaluation Results</li>
              </ol>
            </nav>
        </div>
        <div class="student-buttons d-flex justify-content-end mt-2">
            <div class="btn-group" role="group">
                <button type="button" class="btn me-2" data-bs-toggle="modal" data-bs-target="#announcementModal">
                    <i class="fas fa-bullhorn"></i>  Make Announcement
                </button>
            </div>
        </div>
    </div>
    <div class="container" id="containers">
        <div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="announcementModalLabel">Create Announcement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="form-group">
                        <label for="announcementTitle">Announcement Title</label>
                        <input type="text" class="form-control" id="announcementTitle">
                    </div>
                    <div class="form-group">
                        <label for="announcementDescription">Description</label>
                        <textarea class="form-control" id="announcementDescription" rows="3"></textarea>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveAnnouncement">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
