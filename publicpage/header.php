 <script type="text/javascript">

        var ALERT_TITLE = "ArikiSurf";
        var ALERT_BUTTON_TEXT = "Ok";

        if(document.getElementById) {
            window.alert = function(txt) {
                createCustomAlert(txt);
            }
        }

        function createCustomAlert(txt) {
            d = document;

            if(d.getElementById("modalContainer")) return;

            mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
            mObj.id = "modalContainer";
            // mObj.style.height = d.documentElement.scrollHeight + "px";
            
            alertObj = mObj.appendChild(d.createElement("div"));
            alertObj.id = "alertBox";
            if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
            alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
            alertObj.style.visiblity="visible";

            h1 = alertObj.appendChild(d.createElement("h1"));
            h1.appendChild(d.createTextNode(ALERT_TITLE));

            msg = alertObj.appendChild(d.createElement("p"));
            //msg.appendChild(d.createTextNode(txt));
            msg.innerHTML = txt;

            btn = alertObj.appendChild(d.createElement("a"));
            btn.id = "closeBtn";
            btn.appendChild(d.createTextNode(ALERT_BUTTON_TEXT));
            btn.href = "#";
            btn.focus();
            btn.onclick = function() { removeCustomAlert();return false; }

            alertObj.style.display = "block";
            
        }

        function removeCustomAlert() {
            document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
        }
        function ful(){
        alert('Alert this pages');
        }
    </script>

<div class="loading_bg">
  <div class="load-tortoise"></div>
  <div class="load-person"></div>
        
     <div class="loading loading-2 wave wave-2">
        <div class="loading-2-text"></div>
        <div class="loading wave">
          Loading...
          </div>
     </div>
 </div>
<p id="goTop"><a href="#"><img src="images/1common/top.png"></a> </p>
<header>
    <nav class="nav_0">
        <div class="navDetail">
            <div class="navfix">
                <div class="navimg">
                    <input type="checkbox" id="control">
                    <div class="logo">
                        <div class="logofix">
                            <a href="index.php" id="picLogo">
                               <img src="images/1common/logo.png">
                            </a>
                            <a href="index.php" id="picLogin">
                                <?php 
                                    if(isset($_SESSION["account"])){
                                        echo "<img src='images/1common/logout.png'>";
                                    }else{
                                        echo "<img src='images/1common/login.png'>";
                                    }
                                ?>
                            </a>
                            <div class="arikicommon_breadcrumb">            
                                                     
                            
    
