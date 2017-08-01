<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Examples</title>
</head>
<body>
<?php 
		
		$from = $_FILES["newsimg"]["tmp_name"];
		$to = "images/5news/" . mb_convert_encoding($_FILES["newsimg"]["name"],"big5","utf-8");
		copy( $from, $to);

		$fileName = $_FILES["newsimg"]["name"];
		

	try{
			$sql = "update news set newstitle =:newstitle,newsdate=:newsdate,newsimg=:newsimg,newstxt=:newstxt where newsno =:newsno";
			if( $_FILES["newsimg"]["error"] != 0){
		   
			$sql = "update news set newstitle =:newstitle,newsdate=:newsdate,newstxt=:newstxt where newsno =:newsno";
		}

		require_once("connectBooks.php");
		$news = $pdo->prepare( $sql );
		$news->bindValue(":newsno", $_REQUEST["newsno"]);
		$news->bindValue(":newstitle", $_REQUEST["newstitle"]);
		$news->bindValue(":newsdate", $_REQUEST["newsdate"]);
		if( $_FILES["newsimg"]["error"] == 0){
		$news->bindValue(":newsimg", $fileName);
		}
		$news->bindValue(":newstxt", $_REQUEST["newstxt"]);
		$news->execute();
		
		// echo "上傳成功";
	    
	} catch (PDOException $e) {
		echo "錯誤行號 : ", $e->getLine(), "<br>";
		echo "錯誤訊息 : ", $e->getMessage(), "<br>";	

}
header("Location: 9backstage_news.php"); 
 
exit;
?>    
</body>

</html>