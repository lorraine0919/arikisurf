<?php
	//記得要使用session之前，要先啟用serssion
	//啟用輸出緩衝區
	ob_start();
	//啟用session
	session_start();

	try{
		require_once("connectBooks.php");
		$sql = "insert into member values('7','Biri','Biri53','柏林','1','天堂路','0933385473','fran0115@yahoo.com.tw','../images/7member/KimTaeHee.jpg	','1','2017-08-01 10:54:10','2017-08-01 10:54:10')";
		$member = $pdo->prepare($sql);
		$member -> bindValue(":memId",$_REQUEST["memId"]);
		$member -> bindValue(":memPsw",$_REQUEST["memPsw"]);
		$member -> execute();
			
		//登入成功，將登入者資訊寫入session
	       
		// if( $member->rowCount() !=0 ){
		//     $memRow = $member->fetch(PDO::FETCH_ASSOC);
	 //        $_SESSION["account"] = $memRow["account"];
	 //        $_SESSION["psw"] = $memRow["psw"];
		// 	echo 1;
		// }else{
		// 	echo 2;
		// }
	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
?>