<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buat extends CI_Controller
{
    public function index() {
        if (!$this->session->userdata('username')) {
            redirect('auth');
        }

        $data['id'] = $this->session->userdata('id');
        $this->load->view('buat/index', $data);
    }

    public function tambahRPS() {
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
                'id_user' => $this->input->post('id_user')
            ];
            $this->Matkul_model->insertRPS($data);
            redirect('daftar');
        }
    }
}