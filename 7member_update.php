<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" type="text/css" href="css/header.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
    	<link rel="stylesheet" type="text/css" href="css/commonclass.css">
    	<link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css">
    	<script src="js/jquery.js"></script>
    	<script src="js/breadcrumb.js"></script>
       
        <title>Ariki Surf - 會員專區</title>
        <link rel="stylesheet" type="text/css" href="css/member.css">
        <script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
        <script src="libs/Scrollmagic/scrollmagic/minified/Scrollmagic.min.js"></script>
        <script src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
        <script src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
        <script src="libs/jquery.stellar/src/jquery.stellar.js"></script>
        <link rel="stylesheet" type="text/css" href="css/7member_update.css">
        <link rel="stylesheet" type="text/css" href="css/member_login.css"> 
</head>
<body>
<header>
    <!-- =================主選單================== -->
    <nav class="nav_0">
        <div class="navDetail">
            <div class="navfix">
                <div class="navimg">
                    <input type="checkbox" id="control">
                    <div class="logo">
                        <div class="logofix">
                            <a href="index.html">
                               <img src="images/1common/logo.png">
                            </a>
                            <div class="arikicommon_breadcrumb">                       
                                <a href="index.html">首頁</a>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                <span>會員註冊</span>
                            </div>
                        </div>
                    </div>
                    <label class="hb" for="control">選單</label>
                    <ul class="menu">
                        <li class="rwdlogo"><a href="index.html" class="rwd"><img src="images/1common/logo.png"></a></li>
                        <li><a href="customize.html">客製浪板</a></li>
                        <li><a href="surfshop.html">衝浪配備</a></li>
                        <li><a href="map.html">衝浪地圖</a></li>
                        <li><a href="news.html">最新消息</a></li>
                        <li><a href="about.html">關於酋長</a></li>
                        <li><a href="#" class="rwd" id="login2">會員登入</a></li>
                        <li><a href="cart.html" class="rwd">購物車</a></li>
                    </ul>
                    <div class="iconGroup">
                        <ul>
                            <li><a href="#">
                                <img src="images/1common/member.png" alt="">
                                <span id="memberArea"></span>
                                <span id="login1">會員登入</span>
                            </a></li>
                            <li class="line"></li>
                            <li><a href="cart.html"><img src="images/1common/shop.png" alt="" >購物車</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="topGround_0"></div>
</header>
<?php 
try{
    ob_start();
    session_start();
    require_once("connectBooks.php");
    $sql="select * from member where account = 'hebe520'";
    $member = $pdo->query( $sql );

    $personData = $member->fetch(PDO::FETCH_ASSOC);
    $gender = $personData["gender"];
    $city = $personData["city"];
    $area = $personData["area"];

    }catch(PDOException $ex){
      echo "錯誤行號 : ", $ex->getLine(), "<br>";
      echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
    }
?>

<!-- =================會員登入================== -->
<div class="content19"  style="display:none;" id="lightbox19">
    <form class="main19" method="post" id="form19">
        <div class="head19">
            <p>會員登入</p>
            <p class="slogan19">
                <i>Your board always top!</i>
            </p>
        </div>
        <div class="login19">
            <input type="text" minlength="4" maxlength="10" placeholder="帳號" class="input19" id="memId">
            <input type="password" minlength="6" maxlength="12" placeholder="密碼" class="input19" id="memPsw">
            <p class="help19">
                <span>
                    <input type="checkbox" name="">忘記密碼  | 
                </span>
                <span>
                    <a href="7member_register.php">馬上註冊</a>
                </span>
            </p>
            <a class="input19" id="submit19">登 入</a>
        </div>
        <a href="javascript:window.close();" id="close19">X</a>
    </form>
</div>

