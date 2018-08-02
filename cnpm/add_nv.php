<?php
	session_start();
	include_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$newmanhanvien=$_POST["newmanhanvien"];
			$newtennhanvien = $_POST["newtennhanvien"];
  			$newgioitinh = $_POST["newgioitinh"];
  			$newngaysinh = $_POST["newngaysinh"];
  			$newdiachi = $_POST["newdiachi"];
  			$newsdt = $_POST["newsdt"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($newmanhanvien== ""||$newtennhanvien=="" || $newgioitinh == "" || $newngaysinh == "" || $newdiachi == "" || $newsdt == "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='qlnhanvien_chushop.php';</script>";
			}
			else{
				$sql = "INSERT INTO nhanvien 
        				VALUES ('$newmanhanvien','$newtennhanvien','$newgioitinh','$newngaysinh','$newdiachi',$newsdt)";
						// thực thi câu $sql với biến conn lấy từ file connection.php
			   			mysqli_query($mysqli,$sql);
			   			echo "<script>alert('Thêm thành công !'); window.location.href='qlnhanvien_chushop.php';</script>";
			}
		}
	else{
		if (isset($_POST["btn_huy"]))
			echo "<script> window.location.href='qlnhanvien_chushop.php';</script>";
	}
?>