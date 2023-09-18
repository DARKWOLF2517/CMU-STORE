<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@ 5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

{{-- CSS STYLESHEET --}}
    <link href="/custom_css/stylesheet.css" rel="stylesheet">
    <link href="/custom_css/Navbars.css" rel="stylesheet">
    <link href="/custom_css/StudDashboard.css" rel="stylesheet">
    <link href="/custom_css/tables.css" rel="stylesheet">
    <link href="/custom_css/announcement.css" rel="stylesheet">

    @vite('resources/js/app.js')
    @yield('custom-style')

<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
    <body>
        <div class="loader-container">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div id="app">
            <!-- TOP NAV BAR -->
            <div class="wrapper">
                <div class="top-nav">
                    <div class="nav-item toggle-button">
                        <button class="btn " id="sidebar-toggle"><i class="bi bi-list"></i></button>
                    </div>
                    <a href="#" class="nav-link link-dark">
                        <span class="nav-name">CMU-STORE-AMS</span>
                    </a>

                    <div class="profile-dropdown dropdown">
                        <button class="notification-button btn btn-link">
                            <i class="bi bi-bell"></i>
                        </button>
                        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png?rev=2540745" alt="" width="32" height="32" class="rounded-circle me-2">
                            <span class="profile-name"><strong>User</strong></span>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <side-nav-button
                            link_name="Settings"
                            link_route = "#"
                            show_icon = "{{false}}"
                            >
                            </side-nav-button>

                            <side-nav-button
                            link_name="Profile"
                            link_route = "#"
                            show_icon = "{{false}}"
                            >
                            </side-nav-button>

                            <li><hr class="dropdown-divider"></li>

                            <side-nav-button
                            link_name="Sign out"
                            link_route = "{{url('/logout')}}"
                            show_icon = "{{false}}"
                            >
                            </side-nav-button>

                        </ul>
                    </div>
                </div>
            </div>
                <!-- SIDE NAV BAR -->
            <div class="wrapper">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar" id="sidebarCollapse">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <side-nav-button
                            link_name="Home"
                            link_route="/login/student_dashboard"
                            link_icon="bi bi-house"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Attendance"
                            link_route="/student_attendance"
                            link_icon="bi bi-people"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Student Profile"
                            link_route="/student_profile"
                            link_icon="bi bi-person"
                        ></side-nav-button>
                        <side-nav-button
                        link_name="Announcement"
                        link_route="/student_announcement"
                        link_icon="bi bi-megaphone"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Accountabilities"
                            link_route="/student_accountabilities"
                            link_icon="bi bi-wallet2"
                        ></side-nav-button>

                    </ul>

                </div>
            </div>
            @yield('main-content')
        </div>
    </body>
    <script>
        window.addEventListener('load', function () {
          // Remove loader once the page has finished loading
            var loader = document.querySelector('.loader-container');
            loader.style.display = 'none';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{--
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebarCollapse');
            const content = document.querySelector('.content');
            const icon = document.querySelector('#sidebar-toggle i');
            const dropdown = document.getElementById('sidebar-dropdown');

            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
            icon.classList.toggle('bi-list');
            icon.classList.toggle('bi-x');
            dropdown.classList.toggle('dropdown');
            dropdown.classList.toggle('dropup');
            this.classList.toggle('collapsed');
        });
    </script>
    @yield('custom-script')
</html>


