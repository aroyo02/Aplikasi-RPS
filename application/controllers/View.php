<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller
{
    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->model('Matkul_model');

        $id_rps = $this->uri->segment(3);

        $data['rps'] = $this->Matkul_model->getRPSEdit($id_rps);
        $this->load->view('view_rps/index', $data);
    }
}