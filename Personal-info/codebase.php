<?php
	session_start();
	require_once '../config/db.php';
	$search=isset($_POST['search'])?trim($_POST['search']):'';
	$sql="select * from codes where code like '%{$search}%'";
    $result=mysql_query($sql); 
    $date=array();
    while ($row=mysql_fetch_assoc($result) ){
        $date[]=$row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>代码库</title>
	<link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/info-index.css">
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<div class="navbar-brand"><img src="../img/qq.png" alt="" ></div>
				<ul class="nav navbar-nav">
					<li><a href="index.php">我的代码库</a></li>
					<li ><a href="codebase.php">OLC代码库</a></li>
					<li>
						<?php   
							if(isset($_SESSION['user_id'])){
								echo '您好！'.$_SESSION['nick_name'];
							}
						?>
					</li>
				</ul>
				<form class="navbar-form navbar-left" role="search" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name="search">
					</div>
					<button type="submit" class="btn btn-default" >搜 索</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href=""><i class="glyphicon glyphicon-log-out"></i></a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">添加内容</a></li>
							<li class="divider"></li>
							<li><a href="">修改资料</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="content">
		<div class="content-table">
			<table class="table table-bordered table-striped table-hover">
				<tbody>
				<?php 
					foreach ($date as $codes) {
				?>
					<tr id="code">
						<td><xmp>
						<?php						
								echo $codes['code'];
						?>
						</xmp></td> 
						<td ><a href="" class="btn btn-primary">赞</a>
							<a href="" class="btn btn-warning">转载</a>
						</td>
					</tr>
					<tr id="note">
						<td ><xmp >
						<?php
								echo $codes['node'];
						?>
						</xmp></td>
					</tr>
				<?php
					}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="friendshiplink">
		<ul>
			<li>友情链接:</li>
			<li> <a href="">默默向北</a></li>
			<li><a href="">默默向北</a></li>
			<li><a href="">默默向北</a></li>
			<li><a href="">默默向北</a></li>
			<li><a href="">默默向北</a></li>
			<br class="clearfix">
		</ul>
	</div>
	<div class="footer">
		<a href="">简介</a> ┊ <a href="">About OneLineCode</a> ┊<a href="">广告服务</a>  ┊ <a href="">联系我们</a> ┊ <a href=""诚聘英才></a> ┊<a href=""> 网站律师</a> ┊ <a href="">注册</a> ┊<a href="">产品答疑</a> 
	</div>
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>