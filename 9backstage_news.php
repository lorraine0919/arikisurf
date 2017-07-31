<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
      <!--(bake module/backstage_head.html)--><?php require_once('publicpage/backstage_head.php'); ?>
    <title>Ariki Surf - 後臺管理</title> 
    <link rel="stylesheet" type="text/css" href="css/9backstage_news.css">
    <script src="js/jquery.js"></script>
    <script src="js/9backstage_news.js"></script>
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
                      <div class="lightbox-btn-add">
                        <img src="images/9backstage/add.png" class="news_add_btn" width="32" height="32">
                      </div>
                    <?php 
                      require_once("connectBD101g2.php");
                      $sql = "select * from news order by newsno desc";
                      $news = $pdo->prepare( $sql );
                      $news->execute();
                      while( $newsRow = $news->fetch(PDO::FETCH_ASSOC)){
                    ?>
          <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    
                    <th class="hidden-phone"><i class="fa"></i>文章標題</th>
                    <th><i class="fa"></i>文章日期</th>
                    <th>編輯文章</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>

                      
                      <td class="hidden-phone"><?php echo $newsRow["newstitle"]; ?></td>
                      <td class="back_newsdate"><?php echo $newsRow["newsdate"]; ?></td>
                      <input type="hidden" name="newsimg" value="<?php echo $newsRow['newsimg']; ?>">
                      <input type="hidden" name="newstxt" value="<?php echo $newsRow['newstxt']; ?>">
                      <td class="back_newsmodify">
                        <div class="lightbox-btn-edit">
                        <img src="images/9backstage/content.png" class="news_edit_btn" width="32" height="32"><input class="newsno" type="hidden" name="newsno" value="<?php echo $newsRow['newsno']; ?>">
                      </div>
                      <div class="remove-btn">
                        <img src="images/9backstage/cancel.png" class="news_remove_btn" width="32" height="32"><input class="newsno" type="hidden" name="newsno" value="<?php echo $newsRow['newsno']; ?>">
                      </div>
                      </td>
                    </tr>
                  </tbody>
                  </table>
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

<!-- 燈箱 新增消息 +++++++++++++++++++++++++++-->


<div class="add-form">
  <div class="form-div">
    <h2>新增最新消息</h2>
      <div class="add-btn-close">
        <a href="9backstage_news.php"><img src="images/9backstage/cancel.png" width="32" height="32"></a>
      </div>
        <form method="post" action="9backstage_addnews.php" enctype="multipart/form-data">
        
        <p class="newstitle">
          <input name="newstitle" type="text" class="news-input" maxlength="25" placeholder="文章標題">
        </p>
        
        <p class="newsdate">
          <input name="newsdate" type="date" class="news-input">
        </p>

        <p class="newsimg">
          <input name="newsimg" type="file" class="news-input">
        </p>
        
        <p class="newstxt">
          <textarea name="newstxt" class="news-input" placeholder="請輸入文章內容"></textarea>
        </p>
        
        
        <div class="submit">
          <input type="submit" value="確認送出" class="button-blue add-submit"/>
          <div class="ease"></div>
        </div>
      </form>
  </div>
</div>

<!-- 燈箱 修改消息 +++++++++++++++++++++++++++-->

<div class="edit-form">
  <div class="form-div">
    <h2>修改最新消息</h2>
    <div class="edit-btn-close">
      <a href="9backstage_news.php"><img src="images/9backstage/cancel.png" width="32" height="32"></a>
    </div>
      <form method="post" action="9backstage_editnews.php" enctype="multipart/form-data">
       <input type="hidden" name="newsno" id="newsnoid" value="">
        <p class="newstitle">
          <input name="newstitle" type="text" class="edit_news_title news-input" value="">
        </p>
        
        <p class="newsdate">
          <input name="newsdate" type="date" class="edit_news_date news-input" value="">
        </p>

        <p class="newsimg">
          <span class="place_img">
            <img src="" id="place_img">
          </span>
          <input name="newsimg" type="file" class="edit_news_img news-input">
        </p>
        
        <p class="newstxt">
          <textarea name="newstxt" class="edit_news_txt news-input" value=""></textarea>
        </p>
      
      
        <div class="submit">
        <input type="submit" value="確認修改" class="button-blue edit-submit"/>
        <div class="ease"></div>
        </div>
    </form>
  </div>
</div>

<!--(bake module/backstage_footer.html)--><?php require_once('publicpage/backstage_footer.php'); ?>
</body>

</html>