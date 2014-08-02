<style>
  #panel-account-info {
    width: 35%;
  }
  #panel-account-info li {
    list-style: none;
    margin: .5em auto;
  }
  #panel-account-info label,
  #panel-account-info span,
  #panel-account-info textarea,
  #panel-account-info input {
    font-size: .9em;

  }
  #panel-account-info label {
    width: 30%;
    vertical-align: top;
  }
  #panel-account-info span,
  #panel-account-info textarea,
  #panel-account-info input {
    width: 60%;
  }
  #panel-account-info textarea,
  #panel-account-info input {
    border: none;
  }
  #panel-account-info button {
    width: 70%;
    margin: .8em auto;
  }
  #modal-update-account li {
    list-style: none;
    width: 80%;
    margin: .5em auto;
  }
  #modal-update-account li > label {
    display: inline-block;
    width: 25%;
    vertical-align: top;
  }
  #modal-update-account li > input,
  #modal-update-account li > select
  {
    display: inline-block;
    width: 50%;
  }
</style>

<div class="panel panel-primary" id="panel-account-info">
  <div class="panel-heading">账户信息</div>
  <div class="panel-body">
    <div class="tab-pane clearfix" id="account-info">
      <li>
        <label for="span-username">用户名:</label>
        <span id="span-username" ></span>
      </li>
      <li>
        <label for="span-real_name">中文姓名:</label>
        <span id="span-real_name"></span>
      </li>
      <li>
        <label for="span-sex">性别:</label>
        <span id="span-sex"></span>
      </li>
      <li>
        <label for="span-cell">手机:</label>
        <span id="span-cell"></span>
      </li>
      <li>
        <label for="span-telephone">固定电话:</label>
        <span id="span-telephone"></span>
      </li>
      <li>
        <label for="span-address">地址:</label>
        <span id="span-address"></span>
      </li>
      <?php
        if ($user_id == $_SESSION['user']['id']) {
      ?>
      <li>
        <button class="btn btn-primary pull-right" id="btn-update-account">更新账户信息</button>
      </li>
      <?php
        }
      ?>

    </div>
  </div>
</div>


<div class="modal fade" id="modal-update-account">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">更新账户信息</h4>
      </div>
      <div class="modal-body">
        <form>
          <li>
            <label for="input-real_name">中文姓名: </label>
            <input class="form-control" placeholder="请输入您的姓名" id="input-real_name" name="input-real_name">
          </li>
          <li>
            <label for="input-sex">性别: </label>
            <select class="form-control" id="input-sex" name="input-sex">
              <option value='M'>男</option>
              <option value='F'>女</option>
            </select>
          </li>
          <li>
            <label for="input-cell">手机: </label>
            <input class="form-control" placeholder="请输入您的手机号" id="input-cell" name="input-cell">
          </li>
          <li>
            <label for="input-telephone">固定电话: </label>
            <input class="form-control" placeholder="请输入您的固定电话" id="input-telephone" name="input-telephone">
          </li>
          <li>
            <label for="input-address">地址: </label>
            <input class="form-control" placeholder="请输入家庭地址" id="input-address" name="input-address">
          </li>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
        <button type="button" class="btn btn-primary" id="submit-update-account">保存</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->