<!DOCTYPE html>
<?php 
    if(!isset($_SESSION)) {
      ob_start();
      session_start();      
    }
 ?>
<html lang="en">

  <!--header-->
  <head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
  <link rel="stylesheet" href="css/surfShop.css">
  <title>酋長衝浪Ariki Surf-衝浪配備</title>
 </head>
  <!--header end-->
<body>
<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
<a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>衝浪配備</span>
<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
<div class="showProd" style="display:">
 <div class="showProd_bg_up">
  <div class="container showProd_bg">
	<div class="row">
		<div class="showProd_txt col-xs-12 col-sm-6">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
				    <div class="prodTitle" id="prodTitleM" style="display:;">
						<h1>衝浪配備</h1>
			    		<p>Ariki surf Equipped</p>
			    		<p>點選下列按鍵進入購買你喜歡的裝備</p>
					</div>
					<div class="prodTitle1 prodTitle" style="display: ">
						<h1>衝浪腳繩</h1>
			    		<p>Ariki surf Leash</p>
			    		<p>這是從事衝浪運動唯一能保證您生命安全的東西，當您落水(wipe out)時，可藉著它尋回您的衝浪板，而且你的板子也不會隨浪衝回岸上或打到其他人，讓您在海上有個依靠，一般長度比板子稍長，是不可或缺的重要配備。</p>
					</div>
					<div class="prodTitle2 prodTitle" style="display: none;">
						<h1>衝浪板舵</h1>
			    		<p>Ariki surf Fin</p>
						<p>衝浪板一定要配合舵來使用，舵有分單、雙片或多片式。通常Longboard使用單片較大的Sngle fin，其他的板子多用三片的Tri fin system。現在的板子舵多採用專利的可拆式方便更換及旅行，但早期固定式也深受衝浪高手的喜愛。</p>
					</div>
					<div class="prodTitle3 prodTitle" style="display: none;">
						<h1>衝浪板蠟</h1>
			    		<p>Ariki surf Wax</p>
			    		<p>以台灣一年四季溫度的變化，要照改變使不同型態的臘，有分底臘(base wax)、冷水用(cold water)、溫水(warm water)用及熱帶氣侯用(hot/tropical water)。將蠟打在衝浪板上，可增加板身與人體的摩擦力，可讓您在板子上站得更穩，才不至於滑倒！</p>
					</div>
					<div class="prodTitle4 prodTitle" style="display: none;">
						<h1>衝浪褲&防寒衣</h1>
			    		<p>Ariki surf Wetsuit/Rash Guard</p>
			    		<p>多是用一種合成橡膠(neoprene)做的，如果你想在台灣在天氣變冷時浪比較好的時侯衝浪。就算水溫不冷，衝浪者多半會穿一件防磨衣，不然長時與板子磨擦不是很舒服。防磨衣其他的好處：防水母、保暖及防日曬，一件合身的防磨衣，絕對值得投資。</p>
					</div>
				</div>
				<div class="photoSelect col-xs-12 col-sm-12">
				  <div class="row">
					<div class="LeashBtn photo selected" style="display: inline-block;">
						<img src="images/3accessories/picselect1_s.png" alt="">
						<p class="forRwd">衝浪腳繩</p>
					</div>
					<div class="FinBtn photo" style="display: inline-block;">
						<img src="images/3accessories/picselect2.png" alt="">
						<p class="forRwd">衝浪板舵</p>
					</div>
					<div class="WaxBtn photo" style="display: inline-block;">
						<img src="images/3accessories/picselect3.png" alt="">
						<p class="forRwd">衝浪板蠟</p>
					</div>
					<div class="WetsuitBtn photo" style="display: inline-block;">
						<img src="images/3accessories/picselect4.png" alt="">
						<p class="forRwd">衝浪衣褲</p>
					</div>
				  </div>
				</div>	
			</div> 
		</div>
		<div class="pic_man col-xs-12 col-sm-6">
			<img src="images/3accessories/0.png">
			<div class="aa">
			   <img src="images/3accessories/1.png">
			    <div class="bb">
			      <img src="images/3accessories/2.png" class="man_bb">
			      <div class="cc">
			       <img src="images/3accessories/3.png">
			        <div class="dd">
			         <img src="images/3accessories/4.png">
			          <div class="ee">
			           <img src="images/3accessories/5.png" class="man_ee">
			            <div class="ff">
			             <img src="images/3accessories/6.png" class="man_ff">
			              <div class="gg">
			                <img src="images/3accessories/7.png" class="man_gg">
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			  

			<div class="mo-fire">
			  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="125px" height="189.864px" viewBox="0 0 125 189.864" enable-background="new 0 0 125 189.864" xml:space="preserve">
			<path class="flame-main" fill="#F36E21" d="M76.553,186.09c0,0-10.178-2.976-15.325-8.226s-9.278-16.82-9.278-16.82s-0.241-6.647-4.136-18.465
				c0,0,3.357,4.969,5.103,9.938c0,0-5.305-21.086,1.712-30.418c7.017-9.333,0.571-35.654-2.25-37.534c0,0,13.07,5.64,19.875,47.54
				c6.806,41.899,16.831,45.301,6.088,53.985"/>
			<path class="flame-main one" fill="#F6891F" d="M61.693,122.257c4.117-15.4,12.097-14.487-11.589-60.872c0,0,32.016,10.223,52.601,63.123
				c20.585,52.899-19.848,61.045-19.643,61.582c0.206,0.537-19.401-0.269-14.835-18.532S57.576,137.656,61.693,122.257z"/>
			<path class="flame-main two" fill="#FFD04A" d="M81.657,79.192c0,0,11.549,24.845,3.626,40.02c-7.924,15.175-21.126,41.899-0.425,64.998
				C84.858,184.21,125.705,150.905,81.657,79.192z"/>
			<path class="flame-main three" fill="#FDBA16" d="M99.92,101.754c0,0-23.208,47.027-12.043,80.072c0,0,32.741-16.073,20.108-45.79
				C95.354,106.319,99.92,114.108,99.92,101.754z"/>
			<path class="flame-main four" fill="#F36E21" d="M103.143,105.917c0,0,8.927,30.753-1.043,46.868c-9.969,16.115-14.799,29.041-14.799,29.041
				S134.387,164.603,103.143,105.917z"/>
			<path class="flame-main five" fill="#FDBA16" d="M62.049,104.171c0,0-15.645,67.588,10.529,77.655C98.753,191.894,69.033,130.761,62.049,104.171z"/>
			<path class="flame" fill="#F36E21" d="M101.011,112.926c0,0,8.973,10.519,4.556,16.543C99.37,129.735,106.752,117.406,101.011,112.926z"/>
			<path class="flame one" fill="#F36E21" d="M55.592,126.854c0,0-3.819,13.29,2.699,16.945C64.038,141.48,55.907,132.263,55.592,126.854z"/>
			<path class="flame two" fill="#F36E21" d="M54.918,104.595c0,0-3.959,6.109-1.24,8.949C56.93,113.256,52.228,107.329,54.918,104.595z"/>
			</svg>


			</div>
		</div>
	</div>
  </div>
 </div> 
