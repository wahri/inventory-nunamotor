<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        if ($level == 'admin') {
            $user = $this->db->get_where('admin', ['username' => $username])->row_array();

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id' => $user['id_admin'],
                        'level' => 'admin',
                        'status' => 'lgn'
                    ];

                    $this->session->set_userdata($data);

                    redirect('admin', 'refresh');
                } else {
                    $this->session->set_flashdata('message_error', 'Username atau password salah');
                    redirect('login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message_error', 'Username atau password salah');
                redirect('login', 'refresh');
            }
        } elseif ($level == 'sales') {
            $sales = $this->db->get_where('sales', ['username' => $username])->row_array();

            if ($sales) {
                if (password_verify($password, $sales['password'])) {
                    $data = [
                        'id' => $sales['id_sales'],
                        'level' => 'sales',
                        'status' => 'lgn'
                    ];

                    $this->session->set_userdata($data);

                    redirect('sales', 'refresh');
                } else {
                    $this->session->set_flashdata('message_error', 'Username atau password salah');
                    redirect('login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message_error', 'Username atau password salah');
                redirect('login', 'refresh');
            }
        } else {
            $this->session->set_flashdata('message_error', 'Pilih level akun');
            redirect('login', 'refresh');
        }
    }

    public function logout()
    {
        session_destroy();

        $this->session->set_flashdata('message', 'Anda telah logout');
        redirect('login', 'refresh');
    }
}
