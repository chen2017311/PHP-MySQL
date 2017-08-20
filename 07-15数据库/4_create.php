<?php
	// 链接数据库
	
	$conn = new mysqli("localhost","root","root");
	
	if($conn->connect_error){
		die("链接数据库失败：".$conn->connect_error);
	}
	// 创建数据库  create database  数据库名称
	$sql = "CREATE DATABASE my_ujiuye";  // sql语句   my_create
	
	if($conn->query($sql)){ // 执行命令创建一个数据库
		echo "创建数据库成功";	
	}else{
		echo $conn->error;
	}
	
	
?>