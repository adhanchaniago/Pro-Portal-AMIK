<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        // $this->load->library('session');
        session_start();
        //Do your magic here
    }

    public function halamanAdmin()
    {
        $this->load->view('back/login.php');
    }

    public function doLoginAdmin()
    {
        $post = $this->input->post();

        // cari user berdasakan email dan username
        $this->db->where('admin_username', $post["username"]);
        $user = $this->db->get('tb_admin')->row();

        // jika user terdaftar
        if ($user) {
            // periksa password nya
            $isPasswordTrue = $post["password"] == $user->admin_password;

            // jika password benar dan dia admin
            if ($isPasswordTrue == true) {
                // login sukses yay
                $_SESSION['user'] = $user;
                // $this->session->set_userdata(['user' => $user]);
                // var_dump($_SESSION['user']);
                // exit;
                redirect(site_url('Home'));
                // return true;
            }
        }
        // jika login gagal
        redirect(site_url('Home'));
    }

    public function doLoginDosen()
    {
        $post = $this->input->post();
        $user = $this->db->get_where('tb_dosen', array('dosen_nidn' => $post['nidn']))->row();
        // jika user terdaftar
        if ($user) {
            // periksa password nya
            $isPasswordTrue = $post["password"] == $user->dosen_pass;
            // jika password benar dan dia admin
            if ($isPasswordTrue == true) {
                // login sukses yay
                // $this->session->set_userdata(['dosen' => $user]);
                $_SESSION['dosen'] = $user;
                // var_dump($_SESSION['user']);
                // exit;
                redirect(site_url('HomeDosen'));
                // return true;
            }
        }
        // jika login gagal
        redirect(site_url('/'));
    }

    public function logoutAdmin()
    {
        session_destroy();
        redirect(site_url('Home'));
    }
    public function LogoutDosen()
    {
        session_destroy();
        return redirect(site_url('/'));
    }
}

/* End of file Login.php */
