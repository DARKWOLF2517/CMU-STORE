<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS file -->

    <style>
        /* Custom CSS styles with box shadows */
        body {
            background-color: #f8f9fa;
        }

        .card {
            text-align: center;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
        }

        .nav-tabs {
            margin-top: 20px;
        }

        .nav-item {
            width: 50%;
            text-align: center;
        }

        .tab-content {
            padding: 20px;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }


        #organization {
            margin-top: 20px;
            padding: 10px;
        }
        .profile-card {
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
        .qr-code {
        text-align: center;
        padding: 10px;
    }
        .student-info{
            padding: 10px;
            margin-top: 10px;
        }
        .qr-code img {
            margin-top: 10px;
            width: 150px;
            height: auto;
        }
        .profile-card img {
            margin-top: 10px;
            width: 200px;
            height: auto;
        }

        .student-details {

            padding: 20px;
            width: 100%;
        }
        .profile-card{
            text-align: center;
        }
        .student-details.flex {
            display: flex; /* Use flex display */
            justify-content: space-between; /* Adjust alignment as needed */
        }
        .student-details p{
            margin: 2px;
        }
        .edit-button-container {
            position: absolute;
            top: 0;
            right: 0;
        }
        button{
            background-color: transparent;
            border-radius: 5px;
            border: 1px;
        }

    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-3">
            <div class="profile-card">
                <img src="https://via.placeholder.com/150" alt="profile photo">
                <h5>John Doe</h5>
                <input type="file" id="photo-input" accept="image/*" style="display: none;">
                <button class="btn btn-primary" onclick="document.getElementById('photo-input').click();">Change Photo</button>
            </div>

        </div>

        <div class="col-md-9">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="organization-tab" data-toggle="tab" href="#organization" role="tab" aria-controls="organization" aria-selected="false">Organization</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- Profile Tab Content -->
                <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col">
                        <div class="row student-details">

                            <!-- Student Information -->
                            <div class="qr-code">
                                <img src="https://via.placeholder.com/150" alt="QR Code">
                                <h6>QR Code</h6>
                            </div>
                            <div class="student-info">
                                <h4>Student Information</h4>
                                <p><b>Full name: </b> <span id="full-name">John Doe</span></p>
                                <p><b>College: </b> <span id="college">College of Arts and Sciences</span></p>
                                <p><b>Year level: </b> <span id="year-level">3rd year</span></p>
                                <p><b>Department: </b> <span id="department"></span></p>
                            </div>
                            <div class="edit-button-container">
                                <button id="edit-profile-btn" data-toggle="modal" data-target="#editProfileModal">Edit Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Clubs Tab Content -->
                <div class="tab-pane fade" id="organization" role="tabpanel" aria-labelledby="organization-tab">
                    <h3>Organizations I'm Under:</h3>
                    <ul>
                        <li><b>SSC</b> Supreme Student Council</li>
                        <li><b>SSC</b> Supreme Student Council</li>
                        <li><b>SSC</b> Supreme Student Council</li>
                        <!-- Add more club items here -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal for Editing Student Profile -->
<div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Student Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="edit-full-name">Full Name</label>
                        <input type="text" class="form-control" id="edit-full-name">
                    </div>
                    <div class="form-group">
                        <label for="edit-college">College</label>
                        <input type="text" class="form-control" id="edit-college">
                    </div>
                    <div class="form-group">
                        <label for="edit-year-level">Year Level</label>
                        <input type="text" class="form-control" id="edit-year-level">
                    </div>
                    <div class="form-group">
                        <label for="edit-department">Department</label>
                        <input type="text" class="form-control" id="edit-department">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveChanges()">Save Changes</button>
            </div>
        </div>
    </div>
</div>
  <!-- Add Bootstrap JS and jQuery for tab functionality -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Function to save changes
    function saveChanges() {
        // Get updated values from the modal
        const updatedFullName = document.getElementById('edit-full-name').value;
        const updatedCollege = document.getElementById('edit-college').value;
        const updatedYearLevel = document.getElementById('edit-year-level').value;
        const updatedDepartment = document.getElementById('edit-department').value;

        // Update the displayed information
        document.getElementById('full-name').innerText = updatedFullName;
        document.getElementById('college').innerText = updatedCollege;
        document.getElementById('year-level').innerText = updatedYearLevel;
        document.getElementById('department').innerText = updatedDepartment;

        // Close the modal
        $('#editProfileModal').modal('hide');
    }
</script>
</body>
</html>
