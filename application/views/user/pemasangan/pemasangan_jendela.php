<?php
$meta['title']          = 'Panduan Pemasangan Jendela - S-Plus Indonesia';
$meta['description']    = 'Informasi cara pemasangan jendela yang baik dan benar sesuai dengan standarisasi pengukuran yang sudah S-Plus buat agar hasil sesuai dan maksimal';
$meta['keywords']       = 'cara pasang jendela, cara pasang jendela rumah, pemasangan jendela, pemasangan jendela minimalis, pemasangan jendela rumah, panduan instalasi jendela, panduan instalasi jendela rumah, tutorial pasang jendela, tutorial pasang jendela rumah';
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
                                    <li class="current"><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/plafon') ?>"><b>S-PLUS PLAFON</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/sunshade') ?>"><b>S-PLUS SUN SHADE </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC </b></a></li>
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
                            <span class="h-subtitle h-m-title" style="margin-top: 5px;">PEMASANGAN LIS JENDELA</span>
                            <hr style="margin-bottom: 28px;width: 35%; border: 0.5px solid #e24545">
                        </div>
                        <div class="ps-section__header pb-5">
                            <center><img src="<?= base_url('assets/user/images/pemasangan/p-jendela.jpg') ?>" style="border-radius: 3px;"></center>
                        </div> <br>
                        <span class="h-body h-m-body-pmsg">Berikut Cara Pemasangan Lis pada S-Plus Jendela </span><br>
                        <ol class="h-body h-m-body-pmsg" style="margin-left: 20px;">
                            <li>Sesuaikan ukuran lis dengan panjang dan lebar jendela.</li>
                            <li>Potong ujung-ujung lis dengan cutter agar sesuai dengan sudut jendela.</li>
                            <li>Pasangkan lis lalu pukul-pukul dengan palu agar rapat sempurna.</li>
                            <li>Lakukan hal yang sama pada setiap sisi jendela.</li>
                            <li>Saat memotong lis, pastikan ukurannya sesuai dengan sudut jendela.</li>
                            <li>Saat merapatkan lis ke sisi jendela, pastikan tidak ada lis yang melengkung.</li>
                            <li>Selesai, lis jendela sudah terpasang dengan rapi</li>
                            <li>Jendela S-Plus siap digunakan.</li>
                        </ol>
                        <div class="row pb-40" style="margin-top: 10px;">
                            <h4 class="h-subtitle-pmsg h-m-title-pmsg" style="margin-bottom: 10px;margin-top: 10px;margin-left: 10px;">Berikut
                                Video Pemasangan Lis S-Plus Jendela :</h4>
                            <hr style="margin-left: 30px;width: 40%;margin-bottom: 20px; border: 0.5px solid #e24545;">
                            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 "></div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                                <iframe width="330" height="355" src="https://www.youtube.com/embed/fqfNgL6PuTY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>
    <script>
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