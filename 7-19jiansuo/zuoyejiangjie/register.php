<?php
	include "header.php";
?>
    <ol class="breadcrumb">
      <li><a href="#">首页</a></li>
      <li class="active">注册</li>
    </ol>
    <div class="projects-header page-header">
        <h2>用户注册</h2>
    </div>	
	<form class="form-horizontal" role="form" onSubmit="return preg_match()" method="post" action="php/doregister.php">
      <div class="form-group">
        <label for="user" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="user" name="user" placeholder="用户名">
        </div>
      </div>
      <div class="form-group">
        <label for="password" class="col-sm-2 control-label">输入密码</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="输入密码">
        </div>
      </div>
      <div class="form-group">
        <label for="passdb" class="col-sm-2 control-label">确认密码</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="passdb" name="passdb" placeholder="确认密码">
        </div>
      </div>
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="phone" class="col-sm-2 control-label">手机号</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="phone" name="phone" placeholder="手机号">
        </div>
      </div>
      <div class="form-group">
        <label for="area" class="col-sm-2 control-label">地区</label>
        <div class="col-sm-10">
          <select class="form-control" id="area" name="area">
          	<option>请选择省份</option>
            <option>河北</option>
            <option>山东</option>
            <option>河南</option>
            <option>内蒙</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <b class="col-sm-2 control-label">性别</b>
        <div class="col-sm-10">
          <label class="radio-inline">
              <input type="radio" name="sex" id="inlineRadio2" value="男" checked> 男
            </label>
            <label class="radio-inline">
              <input type="radio" name="sex" id="inlineRadio3" value="女"> 女
            </label>
        </div>
      </div>
      <div class="form-group">
        <b class="col-sm-2 control-label">爱好</b>
        <div class="col-sm-10">
          <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" name="hoby[]" value="音乐"> 音乐
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" name="hoby[]" value="旅游"> 旅游
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" name="hoby[]" value="登山"> 登山
            </label>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox" id="onOff"> 阅读并接受
            </label>
            <button type="button" class="btn-link" data-toggle="modal" data-target="#myModal">《用户协议》</button>
          </div>
        </div>
      </div>
      
      <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">用户协议</h4>
              </div>
              <div class="modal-body">
                优就业是中公教育IT培训品牌，致力于培养面向电商及互联网领域的高端人才，以学员就业为目的，优质就业为宗旨，是一家集互联网营销师、SEO优化师、SEM竞价师、社会化媒体运营师、电商运营师、互联网产品经理、网页设计师、Web前端工程师、PHP工程师、Android工程师、iOS工程师、Java工程师、C/C++工程师、软件测试工程师等课程为一体的IT培训机构。
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
              </div>
            </div>
          </div>
        </div>
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" class="btn btn-success" value="注册"> <input type="reset" class="btn btn-default" value="重置" /> <a href="login.php" class="btn btn-danger">已有账号，去登录</a>
        </div>
      </div>
    </form>
    <script type="text/javascript" src="js/register.js"></script>
<?php
	include "footer.php";
?>