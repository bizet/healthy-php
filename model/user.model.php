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

    public function search($by_what, $value) {
      $users = $this->database->select('user', '*', array(
        'LIKE' => array(
          $by_what => $value
        ),
        $by_what.'[!]' => ''
      ));
      return $users;
    }
    public function get_info_by_id($user_id) {
      $user_info = $this->database->select('user', '*', array(
        'id' => $user_id,
        'LIMIT' => 1
      ));
      if (!$user_info) {
        throw new Exception('no user find, user_id: ' . $user_id);
      }
      return $user_info[0];
    }

    public function changepwd(
      $old_password,
      $new_password,
      $user_id) {
      if ($user_id == '') {
        throw new Exception('user id could not blank');
      }
      $user_id = $this->database->select('user', 'id', array(
        'id': $user_id,
        'password': $old_password
      ));
      if (!$user_id) {
        return false;
      }
      $num = $this->database->update('user', array(
          'password' => $new_password
        ),
        array(
          'id' => $user_id
        )
      );
      return $num;
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
    public function update_account(
      $real_name,
      $sex,
      $cell,
      $telephone,
      $address,
      $user_id) {
      if ($user_id == '' || $user_id == 0) {
        throw new Expection('user id cannot be blank');
      }
      $num = $this->database->update('user', array(
        'real_name' => $real_name,
        'sex' => $sex,
        'cell' => $cell,
        'telephone' => $telephone,
        'address' => $address
        ),
        array(
          'id' => $user_id
        )
      );
      return $num;
    }
    public function update_health(
      $height = '',
      $weight = '',
      $disease_list = '',
      $user_id)
    {
      if ($user_id == '' || $user_id == 0) {
        throw new Expection('user id cannot be blank');
      }
      $num = $this->database->update('user', array(
        'height' => $height,
        'weight' => $weight,
        'disease_list' => $disease_list
        ),
        array(
          'id' => $user_id
        )
      );
      return $num;
    }

  }