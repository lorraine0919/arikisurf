<?php
    require_once("connectBooks.php");
    $sql3 = "select surfequipped_order.surfequipped_orderNo,surfequipped_orderdetailNo,prod_name,prod_price,surfequipped_qty,prod_img from surfequipped_orderdetail
             join surfequipped_order, surfequipped,member
             where surfequipped_orderdetail.surfequipped_orderNo = :orderNo and
					surfequipped_order.surfequipped_orderNo = :orderNo and
                   surfequipped.prod_no = surfequipped_orderdetail.prod_no and
                   surfequipped_order.member_no = member.member_no and
                   member.member_no = :memberNo
             order by surfequipped_orderNo,surfequipped_orderdetailNo";
    $orderdetail = $pdo->prepare($sql3);
    $orderdetail->bindvalue(":orderNo",$_REQUEST["FT_no"]);
    $orderdetail->bindvalue(":memberNo",$_REQUEST["memNo"]);
    $orderdetail->execute();
    $count=0;
    $userallorder=array();
    $order_FTdetail = $orderdetail->fetchAll(PDO::FETCH_ASSOC);
    // print_r($order_FTdetail);

    $jsonStr = json_encode($order_FTdetail);
    echo $jsonStr,'|';

    // echo "json字串:",$jsonStr,"<br>";

    // {
    //     '訂單1':{
    //         '細項1':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10',

    //         },
    //         '細項2':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //         '細項3':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //     },
    //     '訂單2':{
    //         '細項1':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //         '細項2':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //         '細項3':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //     },
    //     '訂單3':{
    //         '細項1':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //         '細項2':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //         '細項3':{
    //             '商品名稱':'腳繩',
    //             '商品價格':'500',
    //             '數量':'10'
    //         },
    //     },
    // }


    // echo $order_FTdetail["surfequipped_orderdetailNo"],",";  //1
    // echo $order_FTdetail["prod_name"],",";  //2
    // echo $order_FTdetail["prod_price"],","; //3
    // echo $order_FTdetail["surfequipped_qty"],",";  //4
    // echo $order_FTdetail["prod_img"],",";  //5


    $sql4 = "select * from surfequipped_order
             join member
             where surfequipped_order.member_no = member.member_no and
                   surfequipped_order.surfequipped_orderNo = :orderNo";
    $orderdetail2 = $pdo->prepare($sql4);
    $orderdetail2->bindvalue(":orderNo",$_REQUEST["FT_name"]);
    $orderdetail2->execute();
    $OD_name = $orderdetail2->fetch();
    echo $OD_name["sufequipped_receiver"],"|";
    echo $OD_name["sufequipped_tel"],"|";
    echo $OD_name["sufequipped_email"],"|";
    echo $OD_name["sufequipped_adress"],"|";
    echo $OD_name["atm_acount"],"|";

    echo $OD_name["surfequipped_orderNo"],"|";
    echo $OD_name["order_date"],"|";
    echo $OD_name["order_status"],"|";
    echo $OD_name["order_total"];

    
?>