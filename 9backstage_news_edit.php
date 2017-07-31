<?php 

 require_once("connectBD101g2.php");
 	echo $_REQUEST["newsno"];
  $sql = "select * from news where newsno=:newsno";
  $news = $pdo->prepare( $sql );
  $news->bindValue(":newsno",$_REQUEST["newsno"]);
  $news->execute();
  $newsRow2 = $news->fetch(PDO::FETCH_ASSOC);
 ?>