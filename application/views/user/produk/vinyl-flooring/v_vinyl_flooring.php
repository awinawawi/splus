<?php
$meta['title']          = 'Vinyl Flooring - S-Plus Indonesia';
$meta['description']    = 'S-Plus Flooring tersedia untuk segala kebutuhan dengan desain yang unik dan menarik seperti kayu alami dan dapat disesuaikan dengan fungsi ruangan seperti
                                untuk perumahan, hotel, perkantoran, apartemen, rumah sakit, dll. S-Plus memproduksi lantai vinyl yang ramah lingkungan. Vinyl adalah material penutup lantai yang 
                                memiliki karakterisitik lentur namun kuat. Material ini memiliki lima lapisan utama yaitu Base Layer, Blance Layer, Print Sheet, Wear Layer, dan 
                                UV Coating';
$meta['keywords']       = 'vinyl, vinyl flooring, splus vinyl, s-plus vinyl, splus vinyl flooring, splus vinyl flooring, beli vinyl flooring, beli vinyl';
$this->load->view('user/header', $meta) ?>
<main class="ps-main pt-40">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <!-- <aside class="ps-widget--sidebar ">
                        <div class="ps-widget__header">
                            <h3>KATEGORI</h3>
                        </div>
                        <div class="ps-widget__content">
                            <ul class="ps-list--arrow">
                            <li class="panel-title" data-toggle="collapse" data-target="#test">
                                <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>S-PLUS PINTU ABS</b></a></li>
                            <ul id="test">
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
                            
                            <li class="panel-title" data-toggle="collapse" data-target="#test8"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>S-PLUS PINTU UPVC</b></a></li>
                            <ul id="test8" class="panel-collapse collapse">
                                <li class="sm"><a href="#felice">Felice</a></li>
                                <li class="sm"><a href="#sash">Sash Door</a></li>
                            </ul> 
                            
                            <li class="panel-title" data-toggle="collapse" data-target="#test2"><a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>S-PLUS JENDELA UPVC</b></a></li>  
                                <ul id="test2" class="panel-collapse collapse">
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li> 
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kombinasi') ?>">Jendela Kombinasi</a></li> 
                                 </ul>  
                                 
                            <li class="panel-title" data-toggle="collapse" data-target="#test3"><a href="<?= base_url('kategori/s-plus-upvc-plafon') ?>"><b>S-PLUS PLAFON UPVC</b></a></li> 
                                <ul id="test3" class="panel-collapse collapse">
                                    <li class="sm"><a href="#polos">Plafon Polos</a></li>
                                    <li class="sm"><a href="#laminate">Plafon Laminate</a></li>
                                    <li class="sm"><a href="#deco">Plafon Deco</a></li>
                                </ul> 
                                
                            <li class="panel-title" data-toggle="collapse" data-target="#test4"><a href="<?= base_url('kategori/s-plus-wpc') ?>"><b>S-PLUS WPC</b></a></li>
                                <ul id="test4" class="panel-collapse collapse">
                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
                                </ul>
                                
                            <li class="panel-title" data-toggle="collapse" data-target="#test5"><a href="<?= base_url('kategori/s-plus-sun-shade') ?>"><b>S-PLUS SUN SHADE</b></a></li>
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
                                    <li class="sm"><a href="#chip">CHIP</a></li>
                                    <li class="sm"><a href="#deco">DECO</a></li>
                                </ul> 
                                
                            <li><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>S-PLUS KITCHEN SET</b></a></li>
                            
                            <li class="panel-title" data-toggle="collapse" data-target="#test7"><a href="<?= base_url('kategori/s-plus-namo-pintu') ?>"><b>S-PLUS NAMO PINTU</b></a></li>
                                <ul id="test7" class="panel-collapse collapse">
                                    <li class="sm"><a href="<?= base_url('kategori/namo-pintu#laminate-door') ?>">Laminate Door</a></li>
                                <li class="sm"><a href="<?= base_url('kategori/namo-pintu#eco-door') ?>">ECO Door</a></li>
                                <li class="sm"><a href="<?= base_url('kategori/namo-pintu#veneer-solid-door') ?>">Veneer Solid Door</a></li>
                                <li class="sm"><a href="<?= base_url('kategori/namo-pintu#timber-joint-door') ?>">Timber Joint Door</a></li>
                                <li class="sm"><a href="<?= base_url('kategori/namo-pintu#art-door') ?>">ART Door</a></li>
                                </ul>
                                
                            <li><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>S-PLUS PVC FOAM BOARD</b></a></li>
                            
                            <li class="panel-title current" data-toggle="collapse" data-target="#test9"><a href="<?= base_url('kategori/s-plus-vinyl-flooring') ?>"><b>S-PLUS VINYL FLOORING</b></a></li>
                           <ul id="test9" class="panel-collapse collapse">
                                <li class="sm current"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                           </ul>
                           
                           <li class="panel-title" data-toggle="collapse" data-target="#test10"><a href="<?= base_url('kategori/s-plus-iroom') ?>"><b>IROOM</b></a></li>
                                <ul id="test10" class="panel-collapse collapse">
                                    <li class="sm"><a href="#window">IRoom Window</a></li>
                                    <li class="sm"><a href="#door">IRoom Door</a></li>
                                    <li class="sm"><a href="#armour">IRoom Armour</a></li>
                                    <li class="sm"><a href="#synch">IRoom Synch - 3</a></li>
                                    <li class="sm"><a href="#auto">IRoom Auto Door</a></li>
                                    <li class="sm"><a href="#panel">IRoom Panel</a></li>
                                </ul>
                           
                        </ul>
                        </div>
                        <div class="ps-widget__header">
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
                        </div>
                    </aside> -->
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ps-box pb-60 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/banner2.jpg') ?>" class="pb-20">
                        </div> <br>
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>Vinyl Flooring</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                            <p class="h-body h-m-body" style="text-align:justify;">
                                S-Plus Flooring tersedia untuk segala kebutuhan dengan desain yang unik dan menarik seperti kayu alami dan dapat disesuaikan dengan fungsi ruangan seperti
                                untuk perumahan, hotel, perkantoran, apartemen, rumah sakit, dll. S-Plus memproduksi lantai vinyl yang ramah lingkungan. Vinyl adalah material penutup lantai yang
                                memiliki karakterisitik lentur namun kuat. Material ini memiliki lima lapisan utama yaitu Base Layer, Blance Layer, Print Sheet, Wear Layer, dan
                                UV Coating.
                            </p>
                            <div class="row pb-20" style="text-align:center;">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/struktur.jpg') ?>">
                                </div>
                            </div>
                            <p class="h-body h-m-body" style="text-align:justify;">
                                Finishing terluar vinyl adalah UV Coating dan Wear Layer, yang membuat material ini nampak mengkilap dan terkesan licin. Vinyl mempunyai
                                kualitas yang tidak kalah dengan lantai marmer dan mempunyai bermacam-macam corak, warna dan model tergantung dengan selera kita.
                            </p>
                            <div class="row pb-20">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/detail-m.jpg') ?>" style="padding-top:20px;">
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 pt-20" style="padding-top:15px; ">
                                    <span class="h-subtitle h-m-title" style="font-size:23px">Keunggulan Vinyl Flooring :</span><br>
                                    <ul class="a h-body h-m-body">
                                        <li>Elastis dan Ringan</li>
                                        <li>Tahan Guncangan dan Gerakan</li>
                                        <li>Anti Rayap, Bakteri dan Jamur</li>
                                        <li>Tahan Terhadap Cuaca</li>
                                        <li>Mudah Perawatan</li>
                                        <li>Mudah Direnovasi Ulang</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- <div class="pt-20 pb-20">
                                <center>
                                    <span class="h-subtitle h-m-title"><strong>Motif Vinyl Flooring</strong></span>
                                    <hr style="margin-bottom: 5px;width: 40%; border: 0.5px solid #e24545">
                                </center>
                                <div class="row pt-20">
                                    <h3 style="padding-left: 15px;"><b>Wood</b></h3>
                                    <hr style="width: 18%; border: 0.5px solid #e24545; margin-left:15px;">
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/wood01.png') ?>" style="padding-top:10px; ">
                                    </div>
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/wood02.png') ?>" style="padding-top:10px; ">
                                    </div>
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/wood03.png') ?>" style="padding-top:10px; ">
                                    </div>
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/wood04.png') ?>" style="padding-top:10px; ">
                                    </div>
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/wood05.png') ?>" style="padding-top:10px; ">
                                    </div>
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/wood06.png') ?>" style="padding-top:10px; ">
                                    </div>
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/wood07.png') ?>" style="padding-top:10px; ">
                                    </div>
                                </div>
                                <div class="row pt-20">
                                    <h3 style="padding-left: 15px;"><b>Carpet</b></h3>
                                    <hr style="width: 18%; border: 0.5px solid #e24545; margin-left:15px;">
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/motif-carpet-new.png') ?>" style="padding-top:10px; width:90%;">
                                    </div>
                                </div>
                                <div class="row pt-20">
                                    <h3 style="padding-left: 15px;"><b>Stone</b></h3>
                                    <hr style="width: 18%; border: 0.5px solid #e24545; margin-left:15px;">
                                    <div class="col md-12 col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/motif-stone-new.png') ?>" style="padding-top:10px; width:67%;">
                                    </div>
                                </div>
                            </div> -->
                            <div class="">
                                <center style="padding-top: 20px;">
                                    <span class="h-subtitle h-m-title"><strong>Rekomendasi Aplikasi</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 30%; border: 0.5px solid #e24545">
                                <div class="row pb-20">
                                    <!-- <h3 style="padding-left: 15px; margin-top: 0px;"><b>Living Room</b></h3> -->
                                    <hr style="width: 18%; border: 0.5px solid #e24545; margin-left:15px;">
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12">
                                            <!-- <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/lr-m.jpg') ?>" style="padding-top:10px;"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/vinyl/wood-m.jpg') ?>" style="padding-top:10px;">
                                            <img src="<?= base_url('assets/user/images/kategori/produk/vinyl/stone-m.jpg') ?>" style="padding-top:10px;">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12">
                                            <!-- <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/lr.jpg') ?>" style="padding-top:10px;"> -->
                                            <img src="<?= base_url('assets/user/images/kategori/produk/vinyl/wood.jpg') ?>" style="padding-top:10px;">
                                            <img src="<?= base_url('assets/user/images/kategori/produk/vinyl/stone.jpg') ?>" style="padding-top:10px;">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <!-- <div class="row pb-20">
                                    <h3 style="padding-left: 15px;"><b>Kitchen</b></h3>
                                    <hr style="width: 28%; border: 0.5px solid #e24545; margin-left:15px;">
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/kit-m.jpg') ?>" style="padding-top:10px;">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/kit.jpg') ?>" style="padding-top:10px;">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="row">
                                    <h3 style="padding-left: 15px;"><b>Bedroom</b></h3>
                                    <hr style="width: 22%; border: 0.5px solid #e24545; margin-left:15px;">
                                    <?php if ($this->agent->is_mobile()) : ?>
                                        <div class="col-sm-12 col-xs-12">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/bed-m.jpg') ?>" style="padding-top:10px;">
                                        </div>
                                    <?php else : ?>
                                        <div class="col-md-12">
                                            <img src="<?= base_url('assets/user/images/kategori/splus-vinyl-flooring/vinyl-flooring/bed.jpg') ?>" style="padding-top:10px;">
                                        </div>
                                    <?php endif; ?>
                                </div> -->
                                <br>
                                <!--    <div class="pt-40 text-center">
                                <span class="h-subtitle h-m-title"><strong>PORTFOLIO</strong></span>
                                <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">  <br>
                                <div class="row pt-20">
                                    
                                </div>
                            </div> -->
                                <div class="row pt-40">
                                    <div class="col-md-12 col-sm-6 col-xs-12">
                                        <center><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl_kategori') ?>" class="ps-btn h-m-body">Kembali</a></center>
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