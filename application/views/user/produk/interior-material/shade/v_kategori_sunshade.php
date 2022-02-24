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
                                    <a href="<?= base_url('v_kategori') ?>"> <b>PRODUK</b></a>
                                </h3>
                            </div>

                            <div class="ps-widget__content ">
                                <ul class="ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b>
                                        </a>
                                        <ul id="test" class="panel-collapse collapse">
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
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#felice') ?>">Felice</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#sash') ?>">Sash Door</a></li>
                                                </ul>


                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp3"><a href="<?= base_url('kategori/s-plus-pintu/namo') ?>"><b>PINTU NAMO</b></a>
                                                <ul id="testsp3" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#laminate-door') ?>">Laminate Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#eco-door') ?>">ECO Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#veneer-solid-door') ?>">Veneer Solid Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#timber-joint-door') ?>">Timber Joint Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#art-door') ?>">ART Door</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/iroom_door') ?>"><b>PINTU IROOM</b></a></li>
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
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>" style="color:#e24545;"><b>INTERIOR MATERIAL</b></a>
                                        <ul id="test3">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp5"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc') ?>"><b>PLAFON UPVC</b></a>
                                                <ul id="testsp5" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc#polos') ?>">Plafon Polos</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc#laminate') ?>">Plafon Laminate</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc#deco') ?>">Plafon Deco</a></li>
                                                </ul>

                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp6"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-shead') ?>" style="color:#e24545;"><b>SUN SHADE</b></a>
                                                <ul id="testsp6">
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
                                        <a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>"><b>EXTERIOR MATERIAL</b></a>
                                        <ul id="test4" class="panel-collapse collapse">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp9"><a href="<?= base_url('kategori/s-plus-wpc/wpc_kategori') ?>"><b>WPC</b></a>
                                                <ul id="testsp9" class="panel-collapse collapse">
                                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
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

                                    <li class="panel-title" data-toggle="collapse" data-target="#aks1">
                                        <a href="<?= base_url('kategori/s-plus-aksesoris') ?>"><b>AKSESORIS</b>
                                        </a>
                                        <ul id="aks1" class="panel-collapse collapse">
                                            <!-- <li class="sm panel-title" data-toggle="collapse" data-target="#aks2"><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>"><b>PINTU</b></a>
                                                <ul id="aks2" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Handle & Mortise</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Hinge</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Kusen Pintu</a></li>

                                                </ul>
                                            </li> -->
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-aksesoris/aksesoris_pintu') ?>"><b>PINTU</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-aksesoris/aksesoris_aoutomatic') ?>"><b>AUTOMATIC</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-aksesoris/aksesoris_cubicle') ?>"><b>CUBICLE</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-aksesoris/aksesoris_jendela') ?>"><b>JENDELA</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-aksesoris/aksesoris_kitchenset') ?>"><b>KITCHEN SET</b></a></li>
                                        </ul>
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
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c18.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c19.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c20.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c21.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-top: 15px;">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c22.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-top: 15px;">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c23.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-top: 15px;">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c24.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6" style="padding-top: 15px;">
                                    <div class="text-center">
                                        <div class="img-fluid mb-4">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">
                                                <img src="<?= base_url('assets/user/images/background/bgproduk/c25.jpg') ?>" alt="" class="scl zoom-in">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <img src="<?= base_url('assets/user/images/kategori/splus-shade/shade1.jpg') ?>"> <br> <br>

                            <span class="h-body h-m-body">
                                &nbsp&nbsp S-Plus Sun shade dirancang untuk anda yang mengutamakan kenyamanan dan kualitas hidup
                                yang sehat.
                                S-Plus Sun shade berfungsi sebagai pelindung ruangan dari sinar matahari & pendukung
                                keindahan interior anda,
                                tidak hanya berfungsi sebagai pelindung ruangan dari efek negatif panas dan cahaya sinar
                                matahari tapi juga
                                S-Plus Sun shade juga dirancang untuk mengatur intensitas cahaya yang masuk kedalam
                                ruangan. <br>
                                &nbsp&nbsp Selain itu S-Plus Sun shade juga menambah nilai estetika interior ruangan. Dengan design
                                yang elegan dan modern,
                                S-Plus Sun shade sangat cocok diaplikasikan pada ruang perkantoran, apartemen, residence
                                hotel, rumah sakit, cafe dan
                                lain-lain.
                            </span> <br> <br>
                            <span class="h-subtitle h-m-title"><b>Kelebihan S-Plus Sun Shade</b> :</span> <br>
                            <ul class="a h-body h-m-body">
                                <li>Di produksi dengan kualitas bahan PVC & Polyester
                                    terbaik</li>
                                <li>Ramah lingkungan</li>
                                <li>Mudah Perawatan.</li>
                                <li>Anti Bakteri.</li>
                            </ul>
                        </div>
                        <br></br>

                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>S-PLUS PLAFON SUN SHADE</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/combi/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">COMBI ROOL SCREEN</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/roll-screen/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">ROOL SCREEN </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/sun-screen/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">SUN SCREEN</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/blackout/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">BLACKOUT ROLL SCREEN</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/vert-blind/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">VERTICAL BLIND</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/wood-blind/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">HORIZONTAL WOOD</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/alumunium/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">HORIZONTAL ALUMUNIUM</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/honeycomb/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">HONEYCOMB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                                <?php $query = $this->db->query('SELECT b.nama_kategori,a.varian_nama,a.varian_type,a.varian_gambar_utama,
                                                                a.varian_harga_meter,c.produk_slug FROM tbl_produk_type a INNER JOIN tbl_kategoriproduk b 
                                                                ON a.produk_id=b.id_kategori_produk INNER JOIN tbl_produk c ON a.produk_id=c.produk_id 
                                                                ');
                                foreach ($query->result_array() as $kat) {

                                ?>

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20" data-layout="grid-4-full" data-with-features="false">
                                        <div class="container_images">

                                            <div class="content_img">
                                             
                                                <a href="<?= base_url('order/produk/') . $kat['produk_slug']; ?>">
                                                    <img src="<?= base_url('assets/user/images/kategori/produk/' . $kat['varian_gambar_utama']) ?>" class="image" width="80%">
                                                    <div>More Detail</div>
                                                </a>
                                            </div>

                                            <div class="text-overlay-ss">
                                                <a class="syahrul text-sm"><b>Type: </b><?= $kat['varian_type'] ?></a>
                                                <a><br></a>
                                                <a class="syahrul text-sm"><b>Kategori: </b><?= $kat['varian_nama'] ?></a>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="products-view__pagination ">
                                        <?php echo $this->pagination->create_links(); ?>
                                    </div>

                                <?php } ?>
                            </div> -->


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>