</div>
<span class="session_acc" style="display: none;"><?php echo isset($_SESSION["account"] )==false ? 0 : $_SESSION["account"] ; ?></span>
<script type="text/javascript">
	$(document).ready(function(){
         var session_mem =$('.session_acc').text();
         $('#gotologin').click(function(){
         	$('.loginremindlightboxgroup').fadeOut(500);
         	$('#lightbox19').fadeIn(500);
         });
         $('#loginremindclosebtn').click(function(){
         	$('.loginremindlightboxgroup').fadeOut(500);
         });

       $('.goCart').click(function(){
		  if(session_mem==0){
		  	// alert('請先登入或加入我們');
		  	$('.loginremindlightboxgroup').fadeIn(500);
				}else{
					$(this).parent().parent().parent().parent().parent().submit();
				}

		});


       $('#gotocart').click(function(){
			if(session_mem==0){
			 $('.loginremindlightboxgroup').fadeIn(500);
				}else{
					var index = $(this).parent().parent().parent().parent().parent().index();
					if($('.Leash').eq(0).css('display')!='none'){
					$('.leashform').eq(index).submit();
					}else if($('.Fin').eq(0).css('display')!='none'){
						$('.finform').eq(index).submit();
					}else if($('.Wax').eq(0).css('display')!='none'){
						$('.waxform').eq(index).submit();
					}else{
						$('.suitform').eq(index).submit();
					}
				}
			
		});

       //-------光箱加入購物車--------
	$('#addtocart').click(function(){
		if(session_mem==0){
			 $('.loginremindlightboxgroup').fadeIn(500);
				}else{
		    alert('已加入購物車')
			console.log(prodImg);
			$.post('surfShop_cart_add.php',{
				    'prod_no' : $('.lightboxproductno').eq(0).text() , 
			 		'prod_name' : $('.lightboxproductname').eq(0).text() ,
			 		'prod_price' :  prodprice,
			 		'prod_img' :  prodImg				
				},function(rs){
					// alert(rs);
			});
		  }
		});
//-------光箱加入購物車結束--------

//-------加入購物車--------
	$('.addCart').click(function(){
		if(session_mem==0){
			$('.loginremindlightboxgroup').fadeIn(500);
				}else{
		  alert('已加入購物車')
			console.log($(this).parent().parent().parent().parent().siblings('.prodimg').val());
			$.post('surfShop_cart_add.php',{
				    'prod_no' : $(this).parent().parent().parent().parent().siblings('.prodno').val(), 
			 		'prod_name' : $(this).parent().parent().parent().parent().siblings('.prodname').val() ,
			 		'prod_price' :  $(this).parent().parent().parent().parent().siblings('.prodprice').val(),
			 		'prod_img' :  $(this).parent().parent().parent().parent().siblings('.prodimg').val()				
				},function(rs){
					// alert(rs);
			});
		  }
		});
//-------加入購物車結束--------



	});
