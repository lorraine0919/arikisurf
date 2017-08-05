<?php
	ob_start();
	session_start();
	try{
		$_SESSION["account"] = $_REQUEST["memId"];
        $_SESSION["psw"] = $_REQUEST["memPsw"];
	}catch(PDOException $ex){
		echo "資料庫操作失敗,原因：",$ex->getMessage(),"<br>";
		echo "行號：",$ex->getLine(),"<br>";
	}
?>