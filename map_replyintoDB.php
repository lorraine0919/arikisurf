<?php 
ob_start();
session_start();

$wave_number = $_SESSION["map_wave"]["wave_number"];
$post_number=$_REQUEST["post_number"];
$textarea = $_REQUEST["feed"];
$member_no = $_SESSION["member"]["member_no"];
$name = $_SESSION["member"]["name"];

$reply_time = date("Y-m-d H:i:s"); 

    require_once("connectBooks.php");
 	$sql = "insert into map_reply values(null,'$textarea',$member_no,'$name',$post_number,'$reply_time')";
 	$pdo->exec($sql);

	$sql2="select * from map_reply order by reply_time desc limit 1";
	$into = $pdo->query($sql2);
	$intoRow = $into->fetch(PDO::FETCH_ASSOC);
	$jsonStr = json_encode($intoRow);     //送出json字串
    echo $jsonStr;
	// header("location:map_forum_discussion.php");
?>