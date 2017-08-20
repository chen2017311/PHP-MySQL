<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script type="text/javascript" src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script>
/*function strHtml(str){
	if(str==""){
		document.getElementById("strName").innerHTML = "";
		return;
	}
	if(window.XMLHttpRequest){
		var xHttp = new XMLHttpRequest();  // IE7以上版本，谷歌，火狐等	
	}else{
		var xHttp = new ActiveXObject("Microsoft.XMLHTTP");	 // 兼容IE6以下版本
	}
	
	xHttp.open("get","http://localhost/kejian/demo/day9/ajax.php?q="+str,true);  // 跨域
	xHttp.send();
	xHttp.onreadystatechange=function(){
		if(xHttp.readyState==4&&xHttp.status==200){
			document.getElementById("strName").innerHTML = xHttp.responseText;
		}	
	}
		
}*/

// jquery ajax 实现跨域请求
$(function(){
	$("input").keyup(function(){
		var val = $(this).val();
		if(val==""){
			$("#strName").html("");
			return;
		}
		$.ajax({
			url:"http://localhost/kejian/demo/day9/ajax_ky.php?q="+val,  // 请求地址
			type:"get",  // get或post
			dataType:"jsonp", // 数据格式
			jsonp:"jsonpcallback",  // 返回函数
			success: function(data){  // 成功以后的回调函数
				$("#strName").html(data)
			},error: function(){  // 失败以后的回调函数
				alert("请求失败");
			}	
		});	
	});	
});
</script>
</head>

<body>
<input type="text" value="">
<div id="strName"></div>
</body>
</html>