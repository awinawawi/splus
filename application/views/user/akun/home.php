<?php $this->load->view('user/header') ?>
<main class="ps-main pt-40">
    <div class="ps-section ps-owl-root">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li role="presentation" class="active"><a href="<?=base_url('akun')?>">Dashboard</a>
                                </li>
                                <li role="presentation"><a href="<?=base_url('akun/pesanan')?>">Riwayat Pesanan</a>
                                </li>
                                <li role="presentation"><a href="<?=base_url('cart')?>">Keranjang</a></li>
                                <li role="presentation"><a href="<?=base_url('akun/pengaturan')?>">Pengaturan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                   <div class="panel panel-default">
                        <div class="panel-body">
                            <h4>Ringkasan Akun</h4><br>
                            <table class="table table-responsive">
                                <tbody>
                                    <tr>
                                        <td width="80">
                                            <img src="<?= (empty($profile->pelanggan_foto) ? base_url('assets/user/images/avatar.png') : base_url('assets/user/images/user_profile/'.$profile->pelanggan_foto))?>" align="left" style="margin-right:10px; border-radius:50%;">
                                        </td>
                                        <td><br><h4 class="media-heading"><?=$this->session->userdata('nama')?>  <br> <small>terakhir login <?=$profile->pelanggan_last_login?></small></h4></td>
                                        <td><br>
                                            Email : <?=$profile->pelanggan_email?> <br> 
                                            Telpon: <?=$profile->pelanggan_telpon?>
                                        </td>
                                        <td><br>
                                            <a href="<?=base_url('akun/pengaturan')?>" class="btn btn-default btn-small"><i class="fa fa-pencil"></i> &nbsp; Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="panel panel-primary text-center">
                                        <div class="panel-heading ">
                                            Keranjang
                                        </div>
                                        <div class="panel-body">
                                            <span style="font-size:20px">
                                                <?=$this->db->get_where('tbl_pelanggan_keranjang', array('keranjang_pelanggan_id' => $this->session->userdata('user_id')))->num_rows()?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-primary text-center">
                                        <div class="panel-heading">
                                            Riwayat Pembelian
                                        </div>
                                        <div class="panel-body">
                                            <span style="font-size:20px">
                                            <?=$this->db->get_where('tbl_pelanggan_pesanan', array('pesanan_pelanggan_id' => $this->session->userdata('user_id')))->num_rows()?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-primary text-center">
                                        <div class="panel-heading">
                                            Riwayat Pembelian Selesai
                                        </div>
                                        <div class="panel-body">
                                            <span style="font-size:20px">
                                            <?=$this->db->get_where('tbl_pelanggan_pesanan', array('pesanan_pelanggan_id' => $this->session->userdata('user_id'), 'pesanan_status' => 'Selesai'))->num_rows();?>
                                            </span>
                                        </div>
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