<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php

	$desserts = $conn->query("SELECT * FROM products WHERE type='dessert'");
	$desserts->execute();

	$allDesserts = $desserts->fetchAll(PDO::FETCH_OBJ);

	//grapping drinks
	$drinks = $conn->query("SELECT * FROM products WHERE type='drink'");
	$drinks->execute();

	$allDrinks = $drinks->fetchAll(PDO::FETCH_OBJ);


?>

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
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
	    						<h3>+62 812-3456-7890</h3>
	    						<p>Hubungi Kami untuk Layanan dan Bantuan Profesional Kapan Saja, Siap Melayani Anda.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>Jl. Ampera Raya No. 133</h3>
	    						<p>RT.05/RW.10, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Buka Setiap Hari</h3>
	    						<p>06:00 - 21:00 WIB</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Reservasi</h3>
	    			<form action="booking/book.php" method="POST" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input name= "first_name" type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input name="last_name" type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input name="date" type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input name="time" type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input name="phone" type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
					<?php if (isset($_SESSION['user_id'])) : ?>

		            <div class="form-group ml-md-4">
		              <input name="submit" type="submit" value="Book a Table" class="btn btn-white py-3 px-4">
		            </div>
					<?php else : ?>
						<p class="text-white" >Login untuk melakukan reservasi</p>
					<?php endif; ?>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        
        	
        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Makanan Penutup</h3>
				<?php foreach($allDesserts as $desserts) : ?>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $desserts->image; ?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?php echo $desserts->name; ?></span></h3>
	        				<span class="price">Rp<?php echo $desserts->price; ?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?php echo $desserts->description; ?></p>
	        			</div>
        			</div>
        		</div>
				<?php endforeach; ?>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Minuman</h3>
				<?php foreach($allDrinks as $drinks) : ?>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $drinks->image; ?>);"></div>
						<div class="desc pl-3">
							<div class="d-flex text align-items-center">
								<h3><span><?php echo $drinks->name; ?></span></h3>
								<span class="price">Rp<?php echo $drinks->price; ?></span>
							</div>
							<div class="d-block">
								<p><?php echo $drinks->description; ?></p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Ragam Hidangan</span>
            <h2 class="mb-4">Lezat dan Unik</h2>
            <p>Jelajahi Ragam Hidangan Lezat Lainnya yang Siap Memanjakan Lidah Anda dengan Kelezatan dan Keunikan Rasanya.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

		              <a class="nav-link active" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Minuman</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Makanan Penutup</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              

		              <div class="tab-pane fade show active" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
							<?php foreach($allDrinks as $drinks) : ?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="products/product-single.php?id=<?php echo $drinks->id; ?>" class="menu-img img mb-4" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $drinks->image; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="products/product-single.php?id=<?php echo $drinks->id; ?>"><?php echo $drinks->name; ?></a></h3>
		              					<p><?php echo $drinks->description; ?></p>
		              					<p class="price"><span>Rp<?php echo $drinks->price; ?></span></p>
		              					<p><a href="products/product-single.php?id=<?php echo $drinks->id; ?>" class="btn btn-primary btn-outline-primary">Lihat</a></p>
		              				</div>
		              			</div>
		              		</div>
							<?php endforeach; ?>
		              	
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
							<?php foreach($allDesserts as $desserts) : ?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="products/product-single.php?id=<?php echo $desserts->id; ?>" class="menu-img img mb-4" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $desserts->image; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="products/product-single.php?id=<?php echo $desserts->id; ?>"><?php echo $desserts->name; ?></a></h3>
		              					<p><?php echo $desserts->description; ?></p>
		              					<p class="price"><span>Rp<?php echo $desserts->price; ?></span></p>
		              					<p><a href="products/product-single.php?id=<?php echo $desserts->id; ?>" class="btn btn-primary btn-outline-primary">Lihat</a></p>
		              				</div>
		              			</div>
		              		</div>
							<?php endforeach; ?>
		              	
		              	</div>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

	<?php require "includes/footer.php"; ?>
