<?php
	session_start();
	$msg = "";
	$jumpUrl = "../login.php";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["user"])){
			$user = $_POST["user"];
			$_SESSION["user"]=$user;
			if(!empty($_POST["iscookie"])){
				setcookie("c_user",$user,time()+864000,"/");
			}
			$msg = "登录成功";
			include "tips.php";
			exit;	
		}else{
			$msg = "用户名不能为空";
			include "tips.php";
			exit;	
		}
	}
?>