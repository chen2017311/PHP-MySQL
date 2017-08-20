<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
*{margin:0; padding:0;}
.box{width:500px; height:200px; border:1px solid #eaeaea; position:absolute; top:50%; left:50%; margin:-100px 0 0 -250px;}
.box h2{text-align:center; line-height:2; background:#ccc;}
.box p{text-align:center; padding-top:50px;}
.box p span{font-weight:bold; color:red;}
</style>
</head>

<body>

<div class="box">
<h2>提示框</h2>
<p><?php echo $msg; ?> <a id="jumUrl" href="<?php echo $jumpUrl; ?>">跳转</a> <span id="timeout">3</span>秒后为您自动跳转</p>
</div>
<script>
window.onload = function(){
	var url = document.getElementById("jumUrl").href;
	var n = 3;
	setInterval(function(){
		n--;
		document.getElementById("timeout").innerHTML=n;
		if(n==0){
			window.location = url;
		}	
	},1000);
		
}
</script>
</body>
</html>