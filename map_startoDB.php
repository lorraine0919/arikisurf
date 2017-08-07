<?php 
ob_start();
session_start();
require_once("connectBooks.php");
$post_number = $_REQUEST["post_number"];

$member_no=$_SESSION["member_no"];
$sql = "update map_star 
        set star_score=$star_score
        where member_no=$member_no";
$pdo->exec($sql);
?>