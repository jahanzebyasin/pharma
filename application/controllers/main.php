<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once __DIR__.'/base_controller.php';
class Main extends Base_controller {
    protected $title; 
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $view_html  = '<h2>It is working</h2>';
        $this->title = 'Home';
        $this->load_view($view_html);
    }
    
    
    public function login() {
        $view_html  = $this->load->view('login',null,TRUE);
        $this->title = 'Login';
        $this->load_view($view_html);
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

