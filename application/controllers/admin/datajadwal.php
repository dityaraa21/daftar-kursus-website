<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datajadwal extends CI_Controller {
    public function index(){
        $data['kursus'] = $this->m_kursus->getKursus();
        $this->load->view('layoutsadmin/header');
        $this->load->view('pages/admin/datajadwal', $data);
        $this->load->view('layoutsadmin/footer');
    }
    
    public function delete($id) 
    {
        $data = array(
            'id'=>$id,
        );
        $this->m_kursus->deleteJadwalAda($data);
        redirect('admin/datajadwal');
    }

}