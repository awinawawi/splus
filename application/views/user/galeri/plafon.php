<?php 
$meta['title']          = 'Galeri Plafon UPVC - S-Plus Indonesia';
$meta['description']    = 'S-Plus Plafon merupakan pengganti plafon konvensional terbuat dari bahan UPVC lebih ringan dan lebih aman tentunya. S-Plus Plafon memiliki banyak pilihan motif dan warna yang beragam dari polos, pattern hingga laminate. S-Plus Plafon tahan lama, anti rayap dan karat, membuat sirkulasi udara nyaman.';
$meta['keywords']       = 'jual plafon upvc, jual plafon upvc terbaik, jual plafon upvc berkualitas, jual plafon upvc minimalis, jual plafon upvc ramah lingkungan, plafon upvc terbaik, plafon upvc berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI PLAFON UPVC</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
            <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/plafon/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>