<?php
$meta['title']          = 'Our Produk - S-Plus Indonesia';
$meta['description']    = 'S-Plus Pintu menjadikan ruangan Anda menjadi nyaman dan penuh ketenangan yang dipancarkan oleh berbagai macam warna dan tekstur yang khas. Dengan tekstur kayu yang sangat mirip dengan kayu yang sebenarnya memberi kesan keindahan yang alami.';
$meta['keywords']       = 'pintu abs, jual pintu abs, jual pintu abs murah, jual pintu abs berkualitas, jual pintu abs terbaik, pintu abs murah, pintu abs minimalis, pintu abs elegan, pintu abs terbaik, pintu abs berkualitas, pintu abs s plus, pintu abs vs upvc';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if ($this->agent->is_mobile()) : ?>
                    <label class="float-fab-menu">
                        <input type="checkbox" class="float">
                        <div class="float-menu-box" style="font-size:12px;">
                            <div class="float-menu-circle"><i class="fa fa-navicon"></i></div>
                            <ul class="float-menu-items">
                                <li id="upvc"><a href="<?= base_url('kategori/s-plus-pintu') ?>">PINTU</a></li>
                                <li id="namo"><a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>">JENDELA</a></li>
                                <li id="plafon"><a href="<?= base_url('kategori/s-plus-interior-material') ?>">INTERIOR MATERIALS</a></li>
                                <li id="wpc"><a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>">EXTERIOR MATERIALS</a></li>
                                <li id="wpc"><a href="<?= base_url('kategori/s-plus-face-mask') ?>">MASKER</a></li>
                                <li id="wpc"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">AKSESORIS</a></li>
                            </ul>
                        </div>

                    </label>
                <?php endif; ?>

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
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>INTERIOR MATERIAL</b></a>
                                        <ul id="test3" class="panel-collapse collapse">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp5"><a href="<?= base_url('kategori/s-plus-interior-material_upvc') ?>"><b>PLAFON UPVC</b></a>
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
                    <?php if ($this->agent->is_mobile()) : ?>
                        <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                            <div class="">
                                <center>
                                    <span class="h-subtitle h-m-title"><strong>OUR PRODUCTS</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                                <div class="row pt-20">
                                    <div class="col-sm-4 col-xs-4">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>">
                                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/pintu.webp') ?>" alt="S-Plus Pintu">
                                            <div class="h-box">
                                                <div class="h-box-title-m"><b>PINTU</b></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>">
                                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/jendela.webp') ?>" alt="S-Plus jendela">
                                            <div class="h-box">
                                                <div class="h-box-title-m"><b>JENDELA</b></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>">
                                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/kitchen.webp') ?>" alt="S-Plus Plafon">
                                            <div class="h-box">
                                                <div class="h-box-title-m"><b>INTERIOR MATERIAL</b></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>">
                                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/plafon.webp') ?>" alt="S-Plus WPC">
                                            <div class="h-box">
                                                <div class="h-box-title-m"><b>EXTERIOR MATERIAL</b></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>">
                                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/pvc-foam-board.webp') ?>" alt="S-Plus Mask">
                                            <div class="h-box">
                                                <div class="h-box-title-m"><b>MASKER</b></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4 col-xs-4">
                                        <a href="<?= base_url('kategori/s-plus-aksesoris') ?>">
                                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/namo.webp') ?>" alt="S-Plus Aksesoris">
                                            <div class="h-box">
                                                <div class="h-box-title"><b>AKSESORIS</b></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php else : ?>
                        <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd" style="background: url('<?= base_url('assets/user/images/background/bgproduk/produkbg5.jpg') ?>'); background-size: cover;" class="pt-10">
                            <div class="">
                                <center>
                                    <span class="h-subtitle h-m-title"><strong>OUR PRODUCTS</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                                <div class="container">
                                    <div class="hexagon-box-wrapper-2">
                                        <div class="hexagon-box">
                                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-pintu') ?>'">
                                                <div class="">
                                                    <div class="h-box-title" style="padding-top: 50px;padding-right: 10px;padding-left: 10px;padding-bottom: 10px;">
                                                        <b>PINTU </b>
                                                    </div>
                                                </div>
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/pintu.webp') ?>" class="scl zoom-in" alt="S-Plus Pintu">

                                            </div>
                                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-upvc-jendela') ?>'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/jendela.webp') ?>" class="scl zoom-in" alt="S-Plus Jendela">
                                                <div class="">
                                                    <div class="h-box-title" style="padding-left: 0px;padding-right: 0px;"><b>JENDELA</b></div>
                                                </div>
                                            </div>

                                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-wpc/wpc') ?>'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/plafon.webp') ?>" class="scl zoom-in" alt="S-Plus Plafon">
                                                <div class="h-box">
                                                    <div class="h-box-title"><b>EXTERIOR MATERIAL</b></div>
                                                </div>
                                            </div>

                                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('v_kategori') ?>'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/logo-poduk.png') ?>" class="scl zoom-in" style='width:180px' alt="S-Plus Indonesia">
                                            </div>
                                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-face-mask') ?>'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/pvc-foam-board.webp') ?>" class="scl zoom-in" alt="S-Plus WPC">
                                                <div class="h-box">
                                                    <div class="h-box-title"><b>MASKER</b></div>
                                                </div>
                                            </div>

                                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-aksesoris') ?>'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/namo.webp') ?>" class="scl zoom-in" alt="S-Plus Namo">
                                                <div class="h-box">
                                                    <div class="h-box-title"><b>AKSESORIS</b></div>
                                                </div>
                                            </div>
                                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-interior-material') ?>'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/kitchen.webp') ?>" class="scl zoom-in" alt="S-Plus Kitchen Set">
                                                <div class="h-box">
                                                    <div class="h-box-title"><b>INTERIOR MATERIAL</b></div>
                                                </div>
                                            </div>

                                            <!-- <div class="hexagon-icon" onclick="window.location.href='https://sinargarden.com/parasol'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/parasol.webp') ?>" class="scl zoom-in" alt="S-Plus Sun Shade">
                                                <div class="h-box">
                                                    <div class="h-box-title"><b>SINAR GARDEN</b></div>
                                                </div>
                                            </div> -->
                                            <!-- <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-pintu/iroom_door') ?>'">
                                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/iroom.webp') ?>" class="scl zoom-in" alt="S-Plus Solid Surface">
                                                <div class="h-box">
                                                    <div class="h-box-title"><b>IROOM</b></div>
                                                </div>
                                            </div> -->


                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>