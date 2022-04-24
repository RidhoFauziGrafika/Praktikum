<?php 

    // method Dosen
    class Dosen extends CI_Controller{
        public function index(){
            $this->load->model('dosen_model');
            $dosen = $this->dosen_model->getAll();
            $data['dosen'] = $dosen;
            // selanjutnya tinggal kita render data ke dalam view
            $this->load->view('layout/header');
            $this->load->view('dosen/index', $data);
            $this->load->view('layout/footer');
        }

        public function detail($id){
            $this->load->model('dosen_model');
            $guru = $this->dosen_model->getById($id);
            $data['guru'] = $guru;
            // selanjutnya tinggal kita render data ke dalam view
            $this->load->view('layout/header');
            $this->load->view('dosen/detail', $data);
            $this->load->view('layout/footer');
        }
    }

?>