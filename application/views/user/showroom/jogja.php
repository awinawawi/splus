<?php 
$meta['title']          = 'Showroom Yogyakarta - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah yogyakarta Jl.Diponegoro No. 103, RT/RW 022/006 Kel.Bumijo Kec. Jetis, Yogjakarta 55231 Telp.(0274) 2921671';
$meta['keywords']       = 'pintu abs jogja, pintu abs s plus jogja, jual pintu abs yogyakarta,jual pintu upvc yogyakarta,jual pintu namo yogyakarta,jual jendela upvc yogyakarta,jual plafon yogyakarta,jual wpc yogyakarta, jual solid surface yogyakarta, jual kitchen set yogyakarta';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/profile/jogja.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="h-title h-m-title"  >
              YOGYAKARTA GALLERY
            </div><br>
            <div class="h-body h-m-body" >
              Jl.Diponegoro No. 103, RT/RW 022/006 Kel.Bumijo Kec. Jetis,<br>
              Jogjakarta 55231<br> <br>
              <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                  <b>Telp.</b> <br>(0274) 2921671<br>
                </div>
                <div class="col-md-8">
                  <b>Email</b> <br> <a href="mailto:yogyakarta@splusindonesia.co.id">yogyakarta@splusindonesia.co.id</a><br>
                </div>
              </div> <br>
              <b>Jam Kerja </b><br>
              <table>
                <tr>
                  <td style="text-align:left; font-weight:500" width="<?= $this->agent->is_mobile() ? '40%':'20%' ?>">
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
                <a href="https://bit.ly/2J8Lpzu" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
              </div>
          </div>
        </div>
      <div class="row pt-40" >
        <div class="h-title h-m-title text-center">
            TIM MARKETING
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-md-3"></div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/Jogja/tim/anton.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Anton Dwi</b></div>
          <div class="h-body h-m-body">0813 2976 7171</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-30 text-center">
          <img src="<?=base_url('assets/user/images/showroom/Jogja/tim/aris.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Putaris Lafianto</b></div>
          <div class="h-body h-m-body">0822 4253 2434</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/Jogja/tim/erci.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Erci Martanti</b></div>
          <div class="h-body h-m-body">0819 0771 6842</div>
        </div>
      </div>
    
     <!-- Grid row -->
     <div class="row pt-60 gallery-popup" >
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 60px; border: 1px solid #333; margin-top: 10px; ">  
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/Jogja/front-office.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/Jogja/fullteam.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">    
            <img src="<?=base_url('assets/user/images/showroom/Jogja/bagian-showroom.jpg')?>" style="border-radius: 10px;"></a>
          </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>