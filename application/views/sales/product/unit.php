<?php $this->load->view('sales/lib/header'); ?>
<?php $this->load->view('sales/lib/topbar'); ?>
<?php $this->load->view('sales/lib/menubar'); ?>

<!-- body home start -->
<div class="content">
    <div class="container-xl">

        <!-- Judul Halaman start -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">Overview</div>
                    <h2 class="page-title">Keterangan Satuan Produk</h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ml-auto d-print-none">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-white"> New view </a>
                    </span>
                    <a href="<?= base_url('sales/addsale') ?>" class="btn btn-primary ml-3 d-none d-sm-inline-block">
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
                </div>
            </div>
        </div>
        <!-- Judul Halaman end -->

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah satuan</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="col-lg-5">
                        <div class="mb-3">
                            <div class="row row-sm">
                                <div class="col">
                                    <input type="text" class="form-control" name="example-text-input" placeholder="Nama satuan">
                                </div>
                                <div class="col-auto align-self-center">
                                    <label class="form-selectgroup-item">
                                        <input href="#" type="checkbox" name="name" value="sun" class="form-selectgroup-input" checked>
                                        <span class="form-selectgroup-label">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data satuan start-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data satuan</h3>
            </div>
            <div class="card-body border-bottom py-3">
                <div class="d-flex">
                    <div class="text-muted">
                        Show
                        <div class="mx-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm" value="8" size="3">
                        </div>
                        entries
                    </div>
                    <div class="ml-auto text-muted">
                        Search:
                        <div class="ml-2 d-inline-block">
                            <input type="text" class="form-control form-control-sm">
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr>
                            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"></th>
                            <th>Nama satuan</th>
                            <th class="w-1">status</th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">Box</span></td>
                            <td>
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked />
                                    <span class="form-check-label"></span>
                                </label>
                            </td>
                            <td class="text-right">
                                <span class="dropdown ml-1">
                                    <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Hapus
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-muted">Botol</span></td>
                            <td>
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" checked />
                                    <span class="form-check-label"></span>
                                </label>
                            </td>
                            <td class="text-right">
                                <span class="dropdown ml-1">
                                    <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">
                                            Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            Hapus
                                        </a>
                                    </div>
                                </span>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex align-items-center">
                <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                <ul class="pagination m-0 ml-auto">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <polyline points="15 6 9 12 15 18" />
                            </svg>
                            prev
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            next <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <polyline points="9 6 15 12 9 18" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Data satuan end -->

        <?php $this->load->view('sales/lib/footer'); ?>
        <?php $this->load->view('sales/lib/libjs'); ?>

        </body>

        </html>