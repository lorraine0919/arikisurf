<?php
	//記得要使用session之前，要先啟用serssion
	//啟用輸出緩衝區
	ob_start();
	//啟用session
	session_start();
	// $_SESSION["memId26"] = $_REQUEST["memId26"];
 	//$_SESSION["memPsw26"] = $_REQUEST["memPsw26"];

	try{

		require_once("connectBooks.php");
		$sql = "select * from member where account = :memId";
		$member = $pdo->prepare($sql);
		$member -> bindValue(":memId",$_REQUEST["accountcheck"]);
		$member -> execute();
	       
		if( $member->rowCount() !=0 ){
			echo 1;
		}

	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
?>