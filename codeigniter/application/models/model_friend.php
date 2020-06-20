<?php 

    class Model_friend extends CI_Model {
        public function getData(){
           return $this->db->get('friends')->result_array();

        }   
     }


?>