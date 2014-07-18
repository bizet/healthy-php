<?php
  require(dirname(__FILE__).'/../model/pressure.model.php');
  class Pressure_Control {
    private $method_list; 
    public function __construct($method, $var_list) {
      $this->method_list = array(
        'get_all_list' => 'get_all_list'
      );
      $this->method = $method;
      $this->var_list = $var_list;
    }
    public function run() {
      return call_user_func( array( $this, $this->method_list[$this->method] ) );
    }

    public function get_all_list() {
      $p = new Pressure();
      try {
        $res = $p->get_all_list(
          $this->var_list['user_id']
        );
        $res = $res ? $res: array();
        return array(
          'result' => 'ok',
          'data' => $res
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