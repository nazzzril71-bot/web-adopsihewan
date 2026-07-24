<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function proses()
{
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $cek = $this->Login_model->cek_login($email, $password);

    echo "<pre>";
    echo "Email : ".$email."<br>";
    echo "Password : ".$password."<br>";
    echo "MD5 : ".md5($password)."<br>";
    echo "Jumlah Data : ".$cek->num_rows();
    die();
}

    public function logout()
    {
        $this->session->sess_destroy();

        redirect(base_url('index.php/dashboard'));
    }

}