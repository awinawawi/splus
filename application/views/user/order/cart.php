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
<br></br>
<br></br>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pt-50">
                <div class="col-md-12">
                    <div class="ps-box pb-20 pt-30 pl-20 pr-20 bg-white shd">
                        <div class="row">
                            <div class="col-lg-6">
                                <span class="h-subtitle">KERANJANG BELANJA</span>
                            </div>
                            <div class="col-lg-6">
                                <a href="<?= base_url('Ecommerce') ?>" target="_blank" class="btn btn-primary pull-right">PILIH PRODUK LAIN</a>
                            </div>
                        </div>
                        <style>
                            td {
                                height: 40px;
                                border: 1px solid #ddd;
                            }
                        </style>
                        <div class="row pt-30 h-body">
                            <div class="col-lg-12">
                                <table class="table" style="border: 1px solid #ddd">
                                    <thead>
                                        <tr>
                                            <td></td>
                                            <td class="h-m-body"><strong>Produk</strong></td>
                                            <td class="h-m-body"><strong>Warna</strong></td>
                                            <td class="h-m-body"><strong>Jumlah</strong></td>
                                            <td class="h-m-body"><strong>Ukuran</strong></td>
                                            <td class="h-m-body"><strong>Harga/m<sup>2</sup></strong></td>
                                            <td class="h-m-body"><strong>Sub Total</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="<?= base_url("update_cart") ?>" method="POST">
                                            <?php
                                            $total = 0;
                                            foreach ($cart as $c) : ?>
                                                <tr>
                                                    <td> <a href="<?= base_url('remove-cart/' . $c->keranjang_id) ?>"><i class="fa fa-remove pt-10"></i></a> </td>
                                                    <td style="font-weight:300;">
                                                        <?= $c->nama_produk ?> <br>
                                                        <b>( <?= $c->tipe_produk ?> )</b>
                                                    </td>
                                                    <td style="font-weight:300"><?= $c->warna_produk ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-default btn-number" style="border:0px;" <?= $c->jumlah_produk == 1 ? 'disabled="disabled"' : '' ?> data-type="minus" data-field="kuantitas[<?= $c->keranjang_id ?>]">
                                                            <span class="glyphicon glyphicon-minus"></span>
                                                        </button>
                                                        <input type="text" name="kuantitas[<?= $c->keranjang_id ?>]" class="input-number text-center" style="height:34px;width:50px;border:0px;" value="<?= $c->jumlah_produk ?>" min="1" max="10">
                                                        <button type="button" class="btn btn-default btn-number" style="border:0px;" data-type="plus" data-field="kuantitas[<?= $c->keranjang_id ?>]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                        </button>
                                                    </td>
                                                    <td style="font-weight:300"> <?= $c->lebar_produk ?> mm x <?= $c->tinggi_produk ?> mm </td>
                                                    <td style="font-weight:300">Rp. <?= number_format($c->harga_produk_meter, 0, '.', '.') ?></td>
                                                    <td style="font-weight:300">Rp. <?= number_format($c->harga_produk, 0, '.', '.') ?></td>
                                                </tr>
                                            <?php
                                                $total += $c->harga_produk;
                                            endforeach; ?>
                                            <tr style="border:0px">
                                                <td colspan="4"></td>
                                                <td>
                                                    <button class="btn btn-primary btn-sm" type="submit">update kuantitas</button>
                                                </td>
                                                <td><strong>Subtotal</strong></td>
                                                <td><strong>Rp. <?= number_format($total, 0, '.', '.') ?></strong></td>
                                                <input type="hidden" id="cart_total_harga_produk" value="<?= $total ?>">
                                            </tr>
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <form action="#" method="POST" id="formOrder">
                <div class="row pt-10">
                    <div class="col-md-12">
                        <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd">
                            <div class="row pb-40">
                                <div class="col-lg-6">
                                    <span class="h-subtitle">Informasi Pelanggan</span>
                                </div>
                                <div class="col-lg-6">
                                    <span class="h-subtitle">Alamat Pengiriman</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Nama Lengkap</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="nama" class="form-control" style="height:35px;" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">E-Mail</label>
                                        <div class="col-sm-6">
                                            <input type="email" name="email" class="form-control" style="height:35px;" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Telepon</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="telepon" class="form-control" style="height:35px;" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Handphone</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="handphone" class="form-control" style="height:35px;" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Provinsi</label>
                                        <div class="col-sm-6">
                                            <select name="provinsi" id="ajax_order_address_province" class="form-control" style="height:40px" required></select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Kota/Kab</label>
                                        <div class="col-sm-6">
                                            <select name="kota" id="ajax_order_address_city" class="form-control" style="height:40px" required>
                                                <option value="0">-- Pilih Kota/Kab --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Kecamatan</label>
                                        <div class="col-sm-6">
                                            <select name="kecamatan" id="ajax_order_address_district" class="form-control" style="height:40px" required>
                                                <option value="0">-- Pilih Kecamatan --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Alamat</label>
                                        <div class="col-sm-6">
                                            <textarea name="alamat" id="" cols="50" rows="3" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="type" class="col-sm-3 pt-10">Kode Pos</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="kodepos" class="form-control" style="height:35px;" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-10">
                    <div class="col-md-12">
                        <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd">
                            <div class="row pb-20">
                                <div class="col-lg-4">
                                    <span class="h-subtitle">Tanggal Pengiriman</span>
                                </div>
                                <div class="col-lg-8">
                                    <span class="h-subtitle">Informasi Tambahan</span>
                                </div>
                            </div>
                            <div class="row pb-40">
                                <div class="col-lg-4">
                                    <div id="tanggal_pengiriman"></div>
                                    <input type="hidden" name="tanggal_pengiriman" id="tanggal_pengiriman_value">
                                    <h5 style="font-weight: bold;">note : proses pengiriman + produksi dilakukan selama 2 minggu
                                        dari tanggal pembelian</h5>
                                </div>
                                <div class="col-lg-8">
                                    <textarea name="catatan_pembelian" id="" cols="50" rows="10" class="form-control" required placeholder="Patokan alamat rumah, seperti nama jalan atau nomor."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-10">
                    <div class="col-md-12">
                        <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd">
                            <div class="row pb-20">
                                <div class="col-lg-4">
                                    <span class="h-subtitle">Metode Pembayaran</span>
                                </div>
                                <div class="col-lg-8">
                                    <span class="h-subtitle">Pilihan Kurir</span>
                                </div>
                            </div>
                            <div class="row pb-40">
                                <div class="col-lg-4">
                                    <span class="h-body">Transfer Bank</span> <br>
                                    <div class="form-group row pl-20">
                                        <input type="radio" name="metode_pembayaran" value="BNI" class="form-control col-lg-3" style="width:20px;" required>
                                        <div class="col-lg-9 pt-10">
                                            <img src="<?= base_url('assets/user/images/bank/bni.jpg') ?>" alt="Bank BNI" width="30%" class="pb-10"> <br>
                                            <span>PT SMART TECHTEX <br> 268 302 961</span>
                                        </div>
                                    </div>
                                    <div class="form-group row pl-20">
                                        <input type="radio" name="metode_pembayaran" value="MANDIRI" class="form-control col-lg-3" style="width:20px;" required>
                                        <div class="col-lg-9 pt-10">
                                            <img src="<?= base_url('assets/user/images/bank/mandiri.jpg') ?>" alt="Bank Mandiri" width="30%" class="pb-10"> <br>
                                            <span>PT SMART TECHTEX <br> 134 000 734 3691</span>
                                        </div>
                                    </div>
                                    <div class="form-group row pl-20">
                                        <input type="radio" name="metode_pembayaran" value="BCA" class="form-control col-lg-3" style="width:20px;" required>
                                        <div class="col-lg-9 pt-10">
                                            <img src="<?= base_url('assets/user/images/bank/bca.jpg') ?>" alt="Bank BCA" width="30%" class="pb-10"> <br>
                                            <span>PT SMART TECHTEX <br> 3041 777 000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="row pb-20">
                                        <div class="col-lg-6">
                                            <span class="h-body">JNE</span> <br>
                                            <div id="result_courier_jne"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="h-body">J&T</span> <br>
                                            <div id="result_courier_jnt"></div>
                                        </div>
                                    </div>
                                    <div class="row pb-20">
                                        <div class="col-lg-6">
                                            <span class="h-body">TIKI</span> <br>
                                            <div id="result_courier_tiki"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="h-body">SICEPAT</span> <br>
                                            <div id="result_courier_sicepat"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <span class="h-body">WAHANA</span> <br>
                                            <div id="result_courier_wahana"></div>
                                        </div>
                                        <div class="col-lg-6">
                                            <span class="h-body">PAHALA</span> <br>
                                            <div id="result_courier_pahala"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-10">
                    <div class="col-md-12">
                        <div class="ps-box pb-20 pt-20 pl-20 pr-20 bg-white shd">
                            <div class="row">
                                <div class="col-lg-6">
                                    <span class="h-subtitle pr-40">
                                        Total
                                    </span>
                                    <span class="h-body">
                                        Rp
                                    </span>
                                    <span class="h-title" id="cart_total_order">
                                        <?= number_format($total, 0, '.', '.') ?>
                                    </span>
                                    <input type="hidden" id="cart_total_order_value" name="total" value="<?= $total ?>">
                                    <input type="hidden" id="diskon" name="diskon" value="0">
                                </div>
                                <div class="col-lg-6 pt-10">
                                    <button class="btn btn-primary pull-right" type="button" id="pesanSekarang">Pesan Sekarang </button>
                                    <button class="btn btn-success pull-right hide" type="button" id="pesanSekarangModal" data-toggle="modal" data-target="#exampleModal">Pembelian Berhasil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- modal place order -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index:9999">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h4>Terimakasih, pesanan berhasil dibuat.</h4> <br>
                    Selanjutnya Anda akan kami hubungi untuk melakukan verifikasi informasi pembelian.
                    Catat kode pembelian berikut : <strong id="faktur-pembelian">SMTT/001/0620</strong>. <br>
                    Anda juga bisa menghubungi marketing kami untuk verifikasi pembelian : <br>
                    - Feri Budi Mulyana <b>( 0812 2302 8555 )</b> <br>
                    - Ivan Hermawan <b>( 0878 8333 8759 )</b> <br> <br>

                    <small>Note: e-mail konfirmasi pesanan berhasil dikirimkan, silahkan cek e-mail.</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
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