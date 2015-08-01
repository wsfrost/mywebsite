<header class="header">
			<!-- TOP BAR START -->
			<section class="topbar">
				<section class="container">
					<!-- TOP LEFT START -->
					<ul class="top-menu">
						<li><a href="front/index">Home</a></li>
						<li><a href="front/about">About Us</a></li>
					
					<!-- TOP LEFT END -->
					<!-- TOP SOCIAL START -->
						<?php 
						     $login_user = $this -> session -> userdata("login_user");
							 if($login_user){
						?>
						 <li><a href="front/user/logout"><?php echo $login_user->username;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;退出</a></li>
						<?php 
							 }else{
						?>
				         <li><a href="front/login" target="_blank">登录</a></li>
				         <li></a><a href="front/reg" target="_blank">注册</a></li>
				        <?php
							 }
						?>
						<!--<li><a href="http://gloriatheme.com/demo/html/bonica/index2.html#" target="_blank">登录</a></li>
						<li><a href="http://gloriatheme.com/demo/html/bonica/index2.html#" target="_blank">注册</a></li>-->
					</ul>
					<!-- TOP SOCIAL END -->
				</section>
			</section>
			<!-- TOP BAR END -->
			<!-- HEADER AREA (LOGO MENU) START -->
			<section class="headerarea">
				<section class="container">
					<!-- LOGO START -->
					<a href="index.html" class="site-logo">
						<img alt="Logo" src="assets/front/img/logo.png">
					</a>
					<!-- LOGO END -->
					<!-- NAV MENU START -->
					<nav class="navbar">
						<!-- MOBILE MENU START -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						<!-- MOBILE MENU END -->
						<!-- MENU LIST START -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="index#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Home</a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="front/index">Home 1</a></li>
									<li><a href="front/welcome/index2">Home 2</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="index2" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories</a>
								<ul class="dropdown-menu" role="menu">
									<?php
									    foreach( $categories as $category){
									?>
									<li><a href="front/category?category=<?php echo $category -> category_id;?>"><?php echo $category->category_name; ?></a></li>
									<?php }?>
								</ul>
							</li>
							<li><a href="front/about">About Us</a></li>
							<li><a href="front/contact">Contact</a></li>
						  </ul>
						</div>
						<!-- MENU LIST END -->
					</nav>
					<!-- NAV MENU END -->
				</section>
			</section>
			<!-- HEADER AREA (LOGO MENU) END -->
		</header>