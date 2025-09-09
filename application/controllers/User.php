<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		$this->load->database();
	}

	public function index()
	{
		$email = $this->session->userdata('email');
		$data['user']  = $this->db->get_where('user', ['email' => $email])->row_array();
		$data['title'] = 'Dashboard'; // ✅ tambahkan title

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/index', $data);
	}


	public function ruang_list()
	{
		$data['title'] = 'Data Ruang';
		$data['ruang'] = $this->db->get('ruang_data')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('user/ruang_list', $data);
		$this->load->view('templates/footer');
	}

	public function simpan_ruang()
	{
		$nama_ruang = $this->input->post('nama_ruang');
		$kondisi    = $this->input->post('kondisi');

		$foto_name = null;
		$upload_dir = './assets/img/uploads/';

		if (!is_dir($upload_dir)) {
			mkdir($upload_dir, 0777, true);
		}

		if (!empty($_FILES['foto_file']['name'])) {
			$config['upload_path']   = $upload_dir;
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size']      = 10240;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('foto_file')) {
				$upload_data = $this->upload->data();
				$foto_name = $upload_data['file_name'];
			} else {
				echo 'Upload gagal: ' . strip_tags($this->upload->display_errors());
				return;
			}
		}

		$data = [
			'nama_ruang'     => $nama_ruang,
			'kondisi'        => $kondisi,
			'foto'           => $foto_name,
			'tanggal_upload' => date('Y-m-d H:i:s')
		];

		$this->db->insert('ruang_data', $data);
		redirect('user/ruang_list'); // setelah simpan, balik ke list user
	}
}
