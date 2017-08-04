<?php 
ob_start();
session_start();
try{
	require_once("connectBooks.php");
	$post_number = $_REQUEST["post_number"];
    $postBang_reason = $_REQUEST["report"];
    $member_no=1;
	$sql="insert into map_postbang values(null,'$postBang_reason',2,$member_no,$post_number)";
    if($postBang_reason!=""){
    	$pdo->exec($sql);
    }

}catch(PDOExpection $e){
	echo $e->getLine();
	echo $e->getMessage();
}

?>