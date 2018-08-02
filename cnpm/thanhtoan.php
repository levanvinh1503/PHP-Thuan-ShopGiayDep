<?php
	session_start();
	require_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	$masp=$_GET['masp'];
	$soluong=$_GET['soluong'];
	$dongia=$_GET['dongia'];
	if (isset($_POST["btn_submit"])) {
		$name = $_POST["name"];
  		$address = $_POST["address"];
  		$email = $_POST["Email"];
  		$sdt = $_POST["sdt"];
  		if ($name=="" || $address == "" || $email == "" || $sdt == "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='formthanhtoan.php?masp=$masp&soluong=$soluong&dongia=$dongia';</script>";
  		}
  		else{
			$sql = "INSERT INTO hoadon values(null,$masp,$soluong,$dongia,'$name','$address','$email',$sdt)";
			echo $sql;
			mysqli_query($mysqli,$sql);
			//echo "<script>alert('Đặt hàng thành công !'); window.location.href='khohang.php';</script>";

		}
	}
	else
	{
		if(isset($_POST['btn_huy']))
			echo "<script>window.location.href='trangchu.php';</script>";
	}
?>