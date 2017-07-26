<!DOCTYPE html>
<html lang="en">
<!--header-->
<head> 
    <title>酋長衝浪Ariki Surf - 會員登入</title> 
    <link rel="stylesheet" type="text/css" href="css/member_login.css">
</head>
<!--header end-->
<body>
<!-- =================會員登入================== -->
<div class="content19"  style="display:none" id="login19">
    <form class="main19" method="post">
        <div class="head19">
            <p>會員登入</p>
            <p class="slogan19">
                <i>Your board always top!</i>
            </p>
        </div>
        <div class="login19">
            <input type="text" class="input19" placeholder="帳號">
            <input type="password"  class="input19" placeholder="密碼">
            <p class="lead19">
                <span>
                    <input type="checkbox" name="">記住我  | 
                </span>
                <span>
                    <a href="7member_register.html">馬上註冊</a>
                </span>
            </p>
            <a class="submit19 input19">登 入</a>
        </div>
        <a href="javascript:window.close();" class="close19">X</a>
    </form>
</div>

<script type="text/javascript">

//==================Login==================

function showLightBox(){
  if( document.getElementById("member").innerHTML === "會員專區"){
    // document.getElementById("memId").value="";
    // document.getElementById("memPsw").value="";
    document.getElementById("login19").style.display="";
  }else{
    document.getElementById("memName").innerHTML = "";
    document.getElementById("login").innerHTML="會員登入";
  }           
}

// function $id(name){return document.getElementById(name); }

// function checkForm(){

// 	var memId = $id("memId");
// 	var memPsw = $id("memPsw");

// 	if( memId.value.length  < 6 ){
// 	window.alert("帳號不得低於6碼");
// 	memId.focus();
// 	return; 
// 	}

// 	if( memPsw.value.length  < 6 ){
// 	window.alert("密碼不得低於6碼");
// 	memPsw.select(); 
// 	return;
// 	}
// 	$id("form").submit();
// }

function cancelLogin(){
//   document.getElementById("member").style.display = "none";
}

function init(){
  document.getElementById("member").onclick = showLightBox;
//   document.getElementById("btnSend").onclick = checkForm;
//   document.getElementById("close").onclick = cancelLogin;
}; 

window.onload=init;

</script>

</body>
</html>