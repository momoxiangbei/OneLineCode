<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>OneLineCode</title>
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
<!-- ============================================= 导航栏-->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="img/qq.png" alt="" width="48" height="52">
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">下载</a></li>
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
               <li><a href="Login/login.php">登陆</a></li>
                <li><a href="Register/register.php">注册</a></li>
                <li class="divider"></li>
               <li><a href="#">下载</a></li>
              </ul>
           </li>
        </ul>
        </div>
      </div>
    </nav>

<!-- ===============================================导航结束 -->
<!-- 焦点图开始================================================ -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/4.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>第一张美女图</h1>
              <p>正如你看到的,这是第一张美女图</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">马上注册</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/4.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>第二张美女图</h1>
              <p>正如你看到的 这是第二张美女图</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">我搜一搜</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/4.jpg" alt="Third slide" style="width:400px;height:600px;">
          <div class="container">
            <div class="carousel-caption">
              <h1>第三章美女图</h1>
              <p>正如你所看到的,这是第三张美女图</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">联系我们</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" >
      <span class="glyphicon glyphicon-chevron-left" ></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" ></span>
      </a>
    </div>
<!--焦点图结束================================================= -->
    <div class="intro">
      <li>
        <div class="row">
          <h2>你的代码</h2>
        </div>
        <div class="content">
          <div class="content-left">
            <h3><i class="glyphicon glyphicon-file">写作</i></h3>
            <p>在这里专注完成写作，记忆代码。</p>
          </div>         
          <span class="img"></span>
          <br class="clearfix">
        </div>
      </li> 
      <li class="collect">
        <div class="collect-text-postion">
          <h3><i class="glyphicon glyphicon-book"></i>收集</h3>
          <p>轻松收集有价值的信息：收藏网页、拍下手写笔记或名片，不错过每个项目的重要细节。</p>
        </div>
      </li>
      <li class="find">
      <div class="find-text-position">
        <h3><i class="glyphicon glyphicon-search">发现</i></h3>
        <p>这里,你可以发现你不知道的小知识!</p>
      </div>
      </li>
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

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
      <script src="js/docs.min.js"></script>
     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="js/ie10-viewport-bug-workaround.js"></script>
    
  </body>
</html>
