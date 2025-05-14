<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php

  if(!isset($_SESSION['admin_name'])) {
    header("location:".ADMINURL."/admins/login-admins.php");
  }

  $orders = $conn->query("SELECT * FROM orders");
  $orders->execute();

  $allOrders = $orders->fetchAll(PDO::FETCH_OBJ);

?>

          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Pesanan</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Negara</th>
                    <th scope="col">Kode Pos</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ubah Status</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allOrders as $orders) : ?>
                  <tr>
                    <td><?php echo $orders->first_name; ?></td>
                    <td><?php echo $orders->last_name; ?></td>
                    <td><?php echo $orders->town; ?></td>
                    <td><?php echo $orders->state; ?></td>
                    <td>
                    <?php echo $orders->zip_code; ?>                     
                    </td>
                    <td><?php echo $orders->phone; ?></td>
                  <td>
                    <?php echo $orders->street_address; ?>
                 </td>
                    <td>Rp<?php echo $orders->total_price; ?></td>

                    <td><?php echo $orders->status; ?></td>
                    <td><a href="change-status.php?id=<?php echo $orders->id; ?>" class="btn btn-warning text-white text-center ">Update</a></td>
                    <td><a href="delete-orders.php?id=<?php echo $orders->id; ?>" class="btn btn-danger  text-center ">Hapus</a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
        <?php require "../layouts/footer.php"; ?>
