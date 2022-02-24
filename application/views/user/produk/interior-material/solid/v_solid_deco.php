<?php
$meta['title']          = 'Solid Surface - S-Plus Indonesia';
$meta['description']    = 'S-Plus Solid Surface adalah material sintetis mirip dengan batu granit atau batu marmer yang terbuat dari campuran Unsaturated Polyester (UPE) dan Filter Aluminium Tri-Hydroxide (ATH). Solid surface memiliki banyak keunggulan. Jika batu marmer atau granit memiliki pori-pori pada permukaannya, maka solid surface tidak memiliki pori-pori.';
$meta['keywords']       = 'jual solid surface, jual solid surface murah, jual solid surface berkualitas, jual solid surface terbaik, solid surface murah, sun shade minimalis, solid surface elegan, solid surface terbaik, solid surface berkualitas, solid surface harga, solid surface kitchen set, solid surface s plus, solid surface indonesia';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div>
                            <h4><a href="<?= base_url('v_kategori') ?>"><b>Produk </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b> Interior Material </b></a><span class="fa fa-chevron-right"></span><a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>"><b> Solid Surface </b></a><span class="fa fa-chevron-right"><b> Deco </b></h4>
                            <br>
                        </div>
                        <img src="<?= base_url('assets/user/images/kategori/splus-solid/depan.jpg') ?>"> <br> <br>
                        <div class="pt-10 pb-20">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>UKURAN STANDAR</strong></span>
                            </center>
                            <hr style="margin-bottom: 25px;width: 25%; border: 0.5px solid #e24545">
                            <div class="row">

                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <table>
                                        <tr>
                                            <th colspan="3">UKURAN DECO</th>
                                        </tr>
                                        <tr>
                                            <td style="font-weight: bold;"><b>Panjang</b></td>
                                            <td style="font-weight: bold;"><b>Lebar</b></td>
                                            <td style="font-weight: bold;"><b>Tebal</b></td>
                                        </tr>
                                        <tr>
                                            <td>200 cm</td>
                                            <td>76 cm</td>
                                            <td>1.2 cm</td>
                                        </tr>
                                        <tr>
                                            <td>240 cm</td>
                                            <td>76 cm</td>
                                            <td>1.2 cm</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--DECO-->
                        <div class="row pb-30">
                            <center>
                                <span class="h-subtitle h-m-title" style="padding-bottom: 10px;" id="deco"><strong>DECO</strong></span>
                            </center>
                            <hr style="width:5%; border: solid 0.5px #e24545; margin-bottom: 40px;">
                            <?php if ($this->agent->is_mobile()) : ?>
                                <div class="col-md-12">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/splus-solid/deco/m-deco.jpg') ?>" style="width:100%">
                                </div>
                            <?php else : ?>
                                <div class="col-md-12 gallery-popup">
                                    <img class="" src="<?= base_url('assets/user/images/kategori/splus-solid/deco/detail.jpg') ?>" style="width:100%">
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--PORTFOLIO-->
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>PORTFOLIO</strong></span>
                            </center>
                            <hr style="width:15%; border: solid 0.5px #e24545; margin-bottom: 30px;">
                            <div class="row pb-20 gallery-popup">
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/p1.jpg') ?>" alt="">
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 h-m-pdk">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/p2.jpg') ?>" alt="">
                                </div>
                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12 h-m-pdk">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/p3.jpg') ?>" alt="">
                                </div>
                            </div>
                            <div class="row pb-30 gallery-popup">

                                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                                    <img src="<?= base_url('assets/user/images/portfolio/chip/solid-wall.jpg') ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row pt-40">
                            <div class="col-md-12 col-sm-6 col-xs-12">
                                <center><a href="<?= base_url('kategori/s-plus-solid-surface/solid') ?>" class="ps-btn h-m-body">Kembali</a></center>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('user/footer') ?>