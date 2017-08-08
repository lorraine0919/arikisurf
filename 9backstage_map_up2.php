<?php 
ob_start();
session_start();
$post_number = $_REQUEST["post_number"];
try{
  require_once("connectBooks.php");
  $sql = "DELETE FROM `map_post` WHERE `post_number`=:post_number";
  $pdostatement=$pdo->prepare($sql);
  $pdostatement->bindValue(':post_number',$post_number);
  $pdostatement->execute(); 

}catch(PDOExpection $e){
  echo $e->getLine();
  echo $e->getMessage();
}

?>