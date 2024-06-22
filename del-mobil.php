<?php
	include('configdb.php');
	
	$result = $mysqli->query("DELETE from mobil where id = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: mobil.php');
	}
?>