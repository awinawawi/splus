<?php 
$meta['title']          = 'Showroom Tangerang - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah tangerang Jl. Boulevard Raya Ruko 1B Blok BA.3 No.54-55 Serpong, Tangerang 15810 Telp.0812 9506 0480';
$meta['keywords']       = 'pintu abs tangerang, pintu abs s plus tangerang, jual pintu abs tangerang,jual pintu upvc tangerang,jual pintu namo tangerang,jual jendela upvc tangerang,jual plafon tangerang,jual wpc tangerang, jual solid surface tangerang, jual kitchen set tangerang';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/profile/serpong.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="h-title h-m-title"  >
                TANGERANG GALLERY
              </div><br>
              <div class="h-body h-m-body" >
                Villa Melati Mas Blok SR 1/09 Lengkong Raya, <br> Serpong - Tangerang<br>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <b>Telp.</b> <br> 0812 9506 0480
                  </div>
                  <div class="col-md-8">
                    <b>Email</b> <br> <a href="mailto:tangerang@splusindonesia.co.id">tangerang@splusindonesia.co.id</a> <br>
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
                <a href="https://bit.ly/2WD7iPc" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
              </div>
            </div>
        </div>
        <div class="row pt-40" >
            <div class="htitle text-center" style="font-size:30px; font-weight:800; font: 'Montserrat'" >
                TIM MARKETING
            </div>
            <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
            <div class="col-md-3"></div>
            <!--<div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">-->
            <!--  <img src="<?=base_url('assets/user/images/showroom/tangerang/tim/okta.jpg')?>" class="imground">-->
            <!--  <div class="h-body h-m-body"><b>Oxta Fasyarella</b></div>-->
            <!--  <div class="h-body h-m-body">0812 8687 8956</div>-->
            <!--</div>-->
            <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
              <img src="<?=base_url('assets/user/images/showroom/tangerang/tim/ari.jpg')?>" class="imground">
              <div class="h-body h-m-body"><b>Bangun Ari</b></div>
              <div class="h-body h-m-body">0811 8248 188</div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
              <img src="<?=base_url('assets/user/images/showroom/tangerang/tim/danang.jpg')?>" class="imground">
              <div class="h-body h-m-body"><b>Danang Hasto</b></div>
              <div class="h-body h-m-body">0812 9850 4899</div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
              <img src="<?=base_url('assets/user/images/showroom/tangerang/tim/heri.jpg')?>" class="imground">
              <div class="h-body h-m-body"><b>Heri Kurniawan</b></div>
              <div class="h-body h-m-body">0858 9272 6242</div>
            </div>
        </div>
    
     <!-- Grid row -->
     <div class="row pt-40 gallery-popup" >
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; ">  
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/tangerang/SHOWROOM-SERPONG4.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/tangerang/SHOWROOM-SERPONG5.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/tangerang/ANGGOTA-SERPONG.jpeg')?>" style="border-radius: 10px;"></a>
          </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>