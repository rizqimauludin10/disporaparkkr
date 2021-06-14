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
                        <h2>Sambutan Kepala Dinas<br></h2>
                        <p>Puji Syukur kami Panjatkan Kehadirat Allah SWT, Tuhan Yang Maha Esa, karena atas Petunjuk dan Hidayah-Nya telah mengantarkan Dinas Kepemudaan Olahraga dan Pariwisata ini menjadi sebuah Institusi yang semakin eksis sesuai dengan visi dan misi Kabupaten Kubu Raya “Terwujudnya Kabupaten Kubu Raya yang Bahagia, Bermartabat, Terdepan, Berkualitas dan Religius” menghadapi tantangan zaman, terutama dalam penyelenggaraan pemerintahan yang Good Governance dan siap menjamin transparansi, efisiensi serta efektif. <br><br>
                        Seiring kemajuan teknologi serta kebutuhan akan informasi yang cepat, tepat, akurat dan akuntabel dinas kepemudaan olahraga dan pariwisata kabupaten kubu raya (disporapar) merasa perlu membuka website resmi yang bertujuan sebagai sarana publikasi untuk memberikan informasi seputar disporapar kubu raya kepada masyarakat umum khususnya masyarakat kabupaten kubu raya, yang dapat diakses melalui alamat <a href="#">https://disporapar.kuburayakab.go.id</a>  , kita berharap, website yang telah terbangun ini dapat bertahan dan terus dikembangkan hingga dapat memenuhi kebutuhan masyarakat terhadap informasi secara cepat, faktual dan terpercaya. <br><br> Akhirnya, marilah kita jadikan website ini sebagai media komunikasi dan informasi dalam upaya mendukung program pembangunan pemerintah kabupaten kubu raya yang semakin menanjak. kritik dan saran terhadap kekurangan yang ada sangat kami harapkan guna penyempurnaan website ini di masa mendatang.
                        </p>
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