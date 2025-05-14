<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php

	$products = $conn->query("SELECT * FROM products WHERE type='drink'");
	$products->execute();

	$allProducts = $products->fetchAll(PDO::FETCH_OBJ);

	$reviews = $conn->query("SELECT * FROM reviews");
	$reviews->execute();

	$allReviews = $reviews->fetchAll(PDO::FETCH_OBJ);



?>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Halo, Teman</span>
              <h1 class="mb-4">Jelajahi Berbagai Produk Unggulan</h1>
              <p class="mb-4 mb-md-5">Temukan Ragam Produk Unggulan Kami yang Berkualitas Tinggi dan Menjanjikan.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan Sekarang</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Halo, Teman</span>
              <h1 class="mb-4">Temukan Pengalaman Terbaik yang Tidak Tertandingi</h1>
              <p class="mb-4 mb-md-5">Nikmati Pengalaman Tidak Tertandingi yang Memukau, Ciptakan Kenangan Tak Terlupakan Bersama Kami.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan Sekarang</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Halo, Teman</span>
              <h1 class="mb-4">Inovasi dan Sensasi yang Luar Biasa</h1>
              <p class="mb-4 mb-md-5">Terinspirasi oleh Inovasi, Temukan Sensasi Luar Biasa dalam Setiap Detik Bersama Kami.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Pesan Sekarang</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Lihat Menu</a></p>
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
		    					<input type="text" name="first_name" class="form-control" placeholder="Nama Depan">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" name="last_name" class="form-control" placeholder="Nama Belakang">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input name="date" type="text" class="form-control appointment_date" placeholder="Tanggal">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input name="time" type="text" class="form-control appointment_time" placeholder="Waktu">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input name="phone" type="text" class="form-control" placeholder="Telepon">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Pesan"></textarea>
		            </div>
					<?php if (isset($_SESSION['user_id'])) : ?>
		            <div class="form-group ml-md-4">
		              	<button type="submit" name="submit" class="btn btn-white py-3 px-4">Pesan Sekarang</button>
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

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Inilah</span>
	          <h2 class="mb-4">Cerita Kami</h2>
	        </div>
	        <div>
	  				<p>'FAS' adalah seseorang yang merasakan panggilan mendalam pada kopi, memulai FAS Coffee dengan semangat yang membara. Dari sebuah warung kecil di sudut kota, tempat itu dengan cepat menjadi favorit pecinta kopi lokal. Lebih dari sekadar menyajikan kopi, 'FAS' menciptakan pengalaman yang hangat dan ramah bagi setiap pelanggan. Seiring waktu berlalu, FAS Coffee berkembang menjadi pusat komunitas, tempat orang berkumpul untuk berbagi cerita dan kebahagiaan sambil menikmati kopi berkualitas. Dengan dedikasi yang tak kenal lelah dan kerja keras, FAS Coffee telah menjadi destinasi utama bagi para pecinta kopi di sekitarnya.</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-choices"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pemesanan Mudah</h3>
                <p>Pesan dengan Mudah dan Cepat, Nikmati Kemudahan dalam Setiap Langkah Pemesanan Anda Bersama Kami.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-delivery-truck"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pengiriman Cepat</h3>
                <p>Kami Menyediakan Pengiriman Cepat, Pastikan Barang Sampai tepat Waktu dengan Layanan Terpercaya Kami.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-coffee-bean"></span></div>
              <div class="media-body">
                <h3 class="heading">Kualitas Terbaik</h3>
                <p>Nikmati Kualitas Terbaik dengan Produk Unggulan Kami, Memberikan Pengalaman Luar Biasa untuk Kepuasan Anda.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Ragam Hidangan</span>
	            <h2 class="mb-4">Lezat dan Unik</h2>
	            <p class="mb-4">Jelajahi Ragam Hidangan Lezat Lainnya yang Siap Memanjakan Lidah Anda dengan Kelezatan dan Keunikan Rasanya.</p>
	            <p><a href="menu.php" class="btn btn-primary btn-outline-primary px-4 py-3">Lihat Semua Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-2.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(images/menu-3.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="124">0</strong>
		              	<span>Cabang</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="91">0</strong>
		              	<span>Penghargaan</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="20803">0</strong>
		              	<span>Pelanggan</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="950">0</strong>
		              	<span>Pegawai</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Rekomendasi</span>
            <h2 class="mb-4">Kopi Terbaik & Terlaris</h2>
            <p>Kopi Terbaik & Terlaris Kami untuk Pengalaman Minum Kopi yang Memuaskan dan Menggugah Selera.</p>
          </div>
        </div>
        <div class="row">
			<?php foreach($allProducts as $products) : ?> 
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a target="_blank" href="products/product-single.php?id=<?php echo $products->id; ?>" class="img" style="background-image: url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $products->image; ?>);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#"><?php echo $products->name; ?></a></h3>
    						<p><?php echo $products->description; ?></p>
    						<p class="price"><span>Rp<?php echo $products->price; ?></span></p>
    						<p><a target="_blank" href="products/product-single.php?id=<?php echo $products->id; ?>" class="btn btn-primary btn-outline-primary">Show</a></p>
    					</div>
    				</div>

        	</div>
			<?php endforeach; ?>
        	
        </div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Kata Mereka</span>
	          <h2 class="mb-4">Tentang FAS Coffee</h2>
	          <p>Tempat Terbaik untuk Nikmati Kopi Berkualitas dan Suasana Ramah.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
			<?php foreach($allReviews as $reviews) : ?>
	        <div class="col-md-3 align-self-sm-end ftco-animate">
	          <div class="testimony">
	             <blockquote>
	                <p>&ldquo;<?php echo $reviews->review; ?>.&rdquo;</p>
	              </blockquote>
	              <div class="author d-flex mt-4">
	                
	                <div class="name align-self-center"><?php echo $reviews->username; ?></div>
	              </div>
	          </div>
	        </div>
			<?php endforeach;  ?>
	    
	      </div>
	    </div>
	  </section>

<?php require "includes/footer.php" ; ?>  

		
	

