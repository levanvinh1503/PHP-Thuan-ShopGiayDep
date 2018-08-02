<?php
	session_start();
	include_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	$manv=$_GET['manhanvien'];
	$tennv=$_GET['tennhanvien'];
	$gti=$_GET['gioitinh'];
	$nsi=$_GET['ngaysinh'];
	$dci=$_GET['diachi'];
	$sdti=$_GET['sodienthoai'];
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$newtennhanvien = $_POST["newtennhanvien"];
  			$newgioitinh = $_POST["newgioitinh"];
  			$newngaysinh = $_POST["newngaysinh"];
  			$newdiachi = $_POST["newdiachi"];
  			$newsdt = $_POST["newsdt"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($newtennhanvien=="" || $newgioitinh == "" || $newngaysinh == "" || $newdiachi == "" || $newsdt == "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='qlnhanvien_chushop_Sua.php?manhanvien=$manv&tennhanvien=$tennv'&gioitinh=$gti&ngaysinh=$nsi&diachi=$dci&sodienthoai=$sdti;</script>";
			}
			else{
				$sql = "update nhanvien set
			    		TenNv='$newtennhanvien',
						GioiTinh='$newgioitinh',
						NgaySinh='$newngaysinh',
						DiaChi='$newdiachi',
						Sdt='$newsdt'
			    		where MaNv='$manv'";
						// thực thi câu $sql với biến conn lấy từ file connection.php
			   			mysqli_query($mysqli,$sql);
			   			echo "<script>alert('Sửa thành công !'); window.location.href='qlnhanvien_chushop.php';</script>";
			}
		}
	else{
		if (isset($_POST["btn_huy"]))
			echo "<script> window.location.href='qlnhanvien_chushop.php';</script>";
	}
?>