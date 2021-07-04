<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Sales_Controller
{

    public function index()
    {
        $this->data['nav_active'] = 'home';
        $this->db->select('p.*');
        $this->db->select('sum(jumlah*harga) as modal', FALSE);
        $this->db->from('produk p');
        $this->db->join('detail_modal j', 'j.id_kendaraan = p.id_kendaraan', 'left');
        $this->db->group_by('p.id_kendaraan');
        $this->db->where('status', 0);
        $this->data['produk'] = $this->db->get()->result_array();


        $this->db->select('p.*');
        $this->db->select('sum(jumlah*harga) as modal', FALSE);
        $this->db->from('produk p');
        $this->db->join('detail_modal j', 'j.id_kendaraan = p.id_kendaraan', 'left');
        $this->db->group_by('p.id_kendaraan');
        $this->db->where('status', 1);
        $this->data['produk_deal'] = $this->db->get()->result_array();

        $this->data['sales'] = $this->db->get('sales')->result_array();

        if ($this->input->post('batalkan_penjualan')) {
            $data = [
                'status' => 0,
                'id_sales_penjual' => NULL
            ];
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);

            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('sales/addproduct/manageproduct', 'refresh');
        }

        if ($this->input->post('terjual')) {
            $data = [
                'status' => 1,
                'id_sales_penjual' => $this->input->post('id_sales_penjual')
            ];
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);

            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('sales/addproduct/manageproduct', 'refresh');
        }

        if ($this->input->post('tetapkan_harga')) {
            $data['harga_jual'] = $this->input->post('harga_jual');
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);

            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('sales/addproduct/manageproduct', 'refresh');
        }
        // echo '<pre>';
        // print_r($this->data['pro']);
        // echo '</pre>';
        // die;


        // $this->data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('sales/home', $this->data);
    }
}
