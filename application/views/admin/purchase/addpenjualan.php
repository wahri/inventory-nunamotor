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
                    <h2 class="page-title">Data Pembayaran</h2>
                </div>
                <!-- Page title actions -->
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
                <div class="card-body">

                    <div class="dropdown-divider"></div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 15%">Tanggal</th>
                                    <th class="">Item</th>
                                    <th class="text-center" style="width: 20%">Harga</th>
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
                                                <input type="text" class="form-control" name="nama" required placeholder="Nama item">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" id="harga" required name="harga" placeholder="0">
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

                            <?php foreach ($jual as $d) : ?>
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
                                                <input readonly value="<?= $d['nama'] ?>" class="form-control mb-2" />
                                            </div>
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
                                    <td class="text-center">
                                        <a href="#" data-toggle="modal" data-target="#modal-hapuss" data-id="<?= $d['id_jual'] ?>" class="btn btn-danger btn-icon hapus">
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
                                <td colspan="2" class="strong text-right">Total</td>
                                <td class="text-right">
                                    <div class="input-group mb-2">
                                        <span class="input-group-text">
                                            Rp.
                                        </span>
                                        <input type="text" class="form-control" value="<?= number_format($total_jual['harga'], 2, ',', '.')  ?>" placeholder="00">
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
                        <div class="card-footer d-flex">
                            <a href="#" class="btn btn-success ml-auto" data-toggle="modal" data-target="#modal-hapus">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M7 12l5 5l10 -10"></path>
                                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                                </svg>
                                Lunas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- body home end -->


    <div class="modal modal-blur fade" id="modal-hapuss" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Kamu yakin?s</div>
                    <div>Jika kamu lanjutkan, kamu akan kehilanggan seluruh data ini.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                    <a href="" id="linkHapus" class="btn btn-danger">Ya, Hapus semua data ini</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Start -->
    <div class="modal modal-blur fade" id="modal-hapus" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <form action="" method="POST">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="modal-title">Kamu yakin?</div>
                        <div>Jika kamu lanjutkan, unit ini akan masuk tabel penjualan.</div>
                        <input type="hidden" name="id_kendaraan" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                        <button type="submit" name="lunas" value="1" class="btn btn-success">Ya, unit sudah lunas</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Modal Hapus End -->

    <?php $this->load->view('admin/lib/footer'); ?>
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