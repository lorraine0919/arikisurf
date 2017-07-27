<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
      <!--(bake module/backstage_head.html)--><?php require_once('publicpage/backstage_head.php'); ?>
    <title>Ariki Surf - 後臺管理</title>
    <link rel="stylesheet" type="text/css" href="css/9backstage_news.css"> 
</head>
<!--header end-->
<body>
<!-- =================後臺管理================== -->
<!--(bake module/backstage_header.html)--><?php require_once('publicpage/backstage_header.php'); ?>

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

<!--(bake module/backstage_footer.html)--><?php require_once('publicpage/backstage_footer.php'); ?>
</body>

</html>