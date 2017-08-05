<?php 
ob_start();
session_start();
require_once("connectBooks.php");
$_SESSION["map_wave"]["wave_number"] = $_REQUEST["wave_number"];

$_SESSION["member"]["member_no"] = 3;

$sql = "select name
        from member
        where member_no = :member_no";

$name = $pdo->prepare($sql);
$name->bindValue(":member_no",$_SESSION["member"]["member_no"]);
$name->execute();
$nameRow = $name->fetch(PDO::FETCH_ASSOC);
$_SESSION["member"]["name"] = $nameRow["name"];
?>


<?php 
header("location:map_forum.php");
?>