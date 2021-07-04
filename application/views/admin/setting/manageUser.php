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
                    <h2 class="page-title">Kelola Data Pengguna</h2>
                </div>
                <div class="col-auto ml-auto d-print-none">
                    <a href="<?= base_url('admin/pengaturan/adduser') ?>" class="btn btn-primary ml-3 d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"></path>
                            <circle cx="8.5" cy="7" r="4"></circle>
                            <path d="M2 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path>
                            <line x1="16" y1="11" x2="22" y2="11"></line>
                            <line x1="19" y1="8" x2="19" y2="14"></line>
                        </svg>
                        Tambah Pengguna
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
                    <h3 class="card-title">Pengaturan </h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Nama Lengkap</th>
                                    <th>No Telepon</th>
                                    <th>Tipe Pengguna</th>
                                    <!-- <th>Status</th> -->

                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($admin as $d) : ?>
                                    <tr>
                                        <td><?= $d['username'] ?></td>
                                        <td class="text-muted">
                                            <?= $d['nama_depan'] . ' ' . $d['nama_belakang'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $d['hp'] ?>
                                        </td>
                                        <td class="text-muted">
                                            Administrator
                                        </td>

                                        <!-- <td class="text-muted">
                                        <label class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" checked />
                                            <span class="form-check-label">Active</span>
                                        </label>
                                    </td> -->
                                        <td class="text-right">
                                            <span class="dropdown ml-1">
                                                <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-user-admin-<?= $d['id_admin'] ?>">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item hapus" href="#" data-toggle="modal" data-target="#modal-hapus" data-level="admin" data-id="<?= $d['id_admin'] ?>">
                                                        Hapus
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <div class="modal modal-blur fade" id="edit-user-admin-<?= $d['id_admin'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Pengguna</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <line x1="18" y1="6" x2="6" y2="18" />
                                                            <line x1="6" y1="6" x2="18" y2="18" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/pengaturan/edituser/admin/') . $d['id_admin'] ?>" method="POST">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label required">Nama Depan</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="nama_depan" value="<?= $d['nama_depan'] ?>" placeholder="" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Nama Belakang</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="nama_belakang" value="<?= $d['nama_belakang'] ?>" placeholder="" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">No Telpon</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="hp" value="<?= $d['hp'] ?>" placeholder="" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label required">Username</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="username" value="<?= $d['username'] ?>" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Password</label>
                                                            <div>
                                                                <input type="password" name="password" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white mr-auto" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary" name="save" value="1">Save changes</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php foreach ($sales as $d) : ?>
                                    <tr>
                                        <td><?= $d['username'] ?></td>
                                        <td class="text-muted">
                                            <?= $d['nama_depan'] . ' ' . $d['nama_belakang'] ?>
                                        </td>
                                        <td class="text-muted">
                                            <?= $d['hp'] ?>
                                        </td>
                                        <td class="text-muted">
                                            Sales
                                        </td>

                                        <!-- <td class="text-muted">
                                        <label class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" checked />
                                            <span class="form-check-label">Active</span>
                                        </label>
                                    </td> -->
                                        <td class="text-right">
                                            <span class="dropdown ml-1">
                                                <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-user-sales-<?= $d['id_sales'] ?>">
                                                        Edit
                                                    </a>
                                                    <a class="dropdown-item hapus" href="#" data-toggle="modal" data-target="#modal-hapus" data-level="sales" data-id="<?= $d['id_sales'] ?>">
                                                        Hapus
                                                    </a>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                    <div class="modal modal-blur fade" id="edit-user-sales-<?= $d['id_sales'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Pengguna</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" />
                                                            <line x1="18" y1="6" x2="6" y2="18" />
                                                            <line x1="6" y1="6" x2="18" y2="18" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/pengaturan/edituser/sales/') . $d['id_sales'] ?>" method="POST">
                                                        <div class="form-group mb-3">
                                                            <label class="form-label required">Nama Depan</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="nama_depan" value="<?= $d['nama_depan'] ?>" placeholder="" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Nama Belakang</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="nama_belakang" value="<?= $d['nama_belakang'] ?>" placeholder="" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">No Telpon</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="hp" value="<?= $d['hp'] ?>" placeholder="" />

                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label required">Username</label>
                                                            <div>
                                                                <input type="text" class="form-control" name="username" value="<?= $d['username'] ?>" placeholder="" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">Password</label>
                                                            <div>
                                                                <input type="password" name="password" class="form-control" placeholder="" />
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white mr-auto" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="save" value="1" class="btn btn-primary">Save changes</button>
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


    <!-- Modal Hapus Start -->
    <div class="modal modal-blur fade" id="modal-hapus" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Kamu yakin?</div>
                    <div>Jika kamu lanjutkan, kamu akan kehilanggan seluruh data ini.</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Batal</button>
                    <a href="" class="btn btn-danger" id="linkHapus">Ya, Hapus semua data ini</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Hapus End -->

    <?php $this->load->view('admin/lib/footer'); ?>
    <?php $this->load->view('admin/lib/libjs'); ?>


    <script>
        $('.hapus').click(function() {
            //get cover id
            var id = $(this).data('id');
            var level = $(this).data('level');
            //set href for cancel button
            $('#linkHapus').attr('href', '<?= base_url('admin/pengaturan/hapususer/') ?>' + level + '/' + id);
        })
    </script>
    </body>

    </html>