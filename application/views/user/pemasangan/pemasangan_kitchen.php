<?php
$meta['title']          = 'Pemasangan Kitchen Set - S-Plus Indonesia';
$meta['description']    = 'Informasi cara pemasangan kitchen set yang baik dan benar sesuai dengan standarisasi pengukuran yang sudah S-Plus buat agar hasil sesuai dan maksimal';
$meta['keywords']       = 'pasang kitchen set, pasang kitchen set mudah, cara pasang kitchen set, cara pasang kitchen set rumah, pemasangan kitchen set, pemasangan kitchen set rumah, panduan instalasi kitchen set, panduan instalasi kitchen set rumah, tutorial pasang kitchen set, tutorial pasang kitchen set rumah';
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
                  <li><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA </b></a></li>
                  <li><a href="<?= base_url('pemasangan/plafon') ?>"><b>S-PLUS PLAFON </b></a></li>
                  <li><a href="<?= base_url('pemasangan/sunshade') ?>"><b>S-PLUS SUN SHADE </b></a></li>
                  <li><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC</b></a></li>
                  <li class="current"><a href="<?= base_url('pemasangan/kitchen-set') ?>"><b>S-PLUS KITCHEN SET </b></a></li>
                  <li><a href="<?= base_url('standar-pengukuran') ?>"><b>SOP PENGUKURAN S-PLUS </b></a></li>
                </ul>
              </div>
            </aside>
          </div>
        <?php endif; ?>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
          <div class="ps-box pb-10 pt-20 pl-20 pr-20 bg-white shd">
            <div class="text-center">
              <span class="h-subtitle h-m-title" style="margin-top: 5px;">PEMASANGAN KITCHEN SET</h3>
                <hr style="width: 30%; border: 0.5px solid #e24545">
            </div>
            <div class="ps-section__header pt-20 pb-10">
              <center><img src="<?= base_url('assets/user/images/pemasangan/p-kitchen.jpg') ?>" alt="" style="border-radius: 3px;"></center>
            </div>
            <div class="row pb-15">
              <p class="h-body h-m-body-pmsg" style="margin-left: 10px;">
                &nbsp &nbsp Kitchen set S-Plus didesain agar anda mudah memasangnya sendiri dan dibawah ini terdapat panduan untuk memudahkan dan mewujudkan dapur impian anda. Anda juga dapat menghubungi kami melalui telepon atau email untuk mendapatkan langkah demi langkah.
              </p>
              <p class="h-body h-m-body-pmsg" style="margin-left: 10px;">
                <b>Bila punya ide untuk dapurmu, kamu bisa mendesain dapurmu sendiri. silahkan ikuti panduan yng tersedia dan kamu akan mendapatkan dapur impianmu</b>
              </p>
              <ol class="h-body h-m-body" style="margin-left: 10px;">
                <div class="">
                  <li><b>UKURAN & LAYOUT KITCHEN SET</b></li>
                  <p>Setiap Layout mempunyai Ukuran Yang Berbeda</p>
                  <!-- gambar layout" kitchen set -->
                  <div class="gallery-popup">
                    <center><img src="<?= base_url('assets/user/images/kategori/splus-kitchen/ukuran-layout.jpg') ?>" class="pb-20" style="width:80%;">
                    </center>
                  </div>
                </div>
                <div class="">
                  <li><b>MODULAR CABINET & JENIS PINTU</b></li>
                  <!-- gambar ukuran kitchen set -->
                  <div class="gallery-popup">
                    <center><img src="<?= base_url('assets/user/images/kategori/splus-kitchen/modul-kabinet.jpg') ?>" class="pb-20" style="width:80%;">
                    </center>
                    <p>MODEL PINTU</p>
                    <div class="gallery-popup">
                      <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/MODEL-PINTU/A.jpg') ?>" class="pb-20" style="width:80%;">
                      </div>
                      <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/MODEL-PINTU/B.jpg') ?>" class="pb-20" style="width:80%;">
                      </div>
                      <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/MODEL-PINTU/C.jpg') ?>" class="pb-20" style="width:80%;">
                      </div>
                      <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/MODEL-PINTU/D.jpg') ?>" class="pb-20" style="width:80%;">
                      </div>
                      <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/MODEL-PINTU/E.jpg') ?>" class="pb-20" style="width:80%;">
                      </div>
                      <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/MODEL-PINTU/F.jpg') ?>" class="pb-20" style="width:80%;">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="">
                  <li><b>PILIHAN WARNA CABINET</b></li>
                  <div class="gallery-popup">
                    <center><img src="<?= base_url('assets/user/images/kategori/splus-kitchen/pil-warna.jpg') ?>" class="pb-20" style="width:80%;">
                    </center>
                  </div>
                  <div class="">
                    <li><b>SOLID SURFACE</b></li>
                    <div class="gallery-popup">
                      <center><img src="<?= base_url('assets/user/images/kategori/splus-kitchen/pil-solid.jpg') ?>" class="pt-20 pb-20" style="width:80%;">
                      </center>
                    </div>
                  </div>
                  <div class="">
                    <li><b>AKSESORIS & APLIKASI</b></li>
                    <div class="gallery-popup">
                      <center><img src="<?= base_url('assets/user/images/kategori/splus-kitchen/akesesoris.jpg') ?>" class="pt-20 pb-20" style="width:80%;">
                      </center>
                    </div>
                    <div class="">
              </ol>
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