<?php



switch($_FILES["upload21"]["error"] ){
	//case 0 :
	case UPLOAD_ERR_OK :  

		$from = $_FILES["upload21"]["tmp_name"];

		$to = "images/7member/mugshots/".mb_convert_encoding($_FILES["upload21"]["name"],"big5","utf-8");
		//不過這種寫法萬一檔案名稱重複就糟了!

		copy( $from, $to);
		break;
	//case 1:
	case UPLOAD_ERR_INI_SIZE:
	    echo "上傳檔案太大,不能超過 ", ini_get("upload_max_filesize") , "<br>";	
	    	//相關設定都可至php.ini檢查。此指PHP處理的資料檔案大小上限。
	    break;
	//case 2:
	case UPLOAD_ERR_FORM_SIZE:
	    echo "上傳檔案太大,不能超過 ", $_POST["MAX_FILE_SIZE"] , "<br>";
	    break;
	    //HTML傳送過來的檔案大小上限
    //case 3:
    case UPLOAD_ERR_PARTIAL:
		echo "上傳失敗<br>";
		break;
    // case 4:
	case UPLOAD_ERR_NO_FILE:
        echo "未選擇上傳檔案<br>";
        break;
    default:
        echo "上傳檔案失敗，錯誤代碼: ",$_FILES["error"],"請通知系統開發人員<br>";
}

try {
	
	require_once("connectBooks.php");
	$sqla = "UPDATE `member` SET `name`=:name, `city`=:city, 
	      `area`=:area, `address`=:address, `phone`=:phone,
	     `email`=:email,`mugshot`=:mugshot,`renew_time`=:renew_time WHERE `account` = 'hebe520'";

	  $updateData = $pdo->prepare( $sqla);
	  $updateData ->bindValue(":name" , $_REQUEST["name"]);
	  $updateData ->bindValue(":city" , $_REQUEST["slct1"]);
	  $updateData ->bindValue(":area" , $_REQUEST["slct2"]);
	  $updateData ->bindValue(":address" , $_REQUEST["addr"]);
	  $updateData ->bindValue(":phone" , $_REQUEST["tel"]);
	  $updateData ->bindValue(":email" , $_REQUEST["email"]);
	  $updateData ->bindValue(":mugshot" , "images/7member/mugshots/".$_FILES["upload21"]["name"]);
	  $updateData ->bindValue(":renew_time" , '2017-08-04 17:48:40');
	  $updateData ->execute();
	  echo "資料修改成功<br>";
	} catch (PDOException $e) {
	  echo "錯誤行號 : ", $e->getLine(), "<br>";
	  echo "錯誤訊息 : ", $e->getMessage(), "<br>";		
	}

	header("Location:7member_update.php" );

 ?>    