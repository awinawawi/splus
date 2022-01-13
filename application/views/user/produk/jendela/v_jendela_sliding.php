<?php
$meta['title']          = 'Jendela Sliding - S-Plus Indonesia';
$meta['description']    = 'S-Plus jendela sliding merupakan penggabungan pintar antara desain dan teknologi dalam menjadikan tampilan ruangan semakin kaya dan mempesona. S-Plus jendela memiliki design yang minimalis serta cocok dan menyatu dengan ruangan apapun sehingga menjadikan ruang terkesan lebih luas dan rapih.';
$meta['keywords']       = 'jual jendela sliding upvc, jual jendela sliding upvc murah, jual jendela sliding upvc berkualitas, jual jendela sliding upvc terbaik, jendela sliding upvc murah, jendela sliding upvc minimalis, jendela sliding upvc elegan, jendela sliding upvc terbaik, jendela sliding upvc berkualitas,jendela upvc s plus';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <!-- <aside class="ps-widget--sidebar ">
                            <div class="ps-widget__header">
                                <h3>KATEGORI KAMI</h3>
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
                                        <a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>"><b>OUTLIFE</b></a>
                                        <ul id="test4">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-wpc/wpc_kategori') ?>">WPC</a></li>
                                            <li class="sm"><a href='https://sinargarden.com/parasol'><b>PARASOL</b></a></li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test5">
                                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><b>MASKER</b></a>
                                        <ul id="test5">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/dewasa') ?>">MASKER DEWASA</a></li>
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/anak') ?>"><b>MASKER ANAK-ANAK</b></a></li>

                                        </ul>
                                    </li>
                                </ul>
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
                            <div class="ps-widget__header">
                        <h3>PEMASANGAN</h3>
                        </div>
                        <div class="ps-widget__content">
                       <ul class="ps-list--arrow">
                          <li><a href="<?= base_url('pemasangan/pintu') ?>"><b>S-PLUS PINTU</b></a></li>
                          <li><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA</b></a></li>
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
                        <!-- <div class="">
                            <img src="<?= base_url('assets/user/images/kategori/splus-sash/jendela.jpg') ?>" class="pb-20">
                        </div> -->
                        <br>
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>JENDELA SLIDING</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">

                            <div class="row">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-sash/sliding/m-sliding.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-sash/sliding/detail.jpg') ?>">

                                    </div>
                                <?php endif; ?>
                            </div>
                            <br>
                            <div class="">
                                <center>
                                    <span class="h-subtitle h-m-title" style="margin-top: 20px;"><strong>PORTFOLIO</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 18%; border: 0.5px solid #e24545">
                                <div class="row gallery-popup">
                                    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/portfolio/jendela/sliding/sliding-1.jpg') ?>" alt="">
                                    </div>
                                    <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 h-m-pdk">
                                        <img src="<?= base_url('assets/user/images/portfolio/jendela/sliding/sliding-2.jpg') ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('user/footer') ?>