<?php
	include "header.php";
	$conn = new mysqli("localhost","root","root","item_demo");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	$listid = "";
	$page = "";
	$pageSize = 5;  // 设置一页5条
	$star = 0; // 从那条开始
	if(!empty($_GET["page"])){
		$page = $_GET["page"];
		$star = ($page-1)*$pageSize;
	}
	if(!empty($_GET["listid"])){
		$listid = $_GET["listid"];
		$sql = "SELECT * FROM my_article WHERE ac_column='$listid' limit $star,$pageSize";
		$totsql  = "SELECT * FROM my_article WHERE ac_column='$listid'";
	}else{
		$listid = "全部内容";
		$sql = "SELECT * FROM my_article limit $star,$pageSize";
		$totsql  = "SELECT * FROM my_article";	
	}
	
	$result = $conn->query($sql);
	
	$totResult = $conn->query($totsql);  // 不限制条数
	$totSize = $totResult->num_rows;  // 总条数
	$pages = ceil($totSize/$pageSize);  // 总页数
	
			
	
?>
	<ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active"><?php echo $listid; ?></li>
    </ol>
    <h1 class="page-header"><?php echo $listid; ?></h1>
    <ul class="container-fluid list-unstyled list-li">
    <?php
    	if($result->num_rows>0){
			$n = 0;
			while($row = $result->fetch_assoc()){
				$n++;
				
	?>	
      <li class="row">
        <a href="show.php?showid=<?php echo $row["ac_id"]; ?>" class="col-md-10"><?php echo $row["ac_title"]; ?></a>
        <span class=" col-md-2"><?php echo date("Y-m-d H:i:s",$row["ac_date"]); ?></span>
      </li>
      <?php
	  			if($n%5==0){
					echo "<li style='height:12px'></li>";
				}
    		}
		}
	?>
    </ul>
    <!--
    	分页：
        	总条数  一页多少条
    -->
    <nav aria-label="Page navigation" class="text-center">
      <ul class="pagination">
        <li>
          <a href="list.php?<?php if($listid!="全部内容"){echo "listid=".$listid."&"; } ?>page=<?php if(($page-1)<=0){echo 1;}else{echo $page-1;}?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <?php
        	for($i=1; $i<=$pages; $i++){
		?>
        <li class="<?php if($i==$page || ($page==""&&$i==1)){echo "active"; }?>"><a href="list.php?<?php if($listid!="全部内容"){echo "listid=".$listid."&"; } ?>page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php
        	}
		?>
        <li>
          <a href="list.php?<?php if($listid!="全部内容"){echo "listid=".$listid."&"; } ?>page=<?php if(($page+1)>=$pages){echo $pages;}else{echo $page+1;} ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
<?php

	include "footer.php";
?>