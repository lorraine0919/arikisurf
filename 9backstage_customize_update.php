<?php 
try{
	
		function intodb($changetable,$changecolumn,$changeno,$changevalue,$changenoname){
			require_once('connect_jerry.php');
			$sql = "update `$changetable` set `$changecolumn`=:changevalue
			      where `$changenoname`=:changeno";
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->bindValue(":changevalue" , $changevalue);
			$pdostatement->bindValue(":changeno" , (int)$changeno);
			$pdostatement->execute();
			header('Location:9backstage_customize.php');			
		}
		if($_REQUEST['customize_model_sellornot']){

			intodb('customize_model','customize_model_sellornot',$_REQUEST['modelNo'],$_REQUEST['customize_model_sellornot'],'modelNo');

		}else if($_REQUEST['customize_color_sellornot']){

			intodb('customize_color','customize_color_sellornot',$_REQUEST['colorNo'],$_REQUEST['customize_color_sellornot'],'colorNo');

		}else if($_REQUEST['officialimg_sellornot']){

			intodb('customize_officialimg','officialimg_sellornot',$_REQUEST['officialimgNo'],$_REQUEST['officialimg_sellornot'],'officialimgNo');

		}
}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}
 ?>


<!-- UPDATE  `bd101g2`.`customize_model` SET  `customize_model_sellornot` =  '2' WHERE  `customize_model`.`modelNo` =1; -->