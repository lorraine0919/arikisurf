<?php
    ob_start();
    session_start();
    
    try{
        require_once("connectBooks.php");

        $member_no = $_SESSION["member_no"];
        $CSget = $_REQUEST['CSget'];
        $Telget = $_REQUEST['Telget'];
        $Emailget = $_REQUEST['Emailget'];
        $Adressget = $_REQUEST['Adressget'];
        $Atm_account = $_REQUEST['Atm_account'];
        $getTotal = $_REQUEST['getTotal'];

        $sql = "insert into surfequipped_order(member_no,sufequipped_receiver,sufequipped_tel,sufequipped_email,sufequipped_adress,atm_acount,order_total,order_date,order_status) 
                value(:member_no,:CSget,:Telget,:Emailget,:Adressget,:Atm_account,:getTotal,:order_date,1)";
        $pdostatement=$pdo->prepare($sql);
        $pdostatement->bindValue(":member_no",$member_no);
        $pdostatement->bindValue(":CSget",$CSget);
        $pdostatement->bindValue(":Telget",$Telget);
        $pdostatement->bindValue(":Emailget",$Emailget);
        $pdostatement->bindValue(":Adressget",$Adressget);
        $pdostatement->bindValue(":Atm_account",$Atm_account);
        $pdostatement->bindValue(":getTotal",$getTotal);
        $pdostatement->bindValue(":order_date",date('Y-m-d') );
        $pdostatement->execute();

        $sql = "select * from surfequipped_order where member_no = :member_no order by surfequipped_orderNo desc LIMIT 1";
        $time = $pdo->prepare($sql);
        $time->bindValue(":member_no",$_SESSION["member_no"]);
        $time->execute();
        $catchtime = $time->fetch(PDO::FETCH_ASSOC);
        $OD_NO = $catchtime["surfequipped_orderNo"];
        echo $OD_NO;
        for($i=0;$i<(int)($_REQUEST["Cfirm_pro"]);$i++){
            $sql = "insert into surfequipped_orderdetail value(:surfequipped_orderNo,:surfequipped_orderdetailNo,:prod_no,:surfequipped_qty)";
            $ODdetail = $pdo->prepare($sql);
            $ODdetail->bindValue(":surfequipped_orderNo",$OD_NO);
            $ODdetail->bindValue(":surfequipped_orderdetailNo",($i+1));
            $ODdetail->bindValue(":prod_no",$_REQUEST["step"][$i]);
            $ODdetail->bindValue(":surfequipped_qty",$_REQUEST["getMath_PC"][$i]);
            $ODdetail->execute();
        }
        // echo $_REQUEST["step"][0];
    }catch(PDOException $e){
        echo $e->getLine();
        echo $e->getMessage();
    }

?>