<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->model('Matkul_model');

        $data['name'] = $this->session->userdata('name');
        $data['nim'] = $this->session->userdata('nim');
        $data['id'] = $this->session->userdata('id');

        $data['rps'] = [];
        $data['keyword'] = $this->input->post('keyword');

        if ($this->input->post('submit')) {
            $data['rps'] = $this->Matkul_model->getRPSAfterSearch($data);
        } else {
            $data['keyword'] = [];
            $data['rps'] = $this->Matkul_model->getRPS($data);
        }
        $this->load->view('dashboard/index', $data);
    }
}