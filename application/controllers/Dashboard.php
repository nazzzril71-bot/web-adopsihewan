<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');

        // Cek apakah user sudah login atau belum
        if (!$this->session->userdata('logged_in')) {
            redirect('index.php/login');
        }
    }

    public function index()
    {
        $data['total_pets'] = $this->db->count_all('pets');
        $data['total_adoptions'] = $this->db->count_all('adoptions');
        $data['total_users'] = $this->db->count_all('users');

        $this->load->view('dashboard', $data);
    }
}