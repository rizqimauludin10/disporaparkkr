<header class="main-header header-style-two">
		<div class="auto-container clearfix">
            <!--  Header Top -->    	
            <div class="header-top clearfix">
                <div class="top-left pull-left clearfix">
                    <ul class="info-box clearfix">
                        <li><i class="flaticon-headphones"></i><a href="$">+62 8968 5191 803</a></li>
                        <li><i class="flaticon-email"></i><a href="mailto:disporaparkkr@gmail.com">disporaparkkr@gmail.com</a></li>
                    </ul>
                </div>
                <div class="top-right pull-right clearfix">
                    
                    <div class="search-box-outer">
                        <form action="index.html" method="post" class="search-btn">
                            <button type="button" class="search-toggler"><i class="flaticon-search"></i>Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container clearfix">
            	
				<div class="pull-left logo-box">
					<div class="logo"><a href="index.html"><img src="<?= base_url(); ?>/frontend/images/logo1.png" alt="" title=""></a></div>
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
                                <li class="dropdown"><a href="#">Profil</a>
                                    <ul>
                                        <li><a href="<?= base_url('/profil-instansi') ?>">Profil Instansi</a></li>
                                        <li><a href="<?= base_url('/visi-misi') ?>">Visi dan Misi</a></li>
                                        <li><a href="<?= base_url('/struktur-organisasi') ?>">Struktur Organisasi</a></li>
                                        <li><a href="<?= base_url('/tupoksi') ?>">Tupoksi</a></li>
                                        <li><a href="#">SOP</a></li>
                                        <li><a href="#">Sumber Daya Aparatur</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Bidang</a>
									<ul>
										<li><a href="blog.html">Kepemudaan</a></li>
                                        <li><a href="blog-detail.html">Olahraga</a></li>
                                        <li><a href="blog-detail.html">Pariwisata</a></li>
                                        <li><a href="blog-detail.html">Ekonomi Kreatif</a></li>
								    </ul>
								</li>
                                <li class=""><a href="<?= base_url('/berita') ?>">Berita</a></li>
                                <li><a href="#">Event</a></li>
								<li class="dropdown"><a href="#">Galeri</a>
									<ul>
										<li><a href="blog.html">Galeri Foto</a></li>
                                        <li><a href="blog-detail.html">Galeri Video</a></li>
								    </ul>
								</li>
								<li class="dropdown"><a href="#">Layanan</a>
									<ul>
                                        <li><a href="<?= base_url('motto-pelayanan') ?>">MOTTO PELAYANAN</a></li>
                                        <li><a href="<?= base_url('maklumat-pelayanan') ?>">MAKLUMAT PELAYANAN</a></li>
                                        <li><a href="#">E-LAPOR</a></li>
										<li><a href="blog.html">TDUP</a></li>
                                        <li><a href="blog-detail.html">POKDARWIS</a></li>
                                        <li><a href="blog-detail.html">PENGADUAN</a></li>
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
                    <a href="index.html" title=""><img src="<?= base_url(); ?>/frontend/images/logo2.png" alt="" title=""></a>
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
						<div class="btn-box">
							<a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Hubungi Kami</span></a>
						</div>
						
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