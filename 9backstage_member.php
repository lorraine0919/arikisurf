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
                          <h4 style="display: none;"><i class="fa fa-angle-right"></i>會員搜尋</h4>
                          <table class="table table-bordered table-striped table-condensed" style="display: none;">
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
                                      // $choise = ;
                                      $sql = 'select * from member';
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
                                ?>

                                    <tr class="memNo modeltr t<?php echo $i?>">
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
                                                <form action="authority.php?test=2">
                                                    <input type="hidden" name="suspension" value="<?php echo $eachMember['suspension'] ?>" class="suspension">
                                                    <input type="hidden" name="member_no" value="<?php echo $eachMember['member_no'] ?>" class="no">
                                                    <input type="submit"  class="availiblebtn btn btn-primary btn-sm backbooa" value="啟用中">
                                                    <input type="submit"  class="stopbtn btn btn-primary btn-sm backboob" value="停權中" >
                                                    <!-- <input type="submit"  class="availiblebtn btn btn-primary btn-sm backbooa" <?php echo ($eachMember['suspension']==1)? "disabled":""; ?> value="啟用"> -->
                                                    <!-- <input type="submit"  class="stopbtn btn btn-primary btn-sm backboob" <?php echo ($eachMember['suspension']==2)? "disabled":""; ?> value="停權" > -->
                                                </form>
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
  console.log($('.availiblebtn').length);

  for(var i=0;i<$('.availiblebtn').length;i++){
    console.log($('.suspension').eq(i).val());
   if ($('.suspension').eq(i).val()=='1') {
      $('.availiblebtn').eq(i).css('background-color','#e97b23');
      $('.availiblebtn').eq(i).css('border-color','#fa0');
      $('.stopbtn').eq(i).css('display','none');
   }else{
      $('.stopbtn').eq(i).css('background-color','#428bca');
      $('.stopbtn').eq(i).css('border-color','#357ebd');
      $('.availiblebtn').eq(i).css('display','none');
   }
  }
</script>

<?php 
  }catch(PDOException $e){
    echo $e->getLine();
    echo $e->getMessage();
  }
?>

</body>
</html>