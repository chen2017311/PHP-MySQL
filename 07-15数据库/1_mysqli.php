<?php
	// 面向对象的方式
	$conn = new mysqli("localhost","root","root");
	
	//  new mysqli(主机名，数据库名，数据库密码);
	
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
	echo "链接成功";
	
	$conn->close();
	
?>