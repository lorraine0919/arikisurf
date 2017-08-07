<?php 
ob_start();
session_start();
$wave_number = $_REQUEST["wave_number"];
$wave_title	= $_REQUEST["wave_title"];
$wave_p = $_REQUEST["wave_p"];
$wave_info = $_REQUEST["wave_info"];
require_once('connectBooks.php');

try{  //更改9浪點資訊     
      $sql = "update map_wave
              set wave_title=:wave_title,
                  wave_p=:wave_p,
                  wave_info=:wave_info
              where wave_number=:wave_number";
      $pdostatement=$pdo->prepare($sql);
      $pdostatement->bindValue(':wave_title',$wave_title);
      $pdostatement->bindValue(':wave_p',$wave_p);
      $pdostatement->bindValue(':wave_info',$wave_info);
      $pdostatement->bindValue(':wave_number',$wave_number);
      $pdostatement->execute();
             

}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

?>