<!DOCTYPE html>
<!-- saved from url=(0053)http://gloriatheme.com/demo/html/bonica/category.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bonica HTML Blog Template - Category</title>
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
	<body class="loaded">
		<div class="loader-wrapper">
			<div class="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
		<!-- HEADER START -->
<?php include 'header.php';?>
		<!-- HEADER END -->
		<!-- PAGE CONTENT START -->
		<section class="site-content-wrapper">
			<section class="container">
				<section class="row">
					<section class="archive-title">
						<?php 
						     foreach($tag as $tag){
						?>
						<h1>Tag: <span><?php echo $tag->tag_name;?></span></h1>
						<?php }?>
					</section>
					<!-- PAGE CONTENT LEFT START -->
					<div class="col-lg-8 col-sm-8 col-xs-12">
						<!-- PAGE CONTENT START -->
						<div class="page-content">
							<?php 
							     foreach($tag_articles as $tag_article){
							?>
							<div class="home-blog-list clearfix">
								
								<!-- BLOG ITEM START -->
								<div class="home-blog-list-item">
									<!-- HOME BLOG ITEM CATEGORY -->
									<div class="big-blog-list-cat-name"><span><?php echo $tag_article->category_name;?></span></div>
									<!-- HOME BLOG ITEM TITLE -->
									<h5><a href="front/single?article_id=<?php echo $tag_article -> article_id;?>"><?php echo $tag_article->title;?></a></h5>
									<div class="single-blog-desc">
										<!-- HOME BLOG ITEM IMAGE -->
										<a href="front/single?article_id=<?php echo $tag_article -> article_id;?>">
											<img src="<?php echo $tag_article->img_src;?>" alt="News Title">
										</a>
										<!-- HOME BLOG ITEM DESC -->
										<div class="single-blog-desc-wrap">
											<ul>
												<li><a href="about"><i class="fa fa-user"></i> By Admin</a></li>
												<li><i class="fa fa-calendar"></i><?php echo $article -> click;?></li>
											<li><i class="fa fa-calendar"></i><?php echo $article -> add_time;?></li>
												
											</ul>
										</div>
									</div>
									<!-- HOME BLOG ITEM EXCERPT -->
									<p><?php echo $tag_article->content;?></p>
									
									<!-- HOME BLOG ITEM READ MORE -->
									<a href="front/single?article_id=<?php echo $tag_article -> article_id;?>" class="home-blog-more"><span>Read More</span></a>
								</div>
								
								<!-- BLOG ITEM END -->
								<!-- BLOG ITEM START -->
								
								<!-- BLOG ITEM END -->
							</div>
				            <?php } ?>
						</div>
						<!-- PAGINATION START -->
					<!-- PAGINATION END -->
					</div>
					<!-- PAGE CONTENT END -->
					<!-- PAGE CONTENT RIGHT START -->
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="sidebar-right">
							<!-- WIDGET ITEM START -->
							<div class="widget-box">
								<!-- WIDGET CONTENT -->
								<div class="about-widget">
									<div class="about-widget-avatar" style="background-image:url(assets/front/img/avatar.jpg);"></div>
									<h2><a href="about">ws_frost</h2>
									<!-- WIDGET TITLE -->
									<div class="widget-title"><h4><a href="about">About Us</h4></div>
									<p>大家好，欢迎来到吴双的博客，想要进一步了解我嘛，可以好好浏览一番我的网站喔~</p>
								</div>
							</div>
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
							<!-- WIDGET ITEM END -->
							<!-- WIDGET ITEM START -->
							<div class="widget-box fadeload" style="opacity: 1;">
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
											<div class="latest-post-comment"><i class="fa fa-comment"></i> 41 Comment</div>
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
							<div class="widget-box fadeload" style="opacity: 1;">
								<!-- WIDGET TITLE -->
								<div class="widget-title"><h4>Tags</h4></div>
								<!-- WIDGET CONTENT -->
								<div class="tagcloud">
									<?php 
								      foreach($tagids as $tag){
								    ?>
									<a href="single?tag=1" style="font-size: 14.6pt;"><?php echo $tag -> tag_name;?></a>
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