<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addsale extends Admin_Controller
{

    public function index()
    {
        $this->load->view('admin/sale/addsale');
    }

    public function addDetailSale($id)
    {
        if ($this->input->post('tambah')) {
            $data = [
                'id_kendaraan' => $id,
                'tanggal' => date('Y-m-d H:i:s', strtotime($this->input->post('tanggal'))),
                'detail' => $this->input->post('detail'),
                'jumlah' => $this->input->post('jumlah'),
                'harga' => $this->input->post('harga')
            ];
            $this->db->insert('detail_modal', $data);

            $this->session->set_flashdata('message', 'Berhasil menambah data');
            redirect('admin/purchase/addpurchase/' . $id, 'refresh');
        } else {
            $this->data['modal'] = $this->db->get_where('detail_modal', ['id_kendaraan' => $id])->result_array();

            $this->db->select('sum(jumlah*harga) as total', FALSE);
            $this->data['total_modal'] = $this->db->get_where('detail_modal', ['id_kendaraan' => $id])->row_array();

            $this->load->view('admin/sale/addPurchase', $this->data);
        }
        
    }
}
