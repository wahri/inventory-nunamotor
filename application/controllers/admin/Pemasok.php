<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemasok extends Admin_Controller
{

    public function index()
    {
        $this->load->view('admin/supplier/addSupplier');
    }
    public function addSupplier()
    {
        $this->load->view('admin/supplier/addSupplier');
    }
    public function manageSupplier()
    {
        $this->load->view('admin/supplier/manageSupplier');
    }
}
