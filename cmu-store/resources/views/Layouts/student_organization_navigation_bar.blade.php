<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Add Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- FullCalendar CSS -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css" rel="stylesheet">
    @vite('resources/js/app.js')
    
    {{-- CUSTOM STYLE SHEETS FOUND IN PUBLIC DIRECTORY --}}
    <link href="/custom_css/stylesheet.css" rel="stylesheet">
    <link href="/custom_css/Navbars.css" rel="stylesheet">
    <link href="/custom_css/tables.css" rel="stylesheet">

    @yield('custom-style')
    <style>

    .rotate-icon .fas.fa-chevron-down {
        transition: transform 0.5s ease-in-out;
    }

    .rotate-icon.collapsed .fas.fa-chevron-down {
        transform: rotate(180deg);
    }

    .rotate-icon:not(.collapsed) .fas.fa-chevron-down {
        transform: rotate(0deg);
    }

    .btn-toggle-nav {
        align-items: center;
        margin-left: 30px;
    }


    .btn-toggle-nav li {
        width: 100%;
    }

    .link-dark {
        text-decoration: none;
    }


    .btn-toggle {
        display: flex;
        width: 200px;
        margin-bottom: 10px;
        padding-left: 0;
    }
    .link-title {
        color: #000000;
        display: inline-block;
        transition: margin-left 0.3s ease-in-out, opacity 0.3s ease-in-out;
        margin-left: 10px;
    }
    .btn-toggle .link-title {
            margin-right: 10px;
        }

    .btn-toggle .link-arrow {
        margin-left: auto;
    }
    .btn-toggle .fas {
        margin-left: 10px;
        margin-right: 0;
    }
        .top-nav {
            background-color: #ffffff;
            color: #2b2b2b;
            padding: 7px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-nav .notification-button {
            display: flex;
            align-items: center;
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }

        .top-nav .profile-dropdown {
            display: flex;
            align-items: center;
            color: #fff;
            text-decoration: none;
        }

        .top-nav .profile-dropdown .profile-name {
            margin-right: 5px;
        }
/*
        .sidebar {
            position: absolute;
            top: 50px;
            left: 0;
            height: 100vh;
            width: 230px;
            background-color: #ffffff;
            color: #1b1b1b;
            overflow-y: auto;
            transition: width 0.3s ease-in-out;
            z-index: 1000;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .content {
            margin-left: 230px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        .content.collapsed {
            margin-left: 72px;
        }

        .sidebar.collapsed .link-title {
            opacity: 0;
        }

        .toggle-button {
            position: absolute;
            top: 10px;
            right: 15px;
            margin-left: 10px;
            background-color: transparent;
            border: 1px solid grey;
            border-radius: 5px;
        }
 */

        /* Sidebar */
        .sidebar {
            position: absolute;
            top: 50px;
            left: 0;
            height: 100vh;
            width: 230px;
            background-color: #ffffff;
            color: #1b1b1b;
            overflow-y: auto;
            transition: width 0.3s ease-in-out;
            z-index: 1000;
        }

        .content {
            margin-left: 230px;
            padding: 20px;
            transition: margin-left 0.3s ease-in-out;
        }

        /* Toggle button */
        #sidebarToggle {
            display: none;
        }

        .toggle-button label {
            display: block;
            position: absolute;
            top: 10px;
            right: 15px;
            margin-left: 10px;
            background-color: transparent;
            border: 1px solid grey;
            border-radius: 5px;
            cursor: pointer;
            padding: 5px;
        }

        .toggle-button label:hover {
            background-color: #f2f2f2;
        }

        .toggle-button label::before {
            content: "\f0c9"; /* Unicode for hamburger icon (you may need to change this) */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            font-size: 20px;
            color: #333;
            display: block;
        }

        #sidebarToggle:checked + .sidebar {
            width: 70px;
        }

        #sidebarToggle:checked + .sidebar + .content {
            margin-left: 72px;
        }

        #sidebarToggle:checked + .sidebar + .content + .toggle-button label::before {
            content: "\f00d"; /* Unicode for close icon (you may need to change this) */
            color: #333;
        }
    </style>

    <title>Student Organization Dashboard</title>
