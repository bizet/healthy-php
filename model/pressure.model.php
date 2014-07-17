<?php
  require_once(dirname(__FILE__).'/medoo.min.php');

  class Pressure {
    private $database;
    public function __construct() {
      $this->database = new medoo();
    }
    public function get_all_list($user_id) {
      $list = $this->database->select('pressure', '*', array(
        'user_id' => $user_id
      ));
      return $list;
    }
  };
?>