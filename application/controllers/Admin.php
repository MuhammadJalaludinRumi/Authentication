<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{

		$data['title'] = 'Admin';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
	}

	public function role()
	{
		$data['title'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		// Tambahkan validasi
		$this->form_validation->set_rules('role', 'Role', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/role', $data);
		} else {
			$this->db->insert('user_role', ['role' => $this->input->post('role')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success">New role added!</div>');
			redirect('admin/role');
		}
	}

	public function roleAccess($role_id)
	{

		$data['title'] = 'Role Access';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/role-access', $data);
	}

	public function changeAccess()
	{
		$menuId = $this->input->post('menuId');
		$roleId = $this->input->post('roleId');

		$data = [
			'role_id' => $roleId,
			'menu_id' => $menuId
		];


		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" 
         role="alert"> Access Changed!!</div>');
	}

	public function users()
	{
		$data['title'] = 'User management';
		$data['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['all_users'] = $this->db->get('user')->result_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/userManagement/users', $data);
	}

	public function addUser()
	{
		$data['title'] = 'Add User';
		$data['user'] = $this->db->get_where('user', [
			'email' => $this->session->userdata('email')
		])->row_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/add-user', $data);
		} else {
			$insert = [
				'name' => $this->input->post('name', true),
				'email' => $this->input->post('email', true),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id'),
				'is_active' => $this->input->post('is_active'),
				'date_created' => time()
			];
			$this->db->insert('user', $insert);
			$this->session->set_flashdata('message', '<div class="alert alert-success">User added successfully!</div>');
			redirect('admin/users');
		}
	}

	public function editUser($id)
	{
		$data['title'] = 'Edit User';
		$data['user'] = $this->db->get_where('user', [
			'email' => $this->session->userdata('email')
		])->row_array();

		$data['edit_user'] = $this->db->get_where('user', ['id' => $id])->row_array();

		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('role_id', 'Role', 'required');
		$this->form_validation->set_rules('is_active', 'Status', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/userManagement/edit-user', $data);
		} else {
			$update = [
				'name' => $this->input->post('name', true),
				'role_id' => $this->input->post('role_id'),
				'is_active' => $this->input->post('is_active')
			];
			$this->db->where('id', $id);
			$this->db->update('user', $update);
			$this->session->set_flashdata('message', '<div class="alert alert-success">User updated successfully!</div>');
			redirect('admin/users');
		}
	}

	public function deleteUser($id)
	{
		$this->db->delete('user', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success">User deleted successfully!</div>');
		redirect('admin/users');
	}
}
