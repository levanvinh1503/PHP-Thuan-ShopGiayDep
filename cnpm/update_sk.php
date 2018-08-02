<?php
	session_start();
	include_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	$mask=$_GET['masukien'];
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$newtensk = $_POST["newtensk"];
  			$newngaybd = $_POST["newngaybatdau"];
  			$newngaykt = $_POST["newngayketthuc"];
  			$newmasp = $_POST["newmasanpham"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($newtensk=="" || $newngaybd == "" || $newngaykt == "" || $newmasp == "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='sukien.php';</script>";
			}
			else{
				$sql = "update sukien set
			    		TenSK='$newtensk',
						NgayBD='$newngaybd',
						NgayKT='$newngaykt',
						MaSp='$newmasp',
			    		where MaSK='$mask'";
						// thực thi câu $sql với biến conn lấy từ file connection.php
			   			mysqli_query($mysqli,$sql);
			   			echo "<script>alert('Sửa thành công !'); window.location.href='sukien.php';</script>";
			}
		}
	else{
		if (isset($_POST["btn_huy"]))
			echo "<script> window.location.href='sukien.php';</script>";
	}
?>