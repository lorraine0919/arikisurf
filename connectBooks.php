<?php  
$dsn = "mysql:host=localhost;port=3306;dbname=bd101g2;charset=utf8";
$user = "bd101g2";
$password = "bd101g2";
$options = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION);
$pdo = new PDO($dsn, $user, $password, $options);
?>