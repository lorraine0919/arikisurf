<?php 
     try{
	  require_once("connectBooks.php");
	  $sql = "select * from map_post order by star_score DESC";
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