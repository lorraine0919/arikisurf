<?php 
ob_start();
session_start();
require_once("connectBooks.php");

$member_no = $_SESSION["member_no"];
$wave_number = $_SESSION["map_wave"]["wave_number"];
$_SESSION["map_reply"]["post_number"] = $_REQUEST["post_number"];

$post_number = $_REQUEST["post_number"];

$sqlview = "update map_post set post_view=post_view+1 where post_number=$post_number";
$pdo->exec($sqlview);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/fontawesome-stars.css">
  <link rel="stylesheet" type="text/css" href="css/discussion.css">
  <script src="js/jquery.barrating.min.js" type="text/javascript"></script>
  <script src="js/showMap.js"></script>
  <script src="js/reply.js"></script>
  <script src="js/getStar.js"></script>
  <style type="text/css">
    .red{
      color: #ed8c00;
    }
  </style>
  <title>酋長衝浪Ariki Surf-討論區內頁</title>
</head>
<body>
     <!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
     <a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
      <a href="map.php">衝浪地圖</a><i class="fa fa-caret-right" aria-hidden="true"></i><a href="map_forum.php">討論區</a><i class="fa fa-caret-right" aria-hidden="true"></i>討論區內文
      <!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
     <div id="lightbox_11">
          <div class="gun">
               <span class="reason">檢舉原因</span> 
               <input type="text" class="report" name="report">
               <div class="io">
                    <input type="button" value="取消" id="cancel">
                    <input type="submit" value="送出" id="submit">
               </div>
               <div id="close">X</div>
          </div>           
     </div><!-- lightbox_11 -->
     <div id="lightbox_12">
          <div class="gun2">
               <span class="reason2">檢舉原因</span> 
               <input type="text" class="report2" name="report2">
               <div class="io2">
                    <input type="button" value="取消" id="cancel2">
                    <input type="submit" value="送出" id="submit2">
               </div>
               <div id="close2">X</div>
          </div>           
     </div><!-- lightbox_11 -->
     <div id="lightbox2_11">
           <div class="ustar">
                  會員<span>XX</span>,你的評分為 <span></span> 顆星
                 <div id="cl">X</div>
           </div>
     </div><!-- lightbox2_11 -->
     <script>
             var postNumber = <?php echo $post_number; ?>; 
             console.log("發表文章編號為 : "+postNumber);
     </script>
