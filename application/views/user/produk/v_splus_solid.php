<?php
$meta['title']          = 'Solid Surface - S-Plus Indonesia';
$meta['description']    = 'S-Plus Solid Surface adalah material sintetis mirip dengan batu granit atau batu marmer yang terbuat dari campuran Unsaturated Polyester (UPE) dan Filter Aluminium Tri-Hydroxide (ATH). Solid surface memiliki banyak keunggulan. Jika batu marmer atau granit memiliki pori-pori pada permukaannya, maka solid surface tidak memiliki pori-pori.';
$meta['keywords']       = 'jual solid surface, jual solid surface murah, jual solid surface berkualitas, jual solid surface terbaik, solid surface murah, sun shade minimalis, solid surface elegan, solid surface terbaik, solid surface berkualitas, solid surface harga, solid surface kitchen set, solid surface s plus, solid surface indonesia';
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
                            <li class=" panel-title" data-toggle="collapse" data-target="#test3"><a href="<?= base_url('kategori/s-plus-upvc-plafon') ?>"><b>S-PLUS PLAFON UPVC</b></a></li>  
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
                            <li class="panel-title current" data-toggle="collapse" data-target="#test6"><a href="<?= base_url('kategori/s-plus-solid-surface') ?>"><b>S-PLUS SOLID SURFACE</b></a></li>
                                <ul id="test6">
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
                        
                            <li class="panel-title" data-toggle="collapse" data-target="#test9"><a href="<?= base_url('kategori/s-plus-vinyl-flooring') ?>"><b>S-PLUS VINYL FLOORING</b></a></li>
                           <ul id="test9" class="panel-collapse collapse">
                               <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
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
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <img src="<?= base_url('assets/user/images/kategori/splus-solid/solid.jpg') ?>"> <br> <br>
                            <span class="h-body h-m-body">
                                &nbsp &nbsp S-Plus Solid Surface adalah material sintetis mirip dengan batu granit atau batu marmer
                                yang terbuat dari campuran <i>Unsaturated Polyester</i> (UPE) dan Filter Aluminium
                                <i>Tri-Hydroxide</i> (ATH).
                                Solid surface memiliki banyak keunggulan. Jika batu marmer atau granit memiliki
                                pori-pori pada permukaannya, maka solid surface tidak memiliki pori-pori.
                            </span> <br> <br>
                            <span class="h-subtitle h-m-title"><b>Kelebihan S-Plus Solid Surface : </b> </span>
                            <ul class="a h-body h-m-body">
                                <li>Kuat & Ringan</li>
                                <li>Tidak Berpori</li>
                                <li>Mudah Perawatan</li>
                                <li>Mudah dibersihkan</li>
                            </ul>
                            <span class="h-subtitle h-m-title"><b>Aplikasi Solid Surface : </b></span> <br><br>
                            <span class="h-body h-m-body">S-Plus Solid Surface bukan hanya digunakan untuk dapur dan kamar mandi saja,
                                mengingat daya tahannya, perawatannya yang mudah, dan banyak motif & pilihan warna.
                                S-Plus Solid Surface bisa di aplikasikan sebagai interior desain, dinding kamar mandi,
                                top table, meja receptionist.</span><br><br>
                            <div class="row pt-1">
                                <div class="col-md-1 hideimg">
                                    <img src="<?= base_url('assets/user/images/icon/kitchen.png') ?>" style="padding-top:10px;">
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: 5px;padding-bottom: 5px; font-size: 23px;"><b>Kitchen Set</b></h5>
                                    <span class="h-body h-m-body">S-Plus Solid Surface dapat di aplikasikan sebagai top cabinet
                                        kitchen set, sehingga dapur anda terlihat mewah dengan warna dan corak solid
                                        surface.</span>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-1 hideimg">
                                    <img src="<?= base_url('assets/user/images/icon/homeicon.png') ?>" style="padding-top:10px; padding-left: 10px;">
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: 5px;padding-bottom: 5px;font-size: 23px;"><b>Interior</b></h5>
                                    <span class="h-body h-m-body">Interion design dengan mengaplikasikan solid surface merupakan suatu
                                        hal yang unik & menarik, pengaplikasiannya sebagai wall panel,partisi,dll.</span>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-1 hideimg">
                                    <img src="<?= base_url('assets/user/images/icon/table.png') ?>" style="padding-top:10px;">
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: 5px;padding-bottom: 5px; font-size: 23px;"><b>Top Table</b></h5>
                                    <span class="h-body h-m-body">S-Plus Solid Surface memiliki banyak warna & corak yang menarik
                                        digunakan sebagai top table & receptionist desk.</span>
                                </div>
                            </div> <br>
                            <div class="row pb-5">
                                <div class="col-md-1 hideimg">
                                    <img src="<?= base_url('assets/user/images/icon/bath.png') ?>" style="padding-top:10px;">
                                </div>
                                <div class="col-md-8">
                                    <h5 style="margin-top: 5px;padding-bottom: 5px;font-size: 23px;"><b>Bathroom</b></h5>
                                    <span class="h-body h-m-body">S-Plus Solid Surface dapat di aplikasikan pada kamar mandi yang di
                                        gunakan sebagai dinding kamar madi, wastafel, dll.</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="pt-10 pb-20">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>UKURAN STANDAR</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <table>
                                        <tr>
                                            <th colspan="3">UKURAN CHIP</th>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;"><b>Panjang</b></td>
                                            <td style="font-weight: bold;"><b>Lebar</b></td>
                                            <td style="font-weight: bold;"><b>Tebal</b></td>
                                        </tr>
                                        <tr>
                                            <td>200 cm</td>
                                            <td>76 cm</td>
                                            <td>1.2 cm</td>
                                        </tr>
                                        <tr>
                                            <td>240 cm</td>
                                            <td>76 cm</td>
                                            <td>1.2 cm</td>
                                        </tr>
                                        <tr>
                                            <td>376 cm</td>
                                            <td>76 cm</td>
                                            <td>1.2 cm</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <table>
                                        <tr>
                                            <th colspan="3">UKURAN DECO</th>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;"><b>Panjang</b></td>
                                            <td style="font-weight: bold;"><b>Lebar</b></td>
                                            <td style="font-weight: bold;"><b>Tebal</b></td>
                                        </tr>
                                        <tr>
                                            <td>200 cm</td>
                                            <td>76 cm</td>
                                            <td>1.2 cm</td>
                                        </tr>
                                        <tr>
                                            <td>240 cm</td>
                                            <td>76 cm</td>
                                            <td>1.2 cm</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--CHIP-->
                        <div class="row pb-30">
                            <center>
                                <span class="h-subtitle h-m-title" style="padding-bottom: 10px;" id="chip"><strong>CHIP</strong></span>
                            </center>
                            <hr style="width:5%; border: solid 0.5px #e24545; margin-bottom: 40px;">
                            <?php if ($this->agent->is_mobile()) : ?>
                                <div class="col-md-12">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/splus-solid/chip/m-chip.jpg') ?>" style="width:100%">
                                </div>
                            <?php else : ?>
                                <div class="col-md-12 gallery-popup">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/splus-solid/chip/detail.jpg') ?>" style="width:100%">
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--DECO-->
                        <div class="row pb-30">
                            <center>
                                <span class="h-subtitle h-m-title" style="padding-bottom: 10px;" id="deco"><strong>DECO</strong></span>
                            </center>
                            <hr style="width:5%; border: solid 0.5px #e24545; margin-bottom: 40px;">
                            <?php if ($this->agent->is_mobile()) : ?>
                                <div class="col-md-12">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/splus-solid/deco/m-deco.jpg') ?>" style="width:100%">
                                </div>
                            <?php else : ?>
                                <div class="col-md-12 gallery-popup">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/splus-solid/deco/detail.jpg') ?>" style="width:100%">
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--PORTFOLIO-->
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>PORTFOLIO</strong></span>
                            </center>
                            <hr style="width:15%; border: solid 0.5px #e24545; margin-bottom: 30px;">
                            <div class="row pb-20 gallery-popup">
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/p1.jpg') ?>" alt="">
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 h-m-pdk">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/p2.jpg') ?>" alt="">
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 h-m-pdk">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/p3.jpg') ?>" alt="">
                                </div>
                            </div>
                            <div class="row pb-30 gallery-popup">
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                    <img src="<?= base_url('assets/user/images/portfolio/deco/p1.jpg') ?>" alt="">
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/solid-wall.jpg') ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-40">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <center><a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>" class="ps-btn h-m-body">Kembali</a></center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>