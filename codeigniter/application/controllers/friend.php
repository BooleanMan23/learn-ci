<?php 
    class Friend extends CI_Controller{
        public function index(){
            $this->load->model('model_friend');    
            $data['friend'] = $this->model_friend->getData();
            $this->load->view('view_friend/view_friend_index', $data);

        }
    }



?>