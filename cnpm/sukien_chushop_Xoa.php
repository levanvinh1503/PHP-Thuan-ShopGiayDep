<?php
	session_start();
	include_once("connection.php");
	header('content-Type: Text/html; charset=UTF-8');
	$mask=$_GET['masukien'];
	$query="delete from sukien where MaSk='$mask'";
	mysqli_query($mysqli,$query) or die('xóa dữ liệu thất bại!');
	echo"<script>alert('xóa dữ liệu thành công !'); window.location.href='sukien.php';</script>";
?>