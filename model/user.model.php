<?php
  include 'medoo.min.php';

  class User {
    private $database = new medoo();
    public function reg(
      $username,
      $password,
      $real_name='',
      $sex='M',
      $cell='',
      $telephone='',
      $address='') 
    {
      $user_exist = $database->select('user', 'id', 
        ['username' => $username]
      );
      if (count($user_exist)) {
        throw new Exception('username exists');
      }
      $user_id = $database->insert('user', [
        'username' => $username,
        'password' => $password,
        'real_name' => $real_name,
        'sex' => $sex,
        'cell' => $cell,
        'telephone' => $telephone,
        'address' => $address]);
      return $user_id;
    }

  }