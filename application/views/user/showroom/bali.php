<?php 
$meta['title']          = 'Showroom Bali - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah bali Jl. Mahendradata No. 59 Denpasar Bali 80119 Telp.(0361) 8450783 ';
$meta['keywords']       = 'pintu abs s plus bali, pintu abs bali, jual pintu abs bali,jual pintu upvc bali,jual pintu namo bali,jual jendela upvc bali,jual plafon bali,jual wpc bali, jual solid surface bali, jual kitchen set bali';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
            <img src="<?=base_url('assets/user/images/profile/bali.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
           <div class="h-title h-m-title"  >
             BALI GALLERY
           </div><br>
           <div class="h-body h-m-body" >
             Jl. Mahendradata No. 59 Denpasar<br>
             Bali 80119<br> <br>
             <div class="row">
               <div class="col-md-4 col-sm-12 col-xs-12">
                 <b>Telp.</b> <br>(0361) 8450783<br>
               </div>
               <div class="col-md-8">
                 <b>Email</b> <br> <a href="mailto:bali@splusindonesia.co.id">bali@splusindonesia.co.id</a> <br>
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
             <a href="https://bit.ly/2xg31Xh" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
           </div>
         </div>
        </div>
    <!-- Grid row -->
      <div class="row pt-40" >
        <div class="h-title h-m-title text-center">
            TIM MARKETING
        </div>
        <hr style="width: 10%; margin-bottom: 60px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-md-3"></div>
        <div class="col-md-2  col-sm-6 col-xs-6">
          <img src="<?=base_url('assets/user/images/showroom/bali/tim/paulus.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Paulus S Rijke</b></div>
          <div class="h-body h-m-body">0853 3338 0051</div>
        </div>
        <div class="col-md-2  col-sm-6 col-xs-6">
          <img src="<?=base_url('assets/user/images/showroom/bali/tim/toni.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Toni Hartoyo</b></div>
          <div class="h-body h-m-body">0812 30507799</div>
        </div>
        <div class="col-md-2  col-sm-6 col-xs-6">
          <img src="<?=base_url('assets/user/images/showroom/bali/tim/rony.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Rony Satriono</b></div>
          <div class="h-body h-m-body">0816 581072 / 0819 9910 7200</div>
        </div>
      </div>
      <!-- Grid row -->
      <div class="row pt-40 gallery-popup" >
         <div class="h-title h-m-title text-center" >
           GALLERY
         </div>
         <hr style="width: 10%; margin-bottom: 60px; border: 1px solid #333; margin-top: 10px; "> 
           <div class="col-lg-4 col-md-4"   data-aos-delay="100">
             <img src="<?=base_url('assets/user/images/showroom/bali/showroom-bali-1.jpeg')?>" style="border-radius: 10px;"></a>
           </div>
           <div class="col-lg-4 col-md-4 h-m-gallery"  data-aos-delay="200">
             <img src="<?=base_url('assets/user/images/showroom/bali/showroom-bali-2.jpeg')?>" style="border-radius: 10px;"></a>
           </div>
       </div>
       
    </div>
</div>
<?php $this->load->view('user/footer') ?>