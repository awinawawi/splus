<?php
$meta['title']          = 'Showroom Surabaya 1 - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah surabaya Jl. Raya Jemursari No. 2F & 2G, Surabaya 60237 Telp.(031) 99853335';
$meta['keywords']       = 'pintu abs surabaya, pintu abs s plus surabaya, jual pintu abs surabaya,jual pintu upvc surabaya,jual pintu namo surabaya,jual jendela upvc surabaya,jual plafon surabaya,jual wpc surabaya, jual solid surface surabaya, jual kitchen set surabaya';
$this->load->view('user/header', $meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
  <div class="ps-container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40">
        <img src="<?= base_url('assets/user/images/profile/surabaya.jpg') ?>" alt="" <?php if ($this->agent->is_mobile()) {
                                                                                        echo 'style="width:100%"';
                                                                                      } else {
                                                                                        echo 'style="border-radius: 30px; width:90%"';
                                                                                      } ?>>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <div class="h-title h-m-title">
          SURABAYA GALLERY 1
        </div><br>
        <div class="h-body h-m-body">
          Jl. Raya Jemursari No. 2F & 2G,<br>
          Surabaya 60237<br> <br>
          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <b>Telp.</b> <br>(031) 99853335<br>
            </div>
            <div class="col-md-8">
              <b>Email</b> <br> <a href="mailto:surabaya1@splusindonesia.co.id">surabaya1@splusindonesia.co.id</a><br>
            </div>
          </div> <br>
          <b>Jam Kerja </b><br>
          <table>
            <tr>
              <td style="text-align:left; font-weight:500" width="<?= $this->agent->is_mobile() ? '40%' : '20%' ?>">
                Senin - Jum'at <br>
                Sabtu <br>
                Minggu
              </td>
              <td width="5%">: <br> : <br> : </td>
              <td style="text-align:left; font-weight:500">
                08.00 - 16.00 <br>
                09.00 - 14.00 <br>
                10.00 - 15.00
              </td>
            </tr>
          </table>
          <br>
          <a href="https://bit.ly/2UuxxVh" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
        </div>
      </div>
    </div>
    <div class="row pt-40">
      <div class="h-title h-m-title text-center">
        TIM MARKETING
      </div>
      <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; ">
      <div class="col-md-2"></div>
      <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
        <img src="<?= base_url('assets/user/images/showroom/surabaya-1/tim/candra.jpg') ?>" class="imground">
        <div class="h-body h-m-body"><b>Candra</b></div>
        <div class="h-body h-m-body">0812 9558 3448</div>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
        <img src="<?= base_url('assets/user/images/showroom/surabaya-1/tim/Eko.jpg') ?>" class="imground">
        <div class="h-body h-m-body"><b>Eko</b></div>
        <div class="h-body h-m-body">0812 3013 1868</div>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
        <img src="<?= base_url('assets/user/images/showroom/surabaya-1/tim/paulus.jpg') ?>" class="imground">
        <div class="h-body h-m-body"><b>Paulus</b></div>
        <div class="h-body h-m-body">0823 3517 2918</div>
      </div>
      <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
        <img src="<?= base_url('assets/user/images/showroom/surabaya-1/tim/jumadi.jpg') ?>" class="imground">
        <div class="h-body h-m-body"><b>Jumadi</b></div>
        <div class="h-body h-m-body">0813 5781 4978</div>
      </div>
    </div>

    <!-- Grid row -->
    <div class="row pt-40 pb-80 gallery-popup">
      <div class="h-title h-m-title text-center">
        GALLERY
      </div>
      <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; ">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
        <img src="<?= base_url('assets/user/images/showroom/surabaya-1/surabaya-4.jpg') ?>" style="border-radius: 10px;"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
        <img src="<?= base_url('assets/user/images/showroom/surabaya-1/surabaya-2.jpg') ?>" style="border-radius: 10px;"></a>
      </div>
    </div>
  </div>
  <?php $this->load->view('user/footer') ?>