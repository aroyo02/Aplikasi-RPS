<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_view extends CI_Controller
{
    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->model('Matkul_model');

        $id_rps = $this->uri->segment(3);

        $data['rps'] = $this->Matkul_model->getRPSEdit($id_rps);
        $this->load->view('edit_view/index', $data);
    }

    public function delm() {
        $this->load->model('Matkul_model');

        $column = $this->uri->segment(3);
        $id_rps = $this->uri->segment(4);

        $this->Matkul_model->deleteMateri($column, $id_rps);
        redirect('edit_view/index/' . $id_rps);
    }
}