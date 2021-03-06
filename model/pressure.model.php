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
    public function get_list($user_id, $start, $length) {
      $list = $this->database->select('pressure', "*", array(
        'user_id' => $user_id,
        'ORDER' => array('time DESC'),
        'LIMIT' => array($start, $length)
      ));
      return $list;
    }
    public function count($user_id) {
      return $this->database->count('pressure', array('user_id' => $user_id));
    }
    public function add(
      $time,
      $systolic,
      $diastolic,
      $heart_rate,
      $user_id) 
    {
      $p_id = $this->database->insert('pressure', array(
        'time' => $time,
        'systolic' => $systolic,
        'diastolic' => $diastolic,
        'heart_rate' => $heart_rate,
        'user_id' => $user_id));
      return $p_id;
    }
  };
?>