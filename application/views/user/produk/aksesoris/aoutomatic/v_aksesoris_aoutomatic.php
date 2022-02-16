<?php
$meta['title']          = 'Aksesoris Aoutomatic - S-Plus Indonesia';
$meta['description']    = 'S-Plus Plafon merupakan pengganti plafon konvensional terbuat dari bahan UPVC lebih ringan dan lebih aman tentunya. S-Plus Plafon memiliki banyak pilihan motif dan warna yang beragam dari polos, pattern hingga laminate. S-Plus Plafon tahan lama, anti rayap dan karat, membuat sirkulasi udara nyaman.';
$meta['keywords']       = 'plafon upvc,jual plafon upvc, jual plafon upvc murah, jual plafon upvc berkualitas, jual plafon upvc terbaik, plafon upvc murah, plafon upvc minimalis, plafon upvc elegan, plafon upvc terbaik, plafon upvc berkualitas, harga plafon upvc, ukuran plafon upvc, plafon s plus';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">

                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div>
                            <h4><a href="<?= base_url('v_kategori') ?>"><b>Produk </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-aksesoris') ?>"><b> Aksesoris </b></a><span class="fa fa-chevron-right"></span><b>Aoutomatic</b></h4>
                            <br>
                        </div>
                        <div style="margin-top: 10px;">
                            <center> <img src="<?= base_url('assets/images/ourproduk/logo.jpg') ?>" style="width: 300px;">
                            </center>
                            <CENTER>
                                <h2>COMING SOON</h2>
                            </CENTER>
                        </div>

                        <!-- <center>
                            <span class="h-subtitle h-m-title" style="padding-bottom: 10px;" id="plafon"><strong>Kitchen set Aksesoris</strong></span>
                        </center>
                        <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                        <div class="row pb-40">
                            <?php if ($this->agent->is_mobile()) : ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/kategori/produk/plafon/upvc-plafon-m.jpg') ?>">
                                </div>
                            <?php else : ?>
                                <div class="col-md-12 pb-20 gallery-popup">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/produk/plafon/deco.jpg') ?>">
                                </div>
                            <?php endif; ?>
                        </div> -->

                        <div class="row pt-40">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <center><a href="<?= base_url('kategori/s-plus-aksesoris') ?>" class="ps-btn h-m-body">Kembali</a></center>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('user/footer') ?>