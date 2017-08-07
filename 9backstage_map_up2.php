<?php 
ob_start();
session_start();
try{
  require_once("connectBooks.php");
  $post_number = $_REQUEST["post_number"];
  // DELETE FROM "表格名" WHERE "條件";
  $sql = "DELETE FROM `map_post` WHERE `post_number`=:post_number";
  $pdostatement=$pdo->prepare($sql);
  $pdostatement->bindValue(':post_number',$post_number);
  $pdostatement->execute(); 

}catch(PDOExpection $e){
  echo $e->getLine();
  echo $e->getMessage();
}

?>