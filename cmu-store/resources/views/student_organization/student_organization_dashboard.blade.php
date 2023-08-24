@extends('layouts.student_organization_navigation_bar')
@section('main-content')
<div class="content">
    <div class="dashboard">
      <div class="row">

          <div class="row">
                <event-count
                    target_route = "{{ route ('get-user-count') }}"
                    card_title = "MEMBERS"
                    card_icon = "bi bi-people"
                >
                </event-count>
                <event-count
                    target_route = "{{ route('get-events-count') }}"
                    card_title = "NUMBER OF UPCOMING EVENTS"
                    card_icon = "bi bi-calendar-event"
                >
                </event-count>
                <event-count
                    target_route = ""
                    card_title = "NUMBER OF COMPLETED EVENTS"
                    card_icon = "bi bi-check-circle"
                >
                </event-count>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="timeline shadow">
                <h4>Schedule</h4>
                <hr>
                  <event-dashboard
                    target_route="{{ route('get-events') }}"
                    >
                  </event-dashboard>
              </div>
            </div>
            <div class="col-md-6">
              <div class="calendar shadow">
                <dashboard-calendar></dashboard-calendar>

              </div>
            </div>
          </div>
      </div>
    </div>
</div>
    {{-- <script>
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
      </script> --}}
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <!-- FullCalendar JS -->
 <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
 <script>
   document.addEventListener('DOMContentLoaded', function() {
     var announcementRow = document.getElementById('announcement-row');
     var announcementCards = announcementRow.querySelectorAll('.card');

     // Limit the maximum number of announcement cards to show
     var maxAnnouncementCards = 3;
     for (var i = 0; i < announcementCards.length; i++) {
       if (i >= maxAnnouncementCards) {
         announcementCards[i].style.display = 'none';
       }
     }

     var calendarEl = document.getElementById('calendar');
     var calendar = new FullCalendar.Calendar(calendarEl, {
       initialView: 'dayGridMonth', // You can change the initial view as needed
       events: [
         {
           title: 'Event 1',
           start: '2023-08-15'
         },
         {
           title: 'Event 2',
           start: '2023-08-20'
         }
         // Add more events here
       ]
     });
     calendar.render();
   });
 </script>
@endsection
