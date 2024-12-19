<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php 

	$products = $conn->query("SELECT * FROM products WHERE type='drink'");
	$products->execute();

	$allProducts = $products->fetchAll(PDO::FETCH_OBJ);


	$reviews = $conn->query("SELECT * FROM reviews");
	$reviews->execute();

	$allReviews = $reviews->fetchAll(PDO::FETCH_OBJ);


?>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Chào Mừng Đến với SaltMate</span>
              <h1 class="mb-4">Trải Nghiệm Cà Phê Tốt Nhất</h1>
              <p class="mb-4 mb-md-5">Hãy đến Saltmate để thưởng thức những ly cà phê được pha chế tỉ mỉ, mang đến hương vị đậm đà và sự thư giãn tuyệt vời, đảm bảo mang lại trải nghiệm cà phê hoàn hảo nhất cho bạn.</p></p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt Hàng Ngay</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Chào Mừng Đến với SaltMate</span>
              <h1 class="mb-4">Hương Vị Tuyệt Vời & Không Gian Thư Giãn</h1>
              <p class="mb-4 mb-md-5">Tại Saltmate, bạn không chỉ thưởng thức những món đồ uống ngon miệng mà còn tận hưởng không gian ấm cúng, đẹp mắt, lý tưởng để thư giãn và tận hưởng từng khoảnh khắc.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt Hàng Ngay</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Chào Mừng Đến với SaltMate</span>
              <h1 class="mb-4">Thơm Ngậy , Nóng Hổi Và Sẵn Sàng Phục Vụ</h1>
              <p class="mb-4 mb-md-5">Mỗi ly cà phê của Saltmate đều được pha chế tỉ mỉ, mang đến hương vị ngậy béo, nóng hổi, sẵn sàng phục vụ bạn ngay lập tức để trải nghiệm trọn vẹn nhất.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt Hàng Ngay</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>1900 9999</h3>
	    						<p>Liên hệ với Hotline của chúng tôi để nhận được sự phục vụ trọn vẹn, tận tâm đối với quý khách hàng.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>248A Yên Hoa, Yên Phụ, Tây Hồ, Hà Nội.</h3>
	    						<p>	Địa điểm lí tưởng ven Hồ Tây mang lại trải nghiệm hài lòng nhất với khách hàng.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Giờ mở cửa: Thứ 2-Chủ Nhật</h3>
	    						<p>8:00am - 23:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Đặt bàn </h3>
	    			<form action="booking/book.php" method="POST" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" name="first_name" class="form-control" placeholder="Họ và Tên đệm">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" name="last_name" class="form-control" placeholder="Tên">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input name="date" type="text" class="form-control appointment_date" placeholder="Ngày">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input name="time" type="text" class="form-control appointment_time" placeholder="Thời gian">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input name="phone" type="text" class="form-control" placeholder="Số điện thoại">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Ghi chú"></textarea>
		            </div>
					<?php if(isset($_SESSION['user_id'])) : ?>
						<div class="form-group ml-md-4">
							<button type="submit" name="submit" class="btn btn-white py-3 px-4">Đặt bàn</button>
						</div>
					<?php else : ?>
						<p class="text-white">Đăng nhập để đặt bàn</p>	
					<?php endif; ?>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Khám phá</span>
	          <h2 class="mb-4">Câu chuyện của SaltMate</h2>
	        </div>
	        <div>
	  				<p>Saltmate ra đời từ niềm đam mê với hương vị cà phê và mong muốn tạo nên một không gian kết nối mọi người. Từng ly cà phê tại đây được chăm chút tỉ mỉ, mang theo câu chuyện về sự tận tâm và sẻ chia, nơi bạn tìm thấy hương vị thân quen giữa nhịp sống hối hả.</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-choices"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Đơn giản Đặt hàng</h3>
                <p>Quá trình đặt hàng tại Saltmate cực kỳ đơn giản, chỉ cần vài thao tác bạn đã có ngay ly cà phê yêu thích.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-delivery-truck"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Giao hàng nhanh chóng</h3>
                <p>Dịch vụ giao hàng của chúng tôi nhanh chóng, đảm bảo cà phê luôn đến tay bạn trong tình trạng nóng hổi, thơm ngon.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-coffee-bean"></span></div>
              <div class="media-body">
                <h3 class="heading">Cà phê chất lượng</h3>
                <p>Mỗi ly cà phê tại Saltmate đều được chế biến từ những hạt cà phê cao cấp, mang đến hương vị đậm đà, hoàn hảo trong từng ngụm cà phê.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Khám phá</span>
	            <h2 class="mb-4">Menu của SaltMate</h2>
	            <p class="mb-4">Từ những ly cà phê đậm đà, trà thanh mát đến các món bánh ngọt tinh tế, Saltmate mang đến thực đơn đa dạng đáp ứng mọi sở thích. Hãy cùng chúng tôi khám phá hương vị tuyệt vời được chế biến từ những nguyên liệu tươi ngon nhất!</p>
	            <p><a href="menu.php" class="btn btn-primary btn-outline-primary px-4 py-3">Xem Chi Tiết Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/drink-7.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/drink-9.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Cơ Sở SaltMate</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Giải Thưởng</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Khách Hàng Hài Lòng</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Nhân Sự</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Khám Phá</span>
            <h2 class="mb-4">best sellers!!!</h2>
            <p>Khám phá những món đồ uống được yêu thích nhất tại Saltmate, luôn sẵn sàng mang đến trải nghiệm tuyệt vời cho bạn!</p>
          </div>
        </div>
        <div class="row">
			<?php foreach($allProducts as $prodcut) : ?>
				<div class="col-md-3">
					<div class="menu-entry">
							<a target="_blank" href="products/product-single.php?id=<?php echo $prodcut->id; ?>" class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $prodcut->image; ?>);"></a>
							<div class="text text-center pt-4">
								<h3><a href="#"><?php echo $prodcut->name; ?></a></h3>
								<p><?php echo $prodcut->description; ?></p>
								<p class="price"><span>$<?php echo $prodcut->price; ?></span></p>
								<p><a target="_blank" href="products/product-single.php?id=<?php echo $prodcut->id; ?>" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p>
							</div>
						</div>

				</div>
			<?php endforeach; ?>
        	
        </div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Cảm Nhận Khách Hàng</span>
	          <h2 class="mb-4">Khách hàng của SaltMate nói gì?</h2>
	          <p>Saltmate tự hào khi trở thành điểm đến yêu thích của mọi người. Những lời chia sẻ chân thật từ khách hàng là động lực để chúng tôi không ngừng mang đến trải nghiệm tốt nhất.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
			<?php foreach($allReviews as $review) : ?>
	        <div class="col-md-3 align-self-sm-end ftco-animate">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;<?php echo $review->review; ?>.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	              
	                <div class="name align-self-center"><?php echo $review->username; ?></div>
	              </div>
	          </div>
	        </div>
			<?php endforeach;  ?>
	       
	      </div>
	    </div>
	  </section>

<?php require "includes/footer.php"; ?>   

		
	

   