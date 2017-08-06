<?php 
try{
	

		
			require_once('connectBooks.php');


	if (isset($_REQUEST['no'])){

		$sql = "update `manager` set `status`=:status
					where `manager_no`=:cno";

			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->bindValue(":cno" , $_REQUEST['no']);
			$pdostatement->bindValue(":status" , $_REQUEST['status']);
			$pdostatement->execute();
			echo $_REQUEST['status'];

			}
	if(isset($_REQUEST['Dno'])){

				$sql = "DELETE FROM `manager` 
					where `manager_no`=:Dno";

				$pdostatement = $pdo->prepare( $sql );
				$pdostatement->bindValue(":Dno" , $_REQUEST['Dno']);
				$pdostatement->execute();

	}
	if(isset($_REQUEST['new_guardsR'])){

				$sql = "INSERT INTO  `manager`(`manager_ac`,`manager_ps`,`status`) 
					VALUES (:new_guardsR,:new_guardsG,'1')";

				$pdostatement = $pdo->prepare( $sql );
				$pdostatement->bindValue(":new_guardsR" , $_REQUEST['new_guardsR']);
				$pdostatement->bindValue(":new_guardsG" , $_REQUEST['new_guardsG']);
				$pdostatement->execute();

	}		
}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

 ?>
