<?php 

class registrasi extends CI_Controller{
    public function index()
    {
        $this->form_validation->set_rules('nama',' Nama', 'required', ['required' => 'Nama Wajib diisi!']);
        $this->form_validation->set_rules('kelas',' Kelas', 'required', ['required' => 'Kelas Wajib diisi!']);
        $this->form_validation->set_rules('npm',' NPM', 'required', ['required' => 'Username Wajib diisi!']);
        $this->form_validation->set_rules('password',' Password', 'required', ['required' => 'Password Wajib diisi!']);
        if( $this->form_validation->run() == false){
            $this->load->view('layouts/header');
            $this->load->view('registrasi');
            $this->load->view('layouts/footer');
        }else{
            $data = array(
              
                'nama'          => $this->input->post('nama'),
                'kelas'         => $this->input->post('kelas'),
                'npm'            => $this->input->post('npm'),
                'password'      => $this->input->post('password'),
                'role_id'       => 2,
            );

            $this->db->insert('users',$data);
            redirect('auth/login');
        }
    }
}