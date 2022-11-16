<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftarkursus extends CI_Controller
{
    public function index()
    {
        $data['kursus'] = $this->m_kursus->getKursus();
        $this->load->view('layouts/header');
        $this->load->view('layouts/navhead');
        $this->load->view('pages/mahasiswa/daftar_kursus', $data);
        $this->load->view('layouts/footer');
    }

    public function daftar($id)
    {

        $data['daftar'] = $this->m_kursus->daftar($id);
        $this->load->view('layouts/header');
        $this->load->view('layouts/navhead');
        $this->load->view('pages/mahasiswa/form_daftar', $data);
        $this->load->view('layouts/footer');
    }

    public function postdata()
    {
        $krs         = $_FILES['krs']['name'];
       
        if ($krs) {
            $config['upload_path'] = './uploads/pdf';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('krs')) {
                echo "KRS gagal diupload !";
            } else {
                $krs = $this->upload->data('file_name');
            }
        }
        $data = array(
            'id_user' => $this->session->userdata('id'),
            'id_jadwal' => $this->input->post('jadwal'),
            'krs'        => $krs,
            'status'        => 'menunggu persetujuan',
          
        );

        $this->m_kursus->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
        redirect('home');


    }
}
