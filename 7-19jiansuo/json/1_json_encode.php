<?php
	$arr = array(
		"name"=>"小明",
		"age"=>18,
		"sex"=>"男"
	);
	
	$arr1 = array("haha","heheh");
	
	$str = "webqianduankaifa";
	echo json_encode($arr)."<br>";  // json_encode() 将变量转成json格式的
	var_dump(json_encode($arr));
	echo "<br>";
	echo json_encode($arr1);
?>
