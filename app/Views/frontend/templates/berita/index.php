<?= $this->extend('frontend/templates/index'); ?>
<?= $this->section('content'); ?>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Menu Header-->
    <?= $this->include('frontend/templates/menu2'); ?>
    <!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title style-two" style="background-image:url(frontend/images/background/profil-banner.png)">
    	<div class="auto-container">
			<h1><?= $bannerTitle; ?></h1>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li><?= $bannerTitle; ?></li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-classic">
						
						<!-- News Block -->
						<div class="news-block">
							<div class="inner-box">
								<div class="image">
									<a href="blog-detail.html"><img src="frontend/images/resource/news-1.jpg" alt="" /></a>
									<div class="category">Law</div>
									<ul class="post-meta">
										<li><a href="blog-detail.html"><span class="icon flaticon-timetable"></span>August 25, 2021</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-email"></span>Comments 03</a></li>
										<li><a href="blog-detail.html"><span class="icon flaticon-user-2"></span>Admin</a></li>
									</ul>
								</div>
								<div class="lower-content">
									<h3><a href="blog-detail.html">Creative Para Jóvenes: Designer’s UI/UX Complete Checklist.</a></h3>
									<div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </div>
									<div class="btn-box">
										<a href="blog-detail.html" class="theme-btn btn-style-two"><span class="txt">Learn More</span></a>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					<!--Post Share Options-->
					<div class="styled-pagination text-center">
						<ul class="clearfix">
							<li class="prev"><a href="#"><span class="flaticon-back"></span> </a></li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next"><a href="#"><span class="flaticon-next-1"></span> </a></li>
						</ul>
					</div>
					
				</div>
				
				<!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar sticky-top">
						<div class="sidebar-inner">
						
							<!-- Search -->
							<div class="sidebar-widget search-box">
								<form method="post" action="contact.html">
									<div class="form-group">
										<input type="search" name="search-field" value="" placeholder="Search ....." required>
										<button type="submit"><span class="icon fa fa-search"></span></button>
									</div>
								</form>
							</div>
							
							<!--Blog Category Widget-->
							<div class="sidebar-widget sidebar-blog-category">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>Categories</h5>
									</div>
									<ul class="cat-list-two">
										<li><a href="#">Consulting <span>(25)</span></a></li>
										<li><a href="#">Life Style<span>(80)</span></a></li>
										<li><a href="#">Technology<span>(95)</span></a></li>
									</ul>
								</div>
							</div>
							
							<!-- Popular Post Widget -->
							<div class="sidebar-widget popular-posts">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>latest posts</h5>
									</div>
									<article class="post">
										<figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.html">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">August 25, 2021</div>
									</article>
									
									<article class="post">
										<figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.html">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">August 25, 2021</div>
									</article>
									
									<article class="post">
										<figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a href="blog-detail.html" class="overlay-box"></a></figure>
										<div class="text"><a href="blog-detail.html">Quis autem velo eum iure suam nihil</a></div>
										<div class="post-info">August 25, 2021</div>
									</article>
								</div>
							</div>
							
							<!-- Tags Widget -->
							<div class="sidebar-widget popular-tags">
								<div class="widget-content">
									<div class="sidebar-title">
										<h5>Tags</h5>
									</div>
									<a href="#">Cloud</a>
									<a href="#">Life style</a>
									<a href="#">Hosting</a>
									<a href="#">Business</a>
								</div>
							</div>
							
						</div>
					</aside>
				</div>
				
			</div>
		</div>
	</div>


   
	
	<!-- Main Footer -->
    <?= $this->include('frontend/templates/footer'); ?>
	
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>
<?= $this->endSection(); ?>