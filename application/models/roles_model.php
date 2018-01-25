<?php
require_once __DIR__.'/base_model.php';
class Roles_model extends Base_model {
    
    protected $table_name = 'roles';
    public function __construct() {
        parent::__construct();
    }
}