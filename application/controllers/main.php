<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once __DIR__.'/base_controller.php';
class Main extends Base_controller {
    protected   $title; 
    protected   $success_message;
    protected   $error_message;
   
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $view_html  = '<h2>It is working</h2>';
        $this->title = 'Home';
        $this->load_view($view_html);
    }
    
    
    public function login() {
        
        $view_html = '';
        //check if it is post

        if($this->input->method(TRUE) == 'POST') {
            $user_login     = $this->input->post('txt-email');
            $user_password  = $this->input->post('txt-password');
            if($user_login != '' && $user_password != '') {
                if(($user_id = $this->validate_user($user_login, $user_password)) != 0) {
                    //get user complete object';
                    $this->load->model('user_model','user');
                    $this->user->id = $user_id;
                    $user_object = $this->user->get()->to_array();
                    //set session
                    $this->session->set_userdata('user_data',$user_object[0]);
                    redirect('user/profile');
                    
                } else {
                    $this->error_message = 'Email and password does not match.';
                    $data = array(
                        'error_message' => $this->error_message
                    );
                    $view_html  = $this->load->view('login',$data,TRUE);
                }
            } else {
                $this->error_message = 'Please provide valid email and password.';
                $data = array(
                    'error_message' => $this->error_message
                );
                $view_html  = $this->load->view('login',$data,TRUE);
            }
            
        } else {
            $view_html  = $this->load->view('login',null,TRUE);
            $this->title = 'Login';
        }
        $this->load_view($view_html);
    }
    
    private function validate_user($user_name, $password) {
        $this->load->model('user_model','user');
        $this->user->email = $user_name;
        $user_data = $this->user->get()->to_array();
        if(!empty($user_data)) {
            $user_data = $user_data[0];
            if($user_data['password'] == $password) {
                return $user_data['id'];
            } else {
                return 0;
            }
        } else {
            return 0;
        }
        
    }
    
    public function import() {
             $row = 1;
             $file_path = base_url().'uploads/test.csv';
            if (($handle = fopen($file_path, "r")) !== FALSE) {
                echo '<pre>';
                
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    print_r($data);
                 //   echo "<p> $num fields in line $row: <br /></p>\n";
                    $row++;
                    /*
                    for ($c=0; $c < $num; $c++) {
                        echo $data[$c] . "<br />\n";
                    }
                     * 
                     */
                }
                fclose($handle);
            }
        }
        
}

