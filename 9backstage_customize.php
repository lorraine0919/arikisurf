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
                <div class="row mt">
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

                              <tr>
                                  <td><?php echo   ?></td>
                                  <td><?php echo   ?></td>
                                  <td class="numeric">
                                    <div class="input-group">
                                        <div class="btn-group">
                                            <a class="btn btn-primary btn-sm active" data-toggle="happy" data-title="<?php echo   ?>">YES</a>
                                            <a class="btn btn-primary btn-sm notActive" data-toggle="happy" data-title="<?php echo   ?>">NO</a>
                                        </div>
                                    </div>
                                  </td>
                              </tr>
                              
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
</body>

</html>