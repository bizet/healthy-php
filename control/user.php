<?php
  require(dirname(__FILE__).'/../model/user.model.php');
  class User_Control {
    private $method_list; 
    public function __construct($method, $var_list, $session) {
      $this->method_list = array(
        'reg' => 'reg'
      );
      $this->method = $method;
      $this->var_list = $var_list;
      $this->session = $session;
    }
    public function run() {
      return call_user_func( array( $this, $this->method_list[$this->method] ) ,  $this->var_list);
    }

    public function reg($var_list) {
      $user = new User();
      try {
        $user_id = $user->reg(  
          $var_list['username'],
          $var_list['password'],
          $var_list['real_name'],
          $var_list['sex'],
          $var_list['cell'],
          $var_list['telephone'],
          $var_list['address']
        );
        $this->session['user'] = array(
          'id' => $user_id,
          'username' => $username,
        );
        if (isset($this->session['ref'])) {
          $ref = $this->session['ref'];
        }
        else {
          $ref = '/index';
        }
        return json_encode(array(
          'result' => 'ok',
          'ref' => $ref
        ));
      }
      catch(Exception $e)
      {
        return json_encode(array(
          'result' => 'err',
          'message' => $e->getMessage()
        ));
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
  */

?>