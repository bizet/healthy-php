<?php
  require(dirname(__FILE__).'/../model/pressure.model.php');
  class Pressure_Control {
    private $method_list; 
    public function __construct($method, $var_list) {
      $this->method_list = array(
        'get_all_list' => 'get_all_list',
        'get_list' => 'get_list',
        'add' => 'add'
      );
      $this->method = $method;
      $this->var_list = $var_list;
    }
    public function run() {
      return call_user_func( array( $this, $this->method_list[$this->method] ) );
    }

    public function get_list() {
      try {
        $start = $this->var_list['start'];
        $length = $this->var_list['length'];
        $draw = $this->var_list['draw'];
        $user_id = $this->var_list['user_id'];
        $p = new Pressure();
        $total = $p->count($user_id);
        $res = $p->get_list($user_id, $start, $length);
        return array(
          'draw' => $draw,
          'recordsTotal' => $total,
          'recordsFiltered' => $total,
          'data' => ($res ? $res: array())
        );
      }
      catch(Exception $e)
      {
        return array(
          'recordsTotal' => 0,
          'recordsFiltered' => 0,
          'data' => array(),
          'err' => $e->getMessage()
        );
      }
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
    public function add() {
      $p = new Pressure();
      try {
        $p_id = $p->add(
          $this->var_list['time'],
          $this->var_list['systolic'],
          $this->var_list['diastolic'],
          $this->var_list['heart_rate']
        );
        return array(
          'result' => 'ok'
        );
      }
      catch(Exception $e) {
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
$obj = new Pressure_Control('get_list', array(
  'user_id' => 1,
  'start' => 0,
  'length' => 10,
  'draw' => 1
));
var_dump($obj->run());
*/
?>
