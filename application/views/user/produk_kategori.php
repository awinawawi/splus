<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <?php if (strtoupper($title) == 'PINTU') : ?>
                <?php $this->load->view('user/produk/v_splus_pintu') ?>
            <?php elseif (strtoupper($title) == 'S-PLUS JENDELA') : ?>
                <?php $this->load->view('user/produk/v_splus_sash') ?>
            <?php elseif (strtoupper($title) == 'S-PLUS PLAFON') : ?>
                <?php $this->load->view('user/produk/v_splus_plafon') ?>
            <?php elseif (strtoupper($title) == 'S-PLUS WPC DECK TILE') : ?>
                <?php $this->load->view('user/produk/v_splus_wpc') ?>
            <?php elseif (strtoupper($title) == 'S-PLUS SUN SHADE') : ?>
                <?php $this->load->view('user/produk/v_splus_shade') ?>
            <?php elseif (strtoupper($title) == 'S-PLUS SOLID SURFACE') : ?>
                <?php $this->load->view('user/produk/v_splus_solid') ?>
            <?php elseif (strtoupper($title) == 'S-PLUS KITCHEN SET') : ?>
                <?php $this->load->view('user/produk/v_splus_kitchen') ?>
            <?php endif; ?>
        </div>
    </div>
    <!--footer-->
    <?php $this->load->view('user/footer') ?>