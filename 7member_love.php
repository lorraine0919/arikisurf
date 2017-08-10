<?php
session_start();
ob_start(); 
require_once("connectBooks.php");
$member_no=$_SESSION["member_no"];
$sql="select *
      from map_like,map_post
      where map_like.post_number = map_post.post_number
      and map_like.member_no=:member_no
      order by post_date DESC";
$like = $pdo->prepare($sql);
$like->bindValue(':member_no',$member_no);
$like->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('publicpage/head.php'); ?>
    <?php require_once('publicpage/member_head.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/fontawesome-stars.css">
    <link rel="stylesheet" type="text/css" href="css/discussion.css">
    <script src="js/jquery.barrating.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/7member_love.css">    
</head>
<body> 
<?php require_once('publicpage/header.php'); ?>
<a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>會員專區</span>
<?php require_once('publicpage/headerend.php'); ?>
<?php require_once('publicpage/member_top.php'); ?>
<!-- =================會員專區================== -->
<div class="love-title title20">
         已收藏的文章
    </div>
<div class="member_love_23">
    
<?php 
     $count=0;
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
                         <select class="star">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <input class="gg" type="hidden" value="<?php echo $likeRow["star_score"]; ?>">
                        </select>                                             
                         <div class="view">
                             <div class="see">
                              <img src="images/4wavepoint/view.png" alt="view">
                              </div>                             
                              <div class="watch"><?php echo $likeRow["post_view"]  ?></div>      
                         </div>
                     </div>                    
     </div><!-- item -->
<?php 
      $count++;
      }
 ?>                  
</div><!-- member_ordercheck_23 -->
<script>
      $(document).ready(function(){
         var j =<?php echo $count ?>;
         $('.star').barrating({
                theme: 'fontawesome-stars'
           });

         for(var i=0;i<j;i++){
           $('.star').eq(i).barrating('set',$('.gg').eq(i).val());
         }

         $('.star').barrating('readonly',true);
       });
</script> 
<!--(bake module/member_bottom.html)--><?php require_once('publicpage/member_bottom.php'); ?>
<!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
</body>
</html>