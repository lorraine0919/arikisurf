<?php
	ob_start();
	session_start();

	try{
		require_once("connectBooks.php");
		$sql = "insert into member(member_no,account,psw,name,gender,city,area,address,phone,email,mugshot,suspension,join_time,renew_time) values(NULL,:account,:psw,:name,:gender,:city,:area,:address,:phone,:email,:mugshot,:suspension,:join_time,:renew_time)";

		$member = $pdo->prepare($sql);
		$member -> bindValue(":account",$_SESSION["account"]);
		$member -> bindValue(":psw",$_SESSION["psw"]);
		$member -> bindValue(":name",$_REQUEST["name"]);
		$member -> bindValue(":gender",$_REQUEST["gender"]);
		$member -> bindValue(":city",$_REQUEST["city"]);
		$member -> bindValue(":area",$_REQUEST["area"]);
		$member -> bindValue(":address",$_REQUEST["addr"]);
		$member -> bindValue(":phone",$_REQUEST["tel"]);
		$member -> bindValue(":email",$_REQUEST["mail"]);
		$member -> bindValue(":mugshot","images/7member/mugshots/KimTaeHee.jpg");
		$member -> bindValue(":suspension","1");
		$member -> bindValue(":join_time",'2017-08-05 15:54:10');
		$member -> bindValue(":renew_time",'2017-08-05 15:54:10');	
		$member -> execute();
		echo "新增成功";
		header("Refresh: 2; url=7member_register3.php");

	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
?>