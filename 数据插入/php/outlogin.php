<?php
	session_start();
	$msg = "";
	$jumpUrl = "../login.php";
	session_destroy();
	setcookie("c_user","1",time()-1,"/");
	$msg = "退出登录";
	include "tips.php";
	exit;
	
?>