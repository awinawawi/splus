<?php 
$meta['title']          = 'Galeri Kitchen Set - S-Plus Indonesia';
$meta['description']    = 'S-Plus Kitchen Set menggunakan teknologi Solid Surface, PET Film, PP Film, dan Papan Kayu. Untuk dapur terdiri dari beberapa elemen dengan fungsi dan bentuk menyesuaikan kebutuhan pengguna atau ruangan yang tersedia pada sebuah bangunan.';
$meta['keywords']       = 'jual kitchen set, jual kitchen set terbaik, jual kitchen set berkualitas, jual kitchen set minimalis, jual kitchen set elegan, kitchen set terbaik, kitchen set berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI KITCHEN SET</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
            <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/kitchen/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>