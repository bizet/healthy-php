<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header("Location: sign.php?ref=".urlencode("user.php"));
    exit();
  }
  $user = $_SESSION['user'];
  if ($user['role'] == 'ADMIN' || $user['role'] == 'DOC') {
    $user_id = $_GET['user_id'];
  }
  else {
    $user_id = $_SESSION['user']['id'];
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
  <!--link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/bootstrap/3.2.0/css/bootstrap.min.css"-->
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/bootstrap/3.2.0/css/bootstrap-theme.min.css"-->
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="public/css/lib/datatables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="public/css/lib/bootstrap-datetimepicker.min.css">
  <!--[if lt IE 9]>
    <script src="//172.24.186.245/jslib/bootstrap/bootstrap3.0.3/assets/js/html5shiv.js"></script>
    <script src="//172.24.186.245/jslib/bootstrap/bootstrap3.0.3/assets/js/respond.min.js"></script>
  <![endif]-->
  <style>
    section {
      width: 80%;
      margin: 3em auto;
    }
    section#info .panel {
      float: left;
      margin: .2em .5em;
      height: 25em;
    }
    section#info .panel .panel-heading {
      height: 11%;
    }
    section#info .panel .panel-body {
      height: 87%; 
      overflow: auto;
    }
    section#info .panel .panel-body span {
      word-break: break-all;
    }
  </style>
</head>
<body>
  <section id="info">    
    <?php require(dirname(__FILE__).'/user.health.php'); ?>
    <?php require(dirname(__FILE__).'/user.account.php'); ?>
    <div style="clear:both"></div>
  </section>
  <section id="pressure">
    <?php require(dirname(__FILE__).'/user.pressure.php'); ?>
  </section>
  <input type="hidden" id="user_id" value="<?php echo $user_id ?>" />
</body>
</html>
<script data-main="public/js/user.main" src='public/js/lib/require.min.js'>
  require.config({
      urlArgs: "bust=" + (new Date()).getTime()
  });
</script>
