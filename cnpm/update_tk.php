<?php
	session_start();
	require_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	$user=$_GET['username'];
	$pass=$_GET['password'];
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$oldpassword = $_POST["oldpassword"];
  			$newpassword = $_POST["newpassword"];
  			$repassword = $_POST["repassword"];
  			$email = $_POST["Email"];
  			$sdt = $_POST["sdt"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($oldpassword=="" || $newpassword == "" || $repassword == "" || $email == "" || $sdt == "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='qltaikhoan_admin_sua.php?username=$user&password=$pass';</script>";
  			}
  			else{
  				if($oldpassword != $pass)
  					echo "<script>alert('Mật khẩu cũ không đúng!'); window.location.href='qltaikhoan_admin_sua.php?username=$user&password=$pass';</script>";
  				else{
  					if($newpassword != $repassword){
  						echo "<script>alert('Mật khẩu không khớp!'); window.location.href='qltaikhoan_admin_sua.php?username=$user&password=$pass'; </script>";
	  				}else{
						//thực hiện việc lưu trữ dữ liệu vào db
						$sql = "UPDATE tkkhach set Pass='$newpassword', Email='$email', Sdt=$sdt where Username='$user'";
						// thực thi câu $sql với biến conn lấy từ file connection.php
			   			mysqli_query($mysqli,$sql);
			   			echo "<script>alert('Sửa thành công !'); window.location.href='qltaikhoan_admin.php';</script>";
			   		}
			   	}

			}
	}else{
		if (isset($_POST["btn_huy"]))
			echo "<script> window.location.href='qltaikhoan_admin.php';</script>";
	}
?>