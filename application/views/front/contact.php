<!DOCTYPE html>
<!-- saved from url=(0052)http://gloriatheme.com/demo/html/bonica/contact.html -->
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
	<body class="contact loaded">
		<div class="loader-wrapper">
			<div class="loader"></div>
			<div class="loader-section section-left"></div>
			<div class="loader-section section-right"></div>
		</div>
		<!-- HEADER START -->
<?php include 'header.php';?>	
		<!-- HEADER END -->
		<!-- HOME CONTENT START -->
		<!-- PAGE IMAGE START -->
		<section class="page-banner">
			<section class="page-banner-image" style="background-image:url(assets/front/img/contact.jpg);">
			</section>
		</section>
		<!-- PAGE IMAGE END -->
		<section class="site-content-wrapper">
			<section class="container">
				<section class="row">
					<!-- PAGE CONTENT START -->
					<div class="col-lg-12">
						<div class="page-content full-page-content">
							<div class="content-area clearfix">
								<!-- ABOUT TITLE START -->
								<div class="full-page-title">
									<h1>Contact</h1>
								</div>
								<!-- ABOUT TITLE END -->
								<p class="text-center">如果你对我感兴趣的话~可以留下信息以及联系方式喔~谢谢支持~</p>
								<p></p><hr><p></p>
								<!-- CONTACT FORM START -->
								<form id="frm_reg"  method="POST">
									<section class="row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" placeholder="NAME" required="">
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" placeholder="E-MAIL" required="">
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
												<input type="text" name="password" id="password" class="form-control" placeholder="PASSWORD" required="">
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="form-group">
										         <label for="username">my github:<a href="https://github.com/">https://github.com/</a></label>
										    </div>
										</div>
									</section>
									<input type="button" class="btn center-block" id="submit" value="提交"></button>
								</form>
								<!-- CONTACT FORM END -->
							</div>
						</div>
					</div>
					<!-- PAGE CONTENT END -->
				</section>
			</section>
		</section>
		<!-- HOME CONTENT END -->
		<!-- FOOTER START -->
<?php include 'footer.php';?>	
		<!-- FOOTER END -->
		<!-- JAVASCRIPT START -->
	<script src="assets/front/js/jquery.min.js"></script>
		<script src="assets/front/js/bootstrap.min.js"></script>
		<script src="assets/front/js/bonica.js"></script>
		<!-- JAVASCRIPT END -->
	<script>
	  
	  $(function(){
		
		$('#submit').on('click', function(){
			var $username = $('#name'),
				  $password = $('#password');
				  $email = $('#email');

			var bSubmit = true;
			if($.trim($username.val()) == ""){
				alert('请输入用户名!');
				$username.focus();
				bSubmit = false;
			}
			
			if($.trim($password.val()) == ""){
				alert('请输入密码!');
				$password.focus();
				bSubmit = false;
			}
			
			
			if($.trim($email.val()) == ""){
				alert('请输入邮箱!');
				$email.focus();
				bSubmit = false;
			}
			if(bSubmit){
				ajaxLogin($username.val(), $password.val(),$email.val());
			}
		});
		
		function ajaxLogin(sName, sPwd,sEmail){
			$.post('front/do_contact', {
				username: sName,
				password: sPwd,
				email:sEmail,
			}, function(data){
				if(data == 'success'){
					location.href = 'front/login';
				}else{
					location.href = 'front/reg';
				}
			}, 'text');
		}
	});
	
	
	  /*$(function(){
		$('#f_email').blur(function(){
			//url,data,callback,type
			//callback回调函数
			$.get( "user/check_name", {email: this.value}, function(data){
				if(data == 'success'){
					$('#email_tip').html('勾').removeClass('nodisp');
				}else{
					$('#email_tip').html('叉').removeClass('nodisp');
				}
			}, "text" );
		});
	});*/
	  
	  
	  
	  
	  
	  
	  
	  
	  
	</script>
</body></html>