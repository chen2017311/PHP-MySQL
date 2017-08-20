<?php
	include "header.php";
?>
<script>
function vote(){
	var inp = document.getElementsByName("vote");
	var val = "";
	for(var i=0; i<inp.length; i++){
		if(inp[i].checked){
			val = inp[i].value;
		}
	}
	// ajax 
	if(window.XMLHttpRequest){
		var xHttp = new XMLHttpRequest();
	}else{
		var xHttp = new ActiveXObject("Microsoft.XMLHTTP");	
	}
	xHttp.open("GET","php/dovote.php?q="+val,true);
	xHttp.send();
	xHttp.onreadystatechange=function(){
		if(xHttp.readyState==4&&xHttp.status==200){
			//alert(xHttp.responseText);
			document.getElementById("voteid").innerHTML = xHttp.responseText;
		}	
	}
}
</script>
    <ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active">投票</li>
    </ol>
    <div id="voteid">
    <div class="projects-header page-header">
       <h2>请选择你喜欢的课程</h2>
       <p>你觉得你比较喜欢下列哪个课程，请选择</p>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="vote" id="optionsRadios1" value="1">
        PC端网站重构
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="vote" id="optionsRadios2" value="2">
        移动端网站重构
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="vote" id="optionsRadios3" value="3">
        JavaScript
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="vote" id="optionsRadios4" value="4">
        JQuery
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="vote" id="optionsRadios5" value="5">
        Bootstrap
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="vote" id="optionsRadios5" value="6">
        Angular
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="vote" id="optionsRadios5" value="7">
        H5高级课程
      </label>
    </div>
    <input type="button" value="投票" class="btn btn-success" onClick="vote()">
    </div>
    
	
<?php
	include "footer.php";
?>