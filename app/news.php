<?php
try{
  require_once("connectBD101g2.php");
  $sql = "select * from news";
  $pdo = new PDO( $dsn, $user, $password, $options); 
  $member = $pdo->prepare( $sql );
  $member->bindValue(":newsno", $_REQUEST["newsno"]);
  $member->bindValue(":newstitle", $_REQUEST["newstitle"]);
  $member->bindValue(":newsdate", $_REQUEST["newsdate"]);
  $member->bindValue(":newsimg", $_REQUEST["newsimg"]);
  $member->bindValue(":newstxt", $_REQUEST["newstxt"]);
  $member->execute();
  // if( $member->rowCount() == 0 ){
  //   echo "此帳號可使用"; //可用
  // }else{
  //   echo "此帳號已有人使用";//不可用 
  // }	
}catch(PDOException $e){
  echo $e->getMessage();
}
?>