<?php
  session_start();
  require(dirname(__FILE__).'/user.php');
  require(dirname(__FILE__).'/pressure.php');

  if (!isset($_REQUEST['url'])) {
    die('Request URL catch failed!');
  }

  $class_list = array(
    'user' => 'User_Control',
    'pressure' => 'Pressure_Control'
  );


  $matches = array();
  if (preg_match('#/([^/]+)/([^/]+)#', $_REQUEST['url'], $matches)) {
    $obj = new $class_list[$matches[1]]($matches[2], $_REQUEST, $_SESSION);
    echo json_encode($obj->run());
  }
?>