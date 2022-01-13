<?php 
$meta['title']          = 'Project - S-Plus Indonesia';
$meta['description']    = 'Project S-Plus Indonesia meliputi proyek produk S-Plus yang telah terpasang di cutomer pribadi dari S-Plus.';
$meta['keywords']       = 'proyek splus indonesia, pemasangan splus indonesia, project splus indonesia, project referens splus indonesia';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">PROJECT S-PLUS</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <div class="gallery-header pb-80">
            <div class="gallery-body">
                <div class="row">
                    <?php foreach($galeri as $g): ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?=base_url('galeri/project/'.str_replace(' ','-',$g->galeri_subkategori))?>">
                            <div class="header-gallery">
                                <?=$g->galeri_subkategori?>
                            </div>
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?=base_url('assets/user/images/galeri/project/'.$g->galeri_gambar)?>"
                                        alt="" class="image" width="80%"> 
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"><i class="fa fa-arrow-circle-right"></i> MORE</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>