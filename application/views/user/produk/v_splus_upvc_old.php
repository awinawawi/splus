<?php
$meta['title']          = 'Pintu UPVC - S-Plus Indonesia';
$meta['description']    = 'UPVC (Unplastized Polivinyl Chloride) merupakan turunan dari plastik yang mengalami proses tertentu sehingga sifat lentur/plastisnya dihilangkan. Hasil akhir material ini menjadi keras dan kemudian diaplikasikan ke berbagai bidang industri, yang salah satunya sebagai building material khususnya pintu.';
$meta['keywords']       = 'jual pintu upvc, jual pintu upvc murah, jual pintu upvc berkualitas, jual pintu upvc terbaik, pintu upvc murah, pintu upvc minimalis, pintu upvc elegan, pintu upvc terbaik, pintu upvc berkualitas, pintu upvc';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <aside class="ps-widget--sidebar ">
                            <div class="ps-widget__header">
                                <h3>KATEGORI</h3>
                            </div>
                            <div class="ps-widget__content ">
                                <ul class="ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>S-PLUS PINTU ABS</b></a>
                                    </li>
                                    <ul id="test" class="panel-collapse collapse">
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                                        <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                                        <ul>
                                            <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">Premium</a></li>
                                            <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Premium Deco</a></li>
                                            <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                                        </ul>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Art Door</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">Exterior Door</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li>
                                    </ul>
                                    <li class="panel-title current" data-toggle="collapse" data-target="#test8"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>S-PLUS PINTU UPVC</b></a></li>
                                    <ul id="test8">
                                        <li class="sm">Felice & Sash Door</li>
                                    </ul>
                                    <li class="panel-title" data-toggle="collapse" data-target="#test2"><a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>S-PLUS JENDELA UPVC</b></a></li>
                                    <ul id="test2" class="panel-collapse collapse">
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Fixed</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>
                                    </ul>
                                    <li class="panel-title" data-toggle="collapse" data-target="#test3"><a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>S-PLUS PLAFON UPVC</b></a></li>
                                    <ul id="test3" class="panel-collapse collapse">
                                        <li class="sm">Plafon Polos</li>
                                        <li class="sm">Plafon Laminate</li>
                                        <li class="sm">Plafon Deco</li>
                                    </ul>
                                    <li class="panel-title" data-toggle="collapse" data-target="#test4"><a href="<?= base_url('kategori/s-plus-wpc') ?>"><b>S-PLUS WPC</b></a></li>
                                    <ul id="test4" class="panel-collapse collapse">
                                        <li class="sm">Deck Tile</li>
                                        <li class="sm">Wall Partition</li>
                                    </ul>
                                    <li class="panel-title" data-toggle="collapse" data-target="#test5"><a href="<?= base_url('kategori/s-plus-sun-shade') ?>"><b>S-PLUS SUN SHADE</b></a>
                                    </li>
                                    <ul id="test5" class="panel-collapse collapse">
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">Combi Roll Screen</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">Roll Screen</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">Sun Screen</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">Blackout Roll Screen</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">Vertical Blind</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">Horizontal Wood</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">Horizontal Aluminium</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">Honeycomb</a></li>
                                    </ul>
                                    <li class="panel-title" data-toggle="collapse" data-target="#test6"><a href="<?= base_url('kategori/s-plus-solid-surface') ?>"><b>S-PLUS SOLID SURFACE</b></a></li>
                                    <ul id="test6" class="panel-collapse collapse">
                                        <li class="sm">CHIP</li>
                                        <li class="sm">DECO</li>
                                    </ul>
                                    <li><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>S-PLUS KITCHEN SET</b></a>
                                    </li>
                                    <li class="panel-title" data-toggle="collapse" data-target="#test7"><a href="<?= base_url('kategori/s-plus-namo-pintu') ?>"><b>S-PLUS NAMO PINTU</b></a></li>
                                    <ul id="test7" class="panel-collapse collapse">
                                        <li class="sm"><a href="<?= base_url('kategori/namo-pintu#laminate-door') ?>">Laminate Door</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/namo-pintu#eco-door') ?>">ECO Door</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/namo-pintu#veneer-solid-door') ?>">Veneer Solid Door</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/namo-pintu#timber-joint-door') ?>">Timber Joint Door</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/namo-pintu#art-door') ?>">ART Door</a></li>
                                    </ul>
                                    <li class="current"><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>S-PLUS PVC FOAM BOARD</b></a></li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test9"><a href="<?= base_url('kategori/s-plus-vinyl-flooring') ?>"><b>S-PLUS VINYL FLOORING</b></a></li>
                                    <ul id="test9" class="panel-collapse collapse">
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                        <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                                    </ul>
                                </ul>
                                </ul>
                            </div>
                            <div class="ps-widget__header">
                                <h3>PEMASANGAN</h3>
                            </div>
                            <div class="ps-widget__content">
                                <ul class="ps-list--arrow">
                                    <li><a href="<?= base_url('pemasangan/pintu') ?>"><b>S-PLUS PINTU ABS</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA UPVC </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/plafon') ?>"><b>S-PLUS PLAFON PVC </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/sunshade') ?>"><b>S-PLUS SUN SHADE </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/kitchen-set') ?>"><b>S-PLUS KITCHEN SET </b></a></li>
                                    <li><a href="standar-pengukuran"><b>SOP PENGUKURAN S-PLUS </b></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                <?php endif; ?>
                <div class="col-md-9">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <div class="">
                                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                    <!-- Loading Screen -->
                                    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?= base_url('assets/user/images/banner/double-tail-spin.svg') ?>" />
                                    </div>
                                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">

                                        <div style="background-color:#000000;">
                                            <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-door/sash-door/sash-door.jpg') ?>" />
                                        </div>

                                        <div style="background-color:#000000;">
                                            <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-door/felice/felice_old.jpg') ?>" />
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
                            </div> <br> <br>
                            <span class="h-body h-m-body">
                                &nbsp &nbsp UPVC (<i>Unplastized Polivinyl Chloride</i>) merupakan turunan dari plastik yang mengalami proses tertentu sehingga sifat lentur/plastisnya dihilangkan. Hasil akhir material ini menjadi
                                keras dan kemudian diaplikasikan ke berbagai bidang industri, yang salah satunya sebagai building material khususnya pintu<br>
                                &nbsp &nbsp Dengan proses yang dinamakan <i>“Polimer”</i>, UPVC akhirnya menjadi bahan yang lebih
                                kuat/rigid dan ramah lingkungan dibanding dengan PVC. Material UPVC juga selalu
                                diperkuat dengan besi (<i>Steel Reinforcement</i>) sehingga lebih kokoh.
                            </span>
                            <br> <br>
                            <span class="h-subtitle h-m-title">Kelebihan S-Plus Pintu UPVC:</span><br>
                            <ul class="a h-body h-m-body">
                                <li>Dapat menyerap panas </li>
                                <li>mempertahankan suhu udara didalam ruangan</li>
                                <li>Memiliki nilai estetika/keindahan tersendiiri</li>
                            </ul>
                        </div>
                        <br>
                        <div class="">
                            <!--FELICE-->
                            <center>
                                <span class="h-subtitle h-m-title"><strong>FELICE</strong></span>
                            </center>
                            <hr style="margin-bottom: 15px;width: 10%; border: 0.5px solid #e24545">
                            <span class="h-body h-m-body pb-70">Felice tersedia dalam 2 model yaitu F1 merupakan kombinasi antara panel uPVC dan kaca serta F2 merupakan panel uPVC</span>
                            <div class="row">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12 pb-40">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/felice/m-felice.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12 pb-20">
                                        <!-- gambar produk -->
                                        <div class="ps-product--detail pt-30">
                                            <div class="ps-container">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div><img class="" src="<?= base_url('assets/user/images/kategori/splus-door/felice/detail.jpg') ?>" style="max-width: 90%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <br>
                            <span class="h-subtitle h-m-subtitle">Kelebihan S-Plus Pintu Felice & Sash Door:</span> <br>
                            <ul class="a h-body h-m-body">
                                <li>Bahan utama terbuat dari UPVC yang berkualitas tinggi</li>
                                <li>Ramah Lingkungan</li>
                                <li>Tahan di segala cuaca</li>
                                <li>Kokoh, kuat dan tahan lama</li>
                                <li>Anti rayap</li>
                                <li>Mudah pemasangan dan mudah perawatannya</li>
                            </ul>
                            <br>
                            <br>
                            <div class="text-center pb-20">
                                <span class="h-subtitle h-m-title"><strong>Ukuran Standar</strong></span>
                                <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                                <h5> 700 x 1950 </h5> <br>
                                <h5> 700 x 2000 </h5> <br>
                                <h5> 800 x 1000 </h5> <br>
                                <span class="text-danger">* Ukuran dalam hitungan milimeter</span>
                            </div> <br>
                            <!--SASH DOOR-->
                            <center>
                                <span class="h-subtitle h-m-title"><strong>SASH DOOR</strong></span>
                            </center>
                            <hr style="margin-bottom: 15px;width: 15%; border: 0.5px solid #e24545">
                            <div class="row">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12 pb-40">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/sash-door/m-sash-door.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12 pb-40">
                                        <!-- gambar produk -->
                                        <div class="ps-product--detail pt-30">
                                            <div class="ps-container">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div><img class="" src="<?= base_url('assets/user/images/kategori/splus-door/sash-door/sash-door-detail.jpg') ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <br>
                            <div class="text-center">
                                <span class="h-subtitle h-m-title"><strong>Ukuran Standar</strong></span>
                                <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                                <span class="text-danger">* Tersedia ukuran custom</span><br>
                                <span class="text-danger">* Ukuran dalam hitungan milimeter</span>
                            </div> <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>