<?php 
ob_start();
session_start();
require_once("connectBooks.php");
$star_score = $_REQUEST["star_score"];
$post_number = $_REQUEST["post_number"];
echo $post_number;

try{
	$sql = "update map_post 
            set star_score=$star_score
            where post_number=$post_number";
	$pdo->exec($sql);

}catch(PDOExpection $e){
	echo $e->getLine();
	echo $e->getMessage();
}
?>