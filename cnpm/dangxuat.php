<?php
	session_start();
	include_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	if (session_destroy()) {
	    echo "Đăng xuất thành công!";
	    header("location: trangchu.php");
	}
?>