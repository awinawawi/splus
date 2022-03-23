<?php 
$meta['title']          = 'Bogor Office - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah bogor Yasmin Garden Sektor 3, Jl. Culan Raya No.28 Rt.03 Rw.08 Kel.Curug Mekar, Bogor Barat';
$meta['keywords']       = 'pintu abs bogor, pintu abs s plus bogor,jual pintu abs bogor,jual pintu upvc bogor,jual pintu namo bogor,jual jendela upvc bogor,jual plafon bogor,jual wpc bogor, jual solid surface bogor, jual kitchen set bogor';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/showroom/bogor/bogor.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
              <div class="h-title h-m-title"  >
                BOGOR OFFICE
              </div><br>
              <div class="h-body h-m-body" >
                Yasmin Garden Sektor 3, Jl. Culan Raya No.28 Rt.03 Rw.08 Kel.Curug Mekar, Bogor Barat 16113<br> <br>
                <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                    <b>Telp.</b> <br>(0811) 11110942<br>
                  </div>
                  <div class="col-md-8">
                    <b>Email</b> <br> <a href="mailto:bogor@splusindonesia.co.id">bogor@splusindonesia.co.id</a> <br>
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
                </table><br>
                <a href="https://bit.ly/30DmOf3" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
              </div>
            </div>
        </div>
    
     <div class="row pt-60" >
        <div class="h-title h-m-title text-center">
            TIM MARKETING
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-md-4"></div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/bogor/andre-safriadi.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Andre Safriadi</b></div>
          <div class="h-body h-m-body">0858 9912 6175</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/jakarta/tim/Deni-Firdaus.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Deni Firdaus</b></div>
          <div class="h-body h-m-body">0896 2547 3471</div>
        </div>
      </div>

      <div class="row pt-40 gallery-popup">
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/bogor/foto1.jpeg')?>" style="border-radius: 10px;"></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/bogor/foto2.jpeg')?>" style="border-radius: 10px;"></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/bogor/foto3.jpeg')?>" style="border-radius: 10px;"></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
          <img src="<?=base_url('assets/user/images/showroom/bogor/foto4.jpeg')?>" style="border-radius: 10px;"></a>
        </div>
      </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>