<?php 
$meta['title']          = 'IRoom - S-Plus Indonesia';
$meta['description']    = 'IRoom adalah produk baru dari PT. Smart Techtex yang menyediakan Jendela dan Pintu berbahan dasar alumunium dengan desain yang menarik serta struktur pintu yang kokoh.';
$meta['keywords']       = 'jual jendela alumunium, jual jendela alumunium murah, jual jendela namo berkualitas, jual jendela namo terbaik, jendela namo murah, jendela alumunium minimalis, jendela alumunium elegan, jendela alumunium terbaik, jendela alumunium berkualitas, jendela s-plus, jendela alumunium, jual pintu alumunium, jual pintu alumunium murah, jual pintu namo berkualitas, jual pintu namo terbaik, pintu namo murah, pintu alumunium minimalis, pintu alumunium elegan, pintu alumunium terbaik, pintu alumunium berkualitas, pintu s-plus, pintu alumunium';
$this->load->view('user/header',$meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if(!$this->agent->is_mobile()): ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                    <aside class="ps-widget--sidebar">
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
                                <li class="sm"><a href="#felice">Felice</a></li>
                                <li class="sm"><a href="#sash">Sash Door</a></li>
                            </ul>   
                            <li class="panel-title" data-toggle="collapse" data-target="#test2">
                                <a href="<?=base_url('kategori/s-plus-upvc-jendela')?>"><b>S-PLUS JENDELA UPVC</b></a></li>
                                <ul id="test2" class="panel-collapse collapse">
                                    <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/kaca-mati')?>">Jendela Kaca Mati</a></li>
                                    <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/jungkit')?>">Jendela Jungkit</a></li>
                                    <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/sliding')?>">Jendela Sliding</a></li>
                                    <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/swing')?>">Jendela Swing</a></li>
                                    <li class="sm"><a href="<?=base_url('kategori/s-plus-upvc-jendela/kombinasi')?>">Jendela Kombinasi</a></li>  
                                </ul> 
                            <li class=" panel-title" data-toggle="collapse" data-target="#test3"><a href="<?=base_url('kategori/s-plus-upvc-plafon')?>"><b>S-PLUS PLAFON UPVC</b></a></li>  
                                    <ul id="test3" class="panel-collapse collapse">
                                        <li class="sm"><a href="#polos">Plafon Polos</a></li>
                                        <li class="sm"><a href="#laminate">Plafon Laminate</a></li>
                                        <li class="sm"><a href="#deco">Plafon Deco</a></li>  
                                    </ul>  
                            <li class="panel-title" data-toggle="collapse" data-target="#test4"><a href="<?=base_url('kategori/s-plus-wpc')?>"><b>S-PLUS WPC</b></a></li>
                                <ul id="test4" class="panel-collapse collapse">
                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
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
                                    <li class="sm"><a href="#chip">CHIP</a></li>
                                    <li class="sm"><a href="#deco">DECO</a></li>
                                </ul>
                            <li><a href="<?=base_url('kategori/s-plus-kitchen-set')?>"><b>S-PLUS KITCHEN SET</b></a></li>
                            <li class="panel-title" data-toggle="collapse" data-target="#test7"><a href="<?=base_url('kategori/s-plus-namo-pintu')?>"><b>S-PLUS NAMO PINTU</b></a></li>
                                <ul id="test7" class="panel-collapse collapse">
                                    <li class="sm"><a href="#laminate-door">Laminate Door</a></li>
                                    <li class="sm"><a href="#eco-door">ECO Door</a></li>
                                    <li class="sm"><a href="#veneer-solid-door">Veneer Solid Door</a></li>
                                    <li class="sm"><a href="#timber-joint-door">Timber Joint Door</a></li>
                                    <li class="sm"><a href="#art-door">ART Door</a></li>
                                </ul>
                                 <li><a href="<?=base_url('kategori/s-plus-pvc-foam-board')?>"><b>S-PLUS PVC FOAM BOARD</b></a></li>
                              
                            <li class="panel-title" data-toggle="collapse" data-target="#test9"><a href="<?=base_url('kategori/s-plus-vinyl-flooring')?>"><b>S-PLUS VINYL FLOORING</b></a></li>
                           <ul id="test9" class="panel-collapse collapse">
                               <li class="sm"><a href="<?=base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring')?>">Vinyl Flooring</a></li>
                                <li class="sm"><a href="<?=base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring')?>">Woven Vinyl Flooring</a></li>
                           </ul>
                           <li class="panel-title current" data-toggle="collapse" data-target="#test10"><a href="<?=base_url('kategori/s-plus-iroom')?>"><b>IROOM</b></a></li>
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
                                    <li><a href="<?=base_url('pemasangan/pintu')?>"><b>S-PLUS PINTU </b></a></li>
                                    <li><a href="<?=base_url('pemasangan/jendela')?>"><b>S-PLUS JENDELA </b></a></li>
                                    <li><a href="<?=base_url('pemasangan/plafon')?>"><b>S-PLUS PLAFON</b></a></li>
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
                            <div id="jssor_1"
                                style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                <!-- Loading Screen -->
                                <div data-u="loading" class="jssorl-004-double-tail-spin"
                                    style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                    <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                                        src="<?=base_url('assets/user/images/banner/double-tail-spin.svg')?>" />
                                </div>
                                <div data-u="slides"
                                    style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                    <div style="background-color:#000000;">
                                        <img data-u="image" 
                                            src="<?=base_url('assets/user/images/kategori/splus-iroom/banner/jendela.jpg')?>" />
                                    </div>
                                    <div style="background-color:#000000;">
                                        <img data-u="image"
                                            src="<?=base_url('assets/user/images/kategori/splus-iroom/banner/pintu.jpg')?>" />
                                    </div>
                                    <div style="background-color:#000000;">
                                        <img data-u="image"
                                            src="<?=base_url('assets/user/images/kategori/splus-iroom/banner/armour.jpg')?>" />
                                    </div>
                                    <div style="background-color:#000000;">
                                        <img data-u="image"
                                            src="<?=base_url('assets/user/images/kategori/splus-iroom/banner/synch.jpg')?>" />
                                    </div>
                                    <div style="background-color:#000000;">
                                        <img data-u="image"
                                            src="<?=base_url('assets/user/images/kategori/splus-iroom/banner/auto.jpg')?>" />
                                    </div>
                                    <div style="background-color:#000000;">
                                        <img data-u="image"
                                            src="<?=base_url('assets/user/images/kategori/splus-iroom/banner/panel.jpg')?>" />
                                    </div>
                                </div>
                                <!-- Bullet Navigator -->
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
                                <!-- Arrow Navigator -->
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
                        </div> <br> <br>
                        
                        <!--IROOM-->
                        <span class="h-body h-m-body"></span>
                        <div class="row pb-20">
                            <center>
                                <span class="h-subtitle h-m-title">IROOM</span> 
                                <hr style="margin-bottom: 15px;width: 40%; border: 0.5px solid #e24545">
                            </center>
                            <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                <span class="h-body h-m-body">
                                IRoom adalah produk baru dari PT. Smart Techtex yang menyediakan Jendela dan Pintu berbahan dasar 
                                alumunium dan telah melalui proses Ekstrusi serta Powder Coating sehingga memiliki bentuk warna yang menarik, 
                                tahan benturan, lebih tahan korosi, memiliki desain yang elegan dan moder, serta sudah memenuhi standar IAF 
                                (International Asosiation Forum), KAN (Komite Standar Nasional), dan ISO 9001.
                                </span>
                            </div>
                            <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px;">
                                <img src="<?=base_url('assets/user/images/kategori/splus-iroom/deskripsi.jpg')?>">
                            </div>
                        </div>
                        <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                        
                        <!--WINDOW-->
                        <div class="row pb-20" style="padding-bottom:10px;">
                            <center>
                                <span class="h-subtitle h-m-title" id="window">IROOM WINDOW</span>
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                            </center>
                            <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                <span class="h-body h-m-body">
                                <b>IROOM WINDOW</b> adalah jendela yang menggunakan bahan alumunium dan telah melalui 
                                proses Ekstrusi dan Powder Coating sehingga memiliki bentuk serta warna yang menarik, tahan benturan dan 
                                lebih tahan korosi. Alumunium telah banyak di aplikasikan dalam kebutuhan material bangunan salah satunya adalah 
                                jendela dan dapat diaplikasikan pada apartemen, perhotelan, perumahan dan pertokoan.
                                </span>
                                
                            </div>
                            <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:35px;">
                                <img src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/detail.jpg')?>">
                            </div>
                            
                            <div style="padding-left:15px; padding-bottom:20px; padding-right:15px;">
                                <span class="h-subtitle h-m-title" >Keunggulan Iroom Window :</span> <br>
                                    <ul class="a" style="text-align:left">
                                        <li class="h-body h-m-body">Mudah dalam Pemasangan dan Perawatan</li>
                                        <li class="h-body h-m-body">Kuat dan Tahan Lama</li>
                                        <li class="h-body h-m-body">Tahan Segala Cuaca</li>
                                        <li class="h-body h-m-body">Memiliki Bentuk dan Warna Menarik</li>
                                    </ul>
                            </div>
                                
                            
                            <!-- Pilihan Jendela -->
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan IRoom Window</span>
                                    <div><img style="padding-top:15px;" src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/jendela1-m.jpg')?>"></div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Jenis IRoom Window</span>
                                    <!-- gambar produk -->
                                    <div><img style="padding-top:15px;" class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/jendela1.jpg')?>"></div>
                                </div>
                            <?php endif; ?>
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px; padding-top:15px;">
                                    <img src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/jendela2-m.jpg')?>">
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:5px; padding-top:15px;">
                                    <!-- gambar produk -->
                                    <img class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/jendela2.jpg')?>">
                                </div>
                            <?php endif; ?>
                        
                        <!-- Pilihan Kaca -->
                        <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:25px;">
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center; font-size: 18px;">Pilihan Kaca</span>
                                <?php if($this->agent->is_mobile()): ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/kaca-m.jpg')?>">
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img class="" src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/kaca.jpg')?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        
                        <!-- Pilihan Warna -->    
                        <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:25px;">
                                <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Warna</span>
                                <?php if($this->agent->is_mobile()): ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/warna-m.jpg')?>">
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/warna.jpg')?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                        
                        <!--DOOR-->
                        <div class="row pb-20" style="padding-bottom:10px;">
                            <center>
                                <span class="h-subtitle h-m-title" id="door">IROOM DOOR</span>
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                            </center>
                            <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                <span class="h-body h-m-body">
                                <b>IROOM DOOR</b> adalah pintu berbahan dasar alumunium yang telah melalui 
                                proses Ekstrusi dan Powder Coating sehingga memiliki bentuk serta warna yang menarik, tahan benturan dan 
                                lebih tahan korosi. Alumunium juga dapat diaplikasikan sebagai pintu engineering door dimana banyak keuntungan 
                                apabila menggunakannya. Dengan desain yang menarik dan modern alumunium memberikan kesan elegan dan berkelas. 
                                Iroom door sendiri memiliki beberapa varian yaitu : Folding Door, Sliding Door, dan Swing Door.
                                </span>
                            </div>
                            
                            <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:35px;">
                                <img src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/detail.jpg')?>">
                            </div>
                            
                            <div style="padding-left:15px; padding-bottom:20px; padding-right:15px;">
                                <span class="h-subtitle h-m-title" >Keunggulan Iroom Door :</span> <br>
                                    <ul class="a" style="text-align:left">
                                        <li class="h-body h-m-body">Mudah dalam Pemasangan dan Perawatan</li>
                                        <li class="h-body h-m-body">Kuat dan Tahan Lama</li>
                                        <li class="h-body h-m-body">Tahan Segala Cuaca</li>
                                        <li class="h-body h-m-body">Memiliki Bentuk dan Warna Menarik</li>
                                    </ul>
                            </div>
                            
                            <!-- Pilihan Pintu -->
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Jenis IRoom Door</span>
                                    <div><img style="padding-top:15px;" src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/pintu1-m.jpg')?>"></div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:5px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Jenis IRoom Door</span>
                                    <!-- gambar produk -->
                                    <div><img style="padding-top:15px;" class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/pintu1.jpg')?>"></div>
                                </div>
                            <?php endif; ?>
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px; padding-top:5px;">
                                    <img src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/pintu2-m.jpg')?>">
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:5px; padding-top:5px;">
                                    <!-- gambar produk -->
                                    <img class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/pintu2.jpg')?>">
                                </div>
                            <?php endif; ?>
                        
                        <!-- Pilihan Pintu -->    
                        <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:45px;">
                                <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan IRoom Door</span>
                                <?php if($this->agent->is_mobile()): ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/pilihan-m.jpg')?>">
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/pilihan.jpg')?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        
                        <!-- Pilihan Kaca -->
                        <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:45px;">
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center; font-size: 18px;">Pilihan Kaca</span>
                                <?php if($this->agent->is_mobile()): ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/kaca-m.jpg')?>">
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img class="" src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/kaca.jpg')?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        
                        <!-- Ukuran Frame -->
                        <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:25px;">
                                <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Ukuran Frame</span>
                                <div><img src="<?=base_url('assets/user/images/kategori/splus-iroom/pintu/ukuran.jpg')?>" width="700" style="padding-top:10px;"></div>
                        </div>
                        
                        <!-- Pilihan Warna -->    
                        <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:25px;">
                                <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Warna</span>
                                <?php if($this->agent->is_mobile()): ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/warna-m.jpg')?>">
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/jendela/warna.jpg')?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                        
                        <!--ARMOUR-->
                        <div class="row pb-20" style="padding-bottom:10px;">
                            <center>
                                <span class="h-subtitle h-m-title" id="armour">IROOM ARMOUR</span>
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                            </center>
                            <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                <span class="h-body h-m-body">
                                <b>IROOM ARMOUR</b> adalah pintu yang menggunakan material alumunium grade 6063 yang dikhususkan untuk material
                                bangunan dan memiliki ketahanan korosi yang tinggi. Iroom Armour dilengkapi dengan case lock berteknologi keamanan 
                                tinggi yang tidak mudah dirusak sehingga akan sangat cocok digunakan untuk perumahan, perhotelan, apartemen, 
                                dan tempat tinggal yang membutuhkan keamanan yang baik.
                                </span>
                            </div>
                            
                            <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:35px;">
                                <img src="<?=base_url('assets/user/images/kategori/splus-iroom/armour/detail.jpg')?>">
                            </div>
                            
                            <div style="padding-left:15px; padding-bottom:20px; padding-right:15px;">
                                <span class="h-subtitle h-m-title" >Keunggulan Iroom Armour :</span> <br>
                                    <ul class="a" style="text-align:left">
                                        <li class="h-body h-m-body">Mudah dalam Pemasangan dan Perawatan</li>
                                        <li class="h-body h-m-body">Kuat dan Tahan Lama</li>
                                        <li class="h-body h-m-body">Tahan Segala Cuaca</li>
                                        <li class="h-body h-m-body">Anti Rayap</li>
                                        <li class="h-body h-m-body">Memiliki Desain yang Modern</li>
                                        <li class="h-body h-m-body">Memiliki Tingkal Keamanan yang Tinggi</li>
                                        <li class="h-body h-m-body">Kedap Suara</li>
                                    </ul>
                            </div>
                            
                            <!-- Pilihan Armour -->
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan IRoom Armour</span>
                                    <div><img style="padding-top:15px;" src="<?=base_url('assets/user/images/kategori/splus-iroom/armour/armour1-m.jpg')?>"></div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Pilihan Jenis IRoom Armour</span>
                                    <!-- gambar produk -->
                                    <div><img style="padding-top:15px;" class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/armour/armour1.jpg')?>"></div>
                                </div>
                            <?php endif; ?>
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:5px; padding-top:15px;">
                                    <img src="<?=base_url('assets/user/images/kategori/splus-iroom/armour/armour2-m.jpg')?>">
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:5px; padding-top:15px;">
                                    <!-- gambar produk -->
                                    <img class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/armour/armour2.jpg')?>">
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                        
                        <!--SYNCH-->
                        <div class="row pb-20" style="padding-bottom:10px;">
                            <center>
                                <span class="h-subtitle h-m-title" id="synch">IROOM SYNCH - 3</span>
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                            </center>
                            <div style="padding-left:15px; padding-bottom:25px; padding-right:15px;">
                                <span class="h-body h-m-body">
                                <b>IROOM SYNCH - 3</b> adalah pintu berbahan alumunium yang menggunakan konsep Sliding Door dengan pengembangan model daun pintu yang dibagi 
                                menjadi 3 bagian dalam 1 set pintu, sehingga memberikan space yang luas untuk area sekitarnya. Pintu ini sangat cocok digunakan untuk perumahan, perkantoran dan apartemen.
                                </span>
                            </div>
                            
                            <div style="padding-left:15px; padding-bottom:20px; padding-right:15px;">
                                <span class="h-subtitle h-m-title" >Keunggulan Iroom Synch - 3 :</span> <br>
                                    <ul class="a" style="text-align:left">
                                        <li class="h-body h-m-body">Mudah dalam Pemasangan dan Perawatan</li>
                                        <li class="h-body h-m-body">Kuat dan Tahan Lama</li>
                                        <li class="h-body h-m-body">Tahan Segala Cuaca</li>
                                        <li class="h-body h-m-body">Memiliki Bentuk Elegan dan Modern</li>
                                    </ul>
                            </div>
                            
                            <!-- Pilihan Synch -->
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Model IRoom Synch - 3</span>
                                    <div><img style="padding-top:15px;" src="<?=base_url('assets/user/images/kategori/splus-iroom/synch/synch-m.jpg')?>"></div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                    <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 18px;">Model IRoom Synch - 3</span>
                                    <!-- gambar produk -->
                                    <div><img style="padding-top:15px;" class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/synch/synch.jpg')?>"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                        
                        <!--AUTO DOOR-->
                        <div class="row pb-20" style="padding-bottom:10px;">
                            <center>
                                <span class="h-subtitle h-m-title" id="auto">IROOM AUTO DOOR</span>
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                            </center>
                            <div style="padding-left:15px; padding-bottom:10px; padding-right:15px;">
                                <span class="h-body h-m-body">
                                <b>IROOM AUTO DOOR</b> adalah pintu sliding dan swing dengan menggunakan teknologi penggerak otomatis sehingga 
                                memudahkan untuk membuka dan menutup pintu. Iroom Auto Door ini menggunakan rangka alumunium grade kontruksi yang kokoh 
                                dan anti korosi. Pintu ini sangat cocok untuk tempat-tempat yang memiliki mobilitas tinggi seperti mall, perkantoran, 
                                gedung serbaguna, dll.
                                </span>
                            </div>
                            
                            <!-- Pilihan Auto Door -->
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                    <div><img style="padding-top:15px;" src="<?=base_url('assets/user/images/kategori/splus-iroom/auto/auto1-m.jpg')?>"></div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                    <div><img style="padding-top:15px;" class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/auto/auto1.jpg')?>"></div>
                                </div>
                            <?php endif; ?>
                        
                        <div style="padding-left:15px; padding-top:25px; padding-right:15px;">
                                <span class="h-subtitle h-m-title" >Keunggulan Iroom Auto Door :</span> <br>
                                    <ul class="a" style="text-align:left">
                                        <li class="h-body h-m-body">Mudah dalam Pemasangan dan Perawatan</li>
                                        <li class="h-body h-m-body">Kuat dan Tahan Lama</li>
                                        <li class="h-body h-m-body">Tahan Segala Cuaca</li>
                                        <li class="h-body h-m-body">Elegan dan Modern</li>
                                        <li class="h-body h-m-body">Memudahkan Keluar Masuk Ruangan yang Bermobilitas Tinggi</li>
                                    </ul>
                            </div>
                        
                        <!-- Pilihan Automatic -->
                        <div class="col-md-12 col-sm-12 col-xs-12">
                                <span class="h-subtitle h-m-title" style=" text-align: center; font-size: 18px;">Pilihan Automatic Door</span>
                                <?php if($this->agent->is_mobile()): ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img style="padding-top:15px;" src="<?=base_url('assets/user/images/kategori/splus-iroom/auto/auto2-m.jpg')?>">
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img style="padding-top:15px;" class="" src="<?=base_url('assets/user/images/kategori/splus-iroom/auto/auto2.jpg')?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                        
                        <!--AUTO PANEL-->
                        <div class="row pb-20" style="padding-bottom:10px;">
                            <center>
                                <span class="h-subtitle h-m-title" id="panel">IROOM PANEL</span>
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                            </center>
                            <div style="padding-left:15px; padding-bottom:15px; padding-right:15px;">
                                <span class="h-body h-m-body">
                                <b>IROOM PANEL</b> adalah 2 (dua) bahan lembaran alumunium yang dikombinasi dengan PE (Polythylene) dan 
                                dipadukan dengan proses Coating. Bahan furniture ini memiliki kekuatan dan kelenturan yang tinggi, 
                                tidak mudah berubah bentuk, tahan api, korosi dan mudah diaplikasikan. Sehingga sangat cocok untuk dipasang 
                                di area outdoor maupun indoor seperti ; Kebutuhan Perabotan, Dekorasi, Cladding, Papan Billboard.
                                </span>
                            </div>
                            <?php if($this->agent->is_mobile()): ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">
                                    <div><img style="padding-top:15px;" src="<?=base_url('assets/user/images/kategori/splus-iroom/panel/panel1-m.jpg')?>"></div>
                                </div>
                            <?php else: ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">
                                    <div><img style="padding-top:15px;" class=""src="<?=base_url('assets/user/images/kategori/splus-iroom/panel/panel1.jpg')?>"></div>
                                </div>
                            <?php endif; ?>
                        
                        <!-- Pilihan Panel -->
                        <div class="col-md-12 col-sm-12 col-xs-12 pt-40" style="padding-top:25px;">
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center; font-size: 18px;">Pilihan Panel</span>
                                <?php if($this->agent->is_mobile()): ?>
                                    <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img src="<?=base_url('assets/user/images/kategori/splus-iroom/panel/panel2-m.jpg')?>">
                                    </div>
                                <?php else: ?>
                                    <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px; padding-left:0px;">
                                        <img class="" src="<?=base_url('assets/user/images/kategori/splus-iroom/panel/panel2.jpg')?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <hr style="margin-bottom: 25px;width: 95%; border: 0.5px solid #000000">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
    <?php $this->load->view('user/footer') ?>