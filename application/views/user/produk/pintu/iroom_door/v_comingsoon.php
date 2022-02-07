<?php
$meta['title']          = 'IRoom - S-Plus Indonesia';
$meta['description']    = 'IRoom adalah produk baru dari PT. Smart Techtex yang menyediakan Jendela dan Pintu berbahan dasar alumunium dengan desain yang menarik serta struktur pintu yang kokoh.';
$meta['keywords']       = 'jual jendela alumunium, jual jendela alumunium murah, jual jendela namo berkualitas, jual jendela namo terbaik, jendela namo murah, jendela alumunium minimalis, jendela alumunium elegan, jendela alumunium terbaik, jendela alumunium berkualitas, jendela s-plus, jendela alumunium, jual pintu alumunium, jual pintu alumunium murah, jual pintu namo berkualitas, jual pintu namo terbaik, pintu namo murah, pintu alumunium minimalis, pintu alumunium elegan, pintu alumunium terbaik, pintu alumunium berkualitas, pintu s-plus, pintu alumunium';
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
                        <div class="ps-widget__content">
                            <ul class="ps-list--arrow">
                            <li class="panel-title" data-toggle="collapse" data-target="#test">
                                <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>S-PLUS PINTU ABS</b></a></li>
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
                            <li class="panel-title" data-toggle="collapse" data-target="#test8"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>S-PLUS PINTU UPVC</b></a></li>
                            <ul id="test8" class="panel-collapse collapse">
                                <li class="sm"><a href="#felice">Felice</a></li>
                                <li class="sm"><a href="#sash">Sash Door</a></li>
                            </ul>   
                            <li class="panel-title" data-toggle="collapse" data-target="#test2">
                                <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>S-PLUS JENDELA UPVC</b></a></li>
                                <ul id="test2" class="panel-collapse collapse">
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li>
                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>  
                                </ul> 
                            <li class=" panel-title" data-toggle="collapse" data-target="#test3"><a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>S-PLUS PLAFON UPVC</b></a></li>  
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
                                    <li class="sm"><a href="#laminate-door">Laminate Door</a></li>
                                    <li class="sm"><a href="#eco-door">ECO Door</a></li>
                                    <li class="sm"><a href="#veneer-solid-door">Veneer Solid Door</a></li>
                                    <li class="sm"><a href="#timber-joint-door">Timber Joint Door</a></li>
                                    <li class="sm"><a href="#art-door">ART Door</a></li>
                                </ul>
                                 <li><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>S-PLUS PVC FOAM BOARD</b></a></li>
                              
                            <li class="panel-title" data-toggle="collapse" data-target="#test9"><a href="<?= base_url('kategori/s-plus-vinyl-flooring') ?>"><b>S-PLUS VINYL FLOORING</b></a></li>
                           <ul id="test9" class="panel-collapse collapse">
                               <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                           </ul>
                           <li class="panel-title current" data-toggle="collapse" data-target="#test10"><a href="<?= base_url('kategori/s-plus-iroom') ?>"><b>IROOM</b></a></li>
                                <ul id="test10" class="panel-collapse collapse">
                                    <li class="sm"><a href="#window">IRoom Window</a></li>
                                    <li class="sm"><a href="#door">IRoom Door</a></li>
                                    <li class="sm"><a href="#armour">IRoom Armour</a></li>
                                    <li class="sm"><a href="#synch">IRoom Synch - 3</a></li>
                                    <li class="sm"><a href="#auto">IRoom Auto Door</a></li>
                                    <li class="sm"><a href="#panel">IRoom Panel</a></li>
                                </ul>
                        </ul>
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
                        <!--SYNCH-->
                        <div class="row pb-20" style="padding-bottom:10px;">

                            <!-- Pilihan Synch -->
                            <?php if ($this->agent->is_mobile()) : ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Model IRoom Synch - 3</span>
                                    <div><img style="padding-top:15px;" src="<?= base_url('assets/user/images/kategori/splus-iroom/synch/synch-m.jpg') ?>"></div>
                                </div>
                            <?php else : ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">

                                    <!-- gambar produk -->
                                    <div><img style="padding-top:15px;" class="" src="<?= base_url('assets/user/images/kategori/splus-iroom/synch/1.jpg') ?>"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('user/footer') ?>