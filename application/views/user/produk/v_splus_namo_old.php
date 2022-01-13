<?php 
$meta['title']          = 'Namo Pintu - S-Plus Indonesia';
$meta['description']    = 'Pintu kayu yang kualitasnya lebih baik di atas standar pada umumnya direkomendasikan untuk perumahan sederhana degan desain minimalis dan struktur pintu yg kuat.';
$meta['keywords']       = 'jual pintu namo, jual pintu namo murah, jual pintu namo berkualitas, jual pintu namo terbaik, pintu namo murah, pintu namo minimalis, pintu namo elegan, pintu namo terbaik, pintu namo berkualitas, pintu s plus, pintu kayu';
$this->load->view('user/header',$meta) ?>
<main class="ps-main pt-40">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if(!$this->agent->is_mobile()): ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd" >
                    <aside class="ps-widget--sidebar ">
                        <div class="ps-widget__header">
                            <h3>KATEGORI</h3>
                        </div>
                        <div class="ps-widget__content">
                        <ul class="ps-list--arrow">
                          <li class="panel-title" data-toggle="collapse" data-target="#test">
                              <a href="<?=base_url('kategori/s-plus-pintu')?>"><b>S-PLUS PINTU ABS</b></a></li>
                          <ul id="test" class="panel-collapse collapse">
                             
                             <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/fortebello')?>">Fortebello</a></li>
                             <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                             <ul>
                                 <li class="sn" id="menu"><a href="<?=base_url('kategori/s-plus-pintu/premium-general')?>">General</a></li>
                                 <li class="sn" id="menu"><a href="<?=base_url('kategori/s-plus-pintu/premium-deco')?>">Deco</a></li>
                                 <li class="sn" id="menu"><a href="<?=base_url('kategori/s-plus-pintu/grande')?>">Grande</a></li>
                             </ul>
                             <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/classic')?>">Classic</a></li>
                             <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/kusen')?>">Kusen</a></li>
                             <li class="sm"><a href="<?=base_url('kategori/s-plus-pintu/aksesoris-pintu')?>">Aksesoris</a></li>
                          </ul>   
                         <li class="panel-title" data-toggle="collapse" data-target="#test8"><a href="<?=base_url('kategori/s-plus-pintu-upvc')?>"><b>S-PLUS PINTU UPVC</b></a></li>
                         <ul id="test8" class="panel-collapse collapse">
                             <li class="sm">Felice & Sash Door</li>
                         </ul>   
                          <li class="panel-title" data-toggle="collapse" data-target="#test2">
                              <a href="<?=base_url('kategori/s-plus-jendela')?>"><b>S-PLUS JENDELA UPVC</b></a></li>
                              <ul id="test2" class="panel-collapse collapse">
                                  <li class="sm"><a href="<?=base_url('kategori/s-plus-jendela/kaca-mati')?>">Jendela Kaca Mati</a></li>
                                  <li class="sm"><a href="<?=base_url('kategori/s-plus-jendela/jungkit')?>">Jendela Jungkit</a></li>
                                  <li class="sm"><a href="<?=base_url('kategori/s-plus-jendela/sliding')?>">Jendela Sliding</a></li>
                                  <li class="sm"><a href="<?=base_url('kategori/s-plus-jendela/swing')?>">Jendela Swing</a></li>
                                  <li class="sm"><a href="<?=base_url('kategori/s-plus-jendela/kombinasi')?>">Jendela Kombinasi</a></li>  
                              </ul> 
                          <li class=" panel-title" data-toggle="collapse" data-target="#test3"><a href="<?=base_url('kategori/s-plus-plafon')?>"><b>S-PLUS PLAFON UPVC</b></a></li>  
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
                          <li><a href="<?=base_url('kategori/s-plus-kitchen-set')?>"><b>S-PLUS KITCHEN SET</b></a></li>
                          <li class="panel-title current" data-toggle="collapse" data-target="#test7"><a href="<?=base_url('kategori/namo-pintu')?>"><b>NAMO PINTU</b></a></li>
                            <ul id="test7">
                                <li class="sm"><a href="#laminate-door">Laminate Door</a></li>
                                <li class="sm"><a href="#eco-door">Eco Door</a></li>
                                <li class="sm"><a href="#veneer-solid-door">Veneer Solid Door</a></li>
                                <li class="sm"><a href="#solid-timber-door">Solid Timber Door</a></li>
                                <li class="sm"><a href="#art-door">Art Door</a></li>
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
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd" style="height: 10060px;">
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
                                                src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-door.jpg')?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image"
                                                src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-door.jpg')?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image"
                                                src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/ecou-door.jpg')?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image"
                                                src="<?=base_url('assets/user/images/kategori/splus-namo/veneer-solid-door/veneer-solid-door.jpg')?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image"
                                                src="<?=base_url('assets/user/images/kategori/splus-namo/solid-timber-door/solid-timber-door.jpg')?>" />
                                        </div>
                                        <div style="background-color:#000000;">
                                            <img data-u="image"
                                                src="<?=base_url('assets/user/images/kategori/splus-namo/art-door/art-door.jpg')?>" />
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
                            <!--Namo Door-->
                            <span class="h-body h-m-body">
                            <center>
                                <span class="h-subtitle h-m-title">NAMO DOOR</span> 
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                                <div class="row">
                                <div class="">
                                <?php if($this->agent->is_mobile()): ?>
                                    <img src="<?=base_url('assets/user/images/kategori/splus-namo/namo-deskripsi-mobile.jpg')?>" alt="">
                                <?php else: ?>
                                    <img src="<?=base_url('assets/user/images/kategori/splus-namo/namo-deskripsi.jpg')?>" alt="">
                                <?php endif; ?>
                                </div>   
                                </div>
                            </center> <br>
                            <span class="h-body h-m-body">
                            </span>
                            <br>
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/a1GhViKFvm4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br><br>
                            <!--Laminate Door-->
                            <!--Struktur Laminate Door-->
                            <span class="h-body h-m-body">
                            <center>
                                <span class="h-subtitle h-m-title" id="laminate-door">STRUKTUR LAMINATE DOOR</span> 
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                                <div class="row">
                                <div class="">
                                <?php if($this->agent->is_mobile()): ?>
                                    <img src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-struktur-mobile.jpg')?>" alt="">
                                <?php else: ?>
                                    <img src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-struktur.jpg')?>" alt="">
                                <?php endif; ?>
                                </div>   
                                </div>
                            </center> <br>
                            <span class="h-body h-m-body">
                            </span>
                            <!--Laminate Uno Door-->
                            <div class="row pb-20">
                            <center>
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center;"><strong>LAMINATE UNO</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                              <?php if($this->agent->is_mobile()): ?>
                                  <div class="col-sm-12 col-xs-12 gallery-popup">
                                      <img src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-uno-detail-moblie.jpg')?>">
                                  </div>
                              <?php else: ?>
                                  <div class="col-md-12 pb-40 gallery-popup">
                                      <!-- gambar produk -->
                                      <img class=""src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-uno-detail.jpg')?>">
                                  </div>
                              <?php endif; ?>
                            </div>  
                          <!--Laminate Duo Door-->
                          <div class="row pb-30">
                            <center>
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center;"><strong>LAMINATE DUO</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                              <?php if($this->agent->is_mobile()): ?>
                                  <div class="col-sm-12 col-xs-12 gallery-popup">
                                      <img src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-duo-detail-mobile.jpg')?>">
                                  </div>
                              <?php else: ?>
                                  <div class="col-md-12 pb-40 gallery-popup">
                                      <!-- gambar produk -->
                                      <img class=""src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-duo-detail.jpg')?>">
                                  </div>
                              <?php endif; ?>
                            </div> 
                            <div class="text-center pb-20">
                                <span class="h-subtitle h-m-title"><strong>Ukuran Standar</strong></span>
                                <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                                <h5> 820 x 2100 </h5> <br>
                                <span class="text-danger">* Ukuran dalam hitungan milimeter</span>
                            </div> <br>
                            <!--Laminate Costum Door-->
                            <div class="row pb-20">
                              <center>
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center;"><strong>LAMINATE CUSTOM</strong></span>
                              </center>
                              <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                                <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup">
                                   <img class="" src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/laminate-costum.jpg')?>">         
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 pt-20">
                                    <span class="h-subtitle h-m-title">Laminate Custom</span> <br>
                                    <span class="h-body h-m-body">
                                        - Pilihan Warna <br>
                                        - Pilihan Struktur <br>
                                        - Pilihan Ukuran <br><br>
                                    </span>
                                    <span class="h-subtitle h-m-title">* Minimum quantity 100 Unit </span>
                                </div>
                                <!--Warna-->
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40">
                                  <span class="h-subtitle h-m-title">Pilihan Warna</span> <br>
                                  <img src="<?=base_url('assets/user/images/kategori/splus-namo/laminate-door/warna.png')?>" width="300">
                                </div>
                              </div> 
                             
                            <!--Eco Door-->
                            <!--Struktur Eco Door-->
                            <span class="h-body h-m-body">
                            <center>
                                <span class="h-subtitle h-m-title" id="eco-door">STRUKTUR ECO DOOR</span> 
                                <hr style="margin-bottom: 25px;width: 20%; border: 0.5px solid #e24545">
                                <div class="row">
                                <div class="">
                                <?php if($this->agent->is_mobile()): ?>
                                    <img src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-struktur-mobile.jpg')?>" alt="">
                                <?php else: ?>
                                    <img src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-struktur.jpg')?>" alt="">
                                <?php endif; ?>
                                </div>   
                                </div>
                            </center> <br>
                            <span class="h-body h-m-body">
                            </span>
                            <!--Laminate Uno Door-->
                            <div class="row pb-20">
                            <center>
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center;"><strong>ECO DOOR</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                              <?php if($this->agent->is_mobile()): ?>
                                  <div class="col-sm-12 col-xs-12 gallery-popup">
                                      <img src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-cat-moblie.jpg')?>">
                                  </div>
                                  <div class="col-sm-12 col-xs-12 gallery-popup">
                                      <img src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-cat2-moblie.jpg')?>">
                                  </div>
                              <?php else: ?>
                                  <div class="col-md-12 pb-40 gallery-popup">
                                      <!-- gambar produk -->
                                      <img class=""src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-cat.jpg')?>">
                                  </div>
                                  <div class="col-md-12 pb-40 gallery-popup">
                                      <!-- gambar produk -->
                                      <img class=""src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-cat2.jpg')?>">
                                  </div>
                              <?php endif; ?>
                            </div>  
                          <!--Laminate Duo Door-->
                          <div class="row pb-30">
                            <center>
                                <span class="h-subtitle h-m-title"style="padding-bottom: 10px;text-align: center;"><strong>UNFINISHED ECO DOOR</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">
                              <?php if($this->agent->is_mobile()): ?>
                                  <div class="col-sm-12 col-xs-12 gallery-popup">
                                      <img src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-unfinished-mobile.jpg')?>">
                                  </div>
                              <?php else: ?>
                                  <div class="col-md-12 pb-40 gallery-popup">
                                      <!-- gambar produk -->
                                      <img class=""src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-unfinished.jpg')?>">
                                  </div>
                              <?php endif; ?>
                            </div> 
                            <div class="text-center pb-20">
                                <span class="h-subtitle h-m-title"><strong>Ukuran Standar</strong></span>
                                <?php if($this->agent->is_mobile()): ?>
                                  <div class="col-sm-12 col-xs-12 gallery-popup">
                                      <img src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-ukuran-mobile.jpg')?>">
                                  </div>
                              <?php else: ?>
                                  <div class="col-md-12 pb-40 gallery-popup">
                                      <!-- gambar produk -->
                                      <img class=""src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/eco-ukuran.jpg')?>">
                                  </div>
                              <?php endif; ?>
                            </div> <br>
                                <!--Warna-->
                                <div class="col-md-12 col-sm-12 col-xs-12 pt-40">
                                  <span class="h-subtitle h-m-title">Pilihan Warna</span> <br>
                                  <img src="<?=base_url('assets/user/images/kategori/splus-namo/eco-door/warna.png')?>" width="300">
                                </div>
                              </div> 
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('user/footer') ?>