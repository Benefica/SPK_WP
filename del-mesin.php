<?php
	include('configdb.php');
	
	$result = $mysqli->query("DELETE from mesin where id = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: inspeksi_mesin.php');
	}
?>