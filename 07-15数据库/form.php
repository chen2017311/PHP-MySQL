<?php
	$conn = new mysqli("localhost","root","root","ujiuye");
	
	if($conn->connect_error){
		die("链接失败");
	}
	
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	$age = $_POST["age"];
	
	
	$sql = "INSERT INTO user_info(username,password,age)VALUES('$user','$pass','$age')";
	
	if($conn->query($sql)){
		echo "注册成功";
	}else{
		echo "注册失败";	
	}
	
?>