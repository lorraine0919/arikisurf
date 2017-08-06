<?php 
    ob_start();
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

  <!--header-->
  <head>
      <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
     
  <title>酋長衝浪Ariki Surf-最新消息</title>
 </head>
  <!--header end-->
  <script type="text/javascript" src="libs/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="libs/gsap/src/minified/TweenMax.min.js"></script>
  <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/ScrollMagic.min.js"></script>
  <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/animation.gsap.min.js"></script>
  <script type="text/javascript" src="libs/Scrollmagic/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
  <script type="text/javascript" src="libs/jquery.stellar/src/jquery.stellar.js"></script>
  <script src="js/5news.js"></script>
  <link rel="stylesheet" type="text/css" href="css/news.css">

       
<body> 
<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>                           
                            
<a href="index.html">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>最新消息</span>

<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
<div class="bg_14">
<div class="body_14">
<div class="news_title_14">
           <div class="news_title_14_txt">
                <h2>最新消息 NEWS</h2>
                <p>每一次酋長頒布的訊息，流傳千古，族人歌頌，最高領導的象徵，意義非凡。</p>
           </div>
           <div class="news_txt">
                <p>用波里尼西亞文化，打造專屬於你的衝浪板，以酋長的精神，喚醒對大海的靈魂，Ariki Surf的信念「Your Board Always Top」!</p>
           </div>        
         </div>
  <div class="news_item_border">

    
</div>
<div class="clearfix"></div>
</div>
</div>
<!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>   

<script type="text/javascript">
function newDocNEWS(){
   $(this).submit();   
}


function writehtml(tmpobject){
 
  var newsform = document.createElement("form");
  newsform.action = "article.php";
  newsform.className = "newsform";
  newsform.onclick = newDocNEWS;
  

  var newsitem = document.createElement("div");
  newsitem.className = "news_item";
 
  var newsinput = document.createElement("input");
  newsinput.type = "hidden";
  newsinput.name = "articleno";
  newsinput.value = tmpobject.newsno;

  
  


  var newsimg = document.createElement("img");
  newsimg.className = "news_item_img";
  newsimg.src ="images/5news/"+tmpobject.newsimg;

  var newsitemtxt = document.createElement("div");
  newsitemtxt.className = "news_item_txt";

  var newsh3 = document.createElement("h3");
  newsh3.innerHTML = tmpobject.newstitle;

  var date14 = document.createElement("span");
  date14.className = "date_14";
  date14.innerHTML = tmpobject.newsdate;

  var newsp = document.createElement("p");
  newsp.innerHTML = textlength(tmpobject.newstxt,30);

  document.getElementsByClassName("news_item_border")[0].appendChild(newsform);
  newsform.appendChild(newsitem);
  newsitem.appendChild(newsinput);
  newsitem.appendChild(newsimg);
  newsitem.appendChild(newsitemtxt);
  newsitemtxt.appendChild(newsh3);
  newsitemtxt.appendChild(date14);
  newsitemtxt.appendChild(newsp);
  
}

function textlength(truncated, maxLength){
    var result = truncated;
    if (result.length > maxLength) {
        result = result.substr(0,maxLength) + '...more';
    }
    return result;
}


 


 function news(){
  
  var xhr = new XMLHttpRequest();
 
  xhr.onreadystatechange = function(){
    if( xhr.readyState == 4){
      if( xhr.status == 200){
        
        var allnews = JSON.parse(xhr.responseText);
        for(var x in allnews)
        {
          writehtml(allnews[x]);
          // var title = allnews[x].newstitle;
          // alert(title);
        }
      }else{
        alert(xhr.status);
      }
    }
  }

  var url = "news_code.php";
  xhr.open("Post", url, true);
 
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send();


}
window.onload= news();
</script>
</body>
</html>