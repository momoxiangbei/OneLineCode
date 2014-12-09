<?php
    error_reporting(0);
    require_once '../config/db.php';
    $password=$_POST['password'];
    $result=mysql_query('select * from users'); 
    $date=array();
    while ($row=mysql_fetch_assoc($result) ){
         $date[]=$row;
    }
    foreach ($date as $user) {
      if (($user['nick_name'] == $name_email||$user['email']==$name_email)&& $user['password'] == $password) {
        header("location:../Personal-info/index.php");
      }elseif(($user['nick_name'] != $name_email&&$user['email']!=$name_email) || $user['password'] != $password){
            echo "<font color='red'>用户名或密码错误</font>";                        
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>账户安全设置</title>
	<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/info.css">
</head>
<body>
	<div class="safetybody">
	<h1>安全设置</h1>
	<div class="content-left">

		<ul class="list-group">
			<li class="list-group-item">
				<img id="list-group-item-portrait" src="../img/4.jpg" alt="求真相">
			</li>
			<li class="list-group-item"><a href="../index.html" onfocus="this.blur();"><span class="badge">1</span>主页</a></li>
			<li class="list-group-item"><a href="info.html" onfocus="this.blur();"><span class="badge">2</span>个人资料</a></li>
			<li class="list-group-item"><a href="headImg.html" onfocus="this.blur();"><span class="badge">3</span>修改头像</a></li>
			<li class="list-group-item"><a href="safety.html" onfocus="this.blur();"><span class="badge">4</span>密码管理</a></li>
		</ul>
	</div>
	<ul class="nav nav-tabs" role="tablist">
 		<li role="presentation" class="active"><a href="#">修改密码</a></li>
	<form class="content-right" method="POST" action="change_pwd.php">
		<span style="margin-right:5px ;color:red">★</span>新密码:<input type="password" class="form-control">
		<span style="margin-right:5px ;color:red" >★</span>确认新密码:<input type="password" class="form-control">
		<span style="margin-right:5px ;color:red">★</span>验证码:<input type="text" class="form-control">
		验证码内容
		<div></div>
		<input type="submit" value="确定" class="btn btn-success">
	</form>

	</ul>
	<hr>
	</div>
</body>
</html>