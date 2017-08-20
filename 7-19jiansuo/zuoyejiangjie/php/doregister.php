<?php
	include "config.php";
	$jumpUrl = "../register.php";
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(!empty($_POST["user"])){
			$user = test_input($_POST["user"]);
			if(!preg_match("/^[a-zA-Z0-9]+$/",$user)){
				$msg= "用户名不合法";
				include "tips.php";
				exit;
			}
		}else{
			$msg= "用户名不能为空";
			include "tips.php";
			exit;	
		}
		if(!empty($_POST["password"])){
			$pass = test_input($_POST["password"]);
		}else{
			$msg= "密码不能为空";
			include "tips.php";
			exit;	
		}
		if(!empty($_POST["email"])){
			$email = test_input($_POST["email"]);
			if(!preg_match("/^\w+\@\w+\.\w+$/",$email)){
				echo "邮箱不合法";
				include "tips.php";
				exit;
			}
		}else{
			echo "邮箱不能为空！";
			include "tips.php";
			exit;	
		}
		if(!empty($_POST["phone"])){
			$phone = test_input($_POST["phone"]);
			if(!preg_match("/^1[3-9][0-9]{9}$/",$phone)){
				echo "手机号格式不合法！";
				include "tips.php";
				exit;
			}
		}else{
			echo "手机号不能为空！";
			include "tips.php";
			exit;	
		}
		
		$area = test_input($_POST["area"]);
		if($area=="请选择省份"){
			$area="";
			echo "请选择省份！";
			include "tips.php";
			exit;		
		}
		$sex = $_POST["sex"];
		$hobyStr = "";
		if(!empty($_POST["hoby"])){
			$hoby = $_POST["hoby"];
			
			for($i=0; $i<count($hoby); $i++){
				$hobyStr .= $hoby[$i]."|";
			}	
		}
		
		//$userinfo = $user.";".$pass.";".$email.";".$phone.";".$area.";".$sex.";".$hobyStr;
		$times = date("Y-m-d H:i:s");
		
		
	}
	
	$conn = new mysqli($servername,$serveruser,$serverpass,"item_demo");
	if($conn->connect_error){
		die("链接失败");
	}
	
	$sqlselect = "SELECT * FROM user_info where user_name='$user'";
	$result = $conn->query($sqlselect);
	
	if($result->num_rows>0){
		$msg = "用户名已存在";
		include "tips.php";
		exit;
	}
	
	$sql = "INSERT INTO user_info(user_name,user_password,user_email,user_phone,user_area,user_sex,user_hoby,user_date) VALUES ('$user','$pass','$email','$phone','$area','$sex','$hobyStr','$times')";
	
	if($conn->query($conn,$sql)){
		$msg = "注册成功";
		$jumpUrl = "login.php";
		exit;
	}else{
		echo $sql;
		exit;
		$msg = "注册失败";
		include "tips.php";
		exit;	
	}
	
	$conn->close();
	
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>