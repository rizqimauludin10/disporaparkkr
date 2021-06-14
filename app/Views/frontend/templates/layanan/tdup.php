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
				<div class="image p-5">
					    <img src="<?= base_url(); ?>/frontend/images/resource/sp4n-lapor.png" alt="Motto Pelayanan Disporapar Kubu Raya" />
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