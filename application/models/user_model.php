<?php
require __DIR__.'/base_model.php';
class User_model extends Base_model {
    
    protected $table_name = 'user';
    public function __construct() {
        parent::__construct();
    }
}