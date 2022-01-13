<?php $this->load->view('user/header') ?>
<main class="ps-main pt-40">
    <div class="ps-section ps-owl-root">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li role="presentation"><a href="<?=base_url('akun')?>">Dashboard</a></li>
                                <li role="presentation" class="active"><a href="<?=base_url('akun/pesanan')?>">Riwayat Pesanan</a></li>
                                <li role="presentation"><a href="<?=base_url('cart')?>">Keranjang</a></li>
                                <li role="presentation"><a href="<?=base_url('akun/pengaturan')?>">Pengaturan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                   <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Faktur Pembelian</h4> <a href="<?=base_url('akun/pesanan/'.$pesanan[0]->pesanan_faktur.'/print')?>" target="_BLANK" class="btn btn-default btn-sm pull-right"><i class="fa fa-print"></i> cetak</a>  <br> <br>
                            <div class="row">
                                <div class="col-md-6">
                                <p>
                                    No      : <b><?=$pesanan[0]->pesanan_faktur?></b> <br>
                                    Status  : <?=$pesanan[0]->pesanan_status?> <br><br>
                                    <b>Metode Pembayaran</b> <br> 
                                    <?=$pesanan[0]->pesanan_metode_pembayaran?>
                                </p>
                                </div>
                                <div class="col-md-6">
                                <p>
                                    <b>Penerima</b> <br>
                                    Nama : <?=$pesanan[0]->pelanggan_nama?> <br>
                                    Alamat : <?=$pesanan[0]->pelanggan_alamat?>, <?=$pesanan[0]->pelanggan_kelurahan?>, <?=$pesanan[0]->pelanggan_kota?>, <?=$pesanan[0]->pelanggan_kecamatan?>, <?=$pesanan[0]->pelanggan_provinsi?>, <?=$pesanan[0]->pelanggan_kodepos?> <br>
                                    Telpon : <?=$pesanan[0]->pelanggan_telpon?>
                                </p>
                                </div>
                            </div><br><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Deskripsi Produk</th>
                                                <th>Kuantitas</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $total = 0; ?>
                                            <?php $no=1; foreach($pesanan as $p): ?>
                                            <?php $total += $p->pesanan_total; ?>
                                            <tr>
                                                <td><?=$no?></td>
                                                <td>
                                                <?=$p->produk_judul?> <br>
                                                <b>warna</b> : <?=$p->pesanan_warna?> 
                                                <b>ukuran </b>: <?=$p->pesanan_ukuran?>
                                                </td>
                                                <td><?=$p->pesanan_kuantitas?></td>
                                                <td>Rp <?=number_format($p->pesanan_total)?></td>
                                            </tr>
                                            <?php $no++; endforeach; ?>

                                            <tr>
                                                <td colspan="3" class="text-right">Total</td>
                                                <td>Rp <?=number_format($total)?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>