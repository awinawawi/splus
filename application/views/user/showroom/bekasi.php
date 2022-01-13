<?php 
$meta['title']          = 'Showroom Bekasi - S-Plus Indonesia';
$meta['description']    = 'Informasi showroom s-plus indonesia di daerah bekasi Jl.Ir.H.Juanda No 91C-D Kel. Bekasi Jaya,Kec. Bekasi Timur Kota Bekasi 17113 Telp.(021) 88397133';
$meta['keywords']       = 'pintu abs s plus bekasi, pintu abs bekasi, pintu abs jabodetabek, jual pintu abs bekasi,jual pintu upvc bekasi,jual pintu namo bekasi,jual jendela upvc bekasi,jual plafon bekasi,jual wpc bekasi, jual solid surface bekasi, jual kitchen set bekasi';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-40 pt-40">
    <div class="ps-container">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12 gallery-popup pb-40" >
            <img src="<?=base_url('assets/user/images/profile/bekasi.jpg')?>" alt="" <?php if($this->agent->is_mobile()){ echo 'style="width:100%"'; }else{ echo 'style="border-radius: 30px; width:90%"'; } ?>>
          </div>
           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
             <div class="h-title h-m-title"  >
               BEKASI GALLERY
             </div><br>
             <div class="h-body h-m-body" >
               Jl.Ir.H.Juanda No 91C-D Kel. Bekasi Jaya,Kec. Bekasi Timur <br>
               Kota Bekasi 17113<br> <br>
               <div class="row">
                 <div class="col-md-4 col-sm-12 col-xs-12">
                   <b>Telp.</b> <br>(021) 88397133<br>
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
                <a href="https://bit.ly/3dqfZCC" target="_BLANK"><i class="fa fa-map-marker"></i> Peta Lokasi</a>
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
                <img src="<?=base_url('assets/user/images/showroom/bekasi/tim/fauzi.jpg')?>" class="imground">
                <div class="h-body h-m-body"><b>Fauzi Alhadar</b></div>
                <div class="h-body h-m-body">0812 9920 1887</div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
                <img src="<?=base_url('assets/user/images/showroom/bekasi/tim/jamaludin.jpg')?>" class="imground">
                <div class="h-body h-m-body"><b>Jamaludin</b></div>
                <div class="h-body h-m-body">0852 1719 0007</div>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-6 pb-20 text-center">
                <img src="<?=base_url('assets/user/images/showroom/bekasi/tim/agus.jpg')?>" class="imground">
                <div class="h-body h-m-body"><b>Agus Prahito</b></div>
                <div class="h-body h-m-body">0877 8192 9415</div>
            </div>
        </div>
    
     <!-- Grid row -->
     <div class="row pt-40 gallery-popup" >
        <div class="h-title h-m-title text-center" >
          GALLERY
        </div>
        <hr style="width: 10%; margin-bottom: 40px; border: 1px solid #333; margin-top: 10px; "> 
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20 ">
            <img src="<?=base_url('assets/user/images/showroom/bekasi/showroom-4.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20 ">
            <img src="<?=base_url('assets/user/images/showroom/bekasi/showroom-7.jpg')?>" style="border-radius: 10px;"></a>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20 ">
            <img src="<?=base_url('assets/user/images/showroom/bekasi/tim-bekasi2.jpeg')?>" style="border-radius: 10px;"></a>
          </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>