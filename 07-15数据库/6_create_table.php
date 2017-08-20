<?php
	// 链接数据库
	
	$conn = new mysqli("localhost","root","root","ujiuye");
	
	if($conn->connect_error){
		die("链接数据库失败：".$conn->connect_error);
	}
	// 创建一个表 create table 表名(设置字段)
	$sql = "CREATE TABLE user_info(
		t_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		t_username VARCHAR(32) NOT NULL,
		t_password VARCHAR(32) NOT NULL,
		t_email VARCHAR(32) NOT NULL,
		t_date TIMESTAMP 
	)";
	
	if($conn->query($sql)){
		echo "创建表成功";	
	}else{
		echo $conn->error;	
	}
	
	
	
	
?>