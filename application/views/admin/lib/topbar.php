<body class="antialiased">
    <div class="page">
        <header class="navbar navbar-expand-md navbar-light">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="#" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                    <!-- <img src="#" alt=" Nuna Motor Pekanbaru" class="navbar-brand-image" /> -->
                    Nuna Motor Pekanbaru
                </a>
                <div class="navbar-nav flex-row order-md-last">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
                            <!-- <span class="avatar" style="background-image: url(./static/avatars/000m.jpg);"></span> -->
                            <div class="d-none d-xl-block pl-2">
                                <div><?= $user_login['username'] ?></div>
                                <div class="mt-1 small text-muted">Admin</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <path d="M2 21v-2a4 4 0 0 1 4 -4h5a4 4 0 0 1 4 4v2"></path>
                                    <path d="M16 11l2 2l4 -4"></path>icon dropdown-item-icon
                                </svg>
                                Profil Pengguna
                            </a>
                            <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M9 12l2 2l4 -4"></path>
                                    <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3"></path>
                                </svg>
                                Ganti Password
                            </a>
                            <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="<?= base_url('login/logout') ?>">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <path d="M7 6a7.75 7.75 0 1 0 10 0"></path>
                                    <line x1="12" y1="4" x2="12" y2="12"></line>
                                </svg>
                                Sign Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>