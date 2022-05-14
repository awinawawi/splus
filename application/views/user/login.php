<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-section ps-owl-root">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-md-offset-3">
                    <h3>
                        <center>Pilihan Masuk</center>
                    </h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-7 col-md-offset-3">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Silakan masuk ke akun Anda untuk menyelesaikan pembayaran dengan data pribadi Anda.</p>
                            <br>
                            <?php if ($this->session->flashdata('error_msg')) : ?>
                                <div class="alert alert-danger">
                                    <small><?= $this->session->flashdata('error_msg') ?></small>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('store_login') ?>" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="username" placeholder="Username / Email / Telpon">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" name="password" placeholder="Password" id="pass">
                                    <span id="icon" toggle="#password-field" class="fa fa-eye-slash greyicon" style="float: right; margin-top: -33px; margin-right: 10px;cursor: pointer;"></span>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Ingat saya
                                    </label>
                                </div>
                                <div>
                                    <a href="<?= base_url('recovery') ?>">
                                        <p style="padding-top: 5px;padding-bottom: 10px;font-size: 13px;">Lupa Kata Sandi?</p>
                                    </a>
                                </div>
                                <div class="form-group text-center">
                                    <button class="ps-btn" type="submit">Masuk <i class="fa fa-angle-right"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6 vl">
                            <p>Ada banyak keuntungan yang Anda dapatkan dengan membuat akun S-Plus:</p> <br>
                            <?php if ($this->session->flashdata('error_signup')) : ?>
                                <div class="alert alert-danger">
                                    <small><?= $this->session->flashdata('error_signup') ?></small>
                                </div>
                            <?php endif; ?>
                            <?php if ($this->session->flashdata('success_signup')) : ?>
                                <div class="alert alert-success">
                                    <small><?= $this->session->flashdata('success_signup') ?></small>
                                </div>
                            <?php endif; ?>
                            <form action="<?= base_url('store_signup') ?>" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group text-center">
                                    <button class="ps-btn">Daftar <i class="fa fa-angle-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('user/footer') ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#icon').on('click', function() {
                $(this).toggleClass('hideShow')
                if ($(this).hasClass('hideShow')) {
                    $(this).removeClass('fa-eye-slash')
                    $(this).addClass('fa-eye')
                    $(this).prev().attr('type', 'text')
                } else {
                    $(this).removeClass('fa-eye')
                    $(this).addClass('fa-eye-slash')
                    $(this).prev().attr('type', 'password')
                }
            })
        });
    </script>