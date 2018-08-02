<!DOCTYPE HTML>
<html>
<head>
	<title>Super Start Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>     
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />		
</head>
<body>
  <div class="header-top">
	 <div class="wrap"> 
		<div class="logo">
			<a href="trangchu.php"><img src="" alt=""/></a>
	    </div>
	    <div class="search">	  
			<input type="text" name="s" class="search_input" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
			<input type="submit" value="Subscribe" id="submit" name="submit">
		</div>
		<div class="clear"></div>
 	</div>
   </div>
   <div class="header-bottom">
   	<div class="wrap">
   		<!-- start header menu -->
		<ul class="megamenu skyblue">
		    <li><a class="color1" href="trangchu.php">Home</a></li>
			<li><a href="qltaikhoan_nhanvien.php">Quản lý tài khoản</a></li> 
			<li><a href="khohang_nhanvien.php">Kho hàng</a></li> 
			<li><a href="hoadon.php">Hóa Đơn</a></li>
			<li><a href="trangchu.php">Welcome,....Đăng xuất</a></li>
		</ul>
		   <div class="clear"></div>
     	</div>
       </div>
       <div class="login">
         <div class="wrap">
     	    <div class="rsidebar span_1_of_left">
				<section  class="sky-form">
                   	  <h4>Thể loại</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<div class="col col-4">
									<label class="checkbox"><input type="radio" name="checkboxtheloai" checked=""><i></i>Tất cả</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="radio" name="checkboxtheloai"><i></i>Giày ba ta</label>
									<label class="checkbox"><input type="radio" name="checkboxtheloai"><i></i>Giày cao ghót</label>
									<label class="checkbox"><input type="radio" name="checkboxtheloai"><i></i>Giày quai sau</label>
									<label class="checkbox"><input type="radio" name="checkboxtheloai"><i></i>Giày thể thao</label>
									<label class="checkbox"><input type="radio" name="checkboxtheloai"><i></i>Khác</label>
								</div>
						    </div>
						</div>
				</section>
				<section  class="sky-form">
					 <h4>Nhãn hiệu</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<div class="col col-4">
									<label class="checkbox"><input type="radio" name="checkboxnhan" checked=""><i></i>Tất cả</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="radio" name="checkboxnhan"><i></i>Adidas</label>
									<label class="checkbox"><input type="radio" name="checkboxnhan"><i></i>Puma</label>
									<label class="checkbox"><input type="radio" name="checkboxnhan"><i></i>Bitis</label>
									<label class="checkbox"><input type="radio" name="checkboxnhan"><i></i>Nike</label>
								</div>
						    </div>
						</div>
				</section>
		       <section  class="sky-form">
					<h4>Size</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkboxsize" checked=""><i></i>Tất cả</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkboxsize"><i></i>34-36</label>
								<label class="checkbox"><input type="radio" name="checkboxsize"><i></i>36-38</label>
								<label class="checkbox"><input type="radio" name="checkboxsize"><i></i>38-40</label>
								<label class="checkbox"><input type="radio" name="checkboxsize" ><i></i>40-42</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Giá bán</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkboxgia" checked=""><i></i>Tất cả</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkboxgia"><i></i>$50</label>
								<label class="checkbox"><input type="radio" name="checkboxgia"><i></i>$100</label>
								<label class="checkbox"><input type="radio" name="checkboxgia"><i></i>$200</label>
								<label class="checkbox"><input type="radio" name="checkboxgia"><i></i>$300</label>
								<label class="checkbox"><input type="radio" name="checkboxgia"><i></i>$400</label>
							</div>
						</div>
		       </section>
		       <section  class="sky-form">
					<h4>Màu sắc</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkboxmau" checked=""><i></i>Tất cả</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="radio" name="checkboxmau"><i></i>Đỏ</label>
								<label class="checkbox"><input type="radio" name="checkboxmau"><i></i>Xanh lá</label>
								<label class="checkbox"><input type="radio" name="checkboxmau"><i></i>Đen</label>
								<label class="checkbox"><input type="radio" name="checkboxmau"><i></i>Trắng</label>
								<label class="checkbox"><input type="radio" name="checkboxmau"><i></i>Nâu</label>
							</div>
						</div>
		       </section>
		</div>
		<div class="cont span_2_of_3">
		  <div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		           	<div style="float: left;">
			            <label>Theo: </label>
			            <select>
			            	<option value="">Mặc định</option>
							<option value="">Giá</option>
			                <option value="">Loại sản phẩm</option>
			                <option value="">Size</option>
			            </select>
			        </div>
		            <div style="float: right;">
			            <label>Sắp xếp: </label>
			            <select>
			                <option value="">Mặc định</option>
			                <option value="">Cao đến thấp</option>
			                <option value="">Thấp đến cao</option>
			            </select>
			            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
			        </div>
               </div>
    		</div>
	          <div class="pager">
	       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
				    <li><a class="previous">Pages: </a></li>
				    <li><a href="#">1</a></li>
				    <li><a href="#">2</a></li>
			  	</ul>
		   		<div class="clear"></div>
	    	</div>
     	    <div class="clear"></div>
	       </div>
			    <div class="box1">
				   <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic11.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£480</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic10.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£481</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic9.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£482</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
				 <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic3.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£483</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic4.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£484</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic5.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£485</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
				    <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic6.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£486</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic7.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£487</div>
					   </div>
					    </div>
						<ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic8.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£488</div>
					   </div>
					    </div>
						<ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
			  </div>
			  <div class="box1">
				   <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic2.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£489</div>
					   </div>
					    </div>
						<ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Thêm vào giỏ hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				    <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic1.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£490</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Add To Bag hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				   <div class="col_1_of_single1 span_1_of_single1"><a href="xemchitiet.php">
				     <div class="view1 view-fifth1">
				  	  <div class="top_box">
				         <div class="grid_img">
						   <div class="css3"><img src="images/pic.jpg" alt=""/></div>
					          <div class="mask1">
	                       		<div class="info">Xem chi tiết</div>
			                  </div>
	                    </div>
                       <div class="price">£491</div>
					   </div>
					    </div>
						 <ul class="list2">
						  <li>
						  	<img src="images/plus.png" alt=""/>
						  	<ul class="icon1 sub-icon1 profile_img">
							  <li><a class="active-icon c1" href="#">Add To Bag</a>
								<ul class="sub-icon1 list">
									<li><h3>Add To Bag hàng</h3><a href=""></a></li>
									<li><p>Click để thêm sản phẩm vào giỏ hàng</p></li>
								</ul>
							  </li>
							 </ul>
						   </li>
					     </ul>
			    	    <div class="clear"></div>
			    	</a></div>
				  <div class="clear"></div>
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
       </div>
</body>
</html>