<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>User Organizations</title>
  <link href="/custom_css/usercard.css" rel="stylesheet">
  @vite('resources/js/app.js')
</head>
<body>
  <div id="app">
      <user-organization
        id={{Auth::id()}}
      ></user-organization>
  </div>
  {{-- <div class="container" id = "usercards">
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
  </script> --}}

</body>
</html>


