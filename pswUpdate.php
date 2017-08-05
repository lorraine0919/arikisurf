<?php

require_once("connectBooks.php");
$sqla = "select * from member where account = 'hebe520'";
$personRow = $pdo->query( $sqla);
$oldPsw = $personRow->fetch(PDO::FETCH_ASSOC);

if($_REQUEST["oldpsw21"] !== $oldPsw["psw"]){
	echo "密碼不正確";
}else if($_REQUEST["newpsw21"] == $_REQUEST["oldpsw21"]){
	echo "新密碼不能與舊密碼相同";
}else if($_REQUEST["newpsw21"] !== $_REQUEST["confirm21"]){
	echo "請再次確認新密碼";
}else{
	try {
		$sqlb = "UPDATE `member` SET `psw`=:psw WHERE `account` = 'hebe520'";
	  	$updateData = $pdo->prepare( $sqlb);
	  	$updateData ->bindValue(":psw" , $_REQUEST["confirm21"]);

	 	$updateData ->execute();
	 	  echo "密碼修改成功";
		  
		} catch (PDOException $e) {
		  echo "錯誤行號 : ", $e->getLine(), "<br>";
		  echo "錯誤訊息 : ", $e->getMessage(), "<br>";
		}
}

// header("Location:7member_update.php");
// header("Refresh: 5; url=7member_update.php");
//本來有問題，隔天來重新開機就好了，真奇妙!看來是快取搞得鬼!

 ?>    