<?php
  session_start();
  require(dirname(__FILE__).'/user.php');
  require(dirname(__FILE__).'/pressure.php');
  require(dirname(__FILE__).'/disease.php');

  if (!isset($_REQUEST['url'])) {
    die('Request URL catch failed!');
  }

  $class_list = array(
    'user' => 'User_Control',
    'pressure' => 'Pressure_Control',
    'disease' => 'Disease_Control'
  );


  $matches = array();
  if (preg_match('#/([^/]+)/([^/]+)#', $_REQUEST['url'], $matches)) {
    $obj = new $class_list[$matches[1]]($matches[2], $_REQUEST, $_SESSION);
    echo json_encode($obj->run());
  }
?>