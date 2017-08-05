<?php
session_start();
ob_start(); 
require_once("connectBooks.php");
$member_no=$_SESSION["member"]["member_no"];
$sql="select *
      from map_like,map_post
      where map_like.post_number = map_post.post_number
      and map_like.member_no=$member_no
      order by post_date DESC;";
$like = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
    <!--(bake module/member_head.html)--><?php require_once('publicpage/member_head.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/7member_love.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body> 
<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
<a href="index.html">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>會員專區</span>
<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
<!--(bake module/member_top.html)--> <?php require_once('publicpage/member_top.php'); ?>
<!-- =================會員專區================== -->
<div class="member_love_23">
    <div class="love-title">
         已收藏的文章
    </div>
<?php 
     while ($likeRow = $like->fetch(PDO::FETCH_ASSOC)) {
     
 ?>    
     <div class="item">
                 <a href="map_forum_discussion.php?post_number=<?php echo $likeRow["post_number"] ?>" class="map_a">                  
                     <div class="pic_i">                      
                            <img src='images/4wavepoint/<?php echo $likeRow["wave_number"] ?>/fou/<?php echo 
                            $likeRow["post_img"]  ?>'>
                     </div>
                     <div class="text">
                         <h3><?php echo $likeRow["post_title"]  ?></h3>
                         <div class="day"><?php echo substr($likeRow["post_date"],0,10)?></div>
                         <div class="tt">
                               <?php echo $likeRow["post_text"]  ?>
                         </div>             
                     </div>
                 </a>
                     <div class="item_border">
                         <div class="star">☆☆☆☆</div>
                         <div id="result"></div>
                         <div class="view">
                             <div class="see">
                              <img src="images/4wavepoint/view.png" alt="view">
                              </div>                             
                              <div class="watch"><?php echo $likeRow["post_view"]  ?></div>      
                         </div>
                     </div>                    
     </div><!-- item -->
<?php 
      }
 ?>               
</div><!-- member_ordercheck_23 -->
<!--(bake module/member_bottom.html)--><?php require_once('publicpage/member_bottom.php'); ?>
<!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
</body>
</html>