<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends Admin_Controller
{

    public function index()
    {
        if($this->input->post('tambah_kategori')){
            $data = [
                'nama_merk' => $this->input->post('nama_merk')
            ];
            $this->db->insert('merk_mobil', $data);

            $this->session->set_flashdata('message', 'Berhasil menambah merk');
            redirect('admin/category', 'refresh');
        }else{
            $this->data['nav_active'] = 'pengaturan';
            $this->data['merk'] = $this->db->get('merk_mobil')->result_array();
            $this->load->view('admin/product/Category', $this->data);
        }
    }
}
