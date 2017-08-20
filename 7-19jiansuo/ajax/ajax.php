<?php
	$arr = array("web","webqianduan","webapp","php","asp","jsp","js","word");
	
	$q = $_REQUEST["q"]; // post get 方式发送的请求都能接受到
	
	if(strlen($q)>0){
		$hstr = "";
		for($i=0; $i<count($arr); $i++){
			if($q==substr($arr[$i],0,strlen($q))){  // substr(字符串,从哪个下标开始，找几个字符) 返回的查找结果
				if($hstr==""){
					$hstr=$arr[$i];	
				}else{
					$hstr.="，".$arr[$i];		
				}
					
			}
		}
	}
	
	if($hstr==""){
		$response = "木有内容";
	}else{
		$response = $hstr;	
	}
	
	echo $response;
	
?>