<!-- =================會員專區================== -->
<div class="content20">
    <div class="main20">

        <div class="left20">
            <div class="sidebar20">
                <div class="base20">

                    <div class="photo20">
                        <img src="<?php echo $personData["mugshot"]; ?>" name="photo">
                    </div>

                    <div class="block20">
                        <div class="account20"><span><?php echo $personData["account"]; ?></span></div>
                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon01.png"></div>
                            <span class="hello20"><?php echo $personData["name"]; ?></span>
                        </div>

                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon02.png"></div>
                            <span class="hello20">0<?php echo $personData['phone']; ?></span>
                        </div>

                        <div class="row20">
                            <div class="icon20"><img src="images/7member/m_icon03.png"></div>
                            <span class="hello20"><?php echo $personData["email"]; ?></span>
                        </div>
                    </div><!-- block20 -->

                </div><!-- base20 -->
                <ul class="menu20">
                    <li><a href="">修改資料</a></li>
                    <li><a href="#">訂單查詢</a></li>
                    <li><a href="#">我的收藏</a></li>
                    <li><a href="#">我的發表</a></li>
                </ul><!-- menu20 -->
            </div><!-- sidebar20 -->
        </div><!-- left20 -->

        <div class="right20">

<!-- ===================個人資料修改==================== -->
            <p class="title20">基本資料</p>

            <form method="post" enctype="multipart/form-data" action="dataUpdate.php" class="personal21" id="basicform">

                <div class="row21">
                    <label class="label21">姓名</label>
                    <input type="text" class="input21 short21 arikicommon_inputtext" id="name21" name="name" value="<?php echo $personData["name"]; ?>"></input>
                </div>

                <div class="row21">
                    <label class="label21">性別</label>
                    <div class="arikicommon_radio gender21">
                        <label>
                            <input type="radio" id="male21" name="sex">
                            <div class="circle"></div>
                            <span>男</span>
                        </label>
                    </div>
                    <div class="arikicommon_radio gender21">
                        <label>
                            <input type="radio" id="female21" name="sex">
                            <div class="circle"></div>
                            <span>女</span>
                        </label>
                    </div>
                </div>

                <div class="row21">
                    <label class="label21">地址</label>
                    <select class="arikicommon_select dist21" id="slct1" name="slct1" onchange = "EachCity(this.value)";>
                        <option value="請選擇">請選擇</option>
                        <option value="台北市">台北市</option>
                        <option value="新北市">新北市</option>
                        <option value="桃園市">桃園市</option>
                        <option value="臺中市">臺中市</option>
                        <option value="臺南市">臺南市</option>
                        <option value="高雄市">高雄市</option>
                    </select>
                    <select class="arikicommon_select dist21" id="slct2" name="slct2"></select>
                    <br>
                    <label class="label21"></label>
                    <input type="text" name="addr" class="input21 arikicommon_inputtext" id="addr21" value="<?php echo $personData["address"]; ?>"></input>
                </div>

                <div class="row21">
                    <label class="label21">電話</label>
                    <input type="text" name="tel" class="input21 short21 arikicommon_inputtext" id="tel21" value="0<?php echo $personData['phone']; ?>"></input>
                </div>

                <div class="row21">
                    <label class="label21">電子郵件</label>
                    <input type="email" name="email" class="input21 long21 arikicommon_inputtext" id="email21" value="<?php echo $personData['email']; ?>"></input>
                </div>

                <div class="row21">
                    <label class="label21" id="mugshot21">修改大頭照</label>
                    <label class="arikicommon_btn">
                        <input type="file" style="display: none;" name="upload21" id="upload21">選擇大頭照
                    </label>
                </div>

                <input type="submit" class="arikicommon_btn submit21" id="send1" value="確認修改基本資料">
            </form><!-- personal20 -->
            
            <p class="title20">變更密碼</p>

            <form class="changepsw21">

                <div class="row21">
                    <label class="label21">輸入舊密碼</label>
                    <input type="password" maxlength="10" size="12" name="oldpsw21" class="input21  short21 arikicommon_inputtext" id="oldpsw21">
                </div>

                <div class="row21">
                    <label class="label21">輸入新密碼</label>
                    <input type="password" maxlength="10" size="12" name="newpsw21" class="input21 short21 arikicommon_inputtext" id="newpsw21">
                </div>

                <div class="row21">
                    <label class="label21">確認新密碼</label>
                    <input type="password" maxlength="10" size="12" name="confirm21" class="input21 short21 arikicommon_inputtext" id="confirm21" >
                </div>

                <input type="button" class="arikicommon_btn submit21" id="send2" value="確認修改密碼">
            </form><!-- changepsw20 -->
            <div id="trigger20"></div>
        </div><!-- right20 -->
    </div><!-- main20 -->
