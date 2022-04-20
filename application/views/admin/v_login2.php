<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>S Plus Indonesia | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/user/images/logi-1.png' ?>">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/user/images/favicon-01.png' ?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/admin/bower_components/bootstrap/dist/css/bootstrap.min.css' ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/admin/bower_components/font-awesome/css/font-awesome.min.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/admin/dist/css/AdminLTE.min.css' ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/admin/admin/plugins/iCheck/square/blue.css' ?>">
</head>







<body class="hold-transition login-page">

  <div>
    </br></br>
  </div>


  <div class="col-sm-4 col-sm-offset-2 ">
    <div class="login-box">
      <div>
        <p><?php echo $this->session->flashdata('msg'); ?></p>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"> <img src="<?php echo base_url() . 'assets/user/images/logi-1.png' ?>"></p>
        <hr />

        <form action="<?php echo base_url() . 'administrator/auth' ?>" method="post">
          <div class="form-group">
            <h3>Sudah Punya Akun?</h3>
            <p>Silahkan login disini</p>
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
          <div class="row">
            <div class="text-center">
              <p>Belum Punya Akun?</p>
              <p><a href='<?= base_url('register') ?>'>Daftar akun baru</a></p>
            </div>
          </div>
        </form>

        <!-- <?php var_dump($username) ?> -->


        <!-- /.social-auth-links -->
        <hr />
        <p>
          <center>Copyright <?php echo '2022' ?> by S Plus Indonesia <br /> All Right Reserved</center>
        </p>
      </div>
      <!-- /.login-box-body -->
    </div>
  </div>

  <div class="col-sm-4">
    <div class="login-box">
      <div class="login-box-body">

        <div class="title">
          <h3><b>Pelanggan Baru?</b></h3>

          <a href='<?= base_url('register') ?>'><button type="submit" class="btn btn-primary btn-block btn-flat">Daftar Akun Disini</button></a>
          </br>
          <div class="new-customer__benefit">
            <div class="benefit__title">
              <img src="https://www.monotaro.id/static/version1648123777/frontend/MonotaroIndonesia/default/id_ID/images/icon-building.svg"> Keuntungan menjadi Akun Bisnis
            </div>
            <ul class="benefit__list no-list-style">
              <li><i class="fa fa-check-circle"></i> Diskon 10% Untuk Pembelanjaan Pertama</li>
              <li><i class="fa fa-check-circle"></i> Pembayaran Tempo/TOP (Term of Payment)</li>
              <li><i class="fa fa-check-circle"></i> Penerbitan Faktur Pajak</li>
            </ul>
          </div>
          </br>
          <div class="row" style="background: #ffffff;border: 1px solid #ddd;box-sizing: border-box;">
            <div class="col-xs-12">
              <img src="https://www.monotaro.id/static/version1648123777/frontend/MonotaroIndonesia/default/id_ID/images/icon_shipping-buss.svg">
            </div>
            <div class="col-xs-12">
              <strong class="main-red-text">PROMO GRATIS ONGKIR*</strong> ke Jabodetabek, Banten, Jabar, Jatim, Jawa Tengah, DI Yogyakarta, Bali, Jambi, Lampung, &amp; Sumatera Selatan. *)
              <a href="https://support.monotaro.id/hc/id/articles/360022258173-Berapa-biaya-pengiriman-ke-alamat-saya-" target="_blank" rel="noopener">Lihat selengkapnya</a>
            </div>
          </div>
          <hr />

          <div class="row">
            <div class="col-xs-12">
              <img src="https://www.monotaro.id/static/version1648123777/frontend/MonotaroIndonesia/default/id_ID/images/icon_headset.svg">
              <span>Butuh bantuan? Hubungi CS kami</span>
            </div>
            <div class="col-xs-12">
              <img src="https://www.monotaro.id/static/version1648123777/frontend/MonotaroIndonesia/default/id_ID/images/icon_contact.svg">
              <span>021-3110-6990 | 0855-7467-8400 | <a href="mailto: splus@splusindonesia.co.id">splus@splusindonesia.co.id</a> | <a href="https://www.monotaro.id/mid_customers/whatsApp/redirect/" target="_blank" rel="noopener">Order via WA</a></span>
            </div>
            <div class="col-xs-12">
              <img src="https://www.monotaro.id/static/version1648123777/frontend/MonotaroIndonesia/default/id_ID/images/icon_calendar.svg">
              <span>Jam Operasional CS: Senin - Jumat | 08.00 - 16.00 WIB</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>




  <!-- /.login-box -->

  <!-- jQuery 2.2.3 -->
  <script src="<?php echo base_url() . 'assets/admin/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="<?php echo base_url() . 'assets/admin/bootstrap/js/bootstrap.min.js' ?>"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url() . 'assets/admin/plugins/iCheck/icheck.min.js' ?>"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>



</html>