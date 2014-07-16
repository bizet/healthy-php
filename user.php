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
      height: 20em;
    }
    #panel-user-info label {
      font-size: .7em;

    }
  </style>
 </head>

<body>
  <section>
    <div class="panel panel-primary" id="panel-user-info">
      <div class="panel-heading">账户信息</div>
      <div class="panel-body">
        <form class="tab-pane clearfix" id="user-info">
          <p>
            <label for="reg_input_username">用户名: </label>
            <label id="reg_input_username"><?php echo $_SESSION['user']['username']?></label>
          </p>
          <p>
            <label for="reg_input_real_name">中文姓名</label>
            <label id="reg_input_real_name"><?php echo $_SESSION['user']['real_name']?></label>
          </p>
          <p>
            <label for="reg_input_sex">性别</label>
            <label id="reg_input_sex"><?php echo $_SESSION['user']['sex']?></label>
          </p>
          <p>
            <label for="reg_input_cell">手机</label>
            <label id="reg_input_cell"><?php echo $_SESSION['user']['cell']?></label>
          </p>
          <p>
            <label for="reg_input_telephone">固定电话</label>
            <label id="reg_input_telephone"><?php echo $_SESSION['user']['telephone']?></label>
          </p>
          <p>
            <label for="reg_input_address">地址</label>
            <label id="reg_input_address"><?php echo $_SESSION['user']['address']?></label>
          </p>

        </form>
      </div>
    </div>
  </section>
</body>
</html>