<?php
    ob_start();
    session_start();
    require_once("connectBooks.php");
    $sql = "update surfequipped_order set
            order_status = 5 
            where surfequipped_orderNo=:orderNo";
    $atm = $pdo->prepare($sql);
    $atm->bindValue(':orderNo',$_REQUEST["ODNo"]);
    $atm->execute();
    echo "已取消此筆訂單";
?>