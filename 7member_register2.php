<?php
    ob_start();
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
      <?php require_once('publicpage/head.php'); ?>
      <title>酋長衝浪Ariki Surf - 會員註冊</title>
      <link rel="stylesheet" type="text/css" href="css/7member_register2.css">
</head> 
    
<body>

<!-- =================主選單================== -->
<?php require_once('publicpage/header.php'); ?>
<a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>會員註冊</span>
<?php require_once('publicpage/headerend.php'); ?>

<!-- =====================會員註冊B==================== -->
<div class="register26">
    <div class="setdown26">

        <div class="prompt26">
            <p>超越巔峰</p>
            <p>酋長衝浪讓您擁有獨一無二的浪板，</p>
            <p>和前所未有衝浪體驗！</p>
        </div><!-- prompt26 -->

        <form class="form26" >
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
                        <option value="">請選擇</option>
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
                    <input type="text" placeholder="" class="input26 arikicommon_inputtext" id="addr26" name="addr26"></input>
                </div>

                <div class="item26">
                    <label class="label26">電話</label>
                    <input type="text" minlength="5" maxlength="30" placeholder="02-29484011" class="input26 arikicommon_inputtext" id="tel26" name="tel26" required>
                </div>

                <div class="item26">
                    <label class="label26">電子郵件</label>
                    <input type="e-mail" minlength="6" placeholder="ARIKI@arikisurf.com" class="input26 arikicommon_inputtext" id="mail26" name="mail26" required>
                </div>

                <div class="item26">
                    <input type="button" class="arikicommon_btn" id="submit26" value="註冊">
                </div>
            </div><!-- detail26 -->
        </form><!-- form26 -->

    </div><!-- setdown26 -->
</div><!-- register26 -->
<?php require_once('publicpage/footer.php'); ?>
<script type="text/javascript">

//========================會員註冊B==========================
function $id(id){return document.getElementById(id);}

