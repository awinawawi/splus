<?php
$meta['title']          = 'Pintu Premium - S-Plus Indonesia';
$meta['description']    = 'Pintu Premium biasa digunakan untuk kebutuhan rumah-rumah hunian modern dengan konsep minimalis dan elegan.';
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
                                <h3>KATEGORI</h3>
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
                          
                        </aside> -->
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div>
                            <h4><a href="<?= base_url('v_kategori') ?>"><b>Produk </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-pintu') ?>"><b> Pintu </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>"><b> Pintu ABS </b></a><span class="fa fa-chevron-right"><b> Premium </b></h4>
                            <br>
                        </div>
                        <div class="">
                            <img src="<?= base_url('assets/user/images/kategori/splus-door/premium-series/premium1.jpg') ?>" class="pb-20">
                        </div>
                        <br>
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title" style="color:#AC6249;"><strong>PREMIUM</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 100%; border: 0.5px solid #000000">
                            <span class="h-body h-m-body">Pintu dengan struktur yang kokoh dan dikombinasikan menggunakan kaca dapat menajdikan interior ruangan premium dan mewah.</span>
                            <div class="row">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12" style="padding-top:20px; padding-bottom:15px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/web-abs/convert/premium-m.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12" style="padding-top:20px; padding-bottom:35px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/web-abs/convert/premium.jpg') ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="row">
                                <center>
                                    <span class="h-subtitle h-m-title" style="color:#AC6249;"><strong>Pilihan Motif Pintu Premium</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 40%; border: 0.5px solid #000000">
                                <?php if ($this->agent->is_mobile()) : ?>
                                    <div class="col-sm-12 col-xs-12" style="margin-top:10px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/premium-series/detail-m.jpg') ?>">
                                    </div>
                                <?php else : ?>
                                    <div class="col-md-12" style="margin-top:10px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/premium-series/detail1.jpg') ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <hr> <br>

                            <div class="pt-40">
                                <center>
                                    <span class="h-subtitle h-m-title" style="color:#AC6249;"><strong>Pilihan Warna Pintu Premium</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 40%; border: 0.5px solid #000000">
                                <div class="row" style="padding-left: 15px;">
                                    <span class="h-subtitle" style="font-size:15px;">Kode P1 - P5</span>
                                    <div style="margin-top:10px; margin-bottom:10px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/premium-series/warna 1.png') ?>" width="400">
                                    </div>
                                    <span class="h-subtitle" style="font-size:15px;">Kode P6 & P7</span>
                                    <div style="margin-top:10px;">
                                        <img src="<?= base_url('assets/user/images/kategori/splus-door/premium-series/warna 2.png') ?>" width="400">
                                    </div>
                                </div>

                                <!--<div class="row">-->
                                <!--    <span class="h-subtitle" style="font-size:15px;">Kode P6 dan P7</span>-->
                                <!--    <img width="<?php echo ($this->agent->is_mobile() ? "50%" : "50%") ?>" src="<?= base_url('assets/user/images/kategori/splus-door/premium-series/warna 2.png') ?>" alt="">-->
                                <!--</div>-->
                            </div> <br>
                            <!-- <div class="pt-40 text-center">
                            <span class="h-subtitle h-m-title"><strong>PORTFOLIO</strong></span>
                            <hr style="margin-bottom: 25px;width: 15%; border: 0.5px solid #e24545">  <br>
                        </div> -->
                            <div class="row pt-40">
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <center><a href="<?= base_url('kategori/s-plus-pintu/premium') ?>" class="ps-btn h-m-body">Kembali</a></center>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    // <script>
        //     $("#closee").click(function(){
        //       $(this).next("ul").toggle();
        //     });
        //      $('#close').next('ul').hide();
        //     $("#close").click(function(){
        //       $(this).next("ul").toggle();
        //     });
        // 
    </script>
    <?php $this->load->view('user/footer') ?>