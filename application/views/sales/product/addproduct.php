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
                    <h2 class="page-title">Tambah Data Kendaraan</h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ml-auto d-print-none">
                    <span class="d-none d-sm-inline">
                        <a href="<?= base_url('admin/addproduct/manageproduct') ?>" class="btn btn-white"> Rekap data Kendaraan </a>
                    </span>

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
                <?php echo form_open_multipart(); ?>
                <div class="card-header">
                    <div class="col-lg-3">
                        <label class="form-label">ID Kendaraan</label>
                        <input type="text" class="form-control" name="id_kendaraan" placeholder="nm. " value="<?= $code ?>" readonly>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Tanggal Input Data</label>
                                <div class="col">
                                    <input id="datapicker" name="tanggal_input" type="text" value="<?= date('d-m-Y') ?>" class="form-control mb-2" placeholder="Select a date" />
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label required">Merk Mobil</label>
                                <div class="col">
                                    <input type="text" class="form-control" name="merk_mobil" placeholder="Pilih Merk" class="form-control" list="datalistOptions" value="<?= set_value('merk_mobil') ?>">
                                    <datalist id="datalistOptions">
                                        <?php foreach ($merk as $m) : ?>
                                            <option value="<?= $m['nama_merk'] ?>" />
                                        <?php endforeach; ?>
                                    </datalist>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label required">Type</label>
                                <div class="col">
                                    <input type="text" class="form-control" name="type_mobil" placeholder="Cth. Agya 1,2 G">
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label required">Jenis Transmisi</label>
                                <div class="col">
                                    <select class="form-select" name="jenis_transmisi">
                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                        <option value="Hybrid">Hybrid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label required">Bahan Bakar</label>
                                <div class="col">
                                    <select class="form-select" name="bahan_bakar">
                                        <option value="Bensin">Bensin</option>
                                        <option value="Solar">Solar</option>
                                        <option value="Listrik">Listrik</option>
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group mb-2 row">
                                    <label class="form-label col-3 col-form-label required">Harga Jual</label>
                                    <div class="col">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">
                                                Rp.
                                            </span>
                                            <input type="number" class="form-control" placeholder="00">
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label required">Warna</label>
                                <div class="col">
                                    <input type="text" class="form-control" name="warna" placeholder="Kode produk">
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label required">Tahun Rakitan</label>
                                <div class="col">
                                    <input type="text" class="form-control" name="tahun_rakitan" placeholder="Tahun Rakitan" class="form-control" list="tahun_rakit">
                                    <datalist id="tahun_rakit">
                                        <?php for ($i = 1945; $i <= date('Y'); $i++) : ?>
                                            <option value="<?= $i ?>" <?= $i == date('Y') ? 'selected' : '' ?>><?= $i ?></option>
                                        <?php endfor; ?>
                                    </datalist>
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label required">No TNKB</label>
                                <div class="col">
                                    <input type="text" class="form-control mb-2" name="tnkb" placeholder="No. TNKB" />
                                </div>
                            </div>
                            <div class="form-group mb-2 row">
                                <label class="form-label col-3 col-form-label">Gambar</label>
                                <div class="form-file col">
                                    <input type="file" name="gambar" class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">
                                        <span class="form-file-text">Pilih gambar...</span>
                                        <span class="form-file-button">Browse</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label required">Nama Pemilik Terdaftar</label>
                                <div class="row row-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nama_pemilik" placeholder="Nama Pemilik terdaftar">
                                    </div>

                                    <!-- <div class="col-auto align-self-center">
                                            <label class="form-selectgroup-item">
                                                <input href="#" type="checkbox" name="name" value="sun" class="form-selectgroup-input" data-toggle="modal" data-target="#modal-pemasok" checked>
                                                <span class="form-selectgroup-label"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <path d="M2 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path>
                                                        <line x1="16" y1="11" x2="22" y2="11"></line>
                                                        <line x1="19" y1="8" x2="19" y2="14"></line>
                                                    </svg>
                                                </span>
                                            </label>
                                        </div> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label required">Nomor Rangka Kendaraan</label>
                                <div class="row row-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nomor_rangka" placeholder="No Rangka">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label required">Nomor Mesin Kendaraan</label>
                                <div class="row row-sm">
                                    <div class="col">
                                        <input type="text" class="form-control" name="nomor_mesin" placeholder="No Mesin">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-center">Detail Keterangan Produk</label>
                            <textarea class="form-control" name="detail" data-toggle="autosize" placeholder="Tulis Sesuatu..."></textarea>
                        </div>
                    </div>
                    <div class="table-responsive">

                        <button type="submit" name="simpan" value="1" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <path d="M18 20h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9l5 5v9a2 2 0 0 1 -2 2"></path>
                                <circle cx="12" cy="13" r="2"></circle>
                                <polyline points="4 8 10 8 10 4"></polyline>
                            </svg>
                            Simpan
                        </button>
                        <button type="submit" name="simpan_tambah" value="1" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <path d="M7 12l5 5l10 -10"></path>
                                <path d="M2 12l5 5m5 -5l5 -5"></path>
                            </svg>
                            Simpan dan Tambah lainnya
                        </button>
                    </div>
                </div>
                </form>
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