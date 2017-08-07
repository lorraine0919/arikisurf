<?php
session_start();
ob_start();

require_once("connectBooks.php");

$sqla = "select * from member where account = :account";
$personRow = $pdo->prepare( $sqla);
$personRow->bindValue(':account',$_SESSION['account']);

$personRow->execute();
$oldPsw = $personRow->fetch(PDO::FETCH_ASSOC);

if($_REQUEST["oldpsw21"] != $oldPsw["psw"]){
	echo "密碼不正確";
}else if($_REQUEST["newpsw21"] == $_REQUEST["oldpsw21"]){
	echo "新密碼不能與舊密碼相同";
}else if($_REQUEST["newpsw21"] != $_REQUEST["confirm21"]){
	echo "請再次確認新密碼";
}else{
	try {
		$sqlb = "UPDATE `member` SET `psw`=:psw WHERE `account` = :account";
	  	$updatePsw = $pdo->prepare( $sqlb);
	  	$updatePsw ->bindValue(":psw" , $_REQUEST["confirm21"]);
	  	$updatePsw ->bindValue(':account',$_SESSION['account']);/*還要再bind一次，因為上面的是屬於$personRow的*/

	 	$updatePsw ->execute();
	 	  echo "密碼修改成功";
		  
		} catch (PDOException $e) {
		  echo "錯誤行號 : ", $e->getLine(), "<br>";
		  echo "錯誤訊息 : ", $e->getMessage(), "<br>";
		}
}

//本來有問題，隔天來重新開機就好了，真奇妙!看來是快取搞得鬼!

 ?>    