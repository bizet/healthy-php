<?php
  require_once(dirname(__FILE__).'/medoo.min.php');

  class Disease {
    private $database;
    public function __construct() {
      $this->database = new medoo();
    }

    public function get_list() {
      $list = $this->database->select('disease', '*');
      return $list;
    }
   
    public function add(
      $name,
      $operation) 
    {
      $p_id = $this->database->insert('disease', array(
        'name' => $name,
        'operation' => $operation));
      return $p_id;
    }
  };
?>