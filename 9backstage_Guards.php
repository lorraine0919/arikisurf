<?php 
try{
require_once('connectBooks.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
  <!--(bake module/backstage_head.html)--><?php require_once('publicpage/backstage_head.php'); ?>
    <title>Ariki Surf - 後臺管理</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/9backstage_welcome.css">  -->
    <link rel="stylesheet" type="text/css" href="css/9backstage_Guards.css">
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<!--(bake module/backstage_header.html)--><?php require_once('publicpage/backstage_header.php'); ?>
        <div class="main35" id="main-content">
            <div class="wrapper">
                <div class="row mt">
                  
                    <div class="whitearea col-lg-12 table">

                      <!-- 板型控制開始 -->
                        <div class="model content-panel ">
                          <h4><i class="fa fa-angle-right"></i>管理人員</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>編號</th>
                                    <th>帳號</th>
                                    
                                    <th class="numeric">狀態管理</th>

                                </tr>
                              </thead>
                                <tbody>
                                  <?php 
                                        $sql = 'select * from  manager';
                                        $pdostatement=$pdo->prepare($sql);
                                        $pdostatement->execute();
                                        $i=0;
                                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){/*↓如果抓的到板型資料*/ 

                                   ?>
                                  
                                      <tr class="modeltr t<?php echo $i?>">
                                          <td><?php echo  $pdoRow['manager_no'] ?></td>
                                          <td><?php echo  $pdoRow['manager_ac'] ?></td>
                                          
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
                                          }/*↑如果抓的到板型資料*/

                                       ?>



                                </tbody>
                          
                          </table>
                          <h4><i class="fa fa-angle-right"></i>新增管理人員</h4>
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
                        </div>
  
                       

                    </div><!-- 白色區域結束 -->        
                  
               </div>

            </div> 
        </div><!-- main35 -->
<!--(bake module/backstage_footer.html)-->
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