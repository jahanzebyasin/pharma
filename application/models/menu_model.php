<?php
require_once __DIR__.'/base_model.php';
class Menu_model extends Base_model {
    
    protected $table_name = 'menu';
    public function __construct() {
        parent::__construct();
    }
    
    public function get_menu_hierarchy($type = null, $role = null) {
    }
    
    public function get_top_level_menu($type = 0, $role = null) {
         if($type && $role) {
        } else {
            $this->db->select('*');
            $this->db->from($this->table_name);
            foreach($this->table_rows as $key => $value) {
                if($this->$value != null) {
                    $this->db->where($value,$this->$value);
                }
            }
            $this->db->order_by('menu_order','ASC');
            $this->result_set = $this->db->get();
            /*
             * This method will create class properties on runtime. 
             * NOTE: This will only for the one record
             */
            $this->create_properties();
            return $this;
        }
    }
}