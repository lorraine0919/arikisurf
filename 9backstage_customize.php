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
    <link rel="stylesheet" type="text/css" href="css/9backstage_customize.css">
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<!--(bake module/backstage_header.html)--><?php require_once('publicpage/backstage_header.php'); ?>
        <div class="main35" id="main-content">
            <div class="wrapper">
              <div class="lightboxgroup">
                <div class="lightboxarea">
                  <p class="lightboxcontent">修改成功</p>
                  <div id="closebtn">
                    <i class="fa fa-times" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
                <div class="row mt">
                  
                    <div class="whitearea col-lg-12 table">

                      <!-- 板型控制開始 -->
                        <div class="model content-panel ">
                          <h4><i class="fa fa-angle-right"></i>板型管理</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>板型編號</th>
                                    <th>板型名稱</th>
                                    <th>板型價格</th>
                                    <th class="numeric">上下架</th>
                                </tr>
                              </thead>
                                <tbody>
                                  <?php 
                                        $sql = 'select * from customize_model';
                                        $pdostatement=$pdo->prepare($sql);
                                        $pdostatement->execute();
                                        $i=0;
                                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){/*↓如果抓的到板型資料*/ 

                                   ?>
                                  
                                      <tr class="modeltr t<?php echo $i?>">
                                          <td><?php echo  $pdoRow['modelNo'] ?></td>
                                          <td><?php echo  $pdoRow['customize_model_name'] ?></td>
                                          <td><input type="number" value="<?php echo  $pdoRow['customize_model_price'] ?>" min="0" class="pricechange"><a class="pricechangebtn">修改</a></td>
                                          <td class="sellornotgroup">
                                            <div class="input-group">
                                                    <div class="btn-group">
                                                        <input type="hidden" value="<?php echo $pdoRow['customize_model_sellornot'] ?>" class="sellornot">
                                                        
                                                        <input type="hidden" value="<?php echo $pdoRow['modelNo'] ?>" class="no">
                                                        <input type="hidden" value="model" class="style">
  
                                                        <a class="yesbtn btn btn-primary btn-sm pressgolightbox">上架</a>
                                                        <a class="nobtn btn btn-primary btn-sm pressgolightbox">下架</a>
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
                        </div>
                      <!-- 板型控制結束 -->

                      <!-- 顏色控制開始 -->
                        <div class="color content-panel ">
                          <h4><i class="fa fa-angle-right"></i>顏色管理</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>顏色編號</th>
                                    <th>顏色名稱</th>
                                    <th class="numeric">上下架</th>
                                </tr>
                              </thead>
                                <tbody>
                                  <?php 
                                        $sql = 'select * from customize_color';
                                        $pdostatement=$pdo->prepare($sql);
                                        $pdostatement->execute();
                                        $i=0;
                                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){/*↓如果抓的到顏色資料*/ 

                                   ?>
                                  
                                      <tr class="colortr t<?php echo $i?>">
                                          <td><?php echo  $pdoRow['colorNo'] ?></td>
                                          <td><?php echo  $pdoRow['customize_color_name'] ?></td>
                                          <td  class="sellornotgroup">
                                            <div class="input-group">
                                                    <div class="btn-group">
                                                        <input type="hidden" value="<?php echo $pdoRow['customize_color_sellornot'] ?>" class="sellornot">
                                                        <input type="hidden" value="<?php echo $pdoRow['colorNo'] ?>" class="no">
                                                        <input type="hidden" value="color" class="style">
                                                        <a class="yesbtn btn btn-primary btn-sm pressgolightbox">上架</a>
                                                        <a class="nobtn btn btn-primary btn-sm pressgolightbox">下架</a>
                                                    </div>
                                            </div>
                                          </td>
                                      </tr>
                                  </form>
                                       <?php   
                                          $i++;
                                          }/*↑如果抓的到顏色資料*/

                                       ?>

                                </tbody>
                          </table>
                        </div>
                      <!-- 顏色控制結束 -->

                      <!-- 官方圖樣控制開始 -->
                        <div class="officialimg content-panel ">
                          <h4><i class="fa fa-angle-right"></i>官方圖樣管理</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>官方圖樣編號</th>
                                    <th>官方圖樣名稱</th>
                                    <th>官方圖樣檢視</th>
                                    <th class="numeric">上下架</th>
                                </tr>
                              </thead>
                                <tbody>
                                  <?php 
                                        $sql = 'select * from customize_officialimg';
                                        $pdostatement=$pdo->prepare($sql);
                                        $pdostatement->execute();
                                        $officialimgcount=0;
                                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){/*↓如果抓的到官方圖樣資料*/ 

                                   ?>
                                  
                                      <tr class="officialimgtr t<?php echo $i?>">
                                          <td><?php echo  $pdoRow['officialimgNo'] ?></td>
                                          <td><?php echo  $pdoRow['officialimg_name'] ?></td>
                                          <td class="officialimgshow">
                                            <img src="images/2board/officalimg/<?php echo  $pdoRow['officialimg_file_name'] ?>">
                                          </td>
                                          <td  class="sellornotgroup">
                                            <div class="input-group">
                                                <form action="9backstage_customize_update.php">
                                                    <div class="btn-group">
                                                        <input type="hidden" value="<?php echo $pdoRow['officialimg_sellornot'] ?>" class="sellornot">
                                                        <input type="hidden" value="<?php echo $pdoRow['officialimgNo'] ?>" class="no">
                                                        <input type="hidden" value="officialimg" class="style">
                                                        <a class="yesbtn btn btn-primary btn-sm pressgolightbox">上架</a>
                                                        <a class="nobtn btn btn-primary btn-sm pressgolightbox">下架</a>
                                                        <a class="deletebtn btn btn-primary btn-sm">刪除</a>
                                                    </div>
                                                </form>
                                            </div>
                                          </td>
                                      </tr>
                                  </form>
                                       <?php   
                                          $officialimgcount++;
                                          }/*↑如果抓的到官方圖樣資料*/
                                          echo "<input type='hidden' class='officialimgcount' value='$officialimgcount'>"
                                       ?>
                                  
                                </tbody>
                          </table>
                          
                          <label >
                            <div class="btn btn-default">新增圖片</div>
                            <input type="file" style="display: none" id="uploadofficalimg">
                          </label>
                        </div>
                      <!-- 官方圖樣控制結束 -->

                      <!-- 材質控制開始 -->
                        <div class="material content-panel ">
                          <h4><i class="fa fa-angle-right"></i>材質管理</h4>
                          <table class="table table-bordered table-striped table-condensed">
                              <thead>
                                <tr>
                                    <th>材質編號</th>
                                    <th>材質名稱</th>
                                    <th>材質價格</th>
                                    <th class="numeric">上下架</th>
                                </tr>
                              </thead>
                                <tbody>
                                  <?php 
                                        $sql = 'select * from customize_material';
                                        $pdostatement=$pdo->prepare($sql);
                                        $pdostatement->execute();
                                        $i=0;
                                          while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){/*↓如果抓的到材質資料*/ 

                                   ?>
                                  
                                      <tr class="materialtr t<?php echo $i?>">
                                          <td><?php echo  $pdoRow['materialNo'] ?></td>
                                          <td><?php echo  $pdoRow['customize_material_name'] ?></td>
                                          <td><input type="number" value="<?php echo  $pdoRow['customize_material_price'] ?>" min="0" class="pricechange"><a class="pricechangebtn">修改</a></td>
                                          <td  class="sellornotgroup">
                                            <div class="input-group">
                                                <form action="9backstage_customize_update.php">
                                                    <div class="btn-group">
                                                        <input type="hidden" value="<?php echo $pdoRow['customize_material_sellornot'] ?>" class="sellornot">
                                                        <input type="hidden" value="<?php echo $pdoRow['materialNo'] ?>" class="no">
                                                        <input type="hidden" value="material" class="style">
                                                        <a class="yesbtn btn btn-primary btn-sm pressgolightbox">上架</a>
                                                        <a class="nobtn btn btn-primary btn-sm pressgolightbox">下架</a>
                                                    </div>
                                                </form>
                                            </div>
                                          </td>
                                      </tr>
                                  </form>
                                       <?php   
                                          $i++;
                                          }/*↑如果抓的到材質資料*/

                                       ?>

                                </tbody>
                          </table>
                        </div>
                      <!-- 材質控制結束 -->

                      <!-- 圖樣價格控制開始 -->
                        <div class="material content-panel ">
                          <h4><i class="fa fa-angle-right"></i>圖樣價格管理</h4>
                          <table class="table table-bordered table-striped table-condensed">
                            <?php 
                              $sql='select * from system_parameter';
                              $pdostatement=$pdo->query($sql);
                              $pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC);
                             ?>
                              <thead>
                                <tr>
                                    <th>編號</th>
                                    <th>名稱</th>
                                    <th>價格</th>
                                </tr>
                              </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>使用者上傳圖樣價格</td>
                                    <td><input class="patternpricechange" type="number" min="0" value="<?php echo $pdoRow['systemparameter_value']?>">
                                    <a class="patternpricechangebtn">修改</a></td>
                                  </tr>
                                  <?php 
                                    $pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC);
                                   ?>
                                  <tr>
                                    <td>2</td>
                                    <td>官方圖樣價格</td>
                                    <td><input class="patternpricechange" type="number" min="0" value="<?php echo $pdoRow['systemparameter_value']?>"><a class="patternpricechangebtn"> 修改</a></td>
                                  </tr>
                                </tbody>
                          </table>
                        </div>
                      <!-- 圖樣價格控制結束 -->
                    </div><!-- 白色區域結束 -->        
                  
               </div>

            </div> 
        </div><!-- main35 -->
<!--(bake module/backstage_footer.html)--><?php require_once('publicpage/backstage_footer.php'); ?>
<script type="text/javascript" src="js/backstage/backstage_jerry.js"></script>


<?php 


}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

 ?>

</body>

</html>