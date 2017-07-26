<!DOCTYPE html>
<html lang="en">

  <!--header-->
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
      <link rel="stylesheet" type="text/css" href="css/header.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/commonclass.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css">
     <script src="js/jquery.js"></script>
    <script src="js/breadcrumb.js"></script>
     
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
<header>
    <nav class="nav_0">
        <div class="navDetail">
            <div class="navfix">
                <div class="navimg">
                    <input type="checkbox" id="control">
                    <div class="logo">
                        <div class="logofix">
                            <a href="index.html">
                               <img src="images/1common/logo.png">
                            </a>
                            <div class="arikicommon_breadcrumb">                            
                        
    

<a href="index.html">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<a href="news.html">最新消息</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>最新消息內文</span>

    </div>
</div>
                    </div>
                    <label class="hb" for="control">選單</label>
                    <ul class="menu">
                        <li class="rwdlogo"><a href="index.html" class="rwd"><img src="images/1common/logo.png"></a></li>
                        <li><a href="customize.html">客製浪板</a></li>
                        <li><a href="surfshop.html">衝浪配備</a></li>
                        <li><a href="map.html">衝浪地圖</a></li>
                        <li><a href="news.html">最新消息</a></li>
                        <li><a href="about.html">關於酋長</a></li>
                        <li><a href="7member_update.html" class="rwd">會員專區</a></li>
                        <li><a href="cart.html" class="rwd">購物車</a></li>
                    </ul>
                    <div class="iconGroup">
                        <ul>
                            <li><a href="7member_update.html"><img src="images/1common/member.png" alt="">會員專區</a></li>
                            <li class="line"></li>
                            <li><a href="cart.html"><img src="images/1common/shop.png" alt="">購物車</a></li>
                        </ul>
                    </div>
                    <!-- <div class="idHello">
                        <p>ID：<span>煞氣a周子瑜 §醉ㄞ金城武</span> 您好</p>
                    </div> -->
                </div>
            </div>
            </div>
    </nav>
    <div class="topGround_0"></div>
</header>
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
  require_once("connectBD101g2.php");
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
    <div class="article_item_content_img"><img src="<?php echo $hebe["newsimg"]; ?>"></div>
      <p class="article_item_content_txt"><?php echo $hebe["newstxt"]; ?></p>
  </div>
    <div class="btn_15">
        <a href="news.html" class="arikicommon_btn">返回最新消息</a> 
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
   <footer class="footer_0">
       <div class="maxContent">
        <div class="titlegroup">
          <ul class="itemtitle">
            <li>酋長商城</li>
            <li><a href="">衝浪地圖</a></li>
            <li><a href="">關於酋長</a></li>
            <li><a href="">會員中心</a></li>
          </ul>       
        </div>
        <div class="left col-xs-12 col-sm-6">
          <ul class="store">
            <li><a href="">客製浪板</a></li>
            <li><a href="">衝浪配備</a></li>
            <li><a href="">購物車</a></li>
          </ul>
          <ul class="map">
            <li><a href="">Pipeline</a></li>
            <li><a href="">Superbank</a></li>
            <li><a href="">Jeffrey's Bay</a></li>
            <li><a href="">Black Beach</a></li>
            <li><a href="">Teahupo'o</a></li>
            <li><a href="">La Graviere</a></li>
            <li><a href="">Uluwatu</a></li>
          </ul>
          <ul class="about">
            <li><a href="">最新消息</a></li>
            <li><a href="">經營理念</a></li>
            <li><a href="">品牌沿革</a></li>
            <li><a href="">得獎紀錄</a></li>
            <li><a href="">全球據點</a></li>
          </ul>
          <ul class="member">
            <li><a href="">基本資料</a></li>
            <li><a href="">我的收藏</a></li>
            <li><a href="">訂單查詢</a></li>
          </ul>     
        </div>
      <div class="right col-xs-12 col-sm-6">
        <h3>留言給我們</h3>
        <p>arikisurf@arikisurf.com</p>
        <a href="">留言</a>
      </div>
      <div class="clearfix"></div>
      <div class="copyright">
        <p>©2017 Ariki Surf All Rights Reserved. 
        </p>
      </div>
       </div>
   </footer>
</body>
</html>