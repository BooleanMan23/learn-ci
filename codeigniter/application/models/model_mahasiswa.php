<?php 

    class Model_mahasiswa extends CI_Model {
        public function getData(){
           return $this->db->get('mahasiswa')->result_array();

        }   

        public function add($data, $tableName)
       {
        $this->db->insert($tableName, $data);
       }

       public function delete($mahasiswaId, $table){
          $this->db->where($mahasiswaId);
          $this->db->delete($table);

       }

       public function edit($mahasiswaId, $tableName){
        return $this->db->get_where($tableName, $mahasiswaId);

       }

       public function update($mahasiswaId, $data, $tableName){
          $this->db->where($mahasiswaId);
          $this->db->update($tableName, $data);
       }

       public function detail($mahasiswaId = NULL){
          $query = $this->db->get_where('mahasiswa',
          array('mahasiswa_id' => $mahasiswaId))->row();
          return $query;
       }

       
     }


?>