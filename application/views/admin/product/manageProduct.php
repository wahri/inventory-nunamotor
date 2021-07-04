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
                    <h2 class="page-title">Data Kendaraan</h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <a href="<?= base_url('admin/addproduct') ?>" class="btn btn-primary ml-3 d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Tambah Kendaraan
                    </a>
                </div>


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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Kendaraan Tersedia</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Merk</th>
                                    <th>Tipe</th>
                                    <th>Transmisi</th>
                                    <th>Warna</th>
                                    <th>TH Rakit</th>
                                    <th>Modal</th>
                                    <th>Harga Jual</th>
                                    <th>Modal</th>

                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($produk as $d) : ?>
                                    <tr>
                                        <td class="text-muted">
                                            <a href="<?= base_url('admin/unit/detail/') . $d['id_kendaraan'] ?>"> <?= $d['id_kendaraan'] ?></a>
                                        </td>
                                        <td><?= $d['merk_mobil'] ?></td>
                                        <td class="text-muted">
                                            <?= $d['type_mobil'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $d['jenis_transmisi'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $d['warna'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $d['tahun_rakitan'] ?>
                                        </td>
                                        <td class="text-muted">
                                            Rp. <?= number_format($d['modal'], 2, ',', '.') ?>
                                        </td>
                                        <td class="text-muted">
                                            Rp. <?= number_format($d['harga_jual'], 2, ',', '.') ?>
                                        </td>
                                        <td class="text-muted">
                                            <a href="<?= base_url('admin/purchase/addpurchase/') . $d['id_kendaraan'] ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18"></path>
                                                    <line x1="13" y1="8" x2="15" y2="8"></line>
                                                    <line x1="13" y1="12" x2="15" y2="12"></line>
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="text-right">
                                            <span class="dropdown ml-1">
                                                <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-primary" href="#" data-toggle="modal" data-target="#modal-terjual<?= $d['id_produk'] ?>">
                                                        Terjual
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-product<?= $d['id_produk'] ?>">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-hapus<?= $d['id_produk'] ?>">
                                                        Hapus
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-harga-jual-<?= $d['id_produk'] ?>">
                                                        Tetapkan harga jual
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <!-- Modal Hapus Start -->
                                    <div class="modal modal-blur fade" id="modal-hapus<?= $d['id_produk'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="modal-title">Kamu yakin?</div>
                                                    <div>Jika kamu lanjutkan, kamu akan kehilanggan seluruh data ini.</div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                                                    <a href="<?= base_url('admin/addproduct/hapusproduct/') . $d['id_kendaraan'] ?>" class="btn btn-danger">Ya, Hapus semua data ini</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus End -->
                                    <div class="modal modal-blur fade" id="modal-harga-jual-<?= $d['id_produk'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tetapkan Harga Jual</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <line x1="18" y1="6" x2="6" y2="18" />
                                                            <line x1="6" y1="6" x2="18" y2="18" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form action="" method="POST">
                                                    <div class="modal-body">
                                                        <label class="form-label">Harga Jual</label>
                                                        <div class="input-group mb-2">
                                                            <span class="input-group-text">
                                                                Rp.
                                                            </span>
                                                            <input type="number" class="form-control" id="harga" required name="harga_jual" value="<?= $d['harga_jual'] ?>" placeholder="0">
                                                        </div>
                                                        <input type="hidden" value="<?= $d['id_kendaraan'] ?>" name="id_kendaraan">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white mr-auto" data-dismiss="modal">Tutup</button>
                                                        <button type="submit" name="tetapkan_harga" value="1" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Terjual Start -->
                                    <div class="modal modal-blur fade" id="modal-terjual<?= $d['id_produk'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <form action="" method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="modal-title">Kendaraan ini telah terjual?</div>
                                                        <div class="mb-3">Jika kamu lanjutkan, data kendaraan ini tidak akan tampil di data kendaraan tersedia</div>
                                                        <div class="form-label">Pilih sales penjualan</div>
                                                        <select class="form-select" name="id_sales_penjual">
                                                            <option value="0">Owner</option>
                                                            <?php foreach ($sales as $s) : ?>
                                                                <option value="<?= $s['id_sales'] ?>"><?= $s['nama_depan'] . ' ' . $s['nama_belakang']  ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <input type="hidden" value="<?= $d['id_kendaraan'] ?>" name="id_kendaraan">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                                                        <button type="submit" name="terjual" value="1" class="btn btn-success">Ya, Alhamdulillah Terjual!</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>



                                    <!-- Modal Edit Product Start -->
                                    <div class="modal modal-blur fade" id="modal-product<?= $d['id_produk'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Data Produk</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <line x1="18" y1="6" x2="6" y2="18" />
                                                            <line x1="6" y1="6" x2="18" y2="18" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <div class="col-lg-3">
                                                                            <label class="form-label">ID Kendaraan</label>
                                                                            <input type="text" class="form-control" name="id_kendaraan" placeholder="nm. " value="<?= $d['id_kendaraan'] ?>" readonly>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label">Tanggal Input Data</label>
                                                                                    <div class="col">
                                                                                        <input id="datapicker" name="tanggal_input" type="text" value="<?= $d['tanggal_input'] ?>" class="form-control mb-2" placeholder="Select a date" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label required">Merk Mobil</label>
                                                                                    <div class="col">
                                                                                        <input type="text" class="form-control" name="merk_mobil" value="<?= $d['merk_mobil'] ?>" placeholder="Pilih Merk" class="form-control" list="datalistOptions" value="<?= set_value('merk_mobil') ?>">
                                                                                        <datalist id="datalistOptions">
                                                                                            <?php foreach ($merk as $m) : ?>
                                                                                                <option value="<?= $m['nama_merk'] ?>" <?= $m['nama_merk'] == $d['merk_mobil'] ? 'selected' : '' ?> />
                                                                                            <?php endforeach; ?>
                                                                                        </datalist>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label required">Type</label>
                                                                                    <div class="col">
                                                                                        <input type="text" class="form-control" name="type_mobil" value="<?= $d['type_mobil'] ?>" placeholder="Cth. Agya 1,2 G">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label required">Jenis Transmisi</label>
                                                                                    <div class="col">
                                                                                        <select class="form-select" name="jenis_transmisi">
                                                                                            <option value="Manual" <?= $d['jenis_transmisi'] == 'Manual' ? 'selected' : '' ?>>Manual</option>
                                                                                            <option value="Automatic" <?= $d['jenis_transmisi'] == 'Automatic' ? 'selected' : '' ?>>Automatic</option>
                                                                                            <option value="Triptonic" <?= $d['jenis_transmisi'] == 'Triptonic' ? 'selected' : '' ?>>Triptonic</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label required">Bahan Bakar</label>
                                                                                    <div class="col">
                                                                                        <select class="form-select" name="bahan_bakar">
                                                                                            <option value="Bensin" <?= $d['bahan_bakar'] == 'Bensin' ? 'selected' : '' ?>>Bensin</option>
                                                                                            <option value="Solar" <?= $d['bahan_bakar'] == 'Solar' ? 'selected' : '' ?>>Solar</option>
                                                                                            <option value="Listrik" <?= $d['bahan_bakar'] == 'Listrik' ? 'selected' : '' ?>>Listrik</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label required">Warna</label>
                                                                                    <div class="col">
                                                                                        <input type="text" class="form-control" name="warna" value="<?= $d['warna'] ?>" placeholder="Warna Mobil">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label required">Tahun Rakitan</label>
                                                                                    <div class="col">
                                                                                        <input type="text" class="form-control" name="tahun_rakitan" value="<?= $d['tahun_rakitan'] ?>" placeholder="Tahun Rakitan" class="form-control" list="tahun_rakit">
                                                                                        <datalist id="tahun_rakit">
                                                                                            <?php for ($i = 1945; $i <= date('Y'); $i++) : ?>
                                                                                                <option value="<?= $i ?>" <?= $d['tahun_rakitan'] == date('Y') ? 'selected' : '' ?>><?= $i ?></option>
                                                                                            <?php endfor; ?>
                                                                                        </datalist>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label required">No TNKB</label>
                                                                                    <div class="col">
                                                                                        <input type="text" class="form-control mb-2" name="tnkb" value="<?= $d['tnkb'] ?>" placeholder="No. TNKB" />
                                                                                    </div>
                                                                                </div>
                                                                                <!-- <div class="form-group mb-2 row">
                                                                                    <label class="form-label col-3 col-form-label">Gambar</label>
                                                                                    <div class="form-file col">
                                                                                        <input type="file" name="gambar" class="form-file-input" id="gambar">
                                                                                        <label class="form-file-label" for="customFile">
                                                                                            <span class="form-file-text" id="namaGambar">Pilih gambar...</span>
                                                                                            <span class="form-file-button">Browse</span>
                                                                                        </label>
                                                                                    </div>
                                                                                </div> -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="dropdown-divider"></div>
                                                                        <div class="row">
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label required">Nama Pemilik Terdaftar</label>
                                                                                    <div class="row row-sm">
                                                                                        <div class="col">
                                                                                            <input type="text" class="form-control" value="<?= $d['nama_pemilik'] ?>" name="nama_pemilik" placeholder="Nama Pemilik terdaftar">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label required">Nomor Rangka Kendaraan</label>
                                                                                    <div class="row row-sm">
                                                                                        <div class="col">
                                                                                            <input type="text" class="form-control" value="<?= $d['nomor_rangka'] ?>" name="nomor_rangka" placeholder="No Rangka">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-lg-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label required">Nomor Mesin Kendaraan</label>
                                                                                    <div class="row row-sm">
                                                                                        <div class="col">
                                                                                            <input type="text" class="form-control" value="<?= $d['nomor_mesin'] ?>" name="nomor_mesin" placeholder="No Mesin">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="mb-4">
                                                                                <label class="form-label text-center">Detail Keterangan Produk</label>
                                                                                <textarea class="form-control" name="detail" data-toggle="autosize" placeholder="Tulis Sesuatu..."><?= $d['detail'] ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" value="1" name="edit_product" class="btn btn-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                                <path d="M18 20h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9l5 5v9a2 2 0 0 1 -2 2"></path>
                                                                <circle cx="12" cy="13" r="2"></circle>
                                                                <polyline points="4 8 10 8 10 4"></polyline>
                                                            </svg>
                                                            Simpan
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit Product End -->
                                    <!-- Modal Terjual End -->
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>



    <?php $this->load->view('admin/lib/footer'); ?>
    <?php $this->load->view('admin/lib/libjs'); ?>

    </body>

    </html>