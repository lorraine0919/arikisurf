<?php 
try{
	require_once('connectBooks.php');

if(isset($_REQUEST['prod_sold'])){
		
				
				$sql = "update `surfequipped` set `prod_sold`=:changevalue
				      where `prod_no`=:changeno";
				$pdostatement = $pdo->prepare( $sql );
				$pdostatement->bindValue(":changevalue" , $_REQUEST['prod_sold']);
				$pdostatement->bindValue(":changeno" , $_REQUEST['prod_no']);
				$pdostatement->execute();
				// header('Location:9backstage_surfshop.php');			
	
}

 ?>

 <?php 

 if(isset($_REQUEST['price'])){
 	           require_once('connectBooks.php');
				$sql = "update `surfequipped` set `prod_name`=:changeNamevalue,`prod_price`=:changePricevalue,`prod_des`=:changeDesvalue ,`prod_qua`=:changeQuavalue 
				      where `prod_no`=:changeno";
				$pdostatement = $pdo->prepare( $sql );
				$pdostatement->bindValue(":changeNamevalue" , $_REQUEST['name']);
				$pdostatement->bindValue(":changePricevalue" , $_REQUEST['price']);
				$pdostatement->bindValue(":changeDesvalue" , $_REQUEST['des']);
				$pdostatement->bindValue(":changeQuavalue" , $_REQUEST['qua']);
				$pdostatement->bindValue(":changeno" , $_REQUEST['prod_no']);
				$pdostatement->execute();
				// header('Location:9backstage_surfshop.php');				
 }

 ?>

 <?php 
	switch($_FILES['newImg']['error']){
		case UPLOAD_ERR_OK : 
			
			$from = $_FILES['newImg']['tmp_name'];
			$to = "images/3accessories//" . mb_convert_encoding($_FILES['newImg']['name'],'big5','utf-8');
			copy( $from, $to);

			$fileName = $_FILES['newImg']['name'];
			echo $fileName;
                require_once('connectBooks.php');
				$sql = "insert into `surfequipped`(`prod_no` , `prod_name` , `prod_price` , `prod_des`,`prod_sold` ,`prod_qua`,`prod_obj`,`prod_img` )  values (null,:newName, :newPrice, :newDes, '1' , :newQua, :newObj, :image)";
				$product = $pdo->prepare( $sql );
				$product->bindValue(':newName', $_REQUEST['newName']);
				$product->bindValue(':newPrice', $_REQUEST['newPrice']);
				$product->bindValue(':newDes', $_REQUEST['newDes']);
				$product->bindValue(':newQua', $_REQUEST['newQua']);
				$product->bindValue(':newObj', $_REQUEST['newObj']);
				$product->bindValue(':image', $fileName);
				$product->execute();
				header('Location:9backstage_surfshop.php');
			    echo "新增成功<br>";
			break;
		case UPLOAD_ERR_INI_SIZE:
		    echo "上傳檔案太大,不能超過 ", ini_get("upload_max_filesize") , "<br>";	
		    break;
		case UPLOAD_ERR_FORM_SIZE:
		    echo "上傳檔案太大,不能超過 ", $_POST['MAX_FILE_SIZE'] , "<br>";			    
		    break;
	    case UPLOAD_ERR_PARTIAL:
	    	echo "上傳失敗<br>";
	    	break;
	    case UPLOAD_ERR_NO_FILE:
	        echo "没有上傳檔案<br>";
	        break;
	    default:
	        echo "上傳檔案失敗，錯誤代碼: ",$_FILES['error'],"請通知系統開發人員<br>";

	}	




	}catch(PDOException $e){
	  echo $e->getLine();
	  echo $e->getMessage();
	}
	

?>  


