<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        session_start();
    }


    public function index()
    {
        $data['bc'] = array(
            'Home' => 'Home',
            'Laporan' => ''
        );
        $this->load->view('back/laporan/index.php', $data);
    }

    public function Cetak()
    {
        $bulan = $this->input->post('bulan');
        $data['bulanAmbil'] = $bulan;
        $data['bulan'] = $this->db->query("SELECT * FROM `tb_penelitian` JOIN tb_dosen ON tb_penelitian.dosen_id= tb_dosen.dosen_id WHERE tb_penelitian.penelitian_mulai LIKE '%$bulan%'")->result();
        $this->load->view('back/laporan/cetak.php', $data);
    }
}

/* End of file Laporan.php */
