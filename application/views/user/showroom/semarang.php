<?php 
$meta['title']          = 'Showroom Semarang - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah semarang Jl. Pekojan No 49 Purwodinatan, Semarang Tengah 50137 Telp.(024) 3580178';
$meta['keywords']       = 'pintu abs s plus, pintu abs semarang, jual pintu abs semarang,jual pintu upvc semarang,jual pintu namo semarang,jual jendela upvc semarang,jual plafon semarang,jual wpc semarang, jual solid surface semarang, jual kitchen set semarang';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/profile/semarang.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           <div class="h-title h-m-title"  >
             SEMARANG GALLERY
           </div><br>
           <div class="h-body h-m-body" >
             Jl. Pekojan No 49 Purwodinatan,<br>
             Semarang Tengah 50137<br> <br>
             <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                 <b>Telp.</b> <br>(024) 3580178<br>
               </div>
               <div class="col-md-8">
                 <b>Email</b> <br> <a href="mailto:semarang@splusindonesia.co.id">semarang@splusindonesia.co.id</a><br>
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
                <a href="https://bit.ly/3bmvLfV" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
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
          <img src="<?=base_url('assets/user/images/showroom/semarang/tim/tegar1.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Tegar Hakiki</b></div>
          <div class="h-body h-m-body">0813 8142 9401</div>
        </div>
        <!--<div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">-->
        <!--  <img src="<?=base_url('assets/user/images/showroom/semarang/tim/rozaq.jpg')?>" class="imground">-->
        <!--  <div class="h-body h-m-body"><b>Abdur Rozaq</b></div>-->
        <!--  <div class="h-body h-m-body">0813 2976 7171</div>-->
        <!--</div>-->
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/semarang/tim/andreas.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Andreas Sastradi</b></div>
          <div class="h-body h-m-body">0857 4226 9058</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/semarang/tim/didik.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Didik Slamet Riyanto</b></div>
          <div class="h-body h-m-body">0882 1675 4715</div>
        </div>
      </div>
    
     <!-- Grid row -->
     <div class="row pt-40 gallery-popup" >
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; ">  
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/semarang/galeri1.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/semarang/galeri2.jpg')?>" style="border-radius: 10px;"></a>
          </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>
