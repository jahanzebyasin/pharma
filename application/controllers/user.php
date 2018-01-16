<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once __DIR__.'/base_controller.php';
class User extends Base_controller {
    protected   $title; 
    protected   $success_message;
    protected   $error_message;
    //call type checks for the ajax call vs normal browser call with agent headers
    // if ajax call_type = 'xhr';
    // default calltype = 'NULL'
    protected   $call_type = null;


    public function __construct() {
        parent::__construct();
        $this->load->model('user_model','user');
        
        //check for session
        if(is_user_logged_in()) {
            //TODO: Manage users routine tasks
            
        } else {
            //redirect to login
            redirect('main/login');
        }
    }
    
    public function index() {
        
    }
    
    public function profile() {
        $view_html  = $this->load->view('user/profile',null,TRUE);
        $this->title = 'Profile';
        $this->load_view($view_html);
    }
    
}