<?php 
if(!isset($_SESSION)) {
      ob_start();
      session_start();      
    }
 ?>
<!DOCTYPE html>
<html lang="en">
  <!--header-->
  <head>
  <!--(bake module/head.html)--> <?php require_once('publicpage/head.php'); ?>
    <title>酋長衝浪Ariki Surf-專業客製化衝浪板</title>
    <script>
        // change the default namespace for the CreateJS libraries:
        var createjs5566 = createjs5566||{};
        var createjs = createjs5566;
    </script> 
    <script src="http://code.createjs.com/easeljs-0.6.0.min.js"></script>
    <script src="http://code.createjs.com/tweenjs-0.4.0.min.js"></script>
    <script src="http://code.createjs.com/movieclip-0.6.0.min.js"></script>

    <script src="js/LOGO_Animation.js"></script>
    <script src="js/coconut.js"></script>
    <script src="js/coconut_donkey.js"></script>

    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/index_rwd.css">
    <link rel="stylesheet" type="text/css" href="css/index_header.css">
    <script type="text/javascript" src="libs/jquery/dist/jquery.min.js">
    </script>
    <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="libs/jquery.stellar/src/jquery.stellar.js"></script>
    <link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="
libs/owl.carousel/dist/assets/owl.theme.default.min.css">
    <script src="libs/owl.carousel/dist/owl.carousel.js"></script>
    <script src="js/index.js"></script>
    <script src="js/index_bamboo.js"></script>

 </head>
  <!--header end-->
