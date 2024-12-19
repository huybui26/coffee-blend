<?php require "../layouts/header.php"; ?>    
<?php require "../../config/config.php"; ?> 
<?php 

  if(!isset($_SESSION['admin_name'])) {
    header("location: ".ADMINURL."/admins/login-admins.php");
  }
  
  $bookings = $conn->query("SELECT * FROM bookings");
  $bookings->execute();

  $allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);

?>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Bookings</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Họ</th>
                    <th scope="col">Ngày</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Sđt</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thay đổi trạng thái</th>
                    <th scope="col">Thời gian tạo</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allBookings as $booking) : ?>
                  <tr>
                    <th scope="row"><?php echo $booking->id; ?></th>
                    <td><?php echo $booking->first_name; ?></td>
                    <td><?php echo $booking->last_name; ?></td>
                    <td><?php echo $booking->date; ?> </td>
                    <td><?php echo $booking->time; ?></td>
                    <td><?php echo $booking->phone; ?></td>
                    <td>
                    <?php echo $booking->message; ?>
                    </td>
                    <td><?php echo $booking->status; ?></td>
                    <td><a href="change-status.php?id=<?php echo $booking->id; ?>" class="btn btn-warning  text-white text-center ">Cập nhật</a></td>

                    <td><?php echo $booking->created_at; ?></td>

                     <td><a href="delete-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-danger  text-center ">Xóa</a></td>
                  </tr>
                  <?php endforeach; ?>
                
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



 <?php require "../layouts/footer.php"; ?>    
