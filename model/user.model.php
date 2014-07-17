<?php
  require_once(dirname(__FILE__).'/medoo.min.php');

  class User {
    private $database; 
    public function __construct() {
      $this->database = new medoo();
    }
    public function get_info($username) {
      if ($username == '') {
        throw new Exception('get user info but username is blank');
      }
      $user_info = $this->database->select('user', '*', array(
        'username' => $username,
        'LIMIT' => 1
      ));
      if (!$user_info) {
        throw new Exception('no user find, username: ' . $username);
      }
      return $user_info[0];
    }

    public function login(
      $username,
      $password)
    {
      if ($username == '' || $password == '') {
        throw new Exception('login but username or password is blank.');
      }
      $user_exist = $this->database->select('user', 'id', array(
        'AND' => array(
          'username' => $username,
          'password' => $password
        )
      ));
      if ($user_exist) {
        return true;
      }
      return false;
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