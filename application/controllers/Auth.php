<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim');
        $this->form_validation->set_rules('password', 'Password', 'trim');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login', ['title' => 'login']);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $query = $this->db->get_where('tb_users', ['email' => $email])->row_array();

            if ($query) {
                if (password_verify($password, $query['password'])) {
                    $data = array(
                        'users' => $query,
                        $this->input->post('remember_me')
                    );
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil login, silahkan tunggu 3 detik!</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    redirect(base_url('auth/'));
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show"><div class="text-white">Password salah !</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                    redirect(base_url('auth/'));
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show"><div class="text-white">Akun tidak terdaftar !</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect(base_url('auth/'));
            }
        }
    }

    public function daftar()
    {
        if($this->session->userdata('users') == NULL){
            redirect(base_url('auth'));
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|is_unique[tb_users.email]', [
            'is_unique' => 'Email telah digunakan.'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('ux/layout', ['title' => 'daftar', 'content' => 'daftar']);
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

            $data = array(
                'nama' => $nama,
                'email' => $email,
                'password' => $password,
            );

            $this->db->insert('tb_users', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil daftar users</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect(base_url('auth/daftar'));
        }
    }

    public function logout()
    {   
        $this->session->unset_userdata('users');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil logout</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect(base_url('auth'));
    }
}

/* End of file Auth.php */