</div><!-- content20 -->
<!-- <?php

?>  -->
<!-- <script type="text/javascript">

</script> -->
</div>
<footer class="footer_0">
    <div class="maxContent">
    	<div class="titlegroup">
	     	<ul class="itemtitle">
	    		<li>酋長商城</li>
	    		<li><a href="">衝浪地圖</a></li>
	    		<li><a href="">關於酋長</a></li>
	    		<li><a href="">會員中心</a></li>
	    	</ul>   		
    	</div>
    	<div class="left col-xs-12 col-sm-6">
	    	<ul class="store">
	    		<li><a href="">客製浪板</a></li>
	    		<li><a href="">衝浪配備</a></li>
	    		<li><a href="">購物車</a></li>
	    	</ul>
	    	<ul class="map">
	    		<li><a href="">Pipeline</a></li>
	    		<li><a href="">Superbank</a></li>
	    		<li><a href="">Jeffrey's Bay</a></li>
	    		<li><a href="">Black Beach</a></li>
	    		<li><a href="">Teahupo'o</a></li>
	    		<li><a href="">La Graviere</a></li>
	    		<li><a href="">Uluwatu</a></li>
	    	</ul>
	    	<ul class="about">
	    		<li><a href="">最新消息</a></li>
	    		<li><a href="">經營理念</a></li>
	    		<li><a href="">品牌沿革</a></li>
	    		<li><a href="">得獎紀錄</a></li>
	    		<li><a href="">全球據點</a></li>
	    	</ul>
	    	<ul class="member">
	    		<li><a href="">基本資料</a></li>
	    		<li><a href="">我的收藏</a></li>
	    		<li><a href="">訂單查詢</a></li>
	    	</ul> 		
    	</div>
		<div class="right col-xs-12 col-sm-6">
			<h3>留言給我們</h3>
			<p>arikisurf@arikisurf.com</p>
			<a href="">留言</a>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>©2017 Ariki Surf All Rights Reserved. 
			</p>
		</div>
    </div>
</footer>
</body>
</html>

<script type="text/javascript">

function $id(id){return document.getElementById(id);}

//=======================會員登入登出(缺rwd版)=========================
function ShowLightBox(){
  if( $id("login1").innerHTML === '會員登入'){
    $id("memId").value="";
    $id("memPsw").value="";
    $id("lightbox19").style.display="";
  }else{
    $id("login1").innerHTML="會員登入";
    $id("memberArea").style.display="none";
  }           
}

function LoginCheck(){

    memId = $id("memId").value;
    memPsw = $id("memPsw").value;

    $.post('sessionLogin.php',{ 
            'memId2' : memId ,
            'memPsw2' :  memPsw
             },function(rs){
            if( rs == 1){
                $id("memberArea").innerHTML = "<a href='7member_update.php'>會員專區</a>";
                // $id("memberArea").location.href = "7member_update.php";
                $id("login1").innerHTML = "登出";
                $id("lightbox19").style.display="none";
             }else{
                alert("帳號或密碼錯誤");
                return;
                }
            }
    );
}

function CancelLogin(){$id("lightbox19").style.display = "none";}


