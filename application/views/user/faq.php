<?php 
$meta['title']          = 'Pertanyaan Pelanggan - S-Plus Indonesia';
$meta['description']    = 'Kumpulan informasi pertanyaan yang sering diajukan oleh pelanggan S-Plus yang sudah dikumpulkan dan diringkas sesuai dengan ketentuan dari S-Plus Indonesia';
$meta['keywords']       = 'pertanyaan splus indonesia';
$this->load->view('user/header',$meta) ?>
<main class="ps-main">
  <div class="ps-blog-grid pt-10 pb-10">
    <div class="ps-container">
      <div class="row">
        <h2 style="padding-bottom: 5px; text-align: center; color: black;">FAQ's</h2>
        <hr style="width: 5%; margin-top: 5px; margin-bottom: 15px; border: 1px solid #e24545;">
      <p>
        <button type="button" class="buttonfaq" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Bagaimana Cara Berbelanja Produk Splus di Website splusindonesia.com?</button> 
      </p>
    <div class="collapse" id="collapseExample">
      <div class="card card-body" style="padding-left: 20px; padding-bottom: 5px; text-align: justify; font-size: 15px;">
        Anda dapat membeli produk S-Plus Indonesia melalaui website ini pada halaman Product. Pilih produk S-Plus Indonesia yang ingin Anda beli, lalu pilih “ADD TO CHART”. Secara otomatis produk yang Anda pilih akan masuk ke halaman “Chart”. Pilih checkout dan isi form “Billing Details” secara lengkap. Secara otomatis detail orderan Anda akan muncul di bagian kanan pengisian Form “Billing Details”. Lalu pilih jenis ekspedisi yang ingin Anda gunakan. Proses terakhir klik “Place Order”.
      </div>
    </div>
      <p>
        <button type="button" class="buttonfaq" data-toggle="collapse" data-target="#collapseExampledua" aria-expanded="false" aria-controls="collapseExample">Apakah Menerima Pengiriman Internasional?</button>
      </p>
    <div class="collapse" id="collapseExampledua">
      <div class="card card-body" style="padding-left: 20px; padding-bottom: 5px; text-align: justify; font-size: 15px;">
        Iya. Untuk pengiriman Internasional, Anda dapat menghubungi Costumer Support S-Plus Indonesia.
      </div>
    </div>
      <p>
        <button type="button" class="buttonfaq" data-toggle="collapse" data-target="#collapseExampletiga" aria-expanded="false" aria-controls="collapseExample">Kemana Saya Harus Transfer?</button> 
      </p>
    <div class="collapse" id="collapseExampletiga">
      <div class="card card-body" style="padding-left: 20px; padding-bottom: 5px; text-align: justify; font-size: 15px;">
        Pembayaran dapat dilakukan dengan transfer ke rekening BNI dan Mandiri  atas nama PT. SMART TECH TECX sesuai dengan nominal order dan kode pemesanan. Kode pemesanan ini difungsikan untuk membedakan pemesanan Anda dengan pelanggan lainnya.
      </div>
    </div>
    </div>
  </div>
</div>
<!--footer-->
<?php $this->load->view('user/footer') ?>