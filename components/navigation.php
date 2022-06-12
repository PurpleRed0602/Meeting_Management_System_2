?>
<?php session_start();?>
<nav>
  <div id="nav_start">
    <a href="/homepage.php">
      <img src="/src/images/logo-icon.png">
      <h1>高大資工會議管理系統</h1>
    </a>
  </div>
  <div id="nav_end">
    <img id="user_photo" src="/src/images/account-circle.png">
    <h2 id="user_name"><?php echo $_SESSION["name"]?></h2>
    <div class="menuToggle"></div>
  </div>
</nav>
<ul id="nav_menu">
  <li><a href="/profile.php?=<?php echo $_SESSION["name"]?>">
      <span class="material-icons">person_outline</span>
      <span>My Profile</span>
    </a></li>
  <li><a href="#">
      <span class="material-icons">notifications_active</span>
      <span>Notification</span>
    </a></li>
  <li><a href="/login.html">
      <span class="material-icons">logout</span>
      <span>Log out</span>
    </a></li>
</ul>
<?php
