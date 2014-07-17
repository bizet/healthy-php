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
        <label for="reg_input_username">用户名:</label>
        <span id="reg_input_username" ><?php echo $_SESSION['user']['username']?></span>
      </li>
      <li>
        <label for="reg_input_real_name">中文姓名:</label>
        <span id="reg_input_real_name"><?php echo $_SESSION['user']['real_name']?></span>
      </li>
      <li>
        <label for="reg_input_sex">性别:</label>
        <span id="reg_input_sex"><?php echo $_SESSION['user']['sex']?></span>
      </li>
      <li>
        <label for="reg_input_cell">手机:</label>
        <span id="reg_input_cell"><?php echo $_SESSION['user']['cell']?></span>
      </li>
      <li>
        <label for="reg_input_telephone">固定电话:</label>
        <span id="reg_input_telephone"><?php echo $_SESSION['user']['telephone']?></span>
      </li>
      <li>
        <label for="reg_input_address">地址:</label>
        <span id="reg_input_address"><?php echo $_SESSION['user']['address']?></span>
      </li>
      <li>
        <button class="btn btn-primary pull-right" id="reg_submit">更新账户信息</button>
      </li>

    </div>
  </div>
</div>