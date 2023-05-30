<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('users') == NULL) {
            redirect(base_url('auth'));
        }
    }


    public function index()
    {
        $this->form_validation->set_rules('kategori', 'kategori', 'trim');
        
        
        if ($this->form_validation->run() == FALSE) {

            $kategori = $this->db->get('tb_kategori')->result();
            
            $data = array(
                    'content' => 'kategori/view',
                    'kategori' => $kategori,
                    'title' => 'Kategori Project',
                );
            $this->load->view('ux/layout', $data, FALSE);

        } else {
            
            $config['upload_path'] = './images/kategori';
            $config['allowed_types'] = 'gif|jpg|png|ico|jpeg';
            $config['max_size']  = '9999999';
            $config['encrypt_name']  = TRUE;
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('icon')){
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show"><div class="text-white">Error Icon, ' . $error . '</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect(base_url('admin/kategori/'));
            }
            else{
                $icon = $this->upload->data('file_name');
                $kategori = $this->input->post('kategori');
                $a = $this->input->post('tampilkan_di_home');
                if ($a != NULL) {
                    $tampilkan_di_home = 1;
                } else {
                    $tampilkan_di_home = 0;
                }

                $data = array(
                        'kategori' => $kategori,
                        'icon' => $icon,
                        'tampilkan_di_home' => $tampilkan_di_home
                    );

                $this->db->insert('tb_kategori', $data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil tambah data</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect(base_url('admin/kategori/'));
            }
            
        }
    }

    public function edit($id)
    {
        $ic = $_FILES['icon']['name'];
        if($ic != NULL){
            
            $config['upload_path'] = './images/kategori';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
            $config['max_size']  = '999999';
            $config['encrypt_name'] = true;
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('icon')){
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger border-0 bg-danger alert-dismissible fade show"><div class="text-white">Error Icon, ' . $error . '</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
                redirect(base_url('admin/kategori/'));
            }
            else{
                $icon = $this->upload->data('file_name');
            }
        } else {
            $get = $this->db->get_where('tb_kategori', ['id_kategori' => $id])->row_array();
            $icon = $get['icon'];
        }
        $kategori = $this->input->post('kategori');
        $a = $this->input->post('tampilkan_di_home');
        if ($a != NULL) {
            $tampilkan_di_home = 1;
        } else {
            $tampilkan_di_home = 0;
        }

        $data = array(
            'icon' => $icon,
            'kategori' => $kategori,
            'tampilkan_di_home' => $tampilkan_di_home
        );

        $this->db->where('id_kategori', $id);
        $this->db->update('tb_kategori', $data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil edit data</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect(base_url('admin/kategori/'));
    }

    public function hapus($id)
    {
        $this->db->where('id_kategori', $id);
        $this->db->delete('tb_kategori');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success border-0 bg-success alert-dismissible fade show"><div class="text-white">Berhasil hapus data</div><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>');
        redirect(base_url('admin/kategori/'));
    }

}

/* End of file Kategori.php */
