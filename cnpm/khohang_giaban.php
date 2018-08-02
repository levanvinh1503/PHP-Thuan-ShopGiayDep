<?php
	session_start();
	include_once("connection.php");
	$giaban=$_GET['giaban'];
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Super Start Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>-->
	<script type="text/javascript" src="js/jquery.min.js"></script>
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
       <<div class="login">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left">
     	    	<section  class="sky-form">
     	    		<label class="checkbox"><input type="radio" name="checkboxboloc" id='reset'><i></i>Bỏ lọc</label>
     	    		<script type="text/javascript">
						$(document).ready(function(){
						    $("#reset").click(function () {
						  		$('input:radio[name=checkbox]').attr('checked',false);
						  		window.location.href="khohang.php";
						    });
						});
					</script>
     	    	</section>
				<section  class="sky-form">
                   	  <h4>Thể loại</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<div class="col col-4">
									<label class="checkbox"><input id='bata' type="radio" name="checkbox" value="01N"><i></i>Giày Bata</label>
									<label class="checkbox"><input id='caogot' type="radio" name="checkbox" value="02N"><i></i>Giày cao gót</label>
									<label class="checkbox"><input id='quaisau' type="radio" name="checkbox" value="03N"><i></i>Giày tây nam</label>
									<label class="checkbox"><input id='thethao' type="radio" name="checkbox" value="04N"><i></i>Giày thể thao</label>
								</div>
						    </div>
						</div>
						<script type="text/javascript">
						$(document).ready(function(){
						 // Lấy giá trị của radio checked
						    $("#bata").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_loaisp.php?loaisp="+a+"";
						    });
						    $("#caogot").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_loaisp.php?loaisp="+a+"";
						    });
						    $("#quaisau").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_loaisp.php?loaisp="+a+"";
						    });
						    $("#thethao").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_loaisp.php?loaisp="+a+"";
						    });
						});
						</script>
				</section>
				<section  class="sky-form">
					 <h4>Nhãn hiệu</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<div class="col col-4">
									<label class="checkbox"><input id='addidas' type="radio" name="checkbox" value="Add"><i></i>Addidas</label>
									<label class="checkbox"><input id='btis' type="radio" name="checkbox" value="Bs"><i></i>Bitis</label>
									<label class="checkbox"><input id='da' type="radio" name="checkbox" value="DA"><i></i>D A</label>
									<label class="checkbox"><input id='native' type="radio" name="checkbox" value="Na"><i></i>Native</label>
									<label class="checkbox"><input id='puma' type="radio" name="checkbox" value="Pm"><i></i>Puma</label>
								</div>
						    </div>
						</div>
						<script type="text/javascript">
						$(document).ready(function(){
						 // Lấy giá trị của radio checked
						    $("#addidas").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_nhanhieu.php?tenncc="+a+"";
						    });
						    $("#btis").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_nhanhieu.php?tenncc="+a+"";
						    });
						    $("#da").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_nhanhieu.php?tenncc="+a+"";
						    });
						    $("#native").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_nhanhieu.php?tenncc="+a+"";
						    });
						    $("#puma").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_nhanhieu.php?tenncc="+a+"";
						    });
						});
						</script>
				</section>
		       <section  class="sky-form">
					<h4>Size</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input id='size30' type="radio" name="checkbox" value="30"><i></i>30-34</label>
								<label class="checkbox"><input id='size32' type="radio" name="checkbox" value="34"><i></i>34-38</label>
								<label class="checkbox"><input id='size34' type="radio" name="checkbox" value="38"><i></i>38-42</label>
							</div>
						</div>
					<script type="text/javascript">
						$(document).ready(function(){
						 // Lấy giá trị của radio checked
						    $("#size30").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_size.php?size="+a+"";
						    });
						    $("#size32").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_size.php?size="+a+"";
						    });
						    $("#size34").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_size.php?size="+a+"";
						    });
						});
						</script>
				</section>
		       <section  class="sky-form">
					<h4>Giá bán</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input id='50k' type="radio" name="checkbox" value="50000"><i></i>50000</label>
								<label class="checkbox"><input id='100k' type="radio" name="checkbox" value="100000"><i></i>100000</label>
								<label class="checkbox"><input id='200k' type="radio" name="checkbox" value="200000"><i></i>200000</label>
								<label class="checkbox"><input id='300k' type="radio" name="checkbox" value="300000"><i></i>300000</label>
							</div>
						</div>
						<script type="text/javascript">
						$(document).ready(function(){
						 // Lấy giá trị của radio checked
						    $("#50k").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_giaban.php?giaban="+a+"";
						    });
						    $("#100k").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_giaban.php?giaban="+a+"";
						    });
						    $("#200k").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_giaban.php?giaban="+a+"";
						    });
						    $("#300k").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_giaban.php?giaban="+a+"";
						    });
						});
						</script>
		       </section>
		       <section  class="sky-form">
                   	  <h4>Loại khách hàng sử dụng</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<div class="col col-4">
									<label class="checkbox"><input id='nam' type="radio" name="checkbox" value="1"><i></i>Nam</label>
									<label class="checkbox"><input id='nu' type="radio" name="checkbox" value="2"><i></i>Nữ</label>
								</div>
						    </div>
						</div>
						<script type="text/javascript">
						$(document).ready(function(){
						 // Lấy giá trị của radio checked
						    $("#nam").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_loaikh.php?maloaikh="+a+"";
						    });
						    $("#nu").click(function () {
						    	var a=$('input:radio[name=checkbox]:checked').val();
						    	$('input:radio[name=checkboxboloc]').attr('checked',false);
						     	
						     	window.location.href="khohang_loaikh.php?maloaikh="+a+"";
						    });
						});
						</script>
				</section>
		</div>
		<div class="cont span_2_of_3">
		  <div class="mens-toolbar">
    		<!--
	          	<div class="pager">
		       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
					    <li><a class="previous">Pages: </a></li>
					    //<?php
					    	//$dbhost = 'localhost:3307';
							//$dbuser = 'root';
							//$dbpass = '12345678';
											   
							//$conn = //mysql_connect($dbhost, $dbuser, $dbpass);
											   
							//$sql = 'SELECT * FROM sanpham';
							//mysql_select_db('shopgiaydep');
							//mysql_query("SET NAMES 'utf8'"); 
							//$retval = //mysql_query( $sql, $conn );
							//$baitren_mottrang = //15;
							//$sodu_lieu = //mysql_num_rows($retval) or die(mysql_error());
							//$sotrang = $sodu_lieu/$baitren_mottrang;
							//$result =//mysql_query("SELECT * FROM sanpham ORDER BY MaSp DESC  LIMIT {$page}*{$baitren_mottrang},{$baitren_mottrang} //") or die(mysql_error()); 
							//for ( $page = 1; $page <= $sotrang; $page ++ )
							//{
							//echo "<li><a href='index.php?page={$page}'>{$page}</a></li>";
							//}
						//?>
				  	</ul>
		   		<div class="clear"></div>
	    	</div>-->
	       </div>
			    <div class="box1">
				  	<div class="col-md-8">
				   	<?php
					    
						$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
					    
						$results = $mysqli->query("SELECT * FROM sanpham inner join ncc on sanpham.MaNCC=ncc.MaNCC where DonGia=$giaban");
					    if ($results) { 
					        while($obj = $results->fetch_object())
					        {

					        	echo '<div class="col_1_of_3 span_1_of_3">';
					            	echo '<form method="post" action="giohang_update.php">';
										echo '<div class="view view-fifth">';
											echo '<div class="top_box">';
												echo '<div class="grid_img">';
													echo '<div class="css3"><img src="'.$obj->HinhAnh.'"></div>';
													echo '<div class="mask"></div>';
					            					echo '<div class="price" style="text-align: left; font-size: 10px;">MãSp:'.$obj->MaSp.'</div>';
													echo '<div class="price" style="text-align: left; font-size: 10px;">TênSp: '.$obj->TenSanPham.'</div>';
													echo '<div class="price" style="text-align: left; font-size: 10px;">Hãng: '.$obj->TenNCC.'</div>';
													echo '<div class="price" style="text-align: left; font-size: 10px;">Size: '.$obj->Size.'</div>';
													echo '<div class="price" style="text-align: left; font-size: 10px;">Giá: '.$obj->DonGia.'VNĐ</div>';
													echo '<div class="price" style="text-align: left; font-size: 10px;">Số lượng: <input type="text" name="product_qty" value="1" size=2 /></div><br>';
													echo '<div><button class="btn btn-info" >Add To Cart</button></div>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
					            		echo '<input type="hidden" name="product_code" value="'.$obj->MaSp.'" />';
					           			echo '<input type="hidden" name="type" value="add" />';
										echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
					            	echo '</form>';
					            echo '</div>';
					        }
					    
					    }
					?>
				  	<div class="clear"></div>
				  	</div>
				</div>
				  	<div class="col-md-4">
				  		<div class="shopping-cart col-md-12">
							<h2>Giỏ hàng</h2>
							<?php
							if(isset($_SESSION["products"]))
							{
							    $total = 0;
							    echo '<ol>';
							    foreach ($_SESSION["products"] as $cart_itm)
							    {
							        echo '<li class="cart-itm">';
							        echo '<span class="remove-itm"><a href="giohang_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
							        echo '<h3>'.$cart_itm["name"].'</h3>';
							        echo '<div class="p-code">Mã SP : '.$cart_itm["code"].'</div>';
							        echo '<div class="p-qty">Số lượng : '.$cart_itm["qty"].'</div>';
							        echo '<div class="p-price">Giá :'.$cart_itm["price"].'VNĐ</div>';
							        echo '</li>';
							        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
							        $total = ($total + $subtotal);
							    }
							    echo '</ol>';
							    echo '<span class="check-out-txt"><strong>Tổng cộng : '.$total.'VNĐ</strong></span><br>';
							    echo '<span style="margin-right:5px;"class="empty-cart"><a href="giohang.php"><button class="btn btn-info">Xem giỏ</button></a></span>';
								echo '<span class="empty-cart"><a href="giohang_update.php?emptycart=1&return_url='.$current_url.'"><button class="btn btn-info">Hủy bỏ</button></a></span>';
							}else{
							    echo 'Giỏ hàng đang trống';
							}
							?>
						</div>
				  	</div>
			 </div>
			  <div class="clear"></div>
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