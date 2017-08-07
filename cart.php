<?php
	ob_start();
	session_start();
	
?>

<!DOCTYPE html>
<html lang="en"> 

  <!--header-->
  <head>
  <!--(bake module/head.html)--><?php require_once('publicpage/head.php'); ?>
  <link  rel="stylesheet" type="text/css" href="css/cart.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript" src="js/cart_process_28.js"></script>
  <script type="text/javascript" src="js/cart_update.js"></script>
  <title>購物車</title>
 </head>
  <!--header end-->
<body class="body_28">
<!--(bake module/header.html)--><?php require_once('publicpage/header.php'); ?>
<a href="index.html">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>購物車</span>
<!--(bake module/headerend.html)--><?php require_once('publicpage/headerend.php'); ?>
	<?php
	if(isset($_SESSION["account"]) == false){
		echo "<script>window.alert('尚未登入,請登入');location.href='index.php';</script>";
	}else{
		try{
			require_once("connectBooks.php");
			// foreach()
			$sql = "select * from member 
					where account=:account and
							member_no=:member_no and
							psw = :psw";
			$ifmember = $pdo->prepare($sql);
			$ifmember->bindValue("account",$_SESSION["account"]);
			$ifmember->bindvalue("member_no",$_SESSION["member_no"]);
			$ifmember->bindvalue("psw",$_SESSION["psw"]);
			$ifmember->execute();


			$member_account = $_SESSION["account"];
			$member_no = $_SESSION["member_no"];
			$member_psw = $_SESSION["psw"];

	?>
	<input type="hidden" name="" value="<?php echo $member_account;?>" id="MB_AC">
	<input type="hidden" name="" value="<?php echo $member_no;?>" id="MB_NO">
	<input type="hidden" name="" value="<?php echo $member_psw;?>" id="MB_PSW">
	<div class="cart-body_28">
		<div class="flow">
			<div class="flow-box">
				<div class="flow-item"></div>
				<div class="flow-item"></div>	
				<div class="flow-item"></div>
				<div class="flow-item"></div>
			</div>
			<div class="flow-h3">
				<h3>購物明細</h3>
				<h3>輸入資料</h3>
				<h3>訂單確認</h3>
				<h3>結帳完成</h3>
			</div>
		</div>
		
		<div class="cart1-pc_28">
			<div class="big-title_28 col-sm-12">
				<h2>購物明細</h2>
			</div>
			<div class="clearfix"></div>
		
			<div class="title-group_28">
				<ul>
					<li class="col-sm-4">商品明細</li>
					<li class="col-sm-2">金額</li>
					<li class="col-sm-2">數量</li>
					<li class="col-sm-2">小計</li>
					<li class="col-sm-2">變更</li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<?php
				require_once("connectBooks.php");

				if(isset($_SESSION["products"])==true){
					foreach($_SESSION["products"] as $psn=>$PD_CT){

						

						$sql = "select * from surfequipped where prod_no=:prod_no";
						$ODcatch = $pdo->prepare($sql);
						$ODcatch->bindValue(":prod_no",$PD_CT["prod_no"]);
						$ODcatch->execute();
						$ODVL = $ODcatch->fetch();
						$SMmoney = (int)($ODVL["prod_price"]) * (int)($PD_CT["quantity"]);
				
			?>
			<div class="list-group_28">
				<div class="img-name col-sm-4">
					<div class="list-Pimg_28 list-item_28 col-sm-6">
						<img src="images/3accessories/<?php echo $ODVL["prod_img"];?>" alt="" class="Pimg">
					</div>
					<div class="list-Pname_28 list-item_28 col-sm-6">
						<p><span class="Pname"><?php echo $ODVL["prod_name"];?></span></p>
					</div>
				</div>
				
				<div class="list-context_28 list-item_28 col-sm-6">
					<p class="col-sm-2"><span class="Pmoney PC_money"><?php echo $ODVL["prod_price"];?></span>元</p>
					<p class="col-sm-2"><input type="number" name="Pamount" value="1" min="1" maxlength="5" class="Pamount arikicommon_inputtext"></p>
					<p class="col-sm-2"><span class="Psub PC_sub"><?php echo $SMmoney;?></span></p>
				</div>
				<div class="list-Pchange_28 list-item_28 col-sm-2">
					<input type="hidden" name="Prod_Num" class="Prod_Num" value="<?php echo $ODVL["prod_no"];?>">
					<div class="Pchange-changebtn arikicommon_bgwhite_btn">修改數量</div>
					<div class="Pchange-deletbtn Pchange-deletbtn_PC arikicommon_bgwhite_btn">刪除</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<?php
					}//foreach
				}else{
					echo "<div class='col-xs-12 col-sm-12 list-group_28 list-noInfo'>目前並無資料</div>";
				}
			?>
			<div class="total_28">
				<div class="total-sum">
					<p>共<span class="total-num PC-num"></span>件商品，總金額<span class="total-money PC-total"></span>元</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--cart1-pc_28-->
		
		<div class="cart1-phone_28">
			<div class="title-phone">
				<h2>購物車</h2>
			</div>
			
			<?php 
				if(isset($_SESSION["products"])==true){
					foreach ($_SESSION["products"] as $psn => $PD_CT){
						# code...
						$sql = "select * from surfequipped where prod_no=:prod_no";
						$ODcatch = $pdo->prepare($sql);
						$ODcatch->bindValue(":prod_no",$PD_CT["prod_no"]);
						$ODcatch->execute();
						$ODVL = $ODcatch->fetch();
						$SMmoney = (int)($ODVL["prod_price"]) * (int)($PD_CT["quantity"]);
			?>
			<div class="cart1-box">
				<div class="list-product list-Proitem  col-xs-6">
					<div class="list-ProImgtxt">
						<img src="images/3accessories/<?php echo $ODVL["prod_img"];?>" alt="" class="Pimg">
						<span class="Pname"><?php echo $ODVL["prod_name"];?></span>
					</div>
				</div>
		
				<div class="list-introduction list-Txtitem col-xs-6">
					<ul>
						<li>金額:<span class="Pmoney Pmoney_phone"><?php echo $ODVL["prod_price"];?></span>元</li>
						<li>數量:<input type="number" name="" value="1" class="arikicommon_inputtext Pamount Pamount_phone"></li>
						<li>小計:<span class="Psub Psub_phone"><?php echo $SMmoney; ?></span></li>
						<input type="hidden" name="Prod_Num" class="Prod_Num" value="<?php echo $ODVL["prod_no"];?>">
						<li class="Pchange-changebtn_phone arikicommon_btn">修改數量</li>
						<li class="Pchange-deletbtn_phone arikicommon_btn">刪除</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		
			<!-- <div class="cart1-box">
				<div class="list-product list-Proitem  col-xs-6">
					<div class="list-ProImgtxt">
						<img src="images/8cart/surf-pants2.jpg" alt="" class="Pimg">
						<span class="Pname">AKUR海灘褲</span>
					</div>
				</div>
		
				<div class="list-introduction list-Txtitem col-xs-6">
					<ul>
						<li>金額:<span class="Pmoney">100</span>元</li>
						<li>數量:
							<select class="Pamount">
								<option value="">1</option>
								<option value="">2</option>
							</select>
						</li>
						<li>小計:<span class="Psub">100</span></li>
						<li class="Pchange-changebtn arikicommon_btn">修改數量</li>
						<li class="Pchange-deletbtn arikicommon_btn">刪除</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> -->
			<?php
					}
				}
			?>
			<div class="horizontal-phone">
				<div class="horizontal-line"></div>
			</div>

			<div class="total-phone" >
				<p>共<span class="total-num num_phone"></span>件商品，總金額<span class="total-money total_phone"></span>元</p>
			</div>
		</div><!--cart1-phone_28-->
		
		
		<div class="notice_28">
			<div class="big-title_28 col-sm-12 col-xs-12">
				<h2>注意事項</h2>
			</div>
			<div class="clearfix"></div>
		
			<div class="notice-context col-sm-12 col-xs-12">
				<ul>
					<li>只接受匯款方式。</li>
					<li>買家匯款完成才會出貨。</li>
					<li>如未到7日，才能進行取消交易。</li>
					<li>匯款後，無法進行取消交易。</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div class="change-page_28">
			<div class="arikicommon_btn btn-goshop" id="btn-goshop">
				<a href="surfShop.php">繼續購買</a>
			</div>
			<div class="arikicommon_btn btn-checkout" id="btn-checkout">進行結帳</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="InputInfo-body_29">
		<div class="flow">
			<div class="flow-box">
				<div class="flow-item"></div>
				<div class="flow-item"></div>	
				<div class="flow-item"></div>
				<div class="flow-item"></div>
			</div>
			<div class="flow-h3">
				<h3>購物明細</h3>
				<h3>輸入資料</h3>
				<h3>訂單確認</h3>
				<h3>結帳完成</h3>
			</div>
		</div>

		<div class="InputInfo-bgbox">
			<div class="big-title">
				<h3>訂購人資訊</h3>
			</div>


			<div class="buyerInfo InfoArea-Item">
				<div class="buyerInfo-box InfoArea-box-Item">
					<ul>
						<li><span class="Buyspan span-item">姓名</span><input type="text" class="arikicommon_inputtext buyerName" id="buyerName"></span></li>
						<li><span class="Buyspan span-item">聯絡電話</span><input type="text" class="arikicommon_inputtext buyerTel" id="buyerTel" placeholder="訂購者常用電話"></span></li>
						<li><span class="Buyspan span-item">E-mail</span><input type="text" class="arikicommon_inputtext buyerEmail" id="buyerEmail"></span></li>
						<li><span class="Buyspan span-item">地址</span><input type="text" class="arikicommon_inputtext buyerAdress" id="buyerAdress"></span></li>
						<li><span class="Buyspan span-item">匯款帳號</span><input type="text" class="arikicommon_inputtext buyerAtm" id="buyerAtm" placeholder="輸入5碼" maxlength="5"></span></li>
						<!-- <li><input type="checkbox" id="buy-sync-member" class="item-sync-member"><label for="buy-sync-member">同會員資料</label></li> -->
					</ul>
					
				</div>
			</div>

			<!-- <div class="big-title">
				<h3>收件人資訊</h3>
			</div> -->

			<!-- <div class="consigneeInfo InfoArea-Item">
				<div class="consigneeInfo-box InfoArea-box-Item">
					<ul>
						<li><input type="checkbox" id="CS-sync-member" class="item-sync-member"><label for="CS-sync-member">同訂購人資料</label></li>
						<li><span class="span-item">姓名</span><input type="text" class="arikicommon_inputtext consigneeName"><span class="message-item"></span></li>
						<li><span class="span-item">電話</span><input type="text" class="arikicommon_inputtext consigneeTel" placeholder="收件人常用電話"><span class="message-item"></span></li>
						<li><span class="span-item">E-mail</span><input type="text" class="arikicommon_inputtext consigneeEmail"><span class="message-item"></span></li>
						<li><span class="span-item">收貨地址</span><input type="text" class="arikicommon_inputtext consigneeAdress"><span class="message-item"></span></li>
					</ul>
				</div>
			</div> -->
		</div>
		

		<div class="PvNext-page-btn"><!-- Pv = previous上一頁-->
			<div class="previous-page arikicommon_btn" id="previous-page"><span>上一頁</span></div>
			<div class="next-page arikicommon_btn" id="next-page"><span>下一頁</span></div>
			<div class="clearfix"></div>
		</div>
	</div><!--InputInfo-body_29-->

	<div class="order-confirm_30">
		<div class="flow">
			<div class="flow-box">
				<div class="flow-item"></div>
				<div class="flow-item"></div>	
				<div class="flow-item"></div>
				<div class="flow-item"></div>
			</div>
			<div class="flow-h3">
				<h3>購物明細</h3>
				<h3>輸入資料</h3>
				<h3>訂單確認</h3>
				<h3>結帳完成</h3>
			</div>
		</div>

		<div class="order-confirm-bgbox">
			<div class="big-title">
				<h3>購物明細</h3>
			</div>

			<div class="ProCfirmInfo-pc">
				<div class="ProCfirmInfo-pc-box">
					<div class="Cfirm-title">
						<ul>
							<li class="col-sm-6">商品明細</li>
							<li class="col-sm-2">金額</li>
							<li class="col-sm-2">數量</li>
							<li class="col-sm-2">小計</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<?php
						if(isset($_SESSION["products"])==true){
							foreach ($_SESSION["products"] as $psn => $PD_CT){
								$sql = "select * from surfequipped where prod_no=:prod_no";
								$ODcatch = $pdo->prepare($sql);
								$ODcatch->bindValue(":prod_no",$PD_CT["prod_no"]);
								$ODcatch->execute();
								$ODVL = $ODcatch->fetch();
								$SMmoney = (int)($ODVL["prod_price"]) * (int)($PD_CT["quantity"]);
					?>
					<div class="Cfirm-pro">
						<ul>
							<li class="col-sm-6"><span class="getProName getProName_PC"><?php echo $ODVL['prod_name'];?></span></li>
							<li class="col-sm-2"><span class="getPrice getPrice_PC"><?php echo $ODVL['prod_price'];?></span>元</li>
							<li class="col-sm-2"><span class="getMath getMath_PC"><?php echo $PD_CT['quantity'];?></span></span></li>
							<li class="col-sm-2"><span class="getSum getSum_PC"><?php echo $SMmoney;?></span></li>
						</ul>
						<div class="clearfix"></div>
					</div>

					<!-- <div class="Cfirm-pro">
						<ul>
							<li class="col-sm-6"><span class="getProName">AKUR海灘褲(藍)</span></li>
							<li class="col-sm-2"><span class="getPrice">100</span>元</li>
							<li class="col-sm-2"><span class="getMath">1</span></li>
							<li class="col-sm-2"><span class="getSum">100</span></li>
						</ul>
						<div class="clearfix"></div>
					</div> -->
					<?php
							}
						}
					?>
					<div class="Cfrim-total">
						<p>共<span class="getTotalMath" id="getTotalMath"></span>項商品，總金額<span class="getTotalPrice" id="getTotalPrice"></span>元</p>
					</div>
				</div>
			</div>

			<div class="ProCfirmInfo-phone">
				<?php
					if(isset($_SESSION["products"])==true){
						foreach ($_SESSION["products"] as $psn => $PD_CT){
							// echo $PD_CT;
							$sql = "select * from surfequipped where prod_no=:prod_no";
							$ODcatch = $pdo->prepare($sql);
							$ODcatch->bindValue(":prod_no",$PD_CT["prod_no"]);
							$ODcatch->execute();
							$ODVL = $ODcatch->fetch();
							$SMmoney = (int)($ODVL["prod_price"]) * (int)($PD_CT["quantity"]);
					?>
				<div class="ProCfirmInfo-phone-box">
					<ul>
						<li><span class="li-tit-item">商品明細</span><span class="getProName li-get-item getProName_phone"><?php echo $ODVL['prod_name'];?></span></li>
						<li><span class="li-tit-item">金額</span><span class="getPrice li-get-item getPrice_phone"><?php echo $ODVL['prod_price'];?></span></li>
						<li><span class="li-tit-item">數量</span><span class="getMath li-get-item getMath_phone"><?php echo $PD_CT['quantity'];?></span></li>
						<li><span class="li-tit-item">小計</span><span class="getSum li-get-item getSum_phone"><?php echo $SMmoney;?></span></li>
					</ul>
				</div>
				<?php
						}	
					}
				?>
			</div>
			
			<div class="big-title">
				<h3>寄送資訊</h3>
			</div>

			<div class="OCfirmInfo"><!--O=Order,Cf=comfirm-->
				<div class="OCfirmInfo-box">
					<ul>
						<li><span class="OC-li-item">收件者</span><span class="get-li-item CSget" id="CSget"></span></li>
						<li><span class="OC-li-item">連絡電話</span><span class="get-li-item Telget" id="Telget"></span></li>
						<li><span class="OC-li-item">E-mail</span><span class="get-li-item Emailget" id="Emailget"></span></li>
						<li><span class="OC-li-item">收貨地址</span><span class="get-li-item Adressget" id="Adressget"></span></li>
						<li><span class="OC-li-item">匯款帳號</span><span class="get-li-item Atm-account" id="Atm-account"></span></li>
					</ul>
				</div>
			</div>
		</div>
		

		<div class="PvNext-page-btn2"><!-- Pv = previous上一頁-->
			<div class="previous-page2 arikicommon_btn" id="previous-page2"><span>上一頁</span></div>
			<div class="next-page2 arikicommon_important_btn" id="next-page2"><span>確認結帳無誤</span></div>
			<div class="next-page2 arikicommon_important_btn" id="next-page_phone"><span>確認結帳無誤</span></div>
			<div class="clearfix"></div>
		</div>
	</div><!--order-confirm_30-->

	<div class="order-over_31">
		<div class="flow">
			<div class="flow-box">
				<div class="flow-item"></div>
				<div class="flow-item"></div>	
				<div class="flow-item"></div>
				<div class="flow-item"></div>
			</div>
			<div class="flow-h3">
				<h3>購物明細</h3>
				<h3>輸入資料</h3>
				<h3>訂單確認</h3>
				<h3>結帳完成</h3>
			</div>
		</div>

		<div class="Order-box">
			<div class="order-fin">
				<h2>恭喜你完成交易，請於7日前完成匯款</h2>
			</div>
			
			<div class="big-title">
				<h2>匯款資訊</h2>
			</div>
			
			<div class="give-money">
				<div class="giveInfo">
					<ul>
						<li><h3 class="give-sp-item1">戶名</h3><span class="give-sp-item2">武二参</span></li>
						<li><h3 class="give-sp-item1">銀行代號</h3><span class="give-sp-item2">700-郵局</span></li>
						<li><h3 class="give-sp-item1">分行名稱</h3><span class="give-sp-item2">3重貧民窟</span></li>
						<li><h3 class="give-sp-item1">帳號</h3><span class="give-sp-item2">0123456789</span></li>
					</ul>
				</div>
			</div>
			
			<div class="big-title">
				<h2>購物明細</h2>
			</div>
			
			<div class="Odover-pc">
				<div class="Odover-pc-box">
					<div class="Odover-title">
						<ul>
							<li class="col-sm-6"><h3>商品明細</h3></li>
							<li class="col-sm-2"><h3>金額</h3></li>
							<li class="col-sm-2"><h3>數量</h3></li>
							<li class="col-sm-2"><h3>小計</h3></li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<?php
						if(isset($_SESSION["products"])==true){
							foreach ($_SESSION["products"] as $psn => $PD_CT){
								$sql = "select * from surfequipped where prod_no=:prod_no";
								$ODcatch = $pdo->prepare($sql);
								$ODcatch->bindValue(":prod_no",$PD_CT["prod_no"]);
								$ODcatch->execute();
								$ODVL = $ODcatch->fetch();
								$SMmoney = (int)($ODVL["prod_price"]) * (int)($PD_CT["quantity"]);
					?>
					<div class="Odover-pro">
						<ul>
							<li class="col-sm-6"><span class="getOdoName PC_getOdoName"><?php echo $ODVL["prod_name"];?></span></li>
							<li class="col-sm-2"><span class="getOdoPrice PC_getOdoPrice"><?php echo $ODVL["prod_price"];?></span>元</li>
							<li class="col-sm-2"><span class="getOdoMath PC_getOdoMath">1</span></li>
							<li class="col-sm-2"><span class="getOdoSum PC_getOdoSum"><?php echo $SMmoney;?></span></li>
						</ul>
						<div class="clearfix"></div>
					</div>

					<?php
							}
						}
					?>
					<!-- <div class="Odover-pro">
						<ul>
							<li class="col-sm-6"><span class="getOdoName">AKUR海灘褲(藍)</span></li>
							<li class="col-sm-2"><span class="getOdoPricee">100</span>元</li>
							<li class="col-sm-2"><span class="getOdoMath">1</span></li>
							<li class="col-sm-2"><span class="getOdoSum">100</span></li>
						</ul>
						<div class="clearfix"></div>
					</div> -->
			
					<div class="Odover-total">
						<p>共<span class="getOdoTotalMath" id="PC_finish_Math"></span>項商品，總金額<span class="getOdoTotalPrice" id="PC_finish_Price"></span>元</p>
					</div>
				</div>
			</div>
			
			<div class="Odover-phone">
				<?php
						if(isset($_SESSION["products"])==true){
							foreach ($_SESSION["products"] as $psn => $PD_CT){
								$sql = "select * from surfequipped where prod_no=:prod_no";
								$ODcatch = $pdo->prepare($sql);
								$ODcatch->bindValue(":prod_no",$PD_CT["prod_no"]);
								$ODcatch->execute();
								$ODVL = $ODcatch->fetch();
								$SMmoney = (int)($ODVL["prod_price"]) * (int)($PD_CT["quantity"]);
					?>
				<div class="Odover-phone-box">
					<ul>
						<li><span class="li-tit-item"><h3>商品明細</h3></span><span class="getOdoName li-get-item"><?php echo $ODVL["prod_name"];?></span></li>
						<li><span class="li-tit-item"><h3>金額</h3></span><span class="getOdoPrice li-get-item"><?php echo $ODVL["prod_price"];?></span></li>
						<li><span class="li-tit-item"><h3>數量</h3></span><span class="getOdoMath li-get-item"><?php echo $PD_CT["quantity"];?></span></li>
						<li><span class="li-tit-item"><h3>小計</h3></span><span class="getOdoSum li-get-item"><?php echo $SMmoney;?></span></li>
					</ul>
				</div>
				<?php
						}
					}
				?>
				<!-- <div class="Odover-phone-box">
					<ul>
						<li><span class="li-tit-item"><h3>商品明細</h3></span><span class="getOdoName li-get-item">AKUR海灘褲(藍)</span></li>
						<li><span class="li-tit-item"><h3>金額</h3></span><span class="getOdoPrice li-get-item">100</span>元</li>
						<li><span class="li-tit-item"><h3>數量</h3></span><span class="getOdoMath li-get-item">1</span></li>
						<li><span class="li-tit-item"><h3>小計</h3></span><span class="getOdoSum li-get-item">100</span></li>
					</ul>
				</div> -->
				
				<div class="Odover-phone-total">
					<div class="Odover-total">
						<p>共<span class="getOdoTotalMath " id="getOdoTotalMath_phone"></span>項商品，總金額<span class="getOdoTotalPrice" id="getOdoTotalPrice_phone"></span>元</p>
					</div>
				</div>
			</div>
			
			<div class="big-title">
				<h2>注意事項</h2>
			</div>
			
			<div class="Odover-notice">
				<div class="Odo-notice">
					<ul>
						<li>請於七日內匯款至指定銀行帳戶，若逾期將視同方放棄交易</li>
						<li>買家匯款完成才會出貨。</li>
						<li>如未到7日，才能進行取消交易。</li>
						<li>匯款後，無法進行取消交易。</li>
					</ul>
				</div>
			</div>
			
			
		</div>
		<div class="Odover-PM-btn">
			<div class="btn-box">
				<div class="Odover-Product-btn arikicommon_btn"id="Odover-Product-btn"><a href="surfshop.php">繼續購買</a></div>
				<div class="Odover-Member-btn arikicommon_btn" id="Odover-Member-btn"><a href="7member_update.php">會員管理</a></div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!--order-over_31-->
	
	<?php
		}catch(PDOException $ex){
			echo "錯誤行號 : ", $ex->getLine(), "<br>";
            echo "錯誤訊息 : ", $ex->getMessage(), "<br>";
		}
	}
	?>
<!--(bake module/footer.html)--><?php require_once('publicpage/footer.php'); ?>
</body>
</html>