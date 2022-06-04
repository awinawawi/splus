<!DOCTYPE html>
<html lang="en">

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


    <div class="page-arul" style="background: url('<?= base_url('assets/images/paymen.jpg') ?>'); background-size: cover;" class="pt-20; ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">

                        <h1 class="fg-black text-center">&nbsp&nbsp</h1>
                        <span style="color:black;">&nbsp</span>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <div class="row">

                <?php if ($this->agent->is_mobile()) : ?>
                    <div class="col-sm-12 col-xs-12 gallery-popup">
                        <img src="<?= base_url('assets/images/ourproduk/produk/aksesoris/acc-auto-m.jpg') ?>">
                    </div>
                <?php else : ?>
                    <div>

                        <img class="" src="<?= base_url('assets/images/news/b-m2.jpg') ?>">
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>








    <!-- <div>
        <main>
            <div class="page-section">
                <div class="container">
                    <div class="filterable-btn">
                        <button class="btn active" data-filter="*">All</button>
                        <button class="btn" data-filter=".brand">Promo Brand</button>
                        <button class="btn" data-filter=".online">Promo Online</button>
                        <button class="btn" data-filter=".offline">Promo Offline</button>
                        <button class="btn" data-filter=".bank">Promo Bank</button>
                    </div>

                    <div class="grid mt-3">
                        <div class="grid-item brand">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-1.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/splus2022-promotion.jpg') ?>" alt="">
                                </a>
                                <button class="btn btn-primary">Belanja Sekarang</button>
                            </div>
                        </div>
                        <div class="grid-item brand">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-2.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/amayzing-bathroom-promotion.jpg') ?>" alt="">
                                </a>
                                <button class="btn btn-success">Belanja Sekarang</button>
                            </div>
                        </div>
                        <div class="grid-item online">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-3.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/gopay-promotion-april2022.jpg') ?>" alt="">
                                </a>
                                <button class="btn btn-danger">Belanja Sekarang</button>
                            </div>
                        </div>
                        <div class="grid-item offline">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-4.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/promo-ACmei-promotion.jpg') ?>" alt="">
                                </a>
                                <button class="btn btn-primary">Belanja Sekarang</button>
                            </div>
                        </div>
                        <div class="grid-item bank">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-5.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/promotionapr2022-bnicsa.jpg') ?>" alt="">
                                </a>

                            </div>
                        </div>
                        <div class="grid-item bank">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-6.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/promotionapr2022-btn.jpg') ?>" alt="">
                                </a>

                            </div>
                        </div>
                        <div class="grid-item bank">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-7.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/promotionfeb2022-bsi.jpg') ?>" alt="">
                                </a>

                            </div>
                        </div>
                        <div class="grid-item bank">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-8.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/promotionfeb2022-mandiri.jpg') ?>" alt="">
                                </a>

                            </div>
                        </div>
                        <div class="grid-item offline">
                            <div class="portfolio">
                                <a href="../assets/img/portfolio/work-9.jpg" data-fancybox="portfolio">
                                    <img src="<?= base_url('assets/images/icon/promosi/promo-ACmei-promotion.jpg') ?>" alt="">
                                </a>
                                <button class="btn btn-danger">Belanja Sekarang</button>
                            </div>
                        </div>
                    </div> 

                </div> 
            </div> 
        </main>
    </div> -->


    <footer>
        <div class="container">
            <div class="row" style="font-size:20px ;">
                <div class="col-lg-3">
                    <div class="first-item">
                        <!-- <a style="color: #fff;">Head Office & Factory</a>
                        <br></br>
                        <ul>
                            <li><a href="#">Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip<br>
                                    Kec. Pangenan Kab. Cirebon 45182</a></li>
                            <li><a href="#">Telp. (0231) 8511781 – 85</a></li>
                            <li><a href="#">Fax.(0231) 85117825</a></li>
                        </ul> -->
                        <a style="color: #fff;">Bantuan</a>
                        <br></br>

                        <ul>
                            <li><a href="#">Cara Belanja</a></li>
                            <li><a href="#">Tanya Jawab/FAQ</a></li>
                            <li><a href="<?php echo base_url('pemasangan/splus'); ?>">Pemasangan Produk</a></li>
                            <li><a href="<?php echo base_url('hubungi-kami'); ?>">Hubungi kami</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Help &amp; Information</a>
                    <br></br>

                    <ul>
                        <li><a href="<?php echo base_url('tentang-kami'); ?>">Tentang Kami</a></li>
                        <li><a href="<?= base_url('promosi') ?>">Berita & Acara</a></li>
                        <li><a href="<?= base_url('e-katalog') ?>">Katalog Produk</a></li>
                        <li><a href="<?= base_url('bebas_ogkir') ?>">Tracking Pesanan</a></li>
                        <li><a href="<?php echo base_url('karir'); ?>">Jenjang Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Kebijakan Privasi</a>
                    <br></br>
                    <ul>
                        <li><a href="#">Ketentuan Pengguna</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Ketentuan Pengiriman</a></li>

                    </ul>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Our product &amp; Categories</a>
                    <br></br>
                    <ul>
                        <li><a href="<?= base_url('product_pintu_splus') ?>">Pintu</a></li>
                        <li><a href="<?= base_url('product_window_splus') ?>">Jendela</a></li>
                        <li><a href="<?= base_url('product_interior_material_splus') ?>">Interior Material</a></li>
                        <li><a href="<?= base_url('product_exterior_material_splus') ?>">Exterior Material</a></li>
                        <li><a href="<?= base_url('product_aksesoris_splus') ?>">Aksesoris</a></li>
                        <li><a href="<?= base_url('product_masker_splus') ?>">Masker</a></li>
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


</body>

</html>