<?php
	// 面向过程的方式
	
	$conn = mysqli_connect("localhost","root","root");
	
	if(!$conn){
		die(mysqli_connect_error()); // 打印错误信息
	}
	
	echo "链接成功";
	
	mysqli_close($conn);
	
?>