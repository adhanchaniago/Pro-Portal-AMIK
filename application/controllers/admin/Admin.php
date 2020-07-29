<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admins');
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
            'Admin' => ''
        );

        if (empty($id)) {
            $data['admins'] = $this->Admins->index();
            $this->load->view('back/admin/index.php', $data);
        } else {
            $data['admins'] = $this->Admins->index($id);
            $this->load->view('back/admin/edit.php', $data);
        }
    }

    // Add a new item
    public function add()
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Admin' => 'Admin',
            'Tambah Data Admin' => ''
        );

        // var_dump($this->input->post());
        // exit;
        if (empty($this->input->post())) {
            $this->load->view('back/admin/add.php', $data);
        } else {
            $post = array(
                'admin_username' => $this->input->post('username'),
                'admin_password' => $this->input->post('password'),
                'admin_nama' => $this->input->post('nama')
            );
            $this->Admins->add($post);
            return redirect(site_url('Admin'));
        }
    }

    //Update one item
    public function update()
    {
        $id =  $this->input->post('id');
        $post = array(
            'admin_username' => $this->input->post('username'),
            'admin_password' => $this->input->post('password'),
            'admin_nama' => $this->input->post('nama')
        );
        $this->Admins->update($id, $post);
        return redirect(site_url('Admin'));
    }

    //Delete one item
    public function delete($id = NULL)
    {
        $this->Admins->delete($id);
        return redirect(site_url('Admin'));
    }
}

/* End of file Admin.php */
