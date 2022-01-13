<?php 
$meta['title']          = 'Panduan Pemasangan Produk - S-Plus Indonesia';
$meta['description']    = 'Informasi cara pemasangan produk S-Plus yang baik dan benar sesuai dengan standarisasi pengukuran yang sudah S-Plus buat agar hasil sesuai dan maksimal';
$meta['keywords']       = 'pemasangan, pemasangan pintu, pemasangan jendela, pemasangan wpc, pemasangan plafon pvc, pemasangan kitchen set, cara pasang produk splus, pemasangan produk splus, panduan instalasi produk splus';
$this->load->view('user/header',$meta) ?>
<div class="ps-contact ps-section pb-80">
    <div class="ps-container">
        <h3 style="text-align: center; padding-bottom: 10px; font-family: Courier; font-size: 23px;"><b>Pemasangan Produk S-Plus</b></h3>
        <hr style="width: 20%; margin-top: 10px; border: 1px solid #e24545;">
        <div class="row pt-50">    
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-section__content">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20">
                        <a href="<?=base_url('pemasangan/pintu')?>">
                        <img src="<?=base_url('assets/user/images/pemasangan/p-pintu.jpg')?>" class="pb-20">
                        </a>
                        <div class="text-center">
                            <div class="textpsg-overlay">PEMASANGAN S-PLUS PINTU</div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20 ">
                        <a href="<?=base_url('pemasangan/plafon')?>">
                        <img src="<?=base_url('assets/user/images/pemasangan/p-plafon.jpg')?>" alt="" class="pb-20">
                        </a>
                        <div class="text-center">
                            <div class="textpsg-overlay">PEMASANGAN S-PLUS PLAFON</div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-1 col4-sm-12 col-xs-12 pb-20 ">
                        <a href="<?=base_url('pemasangan/jendela')?>">
                        <img src="<?=base_url('assets/user/images/pemasangan/p-jendela.jpg')?>" class="pb-20">
                        </a>
                        <div class="text-center">
                            <div class="textpsg-overlay">PEMASANGAN S-PLUS JENDELA</div>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-30">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20 ">
                            <a href="<?=base_url('pemasangan/sunshade')?>">
                            <img src="<?=base_url('assets/user/images/pemasangan/p-sunshade.jpg')?>" alt="" class="pb-20">
                            </a>
                            <div class="text-center">
                                <div class="textpsg-overlay">PEMASANGAN S-PLUS SUN SHADE</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20 ">
                            <a href="<?=base_url('pemasangan/kitchen-set')?>">
                            <img src="<?=base_url('assets/user/images/pemasangan/p-kitchen.jpg')?>" alt="" class="pb-20">
                            </a>
                            <div class="text-center">
                                <div class="textpsg-overlay">PEMASANGAN KITCHEN SET</div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pb-20 ">
                            <a href="<?=base_url('pemasangan/kitchen-set')?>">
                            <img src="<?=base_url('assets/user/images/pemasangan/p-wpc.jpg')?>" alt="" class="pb-20">
                            </a>
                            <div class="text-center">
                                <div class="textpsg-overlay">PEMASANGAN WPC</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>    
</div>   
<?php $this->load->view('user/footer') ?>