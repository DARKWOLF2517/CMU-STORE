<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
  <style>
    .calendar-container {
      width: 300px;
      height: 300px;
      margin: 0 auto;
      overflow: auto;
    }
    
    table {
      border-collapse: collapse;
      width: 100%;
    }
    
    th, td {
      text-align: center;
      padding: 8px;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    td {
      border: 1px solid #dddddd;
    }
    
    .today {
      background-color: #4CAF50;
      color: white;
    }
  </style>
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
</head>
<body>
  <h2>Calendar</h2>
  
  <div class="calendar-container">
    <div>
      <button id="prev-month" class="btn btn-link"><i class="bi bi-caret-left-fill"></i></button>
      <span id="month-year"></span>
      <button id="next-month" class="btn btn-link"><i class="bi bi-caret-right-fill"></i></button>
    </div>
    <table>
      <tr>
        <th>Sun</th>
        <th>Mon</th>
        <th>Tue</th>
        <th>Wed</th>
        <th>Thu</th>
        <th>Fri</th>
        <th>Sat</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
