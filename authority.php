<?php
session_start();
ob_start();

require_once("connectBooks.php");

	try {
			$sqlb = "UPDATE `member` SET `suspension`=:suspension WHERE `member_no` = :member_no";
			$suspension=($_REQUEST["suspension"]==1)? "2" :"1";
		  	$updatePsw = $pdo->prepare( $sqlb);
		  	$updatePsw ->bindValue(':member_no',$_REQUEST["member_no"]);
		  	$updatePsw ->bindValue(":suspension" , $suspension);

		 	$updatePsw ->execute();
		 	header("Location:9backstage_member.php");
  		} catch (PDOException $e) {
			echo "錯誤行號 : ", $e->getLine(), "<br>";
			echo "錯誤訊息 : ", $e->getMessage(), "<br>";
		}


 ?>    