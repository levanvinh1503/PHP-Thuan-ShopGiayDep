<?php
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	if (session_destroy()){
		echo "<script>alert('Thoát thành công'); window.location.href='trangchu.php';</script>";
	}
	else
	    echo "<script>alert('Không thể thoát được');</script>";
?>