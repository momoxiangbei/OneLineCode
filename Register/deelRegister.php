<?php
	session_start();
	error_reporting(0);
	require_once '../config/db.php';
	$nick_name=$_POST['nick_name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$verify=$_POST['verify'];

	$is_insert=0;
	if($password!=$password2){
		echo "两次输入的密码不一致";
		$is_insert=1;
	}else{
		$date=array();
		$result=mysql_query('select * from users');
		while ($row = mysql_fetch_assoc($result)) {
			$date[]=$row;
		}
		foreach ($date as $user) {
			if($user['nick_name']==$nick_name){
				echo "此用户名已经注册";
				$is_insert=1;
			}elseif($user['email']==$email){
				echo "此邮箱已经注册";
				$is_insert=1;
			}
		}
	}
	if($verify!=$_SESSION['verify']){
		echo "验证码错误";
		$is_insert=1;
	}

	if($is_insert==0){
		$sql="insert into users(nick_name,email,password) values('$nick_name','$email','$password')";
		$result=mysql_query($sql);
		header("location:../Login/login.php");
	}

?>