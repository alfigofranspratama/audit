<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('users') == NULL) {
            redirect(base_url('auth'));
        }
    }


    public function index()
    {
        $this->form_validation->set_rules('nama', '', 'trim');

        
        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'content' => 'profile',
                'title' => 'Profile'
            );
            $this->load->view('ux/layout', $data, FALSE);
        } else {
            $data['nama'] = $this->input->post('nama');
            if ($this->input->post('password') != NULL) {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }

            $users = $this->session->userdata('users');
            $this->db->where('id_users', $users['id_users']);
            $this->db->update('tb_users', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil Profile</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect(base_url('admin/profile/'));
            
            
        }
        
        
    }
}

/* End of file Profile.php */
