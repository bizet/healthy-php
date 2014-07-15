<?php
  include 'medoo.min.php';

  class User {
    private $database; 
    public function __construct() {
      $this->database = new medoo();
    }
    public function reg(
      $username,
      $password,
      $real_name='',
      $sex='M',
      $cell='',
      $telephone='',
      $address='') 
    {
      if ($username == '') {
        throw new Exception('username cannot blank');
      }
      $user_exist = $this->database->select('user', 'id', 
        array('username' => $username)
      );
      if ($user_exist) {
        throw new Exception('username exists');
      }
      $user_id = $this->database->insert('user', array(
        'username' => $username,
        'password' => $password,
        'real_name' => $real_name,
        'sex' => $sex,
        'cell' => $cell,
        'telephone' => $telephone,
        'address' => $address));
      return $user_id;
    }

  }