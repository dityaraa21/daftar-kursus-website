<?php
defined('BASEPATH') or exit('No direct script access allowed');

class datakursus extends CI_Controller
{
    public function index()
    {
        $data['materi'] = $this->m_kursus->getDataTambah();
        $this->load->view('layoutsadmin/header');
        $this->load->view('pages/admin/datakursus', $data);
        $this->load->view('layoutsadmin/footer');
    }

    public function tambahkursus()
    {
        $this->load->view('layoutsadmin/header');
        $this->load->view('pages/admin/datakursus_tambah');
        $this->load->view('layoutsadmin/footer');
    }

    public function tambah()
    {
        $nama_kursus           = $this->input->post('nama_kursus');
        $keterangan_kursus     = $this->input->post('keterangan_kursus');

        $data = array(
            'nama_kursus'      => $nama_kursus,
            'keterangan_kursus' => $keterangan_kursus
        );

        $this->m_kursus->tambahkursus($data, 'kursus');
        redirect('admin/datakursus');
    }


    //edit data
    public function tampil($id)
    {
        $data['data'] = $this->m_kursus->getMateriId($id);
        $this->load->view('layoutsadmin/header');
        $this->load->view('pages/admin/edit_datakursus', $data);
        $this->load->view('layoutsadmin/footer');
    }

    public function update($id)
    {

        $nama_kursus           = $this->input->post('nama_kursus');
        $keterangan_kursus     = $this->input->post('keterangan_kursus');

        $data = array(
            'id' => $id,
            'nama_kursus'      => $nama_kursus,
            'keterangan_kursus' => $keterangan_kursus,
        );

        $this->m_kursus->update($data);
        redirect('admin/datakursus');
    }

    public function delete($id)
    {
        $data = array(
            'id' => $id,
        );
        $this->m_kursus->deleteJadwal($data);
        redirect('admin/datakursus');
    }
}