function EachCity(s1){

    $id("slct2").innerHTML = "";

    switch(s1){
        case"台北市":
        DistArray = ["''|請選擇","中正區|中正區","大同區|大同區","中山區|中山區","松山區|松山區","大安區|大安區","萬華區|萬華區","信義區|信義區","士林區|士林區","北投區|北投區","內湖區|內湖區","南港區|南港區","文山區|文山區"];
            break;
        case"新北市":
        DistArray = ["0|請選擇","板橋區|板橋區","新莊區|新莊區","中和區|中和區","三重區|三重區","新店區|新店區","土城區|土城區","永和區|永和區","蘆洲區|蘆洲區","汐止區|汐止區","樹林區|樹林區","淡水區|淡水區","三峽區|三峽區","林口區|林口區","鶯歌區|鶯歌區","五股區|五股區","泰山區|泰山區","瑞芳區|瑞芳區","八里區|八里區","深坑區|深坑區","三芝區|三芝區","萬里區|萬里區","金山區|金山區","貢寮區|貢寮區","石門區|石門區","雙溪區|雙溪區","石碇區|石碇區","坪林區|坪林區","烏來區|烏來區","平溪區|平溪區"];
            break;
        case"桃園市":
        DistArray = ["0|請選擇","桃園區|桃園區","中壢區|中壢區","平鎮區|平鎮區","八德區|八德區","楊梅區|楊梅區","蘆竹區|蘆竹區","龜山區|龜山區","龍潭區|龍潭區","大溪區|大溪區","大園區|大園區","觀音區|觀音區","新屋區|新屋區","復興區|復興區"];
            break;
        case"臺中市":
        DistArray = ["0|請選擇","北屯區|北屯區","西屯區|西屯區","大里區|大里區","太平區|太平區","豐原區|豐原區","南屯區|南屯區","潭子區|潭子區","大雅區|大雅區","沙鹿區|沙鹿區","清水區|清水區","龍井區|龍井區","大甲區|大甲區","烏日區|烏日區","神岡區|神岡區","霧峰區|霧峰區","梧棲區|梧棲區","大肚區|大肚區","后里區|后里區","東勢區|東勢區","外埔區|外埔區","新社區|新社區","大安區|大安區","石岡區|石岡區","和平區|和平區","東區|東區","西區|西區","南區|南區","北區|北區","中區|中區"];
            break;
        case"臺南市":
        DistArray = ["0|請選擇","永康區|永康區","安南區|安南區","新營區|新營區","仁德區|仁德區","歸仁區|歸仁區","安平區|安平區","佳里區|佳里區","善化區|善化區","麻豆區|麻豆區","新化區|新化區","新市區|新市區","關廟區|關廟區","安定區|安定區","白河區|白河區","學甲區|學甲區","鹽水區|鹽水區","西港區|西港區","下營區|下營區","後壁區|後壁區","七股區|七股區","六甲區|六甲區","柳營區|柳營區","官田區|官田區","東山區|東山區","將軍區|將軍區","玉井區|玉井區","北門區|北門區","大內區|大內區","楠西區|楠西區","南化區|南化區","山上區|山上區","左鎮區|左鎮區","龍崎區|龍崎區","東區|東區","南區|南區","中西區|中西區","北區|北區"];
            break;
        case"高雄市":
        DistArray = ["0|請選擇","鳳山區|鳳山區","三民區|三民區","左營區|左營區","前鎮區|前鎮區","楠梓區|楠梓區","苓雅區|苓雅區","小港區|小港區","鼓山區|鼓山區","大寮區|大寮區","岡山區|岡山區","仁武區|仁武區","林園區|林園區","路竹區|路竹區","新興區|新興區","鳥松區|鳥松區","大樹區|大樹區","美濃區|美濃區","橋頭區|橋頭區","旗山區|旗山區","梓官區|梓官區","大社區|大社區","茄萣區|茄萣區","燕巢區|燕巢區","湖內區|湖內區","阿蓮區|阿蓮區","旗津區|旗津區","前金區|前金區","鹽埕區|鹽埕區","彌陀區|彌陀區","內門區|內門區","永安區|永安區","六龜區|六龜區","杉林區|杉林區","田寮區|田寮區","甲仙區|甲仙區","桃源區|桃源區","那瑪夏區|那瑪夏區","茂林區|茂林區"];
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

function VerifyB(){

    name = $id("name26").value;
    city = $id("slct1").value;
    area = $id("slct2").value;
    addr = $id("addr26").value;
    tel = $id("tel26").value;
    mail = $id("mail26").value;
    
    var namePattern = /^[\u4e00-\u9fa5_a-zA-Z\s]+$/;    
    var addrWrong = new Array('~','`','!','@','#','%','&','=',':',';','\\+','\\?','\\*','\\^','\\$');
    var telPattern = "0123456789-#";
    // var telPattern = /^[0-9]{2,5}[-_]?[0-9]{2,8}[-_]?[0-9]{3,8}$/;
    var mailPattern = /^[a-zA-Z](\w*[-_]?\w+)*@(\w*[-_]?\w+)+[\.][a-zA-Z]{2,3}([\.][a-zA-Z]{2})?$/;

    
    if(name==""){
        alert("請輸入姓名<br>");
        return;
    }else if(!namePattern.test(name)){
        alert("姓名欄位格式有誤，請勿輸入特殊符號及數字！<br>");
        return;
    }


    if($id("male26").checked == true){
        gender = document.getElementsByName("sex")[0].value;
    }else if($id("female26").checked == true){
        gender = document.getElementsByName("sex")[1].value;
    }else{
        alert("請選擇性別<br>");
        return;
    }


    if(city==""){
        alert("請選擇所在縣市<br>");
        return;
    }
    if(area == "0"){
        alert("請選擇所在區域<br>");
        return;
    }
    if(addr.length < 1){
        alert("請填寫地址<br>");
        return;
    }else{
        var result = ' ';
        for( var i=0; i<addrWrong.length; i++){
                var compare = addr.match(addrWrong[i]);
                if(compare != null){
                    result += (' ' + compare);
                }
            }
        if (result != ' '){
            alert("地址欄位不可輸入"+result+' '+" 等符號！<br>");
            return;
        }
    }


    var telephone = tel.split('');
    console.log(telephone);
    var hint;
    var judg = 0;
    if(tel.length < 6){
        alert("請填寫電話(至少6碼)<br>");
    }else{
            for( var i=0; i<telephone.length; i++){
                var phone = telPattern.match(telephone[i]);
                console.log("phone",phone,"telephone[i]",telephone[i]);
                if(phone == null){
                    hint = 1;
                }else{hint = 0;}
                    judg += hint;
                    console.log("judg",judg,"hint",hint);
            }
            if (judg !== 0){
                alert('電話欄位格式有誤，只可輸入數字與 - #<br>');
            }
    }



    if(mail.length < 10){
        alert("電子郵件地址未查填完整!<br>");
        return;
    }else if(!mailPattern.test(mail)){
        alert("電子郵件欄位格式有誤！<br>");
        return;
    }


    $.post('RegisterFinish.php',{ 
        'name' : name,
        'gender' :gender,
        'city' : city,
        'area' : area,
        'addr' : addr,
        'tel' : tel,
        'mail' : mail
         },function(rs){
            window.setTimeout("window.location='7member_register3.php'",1000);
            //window.setTimeout("Code1;Code2",時間間隔);
         });
}

//上一頁
// <input type="button" value="Back" onclick="goBack()">
// function goBack();

function init(){
    $id("submit26").onclick = VerifyB;
}; 

window.onload=init;

</script>
</body>
</html>