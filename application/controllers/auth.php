<?php

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('npm', 'npm', 'required', ['required' => 'npm Required!']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password Required!']);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts/header');
            $this->load->view('layouts/navhead');
            $this->load->view('login');
            $this->load->view('layouts/footer');
        } else {
            $auth = $this->m_auth->cek_login();

            if ($auth == FALSE) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Username atau Password Salah</div>');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('npm', $auth->npm);
                $this->session->set_userdata('id', $auth->id);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case 1:
                        redirect('admin/datakursus');
                        break;
                    case 2:
                        redirect('home');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
