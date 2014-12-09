<?php
	session_start();
	require_once '../config/db.php';
	$code_id=$_GET['id'];
	$code=$_POST['code'];
	$node=$_POST['node'];
	$uid=$_SESSION['user_id'];
	$sql="delete from codes where id=$code_id";
	mysql_query($sql);
	$sql="insert into codes(code,node,uid) values('$code','$node','$uid')";
	mysql_query($sql);
	header("location:index.php");
?>