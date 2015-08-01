
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Login Page | Amaze UI Example</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>"/>
  <link rel="alternate icon" type="image/png" href="assets/admin/i/favicon.png">
  <link rel="stylesheet" href="assets/admin/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>个人网站注册管理</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

    <form id="myform" method="post" class="am-form" >
      <label for="username">用户名:</label>
      <input type="text" name="username" id="username" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
      <label for="password">密码确认:</label>
      <input type="password" name="password2" id="password2" value="">
      <br>
      <label for="password">邮箱:</label>
      <input type="text" name="email" id="email" value="">
      <br>
      <!--<label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label>-->
      <div class="am-cf">
        <input type="button" name="" value="登 录" id="submit" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
    <p>© 吴双(ws_frost_HOME).</p>
  </div>
</div>
  <script src="assets/admin/js/jquery.min.js"></script>
<script src="assets/admin/js/util.js"></script>
<script>

	$(function(){
		
		$('#submit').on('click', function(){
			var $username = $('#username'),
				  $password = $('#password');
				  $password2 = $('#password2');
				  $email = $('#email');
				  $gender = $('#gender');

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
			
			if($.trim($password2.val()) == ""){
				alert('请输入确认密码!');
				$password2.focus();
				bSubmit = false;
			}
			
			if($.trim($email.val()) == ""){
				alert('请输入邮箱!');
				$email.focus();
				bSubmit = false;
			}
			if(bSubmit){
				ajaxLogin($username.val(), $password.val(),$password2.val(),$email.val());
			}
		});
		
		function ajaxLogin(sName, sPwd,sPwd2,sEmail){
			$.post('front/do_reg', {
				username: sName,
				password: sPwd,
				password2:sPwd2,
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
</script>


















</body>
</html>