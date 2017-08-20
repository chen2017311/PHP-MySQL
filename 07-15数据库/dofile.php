<?php
	//var_dump($_FILES["upfile"]["name"]);
	
	$names = $_FILES["upfile"]["name"];
	$tmp = $_FILES["upfile"]["tmp_name"];
	$num = 0;
	for($i=0; $i<count($names); $i++){
		if($names[$i]!=""){
			// 其实这个里面单个上传文件怎么处理，这儿就要怎么处理
			move_uploaded_file($tmp[$i],"uploads/".$names[$i]);
		}else{
			$num++;	
		}
	}
	if($num==count($names)){
		echo "没有选择任何文件";
	}
	
?>