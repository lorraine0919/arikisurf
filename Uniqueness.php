<?php
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