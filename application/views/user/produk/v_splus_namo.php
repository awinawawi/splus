<?php
$meta['title']          = 'Namo Pintu - S-Plus Indonesia';
$meta['description']    = 'Pintu kayu yang kualitasnya lebih baik di atas standar pada umumnya direkomendasikan untuk perumahan sederhana degan desain minimalis dan struktur pintu yg kuat.';
$meta['keywords']       = 'jual pintu namo, jual pintu namo murah, jual pintu namo berkualitas, jual pintu namo terbaik, pintu namo murah, pintu namo minimalis, pintu namo elegan, pintu namo terbaik, pintu namo berkualitas, pintu s plus, pintu kayu';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <!-- <aside class="ps-widget--sidebar">
                            <div class="ps-widget__header">
                                <h3>KATEGORI</h3>
                            </div>
                            <div class="ps-widget__content ">
                                <ul class="ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b>
                                        </a>
                                        <ul id="test">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test1a"><a href="#">PINTU ABS</a>
                                                <ul id="test1a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                                                    <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                                                    <ul>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">General</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Deco</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                                                    </ul>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Art Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">Exterior Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test1b"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>PINTU UPVC</b></a>
                                                <ul id="test1b" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#felice') ?>">Felice</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#sash') ?>">Sash Door</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test1c"><a href="<?= base_url('kategori/s-plus-namo-pintu') ?>">PINTU NAMO</a>
                                                <ul id="test1c" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#laminate-door') ?>">Laminate Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#eco-door') ?>">ECO Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#veneer-solid-door') ?>">Veneer Solid Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#timber-joint-door') ?>">Timber Joint Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#art-door') ?>">ART Door</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse"><a href="#">PINTU IROOM</a>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test2">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>JENDELA</b></a>
                                        <ul id="test2">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test2a"><a href="#">JENDELA UPVC</a>
                                                <ul id="test2a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test2b"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>JENDELA IROOM</b></a>
                                                <ul id="test2b" class="panel-collapse collapse">

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test3">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>INLIFE</b></a>
                                        <ul id="test3">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3a"><a href="<?= base_url('kategori/s-plus-upvc-plafon') ?>">PLAFON UPVC</a>
                                                <ul id="test3a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-plafon#polos') ?>">Plafon Polos</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-plafon#laminate') ?>">Plafon Laminate</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-plafon#deco') ?>">Plafon Deco</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3b"><a href="<?= base_url('kategori/s-plus-sun-shade') ?>"><b>SUN SHADE</b></a>
                                                <ul id="test3b" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">Combi Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">Sun Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">Blackout Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">Vertical Blind</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">Horizontal Wood</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">Horizontal Aluminium</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">Honeycomb</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3c"><a href="<?= base_url('kategori/s-plus-solid-surface') ?>"><b>SOLID SURFACE</b></a>
                                                <ul id="test3c" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#chip') ?>">CHIP</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#deco') ?>">DECO</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title"><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>KITCHEN SET</b></a></li>
                                            <li class="sm panel-title"><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>PVC FOAM BOARD</b></a></li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3d"><a href="<?= base_url('kategori/s-plus-vinyl-flooring') ?>"><b>VINYL FLOORING</b></a>
                                                <ul id="test3d" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test4">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>OUTLIFE</b></a>
                                        <ul id="test4">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test4a"><a href="<?= base_url('kategori/s-plus-wpc') ?>">WPC</a>
                                                <ul id="test4a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title"><a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PARASOL</b></a></li>

                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>MASKER</b></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="ps-widget__header">
                            <h3>PEMASANGAN</h3>
                        </div>
                        <div class="ps-widget__content">
                            <ul class="ps-list--arrow">
                                    <li><a href="<?= base_url('pemasangan/pintu') ?>"><b>S-PLUS PINTU </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/plafon') ?>"><b>S-PLUS PLAFON</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/sunshade') ?>"><b>S-PLUS SUN SHADE </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/kitchen-set') ?>"><b>S-PLUS KITCHEN SET </b></a></li>
                                    <li><a href="<?= base_url('standar-pengukuran') ?>"><b>SOP PENGUKURAN S-PLUS </b></a></li>
                            </ul>
                        </div>
                        </aside> -->
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                <!-- Loading Screen -->
                                <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?= base_url('assets/user/images/banner/double-tail-spin.svg') ?>" />
                                </div>
                                <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">

                                    <div style="background-color:#000000;">
                                        <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-namo/banner/Laminate door.jpg') ?>" />
                                    </div>

                                    <div style="background-color:#000000;">
                                        <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-namo/banner/ECO door.jpg') ?>" />
                                    </div>
                                    <div style="background-color:#000000;">
                                        <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-namo/banner/Veneer Solid door.jpg') ?>" />
                                    </div>

                                    <div style="background-color:#000000;">
                                        <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-namo/banner/Timber Joint door.jpg') ?>" />
                                    </div>
                                    <div style="background-color:#000000;">
                                        <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-namo/banner/ART door.jpg') ?>" />
                                    </div>
                                </div>
                                <!-- Bullet Navigator -->
                                <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                    <div data-u="prototype" class="i" style="width:13px;height:13px;">
                                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                        </svg>
                                    </div>
                                </div>
                                <!-- Arrow Navigator -->
                                <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                    </svg>
                                </div>
                                <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <br></br>
                        <br></br>
                        <!--Namo Engineering Door-->
                        <span class="h-body h-m-body">
                            <div class="row pb-20">
                                <center>
                                    <span class="h-subtitle h-m-title">NAMO ENGINEERING DOOR </span>
                                    <hr style="margin-bottom: 15px;width: 40%; border: 0.5px solid #e24545">
                                </center>
                                <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                    <span class="h-body h-m-body">
                                        NAMO Engineering Door merupakan pintu yang diproduksi dengan menggunakan bahan kayu olahan
                                        dan teknik modern / mesin sehingga dihasilkan suatu produk pintu yang memiliki keunggulan dari pada
                                        pintu kayu konvensional pada umumnya.
                                    </span>
                                </div>
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-namo/namo-m.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:5px;">
                                        <!-- gambar produk -->
                                        <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/namo.jpg') ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                            <!--LAMINATE DOOR-->
                            <div class="row pb-20" style="padding-bottom:10px;">
                                <center>
                                    <span class="h-subtitle h-m-title" id="laminate-door">LAMINATE DOOR</span>
                                    <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                                </center>
                                <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                    <span class="h-body h-m-body">
                                        <b>Laminate Door</b> adalah pintu NAMO Engineering yang pada bagian cover (luar) menggunakan papan
                                        HMR 3mm (tahan kelembaban) yang di laminate menggunakan PVC Deco sheet dengan menggunakan proses press
                                        menggunakan mesin.
                                    </span>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 10px;text-align: center; font-size: 18px;">Pilihan Struktur Pintu Laminate Door</span>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <!-- <img src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/struktur-mobile1.jpg') ?>"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/laminate-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <!-- gambar produk -->
                                            <!-- <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/struktur1.jpg') ?>"> -->
                                            <img class="" src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/laminate.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:25px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Warna Laminate</span>
                                    <div><img src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/duo/warna.png') ?>" width="300" style="padding-top:10px;"></div>
                                </div> -->
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:35px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Ukuran Daun Pintu (Lebar x Tinggi x Tebal)</span>
                                    <div class="row pb-20" style="padding-top:10px;">
                                        <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup">
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/costum/ukuran.jpg') ?>">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 pt-20" style="padding-top:15px;">
                                            <span class="h-body h-m-body">
                                                - 820 x 2100 x 36 mm <br>
                                                - <b>Tersedia Ukuran Costum</b><br>
                                            </span>
                                        </div> <br>
                                    </div>
                                </div> -->
                                <!-- <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                        <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;"><b>Pilihan Motif</b> Laminate Door</span>
                                        <div><img style="padding-top:15px;" src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/uno/m-uno1.jpg') ?>"></div>
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                        <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Motif Laminate Door</span>

                                        <div><img style="padding-top:15px;" class="" src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/uno/detail1.jpg') ?>"></div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px; padding-top:15px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/duo/m-duo1.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:5px; padding-top:15px;">

                                        <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/laminate-door/duo/detail1.jpg') ?>">
                                    </div>
                                <?php endif; ?> -->



                            </div>
                            <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                            <!--ECO DOOR-->
                            <div class="row pb-20" style="padding-bottom:10px;">
                                <center>
                                    <span class="h-subtitle h-m-title" id="eco-door">ECO DOOR</span>
                                    <hr style="margin-bottom: 25px;width: 10%; border: 0.5px solid #e24545">
                                </center>
                                <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                    <span class="h-body h-m-body">
                                        <b>ECO Door</b> adalah pintu ekonomis yang menggunakan struktur rangka kayu dan di produksi secara pabrikasi menggunakan mesin
                                        kekuatan press 50 Ton dan finishing cat. Keunggulan pintu NAMO Eco Door, pada bagian bawah menggunakan cover WPC, sehingga
                                        tahan terhadap air.
                                    </span>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 5px; font-size: 18px;">Struktur ECO DOOR</span> <br>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup">
                                            <!-- <img src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/struktur-m.jpg') ?>"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/eco-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup">
                                            <!-- gambar produk -->
                                            <!-- <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/struktur.jpg') ?>"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/eco.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Pilihan Warna Cat</span>
                                    <div style="padding-top:10px;"><img src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/warna.png') ?>" width="400"></div>
                                </div> -->
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:35px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Ukuran Daun Pintu (Lebar x Tinggi x Tebal)</span>
                                    <div class="row pb-20" style="padding-top:10px;">
                                        <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup">
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/ukuran1.jpg') ?>">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 pt-20" style="padding-top:15px;">
                                            <span class="h-body h-m-body">
                                                - 820 x 2100 x 36 mm <br>
                                                - <b>Tersedia Ukuran Costum</b><br>
                                            </span>
                                        </div> <br>
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:35px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Finishing</span>
                                    <div class="row pb-20" style="padding-top:10px;">
                                        <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup">
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/finishing.jpg') ?>">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 pt-20" style="padding-top:15px;">
                                            <span class="h-body h-m-body">
                                                - Finishing Cat <br>
                                                - Tanpa Finishing<br>
                                            </span>
                                        </div> <br>
                                    </div>
                                </div> -->
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 5px; font-size: 18px;">Pilihan Motif ECO Door</span> <br>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:20px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/detail1-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:20px; padding-left:0px;">
                                           
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/detail1.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/detail2-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                         
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/eco-door/detail2.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div> -->
                            </div>
                            <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                            <!--VENEER SOLID DOOR-->
                            <div class="row pb-20">
                                <center>
                                    <span class="h-subtitle h-m-title" id="veneer-solid-door">VENEER SOLID DOOR</span>
                                    <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                                </center>
                                <div style="padding-left:15px; padding-bottom:15px; padding-right:15px;">
                                    <span class="h-body h-m-body">
                                        <b>Veneer Solid Door</b> adalah pintu dengan struktur kayu solid. Pada bagian luar menggunakan veneer dengan berbagai
                                        pilihan motif yang dan menggunakan pabrikasi proses lem dengan kekuatan press 50 Ton.
                                    </span>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Struktur<b> Veneer Solid Door</b></span> <br>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <!-- <img src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/struktur-m.jpg') ?>"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/veneer-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <!-- <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/struktur.jpg') ?>"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/veneer.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>

                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Pilihan Warna</span>
                                    <div style="padding-top:10px;"><img src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/warna.png') ?>" width="200"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:35px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Ukuran Daun Pintu (Lebar x Tinggi x Tebal)</span>
                                    <div class="row pb-20" style="padding-top:10px;">
                                        <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup">
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/ukuran1.jpg') ?>">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 pt-20" style="padding-top:15px;">
                                            <span class="h-body h-m-body">
                                                - 820 x 2100 x 36 mm <br>
                                                - <b>Tersedia Ukuran Costum</b><br>
                                            </span>
                                        </div> <br>
                                    </div>
                                </div>
                                <div style="padding-top:0px;" class="col-md-12 col-sm-12 col-xs-12 pt-40">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 5px; font-size: 18px;">Pilihan Motif Veneer Solid Door</span> <br>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:20px; padding-top:10px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/detail-one-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:20px; padding-top:10px; padding-left:0px;">
                                            
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/detail-one.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-top:10px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/detail-two-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-top:10px; padding-left:0px;">
                                         
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/detail-two.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div> -->


                            </div>
                            <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                            <!--SOLID TIMBER DOOR-->
                            <div class="row pb-20" style="padding-bottom:20px;">
                                <center>
                                    <span class="h-subtitle h-m-title" id="timber-joint-door">TIMBER JOINT DOOR</span>
                                    <hr style="margin-bottom: 25px; width: 25%; border: 0.5px solid #e24545">
                                </center>
                                <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                    <span class="h-body h-m-body">
                                        <b>Timber Joint Door</b> adalah pintu engineering dengan struktur panel kayu solid yang di buat secara assembling dan di kerjakan dengan
                                        proses pabrikasi menggunakan mesin, sehingga hasil lebih kuat dan presisi.
                                    </span>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Struktur<b> Timber Joint Door</b></span> <br>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <!-- <img src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail-profile-m.jpg') ?>"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/timber-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <!-- <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail-profile.jpg') ?>"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/timber.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <!-- </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Pilihan Warna Cat</span>
                                    <div style="padding-top:10px;"><img src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/warna.png') ?>" width="400"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:35px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Ukuran Daun Pintu (Lebar x Tinggi x Tebal)</span>
                                    <div class="row pb-20" style="padding-top:10px;">
                                        <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup">
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/ukuran1.jpg') ?>">
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 pt-20" style="padding-top:15px;">
                                            <span class="h-body h-m-body">
                                                - 820 x 2100 x 36 mm <br>
                                                - <b>Tersedia Ukuran Costum</b><br>
                                            </span>
                                        </div> <br>
                                    </div>
                                </div>
                                <div style="padding-top:0px;" class="col-md-12 col-sm-12 col-xs-12 pt-40">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 5px; font-size: 18px;">Pilihan Motif Timber Joint Door</span> <br>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:20px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail1-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:20px; padding-left:0px;">
                                           
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail1.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail2-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail2.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div style="padding-top:10px;" class="col-md-12 col-sm-12 col-xs-12 pt-40">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 5px; font-size: 18px;">Pilihan Motif Timber Joint Door Glass (Kombinasi Kaca)</span> <br>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:20px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail1-glass-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:20px; padding-left:0px;">
                                           
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail1-glass.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail2-glass-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                            
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/solid-timber-door/detail2-glass.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                </div> -->
                                </div>
                                <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                                <!--ART DOOR-->
                                <div class="row pb-20" style="padding-bottom:20px;">
                                    <center>
                                        <span class="h-subtitle h-m-title" id="art-door">ART DOOR</span>
                                        <hr style="margin-bottom: 25px;width: 10%; border: 0.5px solid #e24545">
                                    </center>
                                    <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                        <span class="h-body h-m-body">
                                            <b>Art Door</b> dibuat agar dapat menyesuaikan konsep ruangan interior anda, gambar yang ada di pintu ini dapat di cetak pada pintu secara
                                            custom sesuai keinginan dan konsep ruangan interior ruangan.
                                        </span>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:25px;">
                                        <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Struktur ART Door</span>
                                        <?php if ($this->agent->is_mobile()) : ?>
                                            <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-top:10px; padding-left:0px; padding-bottom:10px;">
                                                <!-- <img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/struktur-m.jpg') ?>"> -->
                                                <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/art-m.jpg') ?>">
                                            </div>
                                        <?php else : ?>
                                            <div class="col-md-12 pb-40 gallery-popup" style="padding-top:10px; padding-left:0px; padding-bottom:10px;">
                                                <!-- <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/struktur.jpg') ?>"> -->
                                                <img src="<?= base_url('assets/user/images/kategori/produk/pintu/web_namo/art.jpg') ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!-- <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:10px;">
                                        <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Pilihan Warna</span>
                                        <div style="padding-top:10px;"><img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/warna.png') ?>" width="400"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:15px;">
                                        <span class="h-subtitle h-m-title" style="padding-bottom: 10px; font-size: 18px;">Pilihan Frame Figura (ART Door)</span>
                                        <?php if ($this->agent->is_mobile()) : ?>
                                            <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-top:10px; padding-left:0px; padding-bottom:10px;">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/frame-m.jpg') ?>">
                                            </div>
                                        <?php else : ?>
                                            <div class="col-md-12 pb-40 gallery-popup" style="padding-top:10px; padding-left:0px; padding-bottom:10px;">
                                                
                                                <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/frame.jpg') ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:35px;">
                                        <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Ukuran Daun Pintu (Lebar x Tinggi x Tebal)</span>
                                        <div class="row pb-20" style="padding-top:10px;">
                                            <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup">
                                                <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/ukuran1.jpg') ?>">
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-12 pt-20" style="padding-top:15px;">
                                                <span class="h-body h-m-body">
                                                    - 820 x 2100 x 36 mm <br>
                                                    - <b>Tersedia Ukuran Costum</b><br>
                                                </span>
                                            </div> <br>
                                        </div>
                                    </div>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-mat2-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                         
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-mat2.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-nat2-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                            
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-nat2.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-rel2-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                      
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-rel2.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-peo2-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                       
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-peo2.jpg') ?>">
                                        </div>
                                    <?php endif; ?>
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-car2-m.jpg') ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                         
                                            <img class="" src="<?= base_url('assets/user/images/kategori/splus-namo/art-door/detail-car2.jpg') ?>">
                                        </div>
                                    <?php endif; ?> -->
                                </div>
                            </div>
                            <div class="row pt-40">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <center><a href="<?= base_url('kategori/s-plus-pintu/namo') ?>" class="ps-btn h-m-body">Kembali</a></center>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>