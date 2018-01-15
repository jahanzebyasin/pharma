<?php

class Base_model extends CI_Model {
    
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
        $result_set = $this->db->get();
        if($result_set->num_rows() > 0) 
            return $result_set->result_array();
        else 
            return array();
        
    }
    
    
}
