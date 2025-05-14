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
            	<h1 class="mb-3 mt-5 bread">Keranjang</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span> <span>Keranjang</span></p>
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
						        <th>Produk</th>
						        <th>Harga</th>
						        <th>Jumlah</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
								<?php foreach($allProducts as $products) : ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="delete-product.php?id=<?php echo $products->id; ?>"><span class="icon-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $products->image; ?>);"></div></td>
						        
						        <td class="product-name">
						        	<h3><?php echo $products->name; ?></h3>
						        	<p><?php echo $products->description; ?></p>
						        </td>
						        
						        <td class="price">Rp<?php echo $products->price; ?></td>
						        
						        <td>
									<div class="input-group mb-3">
										<input disabled type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $products->quantity; ?>" min="1" max="100">
									 </div>
					            </td>
						        
						        <td class="total">Rp<?php echo $products->price * $products->quantity; ?></td>
						      </tr>
							<?php endforeach; ?>
						      
						    </tbody>
						  </table>
						  <?php else : ?>
							<p>Keranjang anda kosong, tambahkan produk</p>
							<?php endif; ?>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Total Pembelian</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>Rp<?php echo $allCartTotal->total; ?></span>
    					</p>
    					<p class="d-flex">
    						<span>Pengiriman</span>
    						<span>Rp20000</span>
    					</p>
    					<p class="d-flex">
    						<span>Diskon</span>
    						<span>Rp5000</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
							<?php if($allCartTotal->total > 0) : ?>
    						<span>Rp<?php echo $allCartTotal->total + 20000 - 5000; ?></span>
							<?php endif; ?>
    					</p>
    				</div>
					<form method="POST" action="cart.php">
					<input type="hidden" name="total_price" value="<?php echo $allCartTotal->total + 20000 - 5000; ?>">
					<?php if ($allCartTotal->total > 0) : ?>
    				<button style ="background-color: black;" name="checkout" type="submit" class="btn btn-primary py-3 px-4">Lanjutkan Ke Pembayaran</button>
					<?php endif; ?>
					</form>
    			</div>
    		</div>
			</div>
		</section>


	<?php require "../includes/footer.php"; ?>
