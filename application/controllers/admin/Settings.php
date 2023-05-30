<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
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
        $this->form_validation->set_rules('title_website', 'title_website', 'trim');


        if ($this->form_validation->run() == FALSE) {
            $settings = $this->db->get('tb_website')->row_array();
            $data = array(
                'content' => 'settings',
                'settings' => $settings,
                'title' => 'Setting Website',
            );
            $this->load->view('ux/layout', $data, FALSE);
        } else {
            $q = $this->db->get('tb_website')->row_array();
            

            $title_website = $this->input->post('title_website');
            $deskripsi_web = $this->input->post('deskripsi_web');
            $deskripsi_footer = $this->input->post('deskripsi_footer');

            $meta_deskripsi = $this->input->post('meta_deskripsi');
            $meta_keywords = $this->input->post('meta_keywords');
            $meta_title = $this->input->post('meta_title');

            $title_ux = $this->input->post('title_ux');

            $twitter = $this->input->post('twitter');
            $discord = $this->input->post('discord');
            $facebook = $this->input->post('facebook');
            $telegram = $this->input->post('telegram');
            $youtube = $this->input->post('youtube');
            $tiktok = $this->input->post('tiktok');

            $robotstxt = $this->input->post('robotstxt');
            $max_post = $this->input->post('max_post');

            
            $config['upload_path'] = 'components/images/favicon/';
            $config['allowed_types'] = 'jpg|png|ico|jpeg';
            $config['max_size']  = '99999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('logo_header_ui')){
                $logo_header_ui = $q['logo_header_ui'];
            } else{
                $logo_header_ui = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('favicon')) {
                $favicon = $q['favicon'];
            } else {
                $favicon = $this->upload->data('file_name');
            }
            
            if (!$this->upload->do_upload('logo_header_ux')) {
                $logo_header_ux = $q['logo_header_ux'];
            } else {
                $logo_header_ux = $this->upload->data('file_name');
            }
            

            $data = array(
                'title_website' => $title_website,
                'deskripsi_web' => $deskripsi_web,
                'deskripsi_footer' => $deskripsi_footer,
                'logo_header_ui' => $logo_header_ui,
                'favicon' => $favicon,
                'meta_deskripsi' => $meta_deskripsi,
                'meta_keywords' => $meta_keywords,
                'meta_title' => $meta_title,
                'title_ux' => $title_ux,
                'logo_header_ux' => $logo_header_ux,
                'twitter' => $twitter,
                'discord' => $discord,
                'facebook' => $facebook,
                'telegram' => $telegram,
                'youtube' => $youtube,
                'tiktok' => $tiktok,
                'robots_txt' => $robotstxt,
                'max_post' => $max_post,
            );

            $this->db->update('tb_website', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil edit data</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
            redirect(base_url('admin/settings/'));
        }
    }
}

/* End of file Settings.php */
