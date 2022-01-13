<?php 
$meta['title']          = 'Galeri Pintu ABS dan UPVC - S-Plus Indonesia';
$meta['description']    = 'S-Plus Pintu menjadikan ruangan Anda menjadi nyaman dan penuh ketenangan yang dipancarkan oleh berbagai macam warna dan tekstur yang khas. Dengan tekstur kayu yang sangat mirip dengan kayu yang sebenarnya memberi kesan keindahan yang alami.';
$meta['keywords']       = 'jual pintu abs, jual pintu abs terbaik, jual pintu abs berkualitas, jual pintu abs minimalis, jual pintu abs ramah lingkungan, pintu abs terbaik, pintu abs berkualitas,jual pintu upvc, jual pintu upvc terbaik, jual pintu upvc berkualitas, jual pintu upvc minimalis, jual pintu upvc ramah lingkungan, pintu upvc terbaik, pintu upvc berkualitas';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80 pt-40">
    <div class="ps-container">
        <div class="row text-center pb-40">
            <span class="h-subtitle h-m-title">GALERI PINTU ABS & UPVC</span>
            <hr style="width: 10%; margin-top: 10px; border: 1px solid #e24545;">
        </div>

        <!-- Grid row -->
        <div class="row gallery-popup">
           <!-- Grid column -->
           <div class="mansory">
                <?php foreach($galeri as $g): ?>
                    <img src="<?=base_url('assets/user/images/galeri/pintu/'.$g->galeri_gambar)?>" alt="<?=$g->galeri_judul?>">
                <?php endforeach; ?>
           </div>
           
        </div>  
        <!-- Grid row -->
    </div>
</div>
<?php $this->load->view('user/footer') ?>