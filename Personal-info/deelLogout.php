<?php
	unset($_SESSION['user_id']);
	unset($_SESSION['nick_name']);
	session_destroy();
	header("location:../Login/login.php");

?>