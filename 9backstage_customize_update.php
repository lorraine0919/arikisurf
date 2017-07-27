<?php 
try{
	
		function intodb($changetable,$changecolumn,$changeno,$changevalue,$changenoname){
			require_once('connectBooks.php');
			$sql = "update `$changetable` set `$changecolumn`=:changevalue
			      where `$changenoname`=:changeno";
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->bindValue(":changevalue" , $changevalue);
			$pdostatement->bindValue(":changeno" , (int)$changeno);
			$pdostatement->execute();
			header('Location:9backstage_customize.php');			
		}
		if($_REQUEST['style']=='model'){

			intodb('customize_model','customize_model_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'modelNo');

		}else if($_REQUEST['style']=='color'){

			intodb('customize_color','customize_color_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'colorNo');

		}else if($_REQUEST['style']=='officialimg'){

			intodb('customize_officialimg','officialimg_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'officialimgNo');

		}else if($_REQUEST['style']=='material'){

			intodb('customize_material','customize_material_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'materialNo');

		}
}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}
 ?>


<!-- UPDATE  `bd101g2`.`customize_model` SET  `customize_model_sellornot` =  '2' WHERE  `customize_model`.`modelNo` =1; -->