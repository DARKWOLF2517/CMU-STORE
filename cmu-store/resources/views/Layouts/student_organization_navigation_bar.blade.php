<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- BOOTSTRAP CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FullCalendar JS -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- FullCalendar CSS -->
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    {{-- CUSTOM STYLE SHEETS FOUND IN PUBLIC DIRECTORY --}}
    <link href="/custom_css/stylesheet.css" rel="stylesheet">
    <link href="/custom_css/allmedia.css" rel="stylesheet">
    <link href="{{ asset('custom_css/Login.css') }}" rel="stylesheet">
    <link href="/custom_css/Navbars.css" rel="stylesheet">
    <link href="/custom_css/evaluation.css" rel="stylesheet">

    {{-- <link href="/custom_css/SOAttendance.css" rel="stylesheet"> --}}
    <link href="/custom_css/SODashboard.css" rel="stylesheet">
    <link href="/custom_css/SOEvents.css" rel="stylesheet">
    <link href="/custom_css/SOListofMembers.css" rel="stylesheet">
    <link href="/custom_css/StudentAccountabilities.css" rel="stylesheet">

    {{-- Links for evaluation results --}}
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/loader.js"></script>
    <link id="load-css-0" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/51/css/core/tooltip.css">
    <link id="load-css-1" rel="stylesheet" type="text/css" href="https://www.gstatic.com/charts/51/css/util/util.css">
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_default_module.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_graphics_module.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_ui_module.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://www.gstatic.com/charts/51/js/jsapi_compiled_corechart_module.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    {{-- icon for webpage tab --}}
    <link rel="icon" href="{{ url('https://i.pinimg.com/736x/00/eb/c7/00ebc7ed5034e9f18acae56a19966099--flat-illustration-stock-illustrations.jpg') }}">

    {{-- Themes CSS --}}
    {{-- @if (session()->themes == 'blue')
        <link rel="stylesheet" href="{{ asset('css/blue_theme.css') }}">
    @elseif (session()->themes == 'red')
        <link rel="stylesheet" href="{{ asset('css/red_theme.css') }}">
    @elseif (session()->themes == 'green')
        <link rel="stylesheet" href="{{ asset('css/green_theme.css')}}">
    @endif --}}

    @vite('resources/js/app.js')
    @yield('custom-style')


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
                            <img src="https://cdn.imgbin.com/0/4/19/imgbin-network-administrator-system-administrator-computer-icons-computer-network-database-others-k0X6MX9NfNjeUyBaXUweXTcMw.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                            <span class="profile-name"><strong>Admin</strong></span>
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
                            link_name="Dashboard"
                            link_route="/org_dashboard"
                            link_icon="bi bi-speedometer"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Attendance"
                            link_route="/student_organization_attendance"
                            link_icon="bi bi-people"
                        ></side-nav-button>
                        <side-nav-button
                            link_name="Student List"
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
                            link_icon="bi bi-wallet2"
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

    <script>
        window.addEventListener('load', function () {
          // Remove loader once the page has finished loading
            var loader = document.querySelector('.loader-container');
            loader.style.display = 'none';
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    {{-- BOOTSTRAP CDN FOR JAVASCRIPT --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


    {{-- INTERNAL JavaScript --}}
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


