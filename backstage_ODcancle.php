<?php
    ob_start();
    session_start();
    require_once("connectBooks.php");
    $sql = "update customize_order set
            customize_order_status = 5 
            where customize_orderNo=:orderNo";
    $atm = $pdo->prepare($sql);
    $atm->bindValue(':orderNo',$_REQUEST["ODNo"]);
    $atm->execute();
    echo "已取消此筆訂單";
?>