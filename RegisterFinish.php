<?php
	//記得要使用session之前，要先啟用serssion
	//啟用輸出緩衝區
	ob_start();
	//啟用session
	session_start();

	try{
		require_once("connectBooks.php");
		// $sql = "insert into member values('7','Biri','Biri53','柏林','1','天堂路','0933385473','fran0115@yahoo.com.tw','../images/7member/KimTaeHee.jpg	','1','2017-08-01 10:54:10','2017-08-01 10:54:10')";
		// $sql = "insert into member(account,psw,name,gender,city,area,address,phone,email,mugshot) values('Biri','Biri53','柏林','1','新北市','中和區',天堂路','0933385473','fran0115@yahoo.com.tw','../images/7member/KimTaeHee.jpg')";
		$sql = "insert into member(account,psw,name,gender,city,area,address,phone,email,mugshot) values(:account,:psw,:name,:gender,:city,:area,:address,:phone,:email)";

		$member = $pdo->prepare($sql);
		$member -> bindValue(":account",$_SESSION["memId26"]);
		$member -> bindValue(":psw",$_SESSION["memPsw26"]);
		$member -> bindValue(":name",$_REQUEST["name26"]);
		$member -> bindValue(":gender",$_REQUEST["sex"]);
		$member -> bindValue(":city",$_REQUEST["slct1"]);
		$member -> bindValue(":area",$_REQUEST["slct2"]);
		$member -> bindValue(":address",$_REQUEST["addr26"]);
		$member -> bindValue(":phone",$_REQUEST["tel26"]);
		$member -> bindValue(":email",$_REQUEST["mail26"]);
		$member -> execute();
		echo "新增成功";	

	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
?>