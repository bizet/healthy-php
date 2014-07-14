<?php
  require(dirname(__FILE__).'/../model/user.model.php');
  class User_Control {
    private $method_list = new Array(
      'reg' => 'reg'
    );
    public function __construct($method, $var_list) {
      $this->method = $method;
      $this->var_list = $var_list;
    }
    public function run() {
      return $this->$method_list[$this->method]($this->var_list);
    }

    public function reg($var_list) {
      if ('reg' == $matches[2]) {
        $user = new User();
        try {
          $user->reg(  
            $var_list['username'],
            $var_list['password'],
            $var_list['real_name'],
            $var_list['sex'],
            $var_list['cell'],
            $var_list['telephone'],
            $var_list['address']
          );
          return json_encode(new array(
            'result' => 'ok'
          ));
        }
        catch(Exception $e)
        {
          return json_encode(new array(
            'result' => 'err',
            'message' => $e->getMessage()
          ));
        }
      }
    }
  }

  $obj = new User_Control('reg', new Array(
    'username' => 'test1',
    'password' => 'test1',
    'real_name' => 'test1',
    'sex' => 'M',
    'cell' => 'test1',
    'telephone' => 'test1',
    'address' => 'test1'
    ));
  $obj->run();

?>