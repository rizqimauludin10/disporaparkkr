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
				<div class="image p-3">
					<div class="lower-content pt-1 pb-4">
                        <h3 class="text-center">Standar Pelayanan<br></h3>
                    </div>
					<div class="file pt-3">
                        <embed src="<?= base_url(); ?>/assets/file-pdf/standar-pelayanan-2021.pdf" type="application/pdf" width="100%" height="800px" />
					</div>
				</div>
			</div>

			<div class="inner-container">
				<div class="image p-3">
					<div class="lower-content pt-1 pb-4">
                        <h3 class="text-center pt-4">SK Pelayanan Publik<br></h3>
                    </div>
					<div class="file pt-3">
                        <embed src="<?= base_url(); ?>/assets/file-pdf/sk-pelayanan-publik.pdf" type="application/pdf" width="100%" height="800px" />
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