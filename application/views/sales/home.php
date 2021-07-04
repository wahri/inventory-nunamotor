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
                                    <th>Harga Jual</th>
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
                                            Rp. <?= number_format($d['harga_jual'], 2, ',', '.') ?>
                                        </td>
                                    </tr>
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