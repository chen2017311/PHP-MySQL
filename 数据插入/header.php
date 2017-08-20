<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-sm" href="index.php">首页</a>
    </div>
    <div class="navbar-collapse collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="hidden-sm hidden-md"><a href="category.html">前端资讯</a></li>
        <li><a href="change.html">课程选择</a></li>
        <li><a href="vote.html">投票</a></li>
        <li><a href="search.html">搜索</a></li>
        <?php
			$c_user = "";
			if(isset($_COOKIE["c_user"])){
				$c_user = $_COOKIE["c_user"];
				echo "<li><a href='####'>$c_user</a></li>";
				echo "<li><a href='php/outlogin.php'>注销</a></li>";
			}else{
				if(isset($_SESSION["user"])){
					$userS = $_SESSION["user"];
					echo "<li><a href='####'>$userS</a></li>";
					echo "<li><a href='php/outlogin.php'>注销</a></li>";
				}else{
					echo "<li><a href='register.php'>注册</a></li>";
					echo "<li><a href='login.php'>登录</a></li>";	
				}
			}
		?>
        
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-sm">
        <li><a href="about.html">关于我们</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="container">
    <div id="carousel-example-generic" class="carousel slide marginTop" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="images/hdp_01.jpg" alt="..." width="100%">
        </div>
        <div class="item">
          <img src="images/hdp_02.jpg" alt="..." width="100%">
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>