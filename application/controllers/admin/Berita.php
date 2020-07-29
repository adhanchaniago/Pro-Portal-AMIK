<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Beritas');
        $this->load->library('upload');
        // $this->load->library('session');
        session_start();
        if (empty($_SESSION['user'])) {
            redirect(site_url('HalamanLoginAdmin'));
        }
    }

    // List all your items
    public function index($id = null)
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Berita' => ''
        );

        if (empty($id)) {
            $data['beritas'] = $this->Beritas->index();
            $this->load->view('back/berita/index.php', $data);
        } else {
            $data['beritas'] = $this->Beritas->index($id);
            $this->load->view('back/berita/edit.php', $data);
        }
    }

    // Add a new item
    public function add()
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Berita' => 'Berita',
            'Tambah Data Berita' => ''
        );

        if (empty($this->input->post())) {
            $this->load->view('back/berita/add.php', $data);
        } else {
            $config['upload_path'] = './uploads/berita/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['encrypt_name'] = TRUE; //enkripsi file name upload

            $this->load->library('upload', $config); //call library upload 
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                return redirect(site_url('Berita'));
            } else {
                echo "Success";
                $data = array('upload_data' => $this->upload->data());
                $judul = $this->input->post('judul');
                $isi = $this->input->post('isi');
                $gambar = $data['upload_data']['file_name'];
                $tgl = date('Y-m-d');

                $sql = array(
                    'berita_judul' => $judul,
                    'berita_isi' => $isi,
                    'berita_gambar' => $gambar,
                    'berita_post' => $tgl
                );

                $this->Beritas->add($sql);
                redirect(site_url('Berita'));
            }
        }
    }

    //Update one item
    public function update()
    {
        $id =  $this->input->post('id');
        $post = array(
            'Berita_username' => $this->input->post('username'),
            'Berita_password' => $this->input->post('password'),
            'Berita_nama' => $this->input->post('nama')
        );
        $this->Beritas->update($id, $post);
        return redirect(site_url('Berita'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        $this->Beritas->delete($id);
        return redirect(site_url('Berita'));
    }
}

/* End of file Berita.php */
