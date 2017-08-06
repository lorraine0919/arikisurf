
<?php 
try{
		require_once("connectBooks.php");
		$sql = "delete from news where newsno=:newsno";
		$news = $pdo->prepare( $sql );
		$news->bindValue(":newsno", $_REQUEST["newsno"]);
		$news->execute();
	   	echo "hebesayok";
		// echo '<script type="text/javascript">
		// alert("新增成功");
		// </script>';
	} catch (PDOException $e) {
		echo "錯誤行號 : ", $e->getLine(), "<br>";
		echo "錯誤訊息 : ", $e->getMessage(), "<br>";	
	}	

header("Location: 9backstage_news.php"); 
exit;

 ?>