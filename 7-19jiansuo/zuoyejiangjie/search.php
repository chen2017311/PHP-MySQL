<?php
	include "header.php";
?>
    <ol class="breadcrumb">
      <li><a href="#">首页</a></li>
      <li class="active">搜索</li>
    </ol>
	<form class="form-inline form-search text-center" method="post" action="searchlist.php">
      <div class="form-group">
        <label class="sr-only" for="search">请输入要搜索的内容</label>
        <input type="text" class="form-control" id="search" name="search" placeholder="请输入要搜索的内容">
      </div>
      <input type="submit" class="btn btn-default" value="搜索">
    </form>
<?php
	include "footer.php";
?>