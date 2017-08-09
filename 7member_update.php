<?php 
    if(!isset($_SESSION)) {
      ob_start();
      session_start();      
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <?php require_once('publicpage/head.php'); ?>
      <title>酋長衝浪Ariki Surf - 會員專區</title>
      <?php require_once('publicpage/member_head.php'); ?>
      <link rel="stylesheet" type="text/css" href="css/7member_update.css">
      <script src="js/7member_update.js"></script>
</head>
<body>
    <!-- =================主選單================== -->
    <?php require_once('publicpage/header.php'); ?>
    <a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
    <span>會員專區</span>
    <?php require_once('publicpage/headerend.php'); ?>

<?php 
try{
    require_once("connectBooks.php");
    $sql="select * from member where account = :account";
    $member = $pdo->prepare( $sql );
    $member->bindValue(':account',$_SESSION['account']);
    
    $member->execute();
    $personData = $member->fetch(PDO::FETCH_ASSOC);
    $gender = $personData["gender"];
    $city = $personData["city"];
    $area = $personData["area"];

    }catch(PDOException $ex){
      echo "錯誤行號 : ", $ex->getLine(), "<br>";
      echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
    }
?>

<script type="text/javascript">
    function $id(id){return document.getElementById(id);}

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
</script>

<!-- =================會員專區================== -->
    <?php require_once('publicpage/member_top.php'); ?>
            <p class="title20">基本資料</p>

            <form method="post" enctype="multipart/form-data" action="dataUpdate.php" class="personal21" id="basicform">

                <div class="row21">
                    <label class="label21">姓名</label>
                    <input type="text" class="input21 short21 arikicommon_inputtext" id="name21" name="name" value="<?php echo $personData["name"]; ?>"></input>
                </div>

                <div class="row21">
                    <label class="label21">性別</label>
                    <input type="hidden" value="<?php echo $gender; ?>" id="gendervalue">
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
                    <input type="hidden" value="<?php echo $city; ?>" id="cityvalue">
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
                    <input type="text" name="tel" class="input21 short21 arikicommon_inputtext" id="tel21" value="<?php echo $personData['phone']; ?>"></input>
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
                    <input style="display: none;" value="<?php echo $personData["mugshot"]; ?>" name="mugshot">
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
            
<?php require_once('publicpage/member_bottom.php'); ?>
<?php require_once('publicpage/footer.php'); ?>

</body>
</html>

