<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/stylesheet.css" rel="stylesheet">
    <link href="/css/Navbars.css" rel="stylesheet">

</head>
<body>

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
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <span class="profile-name"><strong>User</strong></span>
                </a>

                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{url('/logout')}}">Sign out</a></li>

                  </form>
                </ul>
            </div>
        </div>
        <!-- SIDE NAV BAR -->
    <div class="wrapper">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar" id="sidebarCollapse">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link link-dark" aria-current="page">
                        <i class="bi bi-speedometer2"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/StudOrgAttendance') }}" class="nav-link link-dark">
                        <i class="bi bi-people"></i>
                        <span class="nav-link-text">Attendance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/StudOrgEvents') }}" class="nav-link link-dark">
                        <i class="bi bi-calendar-check"></i>
                        <span class="nav-link-text">Events</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <i class="bi bi-currency-dollar"></i>
                        <span class="nav-link-text">Accountabilities</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link link-dark">
                        <i class="bi bi-clipboard-check"></i>
                        <span class="nav-link-text">Evaluation</span>
                    </a>
                </li>

            </ul>

        </div>
        @yield('main-content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
          const today = new Date();
          let currentMonth = today.getMonth();
          let currentYear = today.getFullYear();
          const cells = document.getElementsByTagName('td');

          function updateCalendar() {
            const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            const firstDay = new Date(currentYear, currentMonth, 1);
            const lastDay = new Date(currentYear, currentMonth + 1, 0);
            const numDays = lastDay.getDate();
            const startDay = firstDay.getDay();

            for (let i = 0; i < cells.length; i++) {
              cells[i].innerHTML = '';
              cells[i].classList.remove('today');
            }

            document.getElementById('month-year').textContent = `${monthNames[currentMonth]} ${currentYear}`;

            let date = 1;
            for (let i = startDay; i < startDay + numDays; i++) {
              cells[i].innerHTML = date;
              if (date === today.getDate() && currentMonth === today.getMonth() && currentYear === today.getFullYear()) {
                cells[i].classList.add('today');
              }
              date++;
            }
          }

          updateCalendar();

          document.getElementById('prev-month').addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
              currentMonth = 11;
              currentYear--;
            }
            updateCalendar();
          });

          document.getElementById('next-month').addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
              currentMonth = 0;
              currentYear++;
            }
            updateCalendar();
          });
        });
      </script>

</body>
</html>


