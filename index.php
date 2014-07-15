<?php
  session_start();

  if (!isset($_SESSION['user'])) {
    header("Location: sign.php?ref=/index.php");
    exit();
  }
?>

User:
<?php
  var_dump($_SESSION['user']);
?>