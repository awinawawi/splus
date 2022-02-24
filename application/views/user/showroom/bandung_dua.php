<?php 
$meta['title']          = 'Showroom Bandung 2 - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah bandung Plaza IBCC Block B3 No.18 Jl. Jenderal Ahmad Yani No. 296, Bandung 40271 Telp.(022) 7238490';
$meta['keywords']       = 'pintu abs s plus bandung, pintu abs bandung, jual pintu abs bandung,jual pintu upvc bandung,jual pintu namo bandung,jual jendela upvc bandung,jual plafon bandung,jual wpc bandung, jual solid surface bandung, jual kitchen set bandung';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
            <img src="<?=base_url('assets/user/images/profile/bandung2.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
          </div>
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
             <div class="h-title h-m-title" >
               BANDUNG GALLERY 2
             </div><br>
             <div class="h-body h-m-body" >
               Plaza IBCC Block B3 No.18 Jl. Jenderal Ahmad Yani No. 296, <br>
               Bandung 40271<br> <br>
               <div class="row">
                 <div class="col-md-4 col-sm-12 col-xs-12">
                   <b>Telp.</b> <br>(022) 7238490<br>
                 </div>
                 <div class="col-md-8">
                   <b>Email</b> <br> <a href="mailto:bandung2@splusindonesia.co.id">bandung2@splusindonesia.co.id</a> <br>
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
              <a href="https://bit.ly/2xhyQyW" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
             </div>
           </div>
        </div>
     <div class="row pt-40" >
        <div class="h-title h-m-title text-center">
            TIM MARKETING
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
        <div class="col-md-2"></div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center" >
          <img src="<?=base_url('assets/user/images/showroom/bandung-2/tim/suharto.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Suharto</b></div>
          <div class="h-body h-m-body">0812 222 1584</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/bandung-2/tim/budi.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Budi Rismawan</b></div>
          <div class="h-body h-m-body">0813 9478 6506</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
          <img src="<?=base_url('assets/user/images/showroom/bandung-2/tim/khoirul.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Khoirul Anshori</b></div>
          <div class="h-body h-m-body">0813 1104 7255</div>
        </div>
        <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center"  data-aos-delay="400">
          <img src="<?=base_url('assets/user/images/showroom/bandung-2/tim/agus.jpg')?>" class="imground">
          <div class="h-body h-m-body"><b>Agus Ari Wibowo</b></div>
          <div class="h-body h-m-body">0856 2438 4158</div>
        </div>
      </div>
    
     <!-- Grid row -->
     <div class="row pt-60 gallery-popup" >
        <div class="h-title h-m-title text-center">
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/bandung-2/showroom-bandung2-3.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/bandung-2/showroom-bandung2-5.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20">
            <img src="<?=base_url('assets/user/images/showroom/bandung-2/teambndg2.jpg')?>" style="border-radius: 10px;"></a>
          </div>
      </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>