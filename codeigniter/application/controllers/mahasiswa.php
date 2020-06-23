<?php 
    class Mahasiswa extends CI_Controller{
        public function index(){
            $this->load->model('model_mahasiswa');    
            $data['mahasiswa'] = $this->model_mahasiswa->getData();
            $this->load->view('templates/header');
          
            $this->load->view('view_mahasiswa/view_mahasiswa_index', $data);
            $this->load->view('templates/footer');
        }

        public function add(){
            $mahasiswa_name = $this->input->post('mahasiswa_name');
            $mahasiswa_nim = $this->input->post('mahasiswa_nim');
            $mahasiswa_address = $this->input->post('mahasiswa_address');
            $mahasiswa_birthdate = $this->input->post('mahasiswa_birthdate');
            $mahasiswa_majors = $this->input->post('mahasiswa_majors');
            $data = array(
                'mahasiswa_name' => $mahasiswa_name,
                'mahasiswa_nim' => $mahasiswa_nim,
                'mahasiswa_address' => $mahasiswa_address,
                'mahasiswa_birthdate' => $mahasiswa_birthdate,
                'mahasiswa_majors' => $mahasiswa_majors
            );
            $this->model_mahasiswa->add($data, 'mahasiswa');
            redirect('mahasiswa/index');

        }

        public function delete($id){
            $mahasiswaId = array ('mahasiswa_id' => $id);
            $this->model_mahasiswa->delete($mahasiswaId, 'mahasiswa');
            redirect('mahasiswa/index');
        }

        public function edit($id){
            $mahasiswaId = array ('mahasiswa_id' => $id);
            $data['mahasiswa'] = $this->model_mahasiswa->edit($mahasiswaId, 'mahasiswa')->result();
            $this->load->view('templates/header');
            $this->load->view('view_mahasiswa/view_mahasiswa_edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $mahasiswa_id = $this->input->post('mahasiswa_id');
            $mahasiswa_name = $this->input->post('mahasiswa_name');
            $mahasiswa_nim = $this->input->post('mahasiswa_nim');
            $mahasiswa_address = $this->input->post('mahasiswa_address');
            $mahasiswa_birthdate = $this->input->post('mahasiswa_birthdate');
            $mahasiswa_majors = $this->input->post('mahasiswa_majors');
            $data = array(
                'mahasiswa_name' => $mahasiswa_name,
                'mahasiswa_nim' => $mahasiswa_nim,
                'mahasiswa_address' => $mahasiswa_address,
                'mahasiswa_birthdate' => $mahasiswa_birthdate,
                'mahasiswa_majors' => $mahasiswa_majors
            );

            $mahasiswaId = array('mahasiswa_id' => $mahasiswa_id);
            $this->model_mahasiswa->update($mahasiswaId, $data, 'mahasiswa');
            redirect('mahasiswa/index');

        }

        public function detail($mahasiswaId){
            $this->load->model('model_mahasiswa');
            $detailMahasiswa = $this->model_mahasiswa->detail($mahasiswaId);
            $data['detailMahasiswa'] = $detailMahasiswa;
            $this->load->view('templates/header');
            $this->load->view('view_mahasiswa/view_mahasiswa_detail', $data);
            $this->load->view('templates/footer');
        }

        
    }



?>