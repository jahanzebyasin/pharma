<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
       
        public function import() {
             echo base_url();
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

