<?php
	$conn = new mysqli("localhost","root","root","item_demo");
	if($conn->connect_error){
		die("链接失败");
	}
	$q = $_REQUEST["q"];
	$sql ="SELECT * FROM my_article WHERE ac_column='$q'";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		
				

?>
<table>
	<tr>
    	<th>ID</th>
        <th>标题</th>
    </tr>
    <?php
    	while($row=$result->fetch_assoc()){
	?>
    <tr>
    	<td><?php echo $row["ac_id"]; ?></td>
        <td><?php echo $row["ac_title"]; ?></td>
    </tr>
    <?php
    	}
	?>
</table>
<style>
table{ border-collapse:collapse;}
td,th{border:1px solid #ccc; padding:5px 10px;}
</style>
<?php
			
	}else{
		echo "没有对应的数据！";	
	}
	$conn->close();
?>