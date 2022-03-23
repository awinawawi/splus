<?php
$meta['title']          = 'Showroom Cibubur - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah cibubur Ruko Citra Gran, Blok R6/35 Jl. Raya Alternative Cibubur KM.4 Jatisampurna-Cibubur Bekasi 17435 Telp.(024) 3580178';
$meta['keywords']       = 'pintu abs s plus cibubur, pintu abs cibubur, pintu abs jabodetabek, jual pintu abs cibubur,jual pintu upvc cibubur,jual pintu namo cibubur,jual jendela upvc cibubur,jual plafon cibubur,jual wpc cibubur, jual solid surface cibubur, jual kitchen set cibubur';
$this->load->view('user/header', $meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
  <div class="ps-container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40">
        <img src="<?= base_url('assets/user/images/profile/cibubur.jpg') ?>" alt="" <?php if ($this->agent->is_mobile()) {
                                                                                    echo 'style="width:100%"';
                                                                                  } else {
                                                                                    echo 'style="border-radius: 30px; width:90%"';
                                                                                  } ?>>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <div class="h-title h-m-title">
          CIBUBUR GALLERY
        </div><br>
        <div class="h-body h-m-body">
          Puri Sriwedari Cibubur Blok C No 3 Harjamukti,<br>
          Cimanggis - Depok<br> <br>
          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <b>Telp.</b> <br>(021) 22175431<br>
              0821 2789 5362
            </div>
            <div class="col-md-8">
              <b>Email</b> <br> <a href="mailto:cibubur@splusindonesia.co.id">cibubur@splusindonesia.co.id</a> <br>
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
          <a href="https://bit.ly/2J4BJpB" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
        </div>
      </div>
    </div>
    <div class="row pt-40">
      <div class="h-title h-m-title text-center">
        TIM MARKETING
      </div>
      <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; ">
      <div class="col-md-5"></div>
      <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
        <img src="<?= base_url('assets/user/images/showroom/cibubur/anne.jpg') ?>" class="imground">
        <div class="h-body h-m-body"><b>Anne</b></div>
        <div class="h-body h-m-body">0812 1923 8070</div>
      </div>
      <!--<div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">-->
      <!--    <img src="<?= base_url('assets/user/images/showroom/cibubur/Yossia.jpg') ?>" class="imground">-->
      <!--    <div class="h-body h-m-body" ><b>Yossia Ardian</b></div>-->
      <!--    <div class="h-body h-m-body">0857 3884 3371</div>-->
      <!--</div>-->
      <!--<div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">-->
      <!--    <img src="<?= base_url('assets/user/images/showroom/cibubur/eko.jpg') ?>" class="imground">-->
      <!--    <div class="h-body h-m-body" ><b>Eko Krisyanto</b></div>-->
      <!--    <div class="h-body h-m-body">0857 7062 2933</div>-->
      <!--</div>-->
    </div>

    <!-- Grid row -->
    <div class="row pt-40 gallery-popup">
      <div class="h-title h-m-title text-center">
        GALLERY
      </div>
      <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; ">
      <div class="col-lg-4 col-md-4  col-sm-6 col-xs-6 pb-20">
        <img src="<?= base_url('assets/user/images/showroom/cibubur/SHOWROOM-CIBUBUR5.jpeg') ?>" style="border-radius: 10px;"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
        <img class="img-fluid" src="<?= base_url('assets/user/images/showroom/cibubur/SHOWROOM-CIBUBUR1.jpeg') ?>" style="border-radius: 10px;"></a>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
        <img class="img-fluid" src="<?= base_url('assets/user/images/showroom/cibubur/SHOWROOM-CIBUBUR3.jpeg') ?>" style="border-radius: 10px;"></a>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('user/footer') ?>