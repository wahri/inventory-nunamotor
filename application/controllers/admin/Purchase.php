<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends Admin_Controller
{

    public function index()
    {
        $this->load->view('admin/purchase/addPurchase');
    }
    public function addPurchase($id)
    {
        $this->data['nav_active'] = 'stok';
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

            $this->data['mobil'] = $this->db->get_where('produk', ['id_kendaraan' => $id])->row_array();
            $this->db->select('sum(jumlah*harga) as total', FALSE);
            $this->data['total_modal'] = $this->db->get_where('detail_modal', ['id_kendaraan' => $id])->row_array();

            $this->load->view('admin/purchase/addPurchase', $this->data);
        }
    }
    public function managePurchase()
    {
        $this->load->view('admin/purchase/managePurchase');
    }

    public function hapusPurchase($id)
    {
        $modal = $this->db->get_where('detail_modal', ['id_modal' => $id])->row_array();
        $this->db->delete('detail_modal', ['id_modal' => $id]);
        $this->session->set_flashdata('message', 'Berhasil manghapus data');
        redirect('admin/purchase/addpurchase/' . $modal['id_kendaraan'], 'refresh');
    }

    public function addPenjualan($id)
    {
        $this->data['nav_active'] = 'terjual';

        if ($this->input->post('tambah')) {
            $data = [
                'id_kendaraan' => $id,
                'tanggal' => date('Y-m-d H:i:s', strtotime($this->input->post('tanggal'))),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga')
            ];
            $this->db->insert('detail_jual', $data);

            $this->session->set_flashdata('message', 'Berhasil menambah data');
            redirect('admin/purchase/addpenjualan/' . $id, 'refresh');
        } elseif ($this->input->post('lunas')) {
            $data['status'] = 2;
            $this->db->update('produk', $data, ['id_kendaraan' => $id]);

            $this->session->set_flashdata('message', 'Berhasil menambah data');
            redirect('admin/addproduct/produkterjual/', 'refresh');
        } else {
            $this->data['jual'] = $this->db->get_where('detail_jual', ['id_kendaraan' => $id])->result_array();

            $this->db->select_sum('harga');
            $this->data['total_jual'] = $this->db->get_where('detail_jual', ['id_kendaraan' => $id])->row_array();

            $this->load->view('admin/purchase/addpenjualan', $this->data);
        }
    }
}
