<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addproduct extends Admin_Controller
{

    public function index()
    {
        $this->data['nav_active'] = 'stok';
        $this->form_validation->set_rules('id_kendaraan', 'ID', 'required|trim');
        $this->form_validation->set_rules('merk_mobil', 'Merk mobil', 'required|trim');
        $this->form_validation->set_rules('type_mobil', 'Type mobil', 'required|trim');
        $this->form_validation->set_rules('warna', 'Warna', 'required|trim');
        $this->form_validation->set_rules('tahun_rakitan', 'Tahun Rakitan', 'required|trim');
        $this->form_validation->set_rules('tnkb', 'Nomor TNKB', 'required|trim');
        $this->form_validation->set_rules('nama_pemilik', 'Nama pemilik', 'required|trim');
        $this->form_validation->set_rules('nomor_rangka', 'Nomor rangka', 'required|trim');
        $this->form_validation->set_rules('nomor_mesin', 'Nomor mesin', 'required|trim');

        if ($this->form_validation->run() === TRUE) {
            $gambar= '';
            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './upload/produk/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['max_size'] = '100000';
                $config['file_name'] = date('YmdHis');

                $this->load->library('upload', $config, 'gambar');
                $this->gambar->initialize($config);

                if ($this->gambar->do_upload('gambar')) {
                    $gambar = $this->gambar->data('file_name');
                } else {
                    $error = $this->gambar->display_errors();
                    $this->session->set_flashdata('message_error', 'Gagal mengupload gambar :' . $error);
                    redirect('admin/addproduct', 'refresh');
                }
            }

            $data = [
                'id_kendaraan' => $this->input->post('id_kendaraan'),
                'merk_mobil' => $this->input->post('merk_mobil'),
                'type_mobil' => $this->input->post('type_mobil'),
                'jenis_transmisi' => $this->input->post('jenis_transmisi'),
                'bahan_bakar' => $this->input->post('bahan_bakar'),
                'warna' => $this->input->post('warna'),
                'tahun_rakitan' => $this->input->post('tahun_rakitan'),
                'tnkb' => $this->input->post('tnkb'),
                'gambar' => $gambar,
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'nomor_rangka' => $this->input->post('nomor_rangka'),
                'nomor_mesin' => $this->input->post('nomor_mesin'),
                'detail' => $this->input->post('detail'),
                'tanggal_input' => date('Y-m-d H:i:s', strtotime($this->input->post('tanggal_input')))
            ];
            $this->db->insert('produk', $data);

            $this->session->set_flashdata('message', 'Berhasil menambah produk');
            if($this->input->post('simpan')){
                redirect('admin/addproduct/manageproduct', 'refresh');
            }elseif($this->input->post('simpan_tambah')){
                redirect('admin/addproduct/', 'refresh');
            }else{
                echo "hei";
                die;
            }
        } else {
            $this->db->select_max('id_kendaraan');
            $max_code = $this->db->get('produk')->row_array();

            $urutan = (int) substr($max_code['id_kendaraan'], -3);
            $urutan++;

            $this->data['code'] = 'NM.' . sprintf("%03s", $urutan);

            $this->data['merk'] = $this->db->get('merk_mobil')->result_array();
            $this->load->view('admin/product/addproduct', $this->data);
        }
    }
    public function manageProduct()
    {
        $this->data['nav_active'] = 'stok';
        
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

        if($this->input->post('batalkan_penjualan')){
            $data = [
                'status' => 0,
                'id_sales_penjual' => NULL
            ];
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);
    
            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('admin/addproduct/manageproduct', 'refresh');
        }
        
        if($this->input->post('terjual')){
            $data = [
                'status' => 1,
                'id_sales_penjual' => $this->input->post('id_sales_penjual')
            ];
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);

            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('admin/addproduct/manageproduct', 'refresh');
        }

        if($this->input->post('tetapkan_harga')){
            $data['harga_jual'] = $this->input->post('harga_jual');
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);

            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('admin/addproduct/manageproduct', 'refresh');
        }

        if($this->input->post('edit_product')){
            $data = [
                'merk_mobil' => $this->input->post('merk_mobil'),
                'type_mobil' => $this->input->post('type_mobil'),
                'jenis_transmisi' => $this->input->post('jenis_transmisi'),
                'bahan_bakar' => $this->input->post('bahan_bakar'),
                'warna' => $this->input->post('warna'),
                'tahun_rakitan' => $this->input->post('tahun_rakitan'),
                'tnkb' => $this->input->post('tnkb'),
                // 'gambar' => $gambar,
                'nama_pemilik' => $this->input->post('nama_pemilik'),
                'nomor_rangka' => $this->input->post('nomor_rangka'),
                'nomor_mesin' => $this->input->post('nomor_mesin'),
                'detail' => $this->input->post('detail'),
                'tanggal_input' => date('Y-m-d H:i:s', strtotime($this->input->post('tanggal_input')))
            ];
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);
            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('admin/addproduct/manageproduct', 'refresh');
        }

        // $this->data['produk'] = $this->db->get('produk')->result_array();
        $this->load->view('admin/product/manageProduct', $this->data);
    }

    public function produkTerjual()
    {
        if ($this->input->post('batalkan_penjualan')) {
            $data = [
                'status' => 0,
                'id_sales_penjual' => NULL
            ];
            $this->db->update('produk', $data, ['id_kendaraan' => $this->input->post('id_kendaraan')]);

            $this->session->set_flashdata('message', 'Berhasil mengupdate data');
            redirect('admin/addproduct/manageproduct', 'refresh');
        }
        $this->data['nav_active'] = 'terjual';

        $this->db->select('p.*');
        $this->db->select('sum(jumlah*harga) as modal', FALSE);
        $this->db->from('produk p');
        $this->db->join('detail_modal j', 'j.id_kendaraan = p.id_kendaraan', 'left');
        $this->db->group_by('p.id_kendaraan');
        $this->db->where('status', 2);
        $this->data['produk'] = $this->db->get()->result_array();

        $this->db->select('p.*');
        $this->db->select('sum(jumlah*harga) as modal', FALSE);
        $this->db->from('produk p');
        $this->db->join('detail_modal j', 'j.id_kendaraan = p.id_kendaraan', 'left');
        $this->db->group_by('p.id_kendaraan');
        $this->db->where('status', 1);
        $this->data['produk_deal'] = $this->db->get()->result_array();

        $this->load->view('admin/product/produkterjual', $this->data);
    }

    public function hapusProduct($id)
    {
        $this->db->delete('produk', ['id_kendaraan' => $id]);
        $this->db->delete('detail_modal', ['id_kendaraan' => $id]);
        $this->db->delete('detail_jual', ['id_kendaraan' => $id]);

        $this->session->set_flashdata('message', 'Berhasil menghapus produk');
        redirect('admin/addproduct/manageproduct', 'refresh');
    }
}
