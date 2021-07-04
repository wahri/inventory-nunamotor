<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Admin_Controller
{

	public function index()
	{
		$this->data['nav_active'] = 'home';
		$this->data['unit'] = $this->db->get_where('produk', ['status' => 0])->num_rows();
		$this->data['unit_deal'] = $this->db->get_where('produk', ['status' => 1])->num_rows();
		$this->data['unit_keluar'] = $this->db->get_where('produk', ['status' => 2])->num_rows();
		$this->load->view('admin/home', $this->data);
	}
}
