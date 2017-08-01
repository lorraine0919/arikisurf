<?php 
	try{
		require_once('connectBooks.php');
		/*步驟一倒出浪板價錢*/
		if(isset($_REQUEST["boardindex"])){
			$sql='select * from customize_model where modelNo = :index';
			$pdostatement=$pdo->prepare($sql);
			$pdostatement->bindValue(':index',$_REQUEST["boardindex"]);
			$pdostatement->execute();
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['customize_model_price'];	

		}
		if(isset($_REQUEST["customermaterial"])){
			$sql='select * from customize_material where materialNo = :index';
			$pdostatement=$pdo->prepare($sql);
			$pdostatement->bindValue(':index',$_REQUEST["customermaterial"]);
			$pdostatement->execute();
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);		
			echo $pdorow['customize_material_price'];

		}
		if(isset($_REQUEST["clickpattern"])){
			/*官方圖片*/
			$sql='select * from system_parameter where systemparameter_no = 2';
			$pdostatement=$pdo->query($sql);
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['systemparameter_value'];

		}
		if(isset($_REQUEST["clickupload"])){
			/*上傳圖片*/
			$sql='select * from system_parameter where systemparameter_no = 1';
			$pdostatement=$pdo->query($sql);
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['systemparameter_value'];		

		}
		if(isset($_REQUEST["Epoxyprice"])){
			/*預設材質epoxy*/
			$sql='select * from customize_material where materialNo = 1';
			$pdostatement=$pdo->query($sql);
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['customize_material_price'];			
		}
			


	}catch(PDOException $e){
		echo $e->getLine();
		echo $e->getMessage();
	}


 ?>		