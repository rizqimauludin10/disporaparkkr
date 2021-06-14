<?= $this->extend('frontend/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
 	<!-- Main Menu Header-->
    <?= $this->include('frontend/templates/menu'); ?>
    <!-- End Main Header -->
	
	<!-- banner-section -->
    <?= $this->include('frontend/templates/banner'); ?>
    <!-- banner-section end -->

    
    <!-- Sambutan Kepala Dinas -->
    <section class="recruitment-technology">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <figure class="image-box clearfix titlt" data-tilt data-tilt-max="4"><img src="<?= base_url()?>/frontend/images/resource/sambutan.png" alt=""></figure>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_4">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Sambutan Kepala Dinas</h2>
                                <!-- <p>Iphing Hindrawati, ST, MH</p> -->
                            </div>
                            <div class="inner-box">
                                <div class="single-item wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner">
                                        <!-- <figure class="icon-box"><img src="<?= base_url()?>/frontend/images/icons/icon-7.png" alt=""></figure> -->
                                        <i>Assalamu’alaikum Warahmatullahi Wabarokatuh</i><br><br>
                                        <p>Puji Syukur kami Panjatkan Kehadirat Allah SWT, Tuhan Yang Maha Esa, karena atas Petunjuk dan Hidayah-Nya telah mengantarkan Dinas Kepemudaan Olahraga dan Pariwisata ini menjadi sebuah Institusi yang semakin eksis sesuai dengan visi dan misi Kabupaten Kubu Raya “Terwujudnya Kabupaten Kubu Raya yang Bahagia, Bermartabat, Terdepan, Berkualitas dan Religius” menghadapi tantangan zaman, terutama dalam penyelenggaraan pemerintahan yang Good Governance dan siap menjamin transparansi, efisiensi serta efektif...</p>
                                        <h4><a href="<?= base_url() ?>/sambutan-kadis">Baca Selengkapnya<i class="flaticon-right-arrow"></i></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sambutan Kepala Dinas end -->
    
    <!-- video-section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="video-content">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(frontend/images/shape/pattern-31.png);"></div>
                    <div class="pattern-2"></div>
                    <div class="pattern-3"></div>
                </div>
                <div id="image_block_1">
                    <div class="image-box">
                        <div class="video-inner" style="background-image: url(frontend/images/resource/video-banner.jpg);">
                            <a href="https://www.youtube.com/watch?v=ur1iLPiVWmU" class="lightbox-image video-btn" data-caption="">
                                <i class="flaticon-play-arrow"></i>
                            </a>
                            <div class="border"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video-section end -->
    
    
    <!-- Event Terdekat -->
    <section class="service-section alternet-2 bg-color-light">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Event Terdekat</h2>
                <div class="text">Temukan informasi event terdekat di <br />Kabupaten Kubu Raya</div>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-nav-none owl-dot-style-one">
                <div class="service-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img src="<?= base_url()?>/frontend/images/resource/service-2.jpg" alt=""></figure>
                        <div class="lower-content">
                            <div class="content-box">
                                <div class="inner">
                                    <!-- <div class="icon-box"><div class="icon flaticon-clock"></div></div> -->
                                    <b style="color:#00204C;"><p>Gawai Dayak</p></b>
                                    <p>Rumah Betang Desa Lingga Sungai Ambawang</p>
                                    <b><p>Senin, 01 Mei 2021</p></b>
                                </div>
                                <div class="link"><a href="case-details.html">More Details</a></div>
                            </div>
                            <div class="overlay-content">
                                <p>Pemilihan Putra Putri Pariwisata Kubu Raya</p>
                                <a href="case-details.html"><i class="flaticon-right-arrow"></i>More details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Event Terdekat end -->
    
    <!-- Berita Terbaru -->
    <section class="case-style-three bg-color-1">
        <div class="auto-container">
        <div class="sec-title centered">
                <h2>Berita Terbaru</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 case-block">
                    <div class="case-block-two wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="frontend/images/resource/case-2.jpg" alt="">
                                <div class="link"><a href="case-details.html"><i class="flaticon-link"></i></a></div>
                                <div class="overlay-layer"></div>
                            </figure>
                            <div class="lower-content">
                                <div class="box">
                                    
                                    <span class="badge bg-success mb-2" style="color:#FFFFFF">Kepemudaan</span>
                                    <h4> <a href="case-details.html">Kadis Porapar Membuka Kegiatan POPROV 2021</a></h4>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis molestie congue mi non ultricies...</p>
                                </div>
                                <div class="link"><a href="case-details.html"><i class="flaticon-right"></i>Baca Selengkapnya</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of Berita -->

    <!-- Penghargaan -->
    <section class="project-style-two">
        <div class="outer-container">
            
            <div class="sec-title centered">
                <h2>Prestasi</h2>
                <div class="text">Prestasi dan penghargaan yang telah diraih oleh <br/>Disporapar Kubu Raya</div>
            </div>
            
            <div class="four-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url(frontend/images/shape/pattern-17.png);"></div>
                            </div>
                            <img src="<?= base_url()?>/frontend/images/resource/case-2.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>Nama Berita</span>
                                <h4><a href="case-details.html">Long established fact that a reader will be distracted by the</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-2.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url(frontend/images/shape/pattern-17.png);"></div>
                            </div>
                            <img src="<?= base_url()?>/frontend/images/resource/case-3.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>@ Presentation</span>
                                <h4><a href="case-details.html">2</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-3.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url(frontend/images/shape/pattern-17.png);"></div>
                            </div>
                            <img src="<?= base_url()?>/frontend/images/resource/case-4.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>@ Presentation</span>
                                <h4><a href="case-details.html">3</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-4.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
                <div class="project-block-one">
                    <div class="inner-box">
                        <figure class="image-box">
                            <div class="pattern-layer">
                                <div class="pattern-2" style="background-image: url(frontend/images/shape/pattern-17.png);"></div>
                            </div>
                            <img src="<?= base_url()?>/frontend/images/resource/case-5.jpg" alt="">
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <span>@ Presentation</span>
                                <h4><a href="case-details.html">4</a></h4>
                            </div>
                            <div class="view-btn"><a href="images/resource/case-5.jpg" class="lightbox-image" data-fancybox="gallery">+</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-text centered"><p>Interested to work with us? <a href="case-details.html">Let’s get started</a></p></div>
        </div>
    </section>
    <!-- None end -->
    
    <!-- Data Kunjungan -->
    <section class="facts-section-three" style="background-image: url(frontend/images/background/1.jpg);">
        
        <div class="auto-container">
            <div class="fact-counter-style-three">
                <div class="row">
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-user"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="2">1</span><sup>org</sup>
                                    </div>
                                    <h4>Hari ini</h4>
                                    <div class="text">Desire that they cannot foresee <br> the pain and trouble.</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-user"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="100">0</span><sup>org</sup>
                                    </div>
                                    <h4>Bulan ini</h4>
                                    <div class="text">Desire that they cannot foresee <br> the pain and trouble.</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-4 col-md-6 col-sm-12">
                        <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="content">
                                <div class="icon"><span class="flaticon-user"></span></div>
                                <div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="3000" data-stop="350">0</span><sup>org</sup>
                                    </div>
                                    <h4>Total Kunjungan</h4>
                                    <div class="text">These cases are perfect simple <br> & easy to distinguish.</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
	
	<!-- Testimonail Section -->
	<section class="testimonial-section" style="background-image: url(frontend/images/background/pattern-3.png)">
		<div class="auto-container">
			<!-- Sec Title -->
			<!-- <div class="sec-title centered">
				<h2>Testimoni</h2>
			</div> -->
			<div class="inner-container">
				<div class="single-item-carousel owl-carousel owl-theme">
					
					<!-- Testimonial Block -->
					<div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Iping Hindrawati, ST, MH</div>
							<div class="text">Kepala Dinas Kepemudaan Olahraga dan Pariwisata Kubu Raya</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Drs. Sukiman, M.Si </div>
							<div class="text">Sekretaris Dinas Kepemudaan Olahraga dan Pariwisata Kubu Raya</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Dra. Emmy Sulvaningsih </div>
							<div class="text">Kasubbag Rencana Kerja dan Keuangan</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Siti Zahara, S.Pd</div>
							<div class="text">Kasubbag Tata Usaha dan Kepegawaian</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">M. Renniyana B. Hasugian, S.Pd</div>
							<div class="text">Kasubbag Perlengkapan dan Umum</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Anwar, S.Sos, M.Si</div>
							<div class="text">Kabid Kepemudaan</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Isamuddin, S.Sos</div>
							<div class="text">Kabid Keolahragaan</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Darfiansyah, SKM, M.Si</div>
							<div class="text">Kabid Pariwisata</div>
						</div>
					</div>

                    <div class="testimonial-block">
						<div class="inner-box">
							<div class="author-image">
								<img src="<?= base_url() ?>/frontend/images/resource/author-1.png" alt="" />
							</div>
							<!-- <span class="quote-icon flaticon-quote-1"></span> -->
							<div class="name">Sri Yuli utami, SE, MM</div>
							<div class="text">Kabid Ekonomi Kreatif</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Testimonail Section -->
	
	<!-- Patner Kami -->
	<section class="clients-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Link Terkait</h2>
				
			</div>
			<div class="inner-container">
				<div class="sponsors-outer">
					<!--Sponsors Carousel-->
					<ul class="sponsors-carousel owl-carousel owl-theme">
						<li class="slide-item"><figure class="image-box"><a href="https://kuburayakab.go.id/" target="_blank"><img src="<?= base_url() ?>/frontend/images/clients/kuburayakab.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/dispora-kalbar.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/bekraf.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/pola.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/ombusman.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/kemenpora.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/koni.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/ppi.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="#"><img src="<?= base_url() ?>/frontend/images/clients/bapedda.png" alt=""></a></figure></li>
						<li class="slide-item"><figure class="image-box"><a href="https://bnn.go.id/" target="_blank"><img src="<?= base_url() ?>/frontend/images/clients/bnn.png" alt=""></a></figure></li>
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
 