</script>

<div class="main_BG" style="display: none;">
    <div class="barbg">
     <div class="container">
	  <div class="changebar">
		    <ul>
				<!-- <li class="111"></li> -->
				<li class="LeashBtn">衝浪腳繩</li>
				<li class="FinBtn">衝浪板舵</li>
				<li class="WaxBtn">衝浪板蠟</li>
				<li class="WetsuitBtn">衝浪褲&防寒衣</li>
			</ul>

		</div>
	</div>
  </div>

	<div class="container container22">
		<div class="item">
			<!-- <div class="1111 aa" style="display:;">
			    <h1>衝浪配備</h1>
			    <p>Ariki surf Equipped</p>
			</div> -->
			<div class="Leash aa" style="display:none;">
			    <h1>衝浪腳繩</h1>
			    <p>Ariki surf Leash</p>
			</div>
			<div class="Fin aa" style="display:none;">
			    <h1>衝浪板舵</h1>
			    <p>Ariki surf Fin</p>
			</div>
			<div class="Wax aa" style="display:none;">
			    <h1>衝浪板蠟</h1>
			    <p>Ariki surf Wax</p>
			</div>
			<div class="Wetsuit aa" style="display:none;">
			    <h1>衝浪褲&防寒衣</h1>
			    <p>Ariki surf Wetsuit/Rash Guard</p>
			</div>
		</div>		
	</div>





<!-- =========選單開始========== -->


    <div class="container">  
      <div class="row2">  
			<!-- <div class="everyone 1111" style="display:">
				<div class="title">
					<h2>321</h2>
					<hr>
					<div class="point">
						<h4>123</h4>
					</div>
				</div>

				<div class="every" >
					 <img src="images/3accessories/腳繩/Shapers -6呎腳繩 Supermo 螢光綠 green 7mm (腳踝)/_roll_1.png">
				</div>
				
			</div> -->

