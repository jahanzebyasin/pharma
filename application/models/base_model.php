<?php
require __DIR__.'/db_object_interface.php';
class Base_model extends CI_Model implements Db_object_interface  {
    
    private $result_set = null;
    
    public function __construct() {
        parent::__construct();
    }
   
    public function insert($data = null) {
        
    }
    
    public function update($data = null) {
        
    }
    
    public function delete($id) {
        
    }
    
    public function get($where_array = array() ) {
        $this->db->select('*');
        $this->db->from($this->table_name);
        if(!empty($where_array)) {
            $this->db->where($where_array);
        }
        $this->result_set = $this->db->get();
        return $this;
    }
    
    
    public function to_array() {
        return $this->result_set->result_array();
    }
    
     public function to_row() {
        return $this->result_set->result_row();
    }
    
     public function to_object() {
        return $this->result_set->result();
    }
    
    
}
