<?php 
$meta['title']          = 'Video Galeri - S-Plus Indonesia';
$meta['description']    = 'Kumpulan video galeri proyek S-Plus Indonesia yang sudah digunakan oleh pengguna produk S-Plus yang tersebar di berbagai wilayah Indonesia';
$meta['keywords']       = 'galeri splus indonesia, proyek splus indonesia, portfolio splus indonesia';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container text-center">
        <span class="h-subtitle h-m-title">VIDEO GALERI S-PLUS</span>
        <hr style="width: 8%; border: 1px solid #e24545; margin-bottom: 30px;">
        <div class="gallery-header pb-80">
            <div class="gallery-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <iframe width="560" height="<?= $this->agent->is_mobile() ? '300' : '400' ?>" src="https://www.youtube.com/embed/vAcco6om-_I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-xs-12">
                        <iframe width="560" height="<?= $this->agent->is_mobile() ? '300' : '400' ?>" src="https://www.youtube.com/embed/LUBDp7VvpfQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20 mb-20" style="box-shadow: 0 5px 15px -5px #999;">
                        <a href="javascript:;" data-toggle="modal" data-target="#videoabs">
                            <div class="container_images">
                                <div class="content_img" style="width:30%; float:left; margin-right:20px;">
                                    <img src="<?=base_url('assets/user/images/galeri/pintu/main.jpg')?>"
                                        alt="" class="image" width="100%"> 
                                </div>
                                <div class="container_text text-left">
                                    <strong>Mengenal pintu ABS S-Plus</strong> <br>
                                    Informasi lengkap produk pintu ABS S-Plus
                                </div>
                                <div class="container_button text-left pt-10">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Lihat video</button>
                                </div>
                            </div>
                        </a>
                        <div id="videoabs" class="modal fade" role="dialog" style="z-index:99999">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/a1GhViKFvm4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20 mb-20" style="box-shadow: 0 5px 15px -5px #999;">
                        <a href="javascript:;" data-toggle="modal" data-target="#videonamo">
                            <div class="container_images">
                                <div class="content_img" style="width:30%; float:left; margin-right:20px;">
                                    <img src="<?=base_url('assets/user/images/galeri/namo/main.jpg')?>"
                                        alt="" class="image" width="100%"> 
                                </div>
                                <div class="container_text text-left">
                                    <strong>Mengenal pintu Namo S-Plus</strong> <br>
                                    Informasi lengkap produk pintu Namo S-Plus
                                </div>
                                <div class="container_button text-left pt-10">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Lihat video</button>
                                </div>
                            </div>
                        </a>
                        <div id="videonamo" class="modal fade" role="dialog" style="z-index:99999">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/a1GhViKFvm4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20 mb-20" style="box-shadow: 0 5px 15px -5px #999;">
                        <a href="javascript:;" data-toggle="modal" data-target="#videojendela">
                            <div class="container_images">
                                <div class="content_img" style="width:30%; float:left; margin-right:20px;">
                                    <img src="<?=base_url('assets/user/images/galeri/jendela/main.jpg')?>"
                                        alt="" class="image" width="100%"> 
                                </div>
                                <div class="container_text text-left">
                                    <strong>Mengenal Jendela dan Pintu UPVC</strong> <br>
                                    Informasi lengkap produk Jendela dan Pintu UPVC S-Plus
                                </div>
                                <div class="container_button text-left pt-10">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Lihat video</button>
                                </div>
                            </div>
                        </a>
                        <div id="videojendela" class="modal fade" role="dialog" style="z-index:99999">
                            <div class="modal-dialog modal-lg">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-body">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/ZNAs7rC6K30" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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