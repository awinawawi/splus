<?php 
$meta['title']          = 'Showroom Surabaya 2 - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah surabaya Jl. Baliwerti No 28 Alon-Alon Controng, Bubutan Surabaya 60174 Telp.(031) 99243995';
$meta['keywords']       = 'pintu abs surabaya, pintu abs s plus surabaya, jual pintu abs surabaya,jual pintu upvc surabaya,jual pintu namo surabaya,jual jendela upvc surabaya,jual plafon surabaya,jual wpc surabaya, jual solid surface surabaya, jual kitchen set surabaya';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/showroom/surabaya-2/main.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           <div class="h-title h-m-title"  >
             SURABAYA GALLERY 2
           </div><br>
           <div class="h-body h-m-body" >
             Jl. Baliwerti No 28 Alon-Alon Controng, <br>
             Bubutan Surabaya 60174<br> <br>
             <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                 <b>Telp.</b> <br>(031) 99243995<br>
               </div>
               <div class="col-md-8">
                 <b>Email</b> <br> <a href="mailto:surabaya2@splusindonesia.co.id">surabaya2@splusindonesia.co.id</a><br>
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
                <a href="https://bit.ly/3dms4Zu" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
            </div>
         </div>
        </div>
      <div class="row pt-40" >
        <div class="h-title h-m-title text-center">
            TIM MARKETING
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-md-5 col-sm-3 col-xs-3"></div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/surabaya-2/Nurul-hayati.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Nurul Hayati</b></div>
          <div class="h-body h-m-body">0896 7967 318</div>
        </div>
      </div>

     <!-- Grid row -->
     <div class="row pt-40 gallery-popup" >
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/surabaya-1/surabaya-4.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/surabaya-1/surabaya-2.jpg')?>" style="border-radius: 10px;"></a>
          </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>