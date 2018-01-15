<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_controller extends CI_Controller {
    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function load_view($view_html) {
        $parameters = array(
            'content'           => $view_html,
            'access'            => 'public',
            'title'             => $this->title,
            'success_message'   => $this->success_message,
            'error_message'     => $this->error_message
        );
        $this->load->view('main',$parameters);
    }
}
