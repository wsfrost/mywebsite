<!DOCTYPE html>
<!-- saved from url=(0051)http://gloriatheme.com/demo/html/bonica/index2.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ws_frost_HOME</title>
	    <base href="<?php echo site_url();?>" />
		<!-- CSS START -->
		<link href="assets/front/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/front/css/style.css" rel="stylesheet">
		<!-- CSS END -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="home loaded">
		<div class="loader-wrapper">
			<div class="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
		<!-- HEADER START -->
<?php include 'header.php';?>
		<!-- HEADER END -->
		<!-- SLIDER START -->
		<section class="slider-area" style="height: 621px;">
			<section id="carousel-example-generic" class="carousel slide carousel-fade" data-interval="8000" data-ride="carousel">
				<!-- SLIDE LIST START -->
				<div class="carousel-inner" role="listbox">
					<!-- SLIDE LIST ITEM START -->
					<div class="item">
						<div class="slider-bg-img" style="background-image:url(assets/front/img/slider2.jpg);"></div>
						<!-- SLIDE CAPTION START -->
						<div class="carousel-caption">
							<div class="slider-cat-name animated fadeInDown"><span>Travel</span></div>
							<h6 class="animated fadeInLeftBig">I Was Really Surprised</h6>
							<h2 class="animated fadeInRightBig">A Great Weekend Experience</h2>
						</div>
						<!-- SLIDE CAPTION END -->
					</div>
					<!-- SLIDE LIST ITEM END -->
					<!-- SLIDE LIST ITEM START -->
					<div class="item active">
						<div class="slider-bg-img" style="background-image:url(assets/front/img/slider1.jpg);"></div>
						<!-- SLIDE CAPTION START -->
						<div class="carousel-caption">
							<div class="slider-cat-name animated fadeInDown"><span>Travel</span></div>
							<h6 class="animated fadeInLeftBig">An Unique Experience</h6>
							<h2 class="animated fadeInRightBig">Journey Towards the Dream</h2>
						</div>
						<!-- SLIDE CAPTION END -->
					</div>
					<!-- SLIDE LIST ITEM END -->
					<!-- SLIDE LIST ITEM START -->
					<div class="item">
						<div class="slider-bg-img" style="background-image:url(assets/front/img/slider3.jpg);"></div>
						<!-- SLIDE CAPTION START -->
						<div class="carousel-caption">
							<div class="slider-cat-name animated fadeInDown"><span>Fashion</span></div>
							<h6 class="animated fadeInLeftBig">Lorem Ipsum Is Simply Dummy</h6>
							<h2 class="animated fadeInRightBig">Lorem Ipsum Text</h2>
						</div>
						<!-- SLIDE CAPTION END -->
					</div>
					<!-- SLIDE LIST ITEM END -->
				</div>
				<!-- SLIDE LIST END -->
				<!-- SLIDER CONTROL START -->
				<a class="left carousel-control left-slider-arrow" href="http://gloriatheme.com/demo/html/bonica/index2.html#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control right-slider-arrow" href="http://gloriatheme.com/demo/html/bonica/index2.html#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				<!-- SLIDER CONTROL END -->
			</section>
		</section>
		<!-- SLIDER END -->
		<!-- PAGE CONTENT START -->
		<section class="site-content-wrapper">
			<section class="container">
				<section class="row">
					<!-- PAGE CONTENT LEFT START -->
					<div class="col-lg-8 col-sm-8 col-xs-12">
						<!-- PAGE CONTENT START -->
						<div class="page-content">
							<div class="home-blog-list clearfix">
								<!-- HOME BLOG ITEM START -->
								<?php
									   foreach($articless as $article ){
								?>
								<div class="home-blog-list-item">
									<!-- HOME BLOG ITEM CATEGORY -->
									<div class="big-blog-list-cat-name"><span><?php echo $article ->category_name;?></span></div>
									<!-- HOME BLOG ITEM TITLE -->
									<h5><a href="front/single?article_id=<?php echo $article -> article_id;?>"><?php echo $article -> title;?></a></h5>
									<div class="single-blog-desc">
										<!-- HOME BLOG ITEM IMAGE -->
										<a href="front/single?article_id=<?php echo $article -> article_id;?>">
											<img src="<?php echo $article -> img_src;?>" alt="News Title">
										</a>
										<!-- HOME BLOG ITEM DESC -->
										<div class="single-blog-desc-wrap">
											<ul>
												<li><a href="front/about"><i class="fa fa-user"></i> By Admin</a></li>
												<li><i class="fa fa-calendar"></i> <?php echo $article -> click;?></li>
												<li><i class="fa fa-calendar"></i> <?php echo $article -> add_time;?></li>
											</ul>
										</div>
									</div>
									<!-- HOME BLOG ITEM EXCERPT -->
									<p><?php echo $article -> content;?></p>
									<!-- HOME BLOG ITEM READ MORE -->
									<a href="front/single?article_id=<?php echo $article -> article_id;?>" class="home-blog-more"><span>Read More</span></a>
								</div>
								<?php } ?>
								<!-- HOME BLOG ITEM END -->
								<!-- HOME BLOG ITEM START -->
								<!-- HOME BLOG ITEM END -->
							</div>
						</div>
						<!-- PAGINATION START -->
						<nav>
							<ul style="list-style:none;">
								<?php echo $this->pagination->create_links();?>
							</ul>
						</nav>
						<!-- PAGINATION END -->
					</div>
					<!-- PAGE CONTENT LEFT END -->
					<!-- PAGE CONTENT RIGHT START -->
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="sidebar-right">
							<!-- WIDGET ITEM START -->
							<div class="widget-box">
								<!-- WIDGET CONTENT -->
								<div class="about-widget">
									<div class="about-widget-avatar" style="background-image:url(assets/front/img//avatar.jpg);"></div>
									<h2>ws_frost</h2>
									<!-- WIDGET TITLE -->
									<div class="widget-title"><h4>About Us</h4></div>
									<p>Sed fringilla, magna eu ultricies eleifend, leo mi efficitur urna, quis tempus nulla ligula sed nibh. Quisque posuere tempus ultricies...</p>
								</div>
							</div>
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->

							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
					
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
							<div class="widget-box fadeload">
								<!-- WIDGET TITLE -->
								<div class="widget-title"><h4>Newest Photos Show</h4></div>
								<!-- WIDGET CONTENT -->
								<ul class="instagram-photo-list">
									<?php
									     foreach($lim_articles as $article){
									?>
									<li>
										<a href="front/single?article_id=<?php echo $article ->article_id;?>" target="_blank"><img src="<?php echo $article -> img_src;?>" alt="Instagram"></a>
									</li>
									<?php } ?>
								</ul>
							</div>
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
							<div class="widget-box fadeload">
								<!-- WIDGET TITLE -->
								<div class="widget-title"><h4>Mewest Comments</h4></div>
								<!-- WIDGET CONTENT -->
								<ul class="latest-posts-widget">
									<?php 
									      foreach($las_comments as $las_comment){
									?>
									<li>
										<div class="lastest-post-information">
											<div class="latest-post-date"><i class="fa fa-calendar"></i><?php echo $las_comment -> add_time;?></div>
										</div>
										<h4><a href="front/single?article_id=<?php echo $las_comment->article_id;?>"><?php echo $las_comment -> title;?></a></h4>
										<div class="lastest-post-images">
											<a href="front/single?article_id=<?php echo $las_comment->article_id;?>"><img src="<?php echo $las_comment -> img_src;?>" alt="Latest Posts"></a>
										</div>
										<p><?php echo $las_comment -> content;?></p>
									</li>
									<?php } ?>
								</ul>
							</div>
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
							<div class="widget-box fadeload">
								<!-- WIDGET TITLE -->
								<div class="widget-title"><h4>Tags</h4></div>
								<!-- WIDGET CONTENT -->
								<div class="tagcloud">
									<?php 
								      foreach($tagids as $tag){
								    ?>
									<a href="front/tag?tag=<?php echo $tag->tag_id;?>" style="font-size: 14.6pt;"><?php echo $tag -> tag_name;?></a>
									<?php } ?>
								</div>
							</div>
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
							<!-- WIDGET ITEM END -->
						</div>
					</div>
					<!-- PAGE CONTENT RIGHT END -->
				</section>
			</section>
		</section>
		<!-- PAGE CONTENT END -->
		<!-- FOOTER START -->
<?php include 'footer.php';?>
		<!-- FOOTER END -->
		<!-- JAVASCRIPT START -->
		<script src="assets/front/js/jquery.min.js"></script>
		<script src="assets/front/js/bootstrap.min.js"></script>
		<script src="assets/front/js/bonica.js"></script>
		<!-- JAVASCRIPT END -->
	
</body></html>