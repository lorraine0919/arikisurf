<?php 
session_start();
ob_start();
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
			$pdostatement->bindValue(":member_no" , $_SESSION['member_no']);
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
		if(isset($_REQUEST['knowboardsellornot'])){
			$sql='select customize_model_sellornot from customize_model';
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->execute();
			$pdoRow=$pdostatement->fetchAll(PDO::FETCH_ASSOC);
			$jsonStr = json_encode($pdoRow);
			echo $jsonStr;
		}
		if(isset($_REQUEST['colorpatternmaterialsellornot'])){
			$sql='select  customize_color_sellornot from  customize_color';
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->execute();
			$pdoRow=$pdostatement->fetchAll(PDO::FETCH_ASSOC);
			$jsonStr = json_encode($pdoRow);
			echo $jsonStr.'|';

			$sql='select  customize_material_sellornot from  customize_material';
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->execute();
			$pdoRow=$pdostatement->fetchAll(PDO::FETCH_ASSOC);
			$jsonStr = json_encode($pdoRow);
			echo $jsonStr.'|';

			$sql='select  officialimg_sellornot from  customize_officialimg';
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->execute();
			$pdoRow=$pdostatement->fetchAll(PDO::FETCH_ASSOC);
			$jsonStr = json_encode($pdoRow);
			echo $jsonStr;

		}
		/*在客製化頁面登入*/
		if(isset($_REQUEST['memId2'])){
			require_once("connectBooks.php");
			$sql = "select * from member where account = :memId and psw = :memPsw";
			$member = $pdo->prepare($sql);
			$member -> bindValue(":memId",$_REQUEST["memId2"]);
			$member -> bindValue(":memPsw",$_REQUEST["memPsw2"]);
			$member -> execute();
				
			//登入成功，將登入者資訊寫入session
		       
			if( $member->rowCount() !=0 ){
			    $memRow = $member->fetch(PDO::FETCH_ASSOC);
			    $_SESSION["account"] = $memRow["account"];
		        $_SESSION["member_no"] = $memRow["member_no"];
		        $_SESSION["psw"] = $memRow["psw"];
		        $_SESSION["mugshot"] = $memRow["mugshot"];
				echo '1'.'|';
				echo $memRow["name"].'|';
				echo $memRow["phone"].'|';
				echo $memRow["email"].'|';
				echo $memRow["city"].$memRow["area"].$memRow["address"];
			}else{
				echo '2';
			}
		}
		/*在其他頁面登入*/
		if(isset($_REQUEST['havelogin'])){
			require_once("connectBooks.php");
			$sql = "select * from member where member_no=:member_no";
			$member = $pdo->prepare($sql);
			$member -> bindValue(":member_no",$_SESSION["member_no"]);
			$member -> execute();
			$memRow = $member->fetch(PDO::FETCH_ASSOC);
			echo '1'.'|';
			echo $memRow["name"].'|';
			echo $memRow["phone"].'|';
			echo $memRow["email"].'|';
			echo $memRow["city"].$memRow["area"].$memRow["address"];						
		}

	}catch(PDOException $e){
		echo $e->getLine();
		echo $e->getMessage();
	}


 ?>		