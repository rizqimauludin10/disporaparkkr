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
					<img src="<?= base_url(); ?>/frontend/images/resource/service-6.jpg" alt="" />
				</div>
				<div class="lower-content">
					<h2>Visi :<br>
                    “TERWUJUDNYA KEPEMUDAAN, OLAHRAGA DAN PARIWISATA YANG MAJU, BERKREATIFITAS DAN BERDAYA GUNA”</h2>
					<p>Makna Pernyataan Visi tersebut adalah menggambarkan Heterogenitas Masyarakat, Budaya dan Alam menjadikan Keunikan tersendiri yang merupakan Potensi Pengembangan  Kepariwisataan dan Kreatifitas. 
                    Pengembangan Kedua sektor tersebut dapat melalui Pemberdayaan Potensi Generasi Muda. Generasi Muda sebagaimana dimaksud yang menjadi Subyek Pengembangan haruslah generasi yang bugar, cerdas, terampil dan berkualitas yang gemar berolahraga.
                    </p>
				</div>
                <div class="lower-content">
					<h2>Misi :</h2>
					<p>Untuk mewujudkan Visi diatas, perlu dukungan dan implementasi pada Misi, oleh karena itu Misi Dinas Kepemudaan, Olahraga dan Pariwisata sebagai berikut :
                    </p>
					<div class="row clearfix">
						<div class="column col-lg-12 col-md-6 col-sm-6">
							<ul class="list-style-one">
								<li>Meningkatkan Kualitas, Kinerja dan Profesionalisme Sumber Daya Manusia Bidang Kepemudaan, Olahraga dan Pariwisata.</li>
							</ul>
						</div>
						<div class="column col-lg-12 col-md-6 col-sm-6">
							<ul class="list-style-one">
								<li>Mengembangkan Potensi Kepemudaan, Olahraga dan Pariwisata.</li>
							</ul>
						</div>
						<div class="column col-lg-12 col-md-6 col-sm-6">
							<ul class="list-style-one">
								<li>Memajukan dan Mendayagunakan Potensi Kepemudaan, Olahraga dan Pariwisata.</li>
							</ul>
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