<?php
$meta['title']          = 'Pintu Fortebello - S-Plus Indonesia';
$meta['description']    = 'Pintu Fortebello memiliki desain yang elegan serta memiliki banyak motif dengan harga menengah ke atas.';
$meta['keywords']       = 'jual pintu abs, jual pintu abs murah, jual pintu abs berkualitas, jual pintu abs terbaik, pintu abs murah, pintu abs minimalis, pintu abs elegan, pintu abs terbaik, pintu abs berkualitas,pintu abs s plus, pintu abs vs upvc';
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
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>INLIFE</b></a>
                                        <ul id="test3">
                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material_upvc') ?>">PLAFON UPVC</a></li>
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
                <!-- <div class="col-md-9"> -->
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div>
                            <h4><a href="<?= base_url('kategori') ?>"><b>Produk </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-pintu') ?>"><b> Pintu </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>"><b> Pintu ABS </b></a><span class="fa fa-chevron-right"><b> Fortebllo </b></h4>
                            <br>
                        </div>
                        <div class="">
                            <img src="<?= base_url('assets/user/images/kategori/splus-door/fortabello/fortebello1.jpg') ?>" class="pb-20">
                        </div>
                        <br>
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title" style="color:#D53F2C;"><strong>FORTEBELLO</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width:100%; border: 0.5px solid #000000">
                            <span class="h-body h-m-body">
                                Pintu Fortebello dengan struktur yang sangat kokoh dan pilihan motif desain yang simple dapat menjadikan interior ruangan modern dan natural.
                            </span>
                            <div class="row">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12" style="margin-bottom: 25px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/web-abs/fotebelo-m.jpg') ?>" style="padding-top:20px; padding-bottom:15px;">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12" style="margin-bottom: 25px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/web-abs/fotebelo.jpg') ?>" style="padding-top:20px; padding-bottom:15px;">
                                    </div>
                                <?php endif; ?>
                                <center>
                                    <span class="h-subtitle h-m-title" style="color:#D53F2C;"><strong>Pilihan Motif Pintu Fortebello</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width:40%; border: 0.5px solid #000000">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/fortabello/detail 1-m.jpg') ?>" style="margin-top:10px;">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/fortabello/detail 1.jpg') ?>" style="margin-top:10px;">
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="pt-40 text-center">
                                <span class="h-subtitle h-m-title" style="color:#D53F2C;"><strong>Pilihan Warna Fortebello</strong></span>
                                <hr style="margin-bottom: 25px;width: 35%; border: 0.5px solid #000000">
                                <img width="<?php echo ($this->agent->is_mobile() ? "80%" : "50%") ?>" src="<?= base_url('assets/user/images/kategori/splus-door/fortabello/warna 1.png') ?>" alt=""> <br>
                            </div> <br>
                            <!--   <div class="pt-20 text-center">
                              <span class="h-subtitle h-m-title"><strong>PORTFOLIO</strong></span>
                              <hr style="width: 18%; border: 0.5px solid #e24545">  <br>
                              <div class="row gallery-popup">
                                  <div class="col-md-4 col-sm-6 col-xs-12">
                                      <img src="<?= base_url('assets/user/images/portfolio/pintu/fortebello/.jpg') ?>"
                                          alt="">
                                  </div>
                                  <div class="col-md-4 col-sm-6 col-xs-12 h-m-pdk">
                                      <img src="<?= base_url('assets/user/images/portfolio/pintu/fortebello/.jpg') ?>"
                                          alt="">
                                  </div>
                              </div>
                          </div> -->
                            <div class="row pt-40">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <center><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>" class="ps-btn h-m-body">Kembali</a></center>
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