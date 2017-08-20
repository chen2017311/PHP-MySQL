function preg_match(){
	var user = document.getElementById("user");
	var pass = document.getElementById("password");
	var passdb = document.getElementById("passdb");
	var email = document.getElementById("email");
	var phone = document.getElementById("phone");
	var onOff = document.getElementById("onOff");
	
	var userRep = /^[a-zA-Z0-9]+$/;
	var emailRep = /^\w+\@\w+\.\w+$/;
	var phoneRep = /^1[3-9][0-9]{9}$/;
	
	if(user.value==""){
		alert("用户名不能为空！");
		return false;
	}
	if(!userRep.test(user.value)){
		alert("用户名必须是字母和数字组成！");
		return false;
	}
	if(pass.value==""){
		alert("密码不能为空！");
		return false;
	}
	if(pass.value != passdb.value){
		alert("两次输入的密码不一致！");
		return false;
	}
	if(email.value==""){
		alert("邮箱不能为空！");
		return false;
	}
	if(!emailRep.test(email.value)){
		alert("邮箱格式不合法！");
		return false;
	}
	
	if(phone.value==""){
		alert("手机号不能为空！");
		return false;
	}
	if(!phoneRep.test(phone.value)){
		alert("不是一个有效的手机号");
		return false;
	}
	if(!onOff.checked){
		alert("请认真阅读协议，同意后继续！");
		return false;
	}
	
	return true;
}