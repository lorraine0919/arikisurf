<?php 
	try{
		require_once('connectBooks.php');
		/*步驟一倒出浪板價錢*/
		if(isset($_REQUEST["boardindex"])){
			$sql='select * from customize_model where modelNo = :index';
			$pdostatement=$pdo->prepare($sql);
			$pdostatement->bindValue(':index',$_REQUEST["boardindex"]);
			$pdostatement->execute();
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['customize_model_price'];	

		}
		if(isset($_REQUEST["customermaterial"])){
			$sql='select * from customize_material where materialNo = :index';
			$pdostatement=$pdo->prepare($sql);
			$pdostatement->bindValue(':index',$_REQUEST["customermaterial"]);
			$pdostatement->execute();
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);		
			echo $pdorow['customize_material_price'];

		}
		if(isset($_REQUEST["clickpattern"])){
			/*官方圖片*/
			$sql='select * from system_parameter where systemparameter_no = 2';
			$pdostatement=$pdo->query($sql);
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['systemparameter_value'];

		}
		if(isset($_REQUEST["clickupload"])){
			/*上傳圖片*/
			$sql='select * from system_parameter where systemparameter_no = 1';
			$pdostatement=$pdo->query($sql);
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['systemparameter_value'];		

		}
		if(isset($_REQUEST["Epoxyprice"])){
			/*預設材質epoxy*/
			$sql='select * from customize_material where materialNo = 1';
			$pdostatement=$pdo->query($sql);
			$pdorow=$pdostatement->fetch(PDO::FETCH_ASSOC);
			echo $pdorow['customize_material_price'];			
		}
			
		if(isset($_REQUEST["customize_tel"])){
			echo date("Y-m-d");
			$sql = 'insert into `customize_order` (`customize_orderNo` , `member_no` , `customize_order_date` , `customize_tel` ,`customize_email`,`customize_adress`,`customize_order_status`,`customize_atm_acount`,`customize_usermessage`,`modelNo`,`materialNo`,`colorNo`,`boarddemo`,`customize_order_total`) values (null,  :member_no, :customize_order_date, :customize_tel, :customize_email,:customize_adress,"1",:customize_atm_acount,:customize_usermessage,:modelNo,:materialNo,:colorNo,:boarddemo,:customize_order_total)';
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->bindValue(":member_no" , 1);
			$pdostatement->bindValue(":customize_order_date" ,date("Y-m-d"));
			$pdostatement->bindValue(":customize_tel" , $_REQUEST['customize_tel']);
			$pdostatement->bindValue(":customize_email" ,$_REQUEST['customize_email']);
			$pdostatement->bindValue(":customize_adress" ,$_REQUEST['customize_adress'] );
			$pdostatement->bindValue(":customize_atm_acount" ,$_REQUEST['customize_atm_acount']);
			$pdostatement->bindValue(":customize_usermessage" , $_REQUEST['customize_usermessage']);
			$pdostatement->bindValue(":modelNo" ,$_REQUEST['modelNo']);
			$pdostatement->bindValue(":materialNo" ,$_REQUEST['materialNo']);
			$pdostatement->bindValue(":colorNo" ,$_REQUEST['colorNo']);
			$pdostatement->bindValue(":boarddemo" ,$_REQUEST['boarddemo'] );
			$pdostatement->bindValue(":customize_order_total" ,$_REQUEST['customize_order_total']);
			$pdostatement->execute();
			echo "1";
		}

	}catch(PDOException $e){
		echo $e->getLine();
		echo $e->getMessage();
	}


 ?>		