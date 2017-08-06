<?php 
ob_start();
session_start();
$wave_number = $_SESSION["map_wave"]["wave_number"];
require_once("connectBooks.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/forum.css">
  <link rel="stylesheet" type="text/css" href="css/star.css">
  <script src="js/showMap.js"></script>
  <script src="js/map_up.js"></script>
  <script src="js/map_addColor.js"></script>
  <title>酋長衝浪Ariki Surf-討論區</title>
</head>
<body>
      <!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
      <a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
      <a href="map.php">衝浪地圖</a><i class="fa fa-caret-right" aria-hidden="true"></i>討論區
      <!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
      <div id="content_10">
        <form id="po" method="post" action="map_intoDB.php" enctype="multipart/form-data">              
               <div class="poItem i1">
                    <div class="pot">文章標題</div> 
                    <div class="pob">
                          <input type="text" id="title" name="title" placeholder="最多10個字" maxlength="10">
                    </div>
               </div>
               <div class="poItem i3">
                     <div class="dl">
                          <div class="pot">上傳檔案</div>
                          <label for="file" id="upload">
                                 <img src="images/4wavepoint/uploadbtn.jpg">
                          </label>
                          <input type="file" id="file" name="file">
                     </div>
                     <div class="dr">
                          <div class="pot">預覽</div>
                          <div class="preview"><img id="image"></div>
                     </div>
               </div>
               <div class="poItem i4">
                     <div class="pot">文章內容</div>                   
                     <div class="last">
                           <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
                           <div class="bt">
                                 <input type="submit" value="送出">
                                 <input type="reset" value="清除" id="gg">
                           </div>
                     </div>
               </div>
               <div id="close">X</div>                     
        </form>      
      </div><!-- content_10 -->
<?php           
           
           $sql2="select * from map_wave where wave_number=$wave_number";
           $wave = $pdo->query($sql2);
           $waveRow = $wave->fetch(PDO::FETCH_ASSOC);         
?>
       <div class="bg_10">
         <div class="info_10">
           <div class="ic wave">
             <img src="images/4wavepoint/w1.png">
             <span>滿潮</span><br>
             <span>浪況 : <span class="good">
             <?php 
                  switch($waveRow["wave_state"]){
                    case 1:
                           echo "差";
                           break;
                    case 2:
                           echo "不良";
                           break;
                    case 3:
                           echo "普通";
                           break;              
                    case 4:
                           echo "好";
                           break;
                    case 5:
                           echo "優良";
                           break;              
                  }
             ?>
             </span></span> 
           </div>
           <!-- <div class="ic weather">32°C</div>  -->
           <div class="ic weather"><?php echo $waveRow["wave_weather"] ?></div>    
         </div> <!-- info_10 div1-->     
         <div class="beach_10">
           <div class="beach_h">
                <!-- <h2>PIPELIN</h2> -->
                <h2><?php echo $waveRow["wave_title"] ?></h2>
                <p><?php  echo $waveRow["wave_p"]?></p>
           </div>
           <div class="beach_txt">
               <!--  <p>頭頂著一輪俏皮的彎月,靜靜地享受和愛的人在一起的寧靜時光。來吧,嘉善路邊的月砂森林,這裡有你遺落的安然。</p>
                <p>小屋是來自米蘭國際設計週的設計師@企鵝沈虹設計的,位於嘉善路和永康路的三岔口永盛里內,四通八達的小巷把老上海的風味都嵌在了裡面,別晃
                眼~這裡真的有沙灘哦!出門50米,有老人坐在門口聽著滬劇小調聊著天,再往外走就是不得不來上一杯的永康路,露天酒吧、法式麵包店、質感家具店
                和街道旁隨處停著的哈雷機車......一切都在嘗試拖住你的步伐,讓你慢下來享受這個瞬間。</p>
                <p>穿過熱鬧非凡的街道,回到月砂森林,關上白色的小門。迎接你的是紮染的質感布條,木質、竹編的椅子,還有帶著年輪的樹樁,直接把你捲入了清香瀰漫
                的靜謐海畔叢林。</p> -->
                <?php  echo $waveRow["wave_info"]?>
           </div><!-- beach_txt -->          
         </div><!-- beach_10 --> 
         <div class="fourm">
            <ul>
               <li>排序</li>
               <li id="postDate">發表日期</li>
               <li id="viewPost">瀏覽次數</li>
               <li id="starPost">評價分數</li>
               <li id="post">發表文章</li>
           </ul>  
           <section class="talk">
<?php 
       $sql="select * from map_post where wave_number=$wave_number order by post_date DESC";
       $data = $pdo->query($sql);
       while($dataItem = $data->fetch(PDO::FETCH_ASSOC)) {
?>
              <div class="item">
                 <a href="map_forum_discussion.php?post_number=<?php echo $dataItem["post_number"] ?>" class="map_a">                  
                     <div class="pic_i">                      
                            <img src='images/4wavepoint/<?php echo $wave_number ?>/fou/<?php echo $dataItem["post_img"]  ?>'>
                     </div>
                     <div class="text">
                         <h3><?php echo $dataItem["post_title"]  ?></h3>
                         <div class="day"><?php echo substr($dataItem["post_date"],0,10)?></div>
                         <div class="tt">
                               <?php echo $dataItem["post_text"]  ?>
                         </div>             
                     </div>
                 </a>
                     <div class="item_border">
                         <div class="star"></div>
                         <div class="view">
                             <div class="see">
                              <img src="images/4wavepoint/view.png" alt="view">
                              </div>                             
                              <!-- <div class="watch">120</div>       -->
                              <div class="watch"><?php echo $dataItem["post_view"]  ?></div>      
                         </div>
                     </div>                    
               </div><!-- item -->
<?php 
     }//while end
 ?>

       <script>
              $('#gg').click(function(){
                  $('#title').val('');
                  $('#image').src('');
                  $('#textarea').val('');            
              });

              function orderByDate(jsonStr){
                 var o_date = JSON.parse( jsonStr );
                 for(var x in o_date){
                 // console.log(o_date[x]);
                    var newimg = document.createElement("img"); 
                    newimg.src = "images/4wavepoint/"+"<?php echo $wave_number ?>"+"/fou/"+o_date[x].post_img;   
                    $('.item .pic_i').eq(x).append(newimg);
                    $('.day').eq(x).text(o_date[x].post_date.substr(0,10));
                    $('.text h3').eq(x).text(o_date[x].post_title);
                    $('.tt').eq(x).text(o_date[x].post_text);
                    $('.watch').eq(x).text(o_date[x].post_view);
                    var newhref="map_forum_discussion.php?post_number="+o_date[x].post_number;
                    $('.map_a').eq(x).attr('href',newhref);
                 }                
              }//orderByDate function

              $('#postDate').click(function(){
                  var xhr = new XMLHttpRequest();
                  url = "order.php";
                  xhr.open("get", url , true);
                  xhr.send(null);

                  xhr.onreadystatechange = function(){
                    if( xhr.readyState == 4){
                      if( xhr.status == 200){
                        $('.talk .pic_i').empty();
                        $('.day').text('');
                        $('.text h3').text('');
                        $('.tt').text('');
                        $('.watch').text('');
                        orderByDate(xhr.responseText); 
                      }else{
                        window.alert("錯誤".xhr.status);
                      }
                    }
                  }
              });//click

               function orderByView(jsonStr){
                 var o_date = JSON.parse( jsonStr );
                 for(var x in o_date){
                 // console.log(o_date[x]);
                    var newimg = document.createElement("img"); 
                    newimg.src = "images/4wavepoint/"+"<?php echo $wave_number ?>"+"/fou/"+o_date[x].post_img;   
                    $('.item .pic_i').eq(x).append(newimg);
                    $('.day').eq(x).text(o_date[x].post_date.substr(0,10));
                    $('.text h3').eq(x).text(o_date[x].post_title);
                    $('.tt').eq(x).text(o_date[x].post_text);
                    $('.watch').eq(x).text(o_date[x].post_view);
                    var newhref="map_forum_discussion.php?post_number="+o_date[x].post_number;
                    $('.map_a').eq(x).attr('href',newhref);
                 }                
              }//orderByView function

              $('#viewPost').click(function(){
                  var xhr = new XMLHttpRequest();
                  url = "orderByView.php";
                  xhr.open("get", url , true);
                  xhr.send(null);

                  xhr.onreadystatechange = function(){
                    if( xhr.readyState == 4){
                      if( xhr.status == 200){
                        $('.talk .pic_i').empty();
                        $('.day').text('');
                        $('.text h3').text('');
                        $('.tt').text('');
                        $('.watch').text('');
                        orderByDate(xhr.responseText); 
                      }else{
                        window.alert("錯誤".xhr.status);
                      }
                    }
                  }
              });//click

              function orderByStar(jsonStr){
                 var o_date = JSON.parse( jsonStr );
                 for(var x in o_date){
                 // console.log(o_date[x]);
                    var newimg = document.createElement("img"); 
                    newimg.src = "images/4wavepoint/"+"<?php echo $wave_number ?>"+"/fou/"+o_date[x].post_img;   
                    $('.item .pic_i').eq(x).append(newimg);
                    $('.day').eq(x).text(o_date[x].post_date.substr(0,10));
                    $('.text h3').eq(x).text(o_date[x].post_title);
                    $('.tt').eq(x).text(o_date[x].post_text);
                    $('.watch').eq(x).text(o_date[x].post_view);
                    var newhref="map_forum_discussion.php?post_number="+o_date[x].post_number;
                    $('.map_a').eq(x).attr('href',newhref);
                 }                
              }//orderByView function

              $('#starPost').click(function(){
                  var xhr = new XMLHttpRequest();
                  url = "orderByStar.php";
                  xhr.open("get", url , true);
                  xhr.send(null);

                  xhr.onreadystatechange = function(){
                    if( xhr.readyState == 4){
                      if( xhr.status == 200){
                        $('.talk .pic_i').empty();
                        $('.day').text('');
                        $('.text h3').text('');
                        $('.tt').text('');
                        $('.watch').text('');
                        orderByStar(xhr.responseText); 
                      }else{
                        window.alert("錯誤".xhr.status);
                      }
                    }
                  }
              });//click
        </script>
           </section>
         </div><!-- fourm --> 
       </div><!-- bg_10 -->
      <!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
  <script>
    var bgsrc = 'images/4wavepoint/<?php echo $wave_number ?>/bg_f.jpg';
    console.log(bgsrc);
    $('.bg_10').css('background-image','url(\"images/4wavepoint/<?php echo $wave_number ?>/bg_f.jpg\")');  
  </script>
</body>
</html>