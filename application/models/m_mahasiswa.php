<?php

class m_mahasiswa extends CI_Model
{
    public function getMhs()
    {
        $this->db->select('*');
        $this->db->from('users');
        return $this->db->get()->result();
    }

    public function getMhsId($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    
    public function getDataMahasiswa(){
        $this->db->select('*');
        $this->db->from('kursus_daftar');
        $this->db->join('users', 'users.id = kursus_daftar.id_user');
        $this->db->join('jadwal_kursus', 'jadwal_kursus.id_kursus = kursus_daftar.id_jadwal');
        $this->db->join('kursus', 'kursus.id = jadwal_kursus.id_kursus');
        return $this->db->get()->result();
    }


    //status pendaftaran mahasiswa
    public function getStatus(){
        $this->db->select('*');
        $this->db->from('kursus_daftar');
        $this->db->join('users', 'users.id = kursus_daftar.id_user');
        $this->db->join('jadwal_kursus', 'jadwal_kursus.id_kursus = kursus_daftar.id_jadwal');
        $this->db->join('kursus', 'kursus.id = jadwal_kursus.id_kursus');
        $this->db->where('users.id',$this->session->userdata('id'));
        return $this->db->get()->result();
    }
}