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
                    <h2 class="page-title">Produk Kategori</h2>
                </div>
                <!-- Page title actions -->
                <!-- <div class="col-auto ml-auto d-print-none">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-white"> New view </a>
                    </span>
                    <a href="<?= base_url('admin/addsale') ?>" class="btn btn-primary ml-3 d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg> Tambah penjualan
                    </a>
                    <a href="#" class="btn btn-primary ml-3 d-sm-none btn-icon" data-toggle="modal" data-target="#modal-report" aria-label="Create new report">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                    </a>
                </div> -->
            </div>
        </div>
        <?php if (!empty($this->session->flashdata('message'))) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <?php if (!empty($this->session->flashdata('message_error'))) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('message_error'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <!-- Judul Halaman end -->

        <!-- Form Tambah Kategori start -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Kategori</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <div class="row row-sm">
                                <form action="" method="POST">
                                    <div class="row row-sm">
                                        <div class="col-10">
                                            <input type="text" class="form-control" name="nama_merk" placeholder="Tambah Kategori">
                                        </div>
                                        <div class="col-2">
                                            <button type="submit" name="tambah_kategori" value="1" class="btn btn-white btn-icon" aria-label="Button">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form tambah kategori end -->

        <!-- Data Kategori start-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kategori</h3>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <!-- <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"></th> -->
                            <th class="text-left" style="width:5%">No.</th>
                            <th>Nama Kategori</th>
                            <!-- <th class="w-1">status</th> -->
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($merk as $m) : ?>
                            <tr>
                                <!-- <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td> -->
                                <td><span class="text-muted"></span><?= $i ?></td>
                                <td><span class="text-muted"><?= $m['nama_merk'] ?></span></td>
                                <!-- <td>
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked />
                                    <span class="form-check-label"></span>
                                </label>
                            </td> -->
                                <td class="text-right">
                                    <span class="dropdown ml-1">
                                        <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- <a class="dropdown-item" href="#">
                                                Edit
                                            </a> -->
                                            <a class="dropdown-item text-danger" href="#">
                                                Hapus
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>
                        <?php $i++;
                        endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
        <!-- Data Kategori end -->

        <?php $this->load->view('admin/lib/footer'); ?>
        <?php $this->load->view('admin/lib/libjs'); ?>

        </body>

        </html>