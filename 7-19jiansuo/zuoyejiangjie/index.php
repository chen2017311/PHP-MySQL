<?php
	include "header.php";
	$conn = new mysqli("localhost","root","root","item_demo");
	if($conn->connect_error){
		die($conn->connect_error);
	}
	
	$sql = "SELECT * FROM my_article order by ac_date desc limit 8";
	$result = $conn->query($sql);
	
?>
      <div class="projects-header page-header">
        <h2>Web前端课程推荐</h2>
        <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
      </div>

      <div class="row">
		<?php
        	if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
		?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail">
            <a href="show.php?showid=<?php echo $row["ac_id"]; ?>" target="_blank" title="<?php echo $row["ac_title"]; ?>">
            	<img class="lazy" src="<?php echo $row["ac_thum"]; ?>" width="300" alt="<?php echo $row["ac_title"]; ?>"></a>
            <div class="caption">
              <h3>
                <a href="show.php?showid=<?php echo $row["ac_id"]; ?>" target="_blank" title="<?php echo $row["ac_title"]; ?>"><?php echo mb_substr($row["ac_title"],0,8); ?></a><br><a href="list.php?listid=<?php echo $row["ac_column"]; ?>"><small><?php echo $row["ac_column"]; ?></small></a>
              </h3>
              <p>
              	<?php 
					echo mb_substr($row["ac_describe"],0,30,"UTF8"); 
					// mb_substr(要截取的字符串，从哪儿开始，截取多少个字)，中英文、标点、特殊字符统统都算一个字
				?>
              </p>
            </div>
          </div>
        </div>
		<?php
				}
			}else{
				echo "没有查询到数据";	
			}
		?>
        
	</div>
    <div class="projects-header page-header">
        <h2>Web前端课程选择</h2>
        <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
    </div>
    <table class="table table-bordered">
    	<thead>
          <tr>
            <th>班级名称</th>
            <th>课时</th>
            <th>价格</th>
            <th>免费试听</th>
            <th>购买课程</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>就业精品班（面授/封闭班/包食宿）</td>
            <td>4个月</td>
            <td>优惠价17800.00 <del>原价17800.00</del></td>
            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
            <td><a href="#" class="btn btn-danger">立即报名</a></td>
          </tr>
          <tr>
            <td>软件基础网课（网课/远程教学班）</td>
            <td>96</td>
            <td>优惠价580.00 <del>原价980.00</del></td>
            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
            <td><a href="#" class="btn btn-danger">立即报名</a></td>
          </tr>
          <tr>
            <td>Dreamweaver网页制作基础</td>
            <td>41</td>
            <td>优惠价399.00 <del>原价499.00</del></td>
            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
            <td><a href="#" class="btn btn-danger">立即报名</a></td>
          </tr>
         </tbody>
    </table>
<?php
	include "footer.php";
?>