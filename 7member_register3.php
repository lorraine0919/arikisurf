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
        <div class="welcome27">
            <p>恭喜您已註冊成功！</p>
            <p><span id="jump27">5</span>秒後自動跳回<a href="index.php">首頁</a></p>
        </div>
    </div>
    <?php require_once('publicpage/footer.php'); ?>
</body>
<script type="text/javascript">
    var num = 5;
    var timeId;

    function countDown(){
        num--;
        if (num == 0 ){
            clearInterval(timeId);
            window.location="index.php";
        }
        document.getElementById("jump27").innerHTML = num;
    }
    function init(){
        timerId = setInterval(countDown,1000);
    }
    window.onload=init;
</script>
</html>