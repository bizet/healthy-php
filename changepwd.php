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
    <link rel="stylesheet" href="//bizet-cn.com/public/css/lib/bootstrap.min.css">
    <link rel="stylesheet" href="//bizet-cn.com/public/css/lib/bootstrap-theme.min.css">
    <link href="public/css/sso.css" rel="stylesheet">
    <title>注册登录</title>
  </head>
  <body>
    <div id='section'>
      <form class="tab-pane fade clearfix" id="reg">
        <p>
          <label for="reg_input_username">用户名 <span class="input_require">*</span></label>
          <input class="form-control" type="text" id="reg_input_username" name="reg_input_username" placeholder="三位以上字母数字" />
        </p>
        <p>
          <label for="reg_input_password">密码 <span class="input_require">*</span></label>
          <input class="form-control" type="password" id="reg_input_password" name="reg_input_password" placeholder="五位以上任意字符" />
        </p>
        <p>
          <label for="reg_input_password_confirm">重复密码 <span class="input_require">*</span></label>
          <input class="form-control" type="password" id="reg_input_password_confirm" name="reg_input_password_confirm" placeholder="重复输入刚才设定的密码" />
        </p>
        <p>
          <button class="btn btn-primary pull-right" id="reg_submit">注册</button>
        </p>

      </form>
    </div>
  </body>
</html>
<input id="ref" type="hidden" name="ref" value="<?php echo isset($_GET['ref'])?$_GET['ref']:'index.php' ?>" />
<script data-main="public/js/sign.main" src='//bizet-cn.com/public/js/lib/require.min.js'>
</script>

