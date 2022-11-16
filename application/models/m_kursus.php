<?php

class m_kursus extends CI_Model
{
    //Tampil data Kursus Tersedia
    public function getKursus(){
        $this->db->select('*');
        $this->db->from('kursus');
        $this->db->join('jadwal_kursus', 'jadwal_kursus.id_kursus = kursus.id');
        return $this->db->get()->result();
    }

    //Tampil data Kursus
    public function getMateri(){
        $this->db->select('*');
        $this->db->from('kursus');
        $this->db->join('jadwal_kursus', 'jadwal_kursus.id_kursus = kursus.id', 'left');
        return $this->db->get()->result();
    }

    //Fungsi untuk Daftar Kursus
    //join tabel kursus dan jadwal kursus by id
    public function daftar($id){
        $this->db->select('*');
        $this->db->from('kursus');
        $this->db->join('jadwal_kursus', 'jadwal_kursus.id_kursus = kursus.id', 'left');
        $this->db->where('kursus.id', $id);
        return $this->db->get()->row();
    }
    //fungsi form add untuk menambahkan daftar kursus
    public function add($data){
        $this->db->insert('kursus_daftar', $data);
    }

    //admin tambah data kursus
    public function tambahkursus($data){
        $this->db->insert('kursus', $data);
    }

    //mengambil id kursus untuk mengedit
    public function getMateriId($id){
        $this->db->select('*');
        $this->db->from('kursus');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }

    //fungsi untuk mengupdate data edit kursus
    public function update($data){
        $this->db->where('id', $data['id']);
        $this->db->update('kursus', $data);
    }

    //fungsi untuk menampilkan data kursus admin
    public function getDataTambah(){
        $this->db->select('*');
        $this->db->from('kursus');
        return $this->db->get()->result();

    }

    public function deleteJadwal($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('kursus', $data);
    }


    //Admin Data Kursus Tersedia
    public function deleteJadwalAda($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('jadwal_kursus', $data);
    }
}