</head>
<body>
    <div id="app">
        <!-- TOP NAV BAR -->
    <div class="wrapper">

        <div class="top-nav">
            <a href="#" class="nav-link link-light">
                <span class="nav-link-text link-dark">CMU-STORE-AMS</span>
            </a>
            <div class="profile-dropdown dropdown">
                <button class="notification-button btn btn-link link-dark">
                    <i class="bi bi-bell"></i>
                </button>
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <span class="profile-name"><strong>User</strong></span>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <!-- SIDE NAV BAR -->


    <div class="wrapper">

        <div class=" p-3  sidebar" id="sidebarCollapse">
            <div class="d-md-flex flex-shrink-0">
                <ul class="list-unstyled ps-0">
                <li class="toggle-button">
                    <button class="btn" id="ssidebar-toggle"><i class="fas fa-bars"></i></button>
                </li>
            <br>

                <li class="mt-3">
                    <button class="btn btn-toggle align-items-center rounded dashboard-button">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="link-title">Dashboard</span>
                    </button>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded rotate-icon" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                        <i class="fas fa-clipboard-check"></i>
                        <span class="link-title">Attendance</span>
                        <span class="link-arrow"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded"><i class="fas fa-calendar"></i> Schedule</a></li>
                            <li><a href="#" class="link-dark rounded"><i class="fas fa-check-circle"></i> Record</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center studentlist-button">
                        <i class="fas fa-users"></i>
                        <span class="link-title">Student List</span>
                    </button>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded events-button">
                        <i class="fas fa-calendar"></i>
                        <span class="link-title">Events</span>
                    </button>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded rotate-icon" data-bs-toggle="collapse" data-bs-target="#organization-collapse" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="link-title">Organizations</span>
                        <span class="link-arrow"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="collapse" id="organization-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded"><i class="fas fa-university"></i> College</a></li>
                            <li><a href="#" class="link-dark rounded"><i class="fas fa-building"></i> Department</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded rotate-icon" data-bs-toggle="collapse" data-bs-target="#evaluation-collapse" aria-expanded="false">
                        <i class="fas fa-chart-line"></i>
                        <span class="link-title">Evaluation</span>
                        <span class="link-arrow"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="collapse" id="evaluation-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-dark rounded"><i class="fas fa-book"></i> Results</a></li>
                            <li><a href="#" class="link-dark rounded"><i class="fas fa-pen"></i> Forms</a></li>
                        </ul>
                    </div>
                </li>

                </ul>
            </div>
        </div>
    </div>
    @yield('main-content')
    @yield('custom-script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FullCalendar JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script> --}}
    <script>
        // Function to close any open btn-toggle elements
        function closeOpenBtnToggle() {
            const btnToggle = document.querySelectorAll('.btn-toggle');
            btnToggle.forEach((button) => {
                const collapseTarget = button.getAttribute('data-bs-target');
                const collapseElement = document.querySelector(collapseTarget);
                if (collapseElement && collapseElement.classList.contains('show')) {
                    // Close the open collapse element
                    collapseElement.classList.remove('show');
                }
            });
        }

        // Toggle the sidebar when the burger button is clicked
        const toggleSidebarButton = document.getElementById('ssidebar-toggle');
        const sidebar = document.getElementById('sidebarCollapse');
        const content = document.querySelector('.content');
        const icon = document.querySelector('#sidebar-toggle i');
        const rotateButtons = document.querySelectorAll('.rotate-icon');

        toggleSidebarButton.addEventListener('click', function () {
            // Check if the sidebar is currently collapsed
            const isCollapsed = sidebar.classList.contains('collapsed');

            // Close any open btn-toggle elements before toggling the sidebar
            closeOpenBtnToggle();
            alert('hello');
            // Toggle the sidebar and content
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');

            // If the sidebar was previously collapsed, reopen any open btn-toggle elements
            if (!isCollapsed) {
                rotateButtons.forEach((button) => {
                    if (!button.classList.contains('collapsed')) {
                        const collapseTarget = button.getAttribute('data-bs-target');
                        const collapseElement = document.querySelector(collapseTarget);
                        if (collapseElement) {
                            collapseElement.classList.add('show');
                        }
                    }
                });
            }
        });

        rotateButtons.forEach((button) => {
            button.addEventListener('click', function () {
                // Toggle the 'collapsed' class on the button
                this.classList.toggle('collapsed');

                // Check if the sidebar is collapsed, and if so, expand it
                if (sidebar.classList.contains('collapsed')) {
                    sidebar.classList.remove('collapsed');
                    content.classList.remove('collapsed');
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    // Close any open btn-toggle elements when a new one is clicked
                    closeOpenBtnToggle();
                }
            });
        });
    </script>

    </div>

</body>
</html>
