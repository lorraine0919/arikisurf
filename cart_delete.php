<?php
    ob_start();
    session_start();
    

    $psn = $_REQUEST["Prod_Num"];
     echo $psn;
    unset($_SESSION["products"][$psn]);
?>