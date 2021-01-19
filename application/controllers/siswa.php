<?php
class Siswa extends CI_Controller{
    function __construct()
    {
       parent::__construct();
       $this->load->model('siswa_model');
       $this->load->helper('form');
       $this->load->library('form_validation');

    }
    function index(){
        $siswa['data'] = $this->siswa_model->get()->result_array();
        $this->load->view('siswa/index', $siswa);
    }



    function tambah(){
        $this->load->view('siswa/tambah');
    }
    function add_action(){
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        if ($this->form_validation->run() == TRUE) {
            //SAVE
            $nama = $this->input->post('nama');
            $tl = $this->input->post('tanggal_lahir');
            $jk = $this->input->post('jenis_kelamin');
            $data = [
                'nama' => $nama,
                'tanggal_lahir' => $tl,
                'jenis_kelamin' => $jk
            ];
            $this->siswa_model->add('siswa',$data);
            $this->session->set_flashdata('respon', 'added');
            redirect(base_url('siswa/'));   
        } else {
            $this->load->view('siswa/tambah');
        }
        
    }



    function hapus($id){
        $where = array(
            'id' => $id
        );
        $this->siswa_model->delete($where,'siswa');
    }


    function edit($id){
        $where = [
            'id' => $id
        ];
        $data['edit'] = $this->siswa_model->edit($where, 'siswa')->result_array();
        $this->load->view('siswa/edit', $data);
        if(count($data['edit']) <= 0){
            redirect(base_url('siswa'));
        }
        }

    function update(){
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required');
        if($this->form_validation->run() == TRUE){
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        
        $where = [
            'id' => $id
        ];
        $data = [
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tanggal_lahir' => $tanggal_lahir
        ];
        $this->session->set_flashdata('respon', 'updated');
        $this->siswa_model->update($where, 'siswa', $data);
    }
    }
}