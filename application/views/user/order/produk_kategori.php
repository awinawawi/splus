<?php
$meta['title']          = $varian[0]->produk_nama . ' - S-Plus Indonesia';
$meta['description']    = 'S-Plus merupakan manufacturer fabrikasi general building materials, yaitu ABS-Engineering Door, uPVC Window, Plafon, WPC, Roll Blind, Solid Surface, Kitchen Set dan Furniture.';
$meta['keywords']       = 'pintu abs, jual pintu abs,pintu abs s plus, pintu upvc,jendala upvc,plafon upvc,solid surface,kitchen set,namo pintu,pintu kayu,solid surface,wpc,wpc deck,wpc wall, namo pintu';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
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
                <!-- <div class="col-lg-6">
                    <div class="form-group row">
                        <a href="<?= base_url('kategori/s-plus-sun-shade') ?>" target="_blank" class="ps-btn" style="border-radius:5px">Pilih Produk Lainnya</a>
                    </div>
                </div> -->
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
    <?php $this->load->view('user/footer') ?>