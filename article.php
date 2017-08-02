<!DOCTYPE html>
<html lang="en">

  <!--header-->
  <head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
     
  <title>酋長衝浪Ariki Surf-最新消息</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 </head>
  <!--header end-->
  <script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
  <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
  <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
  <script type="text/javascript" src="libs/jquery.stellar/src/jquery.stellar.js"></script>
  <script src="js/5article.js"></script>    
  <link rel="stylesheet" type="text/css" href="css/article.css">

      
<body>
<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
                             
<a href="index.html">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<a href="news.php">最新消息</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>最新消息內文</span>

<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>

<div class="bg_15">
<div class="body_15">
<div class="article_title_15">
    <div class="article_txt_15">
      <h2>最新消息 NEWS</h2>
        <p>每一次酋長頒布的訊息，流傳千古，族人歌頌，最高領導的象徵，意義非凡。</p>
    </div>
</div>

<?php

try{
  require_once("connectBooks.php");
  $sql = "select * from news where newsno=".$_REQUEST['articleno'];
  $pdo = new PDO( $dsn, $user, $password, $options); 
  $news = $pdo->prepare( $sql );
  $news->execute();
  $hebe = $news->fetch(PDO::FETCH_ASSOC);
      // echo $hebe['newsno'];
?>
<div class="article_item">
  <div class="article_item_title">
    <h3 class="article_big_title"><?php echo $hebe["newstitle"]; ?></h3>
     <p class="release_date"><?php echo $hebe["newsdate"]; ?></p>
   </div>
  <div class="article_item_content">
    <div class="article_item_content_img"><img src="images/5news/<?php echo $hebe["newsimg"]; ?>"></div>
      <p class="article_item_content_txt"><pre><?php echo $hebe["newstxt"]; ?></pre></p>
  </div>
    <div class="btn_15">
        <a href="news.php" class="arikicommon_btn">返回最新消息</a> 
    </div>       
  </div>  
<div class="clearfix"></div>

<?php
}catch(PDOException $e){
  echo $e->getMessage();
}
?>

</div>
</div>
 <!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
  
</body>
</html>