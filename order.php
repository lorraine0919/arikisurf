<?php 
ob_start();
session_start();
$wave_number = $_SESSION["map_wave"]["wave_number"];
     try{
	  require_once("connectBooks.php");
	  $sql = "select * from map_post where wave_number=$wave_number order by post_date DESC";
	  $orderDate = $pdo->query( $sql );

	  if($orderDate->rowCount()==0){
             echo"沒資料";
	  }else{
         $orderItem = $orderDate->fetchAll(PDO::FETCH_ASSOC);
         $jsonStr = json_encode($orderItem);     //送出json字串
         echo $jsonStr;
	  } 
	  
	}catch(PDOException $e){
	  echo $e->getMessage();
	}
?>