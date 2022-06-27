<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>搜尋 | 高大資工會議管理系統</title>
  <link rel="stylesheet" href="src/css/style.css">
  <link rel="stylesheet" href="src/css/search.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <?php
  session_start();
  include("components/navigation.php");
  include("components/search_meeting.php");
  ?>
  

    <!-- 匯入 components/profile.php -->
    <form method="POST" >
      <div id="search_area">
        <input type="hidden" name="token" value="<?php echo $_SESSION['token']?>">
        <input id="search_input" name="search" type="text" placeholder="搜尋使用者...">
			  <span><input class="material-icons" type="submit" value="search" /></span>
      </div>
	  </form>
    
    <?php
      include("components/search_meeting.php");
  
    ?>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/src/js/nav.js"></script>
  <script src="/src/js/search.js"></script>
</body>
</html>
