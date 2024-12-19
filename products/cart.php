<?php require "../includes/header.php"; ?>
<?php require "../config/config.php"; ?>
<?php 

	if(!isset($_SESSION['user_id'])) {
		header("location: ".APPURL."");
	}
	
	$products = $conn->query("SELECT * FROM cart WHERE user_id='$_SESSION[user_id]'");
	$products->execute();

	$allProducts = $products->fetchAll(PDO::FETCH_OBJ);


	//cart total

	$cartTotal = $conn->query("SELECT SUM(quantity*price) AS total FROM cart WHERE user_id='$_SESSION[user_id]'");
	$cartTotal->execute();

	$allCartTotal = $cartTotal->fetch(PDO::FETCH_OBJ);


	//procced to checkout

	if(isset($_POST['checkout'])) {

		$_SESSION['total_price'] = $_POST['total_price'];

		header("location: checkout.php");
	}

?>

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?php echo APPURL; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Giỏ Hàng</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>">Trang Chủ</a></span> <span>Giỏ Hàng</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
						<?php if(count($allProducts) > 0) : ?>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Sản phẩm</th>
						        <th>Đơn giá</th>
						        <th>Số lượng</th>
						        <th>Thành tiền</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php foreach($allProducts as $product) : ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="delete-product.php?id=<?php echo $product->id; ?>"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $product->image; ?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $product->name; ?></h3>
						        	<p><?php echo $product->description; ?></p>
						        </td>
						        
						        <td class="price">$<?php echo $product->price; ?></td>
						        
						        <td>
									<div class="input-group mb-3">
										<input disabled type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $product->quantity; ?>" min="1" max="100">
									 </div>
					            </td>
						        
						        <td class="total">$<?php echo $product->price * $product->quantity; ?></td>
						      </tr>
							<?php endforeach; ?>		
						     
						    </tbody>
						</table>
						  <?php else : ?>
							<p>Giỏ hàng của bạn đang trống, hãy thêm sản phẩm!</p>
						  <?php endif; ?>	
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Tổng Thanh Toán</h3>
    					<p class="d-flex">
    						<span>Tổng Hóa Đơn</span>
    						<span>$<?php echo $allCartTotal->total; ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Phí Giao Hàng</span>
    						<span>$5</span>
    					</p>
    					<p class="d-flex">
    						<span>Giảm giá</span>
    						<span>$2</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
							<?php if($allCartTotal->total > 0) : ?>
    							<span>$<?php echo $allCartTotal->total + 5 - 2; ?></span>
							<?php endif; ?>
    					</p>
    				</div>
					<form method="POST" action="cart.php">
						<input type="hidden" name="total_price" value="<?php echo $allCartTotal->total + 5 - 2; ?>">
						<?php if($allCartTotal->total > 0) : ?>	
							<button style="    background-color: black;" name="checkout" type="submit" class="btn btn-primary py-3 px-5">Tiếp Tục Thanh Toán</button>
						<?php endif; ?>
					</form>
				  </div>
    			</div>
    		</div>
	</section>

  

<?php require "../includes/footer.php"; ?>
