<section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Utama</li>
        <?php $uri = $this->uri->segment('2') ?>
        <li <?= ($uri == 'dashboard' ? 'class="active"' : '') ?>>
            <a href="<?php echo base_url() . 'admin/dashboard' ?>">
                <i class="fa fa-home"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                    <small class="label pull-right"></small>
                </span>
            </a>
        </li>

        <!--modul Toko -->
        <?php if ($this->session->userdata('level') == 1) : ?>
            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp2"><a><i class="right fa fa-angle-left"></i> <span>Modul Toko</span></a>
                <ul id="testsp2" class="panel-collapse collapse">
                    <li class="sm" <?= ($uri == 'kategori' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/kategori' ?>">
                            <i class="fa fa-clone"></i> <span>Kategori</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li class="sm" <?= ($uri == 'subkategori' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/subkategori' ?>">
                            <i class="fa fa-clone"></i> <span>Sub kategori</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li class="sm" <?= ($uri == 'produk' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/produk' ?>">
                            <i class="fa fa-product-hunt"></i> <span>Kelas</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="sm" <?= ($uri == 'varian' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/varian' ?>">
                            <i class="fa fa-clone"></i> <span>Varian Produk</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <!--modul blog -->
        <?php if ($this->session->userdata('level') == 1) : ?>
            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp3"><a><i class="right fa fa-angle-left"></i> <span>Modul Blog</span></a>
                <ul id="testsp3" class="panel-collapse collapse">
                    <li class="sm" <?= ($uri == 'blog' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/blog' ?>">
                            <i class="fa fa-pencil"></i> <span>Blog</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="sm" <?= ($uri == 'galeri' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/galeri' ?>">
                            <i class="fa fa-picture-o"></i> <span>Galeri</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>

        <!--modul pengguna -->
        <?php if ($this->session->userdata('level') == 1) : ?>
            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp4"><a><i class="right fa fa-angle-left"></i> <span>Modul Pengguna</span></a>
                <ul id="testsp4" class="panel-collapse collapse">

                    <li class="sm" <?= ($uri == 'Riwayat_transaksi' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/Riwayat_transaksi' ?>">
                            <i class="fa fa-expand"></i> <span>Riwayat Transaksi</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>

                    <li class="sm" <?= ($uri == 'pengguna' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/pengguna' ?>">
                            <i class="fa fa-user"></i> <span>Pengguna</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="sm" <?= ($uri == 'rekan' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/rekan' ?>">
                            <i class="fa fa-expand"></i> <span>Partner</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="sm" <?= ($uri == 'testimoni' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/testimoni' ?>">
                            <i class="fa fa-commenting"></i> <span>Testimoni</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php else :  ?>
            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp4"><a><i class="right fa fa-angle-left"></i> <span>Modul Pengguna</span></a>
                <ul id="testsp4" class="panel-collapse collapse">

                    <li class="sm" <?= ($uri == 'Ubah_profil' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/Ubah_profil' ?>">
                            <i class="fa fa-user"></i> <span>Ubah Profil</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="sm" <?= ($uri == 'Ubah_alamat' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/Ubah_alamat' ?>">
                            <i class="fa fa-user"></i> <span>Ubah Alamat</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="sm" <?= ($uri == 'Riwayat_transaksi' ? 'class="active"' : '') ?>>
                        <a href="<?php echo base_url() . 'admin/Riwayat_transaksi' ?>">
                            <i class="fa fa-expand"></i> <span>Riwayat Transaksi</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
        <?php endif; ?>


        <li class="sm panel-title">
            <a href="<?php echo base_url() . 'administrator/logout' ?>">
                <i class=" fa-right-from-bracket"></i> <span>Sign out</span>
                <span class="pull-right-container">
                    <small class="label pull-right"></small>
                </span>
            </a>
        </li>





        <!-- <li <?= ($uri == 'blog' ? 'class="active"' : '') ?>>
            <a href="<?php echo base_url() . 'admin/blog' ?>">
                <i class="fa fa-pencil"></i> <span>Blog</span>
                <span class="pull-right-container">
                    <small class="label pull-right"></small>
                </span>
            </a>
        </li>
        <li <?= ($uri == 'galeri' ? 'class="active"' : '') ?>>
            <a href="<?php echo base_url() . 'admin/galeri' ?>">
                <i class="fa fa-picture-o"></i> <span>Galeri</span>
                <span class="pull-right-container">
                    <small class="label pull-right"></small>
                </span>
            </a>
        </li> -->

        <!-- <?php if ($this->session->userdata('level') == 1) : ?>

            <li <?= ($uri == 'kategori' ? 'class="active"' : '') ?>>
                <a href="<?php echo base_url() . 'admin/kategori' ?>">
                    <i class="fa fa-clone"></i> <span>Kategori</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>

            <li <?= ($uri == 'produk' ? 'class="active"' : '') ?>>
                <a href="<?php echo base_url() . 'admin/produk' ?>">
                    <i class="fa fa-product-hunt"></i> <span>Produk</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li <?= ($uri == 'varian' ? 'class="active"' : '') ?>>
                <a href="<?php echo base_url() . 'admin/varian' ?>">
                    <i class="fa fa-clone"></i> <span>Varian</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li <?= ($uri == 'pengguna' ? 'class="active"' : '') ?>>
                <a href="<?php echo base_url() . 'admin/pengguna' ?>">
                    <i class="fa fa-user"></i> <span>Pengguna</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>

            <li <?= ($uri == 'rekan' ? 'class="active"' : '') ?>>
                <a href="<?php echo base_url() . 'admin/rekan' ?>">
                    <i class="fa fa-expand"></i> <span>Partner</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li <?= ($uri == 'testimoni' ? 'class="active"' : '') ?>>
                <a href="<?php echo base_url() . 'admin/testimoni' ?>">
                    <i class="fa fa-commenting"></i> <span>Testimoni</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>

        <?php endif; ?> -->

    </ul>
</section>