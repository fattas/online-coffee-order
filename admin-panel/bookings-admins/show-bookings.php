<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php

  if(!isset($_SESSION['admin_name'])) {
    header("location:".ADMINURL."/admins/login-admins.php");
  }

  $bookings = $conn->query("SELECT * FROM bookings");
  $bookings->execute();

  $allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);

?>
       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Reservasi</h5>
            
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Pesan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ubah Status</th>
                    <th scope="col">Dibuat</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allBookings as $bookings) : ?>
                  <tr>
                    <th scope="row"><?php echo $bookings->id; ?></th>
                    <td><?php echo $bookings->first_name; ?></td>
                    <td><?php echo $bookings->last_name; ?></td>
                    <td><?php echo $bookings->date; ?> </td>
                    <td><?php echo $bookings->time; ?></td>
                    <td><?php echo $bookings->phone; ?></td>
                    <td><?php echo $bookings->message; ?></td>
                    <td><?php echo $bookings->status; ?></td>
                    <td><a href="change-status.php?id=<?php echo $bookings->id; ?>" class="btn btn-warning text-white text-center ">Ubah Status</a></td>

                    <td><?php echo $bookings->created_at; ?></td>
                     <td><a href="delete-bookings.php?id=<?php echo $bookings->id; ?>" class="btn btn-danger  text-center ">Hapus</a></td>
                  </tr>
                  <?php endforeach; ?>

                 
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>

      <?php require "../layouts/footer.php"; ?>

  