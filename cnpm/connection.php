<?php
	$currency = '$'; //Currency sumbol or code

	$db_username = 'root';
	$db_password = '12345678';
	$db_name = 'shopgiaydep';
	$db_host = 'localhost:3307';
	$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);
	mysqli_query($mysqli,"SET NAMES 'utf8'");
?>