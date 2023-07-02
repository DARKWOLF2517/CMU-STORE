<template>
   <div class="profile-dropdown dropdown"> 
   <button class="notification-button btn btn-link">
            <i class="bi bi-bell"></i>
        </button>
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://cdn.imgbin.com/0/4/19/imgbin-network-administrator-system-administrator-computer-icons-computer-network-database-others-k0X6MX9NfNjeUyBaXUweXTcMw.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
            <span class="profile-name"><strong>Student</strong></span>
        </a>

      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="/logout">Sign out</a></li>
      </ul>
   </div>
  </template>
  
  <script>
  export default {
  };
  </script>
  