<?php 
     $sql2="select * from member,map_post 
            where member.member_no = map_post.member_no 
            and wave_number=$wave_number 
            and post_number=$post_number";
     $post = $pdo->query($sql2);
     while ($postRow = $post->fetch(PDO::FETCH_ASSOC)) {    
?>    
     <div class="bg_11">
      <div class="title">
          <h1><?php echo $postRow["post_title"]; ?></h1>
          <div class="gol">
          <select class="star">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <input class="gg" type="hidden" value="<?php echo $postRow["star_score"]; ?>">
          </select>
<script>
      $(document).ready(function(){
         $('.star').barrating({
                theme: 'fontawesome-stars'
           });
         console.log($('.gg').val());
         $('.star').barrating('set',$('.gg').val());
       });
</script>          
<?php 
      $sqllove = "select * from map_like where post_number=$post_number";
      $aba = $pdo->query($sqllove);
      $love = ($aba->rowCount()!=0) ? "heart_red.png" : "heart_white.png";
?>
          <div class="lovepic">
               <img src="images/4wavepoint/<?php echo $love;?>" id="love">
               <div id="loveinfo"></div>         
          </div>
<?php 
     $sql="select post_state from map_post where post_number=$post_number";
     $state = $pdo->query($sql);
     $stateRow = $state->fetch(PDO::FETCH_ASSOC);
 ?>                
              <div class="quit" id="quit"><?php 
                          if($stateRow["post_state"]==1){
                                echo "檢舉";
                          }else{
                                echo "已檢舉";
                          }
                    ?></div>
                <script>//發言檢舉
                    $(document).ready(function(){                          
                        var a = $('#quit').text();
                        // console.log("有發言被檢舉"+a);
                        if(a=="已檢舉"){
                           $('#quit').css('color','#ED8C00');
                           $('#quit').unbind();
                        }
                    }) 

                    if($('#quit').text()=="已檢舉"){
                        $('#quit').unbind();
                     }

                     $('#cancel').click(function(){
                          $('.report').val('');
                     });
                     var submitcount=0;
                     $('#submit').click(function(){                           
                          if(submitcount==0){           //送出沒點過
                            var a = $('.report').val();
                            console.log(a);
                            function reqListener(){
                              console.log(this.responseText);                  
                          }

                          var xhr = new XMLHttpRequest();
                          xhr.onload = reqListener;
                          var url = "map_quittoDB.php?post_number=<?php echo $post_number?>&report="+a;
                          console.log(url);
                          xhr.open("get", url , true);
                          xhr.send(null);

                          $('#lightbox_11').hide(); 
                          $('#quit').text("已檢舉");
                          $('#quit').css('color','#ED8C00');
                          $('#quit').unbind();
                        }
                        submitcount++;
                     })  
                </script>
          </div>         
      </div><!-- title -->

     	<div class="main_11">
            <div class="box_t">
                  <div class="user">
                        <img src="<?php echo $postRow["mugshot"] ?>">
                  </div>
                  <div class="pos">
                        <div class="name"><?php echo $postRow["name"] ?></div>
                        <div class="time">發表時間 <span class="date"><?php echo substr($postRow["post_date"],0,10)?></span></div>
                  </div>
            </div>
            <div class="box_b">
                  <div class="pic">
                         <?php 
                         $src = "images/4wavepoint/".$wave_number."/fou/".$postRow["post_img"]; 
                         ?>
                         <img src="<?php echo $src ?>">                       
                  </div>
                  <div class="txt">
                        <?php echo $postRow["post_text"] ?>
                  </div>
            </div>
<?php 
    }//while end
?>             
            <div class="back">
            <script>
            var bangarr=[
<?php 
  $sqlreplybang="select *   
                 from  map_replybang 
                 where post_number=$post_number;";
  $pdostatement=$pdo->query($sqlreplybang);
  while($pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC)){
    echo  $pdorow['reply_number'].',';
  }
 ?>                ];
            console.log(bangarr);
            </script>
 
<?php 
       $sqlreply="select *
                  from member,map_reply
                  where member.member_no = map_reply.member_no
                  and post_number = $post_number";
       $re = $pdo->query($sqlreply);
       while($reRow = $re->fetch(PDO::FETCH_ASSOC)) {
?>                   
              <div class="feed"><!-- 留言開始 -->                                        
                    <div class="feed_c">
                         <div class="icon">                            
                              <img src="<?php echo $reRow["mugshot"] ?>">
                         </div>                         
                         <div class="feed_info">
                              <div class="name"><?php echo $reRow["name"] ?></div>
                              <span class="date"><?php echo substr($reRow["reply_time"],0,10) ?></span>
                         </div>
                         <div class="txt">
                              <?php echo $reRow["reply_content"] ?>                              
                         </div>
                         <input type="hidden" class="reply_number" name="reply_number" value="<?php echo $reRow["reply_number"]; ?>">
                         <input type="hidden" class="post_number" name="post_number" value="<?php echo $post_number ?>">
                    </div><!-- feed_c -->                                         
                    <div class="quit many"><?php
                    if($reRow["reply_state"]==1){
                          echo "檢舉";
                      }else{
                          echo '<span class="red">已檢舉</sapn>';
                        }?></div>
                    <input type="hidden" class="result" name="result" value="<?php echo $reRow["result"] ?>">
              </div><!-- feed -->
<?php 
       }//while end
?>                 
    <script>
      for (var i = 0; i < $('.result').length; i++) {
        if($('.result').eq(i).val()=="2"){
          $('.many').eq(i).css('color','#f00');
        }
      }
      
    </script>


