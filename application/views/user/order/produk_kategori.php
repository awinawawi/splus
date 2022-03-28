<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Splus Ecommerce</title>


    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/templatemo-hexashop.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/owl-carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/lightbox.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/user/images/logo.png') ?>">



    <link rel="preload" href="<?= base_url('assets/user/plugins/bootstrap/dist/css/bootstrap.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/plugins/font-awesome/font/fontawesome-webfont.woff2?v=4.6.3') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/plugins/font-awesome/css/font-awesome.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/style.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/custom.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/animation.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/plugins/bootstrap-select/dist/css/bootstrap-select.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="<?= base_url('assets/user/css/bootstrap-datepicker.standalone.min.css') ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>
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

<main class="ps-main">
    <!-- <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-10 pt-50">
                <div class="col-md-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="row pb-10">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                <a href="<?= base_url('/cart') ?>" target="_blank" class="btn btn-primary pull-right"> <i class="fa fa-shopping-cart fa-6x" style="font-size:20px; margin-right:5px;"></i>LIHAT KERANJANG BELANJA</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?= base_url('assets/user/images/kategori/splus-shade/') . $varian[0]->produk_gambar ?>" id="order_image" class="pb-20">
                                <div class="color">
                                    <img src="<?= base_url('assets/user/images/kategori/splus-shade/') . $varian[0]->varian_gambar_warna ?>" id="order_image_varian" style="position: absolute;bottom: 0;right: 30px;width: 200px;">
                                    <div class="color-caption" style="background-color: #000;color: white;opacity: 0.8;width: fit-content;padding: 5px 20px;position: absolute;right: 30px;bottom: 0px;">
                                        <span id="order_image_varian_label">WHITE</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title">
                                    <h1 class="h-subtitle h-m-title pb-40">
                                        <?= strtoupper($varian[0]->produk_nama) ?>
                                    </h1>
                                </div>
                                <div class="body">
                                    <form action="<?= base_url('add_to_cart') ?>" method="POST">
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10">Tipe</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="nama_produk" value="<?= strtoupper($varian[0]->produk_nama) ?>">
                                                <select name="tipe_produk" id="order_tipe" class="form-control" style="height:40px">
                                                    <?php foreach ($varian as $v) : ?>
                                                        <option value="<?= $v->varian_nama ?>"><?= strtoupper($v->varian_nama) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10 hide">Harga /m</label>
                                            <div class="col-sm-8">
                                                <span class="currency h-subtitle hide" id="order_varian_harga_meter"></span>
                                                <input type="hidden" name="harga_produk_meter" id="order_varian_harga_meter_value">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2">Ukuran</label>
                                            <div class="col-sm-8 row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Lebar / mm</label>
                                                        <input type="number" name="lebar_produk" class="form-control" style="height:40px" placeholder="2000 mm" id="order_varian_ukuran_lebar">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Tinggi / mm</label>
                                                        <input type="number" name="tinggi_produk" class="form-control" style="height:40px" placeholder="3000 mm" id="order_varian_ukuran_tinggi">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10">Warna</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="warna_produk" id="order_varian_warna_value">
                                                <select id="order_varian_warna" class="form-control" style="height:40px"></select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10">Jumlah</label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="jumlah_produk">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="jumlah_produk" id="order_produk_jumlah" class="form-control input-number" style="height:34px;" value="1" min="1" max="10">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="jumlah_produk">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-20">Harga</label>
                                            <div class="col-sm-8">
                                                <span class="h-subtitle">Rp</span>
                                                <span class="currency h-title" id="order_varian_harga"></span>
                                                <input type="hidden" name="harga_produk" id="order_varian_harga_value">
                                                <input type="hidden" name="session_id" id="user_session_id">
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-20">
                <div class="col-md-12">
                    <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd text-center">
                        <span class="h-body"> Estimasi waktu pengerjaan produk </span>
                        <span class="h-body" style="color:#D50000"> <strong> 2 Minggu </strong></span>
                        <span class="h-body"> setelah pesanan dibuat. </span>
                    </div>
                </div>
            </div>
            <div class="row pb-20 pl-20">
                <div class="col-lg-6">
                    <div class="form-group row">
                        <a href="<?= base_url('kategori/s-plus-sun-shade') ?>" target="_blank" class="ps-btn" style="border-radius:5px">Pilih Produk Lainnya</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group row">
                        <button class="ps-btn pull-right mr-20" style="border-radius:5px" type="submit"><i class="fa fa-shopping-cart fa-6x" style="font-size:25px;"></i> Tambah Ke Keranjang</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd">
                        <span class="h-subtitle">MARKETPLACE</span>
                        <div class="row pt-20 h-body">
                            <?php foreach ($varian as $v) : ?>
                                <div class="col-lg-3 pb-20">
                                    <b><?= strtoupper($v->varian_nama) ?></b> <br>
                                    <?php if (!empty($v->bukalapak)) : ?>
                                        <a href="<?= $v->bukalapak ?>" target="_blank">- Bukalapak</a>
                                    <?php endif; ?>
                                    <?php if (!empty($v->tokopedia)) : ?>
                                        <a href="<?= $v->tokopedia ?>" target="_blank">- Tokopedia</a>
                                    <?php endif; ?>
                                    <?php if (empty($v->bukalapak) && empty($v->tokopedia)) : ?>
                                        - Belum Tersedia
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="main-banner">

        <div class="container">
            <div class="section-heading">
                <center>
                    <h2>OUR DETAILS PRODUCT</h2><span>details</span>
                </center>
            </div>
            <div class="row pb-10 pt-50">
                <div class="col-md-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="row pb-10">
                            <div class="col-lg-6">
                            </div>
                            <div class="col-lg-6">
                                <a href="<?= base_url('/cart') ?>" target="_blank" class="btn btn-primary pull-right"> <i class="fa fa-shopping-cart fa-6x" style="font-size:20px; margin-right:5px;"></i>LIHAT KERANJANG BELANJA</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                                <div style="margin-left:500px;">
                                    <a href="<?= base_url('assets/images/ourproduk/produk/') .  $varian[0]->varian_gambar_utama ?>"><i class="fa fa-search fa-2x"></i></a>
                                </div>
                                <img src="<?= base_url('assets/images/ourproduk/produk/') . $varian[0]->produk_gambar ?>" id="order_image" class="pb-20">
                                <div class="color">
                                    <img src="<?= base_url('assets/images/ourproduk/produk/') . $varian[0]->varian_gambar_warna ?>" id="order_image_varian" style="position: absolute;bottom: 0;right: 30px;width: 200px;">
                                    <div class="color-caption" style="background-color: #000;color: white;opacity: 0.8;width: fit-content;padding: 5px 20px;position: absolute;right: 30px;bottom: 0px;">
                                        <span id="order_image_varian_label">WHITE</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title">
                                    <h1 class="h-subtitle h-m-title pb-40">
                                        <?= strtoupper($varian[0]->produk_nama) ?>
                                    </h1>
                                </div>
                                <div class="body">
                                    <form action="<?= base_url('add_to_cart') ?>" method="POST">
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10">Tipe</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="nama_produk" value="<?= strtoupper($varian[0]->produk_nama) ?>">
                                                <select name="tipe_produk" id="order_tipe" class="form-control" style="height:40px">
                                                    <?php foreach ($varian as $v) : ?>
                                                        <option value="<?= $v->varian_nama ?>"><?= strtoupper($v->varian_nama) ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10 hide">Harga /m</label>
                                            <div class="col-sm-8">
                                                <span class="currency h-subtitle hide" id="order_varian_harga_meter"></span>
                                                <input type="hidden" name="harga_produk_meter" id="order_varian_harga_meter_value">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2">Ukuran</label>
                                            <div class="col-sm-8 row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Lebar / mm</label>
                                                        <input type="number" name="lebar_produk" class="form-control" style="height:40px" placeholder="2000 mm" id="order_varian_ukuran_lebar">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Tinggi / mm</label>
                                                        <input type="number" name="tinggi_produk" class="form-control" style="height:40px" placeholder="3000 mm" id="order_varian_ukuran_tinggi">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10">Warna</label>
                                            <div class="col-sm-8">
                                                <input type="hidden" name="warna_produk" id="order_varian_warna_value">
                                                <select id="order_varian_warna" class="form-control" style="height:40px"></select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-10">Jumlah</label>
                                            <div class="col-sm-4">
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="jumlah_produk">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="jumlah_produk" id="order_produk_jumlah" class="form-control input-number" style="height:34px;" value="1" min="1" max="10">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="jumlah_produk">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="type" class="col-sm-2 pt-20">Harga</label>
                                            <div class="col-sm-8">
                                                <span class="h-subtitle">Rp</span>
                                                <span class="currency h-title" id="order_varian_harga"></span>
                                                <input type="hidden" name="harga_produk" id="order_varian_harga_value">
                                                <input type="hidden" name="session_id" id="user_session_id">
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-20">
                <div class="col-md-12">
                    <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd ">
                        <span class="h-subtitle"> DESCRIPTION: </span>
                        <div class="row pt-20 h-body">
                            <div class="col-lg-3 pb-20">
                                <h3><b>PRODUCT NAME</b></h3>
                                <?php foreach ($varian as $v) : ?>
                                    <option value="<?= $v->produk_nama ?>"><?= strtoupper($v->produk_nama) ?></option>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-lg-3 pb-20">
                                <h3><b>PRODUCT JENIS</b></h3>
                                <?php foreach ($varian as $v) : ?>
                                    <option value="<?= $v->product_jenis ?>"><?= strtoupper($v->product_jenis) ?></option>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-lg-3 pb-20">
                                <h3><b>PRODUCT BRAND</b></h3>
                                <?php foreach ($varian as $v) : ?>
                                    <option value="<?= $v->product_brand ?>"><?= strtoupper($v->product_brand) ?></option>
                                <?php endforeach; ?>
                            </div>
                            <div class="col-lg-3 pb-20">
                                <h3><b>PRODUCT TIPE</b></h3>
                                <?php foreach ($varian as $v) : ?>
                                    <option value="<?= $v->product_name ?>"><?= strtoupper($v->product_name) ?></option>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-20">
                <div class="col-md-12">
                    <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd text-center">
                        <span class="h-body"> Estimasi waktu pengerjaan produk </span>
                        <span class="h-body" style="color:#D50000"> <strong> 2 Minggu </strong></span>
                        <span class="h-body"> setelah pesanan dibuat. </span>
                    </div>
                </div>
            </div>
            <div class="row pb-20 pl-20">

                <div class="col-lg-12">
                    <div class="form-group row">
                        <button class="ps-btn pull-right mr-20" style="border-radius:5px" type="submit"><i class="fa fa-shopping-cart fa-6x" style="font-size:25px;"></i> Tambah Ke Keranjang</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd">
                        <span class="h-subtitle">MARKETPLACE</span>
                        <div class="row pt-20 h-body">
                            <?php foreach ($varian as $v) : ?>
                                <div class="col-lg-3 pb-20">
                                    <b><?= strtoupper($v->varian_nama) ?></b> <br>
                                    <?php if (!empty($v->bukalapak)) : ?>
                                        <a href="<?= $v->bukalapak ?>" target="_blank">- Bukalapak</a>
                                    <?php endif; ?>
                                    <?php if (!empty($v->tokopedia)) : ?>
                                        <a href="<?= $v->tokopedia ?>" target="_blank">- Tokopedia</a>
                                    <?php endif; ?>
                                    <?php if (empty($v->bukalapak) && empty($v->tokopedia)) : ?>
                                        - Belum Tersedia
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS Library-->
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/jquery/dist/jquery.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/jssor.slider-28.0.0.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/slider.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/lazysizes.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/custom.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/main.js') ?>"></script>
    <?php if ($this->uri->segment(1) == "order" || $this->uri->segment(1) == "cart") : ?>
        <script defer type="text/javascript" src="<?= base_url('assets/user/js/bootstrap-datepicker.min.js') ?>"></script>
        <script defer type="text/javascript" src="<?= base_url('assets/user/js/order.js') ?>"></script>
    <?php endif; ?>
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