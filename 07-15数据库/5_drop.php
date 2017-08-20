<?php
	// 链接数据库
	
	$conn = new mysqli("localhost","root","root");
	
	if($conn->connect_error){
		die("链接数据库失败：".$conn->connect_error);
	}
	// 删除数据库  drop database  数据库名称
	$sql = "DROP DATABASE my_ujiuye";  // sql语句   my_create
	
	if($conn->query($sql)){ // 执行命令一条sql语句
		echo "删除数据库成功";	
	}else{
		echo $conn->error;
	}
	
	
?>