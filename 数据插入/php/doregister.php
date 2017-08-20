<?php
	$msg = "";
	$jumpUrl = "../register.php";
	$conn = new mysqli("localhost","root","root","test_dome");
	if($conn->connect_error){
		echo "链接失败";
	}
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["userName"])){
			$user = test_input($_POST["userName"]);
			if(!preg_match("/^[a-zA-Z]\w{5,11}$/",$user)){
				$msg = "用户名格式不正确";
				include "../tips.php";
				exit;	
			}
		}else{
			$msg = "用户名不能为空";
			include "../tips.php";
			exit;	
		}
		
		$pass = $_POST["password"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$area = $_POST["area"];
		$sex = $_POST["sex"];
		
		$hobby = $_POST["hobby"];  // 获取到的是一个数组
		$hobbyStr = "";
		for($i=0; $i<count($hobby); $i++){
			$hobbyStr = $hobbyStr.$hobby[$i].",";
		}
		
	}else{
		$msg = "提交的方式不正确";
		include "../tips.php";
		exit;	
	}
	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;	
	}
	
	
	
	$sql = "INSERT INTO user_info(user_name,user_pass,user_email,user_phone,user_area,user_sex,user_hobby)VALUES('$user','$pass','$email','$phone','$area','$sex','$hobbyStr')";
	
	$sqlselect = "select user_name from user_info";
	$result = $conn->query($sqlselect);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			if($user==$row["user_name"]){
				$msg = "用户名已存在";
				include "tips.php";
				exit;
			}
		}
	}
	if($conn->query($sql)){
		$msg = "注册成功";
		$jumpUrl = "../login.php";
		include "tips.php";
		exit;
	}	
	
	
	
?>