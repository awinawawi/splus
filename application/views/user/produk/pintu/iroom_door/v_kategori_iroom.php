<?php
$meta['title']          = 'Pintu ABS - S-Plus Indonesia';
$meta['description']    = 'S-Plus Pintu menjadikan ruangan Anda menjadi nyaman dan penuh ketenangan yang dipancarkan oleh berbagai macam warna dan tekstur yang khas. Dengan tekstur kayu yang sangat mirip dengan kayu yang sebenarnya memberi kesan keindahan yang alami.';
$meta['keywords']       = 'pintu abs, jual pintu abs, jual pintu abs murah, jual pintu abs berkualitas, jual pintu abs terbaik, pintu abs murah, pintu abs minimalis, pintu abs elegan, pintu abs terbaik, pintu abs berkualitas, pintu abs s plus, pintu abs vs upvc';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <!-- desktop view sidebar -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <aside class="ps-widget--sidebar ">
                            <div class="ps-widget__header">
                                <h3>
                                    <a href="<?= base_url('v_kategori') ?>" style="color:#e24545;"> <b>PRODUK</b></a>
                                </h3>
                            </div>
                            <div class=" ps-widget__content ">
                                <ul class=" ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b>
                                        </a>
                                        <ul id="test">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp1"><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>"><b>PINTU ABS</b></a>
                                                <ul id="testsp1" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                                                    <li class="sm panel-title" id="closee"><a href="<?= base_url('kategori/s-plus-pintu/premium') ?>">Premium</a></li>
                                                    <ul>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">General</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Deco</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                                                    </ul>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Art Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">Exterior Door</a></li>
                                                    <!-- <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li> -->
                                                </ul>

                                            </li>

                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp2"><a href="<?= base_url('kategori/s-plus-pintu/upvc') ?>"><b>PINTU UPVC</b></a>
                                                <ul id="testsp2" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu/upvc_felice') ?>">Felice</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu/upvc_sash') ?>">Sash Door</a></li>
                                                </ul>


                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp3"><a href="<?= base_url('kategori/s-plus-pintu/namo') ?>"><b>PINTU NAMO</b></a>
                                                <ul id="testsp3" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu/namo_laminate') ?>">Laminate Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu/namo_eco') ?>">ECO Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu/namo_vaneer') ?>">Veneer Solid Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu/namo_timber') ?>">Timber Joint Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu/namo_artdoor') ?>">ART Door</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/iroom_door') ?>" style="color:#e24545;"><b>PINTU IROOM</b></a></li>
                                        </ul>

                                    </li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test2">
                                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>JENDELA</b></a>
                                        <ul id="test2" class="panel-collapse collapse">
                                            <!-- <li class="sm panel-title" data-toggle="collapse" data-target="#testsp4"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_upvc') ?>"><b>JENDELA UPVC</b></a>
                                                <ul id="testsp4" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>
                                                </ul>

                                            </li> -->
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_upvc') ?>"><b>JENDELA UPVC</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_IROOM') ?>"><b>JENDELA IROOM</b></a></li>

                                        </ul>
                                    </li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test3">
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>INTERIOR MATERIAL</b></a>
                                        <ul id="test3" class="panel-collapse collapse">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp5"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc') ?>"><b>PLAFON UPVC</b></a>
                                                <ul id="testsp5" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/polos') ?>">Plafon Polos</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/laminate') ?>">Plafon Laminate</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/deco') ?>">Plafon Deco</a></li>
                                                </ul>

                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp6"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-shead') ?>"><b>SUN SHADE</b></a>
                                                <ul id="testsp6" class="panel-collapse collapse">
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
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp7"><a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>"><b>SOLID SURFACE</b></a>
                                                <ul id="testsp7" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#chip') ?>">CHIP</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#deco') ?>">DECO</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>KITCHEN SET</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>PVC FOAM BOARD</b></a></li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp8"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl_kategori') ?>"><b>VINYL FLOORING</b></a>
                                                <ul id="testsp8" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pvc-foam-board/ambalan') ?>"><b>AMBALAN (Wall Shelving)</b></a></li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test4">
                                        <a href="<?= base_url('kategori/s-plus-exterior-material') ?>"><b>EXTERIOR MATERIAL</b></a>
                                        <ul id="test4" class="panel-collapse collapse">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp9"><a href="<?= base_url('kategori/s-plus-exterior-material/wpc_kategori') ?>"><b>WPC</b></a>
                                                <ul id="testsp9" class="panel-collapse collapse">
                                                    <li class="sm"><a href="deck-tile">Deck Tile</a></li>
                                                    <li class="sm"><a href="wall-partition">Wall Partition</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href='https://sinargarden.com/parasol'><b>PARASOL</b></a></li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test5">
                                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><b>MASKER</b></a>
                                        <ul id="test5" class="panel-collapse collapse">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/dewasa') ?>"><b>MASKER DEWASA</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/anak') ?>"><b>MASKER ANAK-ANAK</b></a></li>
                                        </ul>
                                    </li>

                                    <li class="title " data-toggle="collapse" data-target="#uu">
                                        <a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>"><b>AKSESORIS</b></a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                <?php endif; ?>
                <!-- desktop view cotent -->

                <div class="col-md-9">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-pintu/room') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c13.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-pintu/armour') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c14.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>


                            <div class="">
                                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                    <!-- Loading Screen -->
                                    <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?= base_url('assets/user/images/banner/double-tail-spin.svg') ?>" />
                                    </div>
                                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                        <div style="background-color:#000000;">
                                            <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-iroom/banner/pintu.jpg') ?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-iroom/banner/auto.jpg') ?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-iroom/banner/armour.jpg') ?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image" src="<?= base_url('assets/user/images/kategori/splus-iroom/banner/synch.jpg') ?>" />
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
                            <span class="h-body h-m-body"></span>
                            <div class="row pb-20">
                                <center>
                                    <span class="h-subtitle h-m-title">IROOM</span>
                                    <hr style="margin-bottom: 15px;width: 40%; border: 0.5px solid #e24545">
                                </center>
                                <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                    <span class="h-body h-m-body">
                                        <b>IROOM </b> adalah produk baru dari PT. Smart Techtex yang menyediakan Jendela dan Pintu berbahan dasar
                                        alumunium dan telah melalui proses Ekstrusi serta Powder Coating sehingga memiliki bentuk warna yang menarik,
                                        tahan benturan, lebih tahan korosi, memiliki desain yang elegan dan moder, serta sudah memenuhi standar IAF
                                        (International Asosiation Forum), KAN (Komite Standar Nasional), dan ISO 9001.
                                    </span>

                                </div>
                                <!-- <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px;">
                                    <img src="<?= base_url('assets/user/images/kategori/splus-iroom/deskripsi.jpg') ?>">
                                </div> -->
                            </div>
                            <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">

                        </div>
                        <br></br>

                        <!-- <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>S-PLUS PINTU IROOM</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-25">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-pintu/room') ?>">
                                                
                                                <img src="<?= base_url('assets/user/images/kategori/produk/pintu/iroom/iroom-ir-d6.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">IROOM DOOR</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-25">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-pintu/armour') ?>">
                                             
                                                <img src="<?= base_url('assets/user/images/kategori/produk/pintu/iroom/iroom-armour-ir-a3.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">IROOM ARMOUR</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-25">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-pintu/coming') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-iroom/banner/synch1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">IROOM SYNCH</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-25">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-pintu/coming') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-iroom/banner/auto1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">IROOM AUTO DOOR</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> -->
                        <div>
                            <center>
                                <h4 class="h-subtitle h-m-title pb10">JENIS-JENIS PINTU IROOM</h4>
                                <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                            </center>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20 ">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-pintu/room') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/produk/icon/IROOM.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                        <h5><B>IROOM DOOR</B></h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-pintu/armour') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/produk/icon/ARMOUR.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                        <h5><B>IROOM ARMOUR</B></h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>