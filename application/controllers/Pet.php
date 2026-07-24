<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pet extends CI_Controller {

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

    // ✅ TAMPIL DATA
    public function index()
    {
        $data['pets'] = $this->db->get('pets')->result();
        $this->load->view('admin/pets/index', $data);
    }

    // ✅ FORM TAMBAH
    public function create()
    {
        $this->load->view('admin/pets/create');
    }

    // ✅ SIMPAN DATA + UPLOAD GAMBAR
    public function store()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('photo')) {
            $upload = $this->upload->data();
            $photo = $upload['file_name'];
        } else {
            $photo = null;
        }

        $data = [
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'age' => $this->input->post('age'),
            'description' => $this->input->post('description'),
            'photo' => $photo
        ];

        $this->db->insert('pets', $data);
        redirect('index.php/pet');
    }

    // ✅ HAPUS DATA + FILE GAMBAR
    public function delete($id)
    {
        $pet = $this->db->get_where('pets', ['id' => $id])->row();

        if ($pet && $pet->photo && file_exists('./uploads/'.$pet->photo)) {
            unlink('./uploads/'.$pet->photo);
        }

        $this->db->delete('pets', ['id' => $id]);
        redirect('index.php/pet');
    }

    // ✅ FORM EDIT
    public function edit($id)
    {
        $data['pet'] = $this->db->get_where('pets', ['id' => $id])->row();
        $this->load->view('admin/pets/edit', $data);
    }

    // ✅ UPDATE DATA + OPSIONAL GANTI GAMBAR
    public function update($id)
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048;

        $this->load->library('upload', $config);

        $pet = $this->db->get_where('pets', ['id' => $id])->row();

        if ($this->upload->do_upload('photo')) {

            // hapus gambar lama
            if ($pet && $pet->photo && file_exists('./uploads/'.$pet->photo)) {
                unlink('./uploads/'.$pet->photo);
            }

            $upload = $this->upload->data();
            $photo = $upload['file_name'];

        } else {
            $photo = $pet->photo; // pakai gambar lama
        }

        $data = [
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'age' => $this->input->post('age'),
            'description' => $this->input->post('description'),
            'photo' => $photo
        ];

        $this->db->update('pets', $data, ['id' => $id]);
        redirect('index.php/pet');
    }
}