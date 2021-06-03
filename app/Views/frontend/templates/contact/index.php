<?= $this->extend('frontend/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Menu Header-->
    <?= $this->include('frontend/templates/menu2'); ?>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(frontend/images/background/profil-banner.png)">
    	<div class="auto-container">
			<h1><?= $bannerTitle; ?></h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li><?= $bannerTitle; ?></li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- Map Section -->
	<section class="map-section pb-5">
		<div class="auto-container">
			<div class="inner-container">
				<!-- Map Boxed -->
				<div class="map-boxed">
					<!-- Map Outer -->
					<div class="map-outer">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBQdZ380B1dVd8WDw1O5LRhfSydss8ARAo&q=-0.12707906776573175, 109.39213621271668" allowfullscreen>
                        </iframe>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->

    <!-- Contact Info Section -->
	<section class="contact-info-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Informasi</h2>
			</div>
			<div class="row clearfix">
			
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-location-pin"></div>
						<h5>Lokasi</h5>
						<div class="text">Jl. Angkasa Pura 2 <br> Komp. Perkantoran Pemda</div>
					</div>
				</div>
				
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-smartphone"></div>
						<h5>Telepon</h5>
						<ul class="info-list">
							<li><a href="#">+628 5245 6722 00</a></li>
							<li><a href="#">+628 5245 3669 87 </a></li>
						</ul>
					</div>
				</div>
				
				<!-- Info Block -->
				<div class="info-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="icon flaticon-email-3"></div>
						<h5>Email</h5>
						<ul class="info-list">
							<li><a href="mailto:disporaparkkr@gmail.com">disporaparkkr@gmail.com</a></li>
							<li><a href="mailto:rizqimauludin10@gmail.com">rizqimauludin10@gmail.com</a></li>
						</ul>
					</div>
				</div>
			
			</div>
		</div>
	</section>
	<!-- End Contact Info Section -->

    <!-- Patner Kami -->
	<section class="clients-section style-two">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Patner Kami</h2>
				
			</div>
			<div class="inner-container">
				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/kuburayakab.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/dispora-kalbar.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/bekraf.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/pola.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/ombusman.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/kemenpora.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/koni.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/ppi.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/bapedda.png" alt=""></a></figure></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- Patner Kami end -->

   
	
	<!-- Main Footer -->
    <?= $this->include('frontend/templates/footer'); ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<?= $this->endSection(); ?>