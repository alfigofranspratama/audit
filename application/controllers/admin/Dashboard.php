<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $users = $this->session->userdata('users');
        $idu = $users['id_users'];
        $postingan = $this->db->get('tb_project')->num_rows();
        $postinganarsip = $this->db->get_where('tb_project', ['arsipkan' => 1])->num_rows();
        $postingansaya = $this->db->get_where('tb_project', ['id_users' => $idu])->num_rows();
        $team_users = $this->db->get('tb_users')->num_rows();
        $data = array(
            'content' => 'dashboard',
            'postingan' => $postingan,
            'postingansaya' => $postingansaya,
            'team_users' => $team_users,
            'postinganarsip' => $postinganarsip,
        );
        $this->load->view('ux/layout', $data, FALSE);
    }
}

/* End of file Dashboard.php */
