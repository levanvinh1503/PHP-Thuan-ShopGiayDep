<?php
	session_start();
	include_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	$user=$_GET['username'];
	$query="delete from tkkhach where Username='$user'";
	mysqli_query($mysqli,$query) or die('Xóa dữ liệu thất bại !');
	echo "<script>alert('Xóa dữ liệu thành công'); window.location.href='qltaikhoan_admin.php';</script>";
?>
