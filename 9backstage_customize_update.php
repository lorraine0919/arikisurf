<?php 
try{
	

		function intodb($changetable,$changecolumn,$changeno,$changevalue,$changenoname){
			require_once('connectBooks.php');
			$sql = "update `$changetable` set `$changecolumn`=:changevalue
			      where `$changenoname`=:changeno";
			echo $sql;
			$pdostatement = $pdo->prepare( $sql );
			$pdostatement->bindValue(":changevalue" , $changevalue);
			$pdostatement->bindValue(":changeno" , (int)$changeno);
			$pdostatement->execute();
			// header('Location:9backstage_customize.php');			
		}

		// ↓上下架修改
			if(isset($_REQUEST['sellornot'])){
				if($_REQUEST['style']=='model'){
						intodb('customize_model','customize_model_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'modelNo');

				}else if($_REQUEST['style']=='color'){

					intodb('customize_color','customize_color_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'colorNo');

				}else if($_REQUEST['style']=='officialimg'){

					intodb('customize_officialimg','officialimg_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'officialimgNo');

				}else if($_REQUEST['style']=='material'){
					intodb('customize_material','customize_material_sellornot',$_REQUEST['no'],$_REQUEST['sellornot'],'materialNo');
				}
			}
		// ↑上下架修改

		// ↓價格修改
			if(isset($_REQUEST['price'])){
				if($_REQUEST['style']=='model'){
					intodb('customize_model','customize_model_price',$_REQUEST['no'],$_REQUEST['price'],'modelNo');
				}else if($_REQUEST['style']=='material'){
					intodb('customize_material','customize_material_price',$_REQUEST['no'],$_REQUEST['price'],'materialNo');
				}
			}
		// ↑價格修改



		/*↓刪除官方圖片*/
			if(isset($_REQUEST['deleteimgnum'])){ 
				require_once('connectBooks.php');
				$sql = "DELETE FROM customize_officialimg WHERE officialimgNo=:officialimgNo";	
				$pdostatement = $pdo->prepare( $sql );
				$pdostatement->bindValue(":officialimgNo" , $_REQUEST['deleteimgnum']);
				$pdostatement->execute();				
			}
		/*↑刪除官方圖片*/

		/*↓修改圖片價格*/
			if(isset($_REQUEST['patternprice'])){
				require_once('connectBooks.php');
				$sql = "update system_parameter set systemparameter_value = :systemparameter_value where systemparameter_no=	:systemparameter_no";	
				$pdostatement = $pdo->prepare( $sql );
				$pdostatement->bindValue(":systemparameter_value" , $_REQUEST['patternprice']);
				$pdostatement->bindValue(":systemparameter_no" , $_REQUEST['offioruser']);
				$pdostatement->execute();					
			}
		/*↑修改圖片價格*/

		// ↓上傳官方圖片
			// if(isset($_REQUEST["uploadofficalimg"])){
					switch($_FILES["uploadofficalimg"]["error"]){
					case UPLOAD_ERR_OK :
						/*準備圖片檔名(把附檔名拿掉)*/
						$strlength=strlen($_FILES["uploadofficalimg"]["name"])-4;
						$officialimg_name=substr($_FILES["uploadofficalimg"]["name"],0,$strlength);


						/*把圖片放到圖片資料夾*/
						echo $_FILES["uploadofficalimg"]["tmp_name"];
						$from=$_FILES["uploadofficalimg"]["tmp_name"];
						$to="images/2board/officalimg//". mb_convert_encoding($_FILES["uploadofficalimg"]["name"],"big5","utf-8");
						copy($from,$to);

						/*↓把檔名存至資料庫*/
							require_once('connectBooks.php');
							$sql = 'insert into `customize_officialimg` (`officialimgNo` , `officialimg_name` , `officialimg_sellornot` , `officialimg_file_name` ) values (null,  :officialimg_name,  "1",  :officialimg_file_name)';
							echo $sql;
							$pdostatement = $pdo->prepare( $sql );
							$pdostatement->bindValue(":officialimg_name" , $officialimg_name);
							$pdostatement->bindValue(":officialimg_file_name" ,$_FILES["uploadofficalimg"]["name"]);
							$pdostatement->execute();
						/*↑把檔名存至資料庫*/

						break;
					case UPLOAD_ERR_INI_SIZE :
						echo "上傳檔案太大";
						break;
					case UPLOAD_ERR_FORM_SIZE :
						echo "上傳檔案太大";
						break;
					case UPLOAD_ERR_PARTIAL :
						echo "上傳失敗";
						break;
					case UPLOAD_ERR_NO_FILE :
						echo "沒有上傳檔案";
						break;
					default:
						echo "上傳失敗";

				}
			// }
			
		// ↑上傳官方圖片
}catch(PDOException $e){
  echo $e->getLine();
  echo $e->getMessage();
}

 ?>
