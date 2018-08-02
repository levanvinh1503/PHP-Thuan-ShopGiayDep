<?php
	session_start();
	include_once("connection.php");
	header('Content-Type: text/html; charset=UTF-8');
	$masp=$_GET['masanpham'];
	$mancc=$_GET['manhacungcap'];
	$malkh=$_GET['maloaikhachhang'];
	$malsp=$_GET['maloaisanpham'];
	$tensp=$_GET['tensanpham'];
	$size=$_GET['size'];
	$dongia=$_GET['dongia'];
	$soluong=$_GET['soluong'];
	if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
			$newtennhacc = $_POST["newnhacc"];
  			$newmaloaikh = $_POST["newloaikh"];
  			$newmaloaisp = $_POST["newmaloaisp"];
  			$newtensp = $_POST["newtensp"];
  			$newsize = $_POST["newsize"];
  			$newdongia=$_POST["newdongia"];
  			$newsoluong=$_POST["newsoluong"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			if ($newtennhacc=="" || $newmaloaikh == "" || $newmaloaisp == "" || $newtensp == "" || $newsize == ""||$dongia== ""||$newsoluong== "") {
				echo "<script>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location.href='khohang_chushop_Sua.php?masanpham=$masp&manhacungcap=$mancc&maloaikhachhang=$malkh&maloaisanpham=$malsp&tensanpham=$tensp&size=$size&soluong=$soluong&dongia=$dongia;</script>";
			}
			else{
				$sql = "update sanpham set
			    		MaNCC='$newtennhacc',
						MaLKH='$newmaloaikh',
						MaLoaiSp='$newmaloaisp',
						TenSanPham='$newtensp',
						Size='$newsize',
						DonGia='$newdongia',
						SoLuong='$newsoluong'
			    		where MaSp='$masp'";
						// thực thi câu $sql với biến conn lấy từ file connection.php
			   			mysqli_query($mysqli,$sql);
			   			echo "<script>alert('Sửa thành công !'); window.location.href='khohang_chushop.php';</script>";
			}
		}
	else{
		if (isset($_POST["btn_huy"]))
			echo "<script> window.location.href='qlnhanvien_chushop.php';</script>";
	}
?>