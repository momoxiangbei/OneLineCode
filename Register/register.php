<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册</title>
	<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/register.css">
</head>
<body>
	<div class="header">
		<h2>OneLineCode</h2>
	</div>
	<form action="../Register/deelRegister.php" method="POST">
	<div class="container">
	<div class="register col-md-6 col-md-offset-3">
		<h3>注册新用户</h3>
		<div class="input-info">
			<div class="input-group">
  			<span class="input-group-addon">用户名</span>
  			<input type="text" class="form-control" placeholder="字母,数字等,用户名唯一" name="nick_name">
			</div>
			<div class="input-group">
  			<span class="input-group-addon">邮箱</span>
  			<input type="text" class="form-control" placeholder="hello@OneLineCode.com" name="email">
			</div>
			<div class="input-group">
  			<span class="input-group-addon">密码</span>
  			<input type="text" class="form-control" placeholder="Password" name="password">
			</div>
			<div class="input-group">
  			<span class="input-group-addon">确认密码</span>
  			<input type="text" class="form-control" placeholder="Password" name="password2">
			</div>
			<div class="input-group">
  			<span class="input-group-addon">验证码</span>
  			<input type="text" class="form-control" placeholder="请输入下方验证码" name="verify">
  			<img id="captcha_img" src="../config/verify.php?r=<?php echo rand();?>">
            <a href="javascript:void()" onclick="document.getElementById('captcha_img').src='../config/verify.php?r='+Math.random()">看不清？</a>
			</div>
			<div class="input-group">
  				<input type="submit" value="注 册" class="btn btn-success">
			</div>
		</div>
	</div>
	</div>
	</form>
	<div class="footer">
		<div class="container">
			<ul class="list-group ">
			<li class="list-group-item col-md-2"><a href="">首页</a></li>
			<li class="list-group-item col-md-2"><a href="">登陆</a></li>
			<li class="list-group-item col-md-2"><a href="">找回密码</a></li>
		</ul>
		</div>
	</div>
</body>
</html>