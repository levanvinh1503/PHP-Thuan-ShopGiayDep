<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	require_once("connection.php");
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["password"];
 			$verify_password = $_POST["verify_password"];
  			$email = $_POST["email"];
  			$sdt = $_POST["sdt"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($username == "" || $password == "" || $verify_password == "" || $email == "" || $sdt == "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='trangchu.php';</script>";
  			}
  			else{
  				if( $password != $verify_password)
  					echo "Mật khẩu không giống nhau, vui lòng nhập lại!";
  				else{
  					$results = $mysqli->query("SELECT Username FROM tkkhach");
					while($obj = $results->fetch_object())
					{
					   	$username_cu=$obj->Username;
					   	$dem=0;
					    if($username==$username_cu){
					    	$dem=1;
					    	echo "<script>alert('Tài khoản đã được sử dụng rồi, vui lòng sử dụng tài khoản khác!'); window.location.href='trangchu.php';</script>";
					   	}
			  		}
			  		if($dem==0)
			  		{
			  			$sql = "INSERT INTO tkkhach(
		    					Username,
		    					Pass,
							    Email,
							    Sdt,
							    RoleID
		    					) VALUES (
		    					'$username',
		    					'$password',
		    					'$email',
		    					$sdt,
		    					'khach'
		    					)";
		   				mysqli_query($mysqli,$sql);
		   				echo "<script>alert('Đăng ký thành công!'); window.location.href='trangchu.php';</script>";
			  		}
				}
			}
		}
?>
</body>
</html>