function EachCity(s1){

    $id("slct2").innerHTML = "";

    switch(s1){
        case"台北市":
        DistArray = ["請選擇","中正區","大同區","中山區","松山區","大安區","萬華區","信義區","士林區","北投區","內湖區","南港區","文山區"];
            break;
        case"新北市":
        DistArray = ["請選擇","板橋區","新莊區","中和區","三重區","新店區","土城區","永和區","蘆洲區","汐止區","樹林區","淡水區","三峽區","林口區","鶯歌區","五股區","泰山區","瑞芳區","八里區","深坑區","三芝區","萬里區","金山區","貢寮區","石門區","雙溪區","石碇區","坪林區","烏來區","平溪區"];
            break;
        case"桃園市":
        DistArray = ["請選擇","桃園區","中壢區","平鎮區","八德區","楊梅區","蘆竹區","龜山區","龍潭區","大溪區","大園區","觀音區","新屋區","復興區"];
            break;
        case"臺中市":
        DistArray = ["請選擇","北屯區","西屯區","大里區","太平區","豐原區","南屯區","潭子區","大雅區","沙鹿區","清水區","龍井區","大甲區","烏日區","神岡區","霧峰區","梧棲區","大肚區","后里區","東勢區","外埔區","新社區","大安區","石岡區","和平區","東區","西區","南區","北區","中區"];
            break;
        case"臺南市":
        DistArray = ["請選擇","永康區","安南區","新營區","仁德區","歸仁區","安平區","佳里區","善化區","麻豆區","新化區","新市區","關廟區","安定區","白河區","學甲區","鹽水區","西港區","下營區","後壁區","七股區","六甲區","柳營區","官田區","東山區","將軍區","玉井區","北門區","大內區","楠西區","南化區","山上區","左鎮區","龍崎區","東區","南區","中西區","北區"];
            break;
        case"高雄市":
        DistArray = ["請選擇","鳳山區","三民區","左營區","前鎮區","楠梓區","苓雅區","小港區","鼓山區","大寮區","岡山區","仁武區","林園區","路竹區","新興區","鳥松區","大樹區","美濃區","橋頭區","旗山區","梓官區","大社區","茄萣區","燕巢區","湖內區","阿蓮區","旗津區","前金區","鹽埕區","彌陀區","內門區","永安區","六龜區","杉林區","田寮區","甲仙區","桃源區","那瑪夏區","茂林區"];
            break;
    }

    var area = "<?php echo $area; ?>";

    for(var i in DistArray){
        var newOption = document.createElement("option");
        newOption = new Option(DistArray[i],DistArray[i]);
        $id("slct2").add(newOption);
    }

    for (var i = 0; i <$id('slct2').childNodes.length; i++) {
        if($id('slct2').childNodes[i].value==area){
            $id('slct2').childNodes[i].setAttribute('selected','selected');
        }
    }
}

//==========================修改基本資料==========================
function SendA(){

    name21 = $id("name21").value;
    slct1 = $id("slct1").value;
    slct2 = $id("slct2").value;
    addr21 = $id("addr21").value;
    tel21 = $id("tel21").value;
    email21 = $id("email21").value;
    // upFile = $id("upload21").files[0];
    
    $id(basicform).submit();
    // $.post('dataUpdate.php',{ 
    // 'name' : name21,
    // 'city' : slct1,
    // 'area' : slct2,
    // 'addr' : addr21,
    // 'tel' : tel21,
    // 'email' : email21,
    // 'upFile' : upFile
    //  },function(rs){
    //     alert(rs);
    //  });
}

//============================修改密碼============================
// function SendB(){

//     oldpsw21 = $id("oldpsw21").value;
//     newpsw21 = $id("newpsw21").value;
//     confirm21 = $id("confirm21").value;

//     $.post('pswUpdate.php',{ 
//     'oldpsw21' : oldpsw21,
//     'newpsw21' : newpsw21,
//     'confirm21' : confirm21
//      },function(rs){
//         alert(rs);
//      });
// }

function init(){

    //=======================會員登入登出========================
    $id("login1").onclick = ShowLightBox;
    $id("submit19").onclick = LoginCheck;
    $id("close19").onclick = CancelLogin;

    var gender = "<?php echo $gender; ?>";
    if (gender == 2){
        $id("female21").checked = true;
    }else{$id("male21").checked = true;}

    var city = "<?php echo $city; ?>";
    EachCity(city);

    for (var i = 0; i <$id('slct1').childNodes.length; i++) {
        if($id('slct1').childNodes[i].value==city){
            $id('slct1').childNodes[i].setAttribute('selected','selected');
        }
    }
    $id("send1").onclick = SendA;
    // $id("send2").onclick = SendB;
}; 

window.onload=init;

$(function(){
var controller = new ScrollMagic.Controller();
var move  = new ScrollMagic.Scene({
    triggerElement:"#trigger20",
    offset:'-400px'
})
.setClassToggle('.left20','move20')
// .addIndicators({name:'對應點'})
.addTo(controller);
});

</script>