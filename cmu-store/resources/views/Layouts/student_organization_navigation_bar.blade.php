<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOTSTRAP CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@ 5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
   
    {{-- CUSTOM STYLE SHEETS FOUND IN PUBLIC DIRECTORY --}}
    <link href="/custom_css/stylesheet.css" rel="stylesheet">
    <link href="/custom_css/allmedia.css" rel="stylesheet">
    <link href="/custom_css/Login.css" rel="stylesheet">
    <link href="/custom_css/Navbars.css" rel="stylesheet">
    <link href="/custom_css/SOAttendance.css" rel="stylesheet">
    <link href="/custom_css/SODashboard.css" rel="stylesheet">
    <link href="/custom_css/SOEvents.css" rel="stylesheet">
    <link href="/custom_css/SOListofMembers.css" rel="stylesheet">
    <link href="/custom_css/SOAccountabilities.css" rel="stylesheet">
    @vite('resources/js/app.js')
    @yield('custom-style')


</head>
    <body>

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
                            <img src="https://cdn.imgbin.com/0/4/19/imgbin-network-administrator-system-administrator-computer-icons-computer-network-database-others-k0X6MX9NfNjeUyBaXUweXTcMw.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                            <span class="profile-name"><strong>Admin</strong></span>
                        </a>
                        <ul><a class="dropdown-item" href="{{url('/logout')}}">Sign out</a></ul>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{url('/logout')}}">Sign out</a></li>

                    
                        </ul>
                    </div>
                </div>
            </div>
                <!-- SIDE NAV BAR -->
            <div class="wrapper">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar" id="sidebarCollapse">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <side-nav-button
                            link_name="Dashboard"
                            link_route="/dashboard"
                            link_icon="bi bi-speedometer"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Attendance"
                            link_route="/student_organization_attendance"
                            link_icon="bi bi-people"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Student"
                            link_route="/student_organization_member_list"
                            link_icon="bi bi-person"
                        ></side-nav-button>

                        <side-nav-button
                            link_name="Events"
                            link_route="/student_organization_events"
                            link_icon="bi bi-calendar-check"
                        ></side-nav-button>

                        <side-nav-button
                            link_name="Accountabilities"
                            link_route="/student_organization_accountabilities"
                            link_icon="bi bi-currency-dollar"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Evaluation"
                            link_route="/student_organization_evaluation"
                            link_icon="bi bi-clipboard-check"
                        ></side-nav-button>

                    </ul>

                </div>
            </div>
            @yield('main-content')
        </div>
    </body>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    {{-- BOOTSTRAP CDN FOR JAVASCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   


    {{-- INTERNAL BOOTSTRAP --}}
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


