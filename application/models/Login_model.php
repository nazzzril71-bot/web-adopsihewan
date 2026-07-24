<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function cek_login($email,$password)
    {
        return $this->db
            ->where('email',$email)
            ->where('password',md5($password))
            ->where('role','admin')
            ->get('users');
    }

}