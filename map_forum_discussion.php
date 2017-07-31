<?php 
ob_start();
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/star.css">
   <link rel="stylesheet" type="text/css" href="css/discussion.css">
  <script src="js/jquery.raty.js" type="text/javascript"></script>
  <script src="js/showMap.js"></script>
  <script src="js/getStar.js"></script>
  <title>酋長衝浪Ariki Surf-討論區內頁</title>
</head>
<body>
     <!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
     <a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
      <a href="map.php">衝浪地圖</a><i class="fa fa-caret-right" aria-hidden="true"></i><a href="map_forum.php">討論區</a><i class="fa fa-caret-right" aria-hidden="true"></i>討論區內文
      <!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
     <div id="lightbox_11">
          <form class="gun">
               <span class="reason">檢舉原因</span> 
               <input type="text" class="report">
               <div class="io">
                    <input type="button" value="取消" id="cancel">
                    <input type="submit" value="送出" id="submit">
               </div>
               <div id="close">X</div>
          </form>           
     </div><!-- lightbox_11 -->
     <div id="lightbox2_11">
           <div class="ustar">
                 會員XX,你的評分為 <span></span> 顆星
                 <div id="cl">X</div>
           </div>
     </div><!-- lightbox2_11 -->
<?php 
     $wave_number = $_SESSION["map_wave"]["wave_number"];
     require_once("connectBooks.php");
     $sql2="select * from map_post where wave_number=$wave_number";
     $wave = $pdo->query($sql2);
     $waveRow = $wave->fetch(PDO::FETCH_ASSOC);
 ?>     
     <div class="bg_11">
      <div class="title">
          <!-- <h1>衝浪第一次接觸</h1> -->
          <h1><?php echo $waveRow["post_title"]; ?></h1>
          <div class="quit">檢舉</div>
          <div id="love">收藏</div>
          <div id="star"></div>
          <div id="result"></div>
      </div><!-- title -->

     	<div class="main_11">
            <div class="box_t">
                  <div class="user">
                        <img src="images/4wavepoint/user/user2.png">
                  </div>
                  <div class="pos">
                        <div class="name">Mathi</div>
                        <div class="time">發表時間 <span class="date">2017/07/17</span></div>
                  </div>
            </div>
            <div class="box_b">
                  <div class="pic">
                        <img src="images/4wavepoint/fou/1.jpg">
                  </div>
                  <div class="txt">
                        Mathi是北部人,第一次衝浪的地方是在金山中角灣.  還記得那天剛好是颱風過境後的第一天.穿了件短褲,  交了800元後教練先在沙灘上胡亂解說一遍,就把我推下水了.老實說,  他說的天花亂墬,  我卻是有聽沒有懂.總覺得聽起來很容易,但實地下水後,  整個感覺就不一樣了.
                         那時候我還不會看浪,  也不記得浪有幾人高.  總覺得浪一排一排的蓋過來,  看到腿都軟了.腦袋裡一片空白,  只聽到耳邊震耳欲聾的海浪聲,以及教練聲嘶力竭的叫我拚命劃.哇咧!!!我心裡只想著逃命,這不是在玩命嘛?眼前都是整排蓋下來的浪和飛濺起的白花,而且白花中似乎夾雜的血淋淋的斷肢殘臂(有沒有那ㄇ誇張阿?!)掙紮了五分鐘後,  教練宣佈放棄,  他告訴我今天颱風浪不適合初學者下水,  我就被招呼上岸了.  老實說,  雖然覺得交了800元居然只有下水五分鐘, 但是上岸的那一霎那真的有死裡逃生的感覺.
                        上岸之後我的朋友告訴我,  今天的浪是他最近以來碰過最大的浪了.這才稍稍安慰了我挫敗的心.
                  </div>
            </div>
            <div class="back">
                  <div class="feed">
                        <div class="icon">
                              <img src="images/4wavepoint/user/user3.png">
                        </div>
                        <div class="feed_c">
                             <div class="feed_info">
                                  <div class="name">覆針</div>
                                  <span class="date">2017/07/17</span>
                             </div>
                             <div class="txt">感謝大大分享</div>
                        </div>
                        <div class="quit">檢舉</div>
                  </div><!-- feed -->
                  <div class="feed_t">
                        <div class="icon">
                              <img src="images/4wavepoint/user/user.jpg">
                        </div>
                        <div class="last">
                             <textarea name="feed" id="feed_txt"></textarea>
                             <div class="less">
                                   <input type="submit" value="送出" id="feedpo">
                             </div>
                        </div>
                  </div>
            </div>
      </div><!-- main_11 -->    
     </div><!-- bg_11 -->
     
     <!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>

</body>
</html>