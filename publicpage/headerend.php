
    </div>
</div>
                    </div>
                        <div class="navbar">
                          <div class="navbar-buttons">
                            <span><img class="open-menu" src="images/1common/menu.svg" alt=""/></span>
                          </div>
                        </div>
                    <div class="overlay">
                        <h2 class="nav-title">酋長衝浪</h2>
                        <nav class="overlay-menu">
                            <ul class="menu">
                                <li class="rwdlogo"><a href="index.php" class="rwd"><img src="images/1common/logo.png"></a></li>
                                <li><a href="customize.php">客製浪板</a></li>
                                <li><a href="surfshop.php">衝浪配備</a></li>
                                <li><a href="map.php">衝浪地圖</a></li>
                                <li><a href="news.php">最新消息</a></li>
                                <li><a href="about.php">關於酋長</a></li>
                                <li>
                                    <?php 
                                        // echo $_SESSION["account"];
                                        if(isset($_SESSION["account"])){
                                            echo "<a class='rwd' href='7member_update.php'><span id='login2'>會員專區</span></a>";
                                        }else{
                                            echo "<a class='rwd'><span id='login2' >會員登入</span></a>";
                                        }
                                     ?>                                    
                                </li>
                                <li><a href="cart.php" class="rwd">購物車</a></li>
                                <li class="closerwdmenuli"><img class="close-menu" src="images/1common/close.svg" alt=""/></li>
                            </ul>
                        </nav>
                        <div class="iconGroup">
                            <ul>
                                <li><a>
                                    <img src="images/1common/member.png" alt="">
                                    <span id="memberArea"></span>
                                    
                                    <?php 
                                        // echo $_SESSION["account"];
                                        if(isset($_SESSION["account"])){
                                            echo "<a href='7member_update.php'><span id='login1'>會員專區</span></a>";
                                        }else{
                                            echo "<span id='login1'>會員登入</span>";
                                        }
                                     ?>
                                    </span>
                                </a></li>
                                <li class="line"></li>
                                <li><a href="cart.php"><img src="images/1common/shop.png" alt="">購物車</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="topGround_0"></div>
</header>
<div class="content19"  style="display:none;" id="lightbox19">
    <form class="main19" method="post" id="form19">
        <div class="head19">
            <p> 會員登入</p>
            <p class="slogan19">
                <i>Your board always top!</i>
            </p>
        </div>
        <div class="login19">
            <input type="text" minlength="4" maxlength="10" placeholder="帳號" class="input19" id="memId">
            <input type="password" minlength="6" maxlength="12" placeholder="密碼" class="input19" id="memPsw">
            <p class="help19">
                <span>
                    <a href="7member_register.php">忘記密碼</a>  | 
                </span>
                <span>
                    <a href="7member_register.php">馬上註冊</a>
                </span>
            </p>
            <a class="input19" id="submit19">登 入</a>
        </div>
        <a id="close19">X</a>
    </form>
</div>
    <script>
      $(document).ready(function() {
        $('.open-menu').on('click', function() {
           $('.overlay').addClass('open');
        });

        $('.close-menu').on('click', function() {
          $('.overlay').removeClass('open');
        });
      });
    </script>
