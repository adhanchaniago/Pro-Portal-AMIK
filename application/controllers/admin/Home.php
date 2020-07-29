<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('session');
        session_start();
        if (empty($_SESSION['user'])) {
            redirect(site_url('HalamanLoginAdmin'));
        }
    }

    public function index()
    {
        $data['bc'] = array(
            'Home' => ''
        );

        $this->load->view('back/index.php', $data);
    }
}
