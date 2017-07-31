<?php 
ob_start();
session_start();
$wave_number = $_SESSION["map_wave"]["wave_number"];
$textarea = $_REQUEST["feed"];
$member_no = 3;
$datetime = date("Y-m-d H:i:s"); 
$name = "123";
$mugshot = "123.jpg";
$post_number;
$reply_time = date("Y-m-d H:i:s"); 

if(($title!=null)&&($textarea!=null)){      //判斷標題跟欄位user都有輸入

	require_once("connectBooks.php");
	$sql = "insert into map_reply values(null,$textarea,$member_no,$datetime,$name,$mugshot,$post_number)";
	$into = $pdo->exec($sql);
	header("location:map_forum.php");

}else{
  echo "GG";
}


?>