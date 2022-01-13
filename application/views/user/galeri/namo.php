<?php 
$meta['title']          = 'Galeri Namo Pintu - S-Plus Indonesia';
$meta['description']    = 'Pintu kayu yang kualitasnya lebih baik di atas standar pada umumnya direkomendasikan untuk perumahan sederhana degan desain minimalis dan struktur pintu yg kuat.';
$meta['keywords']       = 'jual pintu namo, jual pintu namo terbaik, jual pintu namo berkualitas, jual pintu namo minimalis, jual pintu namo ramah lingkungan, pintu namo terbaik, pintu namo berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI PINTU NAMO</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
            <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/namo/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>