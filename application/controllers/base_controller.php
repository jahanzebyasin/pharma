<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_controller extends CI_Controller {
    
     //call type checks for the ajax call vs normal browser call with agent headers
    // if ajax call_type = 'xhr';
    // default calltype = 'NULL'
    protected   $call_type = null;
    
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
        if($this->call_type) {
            // echo html
            echo $view_html;
        } else {
            $this->load->view('main',$parameters);
        }
        
    }
}
