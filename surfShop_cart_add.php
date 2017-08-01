<?php
ob_start();
session_start();
$psn = $_REQUEST["prod_no"];
$_SESSION["products"][$psn]["prod_name"]=$_REQUEST["prod_name"];
$_SESSION["products"][$psn]["prod_price"]=$_REQUEST["prod_price"];
$_SESSION["products"][$psn]["prod_img"]=$_REQUEST["prod_img"];
$_SESSION["products"][$psn]["quantity"]=1;
header("location:cart_show.php");
?>