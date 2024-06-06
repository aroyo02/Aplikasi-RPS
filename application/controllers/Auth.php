<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('auth/index');
        } else {
            $this->login();
        }
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if ($password === $user['password']) {
                $data = [
                    'username' => $user['username'],
                    'name' => $user['name'],
                    'nim' => $user['nim'],
                    'id' => $user['id']
                ];
                $this->session->set_userdata($data);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger p-1 text-center" role="alert">
                password salah.
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger p-1 text-center" role="alert">
            Username tidak terdaftar.
            </div>');
            redirect('auth');
        }
    }

    public function logout() {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('name');
        $this->session->sess_destroy();
        redirect('auth');
    }
}