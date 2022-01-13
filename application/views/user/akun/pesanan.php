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
                            <h4>Riwayat Pesanan</h4><br>
                           <div id="exTab1" class="container"> 
                           <ul  class="nav nav-pills">
                               <li class="active">
                                   <a  href="#1a" data-toggle="tab">Semua</a>
                               </li>
                               <li><a href="#2a" data-toggle="tab">Belum Dibayar</a>
                                       </li>
                               <li><a href="#3a" data-toggle="tab">Sedang Diproses</a>
                               </li>
                               <li><a href="#4a" data-toggle="tab">Sedang Dikirim</a>
                               </li>
                               <li><a href="#4a" data-toggle="tab">Dibatalkan</a>
                               </li>
                           </ul>
                                 <div class="tab-content clearfix">
                                   <div class="tab-pane active" id="1a">
                                       <table class="table table-striped" style="width:70%; color:#000;">
                                           <tbody>
                                               <?php foreach($pesanan as $p): ?>
                                               <tr>
                                                   <td># <a href="<?=base_url('akun/pesanan/'.$p->pesanan_faktur)?>"><?=$p->pesanan_faktur?></a></td>
                                                   <td>Rp <?=number_format($p->pesanan_total)?></td>
                                                   <td><?=$p->pesanan_status?></td>
                                               </tr>
                                               <?php endforeach; ?>
                                           </tbody>
                                       </table>
                                   </div>
                                   <div class="tab-pane" id="2a">
                                   <table class="table table-striped" style="width:70%; color:#000;">
                                        <tbody>
                                            <?php foreach($pesanan as $p): ?>
                                            <?php if($p->pesanan_status == 'Belum Bayar'): ?>
                                            <tr>
                                                <td># <a href="<?=base_url('akun/pesanan/'.$p->pesanan_faktur)?>"><?=$p->pesanan_faktur?></a></td>
                                                <td>Rp <?=number_format($p->pesanan_total)?></td>
                                                <td><?=$p->pesanan_status?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                   </div>
                                   <div class="tab-pane" id="3a">
                                   <table class="table table-striped" style="width:70%; color:#000;">
                                        <tbody>
                                            <?php foreach($pesanan as $p): ?>
                                            <?php if($p->pesanan_status == 'Sudah Bayar'): ?>
                                            <tr>
                                                <td># <a href="<?=base_url('akun/pesanan/'.$p->pesanan_faktur)?>"><?=$p->pesanan_faktur?></a></td>
                                                <td>Rp <?=number_format($p->pesanan_total)?></td>
                                                <td><?=$p->pesanan_status?></td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                   </div>
                               <div class="tab-pane" id="4a">
                                   <p class="contentorder">Tidak ada pesanan</p>
                               </div>
                               </div>
                           </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>