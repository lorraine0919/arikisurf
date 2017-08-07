<?php 
ob_start();
session_start();
$title = $_REQUEST["title"];
$textarea = $_REQUEST["textarea"];
$datetime = date("Y-m-d H:i:s"); 
$wave_number = $_SESSION["map_wave"]["wave_number"];
$member_no = $_SESSION["member_no"];
$star_score = 1;
$a = $_FILES["file"]["name"];

try{
	    switch($_FILES["file"]["error"]){
		case 0 : //上傳成功 把檔案傳到指定資料夾
			$from = $_FILES["file"]["tmp_name"];
			$ext=mb_convert_encoding($_FILES["file"]["name"],"big5","utf-8");
			$to = "images/4wavepoint/".$wave_number."/fou/".$ext;
			copy( $from, $to);
			// echo "上傳成功<br>";
			break;
		case 1:
		    echo "上傳檔案太大,不能超過 ", ini_get("upload_max_filesize") , "<br>";	
		    break;
		case 2:
		    echo "上傳檔案太大,不能超過 ", $_POST["MAX_FILE_SIZE"] , "<br>";			    
		    break;
	    case 3:
			echo "上傳失敗<br>";
			break;
	    case 4:
	        echo "没有上傳檔案<br>";
	    default:
	        echo "上傳檔案失敗，錯誤代碼: ",$_FILES["error"],"請通知系統開發人員<br>";
		}

		require_once("connectBooks.php");
		$sql = "insert into map_post values(null,$wave_number,'$a','$datetime','$title','$textarea',1,0,$member_no,$star_score)";
		$into = $pdo->exec($sql);
		header("location:map_forum.php");

}catch(PDOException $ex){
    echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
	echo "行號：",$ex->getLine(),"<br>";
}
	
?>