<body class="Sashimi">
<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
    <div class="banner_1">
        <div class="logo_canvas2">
            <div class="logo_S_canvas2">
                <img class="cloud1" src="images/1common/logo.png">
            </div>
           <!--  <canvas id="canvas1" width="500" height="360"></canvas> -->
            <h4>Your Board Always Top</h4>  
        </div>

        <div class="logo_canvas1">
            <canvas id="canvas1" width="500" height="360"></canvas>

                <h2>Your Board Always Top</h2>  

            <div class="Button_Entrance"> 
                <a class="Button_Entrance2 Entrance3" href="#">前端</a>
               <a class="Button_Entrance2" href="9backstage_login.php">後端</a>
            </div>
            <div class="cloud">

                <div class="cloud4 clouda">
                    <img class="cloud1" src="images/1common/Im_a_cloud.png">
                </div>

                <div class="cloud3 clouda">
                    <img class="cloud1" src="images/1common/Im_a_cloud.png">
                </div>

                <div class="cloud2 clouda">
                    <img class="cloud1" src="images/1common/Im_a_cloud.png">
                </div>


                <div class="gradient_bambooo">
                    <span>
                    <h1>ARIKI SURF</h1> 
                    <h3>在古玻里尼西亞文化中，酋長這個身分，<br>
                        不只代表了一個人在部落的領導地位，<br>
                        更代表了他在衝浪技巧上，無可取代的存在。</h3>
                    </span>         
                </div>
                   
                 <div class="wood_surf">

                    <img class="wood_meat" src="images/1common/wood_surf.png">
                     
                 </div>
                 <div class="wood_surf2">

                    <img src="images/1common/wood_surf.png">
                     
                 </div>
                 <div class="wood_surf3">

                    <img src="images/1common/wood_surf.png">
                     
                 </div>    

                <dvi class="seawater">
                    
                    <div class="Will_hurt_the_stoneA">
                        <img src="images/1common/Will_hurt_the_stone.png">
                    </div>
                    <div class="Will_hurt_the_stoneB">
                        <img src="images/1common/Will_hurt_the_stone.png">
                    </div>
                    <div class="coconut">
                        <canvas id="coconut" width="500" height="700"></canvas>
                    </div>
                    <div class="coconut2">
                        <canvas id="coconut2" width="500" height="700"></canvas>
                    </div>
                    

                </dvi>
                
                <img class="cloud1" src="images/1common/coastal.jpg">
                
            </div>

        </div>
          
    </div>
    <div class="slogan_1">
        <div class="gradient">
            <h1>ARIKI SURF</h1> 
            <h3>在古玻里尼西亞文化中，酋長這個身分，<br>
            不只代表了一個人在部落的領導地位，<br>
            更代表了他在衝浪技巧上，無可取代的存在。</h3> 
        </div>
    </div>
    <div id="explodetrigger"></div>
    <div class="coating_1">

        <div class="maxContent">
            <div class="empty col-xs-12 col-sm-6"></div>
            <div class="demorwd">
                <div class="demoimg">
                    <ul>
                        <li><img src="images/1common/surfboard.png"></li>
                        <li><img src="images/1common/surfboardrwd-1.png"></li>
                        <li><img src="images/1common/surfboardrwd-2.png"></li>
                        <li><img src="images/1common/surfboardrwd-3.png"></li>
                        <li><img src="images/1common/surfboardrwd-4.png"></li>
                    </ul> 
                </div>
                <div class="arrowleft rwdcoatingarrow" id="rwdcoatingleft">
                    <div class="arrowfix">
                        <img src="images/1common/arrowleft.png">
                    </div>
                </div>
                <div class="arrowright rwdcoatingarrow" id="rwdcoatingright">
                    <div class="arrowfix"> 
                        <img src="images/1common/arrowright.png">
                    </div>
                </div>
            </div>
            <div class="introduce col-xs-12 col-sm-6 ">
                <h2>領先全球的烤漆與塗料技術</h2>
                <p>酋長衝浪領先全球的烤漆與塗料技術，創造出猶如稀世珍寶的特殊質感，高雅而不失威風，讓你成為每一個浪點中，居高臨下的征服者。</p>
            </div>
            <div class="demo col-xs-12 col-sm-8">
                <img src="images/1common/board1.png" class="boardlayer">
                <img src="images/1common/board2.png" class="boardlayer">
                <img src="images/1common/board3.png" class="boardlayer">
                <img src="images/1common/board4.png" class="boardlayer">
            </div>
            <div class="about col-xs-12 col-sm-4">
                <div class="aboutContent">
                    <div class="word w1">
                        <h4>顧慮全方位的慢磨弧線</h4>
                        <p>耐鹽水、耐UV、耐大浪的塗料，與注重流線的烤漆技術，穩重而堅固、不易斷版，讓酋長浪板陪你冒險一輩子</p>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <line x1="200" y1="10" x2="110" y2="40" class="path" />
                        </svg>
                    </div>
                    <div class="photo">
                        <img src="images/1common/1surface.jpg">
                    </div>                  
                </div>
                <div class="aboutContent">
                    <div class="word w2">
                        <h4>完美呈現你的創作</h4>
                        <p>個性化的圖案，在輕薄表層的材質後，仍然顯色出眾而不失質感 </p>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                            <line class="path"  x1="200" y1="20" x2="80" y2="120"/>
                        </svg>
                    </div>
                    <div class="photo">
                        <img src="images/1common/2pattern.jpg">
                    </div>                  
                </div>
                <div class="aboutContent">
                    <div class="word w3">
                        <h4>扎實的填充材質</h4>
                        <p>縝密的填充材質，使浪板有著彈性佳、耐曬、浮力好、質輕、耐撞、不易進水等重要特性</p>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="500" height="500">
                            <line class="path" x1="200" y1="20" x2="100" y2="200" />
                        </svg>
                    </div>
                    <div class="photo">
                        <img src="images/1common/3fill.jpg">
                    </div>                  
                </div>
                <div class="aboutContent">
                    <div class="word w4">
                        <h4>巴爾沙木手工拼接</h4>
                        <p>木紋花色，沒有一塊板子會重覆，木製手工藝使每塊板子都像一件藝術品，非常值得收藏保存。</p>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"  width="500" height="500">
                            <line class="path"  x1="200" y1="20" x2="100" y2="300" />
                        </svg>
                    </div>
                    <div class="photo">
                        <img src="images/1common/4wood.jpg">
                    </div>                  
                </div>

            </div>      
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="picture_1">
        <div class="maxContent">
            <div class="demorwd">
                <div class="surfboard">
                    <img src="images/1common/surfboardwithlogo.png">
                </div>
                
            </div>
            <div class="introduce col-sm-12 col-xs-12">
                <div class="introduceMax">
                    <h2>每一張衝浪板的專屬DNA</h2>
                    <p>每一張浪板都有它的個性、它的情緒，因此，對於如同伯樂的衝浪手，量身打造一張專屬於他的衝浪板，是在征服每一個浪點前，最首要的任務。</p>
                </div>
            </div>
            <div class="photoSelect col-sm-12 col-xs-12">
                <div class="photo"><img src="images/1common/picselect1.png" alt=""></div>
                <div class="photo selected"><img src="images/1common/picselect2_s.png" alt=""></div>
                <div class="photo"><img src="images/1common/picselect3.png" alt=""></div>
                <div class="arrowrwd">
                    <i class="fa fa-caret-left rwdpicleft" aria-hidden="true"></i>
                    <i class="fa fa-caret-right rwdpicright" aria-hidden="true"></i>
                </div>
            </div>
            <div class="button col-sm-12 col-xs-12">
                <a href="customize.php">MORE INFO</a>
            </div>
            <div class="demo col-sm-12 col-xs-12">
                <div class="surfboard">
                    <img src="images/1common/picturedemoboard.png">
                    <div class="selectpicshow">
                        <img src="images/1common/piconboard.png">
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <div class="map_1">
        <div class="contentMax">
            <div class="map_box col-sm-12">
                <div class="Earth_shadow">
                    
                </div>
                <div class="map_Earth">
                    <div class="map_islands">
                        <img src="images/1common/map-1.png">
                    </div>
                </div>
            </div>
            <div class="map_phone">
                <img src="images/1common/map.png">
            </div>
            <div class="map_text introduce col-xs-12 col-sm-12">
                <div class="introduceWord">
                    <h2>走向高手雲集浪點 衝破完美弧線</h2>
                    <p>你體內征服者的細胞正在蠢蠢欲動嗎？<br>
                        對於平淡無奇的波幅已經感到厭倦了嗎？<br>
                        酋長衝浪將給你全新的浪點、全新的視野。</p>
                    <a href="map.html">MORE INFO</a>
                </div>



            </div>
            
                <!-- <div class="mapimg">
                    
                    <div class="pin">
                        <img src="images/1common/pin.png" class="pinpic">
                    </div>
                </div> -->
            
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="forum_1">
        <div class="contentMax">
            <div class="title">
                <h2>浪點討論</h2>
            </div>
            <div class="postgroup loop owl-carousel owl-theme">
                <!-- Pipeline -->
                <div class="postfix selected item">    
                    <div class="post selected">
                        <a href="map_session.php?wave_number=101">
                            <div class="head p1">
                            <!-- <div class="headword">
                                <h3>現代衝浪的發源地</h3>
                                <h4>Pipeline</h4>
                            </div> -->
                            </div>
                        
                        <div class="content selected">
                            <div class="word">
                                <h3>現代衝浪的發源地</h3>
                                <h4>Pipeline</h4>                                
                            </div>
                            
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/posthebe.png" alt=""></a></div>
                                <div class="postcontent">
                                    <h5>馥甄</h5>
                                    <p>「高手雲集的精彩海岸！」</p>
                                </div>                             
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
                <!-- Superbank -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=102">
                            <div class="head p2">
                            <!--                             <div class="headword">
                                <h3>Quicksilver職業比賽地</h3>
                                <h4>SuperBank</h4>
                            </div> -->
                            </div>
                        
                        <div class="content">
                            <div class="word">
                                <h3>Quicksilver職業比賽地</h3>
                                <h4>SuperBank</h4>                                
                            </div>
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postmathi.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>Mathi</h5>
                                    <p>「令人目不轉睛的頂尖對決！」</p>
                                </div>                    
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
                <!-- Jeffrey's Bay -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=103">
                            <div class="head p3">
                            <!--                             <div class="headword">
                                <h3>浪人心中的最佳浪點</h3>
                                <h4>Jeffrey’s Bay</h4>
                            </div> -->
                            </div>
                        
                        <div class="content">
                            <div class="word">
                                <h3>浪人心中的最佳浪點</h3>
                                <h4>Jeffrey’s Bay</h4>                                
                            </div>
                            
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postsmallfive.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>小五郎</h5>
                                    <p>「超級管浪灣！」</p>
                                </div>                     
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
                <!-- Black Beach -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=104">
                            <div class="head p4">
                            <!--                             <div class="headword">
                                <h3>Quicksilver職業比賽地</h3>
                                <h4>SuperBank</h4>
                            </div> -->
                            </div>
                        
                        <div class="content">
                            <div class="word">
                                <h3>浪高五米的進階浪點</h3>
                                <h4>Black-Beach</h4>                                
                            </div>
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postbean.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>阿宅</h5>
                                    <p>「衝浪兼顧眼睛」</p>
                                </div>                    
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
                <!-- Teahupo'o -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=105">
                            <div class="head p5">
                            <!--                             <div class="headword">
                                <h3>浪人心中的最佳浪點</h3>
                                <h4>Jeffrey’s Bay</h4>
                            </div> -->
                            </div>
                        
                        <div class="content">
                            <div class="word">
                                <h3>衝浪最早的起源地</h3>
                                <h4>Teahupo'o</h4>                                
                            </div>
                            
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postfran.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>Fran</h5>
                                    <p>「20米高超危險巨浪」</p>
                                </div>                     
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
                <!-- La Graviere -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=106">
                            <div class="head p6">
                            <!--                             <div class="headword">
                                <h3>Quicksilver職業比賽地</h3>
                                <h4>SuperBank</h4>
                            </div> -->
                            </div>
                       
                        <div class="content">
                            <div class="word">
                                <h3>適合初學者的好浪點</h3>
                                <h4>La Graviere</h4>                                
                            </div>
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postbear.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>熊熊</h5>
                                    <p>「法式浪漫的浪點」</p>
                                </div>                    
                            </div>

                        </div>
                         </a>
                    </div>
                </div>
                <!-- Uluwatu -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=107">
                            <div class="head p7">
                            <!--                             <div class="headword">
                                <h3>浪人心中的最佳浪點</h3>
                                <h4>Jeffrey’s Bay</h4>
                            </div> -->
                            </div>
                        
                        <div class="content">
                            <div class="word">
                                <h3>經典礁石浪</h3>
                                <h4>Uluwatu</h4>                                
                            </div>
                            
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postpeggy.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>Peggy</h5>
                                    <p>「溫暖海水上有一群高手」</p>
                                </div>                     
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
                <!-- Cloudbreak -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=108">
                            <div class="head p8">
                            <!--                             <div class="headword">
                                <h3>Quicksilver職業比賽地</h3>
                                <h4>SuperBank</h4>
                            </div> -->
                            </div>
                        
                        <div class="content">
                            <div class="word">
                                <h3>全年有好浪的浪點</h3>
                                <h4>Cloudbreak</h4>                                
                            </div>
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postenerge.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>榕樹下活力姐</h5>
                                    <p>「水質清澈，可觀賞珊瑚礁」</p>
                                </div>                    
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
                <!-- Maverick's -->
                <div class="postfix item">
                    <div class="post">
                        <a href="map_session.php?wave_number=109">
                            <div class="head p9">
                            <!--                             <div class="headword">
                                <h3>浪人心中的最佳浪點</h3>
                                <h4>Jeffrey’s Bay</h4>
                            </div> -->
                            </div>
                        
                        <div class="content">
                            <div class="word">
                                <h3>勇敢浪人挑戰點</h3>
                                <h4>Maverick's</h4>                                
                            </div>
                            
                            <div class="postcontentgroup">
                                <div class="mempic"><img src="images/1common/postanna.png" alt=""></div>
                                <div class="postcontent">
                                    <h5>安娜</h5>
                                    <p>「需要做摩托艇才能前往的危險浪點！」</p>
                                </div>                     
                            </div>

                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bulletin_1">
        <div class="maxContent">
            <div class="title">
                <h2>最新消息</h2>
            </div>
            <?php 
                require_once('connectBooks.php');
                $sql='select * from news ORDER BY newsno DESC';
                $pdostatement=$pdo->query($sql);
                $pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
             ?>
            <div class="infoarea">
                <div class="left col-xs-12 col-sm-6">
                    <div class="leftfix">
                         <img src="images/5news/<?php echo $pdorow['newsimg']?>">
                    </div>     
                </div>
                <div class="right col-xs-12 col-sm-6">
                    <div class="news">
                        <div class="newsimg"><img src="images/5news/<?php echo $pdorow['newsimg']?>"></div>
                        <div class="newcontent">
                            <div class="date">
                                <p><span class="newtag">NEW</span><?php echo $pdorow['newsdate']?></p>
                            </div>
                            <div class="newsptitle">
                                <h3><?php echo $pdorow['newstitle']?></h3>
                            </div>
                            <div class="btn">
                                <a href="article.php?articleno=<?php echo $pdorow['newsno']?>">more info</a>
                            </div>
                        </div>
                    </div>
                    <?php $pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC); ?>
                    <div class="news">
                        <div class="newsimg"><img src="images/5news/<?php echo $pdorow['newsimg']?>"></div>
                        <div class="newcontent">
                            <div class="date">
                                <p><span class="newtag">NEW</span><?php echo $pdorow['newsdate']?></p>
                            </div>
                            <div class="newsptitle">
                                <h3><?php echo $pdorow['newstitle']?></h3>
                            </div>
                            <div class="btn">
                                <a href="article.php?articleno=<?php echo $pdorow['newsno']?>">more info</a>
                            </div>
                        </div>
                    </div>
                    <?php $pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC); ?>
                    <div class="news">
                        <div class="newsimg"><img src="images/5news/<?php echo $pdorow['newsimg']?>"></div>
                        <div class="newcontent">
                            <div class="date">
                                <p><span class="newtag">NEW</span><?php echo $pdorow['newsdate']?></p>
                            </div>
                            <div class="newsptitle">
                                <h3><?php echo $pdorow['newstitle']?></h3>
                            </div>
                            <div class="btn">
                                <a href="article.php?articleno=<?php echo $pdorow['newsno']?>">more info</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- <script src="js/index.js"></script> -->
     <!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
         <script>
        $(function(){

            var canvas, stage, exportRoot,coconut1,coconut2;

                function init() {
                    canvas = document.getElementById("canvas1");
                    exportRoot = new lib5566.LOGO_Animation();

                    stage = new createjs5566.Stage(canvas);
                    stage.addChild(exportRoot);
                    stage.update();

                     createjs5566.Ticker.setFPS(24);
                    createjs5566.Ticker.addEventListener("tick", stage);

            } 
            
            init();
            
        });

        
    </script>
</body>
</html>