<?php
		require_once('connectBooks.php');
		$sql = 'select * from  manager where manager_ac=:formcontrolA and manager_ps=:formcontrolB ';
        $pdostatement=$pdo->prepare($sql);
        $pdostatement->bindValue(':formcontrolA',$_REQUEST['form-controlA']);
        $pdostatement->bindValue(':formcontrolB',$_REQUEST['form-controlB']);
     	$pdostatement->execute();
       
        if($pdoRow=$pdostatement->fetch(PDO::FETCH_ASSOC)){
               echo '1';
           }else{
           		echo '2';
           }	

        	





?>