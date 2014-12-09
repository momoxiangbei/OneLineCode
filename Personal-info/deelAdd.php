<?php
	session_start();
	require_once '../config/db.php';
	$code=$_POST['code'];
	$node=$_POST['node'];
	$uid=$_SESSION['user_id'];
	
	$sql="insert into codes(code,node,uid) values('$code','$node','$uid')";
	mysql_query($sql);
	header("location:index.php");
