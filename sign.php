<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache,must-revalidate" />
    <meta http-equiv="Expires" content="0" />
    <link rel="stylesheet" href="public/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/lib/bootstrap-theme.min.css">
    <link href="public/css/sso.css" rel="stylesheet">
    <title>Tools Passport</title>
  </head>
  <body>
    <div id='section'>
      <ul class="nav nav-tabs">
        <li class="active"><a href="#login" data-toggle="tab">登录</a></li>
        <li><a href="#reg" data-toggle="tab">注册</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade in active clearfix" id="login">
          <p>
          <label for="login_input_email">用户名 <span class="input_require">*</span></label>
          <input class="form-control" type="text" id="login_input_email" placeholder="三位以上字母数字" />
          <span class="input_alert" id="login_input_email_alert" style="display:none"></span>
          </p>
          <p>
          <label for="login_input_password">密码 <span class="input_require">*</span></label>
          <input class="form-control" type="password" id="login_input_password" placeholder="default maybe 'asb#1234'" />
          <span class="input_alert" id="login_input_password_alert" style="display:none"></span>
          </p>
          <p>
          <button class="btn btn-primary pull-right" id="login_submit">登录</button>
          </p>
    <p class="notice"><strong> Notice:</strong> If you used <i>Patch System</i> before, we have import all of your accout information from that system. You may not know a default password has related to your account which is <strong>'asb#1234'</strong> in that system. So if you have your account in SSO system but don't know the password, please try this, Thanks.
          </p>

        </div>
        <form class="tab-pane fade clearfix" id="reg">
          <p>
            <label for="reg_input_username">用户名 <span class="input_require">*</span></label>
            <input class="form-control" type="text" id="reg_input_username" name="reg_input_username" placeholder="三位以上字母数字" />
          </p>
          <p>
            <label for="reg_input_password">密码 <span class="input_require">*</span></label>
            <input class="form-control" type="password" id="reg_input_password" name="reg_input_password" placeholder="三位以上任意字符" />
          </p>
          <p>
            <label for="reg_input_password_confirm">重复密码 <span class="input_require">*</span></label>
            <input class="form-control" type="password" id="reg_input_password_confirm" name="reg_input_password_confirm" placeholder="重复输入刚才设定的密码" />
          </p>
          <p>
            <label for="reg_input_real_name">中文姓名</label>
            <input class="form-control" type="text" id="reg_input_real_name" name="reg_input_real_name" placeholder="name display on page" />
          </p>
          <p>
            <label for="reg_input_sex">性别</label>
            <select class="form-control" id="reg_input_sex" name="reg_input_sex">
              <option value="M">男</option>
              <option value="F">女</option>
            </select>
          </p>
          <p>
            <label for="reg_input_cell">手机</label>
            <input class="form-control" type="text" id="reg_input_cell" name="reg_input_cell" placeholder="name display on page" />
          </p>
          <p>
            <label for="reg_input_telephone">固定电话</label>
            <input class="form-control" type="text" id="reg_input_telephone" name="reg_input_telephone" placeholder="name display on page" />
          </p>
          <p>
            <label for="reg_input_address">地址</label>
            <input class="form-control" type="text" id="reg_input_address" name="reg_input_address" placeholder="name display on page" />
          </p>
          <p>
            <button class="btn btn-primary pull-right" id="reg_submit">注册</button>
          </p>

        </form>
      </div>
    </div>
  </body>
</html>
<input id="ref" name="ref" value="<?php echo $_GET['ref']?>" />
<script data-main="public/js/sign.main" src='public/js/lib/require.min.js'>
</script>

