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
                    <h2 class="page-title">Pengaturan Toko</h2>
                </div>

            </div>
        </div>
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
                                    <th>Nama Toko</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Email</th>
                                    <th>Instagram</th>
                                    <th>Tokopedia</th>
                                    <th>Shopee</th>
                                    <th>Website</th>

                                    <th class="w-1"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lubneera.id</td>
                                    <td class="text-muted">
                                        Jl. Melati III- Arifin Ahmad. Pekanbaru. Riau. Indonesia
                                    </td>
                                    <td class="text-muted">
                                        0812 5678 1234
                                    </td>
                                    <td class="text-muted"><a href="#" class="text-reset">email@lubneera.id</a></td>
                                    <td class="text-muted">
                                        @lubneera.id
                                    </td>
                                    <td class="text-muted">
                                        -
                                    </td>
                                    <td class="text-muted">
                                        -
                                    </td>
                                    <td class="text-muted">
                                        www.lubneera.id
                                    </td>
                                    <td class="text-right">
                                        <span class="dropdown ml-1">
                                            <button class="btn btn-white btn-md dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-company">
                                                    Edit
                                                </a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <?php $this->load->view('admin/lib/footer'); ?>
    <?php $this->load->view('admin/lib/modal'); ?>
    <?php $this->load->view('admin/lib/libjs'); ?>

    </body>

    </html>