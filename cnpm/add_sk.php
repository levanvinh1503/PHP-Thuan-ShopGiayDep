<?php
	session_start();
	include_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$newmasukien=$_POST["newmasukien"];
			$newtensukien = $_POST["newtensukien"];
  			$newngaybatdau = $_POST["newngaybatdau"];
  			$newngayketthuc = $_POST["newngayketthuc"];
  			$newmasanpham = $_POST["newmasanpham"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($newmasukien== ""||$newtensukien=="" || $newngaybatdau == "" || $newngayketthuc == "" || $newmasanpham == "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='sukien.php';</script>";
			}
			else{
				$sql = "INSERT INTO sukien 
        				VALUES ('$newmasukien','$newtensukien','$newngaybatdau','$newngayketthuc','$newmasanpham')";
						// thực thi câu $sql với biến conn lấy từ file connection.php
			   			mysqli_query($mysqli,$sql);
			   			echo "<script>alert('Thêm thành công !'); window.location.href='sukien.php';</script>";
			}
		}
	else{
		if (isset($_POST["btn_huy"]))
			echo "<script> window.location.href='sukien.php';</script>";
	}
?>