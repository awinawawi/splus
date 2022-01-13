<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-section ps-owl-root">
        <div class="ps-container">
            <div class="row">
               <center>
                   <img src="<?=base_url('assets/user/images/logo.png')?>" width="150px">
                   <h3 style="padding-bottom: 20px;">Reset Password</h3>
                   <p style="padding-bottom: 30px;">Untuk mengubah password, Silahkan masukkan email Anda</p>
                   <?=$this->session->flashdata('msg');?>
               </center> 
                   <form class="form-horizontal pt-20" action="" method="POST">
                     <div class="form-group">
                       <div class="col-sm-3"></div> 
                       <div class="col-sm-6">
                         <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                       </div>
                     </div>
                     <div class="form-group">
                       <div class="col-sm-3"></div>        
                       <div class="col-sm-6">
                         <button  class="btn btn-primary" style="width:100%;" type="submit">Kirim</button>
                       </div>
                     </div>
                   </form>
             <center>
                <p style="padding-top: 25px;">Kembali ke halaman <a href="<?=base_url('login')?>" style="color: #1851ea;">masuk/daftar</a></p>
            </center>
             <br><br><br><br>
            </div>
        </div>
    </div>

    <?php $this->load->view('user/footer') ?>