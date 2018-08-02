<?php
	session_start();
	include_once("connection.php");
	header('content-Type: Text/html; charset=UTF-8');
	$manv=$_GET['manhanvien'];
	echo manv;
	$query="delete from nhanvien where MaNv='$manv'";
	mysqli_query($mysqli,$query) or die('xóa dữ liệu thất bại!');
	echo"<script>alert('xóa dữ liệu thành công !'); window.location.href='qlnhanvien_chushop.php';</script>";
?>