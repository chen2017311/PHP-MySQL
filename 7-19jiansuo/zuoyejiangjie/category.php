<?php
	include "header.php";
	$conn = new mysqli("localhost","root","root","item_demo");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
	$sqlWeb = "SELECT * FROM my_article  WHERE ac_column='Web前端开发'";

	
?>
	<ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active">前端资讯</li>
    </ol>
<div class="row marginTop20">
	<div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-success">
            <span class="glyphicon glyphicon-user"></span> Web前端开发
          </a>
          <a href="#" class="list-group-item">Web前端面试时都问什么</a>
          <a href="#" class="list-group-item">面试小满科技Web前端工程师经验</a>
          <a href="#" class="list-group-item">面试易果电子Web前端工程师经验</a>
          <a href="#" class="list-group-item">百度、阿里大型企业Web前端面试经验分享</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item  list-group-item-info">
            <span class="glyphicon glyphicon-question-sign"></span> 常见问题
          </a>
          <a href="#" class="list-group-item">Web培训多少钱？Web培训费用</a>
          <a href="#" class="list-group-item">Web前端培训机构哪家好？Web前端培训机构有哪些？</a>
          <a href="#" class="list-group-item">理科生学什么专业就业前景好?</a>
          <a href="#" class="list-group-item">文科女生学什么专业就业前景好？</a>
        </div>
    </div>
	<div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item">
            <span class="glyphicon glyphicon-th-large"></span> HTML5
          </a>
          <a href="#" class="list-group-item">HTML5里的placeholder属性</a>
          <a href="#" class="list-group-item">HTML5体验改进的14条军规</a>
          <a href="#" class="list-group-item">绘制SVG内容到Canvas的HTML5应用</a>
          <a href="#" class="list-group-item">HTML5 Canvas中绘制矩形实例教程</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item active">
            <span class="glyphicon glyphicon-list-alt"></span> JavaScript
          </a>
          <a href="#" class="list-group-item">12个非常实用的JavaScript小技巧</a>
          <a href="#" class="list-group-item">为什么JavaScript开发如此疯狂</a>
          <a href="#" class="list-group-item">那些容易被忽视的 JavaScript 细节</a>
          <a href="#" class="list-group-item">为什么说JavaScript中的DOM操作很慢</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-warning">
            <span class="glyphicon glyphicon-list"></span> JQuery
          </a>
          <a href="#" class="list-group-item">HTML5里的placeholder属性</a>
          <a href="#" class="list-group-item">HTML5体验改进的14条军规</a>
          <a href="#" class="list-group-item">绘制SVG内容到Canvas的HTML5应用</a>
          <a href="#" class="list-group-item">HTML5 Canvas中绘制矩形实例教程</a>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-danger">
            <span class="glyphicon glyphicon-align-left"></span> 前端框架
          </a>
          <a href="#" class="list-group-item">12个非常实用的JavaScript小技巧</a>
          <a href="#" class="list-group-item">为什么JavaScript开发如此疯狂</a>
          <a href="#" class="list-group-item">那些容易被忽视的 JavaScript 细节</a>
          <a href="#" class="list-group-item">为什么说JavaScript中的DOM操作很慢</a>
        </div>
    </div>
</div>   
<?php
	include "footer.php";
?>