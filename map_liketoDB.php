<?php 
ob_start();
session_start();
require_once("connectBooks.php");
$post_number = $_REQUEST["post_number"];

$member_no=$_SESSION["member_no"];
$sql = "insert into map_like values($member_no,$post_number)";

$pdo->exec($sql);
?>