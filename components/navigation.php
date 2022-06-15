?>
<?php session_start(); ?>
<nav>
  <div id="nav_start">
    <a href="/CSC071/homepage/homepage.php">
      <img src="../src/images/logo-icon.png">
      <h1>高大資工會議管理系統</h1>
    </a>
  </div>
  <div id="nav_end">
    <img id="user_photo" src="../src/images/account-circle.png">
    <h2 id="user_name"><?php echo $_SESSION['loginMember']['姓名'] ?></h2>
    <div class="menuToggle"></div>
  </div>
</nav>
<ul id="nav_menu">
  <li><a href="/CSC071/profile.php">
      <span class="material-icons">person_outline</span>
      <span>My Profile</span>
    </a></li>
  <li><a href="#">
      <span class="material-icons">notifications_active</span>
      <span>Notification</span>
    </a></li>
  <li><a href="/CSC071/login.php">
      <span class="material-icons">logout</span>
      <span>Log out</span>
    </a></li>
</ul>
<?php
