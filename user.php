<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header("Location: sign.php?ref=".urlencode("user.php"));
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome </title>
  <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
  <meta charset='utf-8' />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Cache-Control" content="no-cache,must-revalidate" />
  <meta http-equiv="Expires" content="0" />
  <link rel="stylesheet" href="public/css/lib/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/lib/bootstrap-theme.min.css">
  <style>
    section {
      width: 80%;
      margin: 3em auto;
    }
    #panel-user-info {
      width: 20em;
      height: 23em;
    }
    #panel-user-info li {
      list-style: none;
      margin: .5em auto;
    }
    #panel-user-info label,
    #panel-user-info span,
    #panel-user-info textarea,
    #panel-user-info input {
      font-size: .7em;

    }
    #panel-user-info label {
      width: 30%;
      vertical-align: top;
    }
    #panel-user-info span,
    #panel-user-info textarea,
    #panel-user-info input {
      width: 60%;
    }
    #panel-user-info textarea,
    #panel-user-info input {
      border: none;
    }
    #panel-user-info button {
      width: 70%;
      margin: .8em auto;
    }
  </style>
 </head>

<body>
  <section>
    <div class="panel panel-primary" id="panel-user-info">
      <div class="panel-heading">账户信息</div>
      <div class="panel-body">
        <form class="tab-pane clearfix" id="user-info">
          <li>
            <label for="reg_input_username">用户名: </label>
            <span id="reg_input_username" ><?php echo $_SESSION['user']['username']?></span>
          </li>
          <li>
            <label for="reg_input_real_name">中文姓名</label>
            <input id="reg_input_real_name" value="<?php echo $_SESSION['user']['real_name']?>" />
          </li>
          <li>
            <label for="reg_input_sex">性别</label>
            <input id="reg_input_sex" value="<?php echo $_SESSION['user']['sex']?>" />
          </li>
          <li>
            <label for="reg_input_cell">手机</label>
            <input id="reg_input_cell" value="<?php echo $_SESSION['user']['cell']?>" />
          </li>
          <li>
            <label for="reg_input_telephone">固定电话</label>
            <input id="reg_input_telephone" value="<?php echo $_SESSION['user']['telephone']?>" />
          </li>
          <li>
            <label for="reg_input_address">地址</label>
            <textarea id="reg_input_address"><?php echo $_SESSION['user']['address']?></textarea>
          </li>
          <li>
            <button class="btn btn-primary pull-right" id="reg_submit">更新</button>
          </li>

        </form>
      </div>
    </div>
  </section>
</body>
</html>