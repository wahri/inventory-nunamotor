<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item <?= $nav_active == 'home' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('admin/home') ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title"> Home </span>
                        </a>
                    </li>


                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <path d="M12 17.75l-6.172 3.245 1.179-6.873-4.993-4.867 6.9-1.002L12 2l3.086 6.253 6.9 1.002-4.993 4.867 1.179 6.873z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Penjualan
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/addsale') ?>">
                                    Tambah Penjualan
                                </a>

                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/manageSale') ?>">
                                    Rekapitulasi Penjualan
                                </a>
                            </li>

                        </ul>
                    </li> -->

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <circle cx="9" cy="19" r="2"></circle>
                                    <circle cx="17" cy="19" r="2"></circle>
                                    <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Pembelian
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/purchase/addPurchase') ?>">
                                    Tambah Pembelian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./blog.html">
                                    Rekapitulasi Pembelian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./blog.html">
                                    Pengeluaran Lain
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item dropdown  <?= $nav_active == 'stok' ? 'active' : '' ?>">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <rect x="4" y="4" width="6" height="5" rx="2" />
                                    <rect x="4" y="13" width="6" height="7" rx="2" />
                                    <rect x="14" y="4" width="6" height="7" rx="2" />
                                    <rect x="14" y="15" width="6" height="5" rx="2" />
                                </svg>
                            </span>
                            <span class="nav-link-title"> Stok Unit</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/addproduct/manageproduct') ?>">
                                    Daftar Unit Tersedia
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/addproduct') ?>">
                                    Tambah Unit
                                </a>
                            </li>

                            <!-- <div class="dropdown-divider"></div>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/category') ?>">
                                    Kelola Merek
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/unit') ?>">
                                    Satuan
                                </a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="nav-item  <?= $nav_active == 'terjual' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('admin/addproduct/produkterjual') ?>">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <circle cx="7" cy="17" r="2"></circle>
                                    <circle cx="17" cy="17" r="2"></circle>
                                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title"> Unit Terjual </span>
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <polyline points="14 3 14 8 19 8" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <line x1="9" y1="9" x2="10" y2="9" />
                                    <line x1="9" y1="13" x2="15" y2="13" />
                                    <line x1="9" y1="17" x2="15" y2="17" />
                                </svg>
                            </span>
                            <span class="nav-link-title"> Laporan </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="./layout-vertical.html">
                                    Laporan Stok
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./layout-horizontal.html">
                                    Laporan Penjualan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./layout-vertical.html">
                                    Laporan Pembelian
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./layout-vertical.html">
                                    Laporan Pengeluaran lain
                                </a>
                            </li>
                        </ul>
                    </li> -->
                    <li class="nav-item dropdown  <?= $nav_active == 'pengaturan' ? 'active' : '' ?>">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-md" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <rect x="4" y="6" width="4" height="5" rx="1"></rect>
                                    <line x1="6" y1="4" x2="6" y2="6"></line>
                                    <line x1="6" y1="11" x2="6" y2="20"></line>
                                    <rect x="10" y="14" width="4" height="5" rx="1"></rect>
                                    <line x1="12" y1="4" x2="12" y2="14"></line>
                                    <line x1="12" y1="19" x2="12" y2="20"></line>
                                    <rect x="16" y="5" width="4" height="6" rx="1"></rect>
                                    <line x1="18" y1="4" x2="18" y2="5"></line>
                                    <line x1="18" y1="11" x2="18" y2="20"></line>
                                </svg>
                            </span>
                            <span class="nav-link-title"> Pengaturan </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- <li>
                                <a class="dropdown-item" href="<?= base_url('admin/pengaturan/addsales') ?>">
                                    Tambah Data Sales
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/pengaturan/managesales') ?>">
                                    Kelola Data Sales
                                </a>
                            </li>
                            <div class="dropdown-divider"></div> -->
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/pengaturan/adduser') ?>">
                                    Tambah Pengguna
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/pengaturan/manageUser') ?>">
                                    Kelola Data Pengguna
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/category') ?>">
                                    Kelola Merek
                                </a>
                            </li>
                            <!-- <div class="dropdown-divider"></div>
                            <li>
                                <a class="dropdown-item" href="<?= base_url('admin/pengaturan/manageCompany') ?>">
                                    Pengaturan Toko
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="./layout-horizontal.html">
                                    Pengaturan Aplikasi
                                </a>
                            </li> -->
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>