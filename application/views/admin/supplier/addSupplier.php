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
                    <h2 class="page-title">Tambah Data Pemasok</h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ml-auto d-print-none">
                    <span class="d-none d-sm-inline">
                        <a href="<?= base_url('admin/pemasok/managesupplier') ?>" class="btn btn-white"> Rekap Pemasok </a>
                    </span>
                </div>
            </div>
        </div>
        <!-- Judul Halaman end -->

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="col-lg-3">
                        <label class="form-label">Nomor Data Pemasok</label>
                        <input type="text" class="form-control" name="example-disabled-input" placeholder="P. " value="" disabled>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <label class="form-label required">Nama Pemasok</label>
                            <div class="input-icon mb-3">
                                <input type="text" class="form-control" placeholder="Nama Toko/Orang">
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">No WhatsApp</label>
                                <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon icon-md" fill="currentColor">
                                            <path d="M17.498 14.382c-.301-.15-1.767-.867-2.04-.966-.273-.101-.473-.15-.673.15-.197.295-.771.964-.944 1.162-.175.195-.349.21-.646.075-.3-.15-1.263-.465-2.403-1.485-.888-.795-1.484-1.77-1.66-2.07-.174-.3-.019-.465.13-.615.136-.135.301-.345.451-.523.146-.181.194-.301.297-.496.1-.21.049-.375-.025-.524-.075-.15-.672-1.62-.922-2.206-.24-.584-.487-.51-.672-.51-.172-.015-.371-.015-.571-.015-.2 0-.523.074-.797.359-.273.3-1.045 1.02-1.045 2.475s1.07 2.865 1.219 3.075c.149.195 2.105 3.195 5.1 4.485.714.3 1.27.48 1.704.629.714.227 1.365.195 1.88.121.574-.091 1.767-.721 2.016-1.426.255-.705.255-1.29.18-1.425-.074-.135-.27-.21-.57-.345m-5.446 7.443h-.016c-1.77 0-3.524-.48-5.055-1.38l-.36-.214-3.75.975 1.005-3.645-.239-.375a9.869 9.869 0 0 1-1.516-5.26c0-5.445 4.455-9.885 9.942-9.885a9.865 9.865 0 0 1 7.021 2.91 9.788 9.788 0 0 1 2.909 6.99c-.004 5.444-4.46 9.885-9.935 9.885M20.52 3.449C18.24 1.245 15.24 0 12.045 0 5.463 0 .104 5.334.101 11.893c0 2.096.549 4.14 1.595 5.945L0 24l6.335-1.652a12.062 12.062 0 0 0 5.71 1.447h.006c6.585 0 11.946-5.336 11.949-11.896 0-3.176-1.24-6.165-3.495-8.411"></path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Nomor WA">
                                </div>
                                <label class="form-label">Email</label>
                                <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z"></path>
                                            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
                                            <polyline points="3 7 12 13 21 7"></polyline>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <label class="form-label">Instagram</label>
                                <div class="input-icon mb-3">
                                    <span class="input-icon-addon">
                                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon icon-md" fill="currentColor">
                                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913a5.885 5.885 0 0 0 1.384 2.126A5.868 5.868 0 0 0 4.14 23.37c.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558a5.898 5.898 0 0 0 2.126-1.384 5.86 5.86 0 0 0 1.384-2.126c.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913a5.89 5.89 0 0 0-1.384-2.126A5.847 5.847 0 0 0 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227a3.81 3.81 0 0 1-.899 1.382 3.744 3.744 0 0 1-1.38.896c-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421a3.716 3.716 0 0 1-1.379-.899 3.644 3.644 0 0 1-.9-1.38c-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 1 0 0-12.324zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405a1.441 1.441 0 0 1-2.88 0 1.44 1.44 0 0 1 2.88 0z"></path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="@akun_instagram">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Tokopedia</label>
                                    <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <line x1="3" y1="21" x2="21" y2="21"></line>
                                                <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                                                <path d="M5 21v-10.15"></path>
                                                <path d="M19 21v-10.15"></path>
                                                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Akun Tokopedia">
                                    </div>
                                    <label class="form-label">Shopee</label>
                                    <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <line x1="3" y1="21" x2="21" y2="21"></line>
                                                <path d="M3 7v1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1m0 1a3 3 0 0 0 6 0v-1h-18l2 -4h14l2 4"></path>
                                                <path d="M5 21v-10.15"></path>
                                                <path d="M19 21v-10.15"></path>
                                                <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Akun Shopee">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-2">
                                    <label class="form-label">Alamat</label>
                                    <input type="text" class="form-control" placeholder="Nama Jalan" value="">
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="mb-2">
                                    <label class="form-label">Kota</label>
                                    <div class="input-icon mb-3">
                                        <span class="input-icon-addon">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <polyline points="3 7 9 4 15 7 21 4 21 17 15 20 9 17 3 20 3 7"></polyline>
                                                <line x1="9" y1="4" x2="9" y2="17"></line>
                                                <line x1="15" y1="7" x2="15" y2="20"></line>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Asal Kota">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-2">
                                    <label class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" placeholder="Riau">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-2">
                                    <label class="form-label">Negara</label>
                                    <select class="form-select">
                                        <option value="">Indonesia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                    </form>
                    <form>
                        <div class="row">

                            <div class="mb-4">
                                <label class="form-label text-center">Detail Pemasok</label>
                                <textarea class="form-control" data-toggle="autosize" placeholder="Tulis Sesuatu..."></textarea>
                            </div>
                        </div>
                        <div class="table-responsive">

                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M18 20h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9l5 5v9a2 2 0 0 1 -2 2"></path>
                                    <circle cx="12" cy="13" r="2"></circle>
                                    <polyline points="4 8 10 8 10 4"></polyline>
                                </svg>
                                Simpan
                            </a>
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modal-info">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M7 12l5 5l10 -10"></path>
                                    <path d="M2 12l5 5m5 -5l5 -5"></path>
                                </svg>
                                Simpan dan Tambah lainnya
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- body home end -->

    <?php $this->load->view('admin/lib/footer'); ?>
    <?php $this->load->view('admin/lib/modal'); ?>
    <?php $this->load->view('admin/lib/libjs'); ?>

    </body>

    </html>