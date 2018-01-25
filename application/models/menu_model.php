<?php
require_once __DIR__.'/base_model.php';
class Menu_model extends Base_model {
    
    protected $table_name = 'menu';
    public function __construct() {
        parent::__construct();
    }
}