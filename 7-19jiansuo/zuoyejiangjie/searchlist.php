<?php
	include "header.php";
	$search = $_POST["search"];
	
	$conn = new mysqli("localhost","root","root","item_demo");
	
	if($conn->connect_error){
		die("链接失败");
	}
	
	$sql = "SELECT * FROM my_article where ac_title like '%$search%'";
	
	$result = $conn->query($sql);
?>
	<ol class="breadcrumb">
      <li><a href="index.php">首页</a></li>
      <li class="active">搜索结果</li>
    </ol>
    <h1 class="page-header">一共有<?php echo $result->num_rows; ?>条数据</h1>
    <ul class="container-fluid list-unstyled list-li">
    	<?php
        	if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
		
		?>
      <li class="row">
        <a href="show.php?showid=<?php echo $row["ac_id"]; ?>" class="col-md-10"><?php echo $row["ac_title"]; ?></a>
        <span class=" col-md-2"><?php echo date("Y-m-d",$row["ac_date"]); ?></span>
      </li>
      <?php
      				
				}
			}
	  ?>
    </ul>
    <nav aria-label="Page navigation" class="text-center">
      <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
<?php
	include "footer.php";
?>