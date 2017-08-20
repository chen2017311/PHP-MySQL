// JavaScript Document
function pregMatch(){
	var user = document.getElementsByName("userName")[0];
	var userErr = document.getElementById("userErr");
	
	var xieyi = document.getElementById("xieyi");
	
	var relUser=/^[a-zA-Z]\w{5,11}$/;
	
	if(user.value==""){
		userErr.innerHTML = "用户名不能为空";
		return false;
	}
	
	if(!relUser.test(user.value)){
		userErr.innerHTML = "你输入的用户名格式不正确";
		return false;
	}
	
	if(!xieyi.checked){
		alert("请认真阅读协议并同意后完成注册！");
		return false;	
	}
	
	
	return true;	
}