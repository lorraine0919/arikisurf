<?php
    if(!isset($_SESSION)) {
      ob_start();
      session_start(); 
  }
?>
<div class="content20">
    <div class="main20">

        <div class="left20">
            <div class="sidebar20">
                <div class="base20">
                    <?php 
                            require_once('connectBooks.php');
                            $sql='select * from member where member_no=:member_no';
                            $pdostatement=$pdo->prepare($sql);
                            $pdostatement->bindValue(':member_no',$_SESSION["member_no"]);
                            $pdostatement->execute();
                            $pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
                     ?>
                    <div class="photo20">
                        <img src="<?php echo $pdorow["mugshot"];?>">
                    </div>

                    <div class="block20">
                        <div class="account20"><span><?php echo $pdorow["account"]; ?></span></div>
                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon01.png"></div>
                            <span class="hello20"><?php echo $pdorow["name"]; ?></span>
                        </div>

                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon02.png"></div>
                            <span class="hello20"><?php echo $pdorow['phone']; ?></span>
                        </div>

                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon03.png"></div>
                            <span class="hello20"><?php echo $pdorow["email"]; ?></span>
                        </div>
                    </div><!-- block20 -->

                </div><!-- base20 -->
                <ul class="menu20">
                    <li><a id="mem_1" href="7member_update.php">個人資料</a></li>
                    <li><a id="mem_2" href="7member_ordercheck.php">訂單查詢</a></li>
                    <li><a id="mem_3" href="7member_love.php">我的收藏</a></li>
                    <li><a id="logout">登出</a></li>
                </ul><!-- menu20 -->
            </div><!-- sidebar20 -->
        </div><!-- left20 -->

        <div class="right20">
