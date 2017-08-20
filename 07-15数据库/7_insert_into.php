<?php
	$conn = new mysqli("localhost","root","root","ujiuye");
	
	if($conn->connect_error){
		die("链接失败");
	}
	
	// 插入数据 insert into 表名(字段)values(值);
	
	$sql = "INSERT INTO user_info(username,password,age)VALUES('web515','hahahah',21)";
	
	if($conn->query($sql)){
		echo "插入数据成功";
	}else{
		echo "插入数据错误";	
	}
	
	$conn->close();
?>