<?php 
require_once('connectBooks.php');

try{  //更改9浪點資訊     
      $sql = "update `map_wave` set `prod_sold`=:changevalue
            where `wave_number`=:wave_number";
      $pdostatement = $pdo->prepare( $sql );
      $pdostatement->bindValue(":changevalue" , $_REQUEST['prod_sold']);
      $pdostatement->bindValue(":wave_number" , $_REQUEST['wave_number']);
      $pdostatement->execute();
      header('Location:9backstage_map.php');     

}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

 ?>