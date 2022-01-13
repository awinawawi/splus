<?php
$meta['title']          = 'Panduan Pemasangan Wpc - S-Plus Indonesia';
$meta['description']    = 'Informasi cara pemasangan wpc yang baik dan benar sesuai dengan standarisasi pengukuran yang sudah S-Plus buat agar hasil sesuai dan maksimal';
$meta['keywords']       = 'pasang wpc,cara pasang wpc, cara pasang wpc rumah, pemasangan wpc, pemasangan wpc rumah, panduan instalasi wpc, panduan instalasi wpc rumah, tutorial pasang wpc, tutorial pasang wpc rumah';
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
                                    <li class="current"><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC</b></a></li>
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
                            <span class="h-subtitle h-m-title" style="margin-top: 5px;">PEMASANGAN WPC</h3>
                                <hr style="width: 30%; border: 0.5px solid #e24545">
                        </div>
                        <div class="ps-section__header pt-20 pb-10">
                            <center><img src="<?= base_url('assets/user/images/pemasangan/p-wpc.jpg') ?>" alt="" style="border-radius: 3px;"></center>
                        </div>
                        <div class="row pb-15">
                            <h4 class="h-subtitle-pmsg h-m-title-pmsg" style="padding-bottom: 5px; padding-left: 10px;">CARA PEMASANGAN LANTAI OUTDOOR : </h4>
                            <hr style="margin-left: 30px;width: 40%; border: 0.5px solid #e24545;">
                            <ul class="b">
                                <li>Pemasangan antara rangka atau joist diberi jarak 30-35 cm</li>
                                <li>Bila pemasangan ingin dimatikan ke lantai, rangka (joist) langsung dibor atau disekrup ke lantai.</li>
                                <li>Bila rangka (joist) sudah terpasang, kemudian pasang decking di atas rangka (joist). Apabila rangka(joist) terpasang vertikal, maka decking harus terpasang horizontal, begitu juga sebaliknya</li>
                                <li>Jarak antara decking dengan decking (Nat) harus diberi jarak 5-7 mm untuk menghindari kelembaban pada saat terkena air atau hujan</li>
                                <li>Pemasangan plastic clip untuk decking diberi jarak 30 cm</li>
                            </ul>
                        </div>
                        <div class="row pb-10">
                            <h4 class="h-subtitle-pmsg h-m-title-pmsg" style="padding-bottom: 5px; padding-left: 10px;">CARA PEMASANGAN LANTAI INDOOR : </h4>
                            <hr style="margin-left: 30px;width: 40%; border: 0.5px solid #e24545;">
                            <ul class="b">
                                <li>Pasang terlebih dahulu besi hollow atau kayu kaso pada permukaan dinding dan beri jarak sekitar 40 cm. </li>
                                <li>Pasang dinding panel ke besi hollow atau kayu kaso secara berlawanan. Jika pemasangan besi hollow atau kayu kaso vertical, maka pemasangan dinding panel horizontal. Begitu pula sebaliknya.</li>
                                <li>Pemasangan dinding panel ke besi hollow atau kayu kaso menggunakan paku atau baut,dengan cara mengaitkan paku pada dinding panel pertama (agar paku atau baut tidak terlihat).</li>
                                <li>Jika pemasangan dinding panel memakai lem kayu, maka lapisi dinding panel dengan lem kayu dan rekatkan pada besi hollow atau kayu kaso.</li>
                                <li>Catatan: Pemasangan dinding panel sama dengan pemasangan kayu biasa yang dapat dipotong dengan gergaji dan dapat di screw.</li>
                            </ul>
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