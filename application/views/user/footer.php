    <div class="ps-footer bg--cover">
        <div class="ps-footer__content" style="background-image: url(assets/user/portfolio/world_pattern.svg);">
            <div class="ps-container">
                <div class="row">
                    <!-- <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="google-map w-100">
                            <iframe src="https://goo.gl/maps/QnKjREw6hQPhsfyd9" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div> -->


                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div>
                            * &copy; 2022 PT Smart Techtex Group.All rights Resevered.
                        </div>
                        <aside class="ps-widget--footer ps-widget--link">
                            <header>
                                <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

                                <h3 class="ps-widget__title">Head Office & Factory</h3>
                            </header>
                            <footer>
                                <span style="font-size: 20px; font-weight:500; font: 'Montserrat';">
                                    <a class="fa fa-globe"></a>Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip <br>
                                    Kec. Pangenan Kab. Cirebon 45182
                                    <br><br>
                                    <a class="fa fa-phone"></a>Telp. (0231) 8511781 – 85 <br>
                                    <a class="fa fa-phone"></a>Fax.(0231) 8511782 <br>
                                </span>
                            </footer>
                        </aside>
                    </div>

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div>
                            <br>
                        </div>
                        <aside class="ps-widget--footer ps-widget--link">
                            <header>
                                <h3 class="ps-widget__title" style="font-size:30px; font-weight:800; font: 'Montserrat'">LAYANAN PELANGGAN</h3>
                            </header>
                            <footer style="font-size: 20px; font-weight:500; font: 'Montserrat';">
                                <a href="<?php echo base_url('hubungi-kami'); ?>"><b>Hubungi Kami</b></a> &emsp; <br>
                                <a href="<?php echo base_url('pemasangan/splus'); ?>"><b>Pemasangan</b></a> &emsp; <br>
                                <a href="<?php echo base_url('tentang-kami'); ?>"><b>Tentang Kami</b></a> &emsp; <br>
                                <a href="<?php echo base_url('karir'); ?>"><b>Karir</b></a> &emsp; <br>
                                <a href="#"><b>Blog</b></a> &emsp; <br>
                            </footer>
                        </aside>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div>
                            <br>
                        </div>
                        <aside class="ps-widget--footer ps-widget--link">
                            <header>
                                <h3 class="ps-widget__title" style="font-size:30px; font-weight:800; font: 'Montserrat'">Ikuti Kami di Media Sosial</h3>
                            </header>
                            <footer>
                                <a href="https://www.facebook.com/S-Plus-Indonesia-100698461599924/" target="_blank"><i class="fa fa-facebook sosicon sosfb"></i></a>
                                <a href="https://www.instagram.com/splusindonesia/" target="_blank"><i class="fa fa-instagram sosicon sosig"></i></a>
                                <!--<a href="#"><i class="fa fa-instagram sosicon sosig"></i></a>-->
                                <!-- <a href="https://twitter.com/Splus_Indonesia" target="_blank"><i class="fa fa-twitter sosicon sostw"></i></a> -->
                                <a href="https://www.youtube.com/channel/UCMYj8Md6whMbPNFcyxjyA6A" target="_blank"><i class="fa fa-youtube sosicon sosyt"></i></a>
                                <!-- Channel youtube terbaru
                                <a href="https://www.youtube.com/channel/UCq4FT1l_DG1na16wHpflT1Q/featured?view_as=subscriber" target="_blank"><i class="fa fa-youtube sosicon sosyt"></i></a>-->
                            </footer>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-footer__copyright">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    Copyright &copy; 2022 PT Smart Techtex | All rights Resevered.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align:right">
                    <span><a class="n" href="<?php echo base_url('syarat-ketentuan'); ?>">Syarat dan Ketentuan</a></span> &emsp;
                    <a class="n" href="<?php echo base_url('kebijakan-privasi'); ?>"><span>Kebijakan Privasi</a></span>
                </div>
            </div>
        </div>
    </div>
    </div>
    </main>
    <?php if ($this->agent->is_mobile() && $this->uri->segment(1) == 'kategori') : ?>
        <!-- floating menu mobile -->
        <label class="float-fab-menu">
            <input type="checkbox" class="float">
            <!-- <div class="float-menu-box" style="font-size:12px;">
                <div class="float-menu-circle"><i class="fa fa-navicon"></i></div>
                <ul class="float-menu-items">
                    <li id="pintu"><a href="javascript:;">PINTU </a></li>
                    <li id="upvc"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>">PINTU UPVC</a></li>
                    <li id="namo"><a href="<?= base_url('kategori/s-plus-namo-pintu') ?>">PINTU NAMO</a></li>
                    <li id="jendela"><a href="javascript:;">JENDELA UPVC</a></li>
                    <li id="plafon"><a href="<?= base_url('kategori/s-plus-upvc-plafon') ?>">PLAFON UPVC</a>
                    </li>
                    <li id="wpc"><a href="<?= base_url('kategori/s-plus-wpc') ?>">WPC</a></li>
                    <li id="shade"><a href="javascript:;">SUN SHADE</a></li>
                    <li id="solid"><a href="<?= base_url('kategori/s-plus-solid-surface') ?>">SOLID SURFACE</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>">KITCHEN SET</a></li>
                    <li><a href="https://sinargarden.com/parasol">PARASOL</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>">PVC FOAM BOARD</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-vinyl-flooring') ?>">VINYL FLOORING</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">WOVEN VINYL FLOORING</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-iroom') ?>">IROOM</a></li>
                </ul>

                <ul class="float-sub-menu-items hide" id="subpintu">
                    <li><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">CLASSIC</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">FORTEBELLO</a></li>
                    <li><a href="javascript:;">PREMIUM</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">&emsp; PREMIUM</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">&emsp; DECO</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">&emsp; GRANDE</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">ART DOOR</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">EXTERIOR DOOR</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">KUSEN</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">AKSESORIS</a></li>
                </ul>

                <ul class="float-sub-menu-items hide" id="subjendela">
                    <li><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">KACA MATI</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">JUNGKIT</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">SLIDING</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">SWING</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-upvc-jendela/kombinasi') ?>">KOMBINASI</a></li>
                </ul>

                <ul class="float-sub-menu-items hide" id="subshade">
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">COMBI</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">WOOD SHADE</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">ALUMUNIUM</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">BLACKOUT</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">HONEYCOMB</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">SUN SCREEN</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">VERTICAL BLIND</a></li>
                    <li><a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">ROLL SCREEN</a></li>
                </ul>


            </div> -->

            <div class="float-menu-box" style="font-size:12px;">
                <div class="float-menu-circle"><i class="fa fa-navicon"></i></div>
                <ul class="float-menu-items">
                    <li id="upvc"><a href="<?= base_url('kategori/s-plus-pintu') ?>">PINTU</a></li>
                    <li id="namo"><a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>">JENDELA</a></li>
                    <li id="plafon"><a href="<?= base_url('kategori/s-plus-upvc-plafon/plafon') ?>">INLIFE</a></li>
                    <li id="wpc"><a href="<?= base_url('kategori/s-plus-wpc/wpc') ?>">OUTLIFE</a></li>
                    <li id="wpc"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">AKSESORIS</a></li>
                </ul>
            </div>

        </label>
    <?php endif; ?>
    <?php if ($this->agent->is_mobile() && $this->uri->segment(1) == 'pemasangan') : ?>
        <!-- floating menu mobile -->
        <label class="float-fab-menu">
            <input type="checkbox" class="float">
            <div class="float-menu-box">
                <div class="float-menu-circle"><i class="fa fa-navicon"></i></div>
                <ul class="float-menu-items">
                    <li><a href="<?= base_url('pemasangan/pintu') ?>">S-PLUS PINTU</a></li>
                    <li><a href="<?= base_url('pemasangan/jendela') ?>">S-PLUS JENDELA</a></li>
                    <li><a href="<?= base_url('pemasangan/plafon') ?>">S-PLUS PLAFON</a></li>
                    <li><a href="<?= base_url('pemasangan/sunshade') ?>">S-PLUS SUN SHADE</a></li>
                    <li><a href="<?= base_url('pemasangan/wpc') ?>">S-PLUS WPC</a></li>
                    <li><a href="<?= base_url('pemasangan/kitchen-set') ?>">S-PLUS KITCHEN SET</a></li>
                    <li><a href="<?= base_url('standar-pengukuran') ?>">SOP PENGUKURAN S-PLUS</a></li>
                </ul>
            </div>
        </label>
    <?php endif; ?>
    <!-- image popup -->
    <div class="show-image-popup">
        <div class="image-popup-overlay"></div>
        <div class="img-show">
            <img src="">
        </div>
    </div>


    <!-- new-->

    <!-- <script defer type="text/javascript" src="<?= base_url('assets/css/vendor/owl-carousel/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/vendor/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/vendor/fancybox/js/jquery.fancybox.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/vendor/isotope/isotope.pkgd.min.js') ?>"></script>
    <script src="<?= base_url('assets/css/js/google-maps.js') ?>"></script>
    <script src="<?= base_url('assets/css/js/theme.js') ?>"></script> -->

    <!-- JS Library-->
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/jquery/dist/jquery.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/jssor.slider-28.0.0.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/slider.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/lazysizes.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/custom.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/plugins/bootstrap-select/dist/js/bootstrap-select.min.js') ?>"></script>
    <script defer type="text/javascript" src="<?= base_url('assets/user/js/main.js') ?>"></script>
    <?php if ($this->uri->segment(1) == "order" || $this->uri->segment(1) == "cart") : ?>
        <script defer type="text/javascript" src="<?= base_url('assets/user/js/bootstrap-datepicker.min.js') ?>"></script>
        <script defer type="text/javascript" src="<?= base_url('assets/user/js/order.js') ?>"></script>
    <?php endif; ?>
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiRfl-1guerWoGP_QyH1RDnhaSEwi-fF4&callback=initMap"></script> -->


    <?php if (!$this->agent->is_mobile()) : ?>
        <a id="back-to-top" href="#" class="back-to-top" role="button" style="color:#d50000"><span class="glyphicon glyphicon-chevron-up"></span></a>
        <script defer>
            //desktop
            window.onload = function() {
                $(window).scroll(function() {
                    if ($('header').hasClass('navigation--pin')) {
                        $('#sinar').css('top', '12vh');
                        $('#masker').css('top', '35vh');
                    } else {
                        $('#sinar').css('top', '1vh');
                        $('#masker').css('top', '23vh');
                    }
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                // scroll body to 0px on click
                $('#back-to-top').click(function() {
                    $('#back-to-top').tooltip('hide');
                    $('body,html').animate({
                        scrollTop: 0
                    }, 800);
                    return false;
                });

                $('#back-to-top').tooltip('show');

                $(document).scroll(function() {
                    if ($('.header').hasClass('navigation--pin') && $('.search-menu').hasClass('exists')) {
                        $('.search-menu').css('display', 'block');
                    } else {
                        $('.search-menu').css('display', 'none');
                    }
                });
                //s-plus-pintu  s-plus-pintu-upvc   s-plus-plafon   s-plus-wpc  namo-pintu
                <?php
                $uri = $this->uri->segment(2);
                if ($uri == 's-plus-pintu' || $uri == 's-plus-upvc-pintu' || $uri == 's-plus-upvc-plafon' || $uri == 's-plus-wpc' || $uri == 's-plus-iroom' || $uri == 's-plus-namo-pintu' || $uri == 's-plus-face-mask') :
                    $uris = $this->uri->segment(3);
                    if (
                        $uris == 'fortebello' || $uris == 'premium-general' || $uris == 'premium-deco' || $uris == 'grande' || $uris == 'classic' ||
                        $uris == 'kusen' || $uris == 'aksesoris-pintu'
                    ) : else : ?>
                        jssor_1_slider_init();
                <?php endif;
                endif; ?>

                <?php if ($this->uri->segment(1) == 'kategori') : ?>
                    $('.mega-menu').hover(function() {
                        $(this).css('top', '100%');
                    }, function() {
                        $(this).css('top', '90px');
                    });
                <?php endif; ?>

                $(".gallery-popup img").click(function() {
                    var $src = $(this).attr("src");
                    $(".show-image-popup").fadeIn();
                    $(".img-show img").attr("src", $src);
                });

                $(".image-popup-overlay, .img-show").click(function() {
                    $(".show-image-popup").fadeOut();
                });
                $('#closee').next('ul').hide();
                $("#closee").click(function() {
                    $(this).next("ul").toggle();
                });
                $('#close').next('ul').hide();
                $("#close").click(function() {
                    $(this).next("ul").toggle();
                });

                $('#sm-direktur').click(function() {
                    $(this).hide();
                    $('#show-more-direktur,#sl-direktur').fadeIn();
                });
                $('#sl-direktur').click(function() {
                    $('#sl-direktur,#show-more-direktur').hide();
                    $('#sm-direktur').fadeIn();
                })
                $('#sm-gm').click(function() {
                    $(this).hide();
                    $('#show-more-gm,#sl-gm').fadeIn();
                });
                $('#sl-gm').click(function() {
                    $('#sl-gm,#show-more-gm').hide();
                    $('#sm-gm').fadeIn();
                })
            };
        </script>
    <?php else : ?>
        <script defer>
            //mobile
            window.onload = function() {

                $('#pintu').click(function() {
                    $('#subpintu').removeClass('hide');
                    $('#subjendela,#subshade').addClass('hide');
                })
                $('#jendela').click(function() {
                    $('#subjendela').removeClass('hide');
                    $('#subpintu,#subshade').addClass('hide');
                })
                $('#shade').click(function() {
                    $('#subshade').removeClass('hide');
                    $('#subpintu,#subjendela').addClass('hide');
                });
                $('.float').click(function() {
                    if (!$(this).prop('checked')) {
                        $('#subpintu,#subjendela,#subshade').addClass('hide');
                    }
                });

                $(document).scroll(function() {
                    if ($('.header').hasClass('navigation--pin') && $('.search-menu').hasClass('exists')) {
                        $('.search-menu').css('display', 'block');
                    } else {
                        $('.search-menu').css('display', 'none');
                    }
                });
                //s-plus-pintu  s-plus-pintu-upvc   s-plus-plafon   s-plus-wpc  namo-pintu
                <?php
                $uri = $this->uri->segment(2);
                if ($uri == 's-plus-pintu' || $uri == 's-plus-upvc-pintu' || $uri == 's-plus-upvc-plafon' || $uri == 's-plus-wpc' || $uri == 's-plus-iroom' || $uri == 's-plus-namo-pintu' || $uri == 's-plus-upvc-jendela' || $uri == 's-plus-face-mask') :
                    $uris = $this->uri->segment(3);
                    if (
                        $uris == 'fortebello' || $uris == 'premium-general' || $uris == 'premium-deco' || $uris == 'grande' || $uris == 'classic' ||
                        $uris == 'kusen' || $uris == 'aksesoris-pintu'
                    ) : else : ?>
                        jssor_1_slider_init();
                <?php endif;
                endif; ?>

                <?php if ($this->uri->segment(1) == 'kategori') : ?>
                    $('.mega-menu').hover(function() {
                        $(this).css('top', '100%');
                    }, function() {
                        $(this).css('top', '90px');
                    });
                <?php endif; ?>

                $(".gallery-popup img").click(function() {
                    var $src = $(this).attr("src");
                    $(".show-image-popup").fadeIn();
                    $(".img-show img").attr("src", $src);
                });

                $(".image-popup-overlay, .img-show").click(function() {
                    $(".show-image-popup").fadeOut();
                });
                $('#closee').next('ul').hide();
                $("#closee").click(function() {
                    $(this).next("ul").toggle();
                });
                $('#close').next('ul').hide();
                $("#close").click(function() {
                    $(this).next("ul").toggle();
                });

                $('#sm-direktur').click(function() {
                    $(this).hide();
                    $('#show-more-direktur,#sl-direktur').fadeIn();
                });
                $('#sl-direktur').click(function() {
                    $('#sl-direktur,#show-more-direktur').hide();
                    $('#sm-direktur').fadeIn();
                })
                $('#sm-gm').click(function() {
                    $(this).hide();
                    $('#show-more-gm,#sl-gm').fadeIn();
                });
                $('#sl-gm').click(function() {
                    $('#sl-gm,#show-more-gm').hide();
                    $('#sm-gm').fadeIn();
                })
            };

            function changeShowroom(showroom) {
                if (showroom === 'cirebon') {
                    $('.cirebon').removeClass('hide');
                    $('.jabodetabek,.bandung,.yogyakarta,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'jabodetabek') {
                    $('.jabodetabek').removeClass('hide');
                    $('.cirebon,.bandung,.yogyakarta,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'bandung') {
                    $('.bandung').removeClass('hide');
                    $('.cirebon,.jabodetabek,.yogyakarta,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'yogyakarta') {
                    $('.yogyakarta').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'semarang') {
                    $('.semarang').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'surabaya') {
                    $('.surabaya').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.bali,.semarang,.medan').addClass('hide');
                } else if (showroom === 'bali') {
                    $('.bali').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.semarang,.surabaya,.medan').addClass('hide');
                } else {
                    $('.medan').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.bali,.semarang,.surabaya').addClass('hide');
                }
            }

            <?php if ($this->session->userdata('showroom-list') != 'default') : ?>
                // sesi terakhir untuk showorom
                var showroom = '<?= $this->session->userdata('showroom-list') ?>';
                $('.showroom-list option[value=' + showroom + ']').attr('selected', 'selected');
                if (showroom === 'cirebon') {
                    $('.cirebon').removeClass('hide');
                    $('.jabodetabek,.bandung,.yogyakarta,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'jabodetabek') {
                    $('.jabodetabek').removeClass('hide');
                    $('.cirebon,.bandung,.yogyakarta,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'bandung') {
                    $('.bandung').removeClass('hide');
                    $('.cirebon,.jabodetabek,.yogyakarta,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'yogyakarta') {
                    $('.yogyakarta').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.semarang,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'semarang') {
                    $('.semarang').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.bali,.surabaya,.medan').addClass('hide');
                } else if (showroom === 'surabaya') {
                    $('.surabaya').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.bali,.semarang,.medan').addClass('hide');
                } else if (showroom === 'bali') {
                    $('.bali').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.semarang,.surabaya,.medan').addClass('hide');
                } else {
                    $('.medan').removeClass('hide');
                    $('.cirebon,.jabodetabek,.bandung,.yogyakarta,.bali,.semarang,.surabaya').addClass('hide');
                }
            <?php endif; ?>
        </script>
        <div class="linked-button">
            <a href="https://sinargarden.com" target="_blank"><img loading="lazy" src="<?= base_url('assets/user/images/sinar-button.webp') ?>" alt="Sinargarden - Kain Awning dan Upholstery"></a>
        </div>
        <div class="linked-button">
            <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><img loading="lazy" src="<?= base_url('assets/user/images/kategori/splus-face-mask/icon.png') ?>" alt="S-Plus Indonesia - Face Masks" style="bottom:19vh"></a>
        </div>
    <?php endif; ?>
    </body>

    </html>