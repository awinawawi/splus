<?php
$meta['title']          = 'S-Plus Indonesia - Smart Living With S-Plus';
$meta['description']    = 'S-Plus merupakan manufacturer fabrikasi general building materials, yaitu ABS-Engineering Door, uPVC Window, Plafon, WPC, Roll Blind, Solid Surface, Kitchen Set dan Furniture.';
$meta['keywords']       = 'pintu abs, jual pintu abs,pintu abs s plus, pintu upvc,jendala upvc,plafon upvc,solid surface,kitchen set,namo pintu,pintu kayu,solid surface,wpc,wpc deck,wpc wall, namo pintu';
$this->load->view('user/header', $meta) ?>


<!-- <main class="ps-main" style="background-color:#1d1c25"> -->
<main class="ps-main" style="background-color: #fafaff;">
    <!-- for desktop -->
    <div class="slideshow">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="4000">
            <!-- Indicators -->
            <style>
                ol li::before {
                    display: none
                }
            </style>
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img loading="lazy" src="<?= base_url('assets/user/images/banner/home-banner0.webp') ?>" alt="S-Plus, Smart Living">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="animated fadeInDown delay-1s c-title">
                            S-PLUS INDONESIA
                        </span>
                        <br>
                        <span class="animated fadeInDown delay-2s c-body">
                            <i>SMART LIVING WITH S-PLUS</i>
                        </span>
                    </div>
                </div>
                <div class="item">
                    <img loading="lazy" src="<?= base_url('assets/user/images/banner/home-banner1.jpg') ?>" alt="S-Plus Pintu ABS dan UPVC Terbaik">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="animated fadeInDown delay-1s c-title">
                            PINTU
                        </span>
                        <br>
                        <span class="animated fadeInDown delay-2s c-body">
                            ABS KUALITAS TERBAIK
                        </span>
                        <br><br>
                        <a href="<?= base_url('kategori/s-plus-pintu') ?>" class="btn btn-primary animated fadeInDown delay-2s">SELENGKAPNYA</a>
                    </div>
                </div>
                <div class="item">
                    <img loading="lazy" src="<?= base_url('assets/user/images/banner/home-banner2.jpg') ?>" alt="S-Plus Jendela UPVC Terbaik">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="animated fadeInDown delay-1s c-title">
                            JENDELA
                        </span>
                        <br>
                        <span class="animated fadeInDown delay-2s c-body">
                            UPVC BERKUALITAS
                        </span>
                        <br><br>
                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>" class="btn btn-primary animated fadeInDown delay-2s">SELENGKAPNYA</a>
                    </div>
                </div>
                <div class="item">
                    <img loading="lazy" src="<?= base_url('assets/user/images/banner/home-banner3.jpg') ?>" alt="S-Plus WPC Deck Terbaik">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="animated fadeInDown delay-1s c-title">
                            WPC DECK
                        </span>
                        <br>
                        <span class="animated fadeInDown delay-2s c-body">
                            WPC KUALITAS TERBAIK
                        </span>
                        <br><br>
                        <a href="<?= base_url('kategori/s-plus-wpc/wpc_kategori') ?>" class="btn btn-primary animated fadeInDown delay-2s">SELENGKAPNYA</a>
                    </div>
                </div>
                <div class="item">
                    <img loading="lazy" src="<?= base_url('assets/user/images/banner/home-banner4.jpg') ?>" alt="S-Plus Plafon UPVC Terbaik">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="animated fadeInDown delay-1s c-title">
                            PLAFON
                        </span>
                        <br>
                        <span class="animated fadeInDown delay-2s c-body">
                            RINGAN DAN AWET
                        </span>
                        <br><br>
                        <a href="<?= base_url('kategori/s-plus-interior-material/plafon_upvc') ?>" class="btn btn-primary animated fadeInDown delay-2s">SELENGKAPNYA</a>
                    </div>
                </div>
                <div class="item">
                    <img loading="lazy" src="<?= base_url('assets/user/images/banner/home-banner5.jpg') ?>" alt="S-Plus Solid Surface Terbaik">
                    <div class="carousel-caption d-none d-md-block">
                        <span class="animated fadeInDown delay-1s c-title">
                            SOLID SURFACE
                        </span>
                        <br>
                        <span class="animated fadeInDown delay-2s c-body">
                            HALUS DAN KOKOH
                        </span>
                        <br><br>
                        <a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>" class="btn btn-primary animated fadeInDown delay-2s">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <?php if (!$this->agent->is_mobile()) : ?>
        <div class="linked-button" id="sinar">
            <a href="https://sinargarden.com" target="_blank"><img loading="lazy" src="<?= base_url('assets/user/images/sinar-button.webp') ?>" alt="Sinargarden - Kain Awning dan Upholstery"></a>
        </div>
        <div class="linked-button" id="masker" style="top:35vh">
            <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><img loading="lazy" src="<?= base_url('assets/user/images/kategori/splus-face-mask/icon.png') ?>" alt="S-Plus Indonesia - Face Masks"></a>
        </div>
    <?php endif; ?>
    <br><br><br><br>

    <div>
        <?php if ($this->agent->is_mobile()) : ?>
            <div class="page-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 py-3">
                            <img loading="lazy" src="<?= base_url('assets/user/portfolio/sample.png') ?>" alt="welcome">
                            <br></br>
                            <center>
                                <h1 class="h-heading"><b>WELCOME TO</b>
                                    <span class="fg-danger"><b>S-PLUS INDONESIA</b></span>
                                </h1>
                            </center>
                            <p style="color:#0a0a0a;font-size: 12px; text-align: justify;">S-Plus merupakan perusahaan manufaktur yang memproduksi general building materials,
                                yaitu ABS-Engineering Door, UPVC Window, Plafon, WPC, Roll Blind, Solid Surface, Kitchen Set dan Furniture.
                                Semua produk tersebut digunakan umum untuk rumah tinggal di Korea Selatan Eropa dan AS.Kami S-Plus,memproduksi semua produk di Cirebon-Indonesia menggunakan
                                teknologi standar dari Korea Selatan.</p>
                            <br></br>
                            <center><a href="<?= base_url('tentang-kami') ?>" class="btn btn-primary mt-2">Read More</a></center>
                        </div>

                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="page-section" style="background: url('<?= base_url('assets/user/images/background/bgdb5.jpg') ?>'); background-size: cover;" class="pt-20">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- <div class="col-lg-3 py-3">
                        <img loading="lazy" src="<?= base_url('assets/user/portfolio/sampel.png') ?>" style="height: 290px;" alt="welcome">

                    </div> -->
                        <div class="col-lg-6 py-3">

                            <h1 class="title-section"><b>WELCOME TO</b>
                                <span class="fg-danger"><b>S-PLUS INDONESIA</b></span>
                            </h1>
                            <p style="color:#0a0a0a;font-size: 18px;" class="h-box-title">PT.Smart Techtex adalah Perusahaan No.1 manufacturer of material Building</p>
                            <br></br>
                            <a href="<?= base_url('tentang-kami') ?>" class="btn btn-primary mt-4">Read More</a>
                        </div>
                        <div class="col-lg-6 py-3">
                            <div class="">
                                <img loading="lazy" src="<?= base_url('assets/user/portfolio/sample.png') ?>" alt="welcome">
                                <!-- <iframe src="https://www.youtube.com/embed/sTB6RMN1IEA" style="width:600px;height:300px;display:block;" frameborder="0" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div>
        <?php if ($this->agent->is_mobile()) : ?>
            <div>
                <Center>
                    <h1 class="h-heading"><b>OUR PRODUCT</b><span class="fg-danger"><b>S-PLUS INDONESIA</b></span></h1>
                </center>


                <div class="row pt-20">
                    <div class="col-sm-4 col-xs-4">
                        <a href="<?= base_url('kategori/s-plus-pintu') ?>">
                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/pintu.webp') ?>" alt="S-Plus Pintu">
                            <div class="h-box">
                                <div class="h-box-title-m"><b>PINTU</b></div>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-4 col-xs-4">
                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>">
                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/jendela.webp') ?>" alt="S-Plus Parasol">
                            <div class="h-box">
                                <div class="h-box-title-m"><b>JENDELA</b></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>">
                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/kitchen.webp') ?>" width="100x100" alt="S-Plus PVC Foam Board">
                            <div class="h-box">
                                <div class="h-box-title-m"><b>INTERIOR MATERIAL</b></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>">
                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/plafon.webp') ?>" width="100x100" alt="S-Plus Vinyl Flooring">
                            <div class="h-box">
                                <div class="h-box-title-m"><b>EXTERIOR MATERIAL</b></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>">
                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/pvc-foam-board.webp') ?>" width="100x100" alt="S-Plus Woven Vinyl Flooring">
                            <div class="h-box">
                                <div class="h-box-title-m"><b>MASKER</b></div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                        <a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">
                            <img loading="lazy" src="<?= base_url('assets/user/images/banner/namo.webp') ?>" width="100x100" alt="S-Plus IROOM">
                            <div class="h-box">
                                <div class="h-box-title-m"><b>AKSESORIS</b></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        <?php else : ?>
            <div class="block bg-lighter full-block bottom-null" style="background: url('<?= base_url('assets/user/images/background/bgdb4.jpg') ?>'); background-size: cover;" class="pt-10">
                <Center>
                    <h1 class="title-section"><b>OUR PRODUCT</b><span class="fg-danger"><b>S-PLUS INDONESIA</b></span></h1>
                </center>
                <div class="container">
                    <div class="hexagon-box-wrapper">
                        <div class="hexagon-box">
                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-pintu') ?>'">
                                <div class="">
                                    <div class="h-box-title" style="padding-top: 50px;padding-right: 10px;padding-left: 10px;padding-bottom: 10px;">
                                        <b>PINTU</b>
                                    </div>
                                </div>
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/pintu.webp') ?>" class="scl zoom-in" alt="S-Plus Pintu">

                            </div>
                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-upvc-jendela') ?>'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/jendela.webp') ?>" class="scl zoom-in" alt="S-Plus Jendela">
                                <div class="">
                                    <div class="h-box-title" style="padding-left: 0px;padding-right: 0px;"><b>JENDELA</b></div>
                                </div>
                            </div>

                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-wpc/wpc') ?>'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/plafon.webp') ?>" class="scl zoom-in" alt="S-Plus Plafon">
                                <div class="h-box">
                                    <div class="h-box-title"><b>EXTERIOR MATERIAL</b></div>
                                </div>
                            </div>

                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('v_kategori') ?>'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/logo-poduk.png') ?>" class="scl zoom-in" style='width:180px' alt="S-Plus Indonesia">
                            </div>
                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-face-mask') ?>'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/pvc-foam-board.webp') ?>" class="scl zoom-in" alt="S-Plus WPC">
                                <div class="h-box">
                                    <div class="h-box-title"><b>MASKER</b></div>
                                </div>
                            </div>

                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/namo.webp') ?>" class="scl zoom-in" alt="S-Plus Namo">
                                <div class="h-box">
                                    <div class="h-box-title"><b>AKSESORIS</b></div>
                                </div>
                            </div>
                            <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-interior-material') ?>'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/kitchen.webp') ?>" class="scl zoom-in" alt="S-Plus Kitchen Set">
                                <div class="h-box">
                                    <div class="h-box-title"><b>INTERIOR MATERIAL</b></div>
                                </div>
                            </div>

                            <!-- <div class="hexagon-icon" onclick="window.location.href='https://sinargarden.com/parasol'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/parasol.webp') ?>" class="scl zoom-in" alt="S-Plus Sun Shade">
                                <div class="h-box">
                                    <div class="h-box-title"><b>SINAR GARDEN</b></div>
                                </div>
                            </div> -->
                            <!-- <div class="hexagon-icon" onclick="window.location.href = '<?= base_url('kategori/s-plus-pintu/iroom_door') ?>'">
                                <img loading="lazy" src="<?= base_url('assets/user/images/banner/iroom.webp') ?>" class="scl zoom-in" alt="S-Plus Solid Surface">
                                <div class="h-box">
                                    <div class="h-box-title"><b>IROOM</b></div>
                                </div>
                            </div> -->


                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="page-section" style="background-image: url(assets/user/portfolio/world_pattern.svg);background-color: #220000;">
        <?php if ($this->agent->is_mobile()) : ?>
            <div class="container">
                <div class="row align-items-center">
                    <center><span class="h-heading">PORTFOLIO OUR LATEST PROJECTS</span></center>

                </div>
                <div class="row mt-20">

                    <div class="col-sm-4 col-xs-6" style=" bottom: 10px;">
                        <div class="portfolio">
                            <a href="<?= base_url('assets/katalog-pdf/ABS Door.pdf') ?>" data-fancybox="portfolio">
                                <img src="<?= base_url('assets/user/portfolio/abs.jpg') ?>" alt="">
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-4 col-xs-6" style=" bottom: 10px;">
                        <div class="portfolio">
                            <a href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>" data-fancybox="portfolio">
                                <img src="<?= base_url('assets/user/portfolio/upvc-door.jpg') ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6" style=" bottom: 5px;">
                        <div class="portfolio">
                            <a href="<?= base_url('assets/katalog-pdf/NAMO Door.pdf') ?>" data-fancybox="portfolio">
                                <img src="<?= base_url('assets/user/portfolio/namo.jpg') ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6" style=" bottom: 5px;">
                        <div class="portfolio">
                            <a href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>" data-fancybox="portfolio">
                                <img src="assets/user/portfolio/upvc-window.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="portfolio">
                            <a href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>" data-fancybox="portfolio">
                                <img src="<?= base_url('assets/user/portfolio/plafon.jpg') ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <div class="portfolio">
                            <a href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>" data-fancybox="portfolio">
                                <img src="<?= base_url('assets/user/portfolio/Masker.jpg') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <br></br>

                <center><a href="<?= base_url('e-katalog') ?>" class="btn btn-outline-primary">Browse Projects <span class="mai-arrow-forward ml-2"></span></a></center>

            </div>
        <?php else : ?>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 py-3">
                        <h1 class="title-section"><b style="color:#fff6f6;"> Portfolio Our Latest Projects E-katalog</b></h1>
                    </div>

                    <div class="col-md-12 py-3 text-md-right">
                        <a href="<?= base_url('e-katalog') ?>" class="btn btn-outline-primary">Browse Projects <span class="mai-arrow-forward ml-2"></span></a>
                    </div>
                </div>
                <br></br>
                <div>
                    <div class="row mt-3">
                        <div class="col-lg-4 py-3">
                            <div class="portfolio">
                                <a href="<?= base_url('assets/katalog-pdf/ABS Door.pdf') ?>" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/user/portfolio/abs.jpg') ?>" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 py-3">
                            <div class="portfolio">
                                <a href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/user/portfolio/upvc-door.jpg') ?>" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 py-3">
                            <div class="portfolio">
                                <a href="<?= base_url('assets/katalog-pdf/NAMO Door.pdf') ?>" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/user/portfolio/namo.jpg') ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <br></br>
                    <div class="row mt-3">
                        <div class="col-lg-4 py-3">
                            <div class="portfolio">
                                <a href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>" data-fancybox="portfolio">
                                    <img src="assets/user/portfolio/upvc-window.jpg" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 py-3">
                            <div class="portfolio">
                                <a href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/user/portfolio/plafon.jpg') ?>" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-4 py-3">
                            <div class="portfolio">
                                <a href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/user/portfolio/Masker.jpg') ?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="page-section3">
        <?php if ($this->agent->is_mobile()) : ?>
            <div class="container">
                <div class="text-center">
                    <h1 class="h-heading">TESTIMONI</h1>
                </div>

                <div class="row pt-20">
                    <div class="col-sm-4 col-xs-6">
                        <!-- <div class="card-blog">
                            <iframe src="assets/images/vidiopromosi/splus1.mp4" style="height:200px;display:block;" frameborder="0" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe>
                            <br></br>
                            <div class="">
                                <div class="avatar">
                                    <img src="assets/user/images/profile/mr-kim.jpg" alt="">
                                </div>
                                <div class="entry-footer">
                                    <div class="post-author" style="color: #0a0a0a;">KIM ILPYO</div>
                                    <a class="post-date" style="color: #0a0a0a;">Executive Director</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="card-blog" style="padding:0px;">
                            <iframe src="assets/images/vidiopromosi/splus1.mp4" style="height:200px;display:block;" frameborder="0" allow="accelerometer;encrypted-media;gyroscope;picture-in-picture" type="video/mp4"></iframe>

                            <div class="testimony-wrap py-4" style="color: #0a0a0a;">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-3">RUMAH PAK DARMONO BOS DAIHATZU.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <!-- <div class="card-blog">
                            <iframe src="https://www.youtube.com/embed/sTB6RMN1IEA" style="height:200px;display:block;" frameborder="0" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe>
                            <br></br>
                            <div class="">
                                <div class="avatar">
                                    <img src="assets/user/images/profile/ms-dian.jpg" alt="">
                                </div>
                                <div class="entry-footer">
                                    <div class="post-author" style="color: #0a0a0a;">DIAN SUDIANTI</div>
                                    <a class="post-date" style="color: #0a0a0a;">General Manager</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="card-blog" style="padding:0px;">
                            <iframe src="assets/images/vidiopromosi/splus2.mp4" style="height:200px;display:block;" frameborder="0" allow="accelerometer;encrypted-media;gyroscope;picture-in-picture" type="video/mp4"></iframe>

                            <div class="testimony-wrap py-4" style="color: #0a0a0a;">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-3">RS.SEKAR KAMULYAN KUNINGAN JAWA BARAT.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <!-- <div class="card-blog">
                            <iframe src="https://www.youtube.com/embed/sTB6RMN1IEA" style="height:200px;display:block;" frameborder="0" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe>
                            <br></br>
                            <div class="">
                                <div class="avatar">
                                    <img src="assets/user/images/showroom/cirebon/tim/feri.jpg" alt="">
                                </div>
                                <div class="entry-footer">
                                    <div class="post-author" style="color: #0a0a0a;">Feri Budi M</div>
                                    <a class="post-date" style="color: #0a0a0a;">Manager Marketing</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="card-blog" style="padding:0px;">
                            <iframe src="assets/images/vidiopromosi/splu3.mp4" style="height:200px;display:block;" frameborder="0" allow="accelerometer;encrypted-media;gyroscope;picture-in-picture" type="video/mp4"></iframe>

                            <div class="testimony-wrap py-4" style="color: #0a0a0a;">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-3">KANTOR JASA MARGA CIREBON.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <!-- <div class="card-blog">
                            <iframe src="https://www.youtube.com/embed/sTB6RMN1IEA" style="height:200px;display:block;" frameborder="0" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe>
                            <br></br>
                            <div class="">
                                <div class="avatar">
                                    <img src="assets/user/images/showroom/cirebon/tim/ivan.jpg" alt="">
                                </div>
                                <div class="entry-footer">
                                    <div class="post-author" style="color: #0a0a0a;">Ivan Hermawan</div>
                                    <a class="post-date" style="color: #0a0a0a;">Asisten Marketing</a>
                                </div>
                            </div>
                        </div> -->
                        <div class="card-blog" style="padding:0px;">
                            <iframe src="assets/images/vidiopromosi/splus4.mp4" style="height:200px;display:block;" frameborder="0" allow="accelerometer;encrypted-media;gyroscope;picture-in-picture" type="video/mp4"></iframe>

                            <div class="testimony-wrap py-4" style="color: #0a0a0a;">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                <div class="text">
                                    <p class="mb-3">PERUMAHAN BAGET AYU KUNINGAN.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="page-section1" style="background: url('<?= base_url('assets/user/images/background/bgdb3.jpg') ?>'); background-size: cover;" class="pt-70">
                <div class="container">
                    <div class="text-center">
                        <h1 class="title-section"><b style="color:#020202;">Testimoni</b></h1>
                    </div>
                    <div class="row my-5 card-blog-row" style="margin-top: 60px;">
                        <div class="col-lg-3 py-3">
                            <!-- <div class="">
                                <div class="avatar">
                                    <img src="assets/user/images/profile/mr-kim.jpg" alt="">
                                </div>
                                <div class="entry-footer">
                                    <div class="post-author">KIM ILPYO</div>
                                    <a class="post-date">Executive Director</a>
                                </div>
                            </div>
                            <div class="body">
                                <div class="post-title"><a href="blog-single.html">What is Splus Indonesia ?</a></div>
                                <div class="post-excerpt"> merupakan perusahaan manufaktur yang memproduksi general building materials,
                                    yaitu ABS-Engineering Door,uPVC Window,Plafon,WPC,Roll Blind,Solid Surface,Kitchen Set dan Furniture.
                                    Semua produk tersebut digunakan umum untuk rumah tinggal di Korea Selatan,Eropa dan AS,
                                    Kami S-Plus, memproduksi semua produk di Cirebon-Indonesia menggunakan teknologi.</div>
                            </div> -->
                            <div class="card-blog">
                                <iframe src="assets/images/vidiopromosi/splus1.mp4" style="height:400px;display:block;" frameborder="0" allow="accelerometer;autoplay;encrypted-media;gyroscope;picture-in-picture" type="video/mp4"></iframe>
                                <br></br>

                                <div class="testimony-wrap py-4" style="color: #0a0a0a;">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                    <div class="text">
                                        <p class="mb-5">RUMAH PAK DARMONO BOS DAIHATZU.</p>
                                        <!-- <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.a2MnMHMs44.webp)"></div>
                                        <div class="avatar">
                                            <img src="assets/user/images/profile/ms-dian.jpg" alt="">
                                        </div>
                                        <div class="entry-footer">
                                            <div class="post-author" style="color: #0a0a0a;">DIAN SUDIANTI</div>
                                            <a class="post-date" style="color: #0a0a0a;"><b>General Manager</b></a>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 py-3">
                            <div class="card-blog">
                                <iframe src="assets/images/vidiopromosi/splus2.mp4" style="height:400px;display:block;" frameborder="0" allow="encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe>
                                <!-- <iframe src="assets/images/vidiopromosi/splus8.mp4" style="height:200px;display:block;" frameborder="0" allow="accelerometer;encrypted-media;gyroscope;picture-in-picture" type="video/mp4"></iframe> -->
                                <br></br>
                                <div class="testimony-wrap py-4" style="color: #0a0a0a;">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                    <div class="text">
                                        <p class="mb-5">RS.SEKAR KAMULYAN KUNINGAN JAWA BARAT.</p>
                                        <!-- <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.a2MnMHMs44.webp)"></div>
                                        <div class="avatar">
                                            <img src="assets/user/images/profile/ms-dian.jpg" alt="">
                                        </div>
                                        <div class="entry-footer">
                                            <div class="post-author" style="color: #0a0a0a;">DIAN SUDIANTI</div>
                                            <a class="post-date" style="color: #0a0a0a;"><b>General Manager</b></a>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 py-3">
                            <div class="card-blog">
                                <iframe src="assets/images/vidiopromosi/splu3.mp4" style="height:400px;display:block;" frameborder="0" allow="encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe>
                                <br></br>
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                    <div class="text">
                                        <p class="mb-5">PERUMAHAN BAGET AYU KUNINGAN.</p>
                                        <!-- <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.a2MnMHMs44.webp)"></div>
                                        <div class="avatar">
                                            <img src="assets/user/images/showroom/cirebon/tim/feri.jpg" alt="">
                                        </div>
                                        <div class="entry-footer">
                                            <div class="post-author" style="color: #0a0a0a;">Feri Budi M</div>
                                            <a class="post-date" style="color: #0a0a0a;"><b>Manager Marketing</b></a>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 py-3">
                            <div class="card-blog">
                                <iframe src="assets/images/vidiopromosi/splus4.mp4" style="height:400px;display:block;" frameborder="0" allow="encrypted-media;gyroscope;picture-in-picture" type="video/mp4" allowfullscreen></iframe>
                                <br></br>
                                <div class="testimony-wrap py-4">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
                                    <div class="text">
                                        <p class="mb-5">KANTOR JASA MARGA CIREBON.</p>
                                        <!-- <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image:url(images/xperson_1.jpg.pagespeed.ic.a2MnMHMs44.webp)"></div>
                                        <div class="avatar">
                                            <img src="assets/user/images/showroom/cirebon/tim/ivan.jpg" alt="">
                                        </div>
                                        <div class="entry-footer">
                                            <div class="post-author" style="color: #0a0a0a;">Ivan Hermawan</div>
                                            <a class="post-date" style="color: #0a0a0a;"><b>Asisten Marketing</b></a>
                                        </div>
                                    </div> -->
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div>
                            <center><a href="<?= base_url('testimoni') ?>" class="btn btn-primary mt-4" style="margin-top: 30px;">Read More</a></center>
                        </div>


                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>


    <?php if ($this->agent->is_mobile()) : ?>
        <div class="showroom pb-80">
            <center><span class="h-heading">SHOWROOM</span></center>
            <select class="ps-select selectpicker showroom-list" onchange="changeShowroom(this.value)">
                <option value="cirebon">Cirebon (Head Office) </option>
                <option value="jabodetabek">Jabodetabek</option>
                <option value="bandung">Bandung</option>
                <option value="yogyakarta">Yogyakarta</option>
                <option value="semarang">Semarang</option>
                <option value="surabaya">Surabaya</option>
                <option value="bali">Bali</option>
                <option value="medan">Medan</option>
            </select>
            <br><br>
            <!-- Daftar showroom S-Plus -->
            <div class="row cirebon">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/headoffice.webp') ?>" alt="Showroom S-Plus Cirebon" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Cirebon Gallery</span> <br>
                    <span class="body">
                        Jl. Raya Kanci Cirebon – Tegal KM 13,5 Cirebon 45182
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-cirebon') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>
            <br>
            <div class="row jabodetabek pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img src="<?= base_url('assets/user/images/showroom/cawang/cawang.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Jakarta Timur Office (cawang)</span> <br>
                    <span class="body">
                        Rukan Patria Park RK 05, Jl. D.I.Panjaitan Kav.5-7, Cipinang Cempedak Jatinegara, Jakarta Timur
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-cawang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>
            <div class="row jabodetabek pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img src="<?= base_url('assets/user/images/showroom/bogor/bogor.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Bogor Office</span> <br>
                    <span class="body">
                        Yasmin Garden Sektor 3, Jl. Culan Raya No.28 Rt.03 Rw.08 Kel.Curug Mekar, Bogor Barat
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-bogor') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>
            <div class="row jabodetabek pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/showroom/jakarta/mobile.webp') ?>" alt="Showroom S-Plus Jakarta" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Jakarta Gallery</span> <br>
                    <span class="body">
                        Jl. Pinangsia Raya No. 105 Pinangsia Barat, Jakarta Barat
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-jakarta') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row jabodetabek pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/cibubur.webp') ?>" alt="Showroom S-Plus Cibubur" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Cibubur Gallery</span> <br>
                    <span class="body">
                        Ruko Citra Gran, Blok R6/35 Jl. Raya Alternative Cibubur KM.4 Jatisampurna-Cibubur, Bekasi
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-cibubur') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <!--<div class="row jabodetabek pb-40 hide">-->
            <!--    <div class="col-sm-4 col-xs-4">-->
            <!--        <img loading="lazy" src="<?= base_url('assets/user/images/profile/bekasi.webp') ?>" alt="Showroom S-Plus Bekasi" style="border-radius: 5px;" style="width:200px">-->
            <!--    </div>-->
            <!--    <div class="col-sm-8 col-xs-8">-->
            <!--        <span class="title">Bekasi Gallery</span> <br>-->
            <!--        <span class="body">-->
            <!--        Jl.Ir.H.Juanda No 91C-D Kel. Bekasi Jaya,Kec. Bekasi Timur Kota Bekasi-->
            <!--        </span>-->
            <!--        <a href="<?= base_url('hubungi-kami/gallery-bekasi') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>-->
            <!--    </div>-->
            <!--</div>-->

            <div class="row jabodetabek pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/serpong.webp') ?>" alt="Showroom S-Plus Tangerang" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Tangerang Gallery</span> <br>
                    <span class="body">
                        Jl. Boulevard Raya Ruko 1B Blok BA.3 No 54-55 Serpong, Tangerang
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-tangerang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row bandung pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/bandung.webp') ?>" alt="Showroom S-Plus Bandung 1" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Bandung Gallery 1</span> <br>
                    <span class="body">
                        Plaza IBCC Block D2 No.5 Jl. Jenderal Ahmad Yani No. 269, Bandung
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-bandung1') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row bandung pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/bandung2.webp') ?>" alt="Showroom S-Plus Bandung 2" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Bandung Gallery 2</span> <br>
                    <span class="body">
                        Plaza IBCC Block B3 No.18 Jl. Jenderal Ahmad Yani No. 296, Bandung
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-bandung2') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row yogyakarta pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/jogja.webp') ?>" alt="Showroom S-Plus Yogyakarta" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Yogyakarta Gallery</span> <br>
                    <span class="body">
                        Jl.Diponegoro No. 103, RT/RW 022/006 Kel. Bumijo Kec. Jetis, Jogjakarta
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-jogjakarta') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row semarang pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/semarang.webp') ?>" alt="Showroom S-Plus Semarang" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Semarang Gallery</span> <br>
                    <span class="body">
                        Jln Pekojan No 49 Purwodinatan, Semarang
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-semarang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row surabaya pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/surabaya2.webp') ?>" alt="Showroom S-Plus Surabaya 1" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Surabaya Gallery 1</span> <br>
                    <span class="body">
                        Jl. Raya Jemursari No. 2F & 2G, Surabaya
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-surabaya1') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row surabaya pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/showroom/surabaya-2/main.webp') ?>" alt="Showroom S-Plus Surabaya 2" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Surabaya Gallery 2</span> <br>
                    <span class="body">
                        Jl. Baliwerti No 28 Alon-Alon Controng, Bubutan Surabaya
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-surabaya2') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row bali pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/bali.webp') ?>" alt="Showroom S-Plus Bali" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Bali Gallery</span> <br>
                    <span class="body">
                        Jl. Mahendradata No. 59 Denpasar, Bali
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-bali') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>

            <div class="row medan pb-40 hide">
                <div class="col-sm-4 col-xs-4">
                    <img loading="lazy" src="<?= base_url('assets/user/images/profile/medan.webp') ?>" alt="Showroom S-Plus Medan" style="border-radius: 5px;" style="width:200px">
                </div>
                <div class="col-sm-8 col-xs-8">
                    <span class="title">Medan Gallery & Assembling</span> <br>
                    <span class="body">
                        Jl. Cemara No 63 Kec. Medan Timur, Medan
                    </span>
                    <a href="<?= base_url('hubungi-kami/gallery-medan') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                </div>
            </div>


            <br>
        </div>
    <?php else : ?>

        <div class="page-section" style="background: url('<?= base_url('assets/user/images/background/bgdb2.jpg') ?>'); background-size: cover;" class="pt-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 py-3">
                        <h1 class="title-section"><b style="color:#080808;"> Maps Cabang Official</b> <span class="fg-danger"><b>S-plus Indonesia</b></span></h1>
                    </div>
                </div>
                <br></br>

                <div class="row mt-12">
                    <div class="col-lg-12 py-3" style="bottom: 60px;">
                        <div class="portofolio">
                            <a>
                                <iframe src="<?= base_url('assets/user/images/maps/maps2.svg') ?>" frameborder="0" style="height:500px" class="portfolio"></iframe>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="text-center" style="background-color:#AADAFF;">
            <iframe src="<?= base_url('assets/user/images/maps/maps2.svg') ?>" frameborder="0" style="height:300px"></iframe>
        </div> -->

    <?php endif; ?>

    <div class="text-center pt-5 pb-5" style="background-color:#fff;">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/mitra10.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/depo-bangunan.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/bj-home.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/bazar-bangunan.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/ekg-mart.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/karya-utama.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/kaspea.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/kita-utama.webp') ?>" class="imgbw pb-10" style="width:60px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/matahari-jaya.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/mitra-bangunan.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/pratama.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/sba.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/sentral-bangunan.webp') ?>" class="imgbw pb-10" style="width:50px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/transhome.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/rojo.webp') ?>" class="imgbw pb-10" style="width:50px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/royal-bangunan.webp') ?>" class="imgbw pb-10" style="width:70px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/cmb.webp') ?>" class="imgbw pb-10" style="width:50px;" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/home-central.webp') ?>" class="imgbw pb-10" style="width:80px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/terminal-bangunan.webp') ?>" class="imgbw pb-10" style="width:70px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/ajbs.webp') ?>" class="imgbw pb-10" style="width:60px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/bravo.webp') ?>" class="imgbw pb-10" style="width:60px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/tirta-bangunan.webp') ?>" class="imgbw pb-10" style="width:110px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/sinar-abadi.webp') ?>" class="imgbw pb-10" style="width:60px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/multidepo.jpeg') ?>" class="imgbw pb-10" style="width:110px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/alam-makmur.jpg') ?>" class="imgbw pb-10" style="width:110px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/berdikari-expo.jpg') ?>" class="imgbw pb-10" style="width:60px" alt="Partner S-Plus">
        <img loading="lazy" src="<?= base_url('assets/user/images/partner/roma-bangunan.jpg') ?>" class="imgbw pb-10" style="width:60px;" alt="Partner S-Plus">
    </div>
    <?php $this->load->view('user/footer') ?>
    <?php if (!$this->agent->is_mobile()) : ?>
        <script>
            window.onload = function() {
                $(window).scroll(function() {
                    if ($('header').hasClass('navigation--pin')) {
                        $('#sinar').css('top', '12vh');
                        $('#masker').css('top', '35vh');
                    } else {
                        $('#sinar').css('top', '1vh');
                        $('#masker').css('top', '23vh');
                    }
                })
            }
        </script>
    <?php else : ?>
        <div class="linked-button">
            <a href="https://sinargarden.com" target="_blank"><img loading="lazy" src="<?= base_url('assets/user/images/sinar-button.webp') ?>" alt="Sinargarden - Kain Awning dan Upholstery"></a>
        </div>
        <div class="linked-button">
            <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><img loading="lazy" src="<?= base_url('assets/user/images/kategori/splus-face-mask/icon.png') ?>" alt="S-Plus Indonesia - Face Masks" style="bottom:19vh"></a>
        </div>
    <?php endif; ?>