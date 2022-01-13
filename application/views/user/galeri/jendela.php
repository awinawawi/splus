<?php 
$meta['title']          = 'Galeri Jendela UPVC - S-Plus Indonesia';
$meta['description']    = 'S-Plus Jendela merupakan penggabungan pintar antara desain dan teknologi dalam menjadikan tampilan ruangan semakin kaya dan mempesona. Nuansa dinamis,elegan dan desain S-Plus jendela yang menarik adalah pilihan tepat.';
$meta['keywords']       = 'jual jendela upvc, jual jendela upvc terbaik, jual jendela upvc berkualitas, jual jendela upvc minimalis, jual jendela upvc ramah lingkungan, jendela upvc terbaik, jendela upvc berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI JENDELA UPVC</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
           <!-- Grid column -->
           <div class="mansory">
           <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/jendela/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
           
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>