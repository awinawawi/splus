<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Splus Ecommerce</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/templatemo-hexashop.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/owl-carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/lightbox.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/user/images/logo.png') ?>">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <div>

                            <a href="<?= base_url('Ecommerce') ?>" class="logo">
                                <img src="<?= base_url('assets/images/ourproduk/logo.jpg') ?>" style="width: 300px;">
                            </a>
                        </div>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="submenu">
                                <a href="javascript:;">Hubungi kami</a>
                                <ul>
                                    <li><a href="<?= base_url('tentang-kami') ?>">About Us</a></li>
                                    <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="<?= base_url('administrator') ?>">login</a></li>
                        </ul>

                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top" style="background: url('<?= base_url('assets/images/ourproduk/produk/contact-us.jpg') ?>'); background-size: cover;" class="pt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2 style="color:black;">CONTACT US</h2>
                        <span style="color:black;">can contact here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <div class="ps-contact ps-section" id="tentang-kami">

        <?php if ($this->agent->is_mobile()) : ?>
            <div class="video-profile pb-80" style="width:100%; text-align:center;">
                <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 30px;">COMPANY PROFILE PT. SMART TECHTEX</span>
                <iframe style="<?= !$this->agent->is_mobile() ? "width:70%" : "width:80%" ?>" width="300px" height="300px" style="display:block;" src="https://www.youtube.com/embed/sTB6RMN1IEA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <?php else : ?>
            <div class="video-profile pb-80" style="width:100%; text-align:center;">
                <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 30px;">COMPANY PROFILE PT. SMART TECHTEX</span>
                <!--versi indonesia-->
                <!--<iframe style="<?= !$this->agent->is_mobile() ? "width:70%" : "width:100%" ?>" width="500px" height="400px" style="display:block;" src="https://www.youtube.com/embed/mWdghRVq8ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!--versi inggris-->
                <iframe style="<?= !$this->agent->is_mobile() ? "width:70%" : "width:100%" ?>" width="500px" height="500px" style="display:block;" src="https://www.youtube.com/embed/sTB6RMN1IEA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        <?php endif; ?>



        <div class="prl hideimg wow fadeInDown">
            <img class="imgbg" src="<?= base_url('assets/user/images/background/bg-hubungi.jpg') ?>" width="46%">
        </div>
        <div class="ps-container">
            <div class="head-office pb-80">
                <img src="<?= base_url('assets/user/images/background/headoffice.jpg') ?>" class="m-img">
                <div class="h-title">
                    HEAD OFFICE AND FACTORY
                </div> <br>
                <div class="hbody" style="font-size: 20px; font-weight:500; font: 'Montserrat';">

                    Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip <br>
                    Kec. Pangenan Kab. Cirebon 45182<br><br>
                    Email : <a href="mailto:splus@splusindonesia.co.id">splus@splusindonesia.co.id</a> <br>
                    Telp &nbsp; : (0231) 8511781 – 85 <br>
                    Fax &nbsp; : (0231) 8511782 <br> <br>
                    <b>Jam Kerja </b><br>
                    Senin - Jumat &nbsp; &nbsp; &nbsp; &nbsp;: 08.00 - 16.00 <br>
                    Sabtu &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 08.00 - 13.00
                    <br>
                </div>

            </div>

            <div class="marketing pb-20">
                <div class="row pt-20">
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                        <img src="<?= base_url('assets/user/images/profile/mr-kim.jpg') ?>" class="imground" style="border-radius:15px;">
                        <span class="h-subtitle h-m-title">KIM ILPYO<br> <small> Executive Director</small></span><br><br>
                    </div>
                    <div class="col-md-9">
                        <span class="h-body h-m-body"><b>Dear Customers,</b></span> <br><br>
                        <span class="h-body h-m-body">
                            S-Plus adalah nama baru untuk menyempurnakan kenyamanan, kemudahan, dan kesehatan untuk rumah tinggal. <br>
                            <a href="#show-more" id="sm-direktur" style="color: #D50000"> <br> <i class="fa fa-arrow-circle-down"></i> More detail</a>
                            <span id="show-more-direktur" style="display: none;"> <br>
                                S-Plus merupakan perusahaan manufaktur yang memproduksi general building materials, yaitu ABS-Engineering Door, uPVC Window, Plafon, WPC, Roll Blind, Solid Surface, Kitchen Set dan Furniture. Semua produk tersebut digunakan umum untuk rumah tinggal di Korea Selatan, Eropa dan AS. Kami S-Plus, memproduksi semua produk di Cirebon-Indonesia menggunakan teknologi standar dari Korea Selatan. <br>
                                <br>
                                S-Plus produk bisa ditemukan di :
                                <span>
                                    <ol type="1">
                                        <li>13 showroom S-Plus : Jakarta, Bekasi, Tangerang, Cibubur, Bandung (2 showroom), Cirebon, Semarang, Jogjakarta, Surbaya (2 showroom), Bali dan Medan </li>
                                        <li>43 Supermarket Bahan Bangunan Nasional : Mitra 10 (35 store), Depo Bangunan (8 store). </li>
                                        <li>156 Modern Market & Toko Bangunan di 12 kota.
                                            S-Plus berkomitmen mensupply building material dengan kualitas terbaik dan memuaskan, mengutamakan kenyamanan, kemudahan, kesehatan untuk tempat tinggal. </li>
                                    </ol>
                                </span>
                                <br />
                                Smart Living with S-Plus
                            </span>
                            <br>
                            <a href="#show-less" id="sl-direktur" style="color: #D50000; display:none;"> <i class="fa fa-arrow-circle-up"></i> Close detail</a>
                        </span>
                    </div>
                </div>
                <div class="row pt-60">
                    <?php if ($this->agent->is_mobile()) : ?>
                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                            <img src="<?= base_url('assets/user/images/profile/ms-dian.jpg') ?>" class="imground" style="border-radius:15px;">
                            <span class="h-subtitle h-m-title">DIAN SUDIANTI<br> <small> General Manager </small></span> <br> <br>
                        </div>
                    <?php endif; ?>
                    <div class="col-md-9">
                        <span class="h-body h-m-body"><b>Selamat Datang,</b></span> <br><br>
                        <span class="h-body h-m-body">
                            Terima kasih atas kunjungan Anda di website PT SMART TECHTEX dengan nama brand “S-Plus”. <br>
                            S-Plus telah menjadi bagian penting dari industri pendukung pembangunan di Indonesia.<br>
                            <a href="#show-more" id="sm-gm" style="color: #D50000"> <br> <i class="fa fa-arrow-circle-down"></i> More detail</a>
                            <span id="show-more-gm" style="display: none;"> <br>
                                Sebagai suplier material bangunan terbesar di Indonesia, S-Plus hadir sebagai penopang pertumbuhan industri melalui layanan terbaik dan tata kelola usaha yang sehat yang berperan dikawasan nasional. <br><br>
                                Berbagai pencapaian dan keberhasilan telah kami raih selama ini melalui S-Plus dengan mitra perusahaan jasa konstruksi baik Swasta maupun BUMN, Modern Market, Toko Bangunan yang tersebar di seluruh Indonesia. <br> <br>
                                Komitmen kami selalu menciptakan inovasi baru dengan menghadirkan produk modern dengan memberikan kualitas dan pelayanan yang terbaik. <br> <br>
                                S-Plus solusi cerdas hidup Anda.
                            </span>
                            <br>
                            <a href="#show-less" id="sl-gm" style="color: #D50000; display:none;"> <i class="fa fa-arrow-circle-up"></i> Close detail</a>
                        </span>
                    </div>
                    <?php if (!$this->agent->is_mobile()) : ?>
                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                            <img src="<?= base_url('assets/user/images/profile/ms-dian.jpg') ?>" class="imground" style="border-radius:15px;">
                            <span class="h-subtitle h-m-title">DIAN SUDIANTI<br> <small> General Manager </small></span> <br> <br>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="showroom pb-80" style="background: url('<?= base_url('assets/user/images/background/bgproduk/tentangbg.jpg') ?>'); background-size: cover;" class="pt-70">
                <div class="h-title">
                    SHOWROOM GALLERY
                </div> <br>
                <div class="h-body">
                    Jaringan distribusi S-Plus seluruh wilayah Indonesia
                </div> <br>
                <?php if ($this->agent->is_mobile()) : ?>
                    <select class="ps-select selectpicker showroom-list" onchange="changeShowroom(this.value)">
                        <option value="cirebon">Cirebon (Head Office) </option>
                        <option value="jabodetabek">Jabodetabek</option>
                        <option value="bandung">Bandung</option>
                        <option value="yogyakarta">Yogyakarta</option>
                        <option value="semarang">Semarang</option>
                        <option value="surabaya">Surabaya</option>
                        <option value="bali">Bali</option>
                        <option value="medan">Medan</option>
                        <option value="palembang">Palembang</option>
                    </select>
                    <br><br>
                    <!-- Daftar showroom S-Plus -->
                    <div class="row cirebon">
                        <div class="col-sm-4 col-xs-4">
                            <img src="<?= base_url('assets/user/images/profile/headoffice.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
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
                            <img src="<?= base_url('assets/user/images/showroom/jakarta/showroom-jakarta.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
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
                            <img src="<?= base_url('assets/user/images/profile/cibubur.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <span class="title">Cibubur Gallery</span> <br>
                            <span class="body">
                                Puri Sriwedari Cibubur Blok C No 3 Harjamukti Cimanggis - Depok
                            </span>
                            <a href="<?= base_url('hubungi-kami/gallery-cibubur') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                        </div>
                    </div>

                    <div class="row jabodetabek pb-40 hide">
                        <div class="col-sm-4 col-xs-4">
                            <img src="<?= base_url('assets/user/images/profile/serpong.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
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
                            <img src="<?= base_url('assets/user/images/profile/bandung.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
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
                            <img src="<?= base_url('assets/user/images/profile/bandung2.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
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
                            <img src="<?= base_url('assets/user/images/profile/jogja.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <span class="title">Yogyakarta Gallery</span> <br>
                            <span class="body">
                                Jl. Diponegoro No. 103, RT/RW 022/006 Kel. Bumijo Kec. Jetis, Jogjakarta
                            </span>
                            <a href="<?= base_url('hubungi-kami/gallery-jogjakarta') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                        </div>
                    </div>

                    <div class="row semarang pb-40 hide">
                        <div class="col-sm-4 col-xs-4">
                            <img src="<?= base_url('assets/user/images/profile/semarang.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <span class="title">Semarang Gallery</span> <br>
                            <span class="body">
                                Jl. Pekojan No 49 Purwodinatan, Semarang
                            </span>
                            <a href="<?= base_url('hubungi-kami/gallery-semarang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                        </div>
                    </div>

                    <div class="row surabaya pb-40 hide">
                        <div class="col-sm-4 col-xs-4">
                            <img src="<?= base_url('assets/user/images/profile/surabaya2.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <span class="title">Surabaya Gallery 1</span> <br>
                            <span class="body">
                                Jl. Raya Jemursari No.2F & 2G, Surabaya
                            </span>
                            <a href="<?= base_url('hubungi-kami/gallery-surabaya1') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                        </div>
                    </div>

                    <div class="row surabaya pb-40 hide">
                        <div class="col-sm-4 col-xs-4">
                            <img src="<?= base_url('assets/user/images/showroom/surabaya-2/showroom-list.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
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
                            <img src="<?= base_url('assets/user/images/profile/bali.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
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
                            <img src="<?= base_url('assets/user/images/profile/medan.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <span class="title">Medan Gallery & Assembling</span> <br>
                            <span class="body">
                                Jl. Cemara No 63 Kec. Medan Timur, Medan
                            </span>
                            <a href="<?= base_url('hubungi-kami/gallery-medan') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                        </div>
                    </div>

                    <div class="row palembang pb-40 hide">
                        <div class="col-sm-4 col-xs-4">
                            <img src="<?= base_url('assets/user/images/profile/palembang.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                        </div>
                        <div class="col-sm-8 col-xs-8">
                            <span class="title">Palembang Gallery & Assembling</span> <br>
                            <span class="body">
                                Graha Mitra Sukarame Blok G No. 7 kel. Talang kelapa kec. Alang-alang lebar kota. Palembang Provinsi. Sumatera Selatan
                            </span>
                            <a href="<?= base_url('hubungi-kami/gallery-palembang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                        </div>
                    </div>
                    <br>
                <?php else : ?>
                    <div class="subshowroom">
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-cawang') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/showroom/cawang/cawang.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                            <span class="h-subtitle">Jakarta Timur Office (Cawang)</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Rukan Patria Park RK 05, Jl. D.I.Panjaitan Kav.5-7, Cipinang Cempedak, Jatinegara-Jakarta Timur</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0813) 98887897</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-cawang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-bogor') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/showroom/bogor/bogor.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                            <span class="h-subtitle">Bogor Office</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Yasmin Garden Sektor 3, Jl. Culan Raya No.28 Rt.03 Rw.08 Kel.Curug Mekar, Bogor Barat</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0811) 11110942</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-bogor') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-cirebon') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/cirebon.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                            <span class="h-subtitle">Cirebon Gallery</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip Kec. Pangenan Kab. Cirebon 45182</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0231) 8511781 – 85<br>
                                                (0231) 8511782</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-cirebon') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-jakarta') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/showroom/jakarta/showroom-jakarta.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Jakarta Gallery</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Pinangsia Raya No. 105 Pinangsia
                                                Barat, Jakarta Barat</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(021) 62301599</p>
                                            <a href="<?= base_url('hubungi-kami/gallery-jakarta') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-cibubur') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/cibubur.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Cibubur Gallery</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Puri Sriwedari Cibubur Blok C No 3 Harjamukti Cimanggis, Depok</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>
                                                (021) 22175431<br>
                                                0821 2789 5362
                                            </p>
                                            <a href="<?= base_url('hubungi-kami/gallery-cibubur') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-tangerang') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/serpong.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Tangerang Gallery</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Villa Melati Mas Blok SR 1/09 Lengkong Raya Serpong<br> Tangerang</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>0812 9506 0480</p>
                                            <a href="<?= base_url('hubungi-kami/gallery-tangerang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-bandung1') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/bandung.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Bandung Gallery 1</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Plaza IBCC Block D2 No.5 Jl. Jenderal
                                                Ahmad Yani No. 269,<br> Bandung</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(022) 7238490</p>
                                            <a href="<?= base_url('hubungi-kami/gallery-bandung1') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-bandung2') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/bandung2.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Bandung Gallery 2</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Plaza IBCC Block B3 No.18 Jl. Jenderal
                                                Ahmad Yani No. 296,<br> Bandung</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(022) 7238296<br>
                                                (022) 7238286</p>
                                            <a href="<?= base_url('hubungi-kami/gallery-bandung2') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-jogjakarta') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/jogja.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Yogyakarta Gallery</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Diponegoro No. 103, RT/RW 022/006 Kel.
                                                Bumijo Kec. Jetis, <br> Jogjakarta</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0274) 2921671</p>
                                            <a href="<?= base_url('hubungi-kami/gallery-jogjakarta') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-semarang') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/semarang.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Semarang Gallery</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Pekojan No 49 Purwodinatan, Semarang
                                                Tengah</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(024) 3580178<br>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-semarang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-bali') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/bali.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Bali Gallery</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Mahendradata No. 59 Denpasar, Bali</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0361) 8450783<br>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-bali') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-surabaya1') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/surabaya2.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Surabaya Gallery 1</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Raya Jemursari No. 2F & 2G,Surabaya</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(031) 99853335<br>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-surabaya1') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-surabaya2') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/showroom/surabaya-2/showroom-list.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Surabaya Gallery 2</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Baliwerti No 28 Alon-Alon Controng,
                                                Bubutan Surabaya</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(031) 99243995<br>
                                            </p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-surabaya2') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-medan') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/medan.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Medan Gallery & Assembling</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Cemara No 63 Kec. Medan Timur, Medan</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(061) 6617976 / 80088395<br>
                                                0812 6062 4544</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-medan') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row pb-40">
                            <a href="<?= base_url('hubungi-kami/gallery-palembang') ?>">
                                <div class="col-lg-4 col-md-4 gallery-popup">
                                    <img src="<?= base_url('assets/user/images/profile/palembang.jpg') ?>" alt="" style="border-radius: 50px;">
                                </div>
                                <div class="col-lg-8 col-lg-8">
                                    <div class="ps-contact__block" data-mh="contact-block">
                                        <header>
                                            <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Palembang Gallery & Assembling</span>
                                        </header>
                                        <footer>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Graha Mitra Sukarame Blok G No. 7 kel. Talang kelapa kec. Alang-alang lebar kota. Palembang Provinsi. Sumatera Selatan</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>0811-2233-4518</p>
                                            <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                            <a href="<?= base_url('hubungi-kami/gallery-palembang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                                <i class="fa fa-arrow-circle-right"></i> More
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <h2>Layanan Pelanggan </h2>
                <br></br>
                <br></br>

                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li><b>Store Location:</b><br>Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip<br>
                                    Kec. Pangenan Kab. Cirebon 45182</li>
                                <li><b>Phone:</b><br>(0231) 8511781 – 85</li>
                                <li><b>Office Location:</b><br>Cirebon-Pangenan</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul>
                                <li><b>Work Hours:</b><br>08:00 AM - 16:00 PM Daily</li>
                                <li><b>Email:</b><br>splusindonesia@gmail.com</li>
                                <li><b>Social Media:</b><br>
                                    <a href="https://www.facebook.com/S-Plus-Indonesia-100698461599924/" class="fa fa-facebook"></a>
                                    <a href="https://www.instagram.com/splusindonesia/" class="fa fa-instagram"></a>
                                    <a href="https://www.youtube.com/channel/UCMYj8Md6whMbPNFcyxjyA6A" class="fa fa-youtube"></a>
                                    <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <a style="color: #fff;">Head Office & Factory</a>
                        <br></br>
                        <ul>
                            <li><a href="#">Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip<br>
                                    Kec. Pangenan Kab. Cirebon 45182</a></li>
                            <li><a href="#">Telp. (0231) 8511781 – 85</a></li>
                            <li><a href="#">Fax.(0231) 85117825</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Our product &amp; Categories</a>
                    <br></br>
                    <ul>
                        <li><a href="#">Pintu</a></li>
                        <li><a href="#">Jendela</a></li>
                        <li><a href="#">Interior Material</a></li>
                        <li><a href="#">Exterior Material</a></li>
                        <li><a href="#">Aksesoris</a></li>
                        <li><a href="#">Masker</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Customer service</a>
                    <br></br>

                    <ul>
                        <li><a href="#">Hubungi Kami</a></li>
                        <li><a href="#">Pemasangan</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Help &amp; Information</a>
                    <br></br>

                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 PT Smart Techtex Group.All Rights Reserved.
                            <br>Follow Us on Social Media: <a href="https://localhost/splus" target="_blank" title="free & premium responsive templates">Splus Indonesia</a>
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->

    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/jquery-2.1.0.min.js') ?>"></script>

    <!-- Bootstrap -->
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/popper.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/bootstrap.min.js') ?>"></script>

    <!-- Plugins -->
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/owl-carousel.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/accordions.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/datepicker.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/scrollreveal.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/waypoints.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/jquery.counterup.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/imgfix.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/slick.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/lightbox.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/isotope.js') ?>"></script>


    <!-- Global Init -->
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/custom.js') ?>"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>