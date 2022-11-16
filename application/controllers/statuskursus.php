<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statuskursus extends CI_Controller {
    public function index(){

        $data['daftar'] = $this->m_mahasiswa->getStatus();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navhead');
        $this->load->view('pages/mahasiswa/status_kursus', $data);
        $this->load->view('layouts/footer');
    }
}