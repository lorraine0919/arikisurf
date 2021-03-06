<?php 
try{
require_once('connectBooks.php');
if(!isset($_SESSION)) {
      ob_start();
      session_start();      
    }
 ?>

<!DOCTYPE html>
<html lang="en"> 
  <!--header-->
  <head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
  <title>酋長衝浪Ariki Surf-客製浪板</title>
  <link rel="stylesheet" type="text/css" href="css/customize.css">
  <link rel="stylesheet" type="text/css" href="css/customize_rwd.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/loading.css">
<!--   <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/C9807DD6-5F50-5349-A2DB-9C72E9BB087E/main.js" charset="UTF-8"></script> -->
  <script src="http://d3js.org/d3.v3.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="libs/owl.carousel/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="
libs/owl.carousel/dist/assets/owl.theme.default.min.css">
<script src="libs/owl.carousel/dist/owl.carousel.js"></script>
 </head>
  <!--header end-->
<body>

<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
<a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>客製化衝浪版</span>
<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
<div class="wrapper">

	<div class="bg_forest_2">
		<!-- 		<div class="pillar">
			<img src="images/2board/pillar.png">
		</div> -->
		<div class="lightboxgroup">
			<div class="lightboxarea">
				<h2 class="lightboxtitle"></h2>
				<p class="lightboxcontent">請填寫完整資料</p>
				<div id="closebtn">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="loginremindlightboxgroup">
			<div class="loginremindlightboxarea">
				<h2 class="loginremindlightboxtitle"></h2>
				<p class="loginremindlightboxcontent">請先登入</p>
				<a class="arikicommon_next_btn" id="gotologin">前往登入</a>
				<div id="loginremindclosebtn">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="stopselllightboxgroup">
			<div class="stopselllightboxarea">
				<p class="stopselllightboxcontent">本項目已停賣</p>
				<div id="stopsellclosebtn">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="comfirmlightboxgroup">
			<div class="comfirmlightboxarea">
				<h2 class="comfirmlightboxtitle">完成交易</h2>
				<p class="comfirmlightboxcontent">
					謝謝您購買酋長的客製化浪板，<br>
					請於七日內匯款<span class="comfirmboxtotal"></span>元整至下列帳戶<br>
					700-9487999887<br>
					若未於七日內匯款，將視為取消交易<br>
					
				</p>
				<a class="arikicommon_next_btn" href="7member_ordercheck.php">前往訂單查詢</a>
				<div id="comfirmclosebtn">
					<i class="fa fa-times" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="step1_maxContent">
			<div class="stepbar">
				<div class="circle"></div>
				<h3 class="undercircle">選擇板型</h3>
				<div class="title">
					<h3>選擇板型</h3>
				</div>
			</div>
			<div class="introduce">
				<div class="pricegroup">
					<span>浪板價格</span>
					<span class="priceshowgroup">
						<i class="fa fa-usd" aria-hidden="true"></i>
						<span class="boardpriceshow">
						
						<?php 
							$sql = 'select * from customize_model';
							$pdostatement = $pdo->query($sql); 
							$pdostatement->fetch(PDO::FETCH_ASSOC);
							$pdorow = $pdostatement->fetch(PDO::FETCH_ASSOC);
							echo $pdorow['customize_model_price'];
						?>
							
						</span>	
					</span>
					
				</div>
				<div class="introducefix">
					<div class="head">
						<h3>長板（LONGBOARD）</h3>
					</div>
					<div class="content">
						<p>長板，非常適合初學者進階練習的好板型，浮力大、滑水輕鬆、穩定性強</p>
						<div class="contentimg">
							<img src="images/2board/step1/onlongboard.png">						
						</div>

					</div>					
				</div>
			</div>
			<div class="demogroup">
				<div class="demo">
					<svg  x="0px" y="0px" viewBox="0 0 150 500" class="svgboard">
						<g>
							<!-- 遮色片形狀 -->
							<defs>
								<path class="bordshape" id="mask"/>
							</defs>
							<!-- 板型遮色片 -->
							<clipPath id="clip">
								<use xlink:href="#mask"  style="overflow:visible;"/>
							</clipPath>
							<!-- 主體顏色 -->
							<linearGradient id="maincolor" gradientUnits="userSpaceOnUse" x1="-143.5315" y1="141.1379" x2="-150.2133" y2="503.2512" gradientTransform="matrix(1 0 0 -1 0 841.67)">
								<stop  offset="1.021794e-007" style="stop-color:#C9CACA"/>
								<stop  offset="1" style="stop-color:#FFFFFF"/>
							</linearGradient>
							<!-- 主體形狀 -->
							<path class="bordshape" style="clip-path:url(#clip); fill:url(#maincolor);"/>

							<!-- 放圖片						 -->
							<g transform="matrix(1 0 0 1 -1.525879e-005 0)" style="clip-path:url(#clip);enable-background:new    ;">
									<!-- <image style="overflow:visible;" width="500" height="500" id="XMLID_1_" xlink:href="0729logo.png"  transform="matrix(0.364 0 0 0.364 -244.6667 307.2233)">
									</image> -->
							</g>

							<!-- 陰影顏色 -->
							<linearGradient id="shadow" gradientUnits="userSpaceOnUse" x1="11.2131" y1="260.0541" x2="92.9405" y2="252.5548" gradientTransform="matrix(1 0 0 -1 0 841.67)">
								<stop  offset="1.021794e-007" style="stop-color:#595757;stop-opacity:0.2"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</linearGradient>
							<!-- 陰影形狀 -->
							<path class="bordshape" style="clip-path:url(#clip); fill:url(#shadow);"/>
							
							<!-- 光顏色 -->
							<linearGradient id="light" gradientUnits="userSpaceOnUse" x1="168.2328" y1="243.213" x2="87.8788" y2="252.6649" gradientTransform="matrix(1 0 0 -1 0 841.67)">
								<stop  offset="0" style="stop-color:#FFFFFF"/>
								<stop  offset="0.401" style="stop-color:#FFFFFF;stop-opacity:0.599"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</linearGradient>
							<!-- 光形狀 -->
							<path class="bordshape" style="clip-path:url(#clip); fill:url(#light);"/>
							<g class="svgothers" style="clip-path:url(#clip);"></g>
						</g>
					</svg>
					<img src="images/2board/base.png" class="base">
				</div>
				<div class="rwdselectboard" >
					<ul class="rwdSelectboardMenu">
						<li>槍板</li>
						<li class="click">長板</li>
						<li>娛樂板</li>
						<li>短板</li>
						<li>魚板</li>
						<li>趴板</li>
					</ul>
				</div>		
				<div class="rwdintroduce">
					<div class="rwdintroducefix">
						<div class="btnfield">
							<i class="fa fa-arrow-circle-right" aria-hidden="true" id="rwdShowInfoBtn"></i>
							<i class="fa fa-arrow-circle-left" aria-hidden="true" id="rwdHideInfoBtn"></i>	
							<p>板型介紹</p>
						</div>
						
						<p class="rwdboardinfo">長板，非常適合初學者進階練習的好板型，浮力大、滑水輕鬆、穩定性強</p>
						p	
					</div>
				</div>		
			</div>
			<div class="selectAndNext">
				<div class="selectAndNextfix">
					<div class="selectboard">
						<div class="head">
							<h3>長板<span>LONGBOARD</span></h3>
						</div>
						<input type="hidden" id="customerboard" value="長板<span>LONGBOARD</span>">
						<div class="boardgroup">
							<div class="board"><img src="images/2board/gunboard/gunboard_h.png" alt=""></div>
							<div class="board click"><img src="images/2board/longboard/longboard_h.png" alt=""></div>
							<div class="board"><img src="images/2board/funboard/funboard_h.png" alt=""></div>
							<div class="board"><img src="images/2board/shortboard/shortboard_h.png" alt=""></div>
							<div class="board selected"><img src="images/2board/fishboard/fishboard_h.png" alt=""></div>
							<div class="board"><img src="images/2board/bodyboard/bodyboard_h.png" alt=""></div>		
						</div>
					</div>	
					<div class="next">
						<a id="step1tostep2" class="arikicommon_next_btn">下一步</a>
						<div class="clearfix"></div>
					</div>	
						
				</div>		
			</div>
		</div>
		<div class="step2_maxContent">	
			<div class="stepbar">
				<div class="circle"></div>
				<h3 class="undercircle">選擇樣式</h3>
				<div class="title">
					<h3>選擇樣式</h3>
				</div>
			</div>
			<div class="introduce">
				<div class="pricegroup">
					<table>
						<tr>
							<td>板型價格</td>
							<td><span id="boardprice" class="shownowprice"></span></td>
						</tr>
						<tr>
							<td>圖樣價格</td>
							<td>
								<span id="patternprice" class="shownowprice"></span>
							</td>
						</tr>
						<tr>
							<td>材質價格</td>
							<td><span id="materialprice" class="shownowprice"></span></td>
						</tr>
						<tr>
							<td>運費</td>
							<td><span>500</span></td>
						</tr>						
						<tr>
							<td colspan="2" class="dividelinearea">
								<div class="divideline"></div>
							</td>
						</tr>
						<tr >
							<td><span>總價</span></td>
							<td>
								<span class="priceshowgroup" class="shownowprice">
									<i class="fa fa-usd" aria-hidden="true"></i>
									<span class="priceshow">
									
									<?php 
										$sql = 'select * from customize_model';
										$pdostatement = $pdo->query($sql); 
										$pdostatement->fetch(PDO::FETCH_ASSOC);
										$pdorow = $pdostatement->fetch(PDO::FETCH_ASSOC);
										echo $pdorow['customize_model_price'];
									?>
										
									</span>	
								</span>
							</td>
						</tr>
					</table>
				</div>
				<div class="introducefix">
					<div class="head">
						<h3>環氧樹脂（Epoxy）</h3>
						<div class="headimg">
							<div class="headimgfix">
								<img src="images/2board/step2/EPOXY.png">
							</div>			
						</div>
					</div>
					<div class="content">
						
						<p>構造由Eps(較高級的保麗龍)＋玻璃纖維布＋Epoxy樹脂所組成，重量較輕，靈敏度較佳，但是穩定度較差，少了玻纖板的紮實感！<br><br>
						由於Epoxy樹脂的硬度較硬，所以優點是較耐撞擊，但是也因為硬而無彈性，在大浪時有可能發生直接斷裂的情形</p>
					</div>					
				</div>

			</div>
			<div class="demogroup">
				<div class="demo">
					<svg  x="0px" y="0px" viewBox="10 0 115 500" class="svgboard" id="svgstep2">
						<g>
							<!-- 遮色片形狀 -->
							<defs>
								<path class="bordshape" id="mask2"/>
							</defs>
							<!-- 板型遮色片 -->
							<clipPath id="clip2">
								<use xlink:href="#mask2"  style="overflow:visible;"/>
							</clipPath>
							<!-- 主體顏色 -->
							<linearGradient id="maincolor2" gradientUnits="userSpaceOnUse" x1="-142.5315" y1="143.2499" x2="-149.2133" y2="505.3632" gradientTransform="matrix(1 0 0 -1 0 841.67)">
								<stop  offset="1.021794e-007" style="stop-color:#C9CACA"/>
								<stop  offset="1" style="stop-color:#FFFFFF"/>
							</linearGradient>
							<!-- 主體形狀 -->
							<path class="bordshape mainshapepath" style="clip-path:url(#clip2); fill:url(#maincolor2);"/>



							<!-- 陰影顏色 -->
							<linearGradient id="shadow2" gradientUnits="userSpaceOnUse" x1="11.2131" y1="260.0541" x2="92.9405" y2="252.5548" gradientTransform="matrix(1 0 0 -1 0 841.67)">
								<stop  offset="1.021794e-007" style="stop-color:#595757;stop-opacity:0.2"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</linearGradient>
							<!-- 陰影形狀 -->
							<path class="bordshape shadowpath" style="clip-path:url(#clip2); fill:url(#shadow2);"/>
							
							<!-- 光顏色 -->
							<linearGradient id="light2" gradientUnits="userSpaceOnUse"  x1="168.2328" y1="243.213" x2="87.8788" y2="252.6649" gradientTransform="matrix(1 0 0 -1 0 841.67)">
								<stop  offset="0" style="stop-color:#FFFFFF"/>
								<stop  offset="0.401" style="stop-color:#FFFFFF;stop-opacity:0.599"/>
								<stop  offset="1" style="stop-color:#FFFFFF;stop-opacity:0"/>
							</linearGradient>
							<!-- 光形狀 -->
							<path class="bordshape lightpath" style="clip-path:url(#clip2); fill:url(#light2);"/>
							<g class="svgothers" style="clip-path:url(#clip2);"></g>
							<!-- 放圖片						 -->
							<g style="clip-path:url(#clip2);enable-background:new;" id="draggroup" >
									<image style="overflow:visible;"  xlink:href="" class="patternshow" id="patternshow" >
									</image>
							</g>
						</g>
					</svg>
					<img src="images/2board/base.png" class="base">
				</div>	
				<div class="rwdselectstyle">
					<div class="colorgroup selectgroup">
						<input type="hidden" id="customercolor" value="白">
						<div class="btn click">選擇顏色</div>
						<div class="clearfix"></div>
						<div class="colorall">
							<div class="color">
								<div class="circle"></div>
								<p>白</p>
							</div>
							<div class="color">
								<div class="circle"></div>
								<p>藍</p>
							</div>
							<div class="color">
								<div class="circle"></div>
								<p>黃</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="patterngroup selectgroup">
						<input type="hidden" id="customerpattern" value="未選擇圖片">
						<div class="btn">選擇圖樣</div>
						<div class="clearfix"></div>
							<div class="patternarea">
								<div class="top">
									<div class="allpattern">
										
										<?php 
	                                        $sql = 'select * from customize_officialimg';
	                                        $pdostatement=$pdo->prepare($sql);
	                                        $pdostatement->execute();
	                                        while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){
										 ?>
										<div class="pattern">
											<img src="images/2board/officalimg/<?php echo $pdoRow['officialimg_file_name']?>">
										</div>
										<?php 

											}
										 ?>
									</div>
									<div class="arrow">
										<div class="pre arrowbtn"><i class="fa fa-caret-left" aria-hidden="true"></i></div>
										<div class="next arrowbtn"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
									</div>
								</div>
								<div class="bottom">
									<div class="left">
										
										<p>上傳您的圖案</p>
									</div>
									<div class="right">
										<label for="uploadimg"><div class="uploadbtn"><img src="images/2board/step2/uploadbtn.png"></div></label>
										
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
					</div>
					<div class="texturegroup selectgroup">
						<input type="hidden" id="customermaterial" value="環氧樹脂">
						<div class="btn">選擇材質</div>
						<div class="clearfix"></div>
						<div class="texturecontent">
							<div class="title">環氧樹脂</div>
							<div class="alltexture">
								<div class="texture selected"><img src="images/2board/step2/epoxyball.png"></div>
								<div class="texture"><img src="images/2board/step2/woodball.png"></div>
								<div class="texture"><img src="images/2board/step2/frpball.png"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			<div class="rwdintroduce">
					<div class="rwdintroducefix">
						<div class="btnfield">
							<i class="fa fa-arrow-circle-right" aria-hidden="true" id="rwdShowInfoBtn"></i>
							<i class="fa fa-arrow-circle-left" aria-hidden="true" id="rwdHideInfoBtn"></i>	
							<p>材質介紹</p>
						</div>
						<h4 class="texturetitle">環氧樹脂（Epoxy）</h4>
						<p class="rwdtextureinfo">
						構造由Eps(較高級的保麗龍)＋玻璃纖維布＋Epoxy樹脂所組成，重量較輕，靈敏度較佳，但是穩定度較差，少了玻纖板的紮實感！<br><br>
						由於Epoxy樹脂的硬度較硬，所以優點是較耐撞擊，但是也因為硬而無彈性，在大浪時有可能發生直接斷裂的情形</p>
					</div>
				</div>
			</div>
			<div class="selectAndNext">
				<div class="selectAndNextfix">
					<div class="colorgroup">
						<div class="colorbtn whitebtn">選擇顏色</div>
						<div class="clearfix"></div>
						<div class="colorselectgroup">
							<div class="color">
								<div class="circle"></div>
								<p>白色</p>
							</div>
							<div class="color">
								<div class="circle"></div>
								<p>藍色</p>
							</div>
							<div class="color">
								<div class="circle"></div>
								<p>黃色</p>
							</div>
							<!-- <div class="color">
								<div class="circle"></div>
								<p>紅色</p>
							</div>
							<div class="color">
								<div class="circle"></div>
								<p>紅色</p>
							</div> -->
						</div>
					</div>	
					<div class="patterngroup">
							<div class="patternbtn whitebtn">選擇圖案</div>
							<div class="clearfix"></div>
							<div class="patternselectgroup">
								<div class="patternselectgroupfix">
									<div class="head">
											<p class="patterntitle">未選擇圖樣</p>
											<script>
											var patterntitlearr=[];
											<?php 
		                                        $sql = 'select * from customize_officialimg';
		                                        $pdostatement=$pdo->prepare($sql);
		                                        $pdostatement->execute();
		                                        while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){
											 ?>
												patterntitlearr.push('<?php echo $pdoRow['officialimg_name']?>');
											<?php 

												}
											 ?>
											 // console.log(patterntitlearr);
											 </script>										
									</div>
									<div class="patternframe">
										<div class="patterns">
											<?php 
		                                        $sql = 'select * from customize_officialimg';
		                                        $pdostatement=$pdo->prepare($sql);
		                                        $pdostatement->execute();
		                                        while($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){
											 ?>
											<div class="pattern">
												<img src="images/2board/officalimg/<?php echo $pdoRow['officialimg_file_name']?>">
											</div>
											<?php 

												}
											 ?>
										</div>								
									</div>
									<div class="scroll">
										<div class="controller"><img src="images/2board/step2/controller.png"></div>
									</div>
									<div class="uploadgroup">
										<div class="introduceUpload">
											<h4>上傳您的圖案</h4>
											<p>格式限制：1MB內、長寬均為200px之PNG格式圖檔。</p>
										</div>
										<input type="file" id="uploadimg" style="display: none">
										<label for="uploadimg">
											<div class="uploadbtn"><img src="images/2board/step2/uploadbtn.png"></div>
										</label>
										
									</div>									
								</div>
							</div>							
					</div>
					<div class="texturegorup">
						<div class="texturebtn whitebtn"><p>選擇材質</p></div>
						<div class="clearfix"></div>
						<div class="textureselect">
							<div class="textureselectfix">
								<div class="head"><h3>環氧樹脂</h3></div>
								<div class="texturegroup">
									<div class="texture click"><img src="images/2board/step2/epoxyball.png" alt=""></div>
									<div class="texture"><img src="images/2board/step2/woodball.png" alt=""></div>
									<div class="texture"><img src="images/2board/step2/frpball.png" alt=""></div>								
								</div>					
							</div>
						</div>
					</div>					
				</div>
				<div class="next">
					<a id="step2tostep1" class="arikicommon_next_btn">上一步</a>
					<a id="step2tostep3" class="arikicommon_next_btn">下一步</a>
					<div class="clearfix"></div>
				</div>
			
			</div>
		</div>
		<div class="step3_maxContent">	
			<input type="hidden" value="<?php echo isset($_SESSION['member_no']) ?  '1' :  '2'; ?>" class="memberloginornot">
			<!-- 1是有登入，2是沒登入 -->
			<div class="stepbar">
				<div class="circle"></div>
				<h3 class="undercircle">填寫購買資料</h3>
			</div>
			<div class="demogroup">
				<div class="demo">
					<!-- <img src="images/2board/longboard/longboard.png" class="boarddemo"> -->
					<!-- <img id="step3result" /> -->
					<canvas id="step3result" style="display: none"></canvas>
					<div id="png-container"></div>
				</div>			
			</div>
			<div class="fill">
				<div class="fillfix">
					<div class="head">
						<h3>填寫購買資料</h3>
					</div>
					<div class="total">
						<div class="totalfix">
							<h4>總價（含運）</h4>
							<div class="bottom">
								<div class="number">
									<h3 id="ordertotalprice">94870</h3><span>元</span>
								</div>
								<div class="detail">
									<p>明細</p>
								</div>
							</div>	
						</div>
					</div>	
					<div class="contentgroup">
						<div class="content">
							<table>
								<tr>
									<th><h3>姓名</h3></th>
									<td><input type="text" name="" id="customername" class="orederinput"></td>
								</tr>
								<tr>
									<th><h3>電話</h3></th>
									<td><input type="phone" name="" id="customerphone" class="orederinput"></td>
								</tr>
								<tr>
									<th><h3>電子信箱</h3></th>
									<td><input type="email" name="" id="customeremail" class="orederinput"></td>
								</tr>
								<tr>
									<th><h3>收件地址</h3></th>
									<td><textarea rows="3" id="customeraddress" class="orederinput"></textarea></td>
								</tr>
								<tr>
									<th><h3>匯款帳號後五碼</h3></th>
									<td><input type="text" name="" id="customeraccount" class="orederinput"></td>
								</tr>
								<tr>
									<th><h3>其他留言</h3></th>
									<td><textarea rows="5" id="customermessage" class="orederinput"></textarea></td>
								</tr>
							</table>
							<div class="next">
								<a id="step3tostep2" class="arikicommon_next_btn">上一步</a>
								<a id="step3tostep4" class="arikicommon_next_btn">下一步</a>
								<div class="clearfix"></div>
							</div>
						</div>
						
					</div>					
				</div>

			</div>
		</div>
		<div class="step4_maxContent">	
			<div class="stepbar">
				<div class="circle"></div>
				<h3 class="undercircle"><span>確認購買資料</span></h3>
			</div>
			<div class="fill">
				<div class="fillfix">
					
					<div class="head">
						<h3>確認購買資料</h3>
					</div>
					<div class="content">
						<div class="demogroup col-sm-4">
							<div class="demo">
								<img src="images/2board/longboard/longboard.png" class="boarddemo" id="orderpic">
							</div>			
						</div>
						<div class="right col-sm-8">
							<div class="custominfo col-sm-12">
								<div class="title"><h3>您的資料</h3></div>
								<div class="infocontent">
									<p>姓名　<sapn id="ordername">鄧浮雲</sapn><br>
									電話　<sapn id="orderphone">03-94879487</sapn><br>
									信箱　<sapn id="orderemail">mathi5566@gmail.com</sapn><br>
									收件地址　<sapn id="orderaddress">桃園市中壢區中央路1段1號</sapn><br>
									匯款帳號後五碼　<sapn id="orderaccount">59487</sapn><br>
									其他留言　<sapn id="ordermessage">煩請回覆告知出貨時間</sapn><br>
									</p>
								</div>
							</div>
							<div class="boardinfo col-sm-6 col-xs-12">
								<div class="title"><h3>您的浪板</h3></div>
								<div class="infocontent">
									<P>板型　<span id="orderboard">長板</span><br>
									顏色　<span id="ordercolor">白色</span><br>
									圖案　<span id="orderpattern">ARIKI BD101</span> <br>
									材質　<span id="ordermaterial">玻璃纖維</span><br>
									</P>
								</div>
							</div>
							<div class="totalinfo col-sm-6 col-xs-12">
								<div class="title"><h3>訂單明細</h3></div>
								<div class="infocontent">
									<p>
										板型　<span id="finalboardprice">94770</span><span class="unitdollar">元</span><br>
										圖樣　<span id="finalpatternprice">94770</span> <span class="unitdollar">元</span><br>
										材質　<span id="finalmaterialprice">94770</span><span class="unitdollar">元</span><br>
										運費　<span>500</span> <span class="unitdollar">元</span><br>
										<span class="finaltotalpricegroup">總價　<span id="finaltotalprice">94870</span> <span class="unitdollar">元</span></span><br>
									</p>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="next">
								<a id="step4tostep3" class="arikicommon_next_btn">上一步</a>
								<a id="finishorder" class="arikicommon_next_btn">確認下單</a>
								
							</div>
						</div>
						<div class="clearfix"></div>
					</div>					
				</div>

			</div>
		</div>
	</div>
</div>

 <!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
 <script src="js/customize.js"></script>
<?php 


}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

 ?>

</body>
</html>