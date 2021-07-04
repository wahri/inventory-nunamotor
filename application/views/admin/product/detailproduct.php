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
                    <h2 class="page-title">Detail Data Kendaraan</h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ml-auto d-print-none">
                    <!-- <span class="d-none d-sm-inline">
                        <a href="<?= base_url('admin/addproduct/manageproduct') ?>" class="btn btn-white"> Rekap data Kendaraan </a>
                    </span> -->

                </div>
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
        <?php if (!empty(validation_errors())) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo validation_errors(); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-3">
                        <label class="form-label">ID Kendaraan</label>
                        <input type="text" class="form-control" name="id_kendaraan" placeholder="nm. " value="<?= $produk['id_kendaraan'] ?>" readonly>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3 justify-content-between">
                        <div class="col-4">
                            <?php if(!empty($produk['gambar'])): ?>
                                <img src="<?= base_url('upload/produk/') . $produk['gambar'] ?>" class="w-100 h-100 object-contain" alt="Card side image">
                            <?php else: ?>
                            Tidak ada gambar
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Merk Mobil</label>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Pilih Merk" class="form-control" value="<?= $produk['merk_mobil'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Type</label>
                                <div class="col">
                                    <input type="text" class="form-control" value="<?= $produk['type_mobil'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Jenis Transmisi</label>
                                <div class="col">
                                    <input type="text" class="form-control" value="<?= $produk['jenis_transmisi'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Bahan Bakar</label>
                                <div class="col">
                                    <input type="text" class="form-control" value="<?= $produk['bahan_bakar'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Warna</label>
                                <div class="col">
                                    <input type="text" class="form-control" value="<?= $produk['warna'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Tahun Rakitan</label>
                                <div class="col">
                                    <input type="text" class="form-control" value="<?= $produk['tahun_rakitan'] ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">No TNKB</label>
                                <div class="col">
                                    <input type="text" class="form-control mb-2" value="<?= $produk['tnkb'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nama Pemilik Terdaftar</label>
                                <div class="row row-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" value="<?= $produk['nama_pemilik'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nomor Rangka Kendaraan</label>
                                <div class="row row-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" value="<?= $produk['nomor_rangka'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nomor Mesin Kendaraan</label>
                                <div class="row row-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" value="<?= $produk['nomor_mesin'] ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- body home end -->

    <script>
        $(function() {
            $("#onlyYear").datepicker({
                dateFormat: 'yy'
            });
        });​
    </script>
    <?php $this->load->view('admin/lib/footer'); ?>
    <?php $this->load->view('admin/lib/modal'); ?>
    <?php $this->load->view('admin/lib/libjs'); ?>

    </body>

    </html>