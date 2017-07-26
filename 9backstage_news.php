<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="Dashboard">
      <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  
      <!-- Bootstrap core CSS -->
      <link href="css/backstage/bootstrap.css" rel="stylesheet">
      <!--external css-->
      <link href="css/fontawesome/css/font-awesome.css" rel="stylesheet">
          
      <!-- Custom styles for this template -->
      <link href="css/backstage/style.css" rel="stylesheet">
      <link href="css/backstage/style-responsive.css" rel="stylesheet">
      <script src="js/backstage/chart-master/Chart.js"></script>
  
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style>
    `
    <title>Ariki Surf - 後臺管理</title>
    <link rel="stylesheet" type="text/css" href="css/9backstage_news.css"> 
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<div class="title35 header black-bg">
    <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <a href="9backstage_welcome.html" class="logo"><b>後臺管理</b></a>
</div>
<div class="content35">
    <div class="box35">
        <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none; margin-left: 0px;">
            <ul class="sidebar-menu" id="nav-accordion" style="display: block;">
                <p class="centered"><a href="profile.html"><img src="images/9backstage/hebe.jpg" class="img-circle" width="60"></a></p>
                <h5 class="centered">管理員A</h5>
                <li class="mt">
                      <a href="9backstage_welcome.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                </li>
                <li><a href="#">客製浪板管理</a></li>
                <li><a href="#">衝浪配備管理</a></li>
                <li><a href="#">浪點資訊管理</a></li>
                <li><a href="#">討論區管理</a></li>
                <li><a href="#">最新消息管理</a></li>
                <li><a href="#">客製浪板訂單管理</a></li>
                <li><a href="#">衝浪配備訂單管理</a></li>
                <li><a href="#">會員帳號管理</a></li>
                <li><a href="#">管理者帳號管理</a></li>
            </ul><!-- sidebar35 -->      
        </div>
<!-- 最新消息管理面版 -->
        <div class="main35" id="main-content">
            <div class="wrapper">
                <div class="row mt">
                    <div class="col-sm-12">
                        <div class="showback">
                            <h4><i class="fa fa-angle-right"></i>最新消息管理</h4>
                        </div>
                    <?php 
                      require_once("connectBD101g2.php");
                      $sql = "select * from news order by newsno desc";
                      $news = $pdo->prepare( $sql );
                      $news->execute();
                      while( $newsRow = $news->fetch(PDO::FETCH_ASSOC)){
                    ?>
              <div class="content-panel">
              <form>
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="fa"></i>文章編號</th>
                        <th class="hidden-phone"><i class="fa"></i>文章標題</th>
                        <th><i class="fa"></i>文章日期</th>                     
                        <th>編輯文章</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="back_newsno"><?php echo $newsRow["newsno"]; ?></td>
                        <td class="hidden-phone"><?php echo $newsRow["newstitle"]; ?></td>
                        <td class="back_newsdate"><?php echo $newsRow["newsdate"]; ?></td>
                        <td class="back_newsmodify">
                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                             <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                  </tbody>
                  </table>
                </form>
                </div><!-- content-panel -->
                    <?php
                      }
                    ?>
                    </div><!-- col-sm-12 -->
                </div> <!-- row mt -->  
            </div><!--  wrapper -->
        </div><!-- main35 -->
    </div><!-- box35 -->
</div> <!-- content35 -->

<script src="js/backstage/jquery.js"></script>
<script src="js/backstage/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/backstage/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/backstage/jquery.scrollTo.min.js"></script>
<script src="js/backstage/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/backstage/jquery.sparkline.js"></script>
<script src="js/backstage/common-scripts.js"></script>
<script src="js/backstage/sparkline-chart.js"></script>
<script>
      //custom select box

      $(function(){
          // $('select.styled').customSelect();
      });

  </script>
</body>

</html>