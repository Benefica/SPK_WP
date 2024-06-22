<?php
	include('configdb.php');
	
	$result = $mysqli->query("DELETE from user where id = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: user.php');
	}
?>