<?php 
try{
	require_once('connect_jerry.php');
	
	$sql = "update `customize_model` set `customize_model_sellornot`=:modelsellornot
	      where `customize_model`.modelNo=:modelNo";
	$pdostatement = $pdo->prepare( $sql );
	$pdostatement->bindValue(":modelsellornot" , $_REQUEST['modelsellornot']);
	$pdostatement->bindValue(":modelNo" , (int)$_REQUEST['modelNo']);
	$pdostatement->execute();
	header('9backstage_customize.php');
	
}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}
 ?>


<!-- UPDATE  `bd101g2`.`customize_model` SET  `customize_model_sellornot` =  '2' WHERE  `customize_model`.`modelNo` =1; -->