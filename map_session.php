<?php 
ob_start();
session_start();
$_SESSION["map_wave"]["wave_number"] = $_REQUEST["wave_number"];
 ?>
<script>
	console.log("<?php echo $_SESSION["map_wave"]["wave_number"]; ?>");
</script>

 <?php 
header("location:map_forum.php");
 ?>