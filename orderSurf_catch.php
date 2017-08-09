<?php
    ob_start();
    session_start();
    require_once("connectBooks.php");
    $sql = "select surfequipped_order.surfequipped_orderNo,surfequipped_orderdetailNo,prod_name,prod_price,surfequipped_qty,prod_img from surfequipped_orderdetail
             join surfequipped_order, surfequipped,member
             where surfequipped_orderdetail.surfequipped_orderNo = :orderNo and
					surfequipped_order.surfequipped_orderNo = :orderNo and
                   surfequipped.prod_no = surfequipped_orderdetail.prod_no and
                   surfequipped_order.member_no = member.member_no and
                   member.member_no = :memberNo
             order by surfequipped_orderNo,surfequipped_orderdetailNo";
    $orderdetail = $pdo->prepare($sql);
    $orderdetail->bindvalue(":orderNo",$_REQUEST["FT_no"]);
    $orderdetail->bindvalue(":memberNo",$_REQUEST["member_no"]);
    $orderdetail->execute();
    $order_FTdetail = $orderdetail->fetchAll();
    
    $jsonStr = json_encode($order_FTdetail);
    echo $jsonStr;

?>