<?php
    ob_start();
    session_start();

     try{
        require_once("connectBooks.php");
        $sql = "select * from surfequipped where prod_no=:prod_no";
        $update = $pdo->prepare($sql);
        $update ->bindValue(":prod_no",$_REQUEST["Pamount"]);
        $update->execute();
        if($update){
            echo "";
        }else{
            $updateRow = $update->fetch();
        }
     }catch(PDOException $ex){
         echo $ex->getMessage();
     }
    
    
    
    
    
    
    
    
    
    
    
    
    // session_start();

	// $psn = $_REQUEST["psn"];

	// if( isset($_REQUEST["btnUpdate"]) == true){
	// 	$_SESSION["products"][$psn]["quantity"] = $_REQUEST["quantity"];
	// }else{
	// 	unset($_SESSION["products"][$psn]);
	// }

	// header("location:shop_show.php");
?>