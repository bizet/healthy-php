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
    html body nav {
      width: 90%;
      margin: 0 auto;
    }
    html body nav span#welcome {
      display: block;
      padding-top: 2.5em;
      padding-right: 1.5em;
      font-size: .8em;
    }
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
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Healthy</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><span id="welcome">Welcome <?php echo $_SESSION['user']['username'] ?>! Not <a href="/login?sign_method=change_user&ref=/"><?php echo $_SESSION['user']['username'] ?>?</a></span></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
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
