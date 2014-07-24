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
        <button class="btn btn-primary pull-right" id="reg_submit">更新账户信息</button>
      </li>
      <?php
        }
      ?>

    </div>
  </div>
</div>