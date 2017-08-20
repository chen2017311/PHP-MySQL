<?php
	try{
		$conn = new PDO("mysql:host=localhost;dbname=test","root","root");
		echo "链接成功";
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	
	$conn = NULL; // 关闭数据库链接
?>