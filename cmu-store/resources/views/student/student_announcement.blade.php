@extends('layouts.student_navigation_bar')
@section('main-content')
<link href="/custom_css/studentAnnouncement.css" rel="stylesheet">
<div class="content">
    <div class="container mt-4">
        <div class="container breadcrumbs">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/login/student_dashboard">Dashboard</a></li>
                <li class="breadcrumb-item">Student</li>
                <li class="breadcrumb-item">CSCo</li>
                <li class="breadcrumb-item active" aria-current="page">Announcement</li>
                </ol>
            </nav>
        </div>
        <h4> <i class="fas fa-list mt-2"></i> Announcements</h4>
        <div id="announcement-cards">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="organization-posted">CSCo</h5>
                            <p class="post-description flex-fill">We are now accepting college fee start august 28, 2023</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#announcementModal1">Read More</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="organization-posted">CSCo</h5>
                            <p class="post-description flex-fill">We are now accepting college fee start august 28, 2023</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#announcementModal1">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="organization-posted">CSCo</h5>
                            <p class="post-description flex-fill">We are now accepting college fee start august 28, 2023</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#announcementModal1">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="organization-posted">CSCo</h5>
                            <p class="post-description flex-fill">We are now accepting college fee start august 28, 2023</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#announcementModal1">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="organization-posted">CSCo</h5>
                            <p class="post-description flex-fill">We are now accepting college fee start august 28, 2023</p>
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#announcementModal1">Read More</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
 <!-- Announcement Modals -->
 <div class="modal fade" id="announcementModal1" tabindex="-1" aria-labelledby="announcementModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="announcementModalLabel1">CSCo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>We are now accepting college fee start august 28, 2023</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="announcementModal2" tabindex="-1" aria-labelledby="announcementModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="announcementModalLabel2">CSCo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Acquaintance party</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="announcementModal3" tabindex="-1" aria-labelledby="announcementModalLabel3" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="announcementModalLabel3">SSC</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>1st general assembly</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


