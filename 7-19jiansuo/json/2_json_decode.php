<?php
	$json = '{"name":"xiaoming","age":"18"}';
	
	//echo json_decode($json);
	echo "<pre>";
	var_dump(json_decode($json));
	echo "<pre>";
	var_dump(json_decode($json,true));  // 将json格式转换成对象或数组，如果第二个参数为true则转成的是数组，默认是false；
	

?>
