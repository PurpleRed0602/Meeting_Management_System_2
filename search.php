<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>搜尋 | 高大資工會議管理系統</title>
  <link rel="stylesheet" href="/src/css/style.css">
  <link rel="stylesheet" href="/src/css/search.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- 插入 /components/navigation.html  -->
  <?php
  include("components/navigation.php");
  ?>

  <div id="search_area">
    <input id="search_input" type="text" placeholder="搜尋使用者或會議...">
    <span class="material-icons">search</span>
  </div>

  <div id="result_area">
    <div id="user_group">
      <div class="group_header">
        <span class="group_title">使用者 (5)</span>
        <span id="user_group_toggle" class="material-icons">keyboard_arrow_down</span>
      </div>
      <div id="user_group_items" class="group_items">
        <div class="user_item">
          <img class="user_photo" src="/src/images/account-circle.png">
          <span class="user_name">林子閎</span>
          <span class="user_identity">業界專家</span>
          <span class="user_email">a1085516@mail.nuk.edu.tw</span>
        </div>
        <div class="user_item">
          <img class="user_photo" src="/src/images/account-circle.png">
          <span class="user_name">林子閎</span>
          <span class="user_identity">業界專家</span>
          <span class="user_email">a1085516@mail.nuk.edu.tw</span>
        </div>
        <div class="user_item">
          <img class="user_photo" src="/src/images/account-circle.png">
          <span class="user_name">林子閎</span>
          <span class="user_identity">業界專家</span>
          <span class="user_email">a1085516@mail.nuk.edu.tw</span>
        </div>
        <div class="user_item">
          <img class="user_photo" src="/src/images/account-circle.png">
          <span class="user_name">林子閎</span>
          <span class="user_identity">業界專家</span>
          <span class="user_email">a1085516@mail.nuk.edu.tw</span>
        </div>
        <div class="user_item">
          <img class="user_photo" src="/src/images/account-circle.png">
          <span class="user_name">林子閎</span>
          <span class="user_identity">業界專家</span>
          <span class="user_email">a1085516@mail.nuk.edu.tw</span>
        </div>
      </div>
    </div>
    <div id="meeting_group">
      <div class="group_header">
        <span class="group_title">會議 (1)</span>
        <span id="meeting_group_toggle" class="material-icons">keyboard_arrow_down</span>
      </div>
      <div id="meeting_group_items" class="group_items">
        <div class="meeting_item">
          <span class="material-icons">groups</span>
          <span class="meeting_name">110學年度第2學期第一次系務會議</span>
          <span class="meeting_date">2022/06/20(一)</span>
          <span class="meeting_time">18:00~20:00</span>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/src/js/nav.js"></script>
  <script src="/src/js/search.js"></script>
</body>
</html>