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
    <section class="services-detail-section">
		<div class="auto-container">
			<div class="inner-container">
				<div class="image">

					<div class="lower-content pb-4 pt-1">
						<h2>Visi & Misi Kabupaten 2019-2024<br>
					</div>
					<img src="<?= base_url(); ?>/frontend/images/resource/visi-misi-kabupaten.jpg" alt="Visi Misi Disporapar Daerah" />
					<div class="lower-content mb-4">
						<h2>Visi & Misi Disporapar</h2>
						<img class="mt-3" src="<?= base_url(); ?>/frontend/images/resource/visi-misi-instansi.jpg" alt="Visi Misi Disporapar Kubu Raya" />
					</div>
					<div class="lower-content mb-4">
						<h2>Budaya Kerja Pegawai</h2>
						<img class="mt-3" src="<?= base_url(); ?>/frontend/images/resource/budaya-kerja.jpg" alt="Budaya Kerja Disporapar Kubu Raya" />
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	
	
	
	<!-- Main Footer -->
    <?= $this->include('frontend/templates/footer'); ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<?= $this->endSection(); ?>