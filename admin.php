<?php
  session_start();
  if (!isset($_SESSION['user'])) {
    header("Location: sign.php?ref=".urlencode("user.php"));
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
</head>
<body>
  <section id="search-user">
    <input id="search-input"><button>搜索</button>
    <div id='search-list'></div>
  </section>
</body>
</html>
<script data-main="public/js/admin.main" src='public/js/lib/require.min.js'>
  require.config({
      urlArgs: "bust=" + (new Date()).getTime()
  });
</script>
