<?php 
try{
require_once('connect_jerry.php');
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
                <div class="row mt color">
                    <div class="col-lg-12 table">
                      <div class="content-panel">
                        <h4><i class="fa fa-angle-right"></i>客製浪板頁面管理</h4>
                          <section id="unseen">
                            <h5>顏色管理</h5>
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>顏色編號</th>
                                  <th>顏色名稱</th>
                                  <th class="numeric">停賣與否</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $sql = 'select * from customize_color';
                                    $pdostatement=$pdo->prepare($sql);
                                    $pdostatement->execute();
                                      while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){/*↓如果抓的到顏色資料*/ 
                               ?>
                              <tr>
                                  <td><?php echo  $pdoRow['colorNo'] ?></td>
                                  <td><?php echo  $pdoRow['customize_color_name'] ?></td>
                                  <td class="numeric">
                                    <div class="input-group">
                                        <div class="btn-group">
                                            <a class="btn btn-primary btn-sm active" data-toggle="happy" data-title="<?php echo  $pdoRow['customize_color_sellornot'] ?>">YES</a>
                                            <a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="<?php echo  $pdoRow['customize_color_sellornot'] ?>">NO</a>
                                        </div>
                                    </div>
                                  </td>
                              </tr>
                               <?php   }/*↑如果抓的到顏色資料*/

                               ?>
                              </tbody>
                          </table>
                          </section>
                      </div><!-- /content-panel -->
                    </div><!-- /col-lg-4 -->         
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