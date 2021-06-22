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
	
	<!-- Case Section -->
	<section class="case-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="clearfix">
					
					<!-- Image Column -->
					<div class="image-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<img src="<?= base_url() ?>/frontend/images/resource/profil.png" alt="" />
							</div>
						</div>
					</div>
					
					<!-- Content Column -->
					<div class="content-column col-lg-6 col-md-12 col-sm-12">
						<div class="inner-column">
							<!-- Sec Title -->
							<div class="sec-title">
								<h2>Profil DISPORAPAR<br> Kubu Raya</h2>
								<div class="text">Dinas Kepemudaan Olahraga dan Pariwisata Kabupaten Kubu Raya dibentuk berdasarakan Peraturan Daerah Kabupaten  Kubu Raya Nomor 6 Tahun 2016 tentang Pembentukan dan susunan Perangkat Daerah (Lembaran Daerah Kabupaten Kubu Raya Nomor 42)sebagaimana telah diubah dengan peraturan daerah Kabupaten Kubu Raya Nomor 15 Tahun 2019 Nomor 15 Tahun 2019 tentang perubahan atas Peraturan Daerah kabupaten Kubu Raya Nomor 6 tahun 2016 tentang pembentukan dan susunan Perangkat Daerah (Lembaran Daerah Kabupaten Kubu Raya Tahun 2019 Nomor 15, Tambahan Lembaran Daerah Kabupaten Kubu Raya Nomor 75).
								<br>
								<b>Dinas Kepemudaan Olahraga dan Pariwisata terdiri dari bidang Kepemudaan, Olahraga, Pariwisata dan Ekonomi Kreatif.</b> 
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome Section -->
	
	
	
	
	<!-- Main Footer -->
    <?= $this->include('frontend/templates/footer'); ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<?= $this->endSection(); ?>