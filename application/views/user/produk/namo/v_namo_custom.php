<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
            <?php if(!$this->agent->is_mobile()): ?>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                    <aside class="ps-widget--sidebar ">
                        <div class="ps-widget__header">
                            <h3>KATEGORI KAMI</h3>
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
                   <li class="panel-title" data-toggle="collapse" data-target="#test3">
                       <a href="<?=base_url('kategori/s-plus-plafon')?>"><b>S-PLUS PLAFON UPVC</b></a></li>
                       <ul id="test3" class="panel-collapse collapse">
                           <li class="sm"><a href="<?=base_url('kategori/s-plus-plafon/polos')?>">Plafon Putih Polos</a></li>
                           <li class="sm"><a href="<?=base_url('kategori/s-plus-plafon/laminate')?>">Plafon Laminate</a></li>
                           <li class="sm"><a href="<?=base_url('kategori/s-plus-plafon/deco')?>">Plafon Deco</a></li>
                       </ul>
                    
                   <li class="panel-title" data-toggle="collapse" data-target="#test4"><a href="<?=base_url('kategori/s-plus-wpc')?>"><b>S-PLUS WPC</b></a></li>
                       <ul id="test4" class="panel-collapse collapse">
                         <li class="sm"><a href="<?=base_url('kategori/s-plus-wpc/deck-tile')?>">Deck Tile</a></li>
                         <li class="sm"><a href="<?=base_url('kategori/s-plus-wpc/wall-partition')?>">Wall Partition</a></li>
                       </ul> 
                   <li class="panel-title" data-toggle="collapse" data-target="#test5"><a href="<?=base_url('kategori/s-plus-sun-shade')?>"><b>S-PLUS SUN SHADE</b></a></li>
                   <ul id="test5" class="panel-collapse collapse">
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/alumunium')?>">Alumunium Shade</a></li>
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/blackout')?>">Blackout Shade</a></li>
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/combi')?>">Combi Shade</a></li>
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/honeycomb')?>">Honeycomb Shade</a></li>
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/roll-screen')?>">Roll Screen Shade</a></li>
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/roll-shade')?>">Roll Shade</a></li>  
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/vertical')?>">Vertical Blind</a></li>
                       <li class="sm"><a href="<?=base_url('kategori/s-plus-sun-shade/wood')?>">Wood Blind</a></li>
                    </ul>   
                   <li class="panel-title" data-toggle="collapse" data-target="#test6"><a href="<?=base_url('kategori/s-plus-solid-surface')?>"><b>S-PLUS SOLID SURFACE</b></a></li>
                       <ul id="test6" class="panel-collapse collapse">
                           <li class="sm"><a href="<?=base_url('kategori/s-plus-solid-surface/chip')?>">Solid Chip</a></li>
                           <li class="sm"><a href="<?=base_url('kategori/s-plus-solid-surface/deco')?>">Solid Deco</a></li>
                       </ul>
                   <li><a href="<?=base_url('kategori/s-plus-kitchen-set')?>"><b>S-PLUS KITCHEN SET</b></a></li>
                   <li class="panel-title current" data-toggle="collapse" data-target="#test7"><a href="<?=base_url('kategori/namo-pintu')?>"><b>NAMO PINTU</b></a></li>
                       <ul id="test7">
                           <li class="sm"><a href="<?=base_url('kategori/namo-pintu/uno')?>">Namo Uno</a></li>
                           <li class="sm"><a href="<?=base_url('kategori/namo-pintu/duo')?>">Namo Duo</a></li>
                           <li class="sm current"><a href="<?=base_url('kategori/namo-pintu/custom')?>">Namo Custom</a></li>
                       </ul> 
                        </ul>
                        </div>
                        <div class="ps-widget__header">
                            <h3>PEMASANGAN</h3>
                        </div>
                        <div class="ps-widget__content">
                            <ul class="ps-list--arrow">
                                    <li><a href="<?=base_url('pemasangan/pintu')?>"><b>S-PLUS PINTU </b></a></li>
                                    <li><a href="<?=base_url('pemasangan/jendela')?>"><b>S-PLUS JENDELA</b></a></li>
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
                            <img src="<?=base_url('assets/user/images/kategori/splus-namo/custom/namo-custom.jpg')?>"
                                class="pb-20">
                        </div>
                        <br>
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title" style="padding-bottom: 10px; text-align: center;"><strong>TIPE NAMO CUSTOM</strong></span>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                            </center>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div><img class=""
                                        src="<?=base_url('assets/user/images/kategori/splus-namo/custom/detail.png')?>">         
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <span class="h-subtitle h-m-title">Namo Custom</span> <br>
                                    <span class="h-body h-m-body">
                                        - Pilihan Warna <br>
                                        - Pilihan Struktur <br>
                                        - Pilihan Ukuran <br><br>
                                    </span>
                                    <span class="h-subtitle h-m-title">
                                        * Minimum quantity 100 Unit <br> <br>
                                        Pilihan Warna :
                                    </span>
                                    <img src="<?=base_url('assets/user/images/kategori/splus-namo/custom/warna.png')?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    $("select").imagepicker();
    $('#pintu').next('ul').hide();
    $('#jendela').next('ul').hide();
    $('#solid').next('ul').hide();
    $('#wpc').next('ul').hide();
    $('#plafon').next('ul').hide();
    $('#sunshade').next('ul').hide();
    $("select").imagepicker();

    </script>
    <?php $this->load->view('user/footer') ?>