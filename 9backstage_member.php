<?php 
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

                      <!-- 白色區域開始 -->
                        <div class="model content-panel ">

                          <h4><i class="fa fa-angle-right"></i>會員搜尋</h4>
                           <table class="table table-bordered table-striped table-condensed">
                              <tr>
                                <td>
                                <input type="text" name="" class="new_guardsR">
                                </td>
                                <td>
                                  <input type="password" name="" class="new_guardsG">
                                </td>
                                <td>
                                <input type="submit" name="" class="new_guardsB">
                               </td>
                              </tr>
                           </table>

                          <h4><i class="fa fa-angle-right"></i>會員列表</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>會員編號</th>
                                    <th>帳號</th>
                                    <th>姓名</th>
                                    <th>性別</th>
                                    <th>連絡資料</th>
                                    <th>註冊時間</th>
                                    <th>資料更新時間</th>
                                    <th class="numeric">狀態管理</th>            
                                </tr>
                              </thead>
                                <tbody>
                                  <?php 
                                        $sql = 'select * from member';
                                        $pdostatement=$pdo->prepare($sql);
                                        $pdostatement->execute();
                                        $i=0;
                                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){
                                          /*如果抓的到會員資料*/ 

                                   ?>                        
                                      <tr class="modeltr t<?php echo $i?>">
                                          <td><?php echo  $pdoRow['member_no']?></td>
                                          <td><?php echo  $pdoRow['account']?></td>
                                          <td><?php echo  $pdoRow['name']?></td>
                                          <td><?php echo  $pdoRow['gender']?></td>
                                          <td>
                                            <?php echo  $pdoRow['city'],$pdoRow['area'],$pdoRow['address']?><br>
                                            <?php echo  $pdoRow['phone']?><br>
                                            <?php echo  $pdoRow['email']?><br>
                                          </td>
                                          <td><?php echo  $pdoRow['join_time']?></td>
                                          <td><?php echo  $pdoRow['renew_time']?></td>


                                          <td class="sellornotgroup">
                                            <div class="input-group">
                                                    <div class="btn-group">
                                                        <input type="hidden" value="<?php echo $pdoRow['status'] ?>" class="status">
                                                        <input type="hidden" value="<?php echo $pdoRow['manager_no'] ?>" class="no">

                                                        <a class="yesbtn btn btn-primary btn-sm backbooa">停用</a>
                                                        <a class="nobtn btn btn-primary btn-sm backboob">啟用</a>
                                                        <a class="nobtn btn btn-primary btn-sm backboor">刪除</a>
                                                    </div>
                                            </div>
                                          </td>
                                      </tr>

                                      
                                       <?php   
                                          $i++;
                                          }/*↑如果抓的到會員資料*/
                                       ?>


                                </tbody>
                          
                          </table>

                        </div>

                    </div><!-- 白色區域結束 -->        
                  
               </div>

            </div> 
        </div><!-- main35 -->
<?php require_once('publicpage/backstage_footer.php'); ?>

<script type="text/javascript" src="js/backstage/backstage_backboo.js"></script>

<?php 
  }catch(PDOException $e){
    echo $e->getLine();
    echo $e->getMessage();
  }
 ?>
</body>
</html>