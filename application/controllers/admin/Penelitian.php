<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penelitian extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->model('Penelitians');
        // $this->load->library('session');
        if (empty($_SESSION['user'])) {
            redirect(site_url('HalamanLoginAdmin'));
        }
    }

    // List all your items
    public function index($id = null)
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Penelitian' => ''
        );

        if (empty($id)) {
            $data['Penelitians'] = $this->Penelitians->index();
            $this->load->view('back/penelitian/index.php', $data);
        } else {
            $data['Penelitians'] = $this->Penelitians->index($id);
            $this->load->view('back/penelitian/edit.php', $data);
        }
    }

    // Add a new item
    public function add()
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'penelitian' => 'penelitian',
            'Tambah Data penelitian' => ''
        );

        // var_dump($this->input->post());
        // exit;
        if (empty($this->input->post())) {
            $this->load->view('back/penelitian/add.php', $data);
        } else {
            $post = array(
                'penelitian_username' => $this->input->post('username'),
                'penelitian_password' => $this->input->post('password'),
                'penelitian_nama' => $this->input->post('nama')
            );
            $this->Penelitians->add($post);
            return redirect(site_url('Penelitian'));
        }
    }

    //Update one item
    public function update()
    {
        $id =  $this->input->post('id');
        $post = array(
            'penelitian_status' => $this->input->post('status'),
            'admin_id' => $this->input->post('admin')
        );
        $this->Penelitians->update($id, $post);
        return redirect(site_url('Penelitian'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        $this->Penelitians->delete($id);
        return redirect(site_url('Penelitian'));
    }

    // Detail
    public function detail($id)
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Dosen' => 'Dosen',
            'Detail Dosen' => ''
        );

        $data['penelitians'] = $this->Penelitians->index($id);
        return $this->load->view('back/penelitian/detail.php', $data);
    }
}

/* End of file penelitian.php */