<?php 
     $sqlimg="select mugshot from member where member_no=$member_no";
     $imgdata = $pdo->query($sqlimg);
     $imgRow = $imgdata->fetch(PDO::FETCH_ASSOC);
?>                                    
                  <div class="feed_t">
                        <div class="icon">                            
                             <img src="<?php echo $imgRow["mugshot"] ?>">
                        </div>
                        <div class="last">
                             <textarea name="feed" id="feed_txt"></textarea>
                             <div class="less">
                                   <input type="submit" value="送出" id="feedpo">
                             </div>
                        </div>
                  </div>
<script>
        function createTxt(jsonStr){
            var ct = JSON.parse( jsonStr );
            console.log("接收的JSON字串");
            var newfeed =  document.createElement("div");
            newfeed.className = "feed";

            var feed_t = document.getElementsByClassName("feed_t")[0];
            document.getElementsByClassName("back")[0].insertBefore(newfeed,feed_t);
            var c='<?php echo $imgRow["mugshot"] ?>';
            console.log(c);
            var str='<div class="feed_c">';
            str+='<div class="icon">';
            str+='<img src="'+c+'">';
            str+='</div>';
            str+='<div class="feed_info">';
            str+='<div class="name">';
            str+=ct.name;
            str+='</div>';
            str+='<span class="date">';
            str+=ct.reply_time.substr(0,10);
            str+='</span>';
            str+='</div>';
            str+='<div class="txt">';
            str+=ct.reply_content;
            str+='</div>';
            str+='</div>';
            str+='<div class="quit">';
            str+='檢舉';
            str+='</div>';
            document.getElementsByClassName("feed")[(document.getElementsByClassName("feed").length-1)].innerHTML = str;
        }

        $('#feedpo').click(function(){
             console.log("有點到");
             var xhr = new XMLHttpRequest();
             var her = $('#feed_txt').val();
             $('#feed_txt').val('');//把textarea的內容清空
             console.log(her);
             var post_number=<?php echo $post_number?>;
             var url = "map_replyintoDB.php?feed="+her+"&post_number="+post_number;
             console.log(url);
             xhr.open("get", url , true);
             xhr.send(null);

             xhr.onreadystatechange = function(){
              if( xhr.readyState == 4){
                if( xhr.status == 200){
                  createTxt(xhr.responseText); 
                }else{
                  window.alert("錯誤".xhr.status);
                }
              }
            }
        });//click
        
        $('#love').click(function(){
           // console.log("有點到");
           var a = $('#love').attr('src');
           // console.log(a);
           function reqListener () {
                  console.log(this.responseText);
                };
           var xhr = new XMLHttpRequest();
           xhr.onload = reqListener;

           if(a=="images/4wavepoint/heart_white.png"){
               console.log("AAA");
               $('#loveinfo').text("已加入收藏").fadeIn(900).fadeOut(500);;           
               $('#love').attr('src','images/4wavepoint/heart_red.png');
               
               var url = "map_liketoDB.php?post_number=<?php echo $post_number?>";
               console.log(url);
               xhr.open("get", url , true);
               xhr.send(null);

           }else{    
               $('#loveinfo').text("已取消收藏").fadeIn(900).fadeOut(500);;           
               $('#love').attr('src','images/4wavepoint/heart_white.png');
               
               var url = "map_disliketoDB.php?post_number=<?php echo $post_number?>";
               console.log(url);
               xhr.open("get", url , true);
               xhr.send(null);
           }
        });
</script>                  
            </div>
      </div><!-- main_11 -->    
     </div><!-- bg_11 --> 
     <!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
  <script>
    var bgsrc = 'images/4wavepoint/<?php echo $wave_number ?>/bg_f.jpg';
    console.log(bgsrc);
    $('.bg_11').css('background-image','url(\"images/4wavepoint/<?php echo $wave_number ?>/bg_f.jpg\")');  
  </script>
</body>
</html>