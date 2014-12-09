<?php
header("Content-Type: text/html; charset=utf-8");
mysql_connect('localhost', 'root', '') or die('数据库连接失败');
mysql_select_db('oneLineCode');
mysql_query("set names 'utf8'");
?>