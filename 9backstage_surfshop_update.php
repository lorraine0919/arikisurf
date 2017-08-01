<?php 
try{  //商品上下架
	
			require_once('connectBooks.php');
			$sql = "update `surfequipped` set `prod_sold`=:changevalue
			      where `prod_no`=:changeno";
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->bindValue(":changevalue" , $_REQUEST['prod_sold']);
			$pdostatement->bindValue(":changeno" , $_REQUEST['prod_no']);
			$pdostatement->execute();
			header('Location:9backstage_surfshop.php');			

}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}
 ?>

 <?php 
try{ //商品內容修改
	
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
			header('Location:9backstage_surfshop.php');			

}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}
 ?>

 <?php 

switch($_FILES["newImg"]["error"] ){
	case UPLOAD_ERR_OK : 
		if( file_exists("images") == false){
			mkdir("images"); //make directory
		}
		$from = $_FILES["newImg"]["tmp_name"];
		$to = "images/3accessories//" . mb_convert_encoding($_FILES["newImg"]["name"],"big5","utf-8");
		copy( $from, $to);

		$fileName = $_FILES["newImg"]["name"];
		break;
	case UPLOAD_ERR_INI_SIZE:
	    echo "上傳檔案太大,不能超過 ", ini_get("upload_max_filesize") , "<br>";	
	    break;
	case UPLOAD_ERR_FORM_SIZE:
	    echo "上傳檔案太大,不能超過 ", $_POST["MAX_FILE_SIZE"] , "<br>";			    
	    break;
    case UPLOAD_ERR_PARTIAL:
    	echo "上傳失敗<br>";
    	break;
    case UPLOAD_ERR_NO_FILE:
        echo "没有上傳檔案<br>";
        break;
    default:
        echo "上傳檔案失敗，錯誤代碼: ",$_FILES["error"],"請通知系統開發人員<br>";

}
if( $_FILES["newImg"]["error"] != 0){
  echo "新增失敗";
}else{
	try{
		require_once("connectBooks.php");
		// $sql = "insert into products values (null,:pname, :price, :author, :pages, :image)";
		// $product = $pdo->prepare( $sql );
		// $product->bindValue(":pname", $_REQUEST["pname"]);
		// $product->bindValue(":price", $_REQUEST["price"]);
		// $product->bindValue(":author", $_REQUEST["author"]);
		// $product->bindValue(":pages", $_REQUEST["pages"]);
		// $product->bindValue(":image", $fileName);
		// $product->execute();
	    echo "新增成功<br>";
	} catch (PDOException $e) {
		echo "錯誤行號 : ", $e->getLine(), "<br>";
		echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}	
}

?>  


