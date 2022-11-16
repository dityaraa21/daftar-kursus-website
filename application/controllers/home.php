<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    public function index(){

        $data = array (
            'kursus' => $this->m_kursus->getKursus(),
            'materi' => $this->m_kursus->getMateri(),
        );

        $this->load->view('layouts/header');
        $this->load->view('layouts/navhead');
        $this->load->view('home', $data);
        $this->load->view('layouts/footer');
    }
}