<?php
    require_once("connectBooks.php");
    if($_REQUEST["status"]==1){
        $sql = "update customize_order set customize_order_status =2 where customize_orderNo=:orderNo";
        $atm = $pdo->prepare($sql);
        $atm->bindValue(':orderNo',$_REQUEST["odNo"]);
        $atm->execute();
        echo "已改成「已匯款」";
    }else if($_REQUEST["status"]==2){
        $sql = "update customize_order set customize_order_status =3 where customize_orderNo=:orderNo";
        $atm = $pdo->prepare($sql);
        $atm->bindValue(':orderNo',$_REQUEST["odNo"]);
        $atm->execute();

        echo "已改成「已出貨」";
    }
    
?>