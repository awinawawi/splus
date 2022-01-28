<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Splus Ecommerce | Window</title>


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
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
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


                            <li class="scroll-to-section"><a href="#explore">login</a></li>
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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top" style="background: url('<?= base_url('assets/images/ourproduk/produk/jendela2.jpg') ?>'); background-size: cover;" class="pt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Our Products Window</h2>
                        <span>Featured Window products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->

    <!-- <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php $query = $this->db->query('SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
                                                                a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
                                                                INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id="10"
                                                                GROUP BY a.varian_nama
                                                                ');
                foreach ($query->result_array() as $kat) {

                ?>
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="thumb">
                                <div class="hover-content">
                                    <ul>
                                        <li><a href="<?= base_url('assets/images/ourproduk/produk/' . $kat['varian_gambar_depan']) ?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="<?= base_url('order/produk_kategori/') . $kat['produk_slug']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <a>
                                    <img src="<?= base_url('assets/images/ourproduk/produk/' . $kat['varian_gambar_depan']) ?>" class="image" width="80%">
                                </a>
                            </div>

                            <div class="down-content">
                                <h4><?= $kat['varian_nama'] ?></h4>
                                <span>RP.<?= ($kat['varian_harga_meter'])  ?> </span>
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



                <?php } ?>
            </div>
        </div>
    </section> -->

    <!-- ***** Products Area Ends ***** -->

    <section class="section" id="products">
        <div class="container">

            <div class="row pb-50 pt-50">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-grey shd">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading" style="text-align:left;">
                                <aside class="ps-widget--sidebar ">
                                    <div class="ps-widget__header">
                                        <h3>
                                            <a href="<?= base_url('v_kategori') ?>"> <b>Products</b></a>
                                        </h3>
                                    </div>
                                    <br></br>
                                    <div class="ps-widget__content ">
                                        <ul class="ps-list--arrow">
                                            <li class="panel-title" data-toggle="collapse" data-target="#test">
                                                <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b>
                                                </a>
                                                <ul id="test">
                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp1"><a href="<?= base_url('kategori/s-plus-pintu/abs') ?>"><b>PINTU ABS</b></a>
                                                        <ul id="testsp1" class="panel-collapse collapse">
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                                                            <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                                                            <ul>
                                                                <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">General</a></li>
                                                                <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Deco</a></li>
                                                                <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                                                            </ul>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Art Door</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">Exterior Door</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li>
                                                        </ul>

                                                    </li>

                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp2"><a href="<?= base_url('kategori/s-plus-pintu/upvc') ?>"><b>PINTU UPVC</b></a>
                                                        <ul id="testsp2" class="panel-collapse collapse">
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#felice') ?>">Felice</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#sash') ?>">Sash Door</a></li>
                                                        </ul>


                                                    </li>
                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp3"><a href="<?= base_url('kategori/s-plus-pintu/namo') ?>"><b>PINTU NAMO</b></a>
                                                        <ul id="testsp3" class="panel-collapse collapse">
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#laminate-door') ?>">Laminate Door</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#eco-door') ?>">ECO Door</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#veneer-solid-door') ?>">Veneer Solid Door</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#timber-joint-door') ?>">Timber Joint Door</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#art-door') ?>">ART Door</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/iroom_door') ?>"><b>PINTU IROOM</b></a></li>
                                                </ul>

                                            </li>

                                            <li class="panel-title" data-toggle="collapse" data-target="#test2">
                                                <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>JENDELA</b></a>
                                                <ul id="test2">
                                                    <!-- <li class="sm panel-title" data-toggle="collapse" data-target="#testsp4"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_upvc') ?>"><b>JENDELA UPVC</b></a>
                                                <ul id="testsp4" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>
                                                </ul>

                                            </li> -->
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_upvc') ?>"><b>JENDELA UPVC</b></a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jendela_IROOM') ?>"><b>JENDELA IROOM</b></a></li>

                                                </ul>
                                            </li>

                                            <li class="panel-title" data-toggle="collapse" data-target="#test3">
                                                <a href="<?= base_url('kategori/s-plus-upvc-plafon/plafon') ?>"><b>INTERIOR MATERIAL</b></a>
                                                <ul id="test3">
                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp5"><a href="<?= base_url('kategori/s-plus-upvc-plafon/plafon_upvc') ?>"><b>PLAFON UPVC</b></a>
                                                        <ul id="testsp5" class="panel-collapse collapse">
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-plafon#polos') ?>">Plafon Polos</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-plafon#laminate') ?>">Plafon Laminate</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-plafon#deco') ?>">Plafon Deco</a></li>
                                                        </ul>

                                                    </li>
                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp6"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-shead') ?>"><b>SUN SHADE</b></a>
                                                        <ul id="testsp6" class="panel-collapse collapse">
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">Combi Roll Screen</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">Roll Screen</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">Sun Screen</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">Blackout Roll Screen</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">Vertical Blind</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">Horizontal Wood</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">Horizontal Aluminium</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">Honeycomb</a></li>
                                                        </ul>

                                                    </li>
                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp7"><a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>"><b>SOLID SURFACE</b></a>
                                                        <ul id="testsp7" class="panel-collapse collapse">
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#chip') ?>">CHIP</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#deco') ?>">DECO</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>KITCHEN SET</b></a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>PVC FOAM BOARD</b></a></li>
                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp8"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl_kategori') ?>"><b>VINYL FLOORING</b></a>
                                                        <ul id="testsp8" class="panel-collapse collapse">
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                                            <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pvc-foam-board/ambalan') ?>"><b>AMBALAN (Wall Shelving)</b></a></li>
                                                </ul>
                                            </li>

                                            <li class="panel-title " data-toggle="collapse" data-target="#test4">
                                                <a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>"><b>EXTERIOR MATERIAL</b></a>
                                                <ul id="test4">
                                                    <li class="sm panel-title" data-toggle="collapse" data-target="#testsp9"><a href="<?= base_url('kategori/s-plus-wpc/wpc_kategori') ?>"><b>WPC</b></a>
                                                        <ul id="testsp9" class="panel-collapse collapse">
                                                            <li class="sm"><a href="#deck">Deck Tile</a></li>
                                                            <li class="sm"><a href="#wall">Wall Partition</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="sm"><a href='https://sinargarden.com/parasol'><b>PARASOL</b></a></li>
                                                </ul>
                                            </li>

                                            <li class="panel-title " data-toggle="collapse" data-target="#test5">
                                                <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><b>MASKER</b></a>
                                                <ul id="test5">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/dewasa') ?>"><b>MASKER DEWASA</b></a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-face-mask/anak') ?>"><b>MASKER ANAK-ANAK</b></a></li>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">
                    <?php if ($this->agent->is_mobile()) : ?>
                        <section class="section" id="products">
                            <div class="">
                                <center>
                                    <span class="h-subtitle h-m-title"><strong>OUR PRODUCTS</strong></span>
                                </center>
                                <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                                <div class="container">
                                    <div class="row">
                                        <?php $query = $this->db->query('SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
                                                                a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
                                                                INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id="10"
                                                                GROUP BY a.varian_nama
                                                                ');
                                        foreach ($query->result_array() as $kat) {

                                        ?>

                                            <div class="col-lg-4">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <div class="hover-content">
                                                            <ul>
                                                                <li><a href="<?= base_url('assets/images/ourproduk/produk/' . $kat['varian_gambar_depan']) ?>"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="<?= base_url('order/produk_kategori/') . $kat['produk_slug']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                                            </ul>
                                                        </div>



                                                        <a>
                                                            <img src="<?= base_url('assets/images/ourproduk/produk/' . $kat['varian_gambar_depan']) ?>" class="image" width="80%">
                                                        </a>
                                                    </div>

                                                    <div class="down-content">
                                                        <h4><?= $kat['varian_nama'] ?></h4>
                                                        <span>RP.<?= ($kat['varian_harga_meter'])  ?> </span>
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
                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </section>
                    <?php else : ?>
                        <section class="section" id="products">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-heading">
                                            <h2>Our Latest Products</h2>
                                            <span>Check out all of our products.</span>
                                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                                        </div>
                                    </div>
                                </div>

                                <div class="container">
                                    <div class="row">
                                        <?php $query = $this->db->query('SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
                                                                a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
                                                                INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id="10"
                                                                GROUP BY a.varian_nama
                                                                ');
                                        foreach ($query->result_array() as $kat) {

                                        ?>

                                            <div class="col-lg-4">
                                                <div class="item">
                                                    <div class="thumb">
                                                        <div class="hover-content">
                                                            <ul>
                                                                <li><a href="<?= base_url('assets/images/ourproduk/produk/' . $kat['varian_gambar_depan']) ?>"><i class="fa fa-eye"></i></a></li>
                                                                <li><a href="<?= base_url('order/produk_kategori/') . $kat['produk_slug']; ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                                            </ul>
                                                        </div>



                                                        <a>
                                                            <img src="<?= base_url('assets/images/ourproduk/produk/' . $kat['varian_gambar_depan']) ?>" class="image" width="80%">
                                                        </a>
                                                    </div>

                                                    <div class="down-content">
                                                        <h4><?= $kat['varian_nama'] ?></h4>
                                                        <span>RP.<?= ($kat['varian_harga_meter'])  ?> </span>
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



                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>





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