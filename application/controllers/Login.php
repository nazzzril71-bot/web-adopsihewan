<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('session');
    }

    public function index()
    {
        // Jika sudah login, langsung arahkan ke dashboard
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }
        $this->load->view('login');
    }

    public function proses()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Panggil model untuk cek ke database
        $cek = $this->Login_model->cek_login($email, $password);

        if ($cek && $cek->num_rows() > 0) {
            $row = $cek->row();
            
            // Buat session login
            $data_session = array(
                'email' => $row->email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data_session);

            // Redirect ke dashboard jika berhasil
            redirect('dashboard');
        } else {
            // Jika gagal, kembalikan ke halaman login
            $this->session->set_flashdata('gagal', 'Email atau Password salah!');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}