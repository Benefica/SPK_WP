<?php
	include('configdb.php');
	
	$result = $mysqli->query("DELETE from alternatif");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif1.php');
	}
?>