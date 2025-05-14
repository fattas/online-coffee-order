<?php require "../layouts/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php

  if(!isset($_SESSION['admin_name'])) {
    header("location:".ADMINURL."/admins/login-admins.php");
  }

  $products = $conn->query("SELECT * FROM products");
  $products->execute();

  $allProducts = $products->fetchAll(PDO::FETCH_OBJ);

?>
          <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Produk</h5>
              <a  href="create-products.php" class="btn btn-primary mb-4 text-center float-right">Buat Produk</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Harga (Pcs)</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allProducts as $products) : ?>
                    <tr>
                      <th scope="row"><?php echo $products->id; ?></th>
                      <td><?php echo $products->name; ?></td>
                      <td><img src="images/<?php echo $products->image; ?>" style="width: 60px; height: 60px"></td>
                      <td>Rp<?php echo $products->price; ?></td>
                      <td><?php echo $products->type; ?></td>
                      <td><a href="delete-products.php?id=<?php echo $products->id; ?>" class="btn btn-danger  text-center ">Hapus</a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



<?php require "../layouts/footer.php"; ?>