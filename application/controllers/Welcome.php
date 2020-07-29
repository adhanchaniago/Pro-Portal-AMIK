<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Penelitians');
		// $this->load->library('session');
		session_start();
	}

	public function index()
	{
		$data['penelitians'] = $this->Penelitians->index();
		$data['beritas'] = $this->db->get('tb_berita')->result();
		$this->load->view('front/index.php', $data);
	}

	public function Ajukan()
	{
		$config['upload_path'] = './uploads/document/';
		$config['allowed_types'] = 'pdf|doc|docx';
		$config['encrypt_name'] = TRUE; //enkripsi file name upload

		$this->load->library('upload', $config); //call library upload 
		$this->upload->initialize($config);

		if (!$this->upload->do_upload('file')) {
			$error = array('error' => $this->upload->display_errors());
			echo "<script>
			alert( '$error[error]' )
			</script>";
			return redirect(site_url('HomeDosen'));
		} else {
			echo "Success";
			$data = array('upload_data' => $this->upload->data());;
			$file = $data['upload_data']['file_name'];

			$post = array(
				'dosen_id' => $this->input->post('id'),
				'penelitian_judul' => $this->input->post('judul'),
				'penelitian_mulai' => $this->input->post('mulai'),
				'penelitian_file' => $file,
				'penelitian_selesai' => $this->input->post('selesai')
			);

			$this->db->insert('tb_penelitian', $post);
			// $this->Beritas->add($sql);

			redirect(site_url('HomeDosen'));
		}
	}



	public function afterLogin()
	{
		if (empty($_SESSION['dosen'])) {
			redirect(site_url('/'));
		}
		$data['penelitians'] = $this->Penelitians->index();
		$data['beritas'] = $this->db->get('tb_berita')->result();
		$this->load->view('front/afterLogin.php', $data);
	}
}
