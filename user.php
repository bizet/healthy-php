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
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.1/css/jquery.dataTables.css">
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
  <input type="hidden" id="user_id" value="<?php echo $_SESSION['user']['id'] ?>" />
</body>
</html>
<script data-main="public/js/user.main" src='public/js/lib/require.min.js'>
  require.config({
      urlArgs: "bust=" + (new Date()).getTime()
  });
</script>
