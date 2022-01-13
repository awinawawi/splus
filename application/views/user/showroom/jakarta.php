<?php 
$meta['title']          = 'Showroom Jakarta - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah jakarta Jl. Pinangsia Raya No. 105 Pinangsia Barat, Jakarta Barat 11110 Telp.(021) 62301599';
$meta['keywords']       = 'pintu abs jakarta, pintu abs s plus jakarta,jual pintu abs jakarta,jual pintu upvc jakarta,jual pintu namo jakarta,jual jendela upvc jakarta,jual plafon jakarta,jual wpc jakarta, jual solid surface jakarta, jual kitchen set jakarta';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/showroom/jakarta/showroom-jakarta.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="h-title h-m-title"  >
                JAKARTA GALLERY
              </div><br>
              <div class="h-body h-m-body" >
                Jl. Pinangsia Raya No. 105 Pinangsia Barat,  <br>
                Jakarta Barat 11110<br> <br>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <b>Telp.</b> <br>(021) 62301599<br>
                  </div>
                  <div class="col-md-8">
                    <b>Email</b> <br> <a href="mailto:jakarta@splusindonesia.co.id">jakarta@splusindonesia.co.id</a> <br>
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
                <a href="https://bit.ly/33IqOLB" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
              </div>
            </div>
        </div>
    
     <div class="row pt-60" >
        <div class="h-title h-m-title text-center">
            TIM MARKETING
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-md-3"></div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/jakarta/tim/Hayat.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>M Hayat</b></div>
          <div class="h-body h-m-body">0812 1313 4775</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/jakarta/tim/leo-putra.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Leo Putra</b></div>
          <div class="h-body h-m-body">0812 8652 5674</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/jakarta/tim/wisnu.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>K. Wisnu Raharjo</b></div>
          <div class="h-body h-m-body">0821 1285 1888</div>
        </div>
      </div>

      <div class="row pt-40 gallery-popup">
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/jakarta/3.jpg')?>" style="border-radius: 10px;"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/jakarta/timjakarta.jpg')?>" style="border-radius: 10px;"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/jakarta/4.jpg')?>" style="border-radius: 10px;"></a>
        </div>
      </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>