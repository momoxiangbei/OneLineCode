<?php
	require_once '../config/db.php';
	$code_id=$_GET['id'];
	$sql="delete from codes where id=$code_id";
	mysql_query($sql);
	header("location:index.php");
?>