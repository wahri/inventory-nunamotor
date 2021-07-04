<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManageSale extends Admin_Controller
{

    public function index()
    {
        $this->load->view('admin/sale/manageSale');
    }
}
