<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->model('Matkul_model');

        $data['id'] = $this->session->userdata('id');

        $data['rps'] = $this->Matkul_model->getRPS($data);

        $this->load->view('daftar/index', $data);
    }

    public function delete() {
        $this->load->model('Matkul_model');

        $id_rps = $this->uri->segment(3);

        $this->Matkul_model->deleteRPS($id_rps);
        redirect('daftar');
    }
} 