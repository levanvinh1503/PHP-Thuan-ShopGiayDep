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
				 <h1>Giỏ hàng của bạn</h1>
				 <div class="view-cart">
				 	<?php
				    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
					if(isset($_SESSION["products"]))
				    {
					    $total = 0;
						
						$cart_items = 0;
						foreach ($_SESSION["products"] as $cart_itm)
				        {
				           $product_code = $cart_itm["code"];
						   $results = $mysqli->query("SELECT * FROM sanpham WHERE MaSp='$product_code' LIMIT 1");
						   $obj = $results->fetch_object();
						   	echo '<form method="post" action="formthanhtoan.php?masp='.$product_code.'&soluong='.$cart_itm["qty"].'&dongia='.$obj->DonGia.'">';
							echo '<ul>';
						    echo '<li class="cart-itm">';
							echo '<span class="remove-itm"><a href="giohang_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
							echo '<div class="p-price">Giá:'.$obj->DonGia.'VNĐ</div>';
				            echo '<div class="product-info">';
							echo '<h3>TênSp:'.$obj->TenSanPham.' (MãSp:'.$product_code.')</h3> ';
				            echo '<div class="p-qty">Số lượng : '.$cart_itm["qty"].'</div>';
				            echo '<div></div>';
							echo '</div>';
				            echo '</li>';
							$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
							$total = ($total + $subtotal);

							echo '<input type="hidden" name="item_name['.$cart_items.']" value="'.$obj->TenSanPham.'" />';
							echo '<input type="hidden" name="item_code['.$cart_items.']" value="'.$product_code.'" />';
							echo '<input type="hidden" name="item_qty['.$cart_items.']" value="'.$cart_itm["qty"].'" />';
							$cart_items ++;
							
				        }
				    	echo '</ul>';
						echo '<span class="check-out-txt">';
						echo '<strong>Tổng cộng : '.$total.'VNĐ</strong>  ';
						echo '</span><br>';
						echo '<span style="margin-right:5px;" class="empty-cart"><button class="btn btn-info" id="thanhtoan">Thanh toán</button></span>';
						echo '<span style="margin-right:5px;" class="empty-cart"><a href="khohang.php"<button class="btn btn-info">Mua sắm tiếp</button></a></span>';
						echo '</form>';
						
				    }else{
						echo '<p class="cart">Giỏ hàng của bạn hiện tại đang rỗng.<br>Vui lòng click <a href="khohang.php">tại đây</a> để tiếp tục mua sắm</p>';
					}
					
				    ?>
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