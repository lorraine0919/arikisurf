<?php 
	try{
		require_once('connectBooks.php');
		$sql='select * from customize_model where modelNo = :index';
		$pdostatement=$pdo->prepare($sql);
		$pdostatement->bindValue(':index',$_REQUEST["boardindex"]);
		$pdostatement->execute();
		$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
		echo $pdorow['customize_model_price'];		
	}catch(PDOException $e){
		echo $e->getLine();
		echo $e->getMessage();
	}


 ?>