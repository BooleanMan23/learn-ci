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

        
    }



?>