<?php
	session_start();
	include_once("connection.php");
	header('content-Type: Text/html; charset=UTF-8');
	$masp=$_GET['masanpham'];
	echo $masp;
	$query="delete from sanpham where MaSp='$masp'";
	mysqli_query($mysqli,$query) or die('xóa dữ liệu thất bại!');
	echo"<script>alert('xóa dữ liệu thành công !'); window.location.href='khohang_chushop.php';</script>";
?>