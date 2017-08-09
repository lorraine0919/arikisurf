<?php 
ob_start();
session_start();
$wave_number = $_SESSION["map_wave"]["wave_number"];
require_once("connectBooks.php");

if(isset($_SESSION["member_no"])==true){
  $member_no = $_SESSION["member_no"];  
}else{
  $member_no = 7;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
  <link rel="stylesheet" type="text/css" href="css/forum.css">
  <link rel="stylesheet" type="text/css" href="css/star.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/fontawesome-stars.css">
  <script src="js/jquery.barrating.min.js" type="text/javascript"></script>
  <script src="js/showMap.js"></script>
  <script src="js/map_up.js"></script>
  <script src="js/map_addColor.js"></script>
  <script src="js/forum_check.js"></script>
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
                    <div class="pot">文章標題<span class="sred"> *</span></div> 
                    <div class="pob">
                      <input type="text" id="title" name="title" placeholder="最多10個字" maxlength="10">
                    </div>
               </div>
               <div class="poItem i3">
                     <div class="dl">
                          <div class="pot">上傳檔案<span class="sred"> *</span></div>
                          <label for="file" id="upload">
                                 <img src="images/4wavepoint/uploadbtn.jpg">
                          </label>
                          <input type="file" id="file" name="file">
                     </div>
                     <div class="dr">
                          <div class="pot">預覽</div>
                          <div class="preview"><img id="image" src=" "></div>
                     </div>
               </div>
               <div class="poItem i4">
                     <div class="pot">文章內容<span class="sred"> *</span></div>                   
                     <div class="last">
                           <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
                           <div class="bt">
                                 <input type="button" value="送出" id="godb">
                                 <input type="reset" value="清除" id="gg">
                           </div>
                     </div>
               </div>
               <div id="close">X</div>                     
        </form>      
      </div><!-- content_10 -->
<?php           
           
           $sql2="select * from map_wave 
                  where wave_number=$wave_number";
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
           <div class="ic weather"><?php echo $waveRow["wave_weather"] ?></div>    
         </div> <!-- info_10 div1-->     
         <div class="beach_10">
           <div class="beach_h">
                <!-- <h2>PIPELIN</h2> -->
                <h2><?php echo $waveRow["wave_title"] ?></h2>
                <p><?php  echo $waveRow["wave_p"]?></p>
           </div>
           <div class="beach_txt">
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
       $count=0;
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
                        <select class="star">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <input class="gg" type="hidden" value="<?php echo $dataItem["star_score"]; ?>">
                        </select>
                         <div class="view">
                             <div class="see">
                              <img src="images/4wavepoint/view.png" alt="view">
                              </div>                             
                              <div class="watch"><?php echo $dataItem["post_view"]  ?></div>      
                         </div>
                     </div>                    
               </div><!-- item -->
<?php 
              $count++;
     }//while end
 ?>
      <script>
        var j =<?php echo $count ?>;
         $('.star').barrating({
            theme: 'fontawesome-stars'
         });
         
         for(var i=0;i<j;i++){
           $('.star').eq(i).barrating('set',$('.gg').eq(i).val());
         }
         $('.star').barrating('readonly',true);      
         $('#gg').click(function(){
            $('#title').val('');
            $('#image').src('');
            $('#textarea').val(''); 
            $('.star').remove();           
         });

      $(document).ready(function(){
        $('#post').click(function(){
            if(<?php echo $member_no ?>==7){
               alert("請登入會員");
            }else{
               $("#content_10").show();
            }          
          });
              function orderByDate(jsonStr){
                 var o_date = JSON.parse( jsonStr );
                 for(var x in o_date){
                 // console.log(o_date[x]);
                    var newimg = document.createElement("img"); 
                    newimg.src = "images/4wavepoint/"+"<?php echo $wave_number ?>"+"/fou/"+o_date[x].post_img;  
                    var newStar = document.createElement("select");
                    newStar.className = "star";
                     
                    var newop1 = document.createElement("option");
                    $(newop1).text('1');
                    $(newop1).val(1);
                    var newop2 = document.createElement("option");
                    $(newop2).text('2');
                    $(newop2).val(2);
                    var newop3 = document.createElement("option");
                    $(newop3).text('3');
                    $(newop3).val(3);
                    var newop4 = document.createElement("option");
                    $(newop4).text('4');
                    $(newop4).val(4);
                    var newop5 = document.createElement("option");
                    $(newop5).text('5');
                    $(newop5).val(5);

                    var newinput = document.createElement("input");
                    newinput.className = "gg";
                    newinput.type = 'hidden';
                    newinput.value =o_date[x].star_score;
                    $(newStar).append(newop1);
                    $(newStar).append(newop2);
                    $(newStar).append(newop3);
                    $(newStar).append(newop4);
                    $(newStar).append(newop5); 
                    $('.item .pic_i').eq(x).append(newimg);
                    $('.day').eq(x).text(o_date[x].post_date.substr(0,10));
                    $('.text h3').eq(x).text(o_date[x].post_title);
                    $('.tt').eq(x).text(o_date[x].post_text);
                    $('.item_border').eq(x).append(newStar);
                    $('.item_border').eq(x).append(newinput); 
                    $('.star').barrating({
                        theme: 'fontawesome-stars'
                     });
                    $('.star').eq(x).barrating('set',$('.gg').eq(x).val());
                    $('.view').css('float','right');
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
                        $('body').find('.br-wrapper.br-theme-fontawesome-stars').remove();
                        $('.gg').remove();
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
                    var newStar = document.createElement("select");
                    newStar.className = "star";
                     
                    var newop1 = document.createElement("option");
                    $(newop1).text('1');
                    $(newop1).val(1);
                    var newop2 = document.createElement("option");
                    $(newop2).text('2');
                    $(newop2).val(2);
                    var newop3 = document.createElement("option");
                    $(newop3).text('3');
                    $(newop3).val(3);
                    var newop4 = document.createElement("option");
                    $(newop4).text('4');
                    $(newop4).val(4);
                    var newop5 = document.createElement("option");
                    $(newop5).text('5');
                    $(newop5).val(5);

                    var newinput = document.createElement("input");
                    newinput.className = "gg";
                    newinput.type = 'hidden';
                    newinput.value =o_date[x].star_score;
                    $(newStar).append(newop1);
                    $(newStar).append(newop2);
                    $(newStar).append(newop3);
                    $(newStar).append(newop4);
                    $(newStar).append(newop5);   
                    $('.item .pic_i').eq(x).append(newimg);
                    $('.day').eq(x).text(o_date[x].post_date.substr(0,10));
                    $('.text h3').eq(x).text(o_date[x].post_title);
                    $('.tt').eq(x).text(o_date[x].post_text);
                    $('.watch').eq(x).text(o_date[x].post_view);
                    $('.item_border').eq(x).append(newStar);
                    $('.item_border').eq(x).append(newinput); 
                    $('.star').barrating({
                        theme: 'fontawesome-stars'
                     });
                    $('.star').eq(x).barrating('set',$('.gg').eq(x).val());
                    $('.view').css('float','right');
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
                        $('body').find('.br-wrapper.br-theme-fontawesome-stars').remove();
                        $('.gg').remove();
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
                    var newStar = document.createElement("select");
                    newStar.className = "star";
                     
                    var newop1 = document.createElement("option");
                    $(newop1).text('1');
                    $(newop1).val(1);
                    var newop2 = document.createElement("option");
                    $(newop2).text('2');
                    $(newop2).val(2);
                    var newop3 = document.createElement("option");
                    $(newop3).text('3');
                    $(newop3).val(3);
                    var newop4 = document.createElement("option");
                    $(newop4).text('4');
                    $(newop4).val(4);
                    var newop5 = document.createElement("option");
                    $(newop5).text('5');
                    $(newop5).val(5);

                    var newinput = document.createElement("input");
                    newinput.className = "gg";
                    newinput.type = 'hidden';
                    newinput.value =o_date[x].star_score;
                    $(newStar).append(newop1);
                    $(newStar).append(newop2);
                    $(newStar).append(newop3);
                    $(newStar).append(newop4);
                    $(newStar).append(newop5);  
                    
                    $('.item .pic_i').eq(x).append(newimg);                                        
                    $('.day').eq(x).text(o_date[x].post_date.substr(0,10));
                    $('.text h3').eq(x).text(o_date[x].post_title);
                    $('.tt').eq(x).text(o_date[x].post_text);
                    $('.watch').eq(x).text(o_date[x].post_view);
                    $('.item_border').eq(x).append(newStar);
                    $('.item_border').eq(x).append(newinput); 
                    $('.star').barrating({
                        theme: 'fontawesome-stars'
                     });
                    $('.star').eq(x).barrating('set',$('.gg').eq(x).val());
                    $('.view').css('float','right');
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
                        $('body').find('.br-wrapper.br-theme-fontawesome-stars').remove();
                        $('.gg').remove();
                        orderByStar(xhr.responseText); 
                      }else{
                        window.alert("錯誤".xhr.status);
                      }
                    }
                  }
              });//click
                   
              
       });
        </script>
           </section>
         </div><!-- fourm --> 
       </div><!-- bg_10 -->
     <?php require_once('publicpage/footer.php'); ?>
  <script>
    var bgsrc = 'images/4wavepoint/<?php echo $wave_number ?>/bg_f.jpg';
    console.log(bgsrc);
    $('.bg_10').css('background-image','url(\"images/4wavepoint/<?php echo $wave_number ?>/bg_f.jpg\")');  
  </script>
</body>
</html>