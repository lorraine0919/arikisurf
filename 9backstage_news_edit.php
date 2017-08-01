
<?php 

 require_once("connectBooks.php");
  $sql = "select * from news where newsno=:newsno";
  $news = $pdo->prepare( $sql );
  $news->bindValue(":newsno",$_REQUEST["newsno"]);
  $news->execute();
  $newsarr = array();

  while($newsRow = $news->fetch(PDO::FETCH_ASSOC)){
  		$newsarr[]=$newsRow;
  }
  if($news->rowCount()==0){
    echo "沒有最新消息";
  }
  else{
  	$waynetest = json_encode($newsarr);
  	$hebetest = $newsarr;
  	
    echo json_encode($newsarr);
  }
  

 ?>