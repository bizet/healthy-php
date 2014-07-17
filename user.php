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
  </section>
  <section id="pressure">
  </section>
</body>
</html>