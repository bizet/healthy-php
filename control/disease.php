<?php
  require(dirname(__FILE__).'/../model/disease.model.php');
  class Disease_Control {
    private $method_list; 
    public function __construct($method, $var_list) {
      $this->method_list = array(
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
      $p = new Disease();
      try {
        $res = $p->get_list();
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
      $p = new Disease();
      try {
        $p_id = $p->add(
          $this->var_list['name'],
          $this->var_list['operation']
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

?>
