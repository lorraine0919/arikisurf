<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 


switch($_FILES["newsimg"]["error"] ){
	case UPLOAD_ERR_OK : 
		// if( file_exists("newsimg") == false){
		// 	mkdir("newsimg"); //make directory
		// }
		$from = $_FILES["newsimg"]["tmp_name"];
		$to = "images/5news/" . mb_convert_encoding($_FILES["newsimg"]["name"],"big5","utf-8");
		copy( $from, $to);

		$fileName = $_FILES["newsimg"]["name"];
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
if( $_FILES["newsimg"]["error"] != 0){
  echo "新增失敗";
}else{
	try{
		require_once("connectBooks.php");
		$sql = "insert into news values (null,:newstitle, :newsdate, :newsimg, :newstxt)";
		$news = $pdo->prepare( $sql );
		$news->bindValue(":newstitle", $_REQUEST["newstitle"]);
		$news->bindValue(":newsdate", $_REQUEST["newsdate"]);
		$news->bindValue(":newsimg", $fileName);
		$news->bindValue(":newstxt", $_REQUEST["newstxt"]);
		$news->execute();
	    
		echo "<script type='text/javascript'>alert('新增成功');location.href ='9backstage_news.php'</script>";
	} catch (PDOException $e) {
		echo "錯誤行號 : ", $e->getLine(), "<br>";
		echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}	
}
?>    
</body>
</html>