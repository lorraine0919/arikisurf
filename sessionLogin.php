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
	    $memRow = $member->fetch(PDO::FETCH_ASSOC);

		if($memRow["suspension"]==2){
			echo 1;
		}elseif($member->rowCount() !=0 && $memRow["suspension"]==1){
			$_SESSION["member_no"] = $memRow["member_no"];
		    $_SESSION["account"] = $memRow["account"];
		    $_SESSION["psw"] = $memRow["psw"];
		    $_SESSION["mugshot"] = $memRow["mugshot"];
			echo 2;
		}else{
			echo 3;
		}
	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
?>