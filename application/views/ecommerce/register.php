<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Splus Ecommerce</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/ecommerce/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/templatemo-hexashop.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/owl-carousel.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ecommerce/css/lightbox.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/user/images/logo.png') ?>">

</head>

<body>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <div>

                            <a href="<?= base_url('Ecommerce') ?>" class="logo">
                                <img src="<?= base_url('assets/images/ourproduk/logo.jpg') ?>" style="width: 300px;">
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top" style="background: url('<?= base_url('assets/images/news/Register-now1.jpg') ?>'); background-size: cover;" class="pt-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2 style="color:black;">REGISTER</h2>
                        <span style="color:black;">can you sign up here</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Contact Area Starts ***** -->
    <div class="">
        <div class="container">
            <CENTER>
                <h2>Daftar Akun Baru</h2>
            </CENTER>
            <center><span style="color:black;">sign up</span></center>
            <br></br>
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7923.530852348345!2d108.65283277419924!3d-6.798368480344978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f037edb36a2df%3A0xb9f84f4adbd2d8bf!2sSmart%20Techtex!5e0!3m2!1sid!2sid!4v1642991890593!5m2!1sid!2sid" width="100%" height="400px" style="border:0;" frameborder="0" allowfullscreen="" loading="lazy"></iframe> -->
                        <img src="<?= base_url('assets/images/news/login.png') ?>" style="width: 400px; height: 400px;">
                    </div>
                </div>
                <div class="col-lg-6">

                    <!-- <form id="contact" action="<?php echo base_url() . 'admin/pengguna/simpan_pengguna_newup' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="inputUserName">Nama lengkap</label>
                                    <input name="xnama" class="form-control" id="inputUserName" placeholder="Your Nama Lengkap" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="inputEmail3">E-mail</label>
                                    <input name="xemail" class="form-control" id="inputEmail3" placeholder="Your email" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <label for="inputUserName">Jenis Kelamin</label>
                                <div class="radio">
                                    <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                    <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                    <label for="inlineRadio2"> Perempuan </label>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="inputUserName">Username</label>
                                    <input name="xusername" class="form-control" id="inputUserName" placeholder="Your username" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="inputPassword3">Password</label>
                                    <input name="xpassword" class="form-control" id="inputPassword3" placeholder="Your password" required>

                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="inputPassword4">Ulangi Password</label>
                                    <input name="xpassword2" class="form-control" id="inputPassword4" placeholder="Your password Repeat" required>
                                </fieldset>
                            </div>

                            <div class="col-lg-12">
                                <fieldset>
                                    <label for="inputUserName">Kontak Person</label>
                                    <input name="xkontak" class="form-control" id="inputUserName" placeholder="Your kontak" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <label>Level</label>
                                <select class="form-control" name="xlevel" required>
                                    <option value="1">Head Office</option>
                                    <option value="2">Cabang</option>
                                </select>
                            </div>

                            <div class="col-lg-12" style="margin-top: 20px;">
                                <fieldset>
                                    <label for="inputUserName">Photo</label>
                                    <input style="border:0px; padding-left: 2px; " type="file" name="filefoto">
                                </fieldset>
                            </div>

                            <button type="submit" name="submit" class="btn btn-primary mt-4" style="padding-top: 2px; width: 90px">Daftar</button>
                            <hr>
                            <a class="btn btn-default mt-4 float-right" href='<?= base_url('administrator') ?>' style="padding-top: 2px;">Sudah Punya Akun?</a>
                        </div>
                    </form> -->

                    <form class="form-horizontal" action="<?php echo base_url() . 'admin/Register/simpan_pengguna_newup' ?>" method="post" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="inputUserName">Nama lengkap</label>
                                    <input name="xnama" class="form-control" id="inputUserName" placeholder="Your Nama Lengkap" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <fieldset>
                                    <label for="inputEmail3">E-mail</label>
                                    <input name="xemail" class="form-control" id="inputEmail3" placeholder="Your email" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <label for="inputUserName">Jenis Kelamin</label>
                                <div class="radio">
                                    <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                    <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio">
                                    <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                    <label for="inlineRadio2"> Perempuan </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label for="inputUserName" class="col-sm-4 control-label">Username</label>
                                    <div class="col-lg-12">
                                        <input type="text" name="xusername" class="form-control" id="inputUserName" placeholder="Username" required>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                    <div class="col-lg-12">
                                        <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password" required>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword4" class="col-sm-4 control-label">Ulangi Password</label>
                                <div class="col-lg-12">
                                    <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
                                <div class="col-lg-12">
                                    <input type="text" name="xkontak" class="form-control" id="inputUserName" placeholder="Kontak Person" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
                                <div class="col-lg-12">
                                    <input type="file" name="filefoto">
                                </div>
                            </div>


                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-flat" style="padding-top: 2px; width: 90px" id="simpan">Simpan</button>
                        <button type="submit" class="btn btn-primary btn-flat" style="padding-top: 2px; width: 200px"><a href='<?= base_url('administrator') ?>' style='color: #ffecec;'> Sudah Punya Akun?</a></button>
                        <!-- <a class="btn btn-default mt-4 float-right" href='<?= base_url('administrator') ?>' style="padding-top: 2px;">Sudah Punya Akun?</a> -->

                    </form>

                    <div>
                        <br>
                        <p style="text-align:center ;">
                            Dengan mendaftar, saya menyetujui<br>
                            <a href='<?= base_url('syarat_k') ?>' style="color:dodgerblue;">Syarat dan Ketentuan</a> serta
                            <a href='<?= base_url('kebijakan_p') ?>' style="color:dodgerblue;">Kebijakan Privasi</a>
                        </p>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    <?php if ($this->session->flashdata('msg') == 'error') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Error',
                text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                showHideTransition: 'slide',
                icon: 'error',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FF4859'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'warning') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Warning',
                text: "Gambar yang Anda masukan terlalu besar.",
                showHideTransition: 'slide',
                icon: 'warning',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#FFC017'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Pengguna Berhasil disimpan ke database.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Info',
                text: "Pengguna berhasil di update",
                showHideTransition: 'slide',
                icon: 'info',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#00C9E6'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
        <script type="text/javascript">
            $.toast({
                heading: 'Success',
                text: "Pengguna Berhasil dihapus.",
                showHideTransition: 'slide',
                icon: 'success',
                hideAfter: false,
                position: 'bottom-right',
                bgColor: '#7EC857'
            });
        </script>
    <?php elseif ($this->session->flashdata('msg') == 'show-modal') : ?>
        <script type="text/javascript">
            $('#ModalResetPassword').modal('show');
        </script>
    <?php else : ?>

    <?php endif; ?>

    <!-- ***** Contact Area Ends ***** -->



    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row" style="font-size:20px ;">
                <div class="col-lg-3">
                    <div class="first-item">
                        <!-- <a style="color: #fff;">Head Office & Factory</a>
                        <br></br>
                        <ul>
                            <li><a href="#">Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip<br>
                                    Kec. Pangenan Kab. Cirebon 45182</a></li>
                            <li><a href="#">Telp. (0231) 8511781 – 85</a></li>
                            <li><a href="#">Fax.(0231) 85117825</a></li>
                        </ul> -->
                        <a style="color: #fff;">Bantuan</a>
                        <br></br>

                        <ul>
                            <li><a href="<?= base_url('paymen') ?>">Cara Belanja</a></li>
                            <li><a href="<?= base_url('shopbybrand') ?>">Tanya Jawab/FAQ</a></li>
                            <li><a href="<?php echo base_url('pemasangan/splus'); ?>">Pemasangan Produk</a></li>
                            <li><a href="<?php echo base_url('hubungi-kami'); ?>">Hubungi kami</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Help &amp; Information</a>
                    <br></br>

                    <ul>
                        <li><a href="<?php echo base_url('tentang-kami'); ?>">Tentang Kami</a></li>
                        <li><a href="<?= base_url('promosi') ?>">Berita & Acara</a></li>
                        <li><a href="<?= base_url('e-katalog') ?>">Katalog Produk</a></li>
                        <li><a href="<?= base_url('bebas_ogkir') ?>">Tracking Pesanan</a></li>
                        <li><a href="<?php echo base_url('karir'); ?>">Jenjang Karir</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Kebijakan Privasi</a>
                    <br></br>
                    <ul>
                        <li><a href='<?= base_url('syarat_k') ?>'>Syarat & Ketentuan</a></li>
                        <li><a href='<?= base_url('kebijakan_p') ?>'>Kebijakan Privasi</a></li>


                    </ul>
                </div>
                <div class="col-lg-3">
                    <a style="color: #fff;">Our product &amp; Categories</a>
                    <br></br>
                    <ul>
                        <li><a href="<?= base_url('product_pintu_splus') ?>">Pintu</a></li>
                        <li><a href="<?= base_url('product_window_splus') ?>">Jendela</a></li>
                        <li><a href="<?= base_url('product_interior_material_splus') ?>">Interior Material</a></li>
                        <li><a href="<?= base_url('product_exterior_material_splus') ?>">Exterior Material</a></li>
                        <li><a href="<?= base_url('product_aksesoris_splus') ?>">Aksesoris</a></li>
                        <li><a href="<?= base_url('product_masker_splus') ?>">Masker</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 PT Smart Techtex Group.All Rights Reserved.
                            <br>Follow Us on Social Media: <a href="https://localhost/splus" target="_blank" title="free & premium responsive templates">Splus Indonesia</a>
                        </p>
                        <ul>
                            <li><a href="https://www.facebook.com/S-Plus-Indonesia-100698461599924/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/splusindonesia/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCMYj8Md6whMbPNFcyxjyA6A"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->

    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/jquery-2.1.0.min.js') ?>"></script>

    <!-- Bootstrap -->
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/popper.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/bootstrap.min.js') ?>"></script>

    <!-- Plugins -->
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/owl-carousel.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/accordions.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/datepicker.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/scrollreveal.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/waypoints.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/jquery.counterup.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/imgfix.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/slick.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/lightbox.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/isotope.js') ?>"></script>


    <!-- Global Init -->
    <script defer type="text/javascript" src="<?= base_url('assets/css/ecommerce/js/custom.js') ?>"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>

</body>

</html>