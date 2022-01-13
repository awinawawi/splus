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
                                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>JENDELA</b></a>
                                        <ul id="test2">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test2a"><a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>">JENDELA UPVC</a>
                                                <ul id="test2a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test2b"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>JENDELA IROOM</b></a>
                                                <ul id="test2b" class="panel-collapse collapse">

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test3">
                                        <a href="<?= base_url('kategori/s-plus-upvc-plafon/plafon') ?>"><b>INLIFE</b></a>
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
                                        <a href="<?= base_url('kategori/s-plus-wpc') ?>"><b>OUTLIFE</b></a>
                                        <ul id="test4">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test4a"><a href="<?= base_url('kategori/s-plus-wpc') ?>">WPC</a>
                                                <ul id="test4a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title"><a href='https://sinargarden.com/parasol'><b>PARASOL</b></a></li>

                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><b>MASKER</b></a>
                                    </li>





                                    <!-- <ul id="test">
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
                                </ul>   -->
                                </ul>
                            </div>
                            <!-- <div class="ps-widget__header">
                            <h3>PEMASANGAN</h3>
                        </div>
                        <div class="ps-widget__content">
                            <ul class="ps-list--arrow">
                                <li><a href="<?= base_url('pemasangan/pintu') ?>"><b>S-PLUS PINTU</b></a></li>
                                <li><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA </b></a></li>
                                <li><a href="<?= base_url('pemasangan/plafon') ?>"><b>S-PLUS PLAFON </b></a></li>
                                <li><a href="<?= base_url('pemasangan/sunshade') ?>"><b>S-PLUS SUN SHADE </b></a></li>
                                <li><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC </b></a></li>
                                <li><a href="<?= base_url('pemasangan/kitchen-set') ?>"><b>S-PLUS KITCHEN SET </b></a></li>
                                <li><a href="<?= base_url('standar-pengukuran') ?>"><b>SOP PENGUKURAN S-PLUS </b></a></li>
                            </ul>
                        </div> -->
                        </aside>
                    </div>
                <?php endif; ?>
                <!-- desktop view cotent -->

                <!-- <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <div class="">
                                <div id="jssor_1"
                                    style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                   
                                    <div data-u="loading" class="jssorl-004-double-tail-spin"
                                        style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                                            src="<?= base_url('assets/user/images/banner/double-tail-spin.svg') ?>" />
                                    </div>
                                    <div data-u="slides"
                                        style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                        
                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/classic/classic1.jpg') ?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/fortabello/fortebello1.jpg') ?>" />
                                        </div>

                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/premium-series/premium1.jpg') ?>" />
                                        </div>
                                        
                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/premium-deco/premium-deco.jpg') ?>" />
                                        </div>
                                        
                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/grande/grande.jpg') ?>" />
                                        </div>
                                        
                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/art-door/art-door.jpg') ?>" />
                                        </div>
                                        
                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/exterior-door/exterior-door.jpg') ?>" />
                                        </div>

                                        <div style="background-color:#000000;">
                                            <img data-u="image" 
                                                src="<?= base_url('assets/user/images/kategori/splus-door/accesories/accesories.jpg') ?>" />
                                        </div>
                                    </div>
                                   
                                    <div data-u="navigator" class="jssorb031"
                                        style="position:absolute;bottom:16px;right:16px;" data-autocenter="1"
                                        data-scale="0.5" data-scale-bottom="0.75">
                                        <div data-u="prototype" class="i" style="width:13px;height:13px;">
                                            <svg viewbox="0 0 16000 16000"
                                                style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                
                                    <div data-u="arrowleft" class="jssora051"
                                        style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2"
                                        data-scale="0.75" data-scale-left="0.75">
                                        <svg viewbox="0 0 16000 16000"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                        </svg>
                                    </div>
                                    <div data-u="arrowright" class="jssora051"
                                        style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2"
                                        data-scale="0.75" data-scale-right="0.75">
                                        <svg viewbox="0 0 16000 16000"
                                            style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                        </svg>
                                    </div>
                                </div>
                            </div> <br>
                            <span class="h-body h-m-body">
                                &nbsp &nbsp <b>ABS</b> atau Acrylonitrile Butadiene Styrene adalah Polimer Organik pembentuk plastik yang sangat kuat. ABS mempunyai kekuatan kejut dan kekenyalan yang tinggi sehingga sesuai untuk komponen yang bergerak. <br><br>
                                &nbsp &nbsp Dengan keunggulan jenis plastik ini maka kami mengaplikasikan untuk bahan dasar pintu. Kekuatan dan sifat kenyalnya kami terapkan pada lapisan bagian luar pintu.
                            </span>
                            <br> <br>
                            <center>
                            <h4 class="h-subtitle h-m-title pb10">STRUKTUR S-PLUS PINTU</h4>
                            </center>
                            <hr style="margin-bottom: 25px;width: 30%; border: 0.5px solid #e24545">
                            <div class="row">
                               <div class="col-md-6 col-sm-12 col-xs-12">
                                   <img src="<?= base_url('assets/user/images/kategori/splus-door/struktur ABS.png') ?>" alt="">
                               </div>   
                               <div class="col-md-6 col-sm-12 col-xs-12 pt-15">
                                   <span class="h-subtitle h-m-title">Keunggulan S-Plus Pintu :</span> <br>
                                <ul class="a" style="text-align:left">
                                    <li class="h-body h-m-body">Bahan terbuat dari ABS</li>
                                    <li class="h-body h-m-body">Material berkualitas tinggi</li>
                                    <li class="h-body h-m-body">Ramah Lingkungan</li>
                                    <li class="h-body h-m-body">Tahan Segala Cuaca</li>
                                    <li class="h-body h-m-body">Anti Rayap</li>
                                    <li class="h-body h-m-body">Mudah Dalam Pemasangan dan Perawatan</li>
                                    <li class="h-body h-m-body">Tidak Memuai dan Menyusut</li>
                                </ul>
                               </div> 
                            </div><br>
                        
                        <div class="row pt-40"> 
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <center><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>" class="ps-btn h-m-body">Lihat Kusen</a></center>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 btnCtg">
                                    <center><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>" class="ps-btn h-m-body">Lihat Aksesoris</a></center>
                                </div>
                            </div>         
                        </div>
                        <br>
                    </div>
                </div> -->

                <div class="col-md-9">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>OUR PRODUCTS</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-25">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-pintu') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/combi/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">PINTU</div>
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
                                            <div class="text-overlay-ss">JENDELA</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-50">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/sun-screen/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">INLIFE</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-50">
                                    <div class="container_images">
                                        <div class="content_img">
                                            <a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">
                                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/blackout/1.jpg') ?>" alt="" class="image" width="80%">
                                                <div>More Detail</div>
                                            </a>
                                        </div>
                                        <div class="text-center">
                                            <div class="text-overlay-ss">OUTLIFE</div>
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
                                            <div class="text-overlay-ss">MASKER</div>
                                        </div>
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