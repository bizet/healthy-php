<?php
  require(dirname(__FILE__).'/../model/user.model.php');
  class User_Control {
    private $method_list; 
    public function __construct($method, $var_list, &$session) {
      $this->method_list = array(
        'reg' => 'reg',
        'login' => 'login',
        'get_info_by_id' => 'get_info_by_id',
        'search' => 'search'
      );
      $this->method = $method;
      $this->var_list = $var_list;
      $this->session = &$session;
    }
    public function run() {
      return call_user_func( array( $this, $this->method_list[$this->method] ) );
    }

    public function search() {
      $user = new User();
      try {
        $users = $user->search($this->var_list['by_what'], $this->var_list['search_value']);
        return array(
          'result' => 'ok',
          'data' => $users
        );
      }
      catch(Exception $e)
      {
        return array(
          'result' => 'err',
          'message' => $e->getMessage()
        );
      }

    }

    public function get_info_by_id() {
      $user = new User();
      try {
        $user_info = $user->get_info_by_id($this->var_list['user_id']);
        return array(
          'result' => 'ok',
          'data' => $user_info
        );
      }
      catch(Exception $e)
      {
        return array(
          'result' => 'err',
          'message' => $e->getMessage()
        );
      }
    }

    public function login() {
      $user = new User();
      try {
        $res = $user->login(
          $this->var_list['username'],
          md5($this->var_list['password'])
        );
        if (!$res) {
          return array(
            'result' => 'failed'
          );
        }
        $this->session['user'] = $user->get_info($this->var_list['username']);
        return array(
          'result' => 'ok'
        );
      }
      catch(Exception $e)
      {
        return array(
          'result' => 'err',
          'message' => $e->getMessage()
        );
      }
    }

    public function reg() {
      $user = new User();
      try {
        $user_id = $user->reg(  
          $this->var_list['username'],
          md5($this->var_list['password']),
          $this->var_list['real_name'],
          $this->var_list['sex'],
          $this->var_list['cell'],
          $this->var_list['telephone'],
          $this->var_list['address']
        );
        $this->session['user'] = $user->get_info($this->var_list['username']);
        return array(
          'result' => 'ok'
        );
      }
      catch(Exception $e)
      {
        return array(
          'result' => 'err',
          'message' => $e->getMessage()
        );
      }
    }
  }

  /*
  $obj = new User_Control('reg', array(
    'username' => 'test1',
    'password' => 'test1',
    'real_name' => 'test1',
    'sex' => 'M',
    'cell' => 'test1',
    'telephone' => 'test1',
    'address' => 'test1'
    ));
  echo $obj->run();
  
  $session = array();
  $obj = new User_Control('login', array(
    'username' => 'test',
    'password' => 'asb111',
    ), $session);
  var_dump($obj->run());
*/

?>