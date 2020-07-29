<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dosens');
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
            'Dosen' => ''
        );

        if (empty($id)) {
            $data['dosens'] = $this->Dosens->index();
            $this->load->view('back/dosen/index.php', $data);
        } else {
            $data['dosens'] = $this->Dosens->index($id);
            $this->load->view('back/dosen/edit.php', $data);
        }
    }

    // Add a new item
    public function add()
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Dosen' => 'Dosen',
            'Tambah Data Dosen' => ''
        );

        if (empty($this->input->post())) {
            $this->load->view('back/dosen/add.php', $data);
        } else {
            $post = array(
                'dosen_nidn' => $this->input->post('nidn'),
                'dosen_pass' => $this->input->post('password'),
                'dosen_nama' => $this->input->post('nama'),
                'dosen_jkel' => $this->input->post('jkel'),
                'dosen_alamat' => $this->input->post('alamat'),
                'dosen_agama' => $this->input->post('agama'),
                'dosen_pdd' => $this->input->post('pdd'),
                'dosen_status' => $this->input->post('status'),
                'dosen_tgl_msk' => $this->input->post('msk'),
                'dosen_email' => $this->input->post('email'),
                'dosen_nohp' => $this->input->post('nohp')
            );
            $this->Dosens->add($post);
            return redirect(site_url('Dosen'));
        }
    }

    //Update one item
    public function update()
    {
        $id =  $this->input->post('id');
        $post = array(
            'dosen_nidn' => $this->input->post('nidn'),
            'dosen_pass' => $this->input->post('password'),
            'dosen_nama' => $this->input->post('nama'),
            'dosen_jkel' => $this->input->post('jkel'),
            'dosen_alamat' => $this->input->post('alamat'),
            'dosen_agama' => $this->input->post('agama'),
            'dosen_pdd' => $this->input->post('pdd'),
            'dosen_status' => $this->input->post('status'),
            'dosen_tgl_msk' => $this->input->post('msk'),
            'dosen_email' => $this->input->post('email'),
            'dosen_nohp' => $this->input->post('nohp')
        );
        $this->Dosens->update($id, $post);
        return redirect(site_url('Dosen'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        $this->Dosens->delete($id);
        return redirect(site_url('Dosen'));
    }

    // Detail
    public function detail($id)
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Dosen' => 'Dosen',
            'Detail Dosen' => ''
        );

        $data['dosens'] = $this->Dosens->index($id);
        return $this->load->view('back/dosen/detail.php', $data);
    }
}

/* End of file Dosen.php */
