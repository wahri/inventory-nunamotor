<?php $this->load->view('admin/lib/header'); ?>
<?php $this->load->view('admin/lib/topbar'); ?>
<?php $this->load->view('admin/lib/menubar'); ?>

<!-- body home start -->
<div class="content">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col-auto">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">Overview</div>
                    <h2 class="page-title">Dashboard</h2>
                </div>
            </div>
        </div>
        <form action="" method="get">
            <div class="row row-deck row-cards">
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="h4">Stok Unit Mobil</div>
                                    <!-- <div class="ml-auto lh-1">
                                        <div class="dropdown">
                                            <select class="form-select" name="stok">
                                                <option value="1">Last 7 days</option>
                                                <option value="2">Last 30 days</option>
                                                <option value="3">Last 3 months</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-2 text-center">
                                    <h1 class="h1">
                                        <i class="fas fa-car"></i>
                                    </h1>
                                </div>
                                <div class="col-10">
                                    <div class="h1"><?= $unit ?> <span class="h2">Mobil</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="d-flex align-items-center">
                                    <div class="h4">Total Unit Terjual</div>
                                    <!-- <div class="ml-auto lh-1">
                                        <div class="dropdown">
                                            <select class="form-select" name="terjual">
                                                <option value="1">Last 7 days</option>
                                                <option value="2">Last 30 days</option>
                                                <option value="3">Last 3 months</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-2 text-center">
                                    <h1 class="h1">
                                        <i class="fas fa-dolly"></i>
                                    </h1>
                                </div>
                                <div class="col-10">
                                    <div class="h1"><?= $unit_keluar + $unit_deal ?> <span class="h2">Mobil</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- body home end -->

    <?php $this->load->view('admin/lib/footer'); ?>

    <!-- Modal Input Penjualan start -->
    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Input data baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Tanggal input data</label>
                                <input id="datapicker" type="text" value="<?php $tgl = date('d-m-Y');
                                                                            echo $tgl;
                                                                            ?>" class="form-control mb-2" placeholder="Select a date" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">

                            <div class="mb-3">
                                <label class="form-label">Merk Mobil</label>
                                <input class="form-control" list="datalistOptions" placeholder="Type to search..." />
                                <datalist id="datalistOptions">
                                    <option value="Toyota" />
                                    <option value="Hyundai" />
                                    <option value="Daihatsu" />
                                    <option value="Honda" />
                                    <option value="Mitsubishi" />
                                    <option value="Suzuki" />
                                    <option value="Nisan" />
                                    <option value="Wuling" />
                                    <option value="Datsun" />
                                    <option value="Mazda" />
                                    <option value="DFSK" />
                                    <option value="Mercedes Benz" />
                                    <option value="Renault" />
                                    <option value="Isuzu" />
                                    <option value="Chevrolet" />
                                    <option value="Kia" />
                                    <option value="Lexus" />
                                    <option value="Mini" />
                                    <option value="BMW" />
                                    <option value="Volkswagen" />
                                    <option value="Peugeot" />
                                    <option value="Jeep" />
                                    <option value="Audi" />
                                    <option value="Ford" />
                                    <option value="Tata" />
                                    <option value="Fuso" />
                                </datalist>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Type</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="Cth. Agya 1,2 G" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- <div class="mb-3">
                                <label class="form-label">Tanggal input data</label>
                                <input id="datapicker" type="text" value="<?php $tgl = date('d-m-Y');
                                                                            echo $tgl;
                                                                            ?>" class="form-control mb-2" placeholder="Select a date" />
                            </div> -->
                        </div>
                    </div>
                    <label class="form-label">Jenis Transmisi</label>
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked />
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="mr-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Manual</span>
                                        <span class="d-block text-muted"></span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" />
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="mr-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Automatic</span>
                                        <span class="d-block text-muted"></span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" />
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="mr-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Hybrid</span>
                                        <span class="d-block text-muted"></span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Warna</label>
                                <input type="text" class="form-control" placeholder="Cth. Abu-abu metalik" />
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Tahun Rakitan</label>
                                <select class="form-select">
                                    <option value="1" selected>2021</option>
                                    <option value="2">2020</option>
                                    <option value="3">2019</option>
                                    <option value="4">2018</option>
                                    <option value="5">2017</option>
                                    <option value="6">2016</option>
                                    <option value="7">2015</option>
                                    <option value="8">2014</option>
                                    <option value="9">2013</option>
                                    <option value="10">2012</option>
                                    <option value="11">2011</option>
                                    <option value="12">2010</option>
                                    <option value="13">2009</option>
                                    <option value="14">2008</option>
                                    <option value="15">2007</option>
                                    <option value="16">2006</option>
                                    <option value="17">2005</option>
                                    <option value="18">2004</option>
                                    <option value="19">2003</option>
                                    <option value="20">2002</option>
                                    <option value="21">2001</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <div class="input-icon mb-3">
                                    <input type="text" class="form-control" placeholder="Nama pemilik pada BPKB" />
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Nomor Polisi</label>
                                <input type="text" class="form-control" placeholder="Nomor TNKB" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nomor Rangka</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nomor Mesin</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
                        Cancel
                    </a>
                    <a href="#" class="btn btn-primary ml-auto" data-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Create new data
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Input Penjualan End -->

    <?php $this->load->view('admin/lib/libjs'); ?>

    </body>

    </html>