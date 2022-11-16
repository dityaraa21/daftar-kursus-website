<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datamahasiswa extends CI_Controller {
    public function index(){
        $data['mhs'] = $this->m_mahasiswa->getMhs();
        $this->load->view('layoutsadmin/header');
        $this->load->view('pages/admin/datamahasiswa', $data);
        $this->load->view('layoutsadmin/footer');
    }

    public function tampil($id)
    {
        $data['data'] = $this->m_mahasiswa->getMhsId($id);
        $this->load->view('layoutsadmin/header');
        $this->load->view('pages/admin/edit_datakursus', $data);
        $this->load->view('layoutsadmin/footer');
    }
}