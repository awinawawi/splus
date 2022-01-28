<!-- <main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">

                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">

                        <div class="row pb-20" style="padding-bottom:10px;">


                            <?php if ($this->agent->is_mobile()) : ?>
                                <div class="col-sm-12 col-xs-12 gallery-popup" style="padding-bottom:10px;">

                                    <div><img style="padding-top:15px;" class="" src="<?= base_url('assets/user/images/under_construction.png') ?>"></div>
                                </div>
                            <?php else : ?>
                                <div class="col-md-12 pb-40 gallery-popup" style="padding-bottom:10px;">


                                    <div><img style="padding-top:15px;width: 1002px;margin-left: 200px;" class="" src="<?= base_url('assets/user/images/under_construction.png') ?>"></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> -->

<title>E-commerce- S-Plus Indonesia</title>

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

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <div>

                            <a class="logo">
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
                            <li class="submenu">
                                <a href="javascript:;">Products</a>
                                <ul>
                                    <li><a href="<?= base_url('product_pintu') ?>">Door</a></li>
                                    <li><a href="<?= base_url('product_window') ?>">Window</a></li>
                                    <li><a href="<?= base_url('product_interior') ?>">Interior Material</a></li>
                                    <li><a href="<?= base_url('product_exterior') ?>">Exterior Material</a></li>
                                    <li><a href="<?= base_url('product_aksesoris') ?>">Aksesoris</a></li>
                                    <li><a href="<?= base_url('product_masker') ?>">Masker</a></li>
                                    <li><a href="<?= base_url('product_all') ?>">All Product</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li class="scroll-to-section"><a href="#men">Rekomendasi</a></li>
                                    <li class="scroll-to-section"><a href="#women">New Brands</a></li>
                                    <li class="scroll-to-section"><a href="#kids">Best Product</a></li>
                                    <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                                </ul>
                            </li>

                            <li class="scroll-to-section"><a href="<?= base_url('administrator') ?>">login</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
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
                                    <a href="<?= base_url('product_pintu') ?>">Read more</a>
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
                                            <!-- <h4>Interior Material</h4>
                                            <span>Best Trend Interior Material</span> -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4><a style="color: #fff;">Window</a></h4>

                                                <div class="main-border-button">
                                                    <a href="<?= base_url('product_window') ?>">Read more</a>
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
                                            <!-- <h4>Eksterior Material</h4>
                                            <span>Best Trend Eksterior Material</span> -->
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4><a style="color: #fff;">Interior Material</a></h4>
                                                <div class="main-border-button">
                                                    <a href="<?= base_url('product_interior') ?>">Read more</a>
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
                                                    <a href="<?= base_url('product_exterior') ?>">Read more</a>
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
                                                    <a href="<?= base_url('product_aksesoris') ?>">Read more</a>
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
                                                    <a href="<?= base_url('product_masker') ?>">Read more</a>
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


    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Recommendation</h2>
                        <span>Recommended product details</span>
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
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Kichen-001</h4>
                                    <span>$120.00</span>
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
                                            <li><a href="<?= base_url('assets/images/ourproduk/recomen/kichen2.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen2.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Kichen-002</h4>
                                    <span>$90.00</span>
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
                                            <li><a href="<?= base_url('assets/images/ourproduk/recomen/kichen3.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen3.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Kichen-003</h4>
                                    <span>$150.00</span>
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
                                            <li><a href="<?= base_url('assets/images/ourproduk/recomen/kichen4.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/recomen/kichen4.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Kichen-004</h4>
                                    <span>$120.00</span>
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

    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content">
                        <h2>Explore Our Products</h2>
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


    <!-- ***** Women Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>New Brands</h2>
                        <span>New brands product details</span>
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
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan2.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-001</h4>
                                    <span>$75.00</span>
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
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan4.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-002</h4>
                                    <span>$45.00</span>
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
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan3.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-003</h4>
                                    <span>$130.00</span>
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
                                            <li><a href="<?= base_url('product_interior') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/newbrand/ambalan1.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Ambalan-004</h4>
                                    <span>$120.00</span>
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


    <!-- ***** Kids Area Starts ***** -->
    <section class="section" id="kids">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Best Product</h2>
                        <span>Details to Best Product.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="kid-item-carousel">
                        <div class="owl-kid-item owl-carousel">
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="<?= base_url('assets/images/ourproduk/bestproduct/art1.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_pintu') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                    <img src="<?= base_url('assets/images/ourproduk/bestproduct/art1.jpg') ?>">
                                </div>
                                <div class="down-content">
                                    <h4>Artdoor-01</h4>
                                    <span>$80.00</span>
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
                                            <li><a href="<?= base_url('assets/images/ourproduk/bestproduct/art2.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_pintu') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="<?= base_url('assets/images/ourproduk/bestproduct/art2.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Artdoor-02</h4>
                                    <span>$12.00</span>
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
                                            <li><a href="<?= base_url('assets/images/ourproduk/bestproduct/art3.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_pintu') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="<?= base_url('assets/images/ourproduk/bestproduct/art3.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Artdoor-03</h4>
                                    <span>$30.00</span>
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
                                            <li><a href="<?= base_url('assets/images/ourproduk/bestproduct/art4.jpg') ?>"><i class="fa fa-eye"></i></a></li>
                                            <li><a href="<?= base_url('product_pintu') ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <img src="<?= base_url('assets/images/ourproduk/bestproduct/art4.jpg') ?>">

                                </div>
                                <div class="down-content">
                                    <h4>Artdoor-04</h4>
                                    <span>$120.00</span>
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


    <!-- ***** Explore Area Starts ***** -->




    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Tracking Order</h2>
                        <span>Check your order details is here.</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-5">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
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