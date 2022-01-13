<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-section ps-owl-root">
        <div class="ps-container">            
            <div class="row">
               <center>
                   <img src="<?=base_url('assets/user/images/logo.png')?>" width="150px">
                   <h3 style="padding-bottom: 20px;">Password Baru</h3>
                   <p style="padding-bottom: 30px;">Silahkan untuk mengisi password baru, disarankan untuk <br> menyimpan password baru yang telah dibuat.</p>
               </center> 
                   <form class="form-horizontal" action="" method="POST">
                     <div class="form-group">
                       <div class="col-sm-3"></div> 
                       <div class="col-sm-6">
                            <input type="hidden" name="email" value="<?=$email?>"> <input type="hidden" name="token" value="<?=$token?>">
                            <input class="form-control" type="password" name="password" placeholder="Password" id="pass">
                            <span id="icon" toggle="#password-field" class="fa fa-eye-slash greyicon"style="float: right; margin-top: -33px; margin-right: 10px;cursor: pointer;"></span>
                        </div>   
                     </div>
                     <div class="form-group">
                       <div class="col-sm-3"></div>        
                       <div class="col-sm-6">
                         <button  class="btn btn-primary" style="width:100%;">Kirim</button>
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
    <script type="text/javascript">
    $(document).ready(function() {
      $('#icon').on('click', function(){
                $(this).toggleClass('hideShow')
                if($(this).hasClass('hideShow')){
                    $(this).removeClass('fa-eye-slash')
                    $(this).addClass('fa-eye')
                    $(this).prev().attr('type', 'text')
                }else{
                    $(this).removeClass('fa-eye')
                    $(this).addClass('fa-eye-slash')
                    $(this).prev().attr('type', 'password')
                }
            })
    });  
    </script>
    <?php $this->load->view('user/footer') ?>