<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends Admin_Controller
{

    public function detail($id)
    {
        $this->data['nav_active'] = '';
        $this->data['produk'] = $this->db->get_where('produk', ['id_kendaraan' => $id])->row_array();
        $this->data['code'] = '';
        $this->load->view('admin/product/detailproduct', $this->data);
    }
}
