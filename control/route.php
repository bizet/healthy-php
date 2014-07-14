<?php
  session_start();
  require(dirname(__FILE__).'/user.php');

  if (!isset($_REQUEST['url'])) {
    die('Request URL catch failed!');
  }

  class_list = new Array(
    'user' => 'User_Control'
  );

  $matches = array();
  if (preg_match('#/([^/]+)/([^/]+)#', $_REQUEST['url'], $matches)) {
    $obj = new $matches[1]($matches[2], $_REQUEST);
    echo $obj->run();
  }