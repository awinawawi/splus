<?php $this->load->view('user/header') ?>
<main class="ps-main pt-40 ">
    <div class="ps-section ps-owl-root">
        <div class="ps-container pb-80">
<form class="ps-checkout__form" action="<?=base_url('konfirmasi')?>" method="post">
            <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__billing">
                      <h3 style="padding-bottom: 10px;">Informasi Pengiriman</h3>
                      <a href="#" class="btn btn-default btn-small" 
                        style="float: right; margin-bottom: 10px;"><i class="fa fa-pencil"></i> &nbsp; Edit</a>
                            <div class="form-group form-group--inline">
                              <label>Nama Lengkap<span>*</span>
                              </label>
                              <input class="form-control" type="text" value="<?=$checkout[0]->pelanggan_nama?>" name="nama_lengkap">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>No telp/handphone<span>*</span>
                              </label>
                              <input class="form-control" type="number" value="<?=$checkout[0]->pelanggan_telpon?>">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Provinsi<span>*</span>
                              </label>
                              <input class="form-control" type="text" value="<?=$checkout[0]->pelanggan_provinsi?>" name="provinsi">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Kecamatan<span>*</span>
                              </label>
                              <input class="form-control" type="text" value="<?=$checkout[0]->pelanggan_kecamatan?>" name="kecamatan">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Kelurahan<span>*</span>
                              </label>
                              <input class="form-control" type="text" value="<?=$checkout[0]->pelanggan_kelurahan?>" name="kelurahan">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Kodepos<span>*</span>
                              </label>
                              <input class="form-control" type="text" value="<?=$checkout[0]->pelanggan_kodepos?>" name="kodepos">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Alamat Lengkap<span>*</span>
                              </label>
                              <textarea class="form-control" rows="5"><?=$checkout[0]->pelanggan_alamat?>
                              </textarea>
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Email<span>*</span>
                              </label>
                              <input class="form-control" type="email" value="<?=$checkout[0]->pelanggan_email?>" name="email">
                            </div>
                      <h3 class="mt-40" style="margin-bottom: 20px;"> Addition information</h3>
                      <div class="form-group form-group--inline textarea">
                        <label>Order Notes</label>
                        <textarea class="form-control" rows="5" placeholder="Tambahkan catatan pada pesanan seperti warna ukuran atau lainnya, isi jika diperlukan"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 60px;">
                    <div class="ps-checkout__order">
                      <header>
                        <h3>Pesanan Saya</h3>
                      </header>
                      <div class="content" style="color:white;">
                        <table class="table ps-checkout__products">
                          <thead>
                            <tr>
                              <th class="text-uppercase" width="150">Produk</th>
                              <th class="text-uppercase">Harga</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $total = 0; $pid = ""; $pqty = ""; $ptot = ""; $kids = ""; $ukr = ""; $wrn = "";?>
                            <?php foreach($checkout as $c): ?>
                            <?php $pid .= $c->keranjang_produk_id.",";?>
                            <?php $pqty .= $c->keranjang_kuantitas.",";?>
                            <?php $ptot .= $c->keranjang_total.",";?>
                            <?php $kids .= $c->keranjang_id.",";?>
                            <?php $ukr .= $c->keranjang_ukuran.","; ?>
                            <?php $wrn .= $c->keranjang_warna.","; ?>
                            <?php $total += $c->keranjang_total; ?>
                            <tr>
                              <td><?=$c->produk_judul?> x <?=$c->keranjang_kuantitas?></td>
                              <td>Rp <?=number_format($c->keranjang_total)?></td>
                            </tr>
                            <?php endforeach; ?>
                            <tr class="pt-40">
                              <td><br><br>Order Total</td>
                              <td><br><br>Rp <?=number_format($total)?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <footer>
                        <h3>Transfer Bank</h3>
                        
                          <div class="form-group cheque">
                            <p>pembayaran dilakukan menggunakan virtual account, silahkan pilih daftar bank yang tersedia dibawah ini!</p>
                            <?php $no=1; foreach($fva as $fva): ?>
                            <div class="ps-radio">
                              <input class="form-control" type="radio" id="rdo0<?=$no;?>" name="bank_code" value="<?=$fva->code?>" required>
                              <label for="rdo0<?=$no;?>"><?=$fva->name?></label>
                            </div>
                            <?php $no++; endforeach; ?>
                          </div>
                          <input type="hidden" name="pelanggan_id" value="<?=$checkout[0]->pelanggan_id?>">
                          <input type="hidden" name="produk_id" value="<?=$pid?>">
                          <input type="hidden" name="produk_kuantitas" value="<?=$pqty?>">
                          <input type="hidden" name="produk_total" value="<?=$ptot?>">
                          <input type="hidden" name="keranjang_id" value="<?=$kids?>">
                          <input type="hidden" name="keranjang_warna" value="<?=$wrn?>">
                          <input type="hidden" name="keranjang_ukuran" value="<?=$ukr?>">
                          <input type="hidden" name="external_id" value="S-PLUS<?=rand(10000,99999)?>">
                          <input type="hidden" name="name" value="<?=$checkout[0]->pelanggan_nama?>">
                          <input type="hidden" name="amount" value="<?=$total?>">
                          <div class="form-group paypal">
                            <button class="ps-btn ps-btn--fullwidth" type="submit">Bayar Sekarang<i class="ps-icon-next"></i></button>
                          </div>
                      </footer>
                    </div>
                  </div>
            </div>
          </form>
          </div>
    </div>
    <?php $this->load->view('user/footer') ?>