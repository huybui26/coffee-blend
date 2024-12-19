<?php require "../layouts/header.php"; ?>    
<?php require "../../config/config.php"; ?> 
<?php 

  if(!isset($_SESSION['admin_name'])) {
    header("location: ".ADMINURL."/admins/login-admins.php");
  }
  
  $orders = $conn->query("SELECT * FROM orders");
  $orders->execute();

  $allOrders = $orders->fetchAll(PDO::FETCH_OBJ);

?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Đơn hàng</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Thành phố</th>
                    <th scope="col">Quốc Gia</th>
                    <th scope="col">Mã zip code</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Tổng hóa đơn</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Cập nhật</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allOrders as $order) : ?>
                  <tr>
                    <td><?php echo $order->first_name; ?></td>
                    <td><?php echo $order->town; ?></td>
                    <td><?php echo $order->state; ?></td>
                    <td>
                    <?php echo $order->zip_code; ?>
                    </td>
                    <td><?php echo $order->phone; ?></td>
                    <td>
                    <?php echo $order->street_address; ?>
                    </td>
                    <td>$<?php echo $order->total_price; ?></td>

                    <td><?php echo $order->status; ?></td>
                    <td><a href="change-status.php?id=<?php echo $order->id; ?>" class="btn btn-warning  text-white text-center ">Cập nhật</a></td>
                    <td><a href="delete-orders.php?id=<?php echo $order->id; ?>" class="btn btn-danger  text-center ">Xóa</a></td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
<?php require "../layouts/footer.php"; ?>    
