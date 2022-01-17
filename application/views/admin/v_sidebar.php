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
        <li <?= ($uri == 'blog' ? 'class="active"' : '') ?>>
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
        </li>

        <?php if ($this->session->userdata('level') == 1) : ?>

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
                    <i class="fa fa-product-hunt"></i> <span>Kelas</span>
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
            <li <?= ($uri == 'pengguna' ? 'class="active"' : '') ?>>
                <a href="<?php echo base_url() . 'admin/pengguna' ?>">
                    <i class="fa fa-user"></i> <span>Pengguna</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <!-- <li <?= ($uri == 'rekan' ? 'class="active"' : '') ?>>
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
        </li> -->

        <?php endif; ?>

    </ul>
</section>