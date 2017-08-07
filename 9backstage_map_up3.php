<?php 
ob_start();
session_start();
$reply_number = $_REQUEST["reply_number"];
try{
  require_once("connectBooks.php");  
  $sql = "DELETE FROM `map_reply` WHERE `reply_number`=:reply_number";
  $pdostatement=$pdo->prepare($sql);
  $pdostatement->bindValue(':reply_number',$reply_number);
  $pdostatement->execute(); 

  $sql2 = "DELETE FROM `map_replybang` WHERE `reply_number`=:reply_number";
  $pdostatement=$pdo->prepare($sql2);
  $pdostatement->bindValue(':reply_number',$reply_number);
  $pdostatement->execute(); 

}catch(PDOExpection $e){
  echo $e->getLine();
  echo $e->getMessage();
}

?>