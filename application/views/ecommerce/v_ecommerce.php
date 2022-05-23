<title>E-commerce- S-Plus Indonesia</title>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Splus Ecommerce</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/templatemo-hexashop.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/owl-carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/lightbox.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/user/images/logo.png') ?>">

    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/maicons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/theme.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/vendor/animate/animate.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/vendor/owl-carousel/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/depan-ecommerce/vendor/fancybox/css/jquery.fancybox.css') ?>">

    <!-- <link rel="stylesheet" href="<?= base_url('assets/template/tema/css/style.css') ?>"> -->

    <link rel="stylesheet" href="<?= base_url('assets/template/tema/') ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">






</head>

<body>

    <div class="back-to-topx"></div>
    <a id="back-to-top" href="#" class="back-to-top" role="button" style="color:#d50000"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <?php if ($this->agent->is_mobile()) : ?>
        <div class="">
            <script defer type="text/javascript">
                (function() {
                    var options = {
                        whatsapp: "6281387004321", // harus pake 62 dan tanpa spasi
                        // call_to_action: "Message us", // Call to action
                        position: "right",
                    };
                    var proto = document.location.protocol,
                        host = "getbutton.io",
                        url = proto + "//static." + host;
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = url + '/widget-send-button/js/init.js';
                    s.onload = function() {
                        WhWidgetSendButton.init(host, proto, options);
                    };
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                })();
            </script>
        </div>
    <?php else : ?>

        <div class="">
            <script defer type="text/javascript">
                (function() {
                    var options = {
                        whatsapp: "6281387004321", // harus pake 62 dan tanpa spasi
                        // call_to_action: "Message us", // Call to action
                        position: "right",
                    };
                    var proto = document.location.protocol,
                        host = "getbutton.io",
                        url = proto + "//static." + host;
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = url + '/widget-send-button/js/init.js';
                    s.onload = function() {
                        WhWidgetSendButton.init(host, proto, options);
                    };
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                })();
            </script>
        </div>
    <?php endif; ?>


    <header class="header-area header-sticky">
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="d-inline-block">
                            <span class="fa fa-envelope" style="color: #e10016;"></span> <a href="mailto:splus@splusindonesia.co.id">splus@splusindonesia.co.id</a>
                        </div>
                        <div class="d-inline-block ml-2">
                            <span class="fa fa-headphones" style="color: #e10016;"></span> <a href="tel:(0231) 8511781 – 85">(0231) 8511781 – 85</a>
                        </div>
                    </div>
                    <div class="col-md-4 text-right d-none d-md-block">
                        <div class="social-mini-button">
                            <a href="https://www.facebook.com/S-Plus-Indonesia-100698461599924/"><span class="fa fa-facebook-square" style="color: #e10016;"></span></a>
                            <a href="https://www.instagram.com/splusindonesia/"><span class="fa fa-instagram" style="color: #e10016;"></span></a>
                            <a href="https://www.youtube.com/channel/UCMYj8Md6whMbPNFcyxjyA6A"><span class="fa fa-youtube" style="color: #e10016;"></span></a>
                            <a href="#"><span class="fa fa-linkedin" style="color: #e10016;"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <div>
                            <a class="logo">
                                <img src="<?= base_url('assets/images/ourproduk/logo.jpg') ?>" style="width: 300px;">
                            </a>
                        </div>
                        <ul class="nav">
                            <!-- <li class="submenu">
                                <a href="javascript:;">Hubungi kami</a>
                                <ul>
                                    <li><a href="<?= base_url('tentang-kami') ?>">About Us</a></li>
                                    <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                                </ul>
                            </li> -->
                            <li class="submenu">
                                <a href="javascript:;">Product</a>
                                <ul>
                                    <li><a href="<?= base_url('product_pintu_splus') ?>">Door</a></li>
                                    <li><a href="<?= base_url('product_window_splus') ?>">Window</a></li>
                                    <li><a href="<?= base_url('product_interior_material_splus') ?>">Interior Material</a></li>
                                    <li><a href="<?= base_url('product_exterior_material_splus') ?>">Exterior Material</a></li>
                                    <li><a href="<?= base_url('product_aksesoris_splus') ?>">Aksesoris</a></li>
                                    <li><a href="<?= base_url('product_masker_splus') ?>">Masker</a></li>
                                    <li><a href="<?= base_url('product_all') ?>">All Product</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;"> Special Product</a>
                                <ul>
                                    <li class="scroll-to-section"><a href="#men">Special Offers</a></li>
                                    <li class="scroll-to-section"><a href="#women">New Arrival</a></li>
                                    <li class="scroll-to-section"><a href="#kids">News S-plus</a></li>
                                    <li class="scroll-to-section"><a href="#explore">Promo Patner</a></li>
                                </ul>
                            </li>

                            <!-- <li class="scroll-to-section"><a href="<?= base_url('administrator') ?>"> <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="<?= base_url('assets/') ?>images/sprite.svg#person-20"></use>
                                        </svg>
                                    </span>login</a>
                            </li> -->

                            <!-- <li class="submenu">
                                <a href="javascript:;" class="indicator__button">
                                    <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="<?= base_url('assets/') ?>images/sprite.svg#person-20"></use>
                                        </svg>
                                    </span>
                                </a>
                                <ul>
                                    <li class="scroll-to-section">
                                        <form action="<?php echo base_url() . 'administrator/auth' ?>" method="post">

                                            <div class="account-menu__form-title">Masuk ke akun Anda</div>
                                            <div class="form-group has-feedback">
                                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            </div>
                                            <div class="form-group account-menu__form-button">
                                                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                            <div class="account-menu__form-link">
                                                <a href="<?= base_url('register') ?>">Buat akun baru</a>
                                            </div>
                                        </form>
                                    </li>

                                </ul>
                            </li> -->

                            <li>
                                <style>
                                    .dropbtn {
                                        background-color: #fff;
                                        color: white;
                                        padding: 16px;
                                        font-size: 16px;
                                        border: none;
                                        cursor: pointer;
                                    }

                                    .dropbtn:hover,
                                    .dropbtn:focus {
                                        background-color: #2980B9;
                                    }

                                    .dropdown {
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .dropdown-content {
                                        display: none;
                                        position: inherit;
                                        background-color: #f1f1f1;
                                        min-width: 160px;
                                        overflow: auto;
                                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                        z-index: 1;
                                    }

                                    .dropdown-content a {
                                        color: black;
                                        padding: 12px 16px;
                                        text-decoration: none;
                                        display: block;
                                    }

                                    .dropdown a:hover {
                                        background-color: #ddd;
                                    }

                                    .show {
                                        display: block;
                                    }
                                </style>
                                <div class="dropdown">

                                    <a onclick="myFunction()" class="dropbtn">
                                        <span>
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?= base_url('assets/') ?>images/sprite.svg#person-20"></use>
                                            </svg>
                                        </span>
                                    </a>
                                    <!-- <button onclick="myFunction()" class="dropbtn">
                                        Login
                                    </button> -->
                                    <div id="myDropdown" class="dropdown-content">

                                        <!-- <form action="<?php echo base_url() . 'administrator/auth' ?>" method="post">
                                            <div class="account-menu__form-title">Masuk ke akun Anda</div>
                                            <div class="form-group has-feedback">
                                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                            </div>
                                            <div class="form-group account-menu__form-button">
                                                <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                            <div class="account-menu__form-link">
                                                <a href="<?= base_url('register') ?>">Buat akun baru</a>
                                            </div>
                                        </form> -->

                                        <?php
                                        if (!empty($this->session->userdata('idadmin'))) { ?>

                                            <form>
                                                <?php
                                                $id_admin = $this->session->userdata('idadmin');
                                                $q = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin' ");
                                                $c = $q->row_array();
                                                ?>
                                                <ul>
                                                    <a href="<?= base_url('members/dashboard') ?>" class="account-menu__user">
                                                        <div class="account-menu__user-avatar">
                                                            <img src="<?php echo base_url() . 'assets/user/images/admin/' . $c['pengguna_photo']; ?>" class="img-circle" alt="">
                                                        </div>
                                                        <div class="account-menu__user-info">
                                                            <div class="account-menu__user-name"> <b><?php echo $c['pengguna_nama']; ?></b></div>
                                                            <div class="account-menu__user-email"><?php echo $c['pengguna_email']; ?></div>
                                                        </div>

                                                    </a>
                                                </ul>
                                                <br><br>
                                                <ul class="account-menu__links">
                                                    <li><a href="<?= base_url('admin/Ubah_profil') ?>">Profil</a></li>
                                                    <li><a href="<?= base_url('admin/Riwayat_transaksi') ?>">Riwayat Transaksi</a></li>
                                                    <li><a href="<?= base_url('admin/Ubah_profil') ?>">Password</a></li>
                                                </ul>
                                                <ul class="account-menu__links">
                                                    <li><a href="<?php echo base_url() . 'administrator/logout' ?>">Keluar</a></li>
                                                </ul>
                                            </form>

                                        <?php } else { ?>

                                            <form action="<?php echo base_url() . 'administrator/auth' ?>" method="post">
                                                <div class="account-menu__form-title">Masuk ke akun Anda</div>
                                                <div class="form-group has-feedback">
                                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                </div>
                                                <div class="form-group has-feedback">
                                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                </div>
                                                <div class="form-group account-menu__form-button">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                                                </div>
                                                <div class="account-menu__form-link">
                                                    <a href="<?= base_url('register') ?>">Buat akun baru</a>
                                                </div>
                                            </form>



                                        <?php } ?>

                                    </div>












                                </div>
                                <script>
                                    function myFunction() {
                                        document.getElementById("myDropdown").classList.toggle("show");
                                    }

                                    // Close the dropdown if the user clicks outside of it
                                    window.onclick = function(event) {
                                        if (!event.target.matches('.dropbtn')) {
                                            var dropdowns = document.getElementsByClassName("dropdown-content");
                                            var i;
                                            for (i = 0; i < dropdowns.length; i++) {
                                                var openDropdown = dropdowns[i];
                                                if (openDropdown.classList.contains('show')) {
                                                    openDropdown.classList.remove('show');
                                                }
                                            }
                                        }
                                    }
                                </script>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>




    </header>



    <div class="main-banner" id="top">

        <div class="page-banner home-banner mb-5">
            <div class="slider-wrapper">
                <div class="owl-carousel hero-carousel">
                    <div class="hero-carousel-item">
                        <img src="<?= base_url('assets/images/ourproduk/produk/slider/slider_1.jpg') ?>">
                        <div class="img-caption">
                            <h1 class="mb-4">Menambah Estetika Nilai Bangunan Anda</h1>
                            <!-- <a href="#services" class="btn btn-outline-light">Get Started</a> -->
                        </div>
                    </div>
                    <div class="hero-carousel-item">
                        <img src="<?= base_url('assets/images/ourproduk/produk/slider/slider_2.jpg') ?>" alt="">
                        <div class="img-caption">
                            <h1 class="mb-4">Kekayaan Dan Pilihan Warna Motif Adalah Kelebihan Kami</h1>
                            <!-- <a href="#services" class="btn btn-outline-light">Read More</a> -->
                        </div>
                    </div>
                    <div class="hero-carousel-item">
                        <img src="<?= base_url('assets/images/ourproduk/produk/slider/slider_3.jpg') ?>" alt="">
                        <div class="img-caption">
                            <h1 class="mb-4">Wujudkan Ide Renovasi Dan Dekorasi</h1>
                            <!-- <a href="#services" class="btn btn-outline-light">Read More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-heading">
            <center>
                <h2>OUR PRODUCT S-PLUS</h2><span>Our product details</span>
            </center>
        </div>

        <br></br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4><a style="color: #fff;">Door</a></h4>
                                <span>Best door Resistant to all weather conditions, Not brittle, not discolored and not eaten by termites.</span>
                                <div class="main-border-button">
                                    <!-- <a href="<?= base_url('product_pintu') ?>">Read more</a> -->
                                    <a href="<?= base_url('product_pintu_splus') ?>">Read more</a>
                                </div>
                            </div>
                            <img src="<?= base_url('assets/images/ourproduk/pintu.jpg') ?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">

                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4><a style="color: #fff;">Window</a></h4>

                                                <div class="main-border-button">
                                                    <a href="<?= base_url('product_window_splus') ?>">Read more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <img src="<?= base_url('assets/images/ourproduk/jendela2.jpg') ?>">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">

                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4><a style="color: #fff;">Interior Material</a></h4>
                                                <div class="main-border-button">
                                                    <!-- <a href="<?= base_url('product_interior') ?>">Read more</a> -->
                                                    <a href="<?= base_url('product_interior_material_splus') ?>">Read more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <img src="<?= base_url('assets/images/ourproduk/living.png') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">

                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4><a style="color: #fff;">Exterior Material</a></h4>
                                                <div class="main-border-button">
                                                    <!-- <a href="<?= base_url('product_exterior') ?>">Read more</a> -->
                                                    <a href="<?= base_url('product_exterior_material_splus') ?>">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="<?= base_url('assets/images/ourproduk/exte2.jpeg') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">

                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4><a style="color: #fff;">Accessories</a></h4>
                                                <div class="main-border-button">
                                                    <!-- <a href="<?= base_url('product_aksesoris') ?>">Read more</a> -->
                                                    <a href="<?= base_url('product_aksesoris_splus') ?>">Read more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <img src="<?= base_url('assets/images/ourproduk/aks.jpg') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">

                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4><a style="color: #fff;">Masker</a></h4>
                                                <div class="main-border-button">
                                                    <!-- <a href="<?= base_url('product_masker') ?>">Read more</a> -->
                                                    <a href="<?= base_url('product_masker_splus') ?>">Read more</a>
                                                </div>
                                            </div>
                                        </div>

                                        <img src="<?= base_url('assets/images/ourproduk/masker3.jpg') ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>SPECIAL OFFERS</h2>
                        <span>Produk dari s-plus indonesia
                            yang kami tawarkan dengan harga spesial.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/recomen/kichen.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Drew Kitchen Set</h4>
                                    <span>Rp.</span>

                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/recomen/kichen2.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen2.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Dalton Kitchen Set</h4>
                                    <span>Rp.</span>

                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/recomen/kichen3.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen3.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Ivy Kitchen Set 1.2 Mtr</h4>
                                    <span>Rp.</span>

                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/recomen/kichen4.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen4.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Sheldon Set Kabinet Dapur</h4>
                                    <span>Rp.</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content">
                        <h2>PROMO PARTNER</h2>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i>
                            <p>You know what we are proud of ? That is your satisfaction.</p>
                        </div>
                        <div class="col-lg-12">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="leather">
                                            <h4>Interior Material Room</h4>
                                            <span>Latest Collection</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="first-image">
                                            <img src="<?= base_url('assets/images/ourproduk/explore/living.png') ?>">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="second-image">

                                            <img src="<?= base_url('assets/images/ourproduk/explore/exte2.jpeg') ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="types">
                                            <h4>Exterior Material Room</h4>
                                            <span>Products</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="main-border-button">
                            <center><a href="<?= base_url('product_all') ?>">Read More</a></center>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>NEW ARRIVAL</h2>
                        <span>Produk terbaru dari S-plus Indonesia.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="women-item-carousel">
                        <div class="owl-women-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/newbrand/ambalan2.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan2.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-001</h4>
                                    <span>Rp.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/newbrand/ambalan4.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan4.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-002</h4>
                                    <span>Rp.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/newbrand/ambalan3.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan3.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-003</h4>
                                    <span>Rp.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/newbrand/ambalan1.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior_material_splus') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan1.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-004</h4>
                                    <span>Rp.</span>
                                    <ul class="stars">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="page-section" id="kids">
        <div class="container">
            <div class="text-center">
                <h2 class="title-section">NEWS S-PLUS</h2>
            </div>

            <div class="row my-5 card-blog-row">
                <div class="col-lg-4 py-3">
                    <div class="card-blog" style="max-width: 330px;  background-color: #8b0410;">
                        <div class="header">
                            <img src="<?= base_url('assets/images/news/news1.jpg') ?>">
                        </div>
                        <div class="body">
                            <div class="post-title"><a href="https://www.youtube.com/watch?v=z3BkgCAwUuo">Tutorial Blind Combi Roll Splus Indonesia.</a></div>
                        </div>
                        <div class="footer">
                            <a href="https://www.youtube.com/watch?v=z3BkgCAwUuo">Read More <span class=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="card-blog" style="max-width: 330px;">
                        <div class="header">
                            <img src="<?= base_url('assets/images/news/news2.jpg') ?>">
                        </div>
                        <div class="body">
                            <div class="post-title"><a href="https://www.youtube.com/watch?v=fqfNgL6PuTY">Tutorial Pemasangan Lis Jendela UPVC</a></div>
                        </div>
                        <div class="footer">
                            <a href="https://www.youtube.com/watch?v=fqfNgL6PuTY">Read More <span class=""></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 py-3">
                    <div class="card-blog" style="max-width: 330px;">
                        <div class="header">
                            <img src="<?= base_url('assets/images/news/news3.jpg') ?>">
                        </div>
                        <div class="body">
                            <div class="post-title"><a href="https://www.youtube.com/watch?v=99670Nzg2K4">Tutorial Pemasangan Pintu S Plus Door</a></div>
                        </div>
                        <div class="footer">
                            <a href="https://www.youtube.com/watch?v=99670Nzg2K4">Read More <span class=""></span></a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- <div class=" text-center">
                <a href="blog.html" class="btn btn-danger">View More</a>
            </div> -->

        </div>
    </div>



    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Cek Resi</h2>
                        <p>Masukan no. resi pada pada form dibawah ini.</p>
                    </div>
                    <form id="subscribe" action="https://cekresi.com" method="get" target="_BLANK">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Masukan no resi..." required="">
                                </fieldset>
                            </div>

                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Cek Status Pesanan</h2>
                        <p>Masukan no. invoice pada pada form dibawah ini.</p>
                    </div>
                    <form id="subscribe" action="<?= base_url('konfirmasi/tracking') ?>" method="get" target="_BLANK">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="kode" class="form-control" placeholder="INV-0000000000" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-2">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div> -->
                <div class="col-lg-4">
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
                            <li><a href="https://www.facebook.com/S-Plus-Indonesia-100698461599924/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/splusindonesia/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCMYj8Md6whMbPNFcyxjyA6A"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS Library-->

    <script src="<?= base_url('assets/css/depan-ecommerce/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/depan-ecommerce/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/depan-ecommerce/vendor/owl-carousel/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/depan-ecommerce/vendor/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/depan-ecommerce/vendor/fancybox/js/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/depan-ecommerce/vendor/isotope/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/depan-ecommerce/js/google-maps.js') ?>"></script>
    <script src="<?= base_url('assets/css/depan-ecommerce/js/theme.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/main.js') ?>"></script>



    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/jquery-2.1.0.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/popper.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/bootstrap.min.js') ?>"></script>
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



    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/custom.js') ?>"></script>

    <!-- <script src="<?= base_url('assets/template/jquery-1.10.2.min.js') ?>"></script> -->

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

<!-- <body>

    <div style="margin-top: 350px;">
        <center> <img src="<?= base_url('assets/images/ourproduk/logo.jpg') ?>" style="width: 300px;">
        </center>
        <CENTER>
            <h1>COMING SOON</h1>
        </CENTER>
    </div>

</body> -->