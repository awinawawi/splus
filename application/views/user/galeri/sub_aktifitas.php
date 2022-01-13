<?php 
$meta['title']          = 'Galeri Kegiatan - S-Plus Indonesia';
$meta['description']    = 'Kegiatan S-Plus Indonesia meliputi kegiatan pada jam kerja atau diluar jam kerja serta informasi kegiatan amal yang dilakukan S-Plus untuk lingkungan sekitar dan beberapa informasi penghargaan dan sertifikat perusahaan.';
$meta['keywords']       = 'kegiatan splus indonesia, aktifitas splus indonesia, penghargaan splus indonesia, sertifikat splus indonesia';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">KEGIATAN S-PLUS <br> <?=$galeri[0]->galeri_subkategori?></span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
            <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/aktifitas/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>