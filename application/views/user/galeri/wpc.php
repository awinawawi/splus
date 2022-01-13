<?php 
$meta['title']          = 'Galeri WPC Deck dan Wall Partition - S-Plus Indonesia';
$meta['description']    = 'S-Plus WPC adalah hasil teknologi Eco Green yang mencampur/melebur serbuk kayu & termoplastik menjadi satu bahan komposit yang bisa digunakan sebagai alternatif pengganti kayu alami dan kayu lapis.';
$meta['keywords']       = 'jual wpc deck, jual wpc deck terbaik, jual wpc deck berkualitas, jual wpc deck minimalis, jual wpc deck ramah lingkungan, wpc deck terbaik, wpc deck berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI WPC DECK & WALL PARTITION</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
            <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/wpc/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>