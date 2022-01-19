<?php
$meta['title']          = 'Keranjang - S-Plus Indonesia';
$meta['description']    = 'S-Plus merupakan manufacturer fabrikasi general building materials, yaitu ABS-Engineering Door, uPVC Window, Plafon, WPC, Roll Blind, Solid Surface, Kitchen Set dan Furniture.';
$meta['keywords']       = 'pintu abs, jual pintu abs,pintu abs s plus, pintu upvc,jendala upvc,plafon upvc,solid surface,kitchen set,namo pintu,pintu kayu,solid surface,wpc,wpc deck,wpc wall, namo pintu';
$this->load->view('user/header', $meta) ?>
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
                                <a href="<?= base_url('kategori/s-plus-sun-shade') ?>" target="_blank" class="btn btn-primary pull-right">PILIH PRODUK LAIN</a>
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
                                        <label for="type" class="col-sm-3 pt-10">Provinsi </label>
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
    <?php $this->load->view('user/footer') ?>