<?php
	session_start();
	include_once("connection.php");
	$masp=$_GET['masp'];
	$soluong=$_GET['soluong'];
	$dongia=$_GET['dongia'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Super Start Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- start menu -->     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->

</head>
<body>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="trangchu.php"><img src="images/logo.jpg" alt="logo" width="100px" height="50x" /></a>
	    </div>
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a class="color1" href="trangchu.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
		    <li><a href="khohang.php"><span class="glyphicon glyphicon-list-alt"> Sản phẩm</span></a></li> 
			<li><a class="login-window" href="#login-box"><span class="glyphicon glyphicon-log-in"> Đăng nhập</span></a></li>
			<li><a class="register-window" href="#register-box"><span class="glyphicon glyphicon-log-out"> Đăng ký</span></a></li>
			<li><a href="giohang.php"><span class="glyphicon glyphicon-shopping-cart"> Giỏ hàng</span></a></li>
		   <div class="clear"></div>
		</ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="login">
         <div class="wrap">
         	<div id="products-wrapper">
         		<h4 class="title">Thông tin người đặt hàng</h4><br>
	          		<form method="POST" action="<?php echo "thanhtoan.php?masp=$masp&soluong=$soluong&dongia=$dongia" ?>">
	          			<!--<?php
							   //$dbhost = 'localhost:3307';
							  // $dbuser = 'root';
							  // $dbpass = '12345678';
							   
							  // $conn = mysql_connect($dbhost, $dbuser, $dbpass);	
							   //$sql = 'SELECT * FROM tkkhach';
							  //mysql_select_db('shopgiaydep');
							   //mysql_query("SET NAMES 'utf8'"); 
							  // $retval = mysql_query( $sql, $conn );
							  // while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
							   //{
							   ?>-->
							   		<div>
				    	     			<label>Họ và tên: </label>
				    	     			<input type="text"  name="name" class="form-control" style="width: 400px;" >
				    	     		</div>
				    	     		<div>
				    	     			<label>Địa chỉ: </label>
				    	     			<input type="text"  name="address" class="form-control" style="width: 400px;">
				    	     		</div>
					    	     	<div>
					    	     		<label>Email: </label>
					    	     		<input type="text" name="Email" class="form-control" style="width: 400px;">
					    	     	</div>
					    	     	<div>
					    	     		<label>Số điện thoại: </label>
					    	     		<input type="text" name="sdt" class="form-control" style="width: 400px;">
					    	     	</div>
					    	<!--<?php
							   //}
							   //mysql_close($conn);
							?>-->
		    	     	<br>
		    	     	<div>
			    	     	<button class="btn btn-info" name="btn_submit" type="submit" style="width: 80px;" >Đặt hàng</button>
			    	     	<button class="btn btn-info" name="btn_huy" type="submit" style="width: 80px;" >Hủy</button><br><br><br>
		    	     	</div>
	          		</form>
				 
			</div>
    	   </div>
		</div>
        <div class="footer">
       	  <div class="footer-top">
       		<div class="wrap">
       			   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	 <ul class="f_list">
				  	 	<li><img src="images/f_icon.png" alt=""/><span class="delivery">Miễn phí ship đối với hóa đơn trị giá trên 1.000.000 VND</span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> 01685699420 (gặp anh Vịnh)</span></span></li>
				  	 </ul>
				   </div>
				   <div class="col_1_of_footer-top span_1_of_footer-top">
				  	<ul class="f_list">
				  	 	<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Giao hàng nhanh và miễn phí trả lại</span></li>
				  	 </ul>
				   </div>
				  <div class="clear"></div>
			 </div>
       	 </div>
       	 <div class="copy">
       	   <div class="wrap">
       	   	  <p>© All rights reserved | Template by: Vịnh, Vinh, Ân</p>
       	   </div>
       	 </div>
       </div>
</body>
</html>