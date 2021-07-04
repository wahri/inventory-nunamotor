<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');

        $this->data['nav_active'] = 'pengaturan';
    }

    public function index()
    {
        $this->load->view('admin/setting/adduser', $this->data);
    }
    public function manageCompany()
    {
        $this->load->view('admin/setting/manageCompany', $this->data);
    }
    public function adduser()
    {
        if ($this->input->post('buat_akun')) {
            if ($this->input->post('level') == 'admin') {
                $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[admin.username]');
            } elseif ($this->input->post('level') == 'sales') {
                $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[sales.username]');
            } else {
                die;
            }
            if ($this->form_validation->run() === TRUE) {
                $foto = '';
                if (!empty($_FILES['foto']['name'])) {
                    $config['upload_path'] = './upload/foto/';
                    $config['allowed_types'] = 'jpg|jpeg|png';
                    $config['max_size'] = '100000';
                    $config['file_name'] = date('YmdHis');

                    $this->load->library('upload', $config, 'foto');
                    $this->foto->initialize($config);

                    if ($this->foto->do_upload('foto')) {
                        $foto = $this->foto->data('file_name');
                    } else {
                        $error = $this->foto->display_errors();
                        $this->session->set_flashdata('message_error', 'Gagal mengupload foto :' . $error);
                        redirect('admin/pengaturan/adduser', 'refresh');
                    }
                }
                $data = [
                    'username' => $this->input->post('username'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'nama_depan' => $this->input->post('nama_depan'),
                    'nama_belakang' => $this->input->post('nama_belakang'),
                    'hp' => $this->input->post('hp'),
                    'foto' => empty($foto) ? 'default.jpg' : ''
                ];
                if ($this->input->post('level') == 'admin') {
                    $this->db->insert('admin', $data);
                } elseif ($this->input->post('level') == 'sales') {
                    $this->db->insert('sales', $data);
                } else {
                    redirect('login');
                }

                $this->session->set_flashdata('message', 'Berhasil menambah user');
                redirect('admin/pengaturan/manageuser', 'refresh');
            } else {
                $this->session->set_flashdata('message_error', validation_errors());
                redirect('admin/pengaturan/adduser', 'refresh');
            }
        } else {
            $this->load->view('admin/setting/adduser', $this->data);
        }
    }
    public function manageUser()
    {
        $this->data['admin'] = $this->db->get('admin')->result_array();
        $this->data['sales'] = $this->db->get('sales')->result_array();
        $this->load->view('admin/setting/manageUser', $this->data);
    }

    public function edituser($level, $id)
    {
        if ($this->input->post('save')) {
            if ($level == 'admin') {
                echo "admin";
                die;
            } elseif ($level == 'sales') {
                echo "sales";
                die;
            } else {
                echo "error";
                die;
            }
        }
    }

    public function hapusUser($level, $id)
    {
        if ($level == 'admin') {
            $this->db->delete('admin', ['id_admin' => $id]);
            $this->session->set_flashdata('message', 'Berhasil manghapus data');
            redirect('admin/pengaturan/manageuser', 'refresh');
        } elseif ($level == 'sales') {
            $this->db->delete('sales', ['id_sales' => $id]);
            $this->session->set_flashdata('message', 'Berhasil manghapus data');
            redirect('admin/pengaturan/manageuser', 'refresh');
        } else {
            echo "error";
            die;
        }
    }

    public function manageSales($id = null)
    {
        if ($this->input->post('tambah_sales')) {
            $data = [
                'nama_depan' => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'hp' => $this->input->post('hp')
            ];
            $this->db->insert('sales', $data);

            $this->session->set_flashdata('message', 'Berhasil menambah data sales');
            redirect('admin/pengaturan/managesales', 'refresh');
        }
        if ($this->input->post('edit_sales')) {
            $data = [
                'nama_depan' => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'hp' => $this->input->post('hp')
            ];
            $this->db->update('sales', $data, ['id_sales' => $id]);

            $this->session->set_flashdata('message', 'Berhasil mengubah data sales');
            redirect('admin/pengaturan/managesales', 'refresh');
        }
        $this->data['admin'] = $this->db->get('admin')->result_array();
        $this->data['sales'] = $this->db->get('sales')->result_array();
        $this->data['edit_sales'] = $this->db->get_where('sales', ['id_sales' => $id])->row_array();
        $this->load->view('admin/setting/managesales', $this->data);
    }

    public function hapusSales($id)
    {
        $this->db->delete('sales', ['id_sales' => $id]);
        $this->session->set_flashdata('message', 'Berhasil manghapus data sales');
        redirect('admin/pengaturan/managesales', 'refresh');
    }
}
