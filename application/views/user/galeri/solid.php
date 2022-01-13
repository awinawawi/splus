<?php 
$meta['title']          = 'Galeri Solid Surface - S-Plus Indonesia';
$meta['description']    = 'S-Plus Solid Surface adalah material sintetis mirip dengan batu granit atau batu marmer yang terbuat dari campuran Unsaturated Polyester (UPE) dan Filter Aluminium Tri-Hydroxide (ATH). Solid surface memiliki banyak keunggulan. Jika batu marmer atau granit memiliki pori-pori pada permukaannya, maka solid surface tidak memiliki pori-pori.';
$meta['keywords']       = 'jual solid surface, jual solid surface terbaik, jual solid surface berkualitas, jual solid surface minimalis, jual solid surface ramah lingkungan, solid surface terbaik, solid surface berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI SOLID SURFACE</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
            <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/solid/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>