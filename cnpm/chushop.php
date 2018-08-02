<?php
	session_start();
	include_once("connection.php");
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
			<a href="chushop.php"><img src="images/logo.jpg" alt="logo" width="100px" height="50x" /></a>
	    </div>
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <li><a class="color1" href="chushop.php"><span class="glyphicon glyphicon-home"> Home</span></a></li>
		    <li><a href=""><span class="glyphicon glyphicon-user"> Quản lý tài khoản</span></a></li> 
			<li><a href="khohang_chushop.php"><span class="glyphicon glyphicon-list-alt"> Quản lý sản phẩm</span></a></li> 
			<li><a href="sukien.php"><span class="glyphicon glyphicon-gift"> Sự kiện</span></a></li>
			<li><a href="doanhthu.php"><span class="glyphicon glyphicon-list-alt"> Doanh thu</span></a></li>
			<li><a href="qlnhanvien_chushop.php"><span class="glyphicon glyphicon-list-alt">  Quản lý nhân viên</span></a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Welcome, <?php echo $_SESSION['username']; ?>...Đăng xuất</span></a></li>
		</ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="index-banner">
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
							   $sql = 'SELECT * FROM sanpham where SoLuong>=20';
							   mysql_select_db('shopgiaydep');
							   mysql_query("SET NAMES 'utf8'"); 
							   $retval = mysql_query( $sql, $conn );
							   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
							   {
							   ?>
							   		<div class="col_1_of_3 span_1_of_3"><a href="#">
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