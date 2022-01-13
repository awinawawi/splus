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
                            <li role="presentation"><a href="<?=base_url('akun/pesanan')?>">Riwayat Pesanan</a></li>
                            <li role="presentation"><a href="<?=base_url('cart')?>">Keranjang</a></li>
                            <li role="presentation" class="active"><a href="<?=base_url('akun/pengaturan')?>">Pengaturan</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                   <div class="panel panel-default">
                        <div class="panel-body">
                        <?=$this->session->flashdata('msg')?>
                            <h4>Pengaturan Akun</h4><br>
                            <div class="row">
                                <form action="" method="POST" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <img src="<?= (empty($profile->pelanggan_foto) ? base_url('assets/user/images/avatar.png') : base_url('assets/user/images/user_profile/'.$profile->pelanggan_foto))?>" align="left" style="margin-right:10px; border-radius:50%;" width="80">
                                    <br><div class="form-group">
                                        <label>Ubah foto profile</label>
                                        <input type="file" class="" name="foto">
                                    </div>
                                    <br><hr>
                                </div>
                                <div class="col-md-6">
                                    <h5>Informasi Akun</h5><br>
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama" value="<?=$profile->pelanggan_nama?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" name="ttl" value="<?=$profile->pelanggan_ttl?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Telpon/Handphone</label>
                                        <input type="text" name="telpon" value="0<?=$profile->pelanggan_telpon?>" class="form-control" required>
                                    </div><hr>
                                    <h5>Informasi Akun</h5><br>
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username" value="<?=$profile->pelanggan_username?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="<?=$profile->pelanggan_email?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Informasi Alamat</h5><br>
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <textarea name="alamat" class="form-control" cols="30" rows="3" required><?=$profile->pelanggan_alamat?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Provinsi</label>
                                        <input type="text" name="provinsi" value="<?=$profile->pelanggan_provinsi?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kota/Kab</label>
                                        <input type="text" name="kota" value="<?=$profile->pelanggan_kota?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kecamatan</label>
                                        <input type="text" name="kecamatan" value="<?=$profile->pelanggan_kecamatan?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kelurahan</label>
                                        <input type="text" name="kelurahan" value="<?=$profile->pelanggan_kelurahan?>" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kodepos</label>
                                        <input type="text" name="kodepos" value="<?=$profile->pelanggan_kodepos?>" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                        <button type="submit" class="ps-btn pull-right">SIMPAN PERUBAHAN</button>
                                </div>
                                </form>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>