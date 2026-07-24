<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_data'); // Muat model kamu
    }

    public function get_data() {
        $data = $this->M_data->get_all(); // Fungsi ambil data di model
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode([
                'status' => true,
                'data'   => $data
            ]));
    }
}