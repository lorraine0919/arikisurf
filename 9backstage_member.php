<?php 
ob_start();
session_start();
try{
require_once('connectBooks.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <?php require_once('publicpage/backstage_head.php'); ?>
    <title>Ariki Surf - 後臺管理</title>
    <link rel="stylesheet" type="text/css" href="css/9backstage_member.css">
</head>
<body>
<!-- =================後臺管理================== -->
<?php require_once('publicpage/backstage_header.php'); ?>
        <div class="main35" id="main-content">
            <div class="wrapper">
                <div class="row mt">
                    <div class="whitearea col-lg-12 table">
                        <div class="model content-panel">
                        <!-- 內容開始 -->

                          <!-- 上table開始 -->
                          <h4><i class="fa fa-angle-right"></i>會員搜尋</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <tr>
                                <td>
                                  <input type="text" name="" class="new_guardsR">
                                </td>
                                <td>
                                    <select class=" " id=" " name=" " onchange = " ";>
                                        <option value="">排序方式</option>
                                        <option value="account">帳號</option>
                                        <option value="name">姓名</option>
                                        <option value="city">城市</option>
                                        <option value="renew_time">更新時間</option>
                                        <option value="join_time">註冊時間</option>
                                    </select>
                                </td>
                                <td>
                                  <input type="button" name="btn38" id="btn38" class="new_guardsB" value="查詢">
                               </td>
                              </tr>
                          </table><!-- 上table結束 -->

                          <!-- 下table開始 -->
                          <h4><i class="fa fa-angle-right"></i>會員列表</h4>
                          <table class="table table-bordered table-striped table-condensed">
                            <thead>
                              <tr>
                                  <th>編號</th>
                                  <th>帳號</th>
                                  <th>姓名</th>
                                  <th>連絡資料</th>
                                  <th>更新時間</th>
                                  <th class="numeric">狀態</th>            
                              </tr>
                            </thead>
                              <tbody>
                                <?php 
                                      $choise = $_SESSION["map_wave"]["wave_number"];
                                      $sql = 'select * from member order by choise=$choise';
                                      $memberList=$pdo->prepare($sql);
                                      // $member->bindValue(":choise",$choise);
                                      /*問題一:排序*/
                                      $memberList->execute();
                                      $i=0;
                                        while($eachMember=$memberList->fetch(PDO::FETCH_ASSOC)){
                                        /*如果抓的到會員資料*/
                                      $gender=$eachMember['gender'];
                                      if($gender==1){
                                        $title="<br>先生";
                                      }else{$title="<br>女士";}

                                      $suspension==$eachMember['suspension'];
                                      if($suspension==1){
                                        
                                      }else{
                                      // for (var i = 0; i <$id('slct2').childNodes.length; i++) {
                                      //     if($id('slct2').childNodes[i].value==area){
                                      //         $id('slct2').childNodes[i].setAttribute('selected','selected');
                                      //     }
                                      // }
                                      }
                                ?>

                                    <tr class="modeltr t<?php echo $i?>">
                                        <td><?php echo  $eachMember['member_no']?></td>
                                        <td><?php echo  $eachMember['account']?></td>
                                        <td><?php echo  $eachMember['name'],$title?></td>
                                        <td>
                                          <?php echo  $eachMember['city'],$eachMember['area'],$eachMember['address']?><br>
                                          <?php echo  $eachMember['phone']?><br>
                                          <?php echo  $eachMember['email']?><br>
                                        </td>
                                        <td><?php echo  $eachMember['renew_time']?></td>


                                        <td class="sellornotgroup">
                                          <div class="input-group">
                                                <div class="btn-group">
                                                    <input type="hidden" value="<?php echo $eachMember['status'] ?>" class="status">
                                                    <input type="hidden" value="<?php echo $eachMember['manager_no'] ?>" class="no">
                                                    <a class="yesbtn btn btn-primary btn-sm backbooa" id="stop38">停用</a><br>
                                                    <a class="nobtn btn btn-primary btn-sm backboob" id="start38">啟用</a>
                                                </div>
                                          </div>
                                        </td>
                                    </tr>
                                   
                                     <?php   
                                        $i++;
                                        }/*↑如果抓的到會員資料*/
                                     ?>

                              </tbody>                          
                          </table><!-- 下table結束 -->

                        <!-- 內容結束 -->
                        </div>
                    </div>
                </div><!-- row mt -->
            </div><!-- wrapper -->
        </div><!-- main35 -->
<?php require_once('publicpage/backstage_footer.php'); ?>

<script type="text/javascript" src="js/backstage/backstage_backboo.js"></script>
<script type="text/javascript">

  window.onload = document.getElementById("btn38").addEventListener('click',Order,false);
</script>
<?php 
  }catch(PDOException $e){
    echo $e->getLine();
    echo $e->getMessage();
  }
 ?>
</body>
</html>