<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header("Location: sign.php?ref=".urlencode("admin.php"));
    exit();
  }
  $user = $_SESSION['user'];
  if ($user['role'] != 'ADMIN' && $user['role'] != 'DOC') {
    header("Location: user.php");
    exit();
  }
?>
<html>
<head>
  <title></title>
  <meta http-equiv="X-UA-Compatible" content="IE=EDGE" />
  <meta charset='utf-8' />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Cache-Control" content="no-cache,must-revalidate" />
  <meta http-equiv="Expires" content="0" />
  <!--link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/bootstrap/3.2.0/css/bootstrap.min.css"-->
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
  <!--link rel="stylesheet" href="//ajax.aspnetcdn.com/ajax/bootstrap/3.2.0/css/bootstrap-theme.min.css"-->
  <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <!--[if lt IE 9]>
    <script src="//apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <script src="//apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
  <![endif]-->
  <style type="text/css">
    
    #search-user {
      width: 80%;
      margin: 2em auto;
      margin-top: 6em;
    }
    #search-user #search-input {
      display: inline-block;
      width: 70%;
    }
    #search-user button {
      display: inline-block;
      width: 15%;
    }
    #search-user ul {
      margin-top: 3em;
      width: 70%;
    }
  </style>
</head>
<body>
  <?php require(dirname(__FILE__).'/nav.php'); ?>
  <section id="search-user">
    <input id="search-input" class="form-control">
    <button class="btn btn-primary">搜索</button>
    <ul class="list-group" id='search-list'></ul>
  </section>
</body>
</html>
<script data-main="public/js/admin.main" src='public/js/lib/require.min.js'>
  require.config({
      urlArgs: "bust=" + (new Date()).getTime()
  });
</script>
