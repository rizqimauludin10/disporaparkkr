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
					<!-- <img src="<?= base_url(); ?>/frontend/images/resource/service-6.jpg" alt="" /> -->
                    <div class="lower-content">
                        <h2>Tugas Pokok :<br></h2>
                        <p>Mempunyai tugas membantu Bupati melaksanakan urusan pemerintahan wajib dan urusan pemerintahan pilihan yang tidak berkaitan dengan pelayanan dasar dibidang Kepemudaan, Olahraga dan Pariwisata.
                        </p>
                    </div>
                    <div class="lower-content">
                        <h2>Fungsi :</h2>
                        <p>Dalam melaksanakan Tugas Pokoknya, Dinas Kepemudaan, Olahraga dan Pariwisata Kabupaten Kubu Raya mempunyai fungsi :
                        </p>
                        <div class="row clearfix">
                            <div class="column col-lg-12 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Perumusan  Program kerja di bidang Kepemudaan, Olahraga dan Pariwisata</li>
                                </ul>
                            </div>
                            <div class="column col-lg-12 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Perumusan Kebijakan Teknis di bidang  Kepemudaan, keolahragaan, sarana dan Prasarana serta pariwisata dan ekonomi kreatif</li>
                                </ul>
                            </div>
                            <div class="column col-lg-12 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Pembinaan dan pelaksanaan tugas serta pelayanan umum dibidang Kepemudaan, keolahragaan, sarana dan prasarana serta pariwisata dan ekonomi kreatif</li>
                                </ul>
                            </div>
                            <div class="column col-lg-12 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Pelaksanaan administrasi Dinas</li>
                                </ul>
                            </div>
                            <div class="column col-lg-12 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Pembinaan Unit Pelaksana Teknis Dinas</li>
                                </ul>
                            </div>
                            <div class="column col-lg-12 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Pengkoordinasian, evaluasi dan pelaporan penyelenggaraan urusan pemerintahan di bidang Kepemudaan, Olahraga dan Pariwisata</li>
                                </ul>
                            </div>
                            <div class="column col-lg-12 col-md-6 col-sm-6">
                                <ul class="list-style-one">
                                    <li>Pelaksanaan tugas lain yang diberikan  oleh Bupati sesuai dengan tugas dan fungsinya</li>
                                </ul>
                            </div>
                        </div>
                        
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