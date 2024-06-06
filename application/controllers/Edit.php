<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends CI_Controller
{
    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $this->load->model('Matkul_model');

        $id_rps = $this->uri->segment(3);

        $data['rps'] = $this->Matkul_model->getRPSEdit($id_rps);
        $this->load->view('edit/index', $data);
    }

    public function editRPS() {
        $this->load->model('Matkul_model');

        $this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('semester', 'Semster', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = [
                'matkul' => $this->input->post('matkul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'kode' => $this->input->post('kode'),
                'semester' => $this->input->post('semester'),
                'materi1' => $this->input->post('materi1'),
                'materi2' => $this->input->post('materi2'),
                'materi3' => $this->input->post('materi3'),
                'materi4' => $this->input->post('materi4'),
                'materi5' => $this->input->post('materi5'),
                'materi6' => $this->input->post('materi6'),
                'materi7' => $this->input->post('materi7'),
                'materi8' => $this->input->post('materi8'),
                'materi9' => $this->input->post('materi9'),
                'materi10' => $this->input->post('materi10'),
                'materi11' => $this->input->post('materi11'),
                'materi12' => $this->input->post('materi12'),
                'materi13' => $this->input->post('materi13'),
                'materi14' => $this->input->post('materi14'),
                'id_rps' => $this->input->post('id_rps')
            ];
            $this->Matkul_model->updateRPS($data);
            redirect('daftar');
        }
    }
}