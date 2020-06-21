<?php 

    class Model_mahasiswa extends CI_Model {
        public function getData(){
           return $this->db->get('mahasiswa')->result_array();

        }   

        public function add($data, $tableName)
       {
        $this->db->insert($tableName, $data);
       }
     }


?>