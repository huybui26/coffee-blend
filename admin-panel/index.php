<?php require "layouts/header.php"; ?>    
<?php require "../config/config.php"; ?>    
<?php 


  if(!isset($_SESSION['admin_name'])) {
    header("location: ".ADMINURL."/admins/login-admins.php");
  }

  //sản phẩm
  $products = $conn->query("SELECT COUNT(*) AS count_products FROM products");
  $products->execute();

  $productsCount = $products->fetch(PDO::FETCH_OBJ);


    //đơn hàng
  $orders = $conn->query("SELECT COUNT(*) AS count_orders FROM orders");
  $orders->execute();
  
  $ordersCount = $orders->fetch(PDO::FETCH_OBJ);


      //đặt bàn
  $bookings = $conn->query("SELECT COUNT(*) AS count_bookings FROM bookings");
  $bookings->execute();

  $bookingsCount = $bookings->fetch(PDO::FETCH_OBJ);


    //admins
    $admins = $conn->query("SELECT COUNT(*) AS count_admins FROM admins");
    $admins->execute();
  
    $adminsCount = $admins->fetch(PDO::FETCH_OBJ);


?>
            
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sản phẩm</h5>
              <p class="card-text">Số lượng sản phẩm: <?php echo $productsCount->count_products; ?></p>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Đơn hàng</h5>
              
              <p class="card-text">Số lượng đơn hàng: <?php echo $ordersCount->count_orders; ?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Đặt bàn</h5>
              
              <p class="card-text">Số lượng đặt bàn: <?php echo $bookingsCount->count_bookings; ?></p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              
              <p class="card-text">Số lượng admins: <?php echo $adminsCount->count_admins; ?></p>
              
            </div>
          </div>
        </div>
      </div>
   
<?php require "layouts/footer.php"; ?>    
