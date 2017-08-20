<?php
	session_start();
	$conn = new mysqli("localhost","root","root","item_demo");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
	$msg = "";
	$jumpUrl = "../login.php";
	
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["user"])){
			$user = test_input($_POST["user"]);
		}else{
			$msg = "用户名不能为空";
			include "tips.php";
			exit;	
		}
		if(!empty($_POST["pass"])){
			$pass = test_input($_POST["pass"]);
		}else{
			$msg = "密码不能为空";
			include "tips.php";
			exit;	
		}
	}
	
	$sql = "SELECT * FROM user_info where user_name='$user'";
	$result = $conn->query($sql);
	
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			if($pass == $row["user_password"]){
				$_SESSION["user"]=$user;
				if(!empty($_POST["iscookie"])){
					setcookie("c_user",$user,time()+864000,"/");
				}
				$msg = "登录成功";
				$jumpUrl = "../index.php";
				include "tips.php";
				exit;
			}
		}
	}else{
		$msg = "用户名不存在";
		include "tips.php";
		exit;	
	}
	
	$msg = "密码错误";
	include "tips.php";
	exit;
	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	$conn->close();
	
?>