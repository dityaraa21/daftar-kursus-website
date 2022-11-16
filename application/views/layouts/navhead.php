<body>
    <nav style="background:#41506F" class="text-white">
        <div class="container d-flex align-items-center gap-4" style="height:60px">
            <div id="navLogo" class="flex-grow-1">
                Universitas <b>Jewepe</b>
            </div>
            <!-- Session Login -->
            <div class="d-flex gap-4 align-items-center">
                <a href="<?= base_url('home') ?>" class="">Home</a>
                <?php if ($this->session->userdata('role_id') != '2') { ?>
                    <div id="navigation" class="d-flex gap-2 align-items-center">
                        <a href="<?= base_url('registrasi') ?>" class="btn btn-outline-light">Register</a>
                        <a href="<?= base_url('auth/login') ?>" class="btn btn-outline-light">Login</a>
                    </div>
                <?php } else { ?>
                    <a href="<?= base_url('daftarkursus') ?>" class="">Daftar Kursus</a>
                    <a href="<?= base_url('statuskursus') ?>" class="">Status Pendaftaran</a>
                    <a href="<?= base_url('auth/logout') ?>" class="btn btn-outline-light">Logout</a>
                <?php } ?>
            </div>
        </div>
    </nav>
    <style>
        nav a {
            color: white;
            text-decoration: none;
        }
        a:hover {color: #446EC9;}
    </style>