<!--================================= 腳繩 ==============================-->
<div class="everyone Leash" style="display:none">
				<!-- <div class="title">
					<h2>衝浪配件</h2>
					<hr>
				</div> -->
				
<?php 
try{
    require_once("connectBooks.php");
	$sql="select * from surfequipped where prod_obj='Leash' and prod_sold='1' order by prod_no DESC";
	$products = $pdo->query( $sql );

    while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
?>    	
        <form action="surfShop_cart_add.php" class="leashform">
        <input type="hidden" name="prod_no" class="prodno" value="<?php echo $prodRow["prod_no"]; ?>">
        <input type="hidden" name="prod_name" class="prodname" value="<?php echo $prodRow["prod_name"]; ?>">
        <input type="hidden" name="prod_price" class="prodprice" value="<?php echo $prodRow["prod_price"]; ?>">
        <input type="hidden" name="prod_img" class="prodimg" value="<?php echo $prodRow["prod_img"]; ?>">
 	
				<div class="myview">
					<div class="item col-xs-12 col-sm-4">
					<div class="box">
					 <div class="row">
	                   <div class="pic col-xs-12 col-sm-12">
	                       <img src="images/3accessories/<?php echo $prodRow['prod_img']; ?>">
	                   </div>
	                   <div class="txt col-xs-12 col-sm-12">
	                       <h4><?php echo $prodRow["prod_name"]; ?></h4>
	                       <div class="prod_txt" style="display: none;">
	                       <p><?php echo $prodRow["prod_des"]; ?>
							</p>	
							</div>
							<p>建議售價　$<?php echo $prodRow["prod_price"]; ?>元</p>
	                   </div>
	                  </div>
	                  <div class="btngorup">
                              <input type="button" name="" class="arikicommon_btn addCart" value="加入購物車">
                              <input type="button" name="" class="arikicommon_btn goCart" value="直接購買">
                           </div>
                      </div>
              	 	</div>
              	 	</div>
                </form>
					<?php

					    }

						}catch(PDOException $ex){
						  echo "錯誤行號 : ", $ex->getLine(), "<br>";
						  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
						}
					?>  
                
		    </div>

<!--================================= 鯊魚鰭 ==============================-->
			<div class="everyone Fin" style="display:none;">
				<?php 
			try{
			    require_once("connectBooks.php");
				$sql="select * from surfequipped where prod_obj='Fin' and prod_sold='1' order by prod_no DESC";
				$products = $pdo->query( $sql );

			    while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
			?>    	
			        <form action="surfShop_cart_add.php" class="finform">
			        <input type="hidden" name="prod_no" class="prodno" value="<?php echo $prodRow["prod_no"]; ?>">
			        <input type="hidden" name="prod_name" class="prodname" value="<?php echo $prodRow["prod_name"]; ?>">
			        <input type="hidden" name="prod_price" class="prodprice" value="<?php echo $prodRow["prod_price"]; ?>">
			        <input type="hidden" name="prod_img" class="prodimg" value="<?php echo $prodRow["prod_img"]; ?>">
 
				<div class="myview">
					<div class="item col-xs-12 col-sm-4">
					<div class="box">
					 <div class="row">
	                   <div class="pic col-xs-12 col-sm-12">
	                       <img src="images/3accessories/<?php echo $prodRow['prod_img']; ?>">
	                   </div>
	                   <div class="txt col-xs-12 col-sm-12">
	                       <h4><?php echo $prodRow["prod_name"]; ?></h4>
	                       <div class="prod_txt" style="display: none;">
	                       <p><?php echo $prodRow["prod_des"]; ?>
							</p>	
							</div>
							<p>建議售價　$<?php echo $prodRow["prod_price"]; ?>元</p>
	                   </div>
	                  </div>
	                  <div class="btngorup">
                              <input type="button" name="" class="arikicommon_btn addCart" value="加入購物車">
                              <input type="button" name="" class="arikicommon_btn goCart" value="直接購買">
                           </div>
                      </div>
              	 	</div>
              	 	</div>
                	</form>
					<?php

					    }

						}catch(PDOException $ex){
						  echo "錯誤行號 : ", $ex->getLine(), "<br>";
						  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
						}
					?>  	
			</div>

