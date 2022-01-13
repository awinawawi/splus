<?php
$meta['title']          = 'Panduan Pemasangan Plafon - S-Plus Indonesia';
$meta['description']    = 'Informasi cara pemasangan plafon yang baik dan benar sesuai dengan standarisasi pengukuran yang sudah S-Plus buat agar hasil sesuai dan maksimal';
$meta['keywords']       = 'pasang palfon pvc, cara pasang plafon, cara pasang plafon rumah, pemasangan plafon, pemasangan plafon rumah, panduan instalasi plafon, panduan instalasi plafon rumah, tutorial pasang plafon, tutorial pasang plafon rumah';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-blog-grid pt-10 pb-10 bg-grey">
        <div class="ps-container">
            <div class="row">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <aside class="ps-widget--sidebar ">

                            <div class="ps-widget__header">
                                <h3>PEMASANGAN</h3>
                            </div>
                            <div class="ps-widget__content">
                                <ul class="ps-list--arrow">
                                    <li><a href="<?= base_url('pemasangan/pintu') ?>"><b>S-PLUS PINTU</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA</b></a></li>
                                    <li class="current"><a href="<?= base_url('pemasangan/plafon') ?>"><b>S-PLUS PLAFON</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/sunshade') ?>"><b>S-PLUS SUN SHADE </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/kitchen-set') ?>"><b>S-PLUS KITCHEN SET </b></a></li>
                                    <li><a href="<?= base_url('standar-pengukuran') ?>"><b>SOP PENGUKURAN S-PLUS </b></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                <?php endif; ?>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <div class="ps-box pb-10 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="text-center">
                            <span class="h-subtitle h-m-title" style="margin-top: 5px;">PEMASANGAN PLAFON</span>
                            <hr style=" width: 30%; border: 0.5px solid #e24545;">
                        </div>
                        <div class="ps-section__header pt-20 pb-10">
                            <center><img src="<?= base_url('assets/user/images/pemasangan/p_plafon.jpg') ?>" alt="" style="border-radius: 3px;"></center>
                        </div> <br>
                        <div class="row">
                            <h4 class="h-subtitle-pmsg h-m-title-pmsg" style="padding-bottom: 5px;padding-left: 10px;">
                                Berikut Cara Pemasangan Plafon PVC S-Plus Indonesia :
                            </h4>
                            <hr style="margin-left: 20px;width: 60%;margin-bottom: 15px; border: 0.5px solid #e24545;">
                        </div>
                        <ol class="h-body h-m-body">
                            <li>Pasang rangka hollow/kayu sesuai ukuran ruangan.</li>
                            <li>Memotong list menjadi sudut 45 Derajat kemudian di tempatkan pada sisi-sisi dinding.</li>
                            <li>Kencangkan list dengan srup pada hollow/kayu.</li>
                            <li>Potongan plafon sesuai dengan ukuran menggunakan cutter/gergaji.</li>
                            <li>Pasang plafon sesuai dengan urutan.
                            </li>
                            <li>Kancing plafon menggunakan scrup.</li>
                        </ol>
                        <div class="row pb-40" style="margin-top: 10px;">
                            <h4 style="margin-bottom: 10px;margin-top: 10px; padding-left: 10px;" class="h-subtitle-pmsg h-m-title-pmsg">Untuk lebih jelasnya dapat dilihat pada gambar di bawah ini : </h4>
                            <hr style="margin-left: 20px;width: 60%;margin-bottom: 20px; border: 0.5px solid #e24545;">
                            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 "></div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 gallery-popup">
                                <img src="<?= base_url('assets/user/images/pemasangan/pemasangan-plafon.jpg') ?>" alt="">
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>
    <!-- image popup -->
    <div class="show-image-popup">
        <div class="image-popup-overlay"></div>
        <div class="img-show">
            <img src="">
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            "use strict";

            $(".gallery-popup img").click(function() {
                var $src = $(this).attr("src");
                $(".show-image-popup").fadeIn();
                $(".img-show img").attr("src", $src);
            });

            $(".image-popup-overlay, .img-show").click(function() {
                $(".show-image-popup").fadeOut();
            });

        });
        $('#closee').next('ul').hide();
        $("#closee").click(function() {
            $(this).next("ul").toggle();
        });
        $('#close').next('ul').hide();
        $("#close").click(function() {
            $(this).next("ul").toggle();
        });
    </script>
    <?php $this->load->view('user/footer') ?>