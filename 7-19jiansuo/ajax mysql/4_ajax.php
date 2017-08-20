<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<script>
function strHtml(str){
	if(str=="请选择课程"){
		document.getElementById("strName").innerHTML = "";
		return;
	}
	if(window.XMLHttpRequest){
		var xHttp = new XMLHttpRequest();  // IE7以上版本，谷歌，火狐等	
	}else{
		var xHttp = new ActiveXObject("Microsoft.XMLHTTP");	 // 兼容IE6以下版本
	}
	
	xHttp.open("get","ajax_mysql.php?q="+str,true);
	xHttp.send();
	xHttp.onreadystatechange=function(){
		if(xHttp.readyState==4&&xHttp.status==200){
			document.getElementById("strName").innerHTML = xHttp.responseText;
		}	
	}
		
}
</script>
</head>

<body>
<select onChange="strHtml(this.value)">
	<option>请选择课程</option>
    <option>Web前端开发</option>
    <option>网络营销</option>
    <option>UI设计</option>
</select>
<div id="strName"></div>
</body>
</html>