<!--================================= 衝浪板蠟 ==============================-->
		<div class="everyone Wax" style="display:none">
			<?php 
			try{
			    require_once("connectBooks.php");
				$sql="select * from surfequipped where prod_obj='Wax' and prod_sold='1' order by prod_no DESC";
				$products = $pdo->query( $sql );

			    while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
			?>    	
			        <form action="surfShop_cart_add.php" class="waxform">
			        <input type="hidden" name="prod_no" class="prodno" value="<?php echo $prodRow["prod_no"]; ?>">
			        <input type="hidden" name="prod_name" class="prodname" value="<?php echo $prodRow["prod_name"]; ?>">
			        <input type="hidden" name="prod_price" class="prodprice" value="<?php echo $prodRow["prod_price"]; ?>">
			        <input type="hidden" name="prod_img" class="prodimg" value="<?php echo $prodRow["prod_img"]; ?>">
 
				<div class="myview">
					<div class="item col-xs-12 col-sm-4">
					<div class="box">
					 <div class="row">
	                   <div class="pic col-xs-12 col-sm-12">
	                       <img src="images/3accessories/<?php echo $prodRow['prod_img']; ?>">
	                   </div>
	                   <div class="txt col-xs-12 col-sm-12">
	                       <h4><?php echo $prodRow["prod_name"]; ?></h4>
	                       <div class="prod_txt" style="display: none;">
	                       <p><?php echo $prodRow["prod_des"]; ?>
							</p>	
							</div>
							<p>建議售價　$<?php echo $prodRow["prod_price"]; ?>元</p>
	                   </div>
	                  </div>
	                  <div class="btngorup">
                              <input type="button" name="" class="arikicommon_btn addCart" value="加入購物車">
                              <input type="button" name="" class="arikicommon_btn goCart" value="直接購買">
                           </div>
                      </div>
              	 	</div>
              	 	</div>
                	</form>
					<?php

					    }

						}catch(PDOException $ex){
						  echo "錯誤行號 : ", $ex->getLine(), "<br>";
						  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
						}
					?> 
		</div>

<!--================================= 防寒衣 ==============================-->
		<div class="everyone Wetsuit" style="display:none">
				<?php 
			try{
			    require_once("connectBooks.php");
				$sql="select * from surfequipped where prod_obj='Suit' and prod_sold='1' order by prod_no DESC";
				$products = $pdo->query( $sql );

			    while($prodRow = $products->fetch(PDO::FETCH_ASSOC)){
			?>    	
			        <form action="surfShop_cart_add.php" class="suitform">
			        <input type="hidden" name="prod_no" class="prodno" value="<?php echo $prodRow["prod_no"]; ?>">
			        <input type="hidden" name="prod_name" class="prodname" value="<?php echo $prodRow["prod_name"]; ?>">
			        <input type="hidden" name="prod_price" class="prodprice" value="<?php echo $prodRow["prod_price"]; ?>">
			        <input type="hidden" name="prod_img" class="prodimg" value="<?php echo $prodRow["prod_img"]; ?>">
 
				<div class="myview">
					<div class="item col-xs-12 col-sm-4">
					<div class="box">
					 <div class="row">
	                   <div class="pic col-xs-12 col-sm-12">
	                       <img src="images/3accessories/<?php echo $prodRow['prod_img']; ?>">
	                   </div>
	                   <div class="txt col-xs-12 col-sm-12">
	                       <h4><?php echo $prodRow["prod_name"]; ?></h4>
	                       <div class="prod_txt" style="display: none;">
	                       <p><?php echo $prodRow["prod_des"]; ?>
							</p>	
							</div>
							<p>建議售價　$<?php echo $prodRow["prod_price"]; ?>元</p>
	                   </div>
	                  </div>
	                  <div class="btngorup">
                              <input type="button" name="" class="arikicommon_btn addCart" value="加入購物車">
                              <input type="button" name="" class="arikicommon_btn goCart" value="直接購買">
                                <!-- <a href="#" class="arikicommon_btn">加入購物車</a> -->
                                <!-- <a href="#" class="arikicommon_btn">直接購買</a> -->
                               
                           </div>
                      </div>
              	 	</div>
              	 	</div>
                	</form>
					<?php

					    }

						}catch(PDOException $ex){
						  echo "錯誤行號 : ", $ex->getLine(), "<br>";
						  echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
						}
					?> 
				
		</div>
		<div class="clearfix"></div>
	</div>
 </div>
