<div class="content20">
    <div class="main20">

        <div class="left20">
            <div class="sidebar20">
                <div class="base20">

                    <div class="photo20">
                        <img src="<?php echo $personData["mugshot"];?>">
                    </div>

                    <div class="block20">
                        <div class="account20"><span><?php echo $personData["account"]; ?></span></div>
                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon01.png"></div>
                            <span class="hello20"><?php echo $personData["name"]; ?></span>
                        </div>

                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon02.png"></div>
                            <span class="hello20"><?php echo $personData['phone']; ?></span>
                        </div>

                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon03.png"></div>
                            <span class="hello20"><?php echo $personData["email"]; ?></span>
                        </div>
                    </div><!-- block20 -->

                </div><!-- base20 -->
                <ul class="menu20">
                    <li><a >修改個人資料</a></li>
                    <li><a >訂單查詢</a></li>
                    <li><a >我的收藏</a></li>
                    <li><a >登出</a></li>
                </ul><!-- menu20 -->
            </div><!-- sidebar20 -->
        </div><!-- left20 -->

        <div class="right20">
