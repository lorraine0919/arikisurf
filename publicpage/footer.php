<footer class="footer_0">
    <div class="maxContent">
    	<div class="titlegroup">
	     	<ul class="itemtitle">
	    		<li>酋長商城</li>
	    		<li><a href="map.php">衝浪地圖</a></li>
	    		<li><a href="about.php">關於酋長</a></li>
	    		<li><a href="7member_update.php">會員專區</a></li>
	    	</ul>   		
    	</div>
    	<div class="left col-xs-12 col-sm-6">
	    	<ul class="store">
	    		<li><a href="customize.php">客製浪板</a></li>
	    		<li><a href="surfShop.php">衝浪配備</a></li>
	    		<li><a href="cart.php">購物車</a></li>
	    	</ul>
	    	<ul class="map">
	    		<li><a href="map_session.php?wave_number=101">Pipeline</a></li>
	    		<li><a href="map_session.php?wave_number=102">Superbank</a></li>
	    		<li><a href="map_session.php?wave_number=103">Jeffrey's Bay</a></li>
	    		<li><a href="map_session.php?wave_number=104">Black Beach</a></li>
	    		<li><a href="map_session.php?wave_number=105">Teahupo'o</a></li>
	    		<li><a href="map_session.php?wave_number=106">La Graviere</a></li>
	    		<li><a href="map_session.php?wave_number=107">Uluwatu</a></li>
	    		<li><a href="map_session.php?wave_number=108">Cloudbreak</a></li>
	    		<li><a href="map_session.php?wave_number=109">Maverick's</a></li>
	    	</ul>
	    	<ul class="about">
	    		<li><a href="news.php">最新消息</a></li>
	    		<li><a href="news.php">經營理念</a></li>
	    		<li><a href="news.php">品牌沿革</a></li>
	    		<li><a href="news.php">得獎紀錄</a></li>
	    		<li><a href="news.php">全球據點</a></li>
	    	</ul>
	    	<ul class="member">
	    		<input type="hidden" class="footermemberloginornot" value="<?php 
	    			if(isset($_SESSION['member_no'])){
	    				echo 1;
	    			}else{
	    				echo 2;
	    			}
	    		?>">
	    		<li><a class="footermember">基本資料</a></li>
	    		<li><a class="footermember">我的收藏</a></li>
	    		<li><a class="footermember">訂單查詢</a></li>
	    	</ul> 		
    	</div>
		<div class="right col-xs-12 col-sm-6">
			<h3>留言給我們</h3>
			<p>arikisurf@arikisurf.com</p>
			<a id="mesBtn">留言</a>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>©2017 Ariki Surf All Rights Reserved. 
			</p>
		</div>
    </div>
    	 <script type="text/javascript">
    	 $(function(){
				var mesBtncount = 0;
			 	$('#mesBtn').click(function(){
			 		if(mesBtncount==0){
				 		$('body').attr('id','wooo');
				 		console.log('1');
				 		mesBtncount++;	
				 		$('#mesBtn').text('關閉留言');		
			 		}else{
			 			$('body').removeAttr('id','wooo');
			 			mesBtncount--;
			 			$('#mesBtn').text('留言');	
			 		}

			 		// $('#wooo').attr('style','opacity:"1 !important";');
			 	});

				(function(d, t) {
				  var a = d.createElement(t), s = d.getElementsByTagName(t)[0];
				  a.async = a.src = '//cdn.speaklyn.com/cb5f2d2d2658a34d74654803f63ae779.js';
				  s.parentNode.insertBefore(a, s);
				}(document, 'script'));

				$('.footermember').click(function(){
					if($('.footermemberloginornot').val()==1){
						location.href="7member_update.php";
					}else{
						$('#lightbox19').fadeIn(500);
					}
				});
    	 });
	 	
	</script>
</footer>
<script src="js/member_login.js"></script>
<script src="js/breadcrumb.js"></script>