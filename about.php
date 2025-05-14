<?php require "includes/header.php"; ?>
<?php require "config/config.php"; ?>
<?php

	$reviews = $conn->query("SELECT * FROM reviews");
	$reviews->execute();

	$allReviews = $reviews->fetchAll(PDO::FETCH_OBJ);


?>

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Tentang Kami</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Tentang Kami</span></p>
            </div>

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

	<?php require "includes/footer.php"; ?>