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
                    <h2 class="page-title">Tambah Penjualan</h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ml-auto d-print-none">
                    <span class="d-none d-sm-inline">
                        <a href="<?= base_url('admin/manageSale') ?>" class="btn btn-white"> Rekap Penjualan </a>
                    </span>
                    <a href="#" class="btn btn-primary ml-3 d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-report">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Input Penjualan
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

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-3">
                        <label class="form-label">No Invoice</label>
                        <input type="text" class="form-control" name="example-disabled-input" placeholder="LBN.00.00/00" value="" disabled>

                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Nama/No HP Konsumen</label>
                                    <div class="row row-sm">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Walking Customer">
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <label class="form-selectgroup-item">
                                                <input href="#" type="checkbox" name="name" value="sun" class="form-selectgroup-input" data-toggle="modal" data-target="#modal-konsumen" checked>
                                                <span class="form-selectgroup-label"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <path d="M2 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path>
                                                        <line x1="16" y1="11" x2="22" y2="11"></line>
                                                        <line x1="19" y1="8" x2="19" y2="14"></line>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Invoice</label>
                                    <input id="datapicker" type="text" value="<?php $tgl = date('d-m-Y');
                                                                                echo $tgl;
                                                                                ?>" class="form-control mb-2" placeholder="Select a date" />

                                </div>
                            </div>
                        </div>
                        <label class="form-label">Jenis Pembayaran</label>
                        <div class="form-selectgroup-boxes row mb-3">
                            <div class="col-lg-4">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked />
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="mr-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Cash Payment</span>
                                            <span class="d-block text-muted">Pembayaran Tunai/COD</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-selectgroup-item">
                                    <input type="radio" name="report-type" value="1" class="form-selectgroup-input" />
                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                        <span class="mr-3">
                                            <span class="form-selectgroup-check"></span>
                                        </span>
                                        <span class="form-selectgroup-label-content">
                                            <span class="form-selectgroup-title strong mb-1">Bank Payment</span>
                                            <span class="d-block text-muted">Pembayaran Non Tunai/Food Apps</span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label required">Tanggal</label>
                                    <div class="input-icon mb-3">
                                        <input class="form-control" list="datalistOptions" placeholder="Type to search..." />
                                        <datalist id="datalistOptions">
                                            <option value="Aruba" />
                                            <option value="Afghanistan" />
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">ITEM</label>
                                    <input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled..." value="" disabled>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="mb-3">
                                    <label class="form-label required">Jumlah</label>
                                    <input type="number" class="form-control" placeholder="00">
                                </div>
                            </div>
                            <div class="col-lg-1">

                                <div class="mb-3">
                                    <label class="form-label">Diskon</label>
                                    <div class="input-group mb-2">
                                        <input type="number" class="form-control" placeholder="00">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Total (Rp.)</label>
                                    <input type="number" class="form-control" name="example-disabled-input" placeholder="0.00" disabled>
                                </div>
                            </div>

                            <div class="col-lg-1">
                                <div class="mb-3">
                                    <label class="form-label">Aksi</label>
                                    <span class="dropdown ml-1">
                                        <button class="btn btn-white btn-md dropdown-toggle" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">
                                                Hapus item
                                            </a>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 1%"></th>
                                        <th></th>
                                        <th class="text-center" style="width: 1%"></th>
                                        <th class="text-right" style="width: 20%"></th>
                                        <th class="text-right" style="width: 20%">
                                            <a href="#" class="btn btn-primary btn-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <circle cx="12" cy="12" r="9"></circle>
                                                    <line x1="9" y1="12" x2="15" y2="12"></line>
                                                    <line x1="12" y1="9" x2="12" y2="15"></line>
                                                </svg>
                                                Tambah
                                            </a>

                                        </th>
                                    </tr>
                                </thead>

                                <tr>
                                    <td colspan="4" class="strong text-right">Diskon Penjualan</td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <input type="number" class="form-control" placeholder="00">
                                            <span class="input-group-text">
                                                %
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="strong text-right">Biaya Pengiriman</td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" placeholder="00">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="strong text-right">Grand Total</td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" placeholder="00" disabled>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="strong text-right">Pembayaran Dimuka</td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" placeholder="00">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="strong text-right">Sisa Pembayaran</td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" placeholder="00">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="strong text-right">Kembalian</td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" placeholder="00" disabled>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M7 12l5 5l10 -10"></path>
                                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                                </svg>
                                Lunas
                            </a>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                    <path d="M21 3L14.5 21a.55 .55 0 0 1 -1 0L10 14L3 10.5a.55 .55 0 0 1 0 -1L21 3"></path>
                                </svg>
                                Submit
                            </a>
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M7 12l5 5l10 -10"></path>
                                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                                </svg>
                                Simpan dan Tambah lainnya
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- body home end -->

    <?php $this->load->view('admin/lib/footer'); ?>
    <?php $this->load->view('admin/lib/modal'); ?>
    <?php $this->load->view('admin/lib/libjs'); ?>

    </body>

    </html>