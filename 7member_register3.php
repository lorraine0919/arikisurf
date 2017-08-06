<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
      <?php require_once('publicpage/head.php'); ?>
      <title>酋長衝浪Ariki Surf - 會員註冊</title>
      <link rel="stylesheet" type="text/css" href="css/7member_register3.css">
</head> 
    
<body>
    <!-- =================主選單================== -->
    <?php require_once('publicpage/header.php'); ?>
    <a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
    <span>會員註冊</span>
    <?php require_once('publicpage/headerend.php'); ?>
    <div class="box27">
        <div class="img27">
            <img src="images/7member/success.png">
        </div>
        <div class="welcome27">
            <p>恭喜您！註冊成功！</p>
            <a href="">前往會員專區</a>
        </div>
    </div>
    <?php require_once('publicpage/footer.php'); ?>
    <?php require_once('publicpage/member_login.php'); ?>
</body>
</html>