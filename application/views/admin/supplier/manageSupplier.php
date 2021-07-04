<?php $this->load->view('admin/lib/header'); ?>
<?php $this->load->view('admin/lib/topbar'); ?>
<?php $this->load->view('admin/lib/menubar'); ?>

<!-- body home start -->
<div class="content">
    <div class="container-xl">
        <!-- Judul Halaman start -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">Overview</div>
                    <h2 class="page-title">Kelola Data Pemasok</h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <a href="<?= base_url('admin/pemasok/addsupplier') ?>" class="btn btn-primary ml-3 d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Tambah Pemasok
                    </a>
                </div>


            </div>
        </div>
        <!-- Judul Halaman end -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pemasok</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>ID Supplier</th>
                                    <th>Nama Pemasok</th>
                                    <th>No WhatsApp</th>
                                    <th>Email</th>
                                    <th>Instagram</th>
                                    <th>Tokopedia</th>
                                    <th>Shopee</th>
                                    <th>Alamat</th>
                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-muted">
                                        LBN.P001
                                    </td>
                                    <td>Toko Kue Citra</td>
                                    <td class="text-muted">
                                        0812 5678 1234
                                    </td>
                                    <td class="text-muted">
                                        citrakue@gmail.com
                                    </td>
                                    <td class="text-muted">
                                        @lubneera.id
                                    </td>
                                    <td class="text-muted">
                                        -
                                    </td>
                                    <td class="text-muted">
                                        -
                                    </td>
                                    <td class="text-muted">
                                        Jl. Lebak Indah No 34a. Jakarta Selatan. DKI. Indonesia
                                    </td>

                                    <td class="text-right">
                                        <span class="dropdown ml-1">
                                            <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-pemasok">
                                                    Edit
                                                </a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-hapus">
                                                    Hapus
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <?php $this->load->view('admin/lib/footer'); ?>
    <?php $this->load->view('admin/lib/modal'); ?>
    <?php $this->load->view('admin/lib/libjs'); ?>

    </body>

    </html>