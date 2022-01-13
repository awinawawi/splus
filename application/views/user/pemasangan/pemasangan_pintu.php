<?php
$meta['title']          = 'Panduan Pemasangan Pintu - S-Plus Indonesia';
$meta['description']    = 'Informasi cara pemasangan pintu yang baik dan benar sesuai dengan standarisasi pengukuran yang sudah S-Plus buat agar hasil sesuai dan maksimal';
$meta['keywords']       = 'pasang pintu, cara pasang pintu, cara pasang pintu rumah, pemasangan pintu, pemasangan pintu rumah, panduan instalasi pintu, panduan instalasi pintu rumah, tutorial pasang pintu, tutorial pasang pintu rumah';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-blog-grid pt-10 pb-10 bg-grey">
        <div class="ps-container">
            <div class="row">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <aside class="ps-widget--sidebar ">
                            <!-- <div class="ps-widget__header">
                        <h3>KATEGORI</h3>
                    </div>
                    <div class="ps-widget__content">
                    <ul class="ps-list--arrow">
                          <li class="panel-title" data-toggle="collapse" data-target="#test">
                              <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>S-PLUS PINTU ABS</b></a></li>
                          <ul id="test" class="panel-collapse collapse">
                             
                             <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                             <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                             <ul>
                                 <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">Series</a></li>
                                 <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Deco</a></li>
                                 <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                             </ul>
                             <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                             <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                             <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li>
                          </ul>   
                          <li class="panel-title" data-toggle="collapse" data-target="#test8"><a href="<?= base_url('kategori/s-plus-pintu-upvc') ?>"><b>S-PLUS PINTU UPVC</b></a></li>
                          <ul id="test8" class="panel-collapse collapse">
                              <li class="sm"><a href="#felice">Felice</a></li>
                              <li class="sm"><a href="#sash">Sash Door</a></li>
                          </ul> 
                         <li class="panel-title" data-toggle="collapse" data-target="#test2">
                             <a href="<?= base_url('kategori/s-plus-jendela') ?>"><b>S-PLUS JENDELA UPVC</b></a></li>
                             <ul id="test2" class="panel-collapse collapse">
                                 <li class="sm"><a href="<?= base_url('kategori/s-plus-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                 <li class="sm"><a href="<?= base_url('kategori/s-plus-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                 <li class="sm"><a href="<?= base_url('kategori/s-plus-jendela/sliding') ?>">Jendela Sliding</a></li>
                                 <li class="sm"><a href="<?= base_url('kategori/s-plus-jendela/swing') ?>">Jendela Swing</a></li>
                                 <li class="sm"><a href="<?= base_url('kategori/s-plus-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>  
                             </ul> 
                         <li class=" panel-title" data-toggle="collapse" data-target="#test3"><a href="<?= base_url('kategori/s-plus-plafon') ?>"><b>S-PLUS PLAFON UPVC</b></a></li>  
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
                          <li class="panel-title" data-toggle="collapse" data-target="#test7"><a href="<?= base_url('kategori/namo-pintu') ?>"><b>NAMO PINTU</b></a></li>
                              <ul id="test7" class="panel-collapse collapse">
                                    <li class="sm"><a href="#laminate-door">Laminate Door</a></li>
                                    <li class="sm"><a href="#eco-door">ECO Door</a></li>
                                    <li class="sm"><a href="#unfinished-eco-door">Unfinished ECO Door</a></li>
                                    <li class="sm"><a href="#veneer-solid-door">Veneer Solid Door</a></li>
                                    <li class="sm"><a href="#solid-timber-door">Solid Timber Door</a></li>
                                    <li class="sm"><a href="#art-door">ART Door</a></li>
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
                    </div> -->
                            <div class="ps-widget__header">
                                <h3>PEMASANGAN</h3>
                            </div>
                            <div class="ps-widget__content">
                                <ul class="ps-list--arrow">
                                    <li class="current"><a href="<?= base_url('pemasangan/pintu') ?>"><b>S-PLUS PINTU</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/jendela') ?>"><b>S-PLUS JENDELA</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/plafon') ?>"><b>S-PLUS PLAFON</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/sunshade') ?>"><b>S-PLUS SUN SHADE </b></a></li>
                                    <li><a href="<?= base_url('pemasangan/wpc') ?>"><b>S-PLUS WPC</b></a></li>
                                    <li><a href="<?= base_url('pemasangan/kitchen-set') ?>"><b>S-PLUS KITCHEN SET </b></a></li>
                                    <li><a href="<?= base_url('standar-pengukuran') ?>"><b>SOP PENGUKURAN S-PLUS </b></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                <?php endif; ?>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <div class="ps-box pb-10 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="text-center">
                            <span class="h-subtitle h-m-title" style="margin-top: 5px;">PEMASANGAN PINTU</h3>
                                <hr style="margin-bottom: 25px;width: 30%; border: 0.5px solid #e24545">
                        </div>
                        <div class="ps-section__header pt-20 pb-8">
                            <center>
                                <img src="<?= base_url('assets/user/images/pemasangan/p-pintu.jpg') ?>" style="border-radius: 3px;">
                            </center>
                        </div> <br>
                        <span class="h-body h-m-body-pmsg">
                            Ada 2 Metode Pemasangan dalam pemasangan S-Plus Pintu yaitu menggunakan <i>Screw</i> (Baut) yang umumnya digunakan dan meggunakan Poly Urehane Foam yang merupakan metode baru dalam pemasangan S-Plus Pintu. Berikut Cara Pemasangan Menggunakan Poly Urehane Foam :
                        </span> <br>
                        <ol class="h-body h-m-body-pmsg" style="margin-left: 20px;">
                            <li>Siapkan “Opening” bersihkan dari sisa semen maupu kotoran lainnya.</li>
                            <li>Perhatikan semua aksesoris yang terpasang. Biarkan semua terkunci.</li>
                            <li>Posisikan pintu terbuka. Atur jarak masing-masing sisi pintu.</li>
                            <li>Timbang dan atur posisi vertikal dan horizontal Jendela (lot), berikan penahan dari bagian yang dibutuhkan.</li>
                            <li>Semprotkan Poly Urehane Foam pada semua sisi jendela. Biarkan megembang dan Mengering.
                            </li>
                            <li>Bersihkan sisa foam yang tampak keluar menggunakan pisau cutter.</li>
                            <li>Tutup bagian foam yang terlihat dengan menggunakan molding apabila diperlukan. Atau beri lapisan sealant untuk menyamarkan warna foam dengan tembok.</li>
                            <li>Biarkan Foam benar-benar kering maksimal selama kurang lebih 1x24Jam</li>
                            <li>Pintu S-Plus siap digunakan.</li>
                        </ol>
                        <div class="row" style="margin-top: 12px;">
                            <h4 class="h-subtitle-pmsg h-m-title-pmsg" style="margin-bottom: 10px; margin-left: 10px;">Untuk lebih jelasnya dapat dilihat pada gambar di bawah ini : </h4>
                            <hr style="margin-left: 40px;width: 63%; border: 0.5px solid #e24545">
                            <center>
                                <img src="<?= base_url('assets/user/images/pemasangan/pemasangan-pintu.jpg') ?>">
                            </center>
                        </div>

                        <div class="row pb-40" style="margin-top: 10px;">
                            <h4 class="h-subtitle-pmsg h-m-title-pmsg" style="margin-bottom: 10px; padding-left: 10px;">Berikut video pemasangan S-Plus Pintu: </h4>
                            <hr style="margin-left: 30px;width: 35%;margin-bottom: 20px;border: 0.5px solid #e24545">
                            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 "></div>
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 ">
                                <iframe width="330" height="355" src="https://www.youtube.com/embed/99670Nzg2K4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-12 col-xs-12 "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>
    <script>
        $('#closee').next('ul').hide();
        $("#closee").click(function() {
            $(this).next("ul").toggle();
        });
        $('#close').next('ul').hide();
        $("#close").click(function() {
            $(this).next("ul").toggle();
        });
    </script>
    <?php $this->load->view('user/footer') ?>