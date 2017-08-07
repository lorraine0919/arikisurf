<?php 
ob_start();
session_start();
$replyBang_reason = $_REQUEST["report"];
$result = 2;
$member_no=$_SESSION["member_no"];
$post_number = $_REQUEST["post_number"];
$reply_number = $_REQUEST["reply_number"];

try{
	require_once("connectBooks.php");  
	$sql="insert into map_replybang 
	      values('$replyBang_reason',$result,$member_no,$post_number,$reply_number)";

	$pdo->exec($sql);	

	$sql="update map_reply
	      set reply_state=2
	      where reply_number=:reply_number";
	$go = $pdo->prepare($sql);
    $go->bindValue(":reply_number",$reply_number);
    $go->execute();
}catch(PDOExpection $e){
	echo $e->getLine();
	echo $e->getMessage();
}

?>