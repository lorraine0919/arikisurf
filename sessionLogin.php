<?php
	ob_start();
	session_start();

	try{
		require_once("connectBooks.php");
		$sql = "select * from member where account = :memId and psw = :memPsw";
		$member = $pdo->prepare($sql);
		$member -> bindValue(":memId",$_REQUEST["memId2"]);
		$member -> bindValue(":memPsw",$_REQUEST["memPsw2"]);
		$member -> execute();
			
		//登入成功，將登入者資訊寫入session
	       
		if( $member->rowCount() !=0 ){
		    $memRow = $member->fetch(PDO::FETCH_ASSOC);
		    $_SESSION["account"] = $memRow["account"];
	        $_SESSION["member_no"] = $memRow["member_no"];
	        $_SESSION["psw"] = $memRow["psw"];
			echo 1;
		}else{
			echo 2;
		}
	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
?>