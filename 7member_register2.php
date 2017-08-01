<!DOCTYPE html>
<html lang="en">
<!--header-->
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
     
    <title>酋長衝浪Ariki Surf - 會員註冊</title> 
    <link rel="stylesheet" type="text/css" href="css/7member_register2.css">
</head>
<!--header end-->
<body>
<header>
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
                        <li><a href="7member_update.html" class="rwd">會員登入</a></li>
                        <li><a href="cart.html" class="rwd">購物車</a></li>
                    </ul>
                    <div class="iconGroup">
                        <ul>
                            <li><a href="7member_update.html"><img src="images/1common/member.png" alt="">會員登入</a></li>
                            <li class="line"></li>
                            <li><a href="cart.html"><img src="images/1common/shop.png" alt="">購物車</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="topGround_0"></div>
</header>

<!-- ======================會員註冊==================== -->
<div class="register26">
    <div class="setdown26">

        <div class="prompt26">
            <p>超越巔峰</p>
            <p>酋長衝浪讓您擁有獨一無二的浪板，</p>
            <p>和前所未有衝浪體驗！</p>
        </div><!-- prompt26 -->

        <form class="form26" action="RegisterFinish.php">
            <div class="title26">
                <h2>填寫基本資料</h2>
            </div>

            <div class="detail26">

                <div class="item26">
                    <label class="label26">姓名</label>
                    <input type="text" minlength="2" maxlength="10" placeholder="請輸入全名" class="input26 arikicommon_inputtext" id="name26"  name="name26" required>
                </div>

                <div class="item26">
                    <label class="label26">性別</label>
                    <div class="arikicommon_radio gender26">
                        <label>
                            <input type="radio" id="male26" name="sex" value="1">
                            <div class="circle"></div>
                            <span>男</span>
                        </label>
                    </div>
                    <div class="arikicommon_radio gender26">
                        <label>
                            <input type="radio" id="female26" name="sex" value="2">
                            <div class="circle"></div>
                            <span>女</span>
                        </label>
                    </div>
                </div>

                <div class="item26">
                    <label class="label26">地址</label>
                    <select class="arikicommon_select dist26" id="slct1" name="slct1" onchange = "EachCity(this.value)";>
                        <option value="請選擇">請選擇</option>
                        <option value="台北市">台北市</option>
                        <option value="新北市">新北市</option>
                        <option value="桃園市">桃園市</option>
                        <option value="臺中市">臺中市</option>
                        <option value="臺南市">臺南市</option>
                        <option value="高雄市">高雄市</option>
                    </select>
                    <select class="arikicommon_select dist26" id="slct2" name="slct2"></select>
                    <br>
                    <label class="label26"></label>
                    <input type="text" class="input26 arikicommon_inputtext" id="addr26" name="addr26"></input>
                </div>

                <div class="item26">
                    <label class="label26">電話</label>
                    <input type="password" minlength="6" maxlength="12" placeholder="" class="input26 arikicommon_inputtext" id="tel26" name="tel26" required>
                </div>

                <div class="item26">
                    <label class="label26">電子郵件</label>
                    <input type="e-mail" minlength="6" placeholder="ARIKI@arikisurf.com" class="input26 arikicommon_inputtext" id="mail26" name="mail26" required>
                </div>

                <div class="item26">
                    <button href="7member_register3.html" class="submit26 arikicommon_btn" id="submit">註冊</button>
                </div>
            </div><!-- detail26 -->

        </form><!-- form26 -->

    </div><!-- setdown26 -->
</div><!-- register26 -->
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

