<?php 
require_once("connectBooks.php");
$sql="select * from map_wave";
$map = $pdo->query($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<head> 
<?php require_once('publicpage/backstage_head.php'); ?>
    <title>Ariki Surf - 後臺管理</title> 
    <link rel="stylesheet" type="text/css" href="css/9backstage_map.css">
    <script src="js/jquery.js"></script>
    <script src="js/9backstage_map.js"></script>
</head>
<body>
<!-- =================刪除光箱================== -->
<div class="lightmap">
      <div class="cont">
           確定刪除?
          <div class="ob">
            <div class="btt back">取消</div>
            <div class="btt delpos">送出</div>
          </div>
           <div id="clo">x</div>
      </div>
</div>
<!-- =================後臺管理================== -->
<?php require_once('publicpage/backstage_header.php'); ?>
        <div class="main35" id="main-content">
            <div class="wrapper">
                <div class="row mt">
                   <div class="col-sm-12">
                        <div class="showback">
                            <h4><i class="fa fa-angle-right"></i>浪點資訊管理</h4>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">浪點管理</a></li>
                            <li><a data-toggle="tab" href="#menu1">討論區檢舉管理</a></li>
                            <li><a data-toggle="tab" href="#menu2">留言檢舉管理</a></li>
                        </ul>
                    </div><!-- col-sm-12 -->
                    <div class="col-md-12">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                    <div class="model content-panel ">
                             <table class="table">
                              <thead>
                              <tr>
                                  <th>浪點編號</th>
                                  <th>浪點名稱</th>
                                  <th id="g4">浪點標題</th>
                                  <th id="g5">浪點簡介</th>
                                  <th>浪點狀況</th>
                                  <th>浪點溫度</th>
                                  <th>修改</th>
                              </tr>
                              </thead>
                              <tbody>
                     <?php while ( $mapRow=$map->fetch(PDO::FETCH_ASSOC)) { ?>
                              <tr>
                                  <td class="wave_number"><?php echo $mapRow["wave_number"]?></td>
                                  <td class="wave_title"><input type="text" class="title" value="<?php echo $mapRow["wave_title"]?>"></td>
                                  <td class="wave_p"><input type="text" class="g4" value="<?php echo $mapRow["wave_p"]?>"></td>
                                  <td class="wave_info">
                                  <textarea name="textarea" class="g5" cols="30" rows="10"><?php echo $mapRow["wave_info"]; ?></textarea></td>
                                  <td>
                                  <?php 
                                        switch($mapRow["wave_state"]){
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
                                  </td>
                                  <td><?php echo $mapRow["wave_weather"]?></td>
                                  <td>
                                      <div class="input-group">
                                        <div class="btn-group">
                                            <input type="hidden" class="wave_number" name="prod_sold" value="<?php echo $mapRow['wave_number']?>" >
                                            <a class="yesbtn btn btn-primary btn-sm change upmap2" >修改</a>
                                        </div>                          
                                  </td>
                              </tr>
<?php  } ?><!-- while end-->         
                              </tbody>
                          </table>
                    </div>      
                   </div><!-- home -->                    
                   <div id="menu1" class="tab-pane fade">
                     <div class="model content-panel ">
<?php 
     $sql="select *
           from map_post
           where post_state=2
           order by map_post.post_number";
     $data = $pdo->query($sql);
     while ($dataRow = $data->fetch(PDO::FETCH_ASSOC)) {              
?>                     
                          <table class="table">
                            <thead>
                                <tr>
                                  <th>浪點編號</th>
                                  <th>討論區標題</th>
                                  <th>討論區內文</th>
                                  <th>發表會員</th>
                                  <th>發表日期</th>
                                  <th>評分</th>
                                  <th>檢舉狀態</th>
                                  <th>修改</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td><?php echo $dataRow["wave_number"]; ?></td>
                                  <td class="postT"><?php echo $dataRow["post_title"]; ?></td>
                                  <td class="postBang"><?php echo $dataRow["post_text"]; ?></td>
                                  <td><?php echo $dataRow["member_no"]; ?></td>
                                  <td><?php echo $dataRow["post_date"]; ?></td>
                                  <td><?php echo $dataRow["star_score"]?></td>
                                  <td class="qu"><?php
                                      if($dataRow["post_state"]=="1"){
                                          echo "未檢舉";
                                      }else if($dataRow["post_state"]=="2"){
                                          echo "<span class='red'>檢舉中</span>";
                                      } 
                                     ?>
                                  </td>
                                  <td>
                                    <div class="input-group">
                                        <div class="btn-group">
                                          <input type="hidden" class="post_number" name="post_number" value="<?php echo $dataRow['post_number']?>" >
                                          <a class="yesbtn btn btn-primary btn-sm dpost">修改</a>
                                     </div>
                                  </td>
                                </tr>
                              </tbody>
                          </table>
<?php 
     } //while end
 ?>                                                 
                     </div>
                   </div><!-- menu1 -->                 
                   <div id="menu2" class="tab-pane fade">
                     <div class="model content-panel ">
<?php 
     $sqlreply="select *
                from map_reply
                where reply_state=2
                order by reply_number";
     $reply = $pdo->query($sqlreply);
     while ($replyRow = $reply->fetch(PDO::FETCH_ASSOC)) {              
?>                     
                          <table class="table">
                            <thead>
                              <tr>
                                  <th>討論區編號</th>
                                  <th>留言內容</th>
                                  <th>留言會員</th> 
                                  <th>留言日期</th>
                                  <th>檢舉狀態</th>
                                  <th>修改</th>
                                </tr>
                              </thead>
                             <tbody>
                               <tr>
                                  <td><?php echo $replyRow["post_number"]; ?></td> 
                                  <td class="replyWidth"><?php echo $replyRow["reply_content"]?></td>
                                  <td><?php echo $replyRow["name"];?></td>
                                  <td><?php echo $replyRow["reply_time"];?></td>
                                  <td><?php
                                      if($replyRow["reply_state"]=="1"){
                                          echo "未檢舉";
                                      }else if($replyRow["reply_state"]=="2"){
                                          echo "<span class='red'>檢舉中</span>";
                                      } 
                                     ?>                                    
                                  </td>
                                  <td>
                                    <div class="input-group">
                                        <div class="btn-group">
                                            <input type="hidden" class="reply_number" name="reply_number" value="<?php echo $replyRow['reply_number']?>" >
                                            <a class="yesbtn btn btn-primary btn-sm dreply">修改</a>
                                     </div>
                                  </td>
                               </tr>
                             </tbody> 
                          </table>
<?php 
     }//while end
 ?>                          
                     </div><!-- model -->
                   </div><!-- menu2 --> 
                  </div><!-- tab-content --> 
                  </div><!-- col-md-12 -->                      
                </div> <!-- col-md-12 -->  
            </div><!-- row mt -->
           </div><!--  wrapper -->
        </div><!-- main35 -->
<!--(bake module/backstage_footer.html)--><?php require_once('publicpage/backstage_footer.php'); ?>
</body>
<script>
        $(document).ready(function(){

           $('.upmap2').click(function(){
              console.log($(this).siblings('.wave_number').val());
              console.log($(this).parent().parent().parent().parent().find('.title').val());
              console.log($(this).parent().parent().parent().parent().find('.g4').val());
              console.log($(this).parent().parent().parent().parent().find('.g5').val());
              
              $.post('9backstage_map_up1.php',{
                'wave_number':$(this).siblings('.wave_number').val(),
                'wave_title':$(this).parent().parent().parent().parent().find('.title').val(),
                'wave_p':$(this).parent().parent().parent().parent().find('.g4').val(),
                'wave_info':$(this).parent().parent().parent().parent().find('.g5').val()
              },function(rs){
                  // alert(rs);
                  location.reload('9backstage_map.php');
              });
           });//upmap2 click
        });
</script>
</html>