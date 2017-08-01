<?php
try{
  require_once("connectBooks.php");
  $sql = "select * from news order by newsno desc";
  $pdo = new PDO( $dsn, $user, $password, $options); 
  $news = $pdo->prepare( $sql );
  $news->execute();

  $result = $pdo->query($sql);
  $newsarr = array();
    while($hebe = $result->fetch(PDO::FETCH_ASSOC)){   
      $newsarr[]=$hebe;

    }
  if($news->rowCount()==0){
    echo "沒有最新消息";
  }
  else{
    echo json_encode($newsarr);
  }

}catch(PDOException $e){
  echo $e->getMessage();
}
?>
     