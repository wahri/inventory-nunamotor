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
                    <h2 class="page-title">Data Kendaraan</h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <a href="<?= base_url('sales/addproduct') ?>" class="btn btn-primary ml-3 d-none d-sm-inline-block">
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
                                            <a href="<?= base_url('sales/unit/detail/') . $d['id_kendaraan'] ?>"> <?= $d['id_kendaraan'] ?></a>
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
                                            <a href="<?= base_url('sales/purchase/addpurchase/') . $d['id_kendaraan'] ?>">
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
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-product">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-hapus">
                                                        Hapus
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-harga-jual-<?= $d['id_produk'] ?>">
                                                        Tetapkan harga jual
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>

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
                                    <!-- Modal Terjual End -->
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>



    <?php $this->load->view('sales/lib/footer'); ?>
    <?php $this->load->view('sales/lib/libjs'); ?>

    </body>

    </html>