<?php 
ob_start();
session_start();
try{
	require_once("connectBooks.php");
	$post_number = $_REQUEST["post_number"];
    $postBang_reason = $_REQUEST["report"];
    $reason=2;
    $member_no=$_SESSION["member_no"];
	$sql="insert into map_postbang values(null,'$postBang_reason',$reason,$member_no,$post_number)";
    if($postBang_reason!=""){
    	$pdo->exec($sql);
    }

    $sql2="update map_post
           set    post_state=2
           where  post_number=$post_number";
    $pdo->exec($sql2);       

}catch(PDOExpection $e){
	echo $e->getLine();
	echo $e->getMessage();
}

?>