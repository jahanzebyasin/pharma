<?php
require __DIR__.'/db_object_interface.php';
class Base_model extends CI_Model implements Db_object_interface  {

    private     $result_set     = null;
    private     $table_rows     = null;
    protected   $limit          = null;
    protected   $offset         = null;
    
    
    public function __construct() {
        parent::__construct();
        $this->table_rows = $this->fields();
        $this->create_properties();
    }
   
    
     private function fields() {
        return $this->db->list_fields($this->table_name);
    }
    
    private function create_properties() {
        if(isset($this->result_set) && $this->result_set->num_rows() > 0 && $this->result_set->num_rows() == 1) {
            $result = $this->result_set->result_array();
            $result = $result[0];
            //populate dynamic properties properties
            foreach($this->table_rows as $key => $value) {
                $this->$value = $result[$value];
            }
        } else {
            //set all fields to null
            foreach($this->table_rows as $key => $value) {
                 $this->$value = null;
            }
        }
    }
    
    
    /*
     * CURD Functions
     */
    public function insert($data) {
        $this->db->insert($this->table_name,$data);
    }
    
    public function update($id ,$data) {
        $this->db->where('id', $id);
        $this->db->update($this->table_name, $data); 
    }
    
    public function delete($id) {
        $this->db->delete($this->table_name, array('id' => $id)); 
    }
    
    public function get($where_array = null, $offset = null, $limit = null) {        
        
        if($where_array) {
            $this->db->select('*');
            $this->db->from($this->table_name);
            if(!empty($where_array)) {
                $this->db->where($where_array);
            }
            if($offset && $limit) {
                $this->db->limit($limit, $offset);
            }
            if($limit) {
                $this->db->limit($limit);
            }
            $this->result_set = $this->db->get();
            /*
             * This method will create class properties on runtime. 
             * NOTE: This will only for the one record
             */
            $this->create_properties();
            return $this;
        } else {
            $this->db->select('*');
            $this->db->from($this->table_name);
            foreach($this->table_rows as $key => $value) {
                if($this->$value != null) {
                    $this->db->where($value,$this->$value);
                }
            }
            if($this->limit && $this->offset) {
                $this->db->limit($this->limit, $this->offset);
            }
            if($this->limit) {
                $this->db->limit($this->limit);
            }
            $this->result_set = $this->db->get();
            /*
             * This method will create class properties on runtime. 
             * NOTE: This will only for the one record
             */
            $this->create_properties();
            return $this;
        }
    }
    
    
    /*
     * Converstion function
     */
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
