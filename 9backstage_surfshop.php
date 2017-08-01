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
 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">配備上下架</a></li>
    <li><a data-toggle="tab" href="#menu1">配備資訊</a></li>
    <li><a data-toggle="tab" href="#menu2">新增配備</a></li>
    <!-- <li><a data-toggle="tab" href="#menu3">Menu 3</a></li> -->
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
       <div class="model content-panel ">
          <h4><i class="fa fa-angle-right"></i>配備上下架管理</h4>
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
                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){ 

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
                          }

                       ?>

                </tbody>
          </table>
        </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="model content-panel ">
          <h4><i class="fa fa-angle-right"></i>配備資訊管理</h4>
          <table class="table table-bordered table-striped table-condensed">
              <thead>
                <tr>
                    <th>商品編號</th>
                    <th>商品名稱</th>
                    <th>商品價格</th>
                    <th>商品內容</th>
                    <th>商品庫存</th>
                    <th class="numeric">修改資料</th>
                </tr>
              </thead>
                <tbody>
                  <?php 
                        $sql = 'select * from surfequipped';
                        $pdostatement=$pdo->prepare($sql);
                        $pdostatement->execute();
                        $i=0;
                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){

                   ?>
                  
                      <tr class="modeltr t<?php echo $i?>">
                          <td><?php echo  $pdoRow['prod_no'] ?></td>
                          <td><textarea class="namechange"><?php echo  $pdoRow['prod_name'] ?></textarea></td>
                          <td><input type="number" value="<?php echo  $pdoRow['prod_price'] ?>" min="0" class="pricechange"></td>
                          <td><textarea class="deschange"><?php echo  $pdoRow['prod_des'] ?></textarea></td>
                          <td><input type="number" value="<?php echo  $pdoRow['prod_qua'] ?>" min="0" class="quachange"></td>
                          <td>
                          <input type="hidden" name="prod_no" value="<?php echo $pdoRow['prod_no'] ?>" class="prod_no">
                           <a class="equchangebtn">修改</a> 
                          </td>
                      </tr>
                       <?php   
                          $i++;
                          }

                       ?>

                </tbody>
          </table>
        </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="model content-panel ">
          <h4><i class="fa fa-angle-right"></i>配備新增管理</h4>
          <form action="9backstage_surfshop_update.php" method="post" enctype="multipart/form-data">
          <table class="table table-bordered table-striped table-condensed">
            <tr><td>商品名稱</td><td><textarea class="newName" name="newName" cols="30" rows="2"></textarea></td></tr>
            <tr><td>商品價格</td><td><input type="number" min="0" class="newPrice" name="newPrice"></td></tr>
            <tr><td>商品內容</td><td><textarea class="newDes" name="newDes" cols="30" rows="10"></textarea></td></tr>
            <tr><td>商品庫存</td><td><input type="number" min="0" class="newQua" name="newQua"></td></tr>
            <tr><td>商品品項</td><td><select class="newObj" name="newObj">
              <option value="Leash">衝浪腳繩</option>
              <option value="Fin">衝浪板舵</option>
              <option value="Wax">浪板蠟及相關</option>
              <option value="Suit">衝浪褲&防寒衣</option>
            </select></td></tr>
            <tr><td>圖檔</td><td><input type="file"  id="newImg" name="newImg"></td></tr>
            <tr><td colspan="2" align="center">
              <input type="hidden" name="prod_no" value="<?php echo $pdoRow['prod_no'] ?>" class="prod_no">
              <input type="submit" value="確定加入" class="newAdd">
            </td></tr>
          </table>
          </form>
        </div>
    </div>
   
  </div>
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
