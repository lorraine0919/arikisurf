<?php 
require_once("connectBooks.php");
$sql="select * from map_wave";
$map = $pdo->query($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
      <!--(bake module/backstage_head.html)--><?php require_once('publicpage/backstage_head.php'); ?>
    <title>Ariki Surf - 後臺管理</title> 
    <style type="text/css">
      #g4{
        width: 300px;
      }
      #g5{
        width: 600px;
        resize: none;
      }
    </style>
    <script src="js/jquery.js"></script>
    <script src="js/9backstage_news.js"></script>
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<!--(bake module/backstage_header.html)--><?php require_once('publicpage/backstage_header.php'); ?>
        <div class="main35" id="main-content">
            <div class="wrapper">
                <div class="row mt">
                   <div class="col-sm-12">
                        <div class="showback">
                            <h4><i class="fa fa-angle-right"></i>浪點資訊管理</h4>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">浪點管理</a></li>
                            <li><a data-toggle="tab" href="#menu1">討論區資訊管理</a></li>
                            <li><a data-toggle="tab" href="#menu2">檢舉管理</a></li>
                        </ul>
                    </div><!-- col-sm-12 -->
                    <div class="col-md-12">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
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
                                  <td><?php echo $mapRow["wave_number"]?></td>
                                  <td><input type="text" value="<?php echo $mapRow["wave_title"]?>"></td>
                                  <td><input type="text" id="g4" value="<?php echo $mapRow["wave_p"]?>"></td>
                                  <td>
                                  <textarea name="textarea" id="g5" cols="30" rows="10"><?php echo $mapRow["wave_info"]; ?>
                                  </textarea></td>
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
                                      <form action="#">
                                          <div class="btn-group">
                                              <input type="hidden" name="prod_sold" value="<?php echo $mapRow['wave_number']?>" >
                                              <a class="yesbtn btn btn-primary btn-sm change" id="upmap">清除</a>
                                              <a class="yesbtn btn btn-primary btn-sm change" id="upmap">修改</a>
                                          </div>
                                     </form>                           
                                  </td>
                              </tr>
                     <?php  } ?><!-- while -->         
                              </tbody>
                          </table>
                   </div><!-- home --> 
                   <div id="menu1" class="tab-pane fade">
                     <div class="model content-panel ">
                          <table class="table">
                            <thead>
                              <tr>
                                  <th>浪點編號</th>
                                  <th>浪點名稱</th>
                                  <th>討論區標題</th>
                                  <th>討論區內文</th>
                                  <th>發表會員</th>
                                  <th>發表日期</th>
                                  <th>評分</th>
                              </tr>
                              </thead>
                          </table>
                     </div>
                   </div><!-- menu1 --> 
                   <div id="menu2" class="tab-pane fade">
                     <h4><i class="fa fa-angle-right"></i>已檢舉之發表</h4>
                     <div class="model content-panel ">
                          <table class="table">
                            <thead>
                              <tr>

                              </tr>
                              </thead>
                          </table>
                     </div>
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
           $('#upmap').click(function(){
              console.log("123");
              $.post('9backstage_map_up1.php',{
                'member_no':$(this)...
              },function(rs){
                  location.reload('9backstage_map.php');
              });
           });
        });
</script>
</html>