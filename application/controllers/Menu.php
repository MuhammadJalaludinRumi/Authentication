<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
        } else {
            $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">New Menu Added!!</div>');
            redirect('menu');
        }
    }

    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');;

        $data['subMenu'] = $this->menu->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Tile', 'required');
        $this->form_validation->set_rules('menu_id', 'Select Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">New sub Menu Added!!</div>');
            redirect('menu/submenu');
        }
    }



    public function editmenu()
    {
        $this->form_validation->set_rules('menu', 'Menu', 'required|is_unique[user_menu.menu]');

        $id = $this->input->post('id'); // ✅ Ambil ID dari form

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembalikan ke halaman utama
            // (tidak perlu ambil data lagi karena tidak buka halaman edit sendiri)
            $this->session->set_flashdata('error', validation_errors());
            redirect('menu');
        } else {
            $data = [
                'menu' => $this->input->post('menu'),
            ];

            $this->db->where('id', $id);
            $this->db->update('user_menu', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Menu updated successfully!!</div>');
            redirect('menu');
        }
    }

    public function deletemenu($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('user_menu');

        if ($query) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Successfully Deleted!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" 
        role="alert">Failed to Delete!</div>');
        }

        redirect('menu');
    }

    public function editsubmenu()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Select Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('menu'); // Atau redirect ke halaman edit submenu
        } else {
            $id = $this->input->post('id'); // ID submenu yang diedit

            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active'),
            ];

            $this->db->where('id', $id);
            $this->db->update('user_sub_menu', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu updated successfully!</div>');
            redirect('menu/submenu'); // Arahkan ke halaman submenu
        }
    }

    public function deletesubmenu($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('user_sub_menu');

        if ($query) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Submenu successfully deleted!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed to delete submenu!</div>');
        }

        redirect('menu/submenu');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
