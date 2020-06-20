<?php 

    class Hello extends CI_Controller{
        public function index(){
            $this->load->('contoh_view');
        }

        public function helloTwo(){
            echo "Hello two";
        }
    }

?>