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
    <div class="page-heading" id="top" style="background: url('<?= base_url('assets/images/ourproduk/produk/wpc.jpg') ?>'); background-size: cover;" class="pt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Our Products Exterior Material</h2>
                        <span>Featured exterior products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">

            <div class="row pb-50 pt-50">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-grey shd">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading" style="text-align:left;">
                                <aside class="ps-widget--sidebar ">
                                    <div>
                                        <h2>
                                            <a>FILTER</a>
                                        </h2>
                                    </div>
                                    <br></br>

                                    <!-- <div class="ps-widget__content ">
                                        <div class="widget-products widget">
                                            <div>
                                                <?php $query = $this->db->query('SELECT * FROM tbl_kategoriproduk a INNER JOIN tbl_produk b 
                                                ON a.id_kategori_produk=b.id_kategori_produk ORDER BY a.id_kategori_produk');
                                                foreach ($query->result_array() as $kat) {
                                                ?>
                                                    <div>
                                                        <a href="<?= base_url('order/produk_kategori/') . $kat['produk_slug']; ?>"><?= $kat['nama_kategori'] ?></a>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="widget-box">
                                        <h4 class="widget-title">Search</h4>
                                        <div class="divider"></div>
                                        <form class="example" action="<?= base_url('Order/cari_exterior') ?>" method="POST">
                                            <div class=" row no-gutters align-items-center" style="width:590px; height: 50px; ">
                                                <input type="text" placeholder="Search topics or keywords" name="keyword" style="padding-left: 20 px;">
                                                <button type="submit">Search</i></button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="ps-widget">
                                        <div class="panel-group category-products" id="accordian">
                                            <?php $data = $this->db->query("SELECT * from tbl_kategoriproduk where id_kategori_produk='4' order by id_kategori_produk Asc"); ?>
                                            <?php $data1 = $this->db->query("SELECT * from tbl_subkategoriproduk where id_kategori_produk='4' order by id_subkategori_produk Asc"); ?>
                                            <?php foreach ($data->result() as $maincat) { ?>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $maincat->nama_kategori; ?>">
                                                                <span class="badge pull-right">
                                                                    <?php foreach ($data1->result() as $plusicon) { ?>
                                                                        <?php if ($plusicon->id_kategori_produk == $maincat->id_kategori_produk) { ?>
                                                                            <i class="fa fa-plus"></i>
                                                                            <?php if ($plusicon->id_kategori_produk == $maincat->id_kategori_produk) {
                                                                                break;
                                                                            } ?>
                                                                    <?php }
                                                                    } ?>

                                                                </span>
                                                                <?php echo "Jenis-Jenis Exterior Material" ?>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <br></br>
                                                    <div id="<?php echo $maincat->nama_kategori; ?>" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <ul>
                                                                <?php foreach ($data1->result() as $subcat) { ?>
                                                                    <?php if ($subcat->id_kategori_produk == $maincat->id_kategori_produk) { ?>

                                                                        <li><a href="<?= base_url('order/product_exterior/' . $subcat->id_subkategori_produk) ?>">
                                                                                <?php echo $subcat->nama_subkategori ?></a></li>

                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                        </div>

                                    </div>

                                    <br></br>

                                    <div class="ps-widget__content">
                                        <div class="widget-products widget">
                                            <h4 class="widget-title">Tipe</h4>
                                            <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
                                                <?php $tipe = $this->db->query("SELECT * FROM tbl_produk_varian WHERE produk_id='4' group by varian_type
                                                                ");
                                                foreach ($tipe->result_array() as $kat) {
                                                ?>
                                                    <div class="form-check" style="padding-left: 10px;">
                                                        <label>
                                                            <input class="common_selector storage" type="checkbox" onclick="location.href='<?= base_url('order/tipe_exterior/') . $kat['id_subkategori_produk']  ?>' ">
                                                            <?= $kat['varian_type'] ?></BR>
                                                        </label>
                                                    </div>

                                                <?php } ?>


                                            </div>
                                        </div>
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
                                                                INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id="4"
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
                                            <h2>Products Exterior Material</h2>
                                            <span>Check out all of our products.</span>
                                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                                        </div>
                                    </div>
                                </div>

                                <div class="container">

                                    <div class="container">
                                        <div class="row">
                                            <a class="col-md" style="background-color:yellow;" href="<?= base_url('order/arrival_e/') . $kat['id_rekomendasi']  ?>">
                                                NEW ARRIVAL
                                            </a>
                                            <a class="col-md" style="background-color:pink;" href="<?= base_url('order/spesial_e/') . $kat['id_rekomendasi']    ?>">
                                                SPECIAL OFFERS
                                            </a>
                                            <a class="col-md" style="background-color:brown;" href="<?= base_url('order/manyviews_e/') . $kat['id_rekomendasi'] ?>">
                                                LATEST PRODUCTS
                                            </a>
                                        </div>
                                    </div>
                                    <br></br>
                                    <div class="row">
                                        <?php $brand_data = $this->db->query('SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
                                                                a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
                                                                INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id="4"
                                                                GROUP BY a.varian_nama'); ?>

                                        <?php foreach ($brand_data->result_array() as $kat) { ?>
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

                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        } ?>
                                        <?php if ($brand_data != NUll) { ?>
                                            <?php echo $this->pagination->create_links(); ?>
                                        <?php } else { ?>
                                            <p>There are no product available......please check again thanks brother</p>
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
    <!-- ***** Products Area Ends ***** -->

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