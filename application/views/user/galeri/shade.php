<?php 
$meta['title']          = 'Galeri Sun Shade - S-Plus Indonesia';
$meta['description']    = 'S-Plus Sun shade dirancang untuk anda yang mengutamakan kenyamanan dan kualitas hidup yang sehat. S-Plus Sun shade berfungsi sebagai pelindung ruangan dari sinar matahari & pendukung keindahan interior anda, tidak hanya berfungsi sebagai pelindung ruangan dari efek negatif panas dan cahaya sinar matahari tapi juga S-Plus Sun shade juga dirancang untuk mengatur intensitas cahaya yang masuk kedalam ruangan.';
$meta['keywords']       = 'jual sun shade, jual sun shade terbaik, jual sun shade berkualitas, jual sun shade minimalis, jual sun shade ramah lingkungan, sun shade terbaik, sun shade berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI SUN SHADE</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
            <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/shade/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>