<!-- Main Header-->
<header class="main-header header-style-one">
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">
            	
				<div class="pull-left logo-box">
					<div class="logo"><a href="/beranda"><img src="<?= base_url(); ?>/frontend/images/logo-footer.png" alt="" title=""></a></div>
				</div>
				
				<div class="nav-outer clearfix">
					<!-- Mobile Navigation Toggler -->
					<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
					<!-- Main Menu -->
					<nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="<?= base_url('/beranda') ?>">Beranda</a></li>
                                <?php $request = \Config\Services::request(); ?>
                               
                                <li <?= $request->uri->getSegment(1) == 'profil-instansi' || $request->uri->getSegment(1) == 'visi-misi' || $request->uri->getSegment(1) == 'struktur-organisasi' || $request->uri->getSegment(1) == 'tupoksi' || $request->uri->getSegment(1) == 'sambutan-kadis' ? 'class = "current dropdown"' : '' ?> class="dropdown"><a href="#">Profil</a>
                                    <ul>
                                        <li><a href="<?= base_url('/sambutan-kadis') ?>">Sambutan Kadis</a></li>
                                        <li><a href="<?= base_url('/profil-instansi') ?>">Profil Instansi</a></li>
                                        <li><a href="<?= base_url('/visi-misi') ?>">Visi dan Misi</a></li>
                                        <li><a href="<?= base_url('/struktur-organisasi') ?>">Struktur Organisasi</a></li>
                                        <li><a href="<?= base_url('/tupoksi') ?>">Tupoksi</a></li>
                                        <li><a href="#">Sumber Daya Aparatur</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Bidang</a>
									<ul>
										<li><a href="#">Kepemudaan</a></li>
                                        <li><a href="#">Olahraga</a></li>
                                        <li><a href="#">Pariwisata</a></li>
                                        <li><a href="#">Ekonomi Kreatif</a></li>
								    </ul>
								</li>

                                <li <?= $request->uri->getSegment(1) == 'berita' || $request->uri->getSegment(1) == 'pengumuman' ? 'class = "current dropdown"' : '' ?> class="dropdown" ><a href="#" >Informasi</a>
									<ul>
										<li><a href="<?= base_url('/berita') ?>">Berita</a></li>
                                        <li><a href="#">Pengumuman</a></li>
								    </ul>
								</li>
                                <li class=""><a href="<?= base_url('/unduhan') ?>">Unduhan</a></li>
                                <li><a href="#">Event</a></li>
								<li class="dropdown"><a href="#">Galeri</a>
									<ul>
										<li><a href="blog.html">Galeri Foto</a></li>
                                        <li><a href="blog-detail.html">Galeri Video</a></li>
								    </ul>
								</li>
                                <li <?= $request->uri->getSegment(1) == 'maklumat-pelayanan' || $request->uri->getSegment(1) == 'standar-pelayanan' || $request->uri->getSegment(1) == 'motto-pelayanan' || $request->uri->getSegment(1) == 'e-lapor' || $request->uri->getSegment(1) == 'tdup' || $request->uri->getSegment(1) == 'pokdarwis' ? 'class = "current dropdown"' : '' ?> class="dropdown" ><a href="#" >Layanan</a>
									<ul>
                                        <li><a href="<?= base_url('standar-pelayanan') ?>">STANDAR LAYANAN</a></li>
                                        <li><a href="<?= base_url('motto-pelayanan') ?>">MOTTO LAYANAN</a></li>
                                        <li><a href="<?= base_url('maklumat-pelayanan') ?>">MAKLUMAT LAYANAN</a></li>
                                        <li><a href="#">SOP</a></li>
                                        <li class="dropdown"><a href="#">Produk Layanan</a>
                                            <ul>
                                                <li><a href="<?= base_url('tdup') ?>">TDUP</a></li>
                                                <li><a href="<?= base_url('pokdarwis') ?>">POKDARWIS</a></li>
                                                <li><a href="<?= base_url('e-lapor') ?>">Aduan</a></li>
                                                <li><a href="#">IKM</a></li>
                                            </ul>
                                        </li>
								    </ul>
								</li>
                            </ul>
                        </div>
                    </nav>
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Btn Box -->
						<div class="btn-box">
                        <a href="<?= base_url('/contact') ?>" class="theme-btn btn-style-one"><span class="txt">Hubungi Kami</span></a>
						</div>
						
					</div>
				</div>
				
            </div>
        </div>
        <!--End Header Upper-->
        
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/beranda" title=""><img src="<?= base_url(); ?>/frontend/images/logo2.png" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
					
					<!-- Main Menu End-->
					<div class="outer-box clearfix">
						
						<!-- Btn Box -->
						<!-- <div class="btn-box">
							<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Hubungi Kami</span></a>
						</div> -->
						
						<!-- Mobile Navigation Toggler -->
						<div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						
					</div>
					
                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->
    
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="<?= base_url(); ?>/frontend/images/logo2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->