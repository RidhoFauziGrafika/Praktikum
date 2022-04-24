<?php 

    class Mahasiswa extends CI_Controller{
        public function index(){
            $this->load->model('mahasiswa_model');
            $mahasiswa = $this->mahasiswa_model->getAll();
            $data['mahasiswa'] = $mahasiswa;
            // selanjutnya tinggal kita render data ke dalam view
            $this->load->view('layout/header');
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('layout/footer');
        }

        public function detail($id){
            $this->load->model('mahasiswa_model');
            $siswa = $this->mahasiswa_model->getById($id);
            $data['siswa'] = $siswa;
            // selanjutnya tinggal kita render data ke dalam view
            $this->load->view('layout/header');
            $this->load->view('mahasiswa/detail', $data);
            $this->load->view('layout/footer');
        }
    }

?>