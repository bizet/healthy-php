<?php
  require(dirname(__FILE__).'/../model/user.model.php');
  class User_Control {
    private $method_list; 
    public function __construct($method, $var_list, &$session) {
      $this->method_list = array(
        'reg' => 'reg'
      );
      $this->method = $method;
      $this->var_list = $var_list;
      $this->session = &$session;
    }
    public function run() {
      return call_user_func( array( $this, $this->method_list[$this->method] ) );
    }

    public function reg() {
      $user = new User();
      try {
        $user_id = $user->reg(  
          $this->var_list['username'],
          $this->var_list['password'],
          $this->var_list['real_name'],
          $this->var_list['sex'],
          $this->var_list['cell'],
          $this->var_list['telephone'],
          $this->var_list['address']
        );
        $this->session['user'] = array(
          'id' => $user_id,
          'username' => $this->var_list['username'],
          'real_name' => $this->var_list['real_name'],
          'sex' => $this->var_list['sex'],
          'cell' => $this->var_list['cell'],
          'telephone' => $this->var_list['telephone'],
          'address' => $this->var_list['address']
        );
        return json_encode(array(
          'result' => 'ok'
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