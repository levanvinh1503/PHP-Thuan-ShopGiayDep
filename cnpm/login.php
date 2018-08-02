<?php
	session_start();
	include_once("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	//Gọi file connection.php ở bài trước
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "Username hoặc Password bạn không được để trống!";
		}else{
			$sql = "select * from tkkhach where Username = '$username' and Pass = '$password' ";
			$query = mysqli_query($mysqli,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "Tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				$qr=$mysqli->query("select * from tkkhach where Username = '$username' and Pass = '$password' ");
				while($obj = $qr->fetch_object())
				{
					if($obj->RoleID=='khach'){
						//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
						$_SESSION['username'] = $username;
		                // Thực thi hành động sau khi lưu thông tin vào session
		                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
		                header('Location: trangchu_user.php');
		            }else{
		            	if($obj->RoleID=='ad'){
		            		$_SESSION['username'] = $username;
			                // Thực thi hành động sau khi lưu thông tin vào session
			                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			                header('Location: admin.php');
		            	}else{
		            		if($obj->RoleID=='chs')
		            		{
		            			$_SESSION['username'] = $username;
				                // Thực thi hành động sau khi lưu thông tin vào session
				                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
				                header('Location: chushop.php');
		            		}else{
		            			if($obj->RoleID=='nv'){
		            				$_SESSION['username'] = $username;
				                // Thực thi hành động sau khi lưu thông tin vào session
				                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
				                header('Location: nhanvien.php');
		            			}
		            		}
		            	}
		            }
	            }
			}
		}
	}
?>
</body>
</html>