<?php 
$meta['title']          = 'Jakarta Timur Office (Cawang) - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah jakarta timur Rukan Patria Park RK 05, Jl. D.I.Panjaitan Kav.5-7, Cipinang Cempedak, Jatinegara-Jakarta Timur';
$meta['keywords']       = 'pintu abs jakarta, pintu abs s plus jakarta timur,jual pintu abs jakarta timur,jual pintu upvc jakarta timur,jual pintu namo jakarta timur,jual jendela upvc jakarta timur,jual plafon jakarta timur,jual wpc jakarta timur, jual solid surface jakarta timur, jual kitchen set jakarta timur';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/showroom/cawang/cawang.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="h-title h-m-title"  >
                JAKARTA TIMUR OFFICE (CAWANG)
              </div><br>
              <div class="h-body h-m-body" >
                Rukan Patria Park RK 05, Jl. D.I.Panjaitan Kav.5-7, Cipinang Cempedak, Jatinegara, Jakarta Timur 13350<br> <br>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <b>Telp.</b> <br>(0813) 98887897<br>
                  </div>
                  <div class="col-md-8">
                    <b>Email</b> <br> <a href="mailto:bekasi@splusindonesia.co.id">bekasi@splusindonesia.co.id</a> <br>
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
                <a href="https://bit.ly/34zdydk" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
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
                <img src="<?=base_url('assets/user/images/showroom/bekasi/tim/fauzi.jpg')?>" class="imground">
                <div class="h-body h-m-body"><b>Fauzi Alhadar</b></div>
                <div class="h-body h-m-body">0812 9920 1887</div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
                <img src="<?=base_url('assets/user/images/showroom/bekasi/tim/agus.jpg')?>" class="imground">
                <div class="h-body h-m-body"><b>Agus Prahito</b></div>
                <div class="h-body h-m-body">0877 8192 9415</div>
            </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/cawang/dedy-andriyanto.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Dedy Adriyanto</b></div>
          <div class="h-body h-m-body">0821 3160 0027</div>
        </div>
      </div>

      <div class="row pt-40 gallery-popup">
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/cawang/foto1.jpeg')?>" style="border-radius: 10px;"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/cawang/foto2.jpeg')?>" style="border-radius: 10px;"></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/cawang/foto3.jpeg')?>" style="border-radius: 10px;"></a>
        </div>
      </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>