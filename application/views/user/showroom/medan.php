<?php 
$meta['title']          = 'Showroom Medan - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah medan Jl. Cemara No 63 Kec. Medan Timur, Medan 20239 Telp.(061) 6617976';
$meta['keywords']       = 'pintu abs medan, pintu abs s plus medan, jual pintu abs medan,jual pintu upvc medan,jual pintu namo medan,jual jendela upvc medan,jual plafon medan,jual wpc medan, jual solid surface medan, jual kitchen set medan';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
              <img src="<?=base_url('assets/user/images/profile/medan.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
            </div>
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           <div class="h-title h-m-title"  >
             MEDAN GALLERY & ASSEMBLING
           </div><br>
           <div class="h-body h-m-body" >
             Jl. Cemara No 63 Kec. Medan Timur,   <br>
             Medan 20239<br> <br>
             <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                 <b>Telp.</b> <br>(061) 6617976 / 80088395<br>
                 0812 6062 4544 
               </div>
               <div class="col-md-8">
                 <b>Email</b> <br> <a href="mailto:medan@splusindonesia.co.id">medan@splusindonesia.co.id</a><br>
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
                <a href="https://bit.ly/33Isgh1" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
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
          <img src="<?=base_url('assets/user/images/showroom/medan/tim/hendra_bm.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Hendra</b></div>
          <div class="h-body h-m-body">0812 6563 305</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/medan/tim/rio.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Rio Hermawan</b></div>
          <div class="h-body h-m-body">0852 9603 8868</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/medan/tim/yose.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Yose Hendy</b></div>
          <div class="h-body h-m-body">0852 0660 9108</div>
        </div>
      </div>

     <!-- Grid row -->
     <div class="row pt-40 gallery-popup" >
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; ">  
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20"  data-aos-delay="100">
            <img src="<?=base_url('assets/user/images/showroom/medan/SHOWROOM-MDN5.jpg')?>" style="border-radius: 10px;">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20"  data-aos-delay="200">
            <img src="<?=base_url('assets/user/images/showroom/medan/ASSEMBLY-MEDAN1.jpeg')?>" style="border-radius: 10px;">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20"  data-aos-delay="300">
            <img src="<?=base_url('assets/user/images/showroom/medan/ASSEMBLY-MDN9.jpg')?>" style="border-radius: 10px;">
          </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>