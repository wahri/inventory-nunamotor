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
                    <h2 class="page-title">Data Penjualan Unit</h2>
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
                    <h3 class="card-title">Daftar Kesepakatan Penjualan</h3>
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
                                    <th>Jual</th>

                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($produk_deal as $pd) : ?>
                                    <tr>
                                        <td class="text-muted">
                                            <a href="<?= base_url('admin/unit/detail/') . $pd['id_kendaraan'] ?>"> <?= $pd['id_kendaraan'] ?></a>
                                        </td>
                                        <td><?= $pd['merk_mobil'] ?></td>
                                        <td class="text-muted">
                                            <?= $pd['type_mobil'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $pd['jenis_transmisi'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $pd['warna'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $pd['tahun_rakitan'] ?>
                                        </td>
                                        <td class="text-muted">
                                            Rp. <?= number_format($pd['modal'], 2, ',', '.') ?>
                                        </td>
                                        <td class="text-muted">
                                            Rp. <?= number_format($pd['harga_jual'], 2, ',', '.') ?>
                                        </td>
                                        <td class="text-muted">
                                            <a href="<?= base_url('admin/purchase/addpenjualan/') . $pd['id_kendaraan'] ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                                    <circle cx="7" cy="17" r="2"></circle>
                                                    <circle cx="17" cy="17" r="2"></circle>
                                                    <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5"></path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="text-right">
                                            <span class="dropdown ml-1">
                                                <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item text-danger" href="#" data-toggle="modal" data-target="#modal-hapuss<?= $pd['id_produk'] ?>">
                                                        Batalkan penjualan
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-product">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-hapus">
                                                        Hapus
                                                    </a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-harga-jual-<?= $pd['id_produk'] ?>">
                                                        Tetapkan harga jual
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>

                                    <div class="modal modal-blur fade" id="modal-harga-jual-<?= $pd['id_produk'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                            <input type="number" class="form-control" id="harga" required name="harga_jual" value="<?= $pd['harga_jual'] ?>" placeholder="0">
                                                        </div>
                                                        <input type="hidden" value="<?= $pd['id_kendaraan'] ?>" name="id_kendaraan">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white mr-auto" data-dismiss="modal">Tutup</button>
                                                        <button type="submit" name="tetapkan_harga" value="1" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Hapus Start -->
                                    <div class="modal modal-blur fade" id="modal-hapuss<?= $pd['id_produk'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                            <form action="" method="POST">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="modal-title">Kamu yakin?</div>
                                                        <div>Jika kamu lanjutkan, unit ini akan kembali pada stok penjualan.</div>
                                                        <input type="hidden" name="id_kendaraan" value="<?= $pd['id_kendaraan'] ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                                                        <button type="submit" name="batalkan_penjualan" value="1" class="btn btn-danger">Ya, Batalkan penjualan</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Modal Hapus End -->

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Unit Terjual</h3>
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