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
	<link rel="stylesheet" type="text/css" href="css/formdangnhap.css">
	<link rel="stylesheet" type="text/css" href="css/formdangky.css">
	<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).php();
                $(".dropdown dt a span").php(text);
                $(".dropdown dd ul").hide();
                $("#result").php("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").php();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
	<!-- start menu -->     
	<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />

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
     	</div>
       </div>
       
       <div class="index-banner">
       	  <div class="wmuSlider example1" style="height: 560px;">
			  <div class="wmuSliderWrapper">
			  	<?php
					$dbhost = 'localhost:3307';
					$dbuser = 'root';
					$dbpass = '12345678';
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
							   
					$sql = 'SELECT * FROM bannel';
					mysql_select_db('shopgiaydep');
					mysql_query("SET NAMES 'utf8'");
					$retval = mysql_query( $sql, $conn );
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
					{
					?>
							<article style="position: relative; width: 100%; opacity: 1;"> 
							  <div class="banner-wrap">
								  <div class="slider-left">
								<img src="<?php echo "{$row['Hinh']}"; ?>" alt=""/> 
							</div>
								<div class="slider-right">
									  <h1><?php echo "{$row['TenBannel']}"; ?></h1>
									  <h2><?php echo "{$row['MauSac']}"; ?></h2>
									  <p><?php echo "{$row['TomTat']}"; ?></p>
									  <div class="btn"><a href="khohang.php">Mua</a></div>
								</div>
								<div class="clear"></div>
							</div>
						</article>
					<?php 
					}
						mysql_close($conn);
				?>
				</div>
                <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a>
                <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                  </ul>
                 <a class="wmuSliderPrev">Previous</a><a class="wmuSliderNext">Next</a><ul class="wmuSliderPagination"><li><a href="#" class="wmuActive">0</a></li><li><a href="#" class="">1</a></li></ul></div>
            	 <script src="js/jquery.wmuSlider.js"></script> 
				 <script type="text/javascript" src="js/modernizr.custom.min.js"></script> 
						<script>
       						 $('.example1').wmuSlider();         
   						</script> 	           	      
             </div>
             <div class="main">
                <div class="wrap">
				  	<div class="content-bottom">
				  	<h2>Các mặt hàng bán chạy: </h2>
				   		<div class="box1">
				   			<?php
							   $dbhost = 'localhost:3307';
							   $dbuser = 'root';
							   $dbpass = '12345678';
							   
							   $conn = mysql_connect($dbhost, $dbuser, $dbpass);	
							   $sql = 'SELECT * FROM sanpham inner join hoadon on sanpham.MaSp=hoadon.MaSp where hoadon.SoLuong>=20';
							   mysql_select_db('shopgiaydep');
							   mysql_query("SET NAMES 'utf8'"); 
							   $retval = mysql_query( $sql, $conn );
							   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
							   {
							   ?>
							   		<div class="col_1_of_3 span_1_of_3"><a href="khohang.php">
						     			<div class="view view-fifth">
						  	  				<div class="top_box">
						         				<div class="grid_img">
								   					<div class="css3"><img src="<?php echo "{$row['HinhAnh']}"; ?>" alt=""/></div>
							          				<div class="mask">
			                       						<div class="info">Xem Chi Tiết</div>
					                  				</div>
			                    				</div>
		                       					<div class="price"><?php echo "{$row['MaSp']}";?></div>
							   				</div>
							    		</div>
					    	    		<div class="clear"></div>
					    				</a></div>
					    	<?php
							   }
							   mysql_close($conn);
							?>
				  				<div class="clear"></div>
			  			</div>
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
       <div class="login" id="login-box">
			<h2>Đăng nhập</h2>
		 	<a class="close" href="#"><img class="img-close" title="Close Window" alt="Close" src="images/close.jpg" width="30px" height="15px" /></a>
			<form class="login-content" action="login.php" method="post">
				<label class="username">
				<span>Tên đăng nhập:</span>
				<input id="inputUsername" type="text" autocomplete="on" name="username" placeholder="Username" value="" />
				</label>
				<label class="Password">
				<span>Mật khẩu: </span>
				<input id="inputPassword" type="password" name="password" placeholder="Password" value="" />
				</label>
				<button class="button submit-button" name="btn_submit" type="submit" id="login">Đăng nhập</button>
			 	<a class="forgot" href="#">Quên mật khẩu?</a>
			 </form>
		</div>
		 <script type="text/javascript">
		 	$(document).ready(function() {
			    $('a.login-window').click(function() {
			        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
			        var loginBox = $(this).attr('href');
			 
			        //cho hiện hộp đăng nhập trong 300ms
			        $(loginBox).fadeIn(300);
			 
			        // thêm phần tử id="over" vào sau body
			        $('body').append('<div id="over">');
			        $('#over').fadeIn(300);
			 
			        return false;
			 	});
			 
		 // khi click đóng hộp thoại
			 	$(document).on('click', "a.close, #over", function() {
			       $('#over, .login').fadeOut(300 , function() {
			           $('#over').remove();
			       });
			      return false;	
			 	});
			});
		 </script>
		 <div class="register" id="register-box">
			<h2>Đăng ký</h2>
		 	<a class="close" href="#"><img class="img-close" title="Close Window" alt="Close" src="images/close.jpg" width="30px" height="15px" /></a>
			<form class="register-content" action="register.php" method="post">
				<label class="username">
				<span>Tên đăng nhập</span>
				<input id="username" type="text" autocomplete="on" name="username" placeholder="Username" value="" />
				</label>
				<label class="Password">
				<span>Mật khẩu</span>
				<input id="password" type="password" name="password" placeholder="Password" value="" />
				</label>
				<label class="verify_password">
				<span>Nhập lại mật khẩu:</span>
				<input id="verify_password" type="password" autocomplete="on" name="verify_password" placeholder="Nhập lại Password" value="" />
				</label>
				<label class="email">
				<span>Email:</span>
				<input id="email" type="text" autocomplete="on" name="email" placeholder="Email" value="" />
				</label>
				<label class="sdt">
				<span>Số điện thoại: </span>
				<input id="sdt" type="text" autocomplete="on" name="sdt" placeholder="Số điện thoại" value="" />
				</label>
				<div>
					<div style="float: left; margin-right: 10px;"><button class="btn btn-info" name="btn_submit" type="submit">Đăng Ký</button></div>
					<div style="float: left;"><a class="close"><button class="btn btn" type="submit">Hủy</button></a></div>
				</div>
			 </form>
		 </div>
	 <script type="text/javascript">
	 	$(document).ready(function() {
		    $('a.register-window').click(function() {
		        //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
		        var loginBox = $(this).attr('href');
		 
		        //cho hiện hộp đăng nhập trong 300ms
		        $(loginBox).fadeIn(300);
		 
		        // thêm phần tử id="over" vào sau body
		        $('body').append('<div id="over">');
		        $('#over').fadeIn(300);
		 
		        return false;
		 	});
		 
	 // khi click đóng hộp thoại
		 	$(document).on('click', "a.close, #over", function() {
		       $('#over, .register').fadeOut(300 , function() {
		           $('#over').remove();
		       });
		      return false;	
		 	});
		});
	 </script>
</body>
</html>