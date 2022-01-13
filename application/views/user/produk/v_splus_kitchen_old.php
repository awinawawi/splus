<?php 
$meta['title']          = 'Kitchen Set - S-Plus Indonesia';
$meta['description']    = 'S-Plus Kitchen Set menggunakan teknologi Solid Surface, PET Film, PP Film, dan Papan Kayu. Untuk dapur terdiri dari beberapa elemen dengan fungsi dan bentuk menyesuaikan kebutuhan pengguna atau ruangan yang tersedia pada sebuah bangunan.';
$meta['keywords']       = 'kitchen set, jual kitchen set, jual kitchen set murah, jual kitchen set berkualitas, jual kitchen set terbaik, kitchen set murah, kitchen set minimalis, kitchen set elegan, kitchen set terbaik, kitchen set berkualitas, kitchen set dapur, kitchen set sederhana, kitchen set minimalis, harga kitchen set';
$this->load->view('user/header',$meta) ?>
<main class="ps-main pt-40">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if(!$this->agent->is_mobile()): ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                    <aside class="ps-widget--sidebar ">
                        <div class="ps-widget__header">
                            <h3>KATEGORI</h3>
                        </div>
                        <div class="ps-widget__content">
                        <ul class="ps-list--arrow">
                       <li class="panel-title" data-toggle="collapse" data-target="#test">
                           <a href="<?=base_url('kategori/s-plus-pintu')?>"><b>S-PLUS PINTU ABS</b></a></li>
                       <ul id="test" class="panel-collapse collapse">
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/classic')?>">Classic</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/fortebello')?>">Fortebello</a></li>
                                <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                                <ul>
                                   <li class="sn" id="menu"><a href="<?=base_url('kategori/s-plus-pintu/premium-general')?>">Premium</a></li>
                                   <li class="sn" id="menu"><a href="<?=base_url('kategori/s-plus-pintu/premium-deco')?>">Premium Deco</a></li>
                                   <li class="sn" id="menu"><a href="<?=base_url('kategori/s-plus-pintu/grande')?>">Grande</a></li>
                                </ul>
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/art-door')?>">Art Door</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/exterior-door')?>">Exterior Door</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/kusen')?>">Kusen</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/aksesoris-pintu')?>">Aksesoris</a></li>
                            </ul>   
                       <li class="panel-title" data-toggle="collapse" data-target="#test8"><a href="<?=base_url('kategori/s-plus-upvc-pintu')?>"><b>S-PLUS PINTU UPVC</b></a></li>
                       <ul id="test8" class="panel-collapse collapse">
                           <li class="sm">Felice & Sash Door</li>
                       </ul>  
                       <li class="panel-title" data-toggle="collapse" data-target="#test2">
                           <a href="<?=base_url('kategori/s-plus-jendela')?>"><b>S-PLUS JENDELA UPVC</b></a></li>
                           <ul id="test2" class="panel-collapse collapse">
                               <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/kaca-mati')?>">Jendela Kaca Mati</a></li>
                               <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/jungkit')?>">Jendela Jungkit</a></li>
                               <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/sliding')?>">Jendela Sliding</a></li>
                               <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/swing')?>">Jendela Swing</a></li>
                               <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/kombinasi')?>">Jendela Kombinasi</a></li>  
                           </ul> 
                       <li class=" panel-title" data-toggle="collapse" data-target="#test3"><a href="<?=base_url('kategori/s-plus-upvc-plafon')?>"><b>S-PLUS PLAFON UPVC</b></a></li>  
                               <ul id="test3" class="panel-collapse collapse">
                                 <li class="sm">Plafon Polos</li>
                                 <li class="sm">Plafon Laminate</li>
                                 <li class="sm">Plafon Deco</li>  
                               </ul> 
                       <li class="panel-title" data-toggle="collapse" data-target="#test4"><a href="<?=base_url('kategori/s-plus-wpc')?>"><b>S-PLUS WPC</b></a></li>
                           <ul id="test4" class="panel-collapse collapse">
                               <li class="sm">Deck Tile</li>
                               <li class="sm">Wall Partition</li>
                           </ul>
                       <li class="panel-title" data-toggle="collapse" data-target="#test5"><a href="<?=base_url('kategori/s-plus-sun-shade')?>"><b>S-PLUS SUN SHADE</b></a></li>
                       <ul id="test5" class="panel-collapse collapse">
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/combi')?>">Combi Roll Screen</a></li>
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/roll-screen')?>">Roll Screen</a></li>
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/sun-screen')?>">Sun Screen</a></li>
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/blackout')?>">Blackout Roll Screen</a></li>
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/vertical')?>">Vertical Blind</a></li>
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/wood')?>">Horizontal Wood</a></li>
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/alumunium')?>">Horizontal Aluminium</a></li>
                            <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/honeycomb')?>">Honeycomb</a></li>
                        </ul>   
                       <li class="panel-title" data-toggle="collapse" data-target="#test6"><a href="<?=base_url('kategori/s-plus-solid-surface')?>"><b>S-PLUS SOLID SURFACE</b></a></li>
                           <ul id="test6" class="panel-collapse collapse">
                               <li class="sm">CHIP</li>
                               <li class="sm">DECO</li>
                           </ul>
                       <li class="current"><a href="<?=base_url('kategori/s-plus-kitchen-set')?>"><b>S-PLUS KITCHEN SET</b></a></li>
                       <li class="panel-title" data-toggle="collapse" data-target="#test7"><a href="<?=base_url('kategori/s-plus-namo-pintu')?>"><b>S-PLUS NAMO PINTU</b></a></li>
                           <ul id="test7" class="panel-collapse collapse">
                               <li class="sm"><a href="<?=base_url('kategori/namo-pintu#laminate-door')?>">Laminate Door</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/namo-pintu#eco-door')?>">ECO Door</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/namo-pintu#veneer-solid-door')?>">Veneer Solid Door</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/namo-pintu#timber-joint-door')?>">Timber Joint Door</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/namo-pintu#art-door')?>">ART Door</a></li>
                           </ul>
                          
                            <li><a href="<?=base_url('kategori/s-plus-pvc-foam-board')?>"><b>S-PLUS PVC FOAM BOARD</b></a></li>
                            
                            <li class="panel-title" data-toggle="collapse" data-target="#test9"><a href="<?=base_url('kategori/s-plus-vinyl-flooring')?>"><b>S-PLUS VINYL FLOORING</b></a></li>
                           <ul id="test9" class="panel-collapse collapse">
                               <li class="sm"><a href="<?=base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring')?>">Vinyl Flooring</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring')?>">Woven Vinyl Flooring</a></li>
                           </ul>
                        </ul>
                        </div>
                        <div class="ps-widget__header">
                            <h3>PEMASANGAN</h3>
                        </div>
                        <div class="ps-widget__content">
                            <ul class="ps-list--arrow">
                                <li><a href="<?=base_url('pemasangan/pintu')?>"><b>S-PLUS PINTU</b></a></li>
                                <li><a href="<?=base_url('pemasangan/jendela')?>"><b>S-PLUS JENDELA </b></a></li>
                                <li><a href="<?=base_url('pemasangan/plafon')?>"><b>S-PLUS PLAFON </b></a></li>
                                <li><a href="<?=base_url('pemasangan/sunshade')?>"><b>S-PLUS SUN SHADE </b></a></li>
                                <li><a href="<?=base_url('pemasangan/wpc')?>"><b>S-PLUS WPC </b></a></li>
                                <li><a href="<?=base_url('pemasangan/kitchen-set')?>"><b>S-PLUS KITCHEN SET </b></a></li>
                                <li><a href="<?=base_url('standar-pengukuran')?>"><b>SOP PENGUKURAN S-PLUS </b></a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <?php endif; ?>
                <div class="col-md-9">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <img src="<?=base_url('assets/user/images/kategori/splus-kitchen/kitchen1.jpg')?>"> <br> <br>
                            <span class="h-body h-m-body">
                                &nbsp &nbsp S-Plus Kitchen Set  menggunakan teknologi Solid Surface, PET Film, PP Film, dan Papan Kayu. Untuk dapur terdiri dari beberapa elemen dengan fungsi dan bentuk menyesuaikan kebutuhan pengguna atau ruangan yang tersedia pada sebuah bangunan. <br>
                                &nbsp &nbsp Beberapa desain menarik dengan bentuk tertentu mampu memberikan keindahan serta kepuasaan penghuni rumah yang biasa menghabiskan waktu untuk kegiataannya, seolah saat berada di dapur terasa sedang duduk di sebuh kafe.
                            </span>
                      </div><br><br>
                        <div class="pb-40">
                          <center>
                              <span class="h-subtitle h-m-title"><strong>UKURAN & LAYOUT KITCHEN SET</strong></span>
                          </center>
                          <hr style="margin-bottom: 25px; width: 43%; border: 0.5px solid #e24545">
                            <div class="row">
                              <img src="<?=base_url('assets/user/images/kategori/splus-kitchen/ukuran/uk-layout.jpg')?>">
                            </div>
                        </div>  
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>MODEL & DESAIN S-PLUS KITCHEN SET</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px; width: 43%; border: 0.5px solid #e24545">
                            <ol class="h-body h-m-body" style="margin-left: 10px;">
                            <div class="row pb-30">
                                <li><b>MODERN</b></li>
                                <p class="h-body h-m-body" style="margin-left: 10px;">
                                  Modern adalah varian desain dapur yang kami tawarkan untuk anda yang menginginkan dapur anda memiliki citra yang modern. Berikut kami juga merekomendasikan warna dan solid surface yang cocok untuk model modern kitchen set dan beberapa aplikasi yang akan di pasang pada model modern kitchen set.
                                </p>
                                <div class="col-md-12">
                                <img class="" src="<?=base_url('assets/user/images/kategori/splus-kitchen/detail-modern.jpg')?>">
                                </div> 
                            </div>    
                              <div class="row pb-30"> 
                                <li><b>CLASSIC</b></li>
                                <p class="h-body h-m-body pt-10" style="margin-left: 10px;">
                                  Classic adalah varian desain dapur yang kami tawarkan untuk anda yang menyukai dapur dengan nuansa sederhana. Berikut kami juga merekomendasikan warna dan solid surface yang cocok untuk model classic kitchen set dan beberapa aplikasi yang akan di pasang pada model classic kitchen set.
                                </p>
                                <div class="col-md-12">
                                <img src="<?=base_url('assets/user/images/kategori/splus-kitchen/detail-classic.jpg')?>" style="width: 100%">
                                </div> 
                              </div>  
                              <div class="row pb-30"> 
                                <li><b>NATURAL</b></li>
                                <p class="h-body h-m-body pt-10" style="margin-left: 10px;">
                                  Natural adalah varian desain dapur yang dibuat untuk anda yang ingin memiliki dapur yang mempunyai kesan alami, sehingga kami memberikan instrumen-instrumen kayu pada setiap detail desainnya. Berikut kami juga merekomendasikan warna dan solid surface yang cocok untuk model natural kitchen set dan beberapa aplikasi yang akan di pasang pada model natural kitchen set.
                                </p>
                                <div class="col-md-12">
                                    <img class="" src="<?=base_url('assets/user/images/kategori/splus-kitchen/detail-natural.jpg')?>">
                                </div> 
                              </div> 
                              <div class="row pb-30"> 
                                <li><b>HYBRID</b></li>
                                <p class="h-body h-m-body pt-10" style="margin-left: 10px;">
                                  Hybrid merupakan desain dapur yang kami desain dengan memadukan dua desain dapur yang berbeda yaitu desain dapur modern dan desain dapur natural, sehingga memancarkan nuansa alami dan elegan di dapur anda. Berikut kami juga merekomendasikan warna dan solid surface yang cocok untuk model hybrid kitchen set dan beberapa aplikasi yang akan di pasang pada model hybrid kitchen set.
                                </p>
                                <div class="col-md-12">
                                <img class="" src="<?=base_url('assets/user/images/kategori/splus-kitchen/detail-hybrid.jpg')?>">
                                </div> 
                              </div>
                            </ol>  
                            </div>
                            <center>
                                <span class="h-subtitle h-m-title"><strong>MODUL CABINET</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px; width: 23%; border: 0.5px solid #e24545">
                            <div class="row pb-50">
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12">
                                    <img src="<?=base_url('assets/user/images/kategori/splus-kitchen/modul-kabinet.jpg')?>">
                                </div>
                            <?php else: ?>
                                <div class="col-md-12">
                                    <img src="<?=base_url('assets/user/images/kategori/splus-kitchen/modul-kabinet.jpg')?>">         
                                </div>
                            <?php endif; ?>
                            </div>
                            <center>
                                <span class="h-subtitle h-m-title"><strong>PILIHAN WARNA</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px; width: 23%; border: 0.5px solid #e24545">
                            <div class="row pb-50">
                                <div class="col-md-12">
                                    <img src="<?=base_url('assets/user/images/kategori/splus-kitchen/pil-warna.jpg')?>">         
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
                                        <img src="<?=base_url('assets/user/images/galeri/kitchen-set/1.jpg')?>">
                                        <img src="<?=base_url('assets/user/images/galeri/kitchen-set/2.jpg')?>">
                                        <img src="<?=base_url('assets/user/images/galeri/kitchen-set/3.jpg')?>">
                                        <img src="<?=base_url('assets/user/images/galeri/kitchen-set/4.jpg')?>">
                                        <img src="<?=base_url('assets/user/images/galeri/kitchen-set/5.jpg')?>">
                                        <img src="<?=base_url('assets/user/images/galeri/kitchen-set/6.jpg')?>">
                                        <img src="<?=base_url('assets/user/images/galeri/kitchen-set/7.jpg')?>">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>