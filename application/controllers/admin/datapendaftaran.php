<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datapendaftaran extends CI_Controller {
    public function index(){
        $data['daftar'] = $this->m_mahasiswa->getDataMahasiswa();
        $this->load->view('layoutsadmin/header');
        $this->load->view('pages/admin/datapendaftaran', $data);
        $this->load->view('layoutsadmin/footer');
    }
}