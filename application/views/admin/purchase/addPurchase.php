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
                    <h2 class="page-title">Catatan Modal Keluar</h2>
                </div>
                <!-- Page title actions -->
                <!-- <div class="col-auto ml-auto d-print-none">
                    <span class="d-none d-sm-inline">
                        <a href="<?= base_url('admin/manageSale') ?>" class="btn btn-white"> Rekap Pembelian </a>
                    </span>
                </div> -->
            </div>
        </div>
        <!-- Judul Halaman end -->
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
        <div class="col-md-12">
            <div class="card">
                <!-- <div class="card-header">
                    <div class="col-lg-3">
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembelian</label>
                            <input id="datapicker" type="text" value="<?php $tgl = date('d-m-Y');
                                                                        echo $tgl;
                                                                        ?>" class="form-control mb-2" placeholder="Select a date" />

                        </div>
                    </div>
                </div> -->
                <div class="card-header d-flex">
                    <div class="col-3">
                    <label class="form-label">Tanggal Pembelian Mobil</label>
                    <input type="text" class="form-control" readonly value="<?= date('d M Y', strtotime($mobil['tanggal_input'])) ?>">
                    </div>
                    <a href="<?= base_url('admin/addproduct/manageproduct') ?>" class="btn btn-success ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"></path>
                            <path d="M7 12l5 5l10 -10"></path>
                            <path d="M2 12l5 5m5 -5l5 -5"></path>
                        </svg>
                        Simpan
                    </a>
                </div>
                <div class="card-body">
                    <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Pemasok</label>
                                    <div class="row row-sm">
                                        <div class="col">
                                            <input class="form-control" list="datalistOptions" placeholder="Type to search..." />
                                            <datalist id="datalistOptions">
                                                <option value="Aruba" />
                                                <option value="Afghanistan" />
                                            </datalist>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <label class="form-selectgroup-item">
                                                <a href="<?= base_url('admin/pemasok/addsupplier') ?>" class="btn btn-outline-primary btn-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <path d="M2 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path>
                                                        <line x1="16" y1="11" x2="22" y2="11"></line>
                                                        <line x1="19" y1="8" x2="19" y2="14"></line>
                                                    </svg>
                                                    Pemasok
                                                </a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-2">
                                    <label class="form-label">No Invoice</label>
                                    <input type="text" class="form-control" name="example-disabled-input" placeholder="LBN.00.00/00" value="">

                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="mb-2">
                                    <label class="form-label">Detail Pemasok</label>
                                    <textarea class="form-control" data-toggle="autosize" placeholder="Tulis Sesuatu..."></textarea>
                                </div>
                            </div>
                        </div> -->

                    <div class="dropdown-divider"></div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 15%">Tanggal</th>
                                    <th class="text-center" style="width: 25%">Item</th>
                                    <th class="text-center" style="width: 20%">Jumlah</th>
                                    <th class="text-center" style="width: 20%">Harga</th>
                                    <th class="text-center" style="width: 20%">Jumlah</th>
                                    <th class="w-1"></th>


                                </tr>
                            </thead>
                            <form action="" method="POST">
                                <tr>
                                    <td>
                                        <div class="input-icon mb-3">

                                            <div class="col">
                                                <input id="datapicker" type="date" name="tanggal" required class="form-control mb-2" placeholder="Select a date" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-icon mb-3">

                                            <div class="col">
                                                <input type="text" class="form-control" name="detail" required placeholder="Item Pembelian">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" id="jumlah" required name="jumlah" value="1" placeholder="0">
                                    </td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" id="harga" required name="harga" placeholder="0">
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" id="total" placeholder="00" disabled>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <button type="submit" name="tambah" value="1" class="btn btn-primary btn-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            </form>

                            <?php foreach ($modal as $d) : ?>
                                <tr>
                                    <td>
                                        <div class="input-icon mb-3">

                                            <div class="col">
                                                <input readonly value="<?= date('d M Y', strtotime($d['tanggal'])) ?>" class="form-control mb-2" />
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="input-icon mb-3">

                                            <div class="col">
                                                <input readonly value="<?= $d['detail'] ?>" class="form-control mb-2" />
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="col">
                                            <input readonly value="<?= $d['jumlah'] ?>" class="form-control mb-2" />
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="text" class="form-control" value="<?= number_format($d['harga'], 2, ',', '.') ?>" readonly>
                                        </div>
                                    </td>
                                    <?php
                                    $t = $d['jumlah'] * $d['harga'];
                                    ?>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="text" class="form-control" value="<?= number_format($t, 2, ',', '.') ?>" readonly>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" data-toggle="modal" data-target="#modal-hapuss" data-id="<?= $d['id_modal'] ?>" class="btn btn-danger btn-icon hapus">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <line x1="4" y1="7" x2="20" y2="7"></line>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <tr>
                                <td colspan="4" class="strong text-right">Total</td>
                                <td class="text-right">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">
                                            Rp.
                                        </span>
                                        <input type="text" class="form-control" value="<?= number_format($total_modal['total'], 2, ',', '.')  ?>" placeholder="00">
                                    </div>
                                </td>
                                <td></td>

                            </tr>

                            <!-- <tr>
                                    <td colspan="3" class="strong text-right">Ongkos Kirim</td>
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
                                    <td colspan="3" class="strong text-right">Grand Total</td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" placeholder="00" disabled>
                                        </div>
                                    </td>
                                </tr> -->

                        </table>
                        <!-- <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#modal-info">
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
                        </a> -->
                        <!-- <div class="card-footer d-flex">
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M7 12l5 5l10 -10"></path>
                                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                                </svg>
                                Simpan
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- body home end -->



    <?php $this->load->view('admin/lib/footer'); ?>
    <div class="modal modal-blur fade" id="modal-hapuss" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Kamu yakin?</div>
                    <div>Jika kamu lanjutkan, kamu akan kehilanggan seluruh data ini.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                    <a href="" id="linkHapus" class="btn btn-danger">Ya, Hapus semua data ini</a>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('admin/lib/libjs'); ?>

    <script>
        $('.hapus').click(function() {
            //get cover id
            var id = $(this).data('id');
            //set href for cancel button
            $('#linkHapus').attr('href', '<?= base_url('admin/purchase/hapuspurchase/') ?>' + id);
        })
    </script>

    <script>
        $('#harga').on('input', function() {
            var jumlah = $('#jumlah').val();
            var harga = $('#harga').val();
            $('#total').val(jumlah * harga)
        });
        $('#jumlah').on('input', function() {
            var jumlah = $('#jumlah').val();
            var harga = $('#harga').val();
            $('#total').val(jumlah * harga)
        });
    </script>
    </body>

    </html>