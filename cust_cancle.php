<?php
    ob_start();
    session_start();
    require_once("connectBooks.php");
    $sql = "update customize_order set customize_usermessage = :msg,
            customize_order_status = 4 
            where customize_orderNo=:orderNo";
    $atm = $pdo->prepare($sql);
    $atm->bindValue(':orderNo',$_REQUEST["ODNO"]);
    $atm->bindValue(':msg',$_REQUEST["strMsg"]);
    $atm->execute();
    echo "已申請，請等待";
?>