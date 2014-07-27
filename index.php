<?php
  session_start();

  if (!isset($_SESSION['user'])) {
    header("Location: sign.php?ref=".urlencode("index.php"));
    exit();
  }
  $user = $_SESSION['user'];
  if ($user['role'] != 'ADMIN' && $user['role'] != 'DOC') {
    header("Location: user.php");
    exit();
  }
  else {
    header("Location: admin.php");
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
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
 </head>
<body>
User:
<?php
  var_dump($_SESSION['user']);
?>
</body>
</html>