</div>

  <!-- =====================燈箱=========================-->
  <div id="lightbox">
		<div id="info-box">
			<div class="lig-pic col-xs-12 col-sm-12">
				<img src="images/3accessories/腳繩/Shapers -6呎腳繩 Supermo 螢光綠 green 7mm (腳踝)/_roll_1.png">
			</div>
			<div class="lig-info col-xs-12 col-sm-12">
				<span style="display: none;" class="lightboxproductno"></span>
				<span style="display: none;" class="lightboxproductname"></span>
				<div class="info info_title">
					 <h4>Shapers -6呎腳繩 Supermo 螢光綠 7mm</h4>	
				</div>
				<div class="info info_txt">
					<p>1.8m x 7mm Shapers獨家技術 Flex-MouldR，彈性韌性皆具優化處理，接連點加強保護，腳踝部分以特級不銹鋼旋轉接頭強化，附有鑰匙收藏設計，並以彈性喇叭接頭減壓設計消除久戴的壓力，是條值得信賴又舒適的腳繩。
					</p>
				</div>
				<div class="info info_price">
					<p>建議售價　$1080元</p>
				</div>
				<div class="btngorup">
	          			
	                    <a class="arikicommon_bgwhite_btn closeLb" id="addtocart">加入購物車</a>
	                    <a class="arikicommon_bgwhite_btn closeLb" id="gotocart">直接購買</a>
		        </div>
		        <div class="clearfix"></div>
			</div>
			<div id="closebtn">
				<img src="images/3accessories/Close.png" alt="">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="loginremindlightboxgroup">
			<div class="loginremindlightboxarea">
				<h2 class="loginremindlightboxtitle">ArikiSurf</h2>
				<p class="loginremindlightboxcontent">請先登入或加入會員</p>
				<a class="arikicommon_next_btn" id="gotologin">前往登入</a>
				<div id="loginremindclosebtn">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	<script src="js/surfShop.js"></script>
 <!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
<!-- 	 <script type="text/javascript">

	 	// document.getElementById('mesBtn').addEventListener('click',function(){
	 	// 	console.log('123');
	 	// 	document.getElementsByTagName('body').id='wooooo';
			// document.querySelector('#wooooo .sl-widget-box')[0].style.;
			// // getElementsByClassName('sl-widget-box')
	 	// },false);

	 	$('#mesBtn').click(function(){
	 		$('body').attr('id','wooo');
	 		console.log('1');
	 		// $('#wooo').attr('style','opacity:"1 !important";');
	 	});

		(function(d, t) {
		  var a = d.createElement(t), s = d.getElementsByTagName(t)[0];
		  a.async = a.src = '//cdn.speaklyn.com/cb5f2d2d2658a34d74654803f63ae779.js';
		  s.parentNode.insertBefore(a, s);
		}(document, 'script'));
	</script> -->
	<!-- <script type="text/javascript">

		var ALERT_TITLE = "Oops!";
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
	</script> -->
</body>
</html>
