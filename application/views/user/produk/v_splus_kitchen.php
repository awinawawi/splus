<?php
$meta['title']          = 'Kitchen Set - S-Plus Indonesia';
$meta['description']    = 'S-Plus Kitchen Set menggunakan teknologi Solid Surface, PET Film, PP Film, dan Papan Kayu. Untuk dapur terdiri dari beberapa elemen dengan fungsi dan bentuk menyesuaikan kebutuhan pengguna atau ruangan yang tersedia pada sebuah bangunan.';
$meta['keywords']       = 'kitchen set, jual kitchen set, jual kitchen set murah, jual kitchen set berkualitas, jual kitchen set terbaik, kitchen set murah, kitchen set minimalis, kitchen set elegan, kitchen set terbaik, kitchen set berkualitas, kitchen set dapur, kitchen set sederhana, kitchen set minimalis, harga kitchen set';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <!-- <aside class="ps-widget--sidebar ">
                            <div class="ps-widget__header">
                                <h3>KATEGORI</h3>
                            </div>
                            <div class="ps-widget__content ">
                                <ul class="ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b> 
                                        </a>
                                        <ul id="test">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test1a"  ><a href="#">PINTU ABS</a>
                                                <ul id="test1a" class="panel-collapse collapse">
                                                    <li class="sm" ><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                                                    <li class="sm" ><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                                                    <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                                                    <ul>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">General</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Deco</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                                                    </ul>
                                                    <li class="sm" ><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Art Door</a></li>
                                                    <li class="sm" ><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">Exterior Door</a></li>
                                                    <li class="sm" ><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                                                    <li class="sm" ><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li>
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
                                            <li class="sm panel-title" data-toggle="collapse" ><a href="#">PINTU IROOM</a>
                                            </li>
                                        </ul>
                                        
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test2">
                                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>JENDELA</b></a>
                                        <ul id="test2">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test2a"  ><a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>">JENDELA UPVC</a>
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
                                        <a href="<?= base_url('kategori/s-plus-upvc-plafon') ?>"><b>INLIFE</b></a>
                                        <ul id="test3">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3a"  ><a href="<?= base_url('kategori/s-plus-upvc-plafon') ?>">PLAFON UPVC</a>
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
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test4a"  ><a href="<?= base_url('kategori/s-plus-wpc') ?>">WPC</a>
                                                <ul id="test4a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" ><a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PARASOL</b></a></li>
                                            
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>MASKER</b></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="ps-widget__content ">
                                <ul class="ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b>
                                        </a>
                                        <ul id="test">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>">PINTU ABS</a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/upvc') ?>"><b>PINTU UPVC</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/namo') ?>">PINTU NAMO</a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/iroom_door') ?>">PINTU IROOM</a></li>
                                        </ul>

                                    </li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test2">
                                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>JENDELA</b></a>
                                        <ul id="test2">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_upvc') ?>">JENDELA UPVC</a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_IROOM') ?>"><b>JENDELA IROOM</b></a></li>

                                        </ul>
                                    </li>

                                    <li class="panel-title" data-toggle="collapse" data-target="#test3">
                                        <a href="<?= base_url('kategori/s-plus-upvc-plafon/plafon') ?>"><b>INLIFE</b></a>
                                        <ul id="test3">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-plafon/plafon_upvc') ?>">PLAFON UPVC</a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-shead') ?>"><b>SUN SHADE</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>"><b>SOLID SURFACE</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>KITCHEN SET</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>PVC FOAM BOARD</b></a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl_kategori') ?>"><b>VINYL FLOORING</b></a></li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test4">
                                        <a href="<?= base_url('kategori/s-plus-wpc') ?>"><b>OUTLIFE</b></a>
                                        <ul id="test4">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-wpc/wpc_kategori') ?>">WPC</a></li>
                                            <li class="sm"><a href='https://sinargarden.com/parasol'><b>PARASOL</b></a></li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test5">
                                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><b>MASKER</b></a>
                                        <ul id="test5">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-wpc') ?>">MASKER DEWASA</a></li>
                                            <li class="sm"><a href='https://sinargarden.com/parasol'><b>MASKER ANAK-ANAK</b></a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </aside> -->
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/kitchen1.jpg') ?>"> <br> <br>
                            <span class="h-body h-m-body">
                                &nbsp &nbsp S-Plus Kitchen Set menggunakan teknologi Solid Surface, PET Film, PP Film, dan Papan Kayu. Untuk dapur terdiri dari beberapa elemen dengan fungsi dan bentuk menyesuaikan kebutuhan pengguna atau ruangan yang tersedia pada sebuah bangunan. <br>
                                &nbsp &nbsp Beberapa desain menarik dengan bentuk tertentu mampu memberikan keindahan serta kepuasaan penghuni rumah yang biasa menghabiskan waktu untuk kegiataannya, seolah saat berada di dapur terasa sedang duduk di sebuh kafe.
                            </span>
                        </div><br><br>
                        <div class="pb-40">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>UKURAN & LAYOUT KITCHEN SET</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px; width: 43%; border: 0.5px solid #e24545">
                            <div class="row">
                                <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/ukuran/uk-layout.jpg') ?>">
                            </div>
                        </div>
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>MODUL CABINET</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px; width: 23%; border: 0.5px solid #e24545">
                            <div class="row pb-50">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/modul-kabinet.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/modul-kabinet.jpg') ?>">
                                    </div>
                                <?php endif; ?>
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/kabinet.jpg') ?>" style="padding-top: 20px;">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/kabinet.jpg') ?>" style="padding-top: 55px;">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <center>
                                <span class="h-subtitle h-m-title"><strong>PILIHAN WARNA</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px; width: 23%; border: 0.5px solid #e24545">
                            <div class="row pb-50">
                                <div class="col-md-12">
                                    <img src="<?= base_url('assets/user/images/kategori/splus-kitchen/warna.png') ?>">
                                </div>
                            </div>
                            <!--portofolio-->
                            <div class="">
                                <center>
                                    <span class="h-subtitle h-m-title"><strong>PORTFOLIO</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px; width: 15%; border: 0.5px solid #e24545">
                                <div class="row pb-30 gallery-popup">
                                    <div class="mansory">
                                        <img src="<?= base_url('assets/user/images/galeri/kitchen-set/1.jpg') ?>">
                                        <img src="<?= base_url('assets/user/images/galeri/kitchen-set/2.jpg') ?>">
                                        <img src="<?= base_url('assets/user/images/galeri/kitchen-set/3.jpg') ?>">
                                        <img src="<?= base_url('assets/user/images/galeri/kitchen-set/4.jpg') ?>">
                                        <img src="<?= base_url('assets/user/images/galeri/kitchen-set/5.jpg') ?>">
                                        <img src="<?= base_url('assets/user/images/galeri/kitchen-set/6.jpg') ?>">
                                        <img src="<?= base_url('assets/user/images/galeri/kitchen-set/7.jpg') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('user/footer') ?>