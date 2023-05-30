<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
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
        $uid = $this->session->userdata('users');
        $project = $this->db->get_where('tb_project', ['id_users' => $uid['id_users']])->result();
        $data = array(
            'project' => $project,
            'content' => 'project/view',
            'title' => 'Project',
        );
        $this->load->view('ux/layout', $data, FALSE);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama_project', 'a', 'trim');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'content' => 'project/tambah',
                'title' => 'Project',
            );
            $this->load->view('ux/layout', $data, FALSE);
        } else {
            $users = $this->session->userdata('users');
            $id_users = $users['id_users'];
            date_default_timezone_set("Asia/Jakarta");
            $nama_project = $this->input->post('nama_project');
            $deskripsi = $this->input->post('deskripsi');
            $function_overview = $this->input->post('function_overview');
            $embed_code = $this->input->post('embed_code');
            $tanggal_post = date("Y-m-d");
            $kategori = $this->input->post('kategori');
            $buy_on_pancake = $this->input->post('buy_on_pancake');
            $website = $this->input->post('website');
            $telegram = $this->input->post('telegram');
            $discord = $this->input->post('discord');
            $twitter = $this->input->post('twitter');
            $kategori = implode(", ", $kategori);
            $score = $this->input->post('score');
            $views = 0;

            $config['upload_path'] = 'images/project/';
            $config['allowed_types'] = 'jpeg|jpg|png|zip|rar|exe|msi|pdf|xml|psd|tiff|raw|eps|mp3|mp4';
            $config['max_size']  = '9999999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_project')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>{$error}</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
                redirect(base_url('admin/project'));
            } else {
                $file_project = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('logo')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>{$error}</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
                redirect(base_url('admin/project'));
            } else {
                $logo = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('thumbnail')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>{$error}</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
                redirect(base_url('admin/project'));
            } else {
                $thumbnail = $this->upload->data('file_name');
            }
            if (!$this->upload->do_upload('function_graph')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>{$error}</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
                redirect(base_url('admin/project'));
            } else {
                $function_graph = $this->upload->data('file_name');
            }

            $data = array(
                'nama_project' => $nama_project,
                'file_project' => $file_project,
                'deskripsi' => $deskripsi,
                'function_graph' => $function_graph,
                'function_overview' => $function_overview,
                'embed_code' => $embed_code,
                'tanggal_post' => $tanggal_post,
                'kategori' => $kategori,
                'thumbnail' => $thumbnail,
                'buy_on_pancake' => $buy_on_pancake,
                'website' => $website,
                'telegram' => $telegram,
                'discord' => $discord,
                'twitter' => $twitter,
                'score' => $score,
                'id_users' => $id_users,
                'logo_project' => $logo,
                'views' => $views,
                'arsipkan' => 0
            );
            $this->db->insert('tb_project', $data);
            $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>Berhasil menambahkan project</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
            redirect(base_url('admin/project'));
        }
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('nama_project', 'a', 'trim');


        if ($this->form_validation->run() == FALSE) {
            $project = $this->db->get_where('tb_project', ['id_project' => $id])->row_array();
            $kategori_project = $project['kategori'];
            $projectKategori = explode(', ', $kategori_project);
            $data = array(
                'content' => 'project/edit',
                'title' => 'Project',
                'project' => $project,
                'projectKategori' => $projectKategori,
            );
            $this->load->view('ux/layout', $data, FALSE);
        } else {
            date_default_timezone_set("Asia/Jakarta");
            $project = $this->db->get_where('tb_project', ['id_project' => $id])->row_array();
            $nama_project = $this->input->post('nama_project');
            $deskripsi = $this->input->post('deskripsi');
            $function_overview = $this->input->post('function_overview');
            $embed_code = $this->input->post('embed_code');
            $tanggal_post = date("Y-m-d");
            $kategori = $this->input->post('kategori');
            $buy_on_pancake = $this->input->post('buy_on_pancake');
            $website = $this->input->post('website');
            $telegram = $this->input->post('telegram');
            $discord = $this->input->post('discord');
            $twitter = $this->input->post('twitter');
            $kategori = implode(", ", $kategori);
            $score = $this->input->post('score');

            $config['upload_path'] = 'images/project/';
            $config['allowed_types'] = 'jpeg|jpg|png|zip|rar|exe|msi|pdf|xml|psd|tiff|raw|eps|mp3|mp4';
            $config['max_size']  = '9999999';
            $config['max_width']  = '9999';
            $config['max_height']  = '9999';
            $config['encrypt_name'] = TRUE;


            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_project')) {
                $file_project = $project['file_project'];
            } else {
                @unlink(base_url('images/project/') . $project['file_project']);
                $file_project = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('thumbnail')) {
                $thumbnail = $project['thumbnail'];
            } else {
                @unlink(base_url('images/project/') . $project['thumbnail']);
                $thumbnail = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('logo')) {
                $logo_project = $project['logo_project'];
            } else {
                @unlink(base_url('images/project/') . $project['logo_project']);
                $logo_project = $this->upload->data('file_name');
            }

            if (!$this->upload->do_upload('function_graph')) {
                $function_graph = $project['function_graph'];
            } else {
                @unlink(base_url('images/project/') . $project['function_graph']);
                $function_graph = $this->upload->data('file_name');
            }

            $data = array(
                'nama_project' => $nama_project,
                'file_project' => $file_project,
                'deskripsi' => $deskripsi,
                'function_graph' => $function_graph,
                'function_overview' => $function_overview,
                'embed_code' => $embed_code,
                'tanggal_post' => $tanggal_post,
                'kategori' => $kategori,
                'buy_on_pancake' => $buy_on_pancake,
                'website' => $website,
                'telegram' => $telegram,
                'discord' => $discord,
                'twitter' => $twitter,
                'thumbnail' => $thumbnail,
                'logo_project' => $logo_project,
                'score' => $score,
                'arsipkan' => 0
            );
            $this->db->where('id_project', $id);
            $this->db->update('tb_project', $data);
            $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>Berhasil mengedit project</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
            redirect(base_url('admin/project'));
        }
    }

    public function arsip($id)
    {
        $a = $this->db->get_where('tb_project', ['id_project' => $id])->row_array();
        if ($a['arsipkan'] == 0) {
            $data['arsipkan'] = 1;
            $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>Berhasil mengarsipkan project</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        } else {
            $data['arsipkan'] = 0;
            $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>Berhasil mempublish project</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        }

        $this->db->where('id_project', $id);
        $this->db->update('tb_project', $data);
        redirect(base_url('admin/project'));
    }

    public function hapus($id)
    {
        $project = $this->db->get_where('tb_project', ['id_project' => $id])->row_array();
        @unlink(base_url('images/project/') . $project['file_project']);
        @unlink(base_url('images/project/') . $project['thumbnail']);
        @unlink(base_url('images/project/') . $project['logo_project']);
        @unlink(base_url('images/project/') . $project['function_graph']);
        
        $this->db->where('id_project', $id);
        $this->db->delete('tb_project');
        $this->session->set_flashdata('pesan', "<div class='alert alert-success border-0 bg-success alert-dismissible fade show'><div class='text-white'>Berhasil menghapus project</div><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>");
        redirect(base_url('admin/project'));
    }
}

/* End of file Project.php */
