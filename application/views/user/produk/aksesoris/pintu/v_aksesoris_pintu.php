<?php
$meta['title']          = 'Aksesoris Pintu - S-Plus Indonesia';
$meta['description']    = 'S-Plus Pintu menjadikan ruangan Anda menjadi nyaman dan penuh ketenangan yang dipancarkan oleh berbagai macam warna dan tekstur yang khas. Dengan tekstur kayu yang sangat mirip dengan kayu yang sebenarnya memberi kesan keindahan yang alami.';
$meta['keywords']       = 'pintu abs, jual pintu abs, jual pintu abs murah, jual pintu abs berkualitas, jual pintu abs terbaik, pintu abs murah, pintu abs minimalis, pintu abs elegan, pintu abs terbaik, pintu abs berkualitas, pintu abs s plus, pintu abs vs upvc';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <!-- desktop view sidebar -->

                    <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
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

                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_upvc') ?>"><b>JENDELA UPVC</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_IROOM') ?>"><b>JENDELA IROOM</b></a></li>

                                        </ul>
                                    </li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test3">
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>INTERIOR MATERIAL</b></a>
                                        <ul id="test3" class="panel-collapse collapse">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#testsp5"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc') ?>"><b>PLAFON UPVC</b></a>
                                                <ul id="testsp5" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc#polos') ?>">Plafon Polos</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc#laminate') ?>">Plafon Laminate</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc#deco') ?>">Plafon Deco</a></li>
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
                                                <ul id="testsp7">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface/chip') ?>">CHIP</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface/deco') ?>">DECO</a></li>
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
                                        <a href="<?= base_url('kategori/s-plus-aksesoris') ?>" style="color:#e24545;"><b>AKSESORIS</b>
                                        </a>
                                        <ul id="aks1">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#aks2"><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>"><b>PINTU</b></a>
                                                <ul id="aks2" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Handle & Mortise</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Hinge</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Kusen Pintu</a></li>

                                                </ul>
                                            </li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>"><b>AUTOMATIC</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>"><b>CUBICLE</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>"><b>JENDELA</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>"><b>KITCHEN SET</b></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </aside>
                    </div> -->
                <?php endif; ?>
                <!-- desktop view cotent -->

                <!-- <div class="col-md-9">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <img src="<?= base_url('assets/user/images/kategori/splus-door/accesories/accesories.jpg') ?>"> <br> <br>
                            <span class="h-body h-m-body">
                                &nbsp &nbsp S-Plus Pintu Aksesoris adalah aksesoris terbaik harga terjangkau kualitas dewa.
                            </span> <br> <br>
                            <span class="h-subtitle h-m-title"><b>Kelebihan S-Plus Pintu Aksesoris : </b> </span>
                            <ul class="a h-body h-m-body">
                                <li>Kuat & Ringan</li>
                                <li>Tidak Berpori</li>
                                <li>Mudah Perawatan</li>
                                <li>Mudah dibersihkan</li>
                            </ul>
                            <br></br>
                            <div class="">
                                <center>
                                    <span class="h-subtitle h-m-title"><strong>S-Plus Jenis Pintu Aksesoris</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                        <div class="container_images">
                                            <div class="content_img">
                                                <a href="<?= base_url('kategori/s-plus-solid-surface/chip') ?>">
                                                    <img src="<?= base_url('assets/user/images/kategori/produk/aksesoris/handle2.jpg') ?>" alt="" class="image" width="80%">
                                                    <div>More Detail</div>
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <div class="text-overlay-ss">Handle & Mortise </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                        <div class="container_images">
                                            <div class="content_img">
                                                <a href="<?= base_url('kategori/s-plus-solid-surface/deco') ?>">
                                                    <img src="<?= base_url('assets/user/images/kategori/produk/aksesoris/hige.jpg') ?>" alt="" class="image" width="80%">
                                                    <div>More Detail</div>
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <div class="text-overlay-ss">Hinge</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
                                        <div class="container_images">
                                            <div class="content_img">
                                                <a href="<?= base_url('kategori/s-plus-solid-surface/deco') ?>">
                                                    <img src="<?= base_url('assets/user/images/kategori/produk/aksesoris/kusen.png') ?>" alt="" class="image" width="80%">
                                                    <div>More Detail</div>
                                                </a>
                                            </div>
                                            <div class="text-center">
                                                <div class="text-overlay-ss">Kusen Pintu</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div>
                            <h4><a href="<?= base_url('v_kategori') ?>"><b>Produk </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-aksesoris') ?>"><b> Aksesoris </b></a><span class="fa fa-chevron-right"></span><b>Pintu</b></h4>
                            <br>
                        </div>
                        <!-- <div style="margin-top: 10px;">
                            <center> <img src="<?= base_url('assets/images/ourproduk/logo.jpg') ?>" style="width: 300px;">
                            </center>
                            <CENTER>
                                <h2>COMING SOON</h2>
                            </CENTER>
                        </div> -->

                        <center>
                            <span class="h-subtitle h-m-title" style="padding-bottom: 10px;" id="plafon"><strong>Jenis-Jenis Pintu Aksesoris</strong></span>
                        </center>
                        <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                        <div class="row pb-40">
                            <?php if ($this->agent->is_mobile()) : ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/kategori/produk/kategori/aksesoris/acc-pintu-m.jpg') ?>">
                                </div>
                            <?php else : ?>
                                <div class="col-md-12 pb-20 gallery-popup">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/produk/aksesoris/acc-pintu.jpg') ?>">
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="row pt-40">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <center><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>" class="ps-btn h-m-body">Lihat Kusen</a></center>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('user/footer') ?>