function EachCity(s1){

    $id("slct2").innerHTML = "";

    switch(s1){
        case"台北市":
        DistArray = ["請選擇|請選擇","中正區|中正區","大同區|大同區","中山區|中山區","松山區|松山區","大安區|大安區","萬華區|萬華區","信義區|信義區","士林區|士林區","北投區|北投區","內湖區|內湖區","南港區|南港區","文山區|文山區"];
            break;
        case"新北市":
        DistArray = ["請選擇|請選擇","板橋區|板橋區","新莊區|新莊區","中和區|中和區","三重區|三重區","新店區|新店區","土城區|土城區","永和區|永和區","蘆洲區|蘆洲區","汐止區|汐止區","樹林區|樹林區","淡水區|淡水區","三峽區|三峽區","林口區|林口區","鶯歌區|鶯歌區","五股區|五股區","泰山區|泰山區","瑞芳區|瑞芳區","八里區|八里區","深坑區|深坑區","三芝區|三芝區","萬里區|萬里區","金山區|金山區","貢寮區|貢寮區","石門區|石門區","雙溪區|雙溪區","石碇區|石碇區","坪林區|坪林區","烏來區|烏來區","平溪區|平溪區"];
            break;
        case"桃園市":
        DistArray = ["請選擇|請選擇","桃園區|桃園區","中壢區|中壢區","平鎮區|平鎮區","八德區|八德區","楊梅區|楊梅區","蘆竹區|蘆竹區","龜山區|龜山區","龍潭區|龍潭區","大溪區|大溪區","大園區|大園區","觀音區|觀音區","新屋區|新屋區","復興區|復興區"];
            break;
        case"臺中市":
        DistArray = ["請選擇|請選擇","北屯區|北屯區","西屯區|西屯區","大里區|大里區","太平區|太平區","豐原區|豐原區","南屯區|南屯區","潭子區|潭子區","大雅區|大雅區","沙鹿區|沙鹿區","清水區|清水區","龍井區|龍井區","大甲區|大甲區","烏日區|烏日區","神岡區|神岡區","霧峰區|霧峰區","梧棲區|梧棲區","大肚區|大肚區","后里區|后里區","東勢區|東勢區","外埔區|外埔區","新社區|新社區","大安區|大安區","石岡區|石岡區","和平區|和平區","東區|東區","西區|西區","南區|南區","北區|北區","中區|中區"];
            break;
        case"臺南市":
        DistArray = ["請選擇|請選擇","永康區|永康區","安南區|安南區","新營區|新營區","仁德區|仁德區","歸仁區|歸仁區","安平區|安平區","佳里區|佳里區","善化區|善化區","麻豆區|麻豆區","新化區|新化區","新市區|新市區","關廟區|關廟區","安定區|安定區","白河區|白河區","學甲區|學甲區","鹽水區|鹽水區","西港區|西港區","下營區|下營區","後壁區|後壁區","七股區|七股區","六甲區|六甲區","柳營區|柳營區","官田區|官田區","東山區|東山區","將軍區|將軍區","玉井區|玉井區","北門區|北門區","大內區|大內區","楠西區|楠西區","南化區|南化區","山上區|山上區","左鎮區|左鎮區","龍崎區|龍崎區","東區|東區","南區|南區","中西區|中西區","北區|北區"];
            break;
        case"高雄市":
        DistArray = ["請選擇|請選擇","鳳山區|鳳山區","三民區|三民區","左營區|左營區","前鎮區|前鎮區","楠梓區|楠梓區","苓雅區|苓雅區","小港區|小港區","鼓山區|鼓山區","大寮區|大寮區","岡山區|岡山區","仁武區|仁武區","林園區|林園區","路竹區|路竹區","新興區|新興區","鳥松區|鳥松區","大樹區|大樹區","美濃區|美濃區","橋頭區|橋頭區","旗山區|旗山區","梓官區|梓官區","大社區|大社區","茄萣區|茄萣區","燕巢區|燕巢區","湖內區|湖內區","阿蓮區|阿蓮區","旗津區|旗津區","前金區|前金區","鹽埕區|鹽埕區","彌陀區|彌陀區","內門區|內門區","永安區|永安區","六龜區|六龜區","杉林區|杉林區","田寮區|田寮區","甲仙區|甲仙區","桃源區|桃源區","那瑪夏區|那瑪夏區","茂林區|茂林區"];
            break;
    }

    for(var i in DistArray){
        var pair = DistArray[i].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        $id("slct2").options.add(newOption);
    }
}

function init(){

//=======================會員登入登出========================
  $id("login1").onclick = ShowLightBox;
  $id("submit19").onclick = LoginCheck;
  $id("close19").onclick = CancelLogin;

//=========================會員註冊==========================
  $id("submit26").onclick = VerifyB;

//=========================會員條款==========================
  $id("rule26").onclick = ShowRule;
  $id("submit22").onclick = HaveRead;
}; 

window.onload=init;

</script>