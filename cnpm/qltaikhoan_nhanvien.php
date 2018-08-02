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
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- end menu -->
<!-- top scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
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
		    <li><a class="color1" href="#"><span class="glyphicon glyphicon-home"> Home</span></a></li>
		    <li><a href="#"><span class="glyphicon glyphicon-user"> Quản lý tài khoản</span></a></li> 
			<li><a href="khohang_chushop.php"><span class="glyphicon glyphicon-list-alt"> Quản lý sản phẩm</span></a></li> 
			<li><a href="sukien.php"><span class="glyphicon glyphicon-gift"> Sự kiện</span></a></li>
			<li><a href="doanhthu.php"><span class="glyphicon glyphicon-list-alt"> Doanh thu</span></a></li>
			<li><a href="qlnhanvien.php"><span class="glyphicon glyphicon-list-alt">  Quản lý nhân viên</span></a></li>
			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out">Welcome, <?php echo $_SESSION['username']; ?>...Đăng xuất</span></a></li>
		</ul>
		   <div class="clear"></div>
     	</div>
       </div>
     	<div class="register_account">
          	<div class="wrap">
          	<h4 class="title">Thông tin tài khoản tài khoản</h4>
          		<form class="form">
          			<label>UserName: nhanvien</label><br>
          			<label>PassWord: ********</label><br>
          			<label>Email: n****@gmai.com</label><br>
          			<label>Sđt: 01222345345</label><br>
          			<button class="btn btn-info">Sửa thông tin</button>
          		</form>
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
			 <script type="text/javascript">
				$(document).ready(function() {
				
					var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
					};
					
					
					$().UItoTop({ easingType: 'easeOutQuart' });
					
				});
			</script>
			<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
       </div>
</body>
</html>