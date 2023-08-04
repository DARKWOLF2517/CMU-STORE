<link href="/custom_css/usercard.css" rel="stylesheet">

    <div class="container" id = "usercards">
        <div class="user-card" onclick="handleCardClick('User 1')">
          <a href="#">
            <h3>CSCo</h3>
            <hr>
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 1">
            <p>College of Information Technology Sciences and Computing Student Council</p>
          </a>
        </div>
        <div class="user-card" onclick="handleCardClick('User 2')">
          <a href="#">
            <h3>CSCo</h3>
            <hr>
            <img src="https://randomuser.me/api/portraits/women/2.jpg" alt="User 2">
            <p>College of Information Technology Sciences and Computing Student Council</p>
          </a>
        </div>
        <div class="user-card" onclick="handleCardClick('User 3')">
          <a href="#">
            <h3>CSCo</h3>
            <hr>
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 3">
            <p>College of Information Technology Sciences and Computing Student Council</p>
          </a>
        </div>
      </div>

      <script>
        function handleCardClick(userName) {
          console.log(`Clicked on ${userName} user card.`);
          // You can add more actions or interactivity here, such as opening a modal, navigating to a new page, etc.
        }
      </script>
