
<?php require "../layouts/header.php"; ?>    
<?php require "../../config/config.php"; ?> 
<?php 

  if(!isset($_SESSION['admin_name'])) {
    header("location: ".ADMINURL."/admins/login-admins.php");
  }

  if(isset($_GET['id'])) {

    $id = $_GET['id'];


    if(isset($_POST['submit'])) {

        if(empty($_POST['status'])) {
          echo "<script>alert('có nhiều hơn 1 ô nhập đang bị để trống');</script>";
        } else {
          $status = $_POST['status'];
         
    
          $update = $conn->prepare("UPDATE orders SET status = :status WHERE id='$id'");
    
          $update->execute([
            ":status" => $status,
            
          ]);
    
          header("location: show-orders.php");
          
          
    
        }
      }
  }
 

?>
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Cập nhật trạng thái</h5>
          <form method="POST" action="change-status.php?id=<?php echo $id; ?>">
                <div class="form-outline mb-4 mt-4">

                  <select name="status" class="form-select  form-control" aria-label="Default select example">
                    <option selected>Chọn trạng thái</option>
                    <option value="Đang chờ">Đang chờ</option>
                    <option value="Đã giao">Đã giao</option>
                  </select>
                </div>
               
            
                
              


                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Cập nhật</button>

          
              </form>

            </div>
          </div>
        </div>
      </div>
<?php require "../layouts/footer.php"; ?>    
