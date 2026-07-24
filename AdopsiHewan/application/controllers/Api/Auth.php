<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function login() {
        // Mengambil inputan POST dari Android Studio
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Cek ke model (menggunakan md5 sesuai yang kamu pakai sebelumnya)
        $user = $this->db->where('email', $email)
                         ->where('password', md5($password))
                         ->get('users')
                         ->row_array();

        if ($user) {
            // Jika login sukses, kirim respons JSON sukses
            $response = [
                'status' => true,
                'message' => 'Login Berhasil',
                'data' => $user
            ];
        } else {
            // Jika gagal
            $response = [
                'status' => false,
                'message' => 'Email atau Password salah'
            ];
        }

        // Output-kan dalam format JSON
        $this->output
             ->set_content_type('application/json')
             ->set_output(json_encode($response));
    }
}