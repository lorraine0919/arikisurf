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
    <link rel="stylesheet" type="text/css" href="css/9backstage_surfshop.css">
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<!--(bake module/backstage_header.html)--><?php require_once('publicpage/backstage_header.php'); ?>
        <div class="main35" id="main-content">
            <div class="wrapper">
                <div class="row mt">
                  
                    <div class="whitearea col-lg-12 table">

                      <!-- 配備管理開始 -->
                        <div class="model content-panel ">
                          <h4><i class="fa fa-angle-right"></i>配備管理</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>商品編號</th>
                                    <th>商品名稱</th>
                                    <!-- <th>商品價格</th>
                                    <th>商品庫存</th> -->
                                    <th>商品圖片</th>
                                    <th class="numeric">上下架</th>
                                </tr>
                              </thead>
                                <tbody>
                                  <?php 
                                        $sql = 'select * from surfequipped';
                                        $pdostatement=$pdo->prepare($sql);
                                        $pdostatement->execute();
                                        $i=0;
                                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){/*↓如果抓的到板型資料*/ 

                                   ?>
                                  
                                      <tr class="modeltr t<?php echo $i?>">
                                          <td><?php echo  $pdoRow['prod_no'] ?></td>
                                          <td><?php echo  $pdoRow['prod_name'] ?></td>
                                          <!-- <td><?php echo  $pdoRow['prod_price'] ?></td> -->
                                          <!-- <td><?php echo  $pdoRow['prod_qua'] ?></td> -->
                                          <td><img src="images/3accessories/<?php echo  $pdoRow['prod_img'] ?>"></td>
                                          <td>
                                            <div class="input-group">
                                                <form action="9backstage_surfshop_update.php">
                                                    <div class="btn-group">
                                                        <input type="hidden" name="prod_sold" value="<?php echo $pdoRow['prod_sold'] ?>" class="sellornot">
                                                        <input type="hidden" name="prod_no" value="<?php echo $pdoRow['prod_no'] ?>" class="prod_no">
                                                        <a class="yesbtn btn btn-primary btn-sm">上架</a>
                                                        <a class="nobtn btn btn-primary btn-sm">下架</a>
                                                    </div>
                                                </form>
                                            </div>
                                          </td>
                                      </tr>
                                       <?php   
                                          $i++;
                                          }/*↑如果抓的到板型資料*/

                                       ?>

                                </tbody>
                          </table>
                        </div>
                      <!-- 結束 -->


                     
                    </div><!-- 白色區域結束 -->        
                  
               </div>

            </div> 
        </div><!-- main35 -->
<!--(bake module/backstage_footer.html)--><?php require_once('publicpage/backstage_footer.php'); ?>
<script type="text/javascript" src="js/backstage/backstage_surfshop.js"></script>


<?php 


}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

 ?>

</body>

</html>