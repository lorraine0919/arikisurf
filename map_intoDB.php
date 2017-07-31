<?php 
ob_start();
session_start();
$title = $_REQUEST["title"];
$textarea = $_REQUEST["textarea"];
// echo $textarea;
$datetime = date ("Y-m-d"); 
$wave_number = $_SESSION["map_wave"]["wave_number"];

require_once("connectBooks.php");
$sql = "insert into map_post values(null,$wave_number,'abc.jpg','$datetime','$title','$textarea',1,0,1,1)";
// echo $sql;
$into = $pdo->exec($sql);
header("location:map_forum.php");
?>