<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function index()
{
    $this->load->view('landingpage');
}

    public function project()
    {
        date_default_timezone_set("Asia/Jakarta");
        $tgl = date("Y-m-d");
        $visitor = $this->db->get_where('tb_visitor',['tanggal' => $tgl])->num_rows();
        $d = $this->db->get_where('tb_visitor',['tanggal' => $tgl])->row_array();
        if ($visitor > 0) {
            $this->db->where('tanggal', $tgl);
            $this->db->update('tb_visitor', ['visitor' => $d['visitor'] + 1]);
        } else {
            $this->db->insert('tb_visitor', ['tanggal' => $tgl, 'visitor' => 1]);
        }

        $s = $this->db->get('tb_website')->row_array();
        if ($s['max_post'] != 0) {
            $project = $this->db->get_where('tb_project', ['arsipkan' => 0], $s['max_post'])->result();
            $c = $this->db->get_where('tb_project', ['arsipkan' => 0], $s['max_post'])->num_rows();
        } else {
            $project = $this->db->get_where('tb_project', ['arsipkan' => 0])->result();
            $c = $this->db->get_where('tb_project', ['arsipkan' => 0])->num_rows();
        }

        $data = array(
            'content' => 'homepage',
            'project' => $project,
            'c' => $c,
        );
        $this->load->view('ui/layout', $data, FALSE);
    }

    public function search()
    {
        $a = $this->input->get('keyw', true);
        $project = $this->db->query("SELECT * FROM tb_project WHERE nama_project LIKE '%$a%'")->result();
        $c = $this->db->query("SELECT * FROM tb_project WHERE nama_project LIKE '%$a%'")->num_rows();

        $data = array(
            'content' => 'homepage',
            'project' => $project,
            'c' => $c
        );
        $this->load->view('ui/layout', $data, FALSE);
    }
    
    public function search_kategori()
    {
        $a = $this->input->get('kategori', true);
        $b = implode(", ",$a);
        $project = $this->db->query("SELECT * FROM tb_project WHERE kategori LIKE '%$b%'")->result();
        $c = $this->db->query("SELECT * FROM tb_project WHERE kategori LIKE '%$b%'")->num_rows();

        $data = array(
            'content' => 'homepage',
            'project' => $project,
            'c' => $c,
        );
        $this->load->view('ui/layout', $data, FALSE);
    }

    public function detail($id)
    {
        $project = $this->db->query("SELECT * FROM tb_project WHERE id_project='$id'")->row_array();
        $view = $project['views'] + 1;
        
        $this->db->where('id_project', $id);
        $this->db->update('tb_project', ['views' => $view]);

        $data = array(
            'content' => 'details',
            'project' => $project
        );
        $this->load->view('ui/layout', $data, FALSE);
    }

}

/* End of file Home.php */
