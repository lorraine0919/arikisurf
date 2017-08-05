<?php 
ob_start();
session_start();
$replyBang_reason = $_REQUEST["report"];
$result = 1;
$member_no=$_SESSION["member"]["member_no"];
$post_number = $_REQUEST["post_number"];
$reply_number = $_REQUEST["reply_number"];

try{
	require_once("connectBooks.php");  
	$sql="insert into map_replybang 
	      values('$replyBang_reason',$result,$member_no,$post_number,$reply_number)";

	$pdo->exec($sql);	
}catch(PDOExpection $e){
	echo $e->getLine();
	echo $e->getMessage();
}

?>