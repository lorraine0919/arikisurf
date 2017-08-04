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
			<a id="mesBtn">留言</a>
		</div>
		<div class="clearfix"></div>
		<div class="copyright">
			<p>©2017 Ariki Surf All Rights Reserved. 
			</p>
		</div>
    </div>
    	 <script type="text/javascript">

	 	// document.getElementById('mesBtn').addEventListener('click',function(){
	 	// 	console.log('123');
	 	// 	document.getElementsByTagName('body').id='wooooo';
			// document.querySelector('#wooooo .sl-widget-box')[0].style.;
			// // getElementsByClassName('sl-widget-box')
	 	// },false);
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
	</script>
</footer>