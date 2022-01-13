<?php
$meta['title']          = 'Tentang Kami - S-Plus Indonesia';
$meta['description']    = 'S-Plus adalah suplier material bangunan terbesar di Indonesia, S-Plus hadir sebagai penopang pertumbuhan industri melalui layanan terbaik dan tata kelola usaha yang sehat yang berperan dikawasan nasional.';
$meta['keywords']       = 'pintu abs s plus, pintu abs,jual pintu abs,pintu upvc,jendala upvc,plafon upvc,solid surface,kitchen set,namo';
$this->load->view('user/header', $meta) ?>
<div class="ps-section" <?php if ($this->agent->is_mobile) {
                            echo 'style="background: url(' . base_url('assets/user/images/tentang/tentangg.jpg') . ') no-repeat; height:250px;margin-left:-80px;"';
                        } else {
                            echo 'style="background: url(' . base_url('assets/user/images/tentang/tentangg.jpg') . ') no-repeat; height:250px;"';
                        } ?>></div>
<div class="ps-contact ps-section" id="tentang-kami">

    <div class="video-profile pb-80" style="width:100%; text-align:center;">
        <span class="h-subtitle h-m-title" style="padding-bottom: 15px; font-size: 30px;">COMPANY PROFILE PT. SMART TECHTEX</span>
        <!--versi indonesia-->
        <!--<iframe style="<?= !$this->agent->is_mobile() ? "width:70%" : "width:100%" ?>" width="500px" height="400px" style="display:block;" src="https://www.youtube.com/embed/mWdghRVq8ew" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
        <!--versi inggris-->
        <iframe style="<?= !$this->agent->is_mobile() ? "width:70%" : "width:100%" ?>" width="500px" height="400px" style="display:block;" src="https://www.youtube.com/embed/sTB6RMN1IEA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="prl hideimg wow fadeInDown">
        <img class="imgbg" src="<?= base_url('assets/user/images/background/bg-hubungi.jpg') ?>" width="46%">
    </div>
    <div class="ps-container">
        <div class="head-office pb-80">
            <img src="<?= base_url('assets/user/images/background/headoffice.jpg') ?>" class="m-img">
            <div class="h-title">
                HEAD OFFICE AND FACTORY
            </div> <br>
            <div class="hbody" style="font-size: 20px; font-weight:500; font: 'Montserrat';">
                Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip <br>
                Kec. Pangenan Kab. Cirebon 45182<br> <br>
                Email : <a href="mailto:splus@splusindonesia.co.id">splus@splusindonesia.co.id</a> <br>
                Telp&nbsp; : (0231) 8511781 – 85 <br>
                Fax &nbsp; : (0231) 8511782 <br> <br>
                <b>Jam Kerja </b><br>
                Senin - Jumat &nbsp; &nbsp; &nbsp; &nbsp;: 08.00 - 16.00 <br>
                Sabtu &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : 08.00 - 13.00
                <br>
            </div>
        </div>

        <div class="marketing pb-20">
            <div class="row pt-20">
                <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                    <img src="<?= base_url('assets/user/images/profile/mr-kim.jpg') ?>" class="imground" style="border-radius:15px;">
                    <span class="h-subtitle h-m-title">KIM ILPYO<br> <small> Executive Director</small></span><br><br>
                </div>
                <div class="col-md-9">
                    <span class="h-body h-m-body"><b>Dear Customers,</b></span> <br><br>
                    <span class="h-body h-m-body">
                        S-Plus adalah nama baru untuk menyempurnakan kenyamanan, kemudahan, dan kesehatan untuk rumah tinggal. <br>
                        <a href="#show-more" id="sm-direktur" style="color: #D50000"> <br> <i class="fa fa-arrow-circle-down"></i> More detail</a>
                        <span id="show-more-direktur" style="display: none;"> <br>
                            S-Plus merupakan perusahaan manufaktur yang memproduksi general building materials, yaitu ABS-Engineering Door, uPVC Window, Plafon, WPC, Roll Blind, Solid Surface, Kitchen Set dan Furniture. Semua produk tersebut digunakan umum untuk rumah tinggal di Korea Selatan, Eropa dan AS. Kami S-Plus, memproduksi semua produk di Cirebon-Indonesia menggunakan teknologi standar dari Korea Selatan. <br>
                            <br>
                            S-Plus produk bisa ditemukan di :
                            <span>
                                <ol type="1">
                                    <li>13 showroom S-Plus : Jakarta, Bekasi, Tangerang, Cibubur, Bandung (2 showroom), Cirebon, Semarang, Jogjakarta, Surbaya (2 showroom), Bali dan Medan </li>
                                    <li>43 Supermarket Bahan Bangunan Nasional : Mitra 10 (35 store), Depo Bangunan (8 store). </li>
                                    <li>156 Modern Market & Toko Bangunan di 12 kota.
                                        S-Plus berkomitmen mensupply building material dengan kualitas terbaik dan memuaskan, mengutamakan kenyamanan, kemudahan, kesehatan untuk tempat tinggal. </li>
                                </ol>
                            </span>
                            <br />
                            Smart Living with S-Plus
                        </span>
                        <br>
                        <a href="#show-less" id="sl-direktur" style="color: #D50000; display:none;"> <i class="fa fa-arrow-circle-up"></i> Close detail</a>
                    </span>
                </div>
            </div>
            <div class="row pt-60">
                <?php if ($this->agent->is_mobile()) : ?>
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                        <img src="<?= base_url('assets/user/images/profile/ms-dian.jpg') ?>" class="imground" style="border-radius:15px;">
                        <span class="h-subtitle h-m-title">DIAN SUDIANTI<br> <small> General Manager </small></span> <br> <br>
                    </div>
                <?php endif; ?>
                <div class="col-md-9">
                    <span class="h-body h-m-body"><b>Selamat Datang,</b></span> <br><br>
                    <span class="h-body h-m-body">
                        Terima kasih atas kunjungan Anda di website PT SMART TECHTEX dengan nama brand “S-Plus”. <br>
                        S-Plus telah menjadi bagian penting dari industri pendukung pembangunan di Indonesia.<br>
                        <a href="#show-more" id="sm-gm" style="color: #D50000"> <br> <i class="fa fa-arrow-circle-down"></i> More detail</a>
                        <span id="show-more-gm" style="display: none;"> <br>
                            Sebagai suplier material bangunan terbesar di Indonesia, S-Plus hadir sebagai penopang pertumbuhan industri melalui layanan terbaik dan tata kelola usaha yang sehat yang berperan dikawasan nasional. <br><br>
                            Berbagai pencapaian dan keberhasilan telah kami raih selama ini melalui S-Plus dengan mitra perusahaan jasa konstruksi baik Swasta maupun BUMN, Modern Market, Toko Bangunan yang tersebar di seluruh Indonesia. <br> <br>
                            Komitmen kami selalu menciptakan inovasi baru dengan menghadirkan produk modern dengan memberikan kualitas dan pelayanan yang terbaik. <br> <br>
                            S-Plus solusi cerdas hidup Anda.
                        </span>
                        <br>
                        <a href="#show-less" id="sl-gm" style="color: #D50000; display:none;"> <i class="fa fa-arrow-circle-up"></i> Close detail</a>
                    </span>
                </div>
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                        <img src="<?= base_url('assets/user/images/profile/ms-dian.jpg') ?>" class="imground" style="border-radius:15px;">
                        <span class="h-subtitle h-m-title">DIAN SUDIANTI<br> <small> General Manager </small></span> <br> <br>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="showroom pb-80" style="background: url('<?= base_url('assets/user/images/background/bgproduk/tentangbg.jpg') ?>'); background-size: cover;" class="pt-70">
            <div class="h-title">
                SHOWROOM GALLERY
            </div> <br>
            <div class="h-body">
                Jaringan distribusi S-Plus seluruh wilayah Indonesia
            </div> <br>
            <?php if ($this->agent->is_mobile()) : ?>
                <select class="ps-select selectpicker showroom-list" onchange="changeShowroom(this.value)">
                    <option value="cirebon">Cirebon (Head Office) </option>
                    <option value="jabodetabek">Jabodetabek</option>
                    <option value="bandung">Bandung</option>
                    <option value="yogyakarta">Yogyakarta</option>
                    <option value="semarang">Semarang</option>
                    <option value="surabaya">Surabaya</option>
                    <option value="bali">Bali</option>
                    <option value="medan">Medan</option>
                    <option value="palembang">Palembang</option>
                </select>
                <br><br>
                <!-- Daftar showroom S-Plus -->
                <div class="row cirebon">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/headoffice.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Cirebon Gallery</span> <br>
                        <span class="body">
                            Jl. Raya Kanci Cirebon – Tegal KM 13,5 Cirebon 45182
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-cirebon') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>
                <br>
                <div class="row jabodetabek pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/showroom/cawang/cawang.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Jakarta Timur Office (cawang)</span> <br>
                        <span class="body">
                            Rukan Patria Park RK 05, Jl. D.I.Panjaitan Kav.5-7, Cipinang Cempedak Jatinegara, Jakarta Timur
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-cawang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>
                <div class="row jabodetabek pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/showroom/bogor/bogor.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Bogor Office</span> <br>
                        <span class="body">
                            Yasmin Garden Sektor 3, Jl. Culan Raya No.28 Rt.03 Rw.08 Kel.Curug Mekar, Bogor Barat
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-bogor') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>
                <div class="row jabodetabek pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/showroom/jakarta/showroom-jakarta.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Jakarta Gallery</span> <br>
                        <span class="body">
                            Jl. Pinangsia Raya No. 105 Pinangsia Barat, Jakarta Barat
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-jakarta') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row jabodetabek pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/cibubur.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Cibubur Gallery</span> <br>
                        <span class="body">
                            Puri Sriwedari Cibubur Blok C No 3 Harjamukti Cimanggis - Depok
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-cibubur') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row jabodetabek pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/serpong.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Tangerang Gallery</span> <br>
                        <span class="body">
                            Jl. Boulevard Raya Ruko 1B Blok BA.3 No 54-55 Serpong, Tangerang
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-tangerang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row bandung pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/bandung.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Bandung Gallery 1</span> <br>
                        <span class="body">
                            Plaza IBCC Block D2 No.5 Jl. Jenderal Ahmad Yani No. 269, Bandung
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-bandung1') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row bandung pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/bandung2.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Bandung Gallery 2</span> <br>
                        <span class="body">
                            Plaza IBCC Block B3 No.18 Jl. Jenderal Ahmad Yani No. 296, Bandung
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-bandung2') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row yogyakarta pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/jogja.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Yogyakarta Gallery</span> <br>
                        <span class="body">
                            Jl. Diponegoro No. 103, RT/RW 022/006 Kel. Bumijo Kec. Jetis, Jogjakarta
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-jogjakarta') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row semarang pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/semarang.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Semarang Gallery</span> <br>
                        <span class="body">
                            Jl. Pekojan No 49 Purwodinatan, Semarang
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-semarang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row surabaya pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/surabaya2.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Surabaya Gallery 1</span> <br>
                        <span class="body">
                            Jl. Raya Jemursari No.2F & 2G, Surabaya
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-surabaya1') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row surabaya pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/showroom/surabaya-2/showroom-list.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Surabaya Gallery 2</span> <br>
                        <span class="body">
                            Jl. Baliwerti No 28 Alon-Alon Controng, Bubutan Surabaya
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-surabaya2') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row bali pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/bali.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Bali Gallery</span> <br>
                        <span class="body">
                            Jl. Mahendradata No. 59 Denpasar, Bali
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-bali') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row medan pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/medan.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Medan Gallery & Assembling</span> <br>
                        <span class="body">
                            Jl. Cemara No 63 Kec. Medan Timur, Medan
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-medan') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>

                <div class="row palembang pb-40 hide">
                    <div class="col-sm-4 col-xs-4">
                        <img src="<?= base_url('assets/user/images/profile/palembang.jpg') ?>" alt="" style="border-radius: 5px;" style="width:200px">
                    </div>
                    <div class="col-sm-8 col-xs-8">
                        <span class="title">Palembang Gallery & Assembling</span> <br>
                        <span class="body">
                            Graha Mitra Sukarame Blok G No. 7 kel. Talang kelapa kec. Alang-alang lebar kota. Palembang Provinsi. Sumatera Selatan
                        </span>
                        <a href="<?= base_url('hubungi-kami/gallery-palembang') ?>" id="sm-gm" style="color: #D50000; font-size: 16px;"> <br> <i class="fa fa-arrow-circle-right"></i> Lihat Showroom</a>
                    </div>
                </div>
                <br>
            <?php else : ?>
                <div class="subshowroom">
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-cawang') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/showroom/cawang/cawang.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                        <span class="h-subtitle">Jakarta Timur Office (Cawang)</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Rukan Patria Park RK 05, Jl. D.I.Panjaitan Kav.5-7, Cipinang Cempedak, Jatinegara-Jakarta Timur</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0813) 98887897</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-cawang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-bogor') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/showroom/bogor/bogor.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                        <span class="h-subtitle">Bogor Office</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Yasmin Garden Sektor 3, Jl. Culan Raya No.28 Rt.03 Rw.08 Kel.Curug Mekar, Bogor Barat</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0811) 11110942</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-bogor') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-cirebon') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/cirebon.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                                        <span class="h-subtitle">Cirebon Gallery</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Raya Kanci Cirebon – Tegal KM 13,5 Desa Rawaurip Kec. Pangenan Kab. Cirebon 45182</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0231) 8511781 – 85<br>
                                            (0231) 8511782</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-cirebon') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-jakarta') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/showroom/jakarta/showroom-jakarta.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Jakarta Gallery</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Pinangsia Raya No. 105 Pinangsia
                                            Barat, Jakarta Barat</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(021) 62301599</p>
                                        <a href="<?= base_url('hubungi-kami/gallery-jakarta') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-cibubur') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/cibubur.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Cibubur Gallery</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Puri Sriwedari Cibubur Blok C No 3 Harjamukti Cimanggis, Depok</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>
                                            (021) 22175431<br>
                                            0821 2789 5362
                                        </p>
                                        <a href="<?= base_url('hubungi-kami/gallery-cibubur') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-tangerang') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/serpong.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Tangerang Gallery</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Villa Melati Mas Blok SR 1/09 Lengkong Raya Serpong<br> Tangerang</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>0812 9506 0480</p>
                                        <a href="<?= base_url('hubungi-kami/gallery-tangerang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-bandung1') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/bandung.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Bandung Gallery 1</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Plaza IBCC Block D2 No.5 Jl. Jenderal
                                            Ahmad Yani No. 269,<br> Bandung</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(022) 7238490</p>
                                        <a href="<?= base_url('hubungi-kami/gallery-bandung1') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-bandung2') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/bandung2.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Bandung Gallery 2</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Plaza IBCC Block B3 No.18 Jl. Jenderal
                                            Ahmad Yani No. 296,<br> Bandung</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(022) 7238296<br>
                                            (022) 7238286</p>
                                        <a href="<?= base_url('hubungi-kami/gallery-bandung2') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-jogjakarta') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/jogja.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Yogyakarta Gallery</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Diponegoro No. 103, RT/RW 022/006 Kel.
                                            Bumijo Kec. Jetis, <br> Jogjakarta</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0274) 2921671</p>
                                        <a href="<?= base_url('hubungi-kami/gallery-jogjakarta') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-semarang') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/semarang.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Semarang Gallery</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Pekojan No 49 Purwodinatan, Semarang
                                            Tengah</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(024) 3580178<br>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-semarang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-bali') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/bali.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Bali Gallery</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Mahendradata No. 59 Denpasar, Bali</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(0361) 8450783<br>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-bali') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-surabaya1') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/surabaya2.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Surabaya Gallery 1</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Raya Jemursari No. 2F & 2G,Surabaya</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(031) 99853335<br>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-surabaya1') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-surabaya2') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/showroom/surabaya-2/showroom-list.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Surabaya Gallery 2</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Baliwerti No 28 Alon-Alon Controng,
                                            Bubutan Surabaya</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(031) 99243995<br>
                                        </p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-surabaya2') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-medan') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/medan.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Medan Gallery & Assembling</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Jl. Cemara No 63 Kec. Medan Timur, Medan</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>(061) 6617976 / 80088395<br>
                                            0812 6062 4544</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-medan') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="row pb-40">
                        <a href="<?= base_url('hubungi-kami/gallery-palembang') ?>">
                            <div class="col-lg-4 col-md-4 gallery-popup">
                                <img src="<?= base_url('assets/user/images/profile/palembang.jpg') ?>" alt="" style="border-radius: 50px;">
                            </div>
                            <div class="col-lg-8 col-lg-8">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <span style="font-size: 25px; font-weight:800; font: 'Montserrat';">Palembang Gallery & Assembling</span>
                                    </header>
                                    <footer>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-home"></i>Graha Mitra Sukarame Blok G No. 7 kel. Talang kelapa kec. Alang-alang lebar kota. Palembang Provinsi. Sumatera Selatan</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"><i class="fa fa-phone"></i>0811-2233-4518</p>
                                        <p style="font-size: 20px; font-weight:500; font: 'Montserrat'; margin-bottom:0px"></p>
                                        <a href="<?= base_url('hubungi-kami/gallery-palembang') ?>" class="ps-btn" style="padding-left:5px; font-size: 20px; font-weight:500; font: 'Montserrat'; float:right; margin-top:-60px">
                                            <i class="fa fa-arrow-circle-right"></i> More
                                        </a>
                                    </footer>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>

<!-- <div class="prl wow fadeInDown">
            <img class="imgbg" src="<?= base_url('assets/user/images/background/tentang.png') ?>" width="37%">
        </div> -->
<!-- <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <div class="col-md-1">
                        <div style="margin-top:0px">
                            <img src="<?= base_url('assets/user/images/tentang/visi.png') ?>" />
                        </div>
                        <div style="margin-top:150vh">
                            <img src="<?= base_url('assets/user/images/tentang/focus.png') ?>" />
                        </div>
                        <div style="margin-top: 210vh">
                            <img src="<?= base_url('assets/user/images/tentang/who-are.png') ?>" />
                        </div>
                        <div style="margin-top: 28vh">
                            <img src="<?= base_url('assets/user/images/tentang/history.png') ?>" />
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="about-us pb-80">
                        <div class="visi-misi pb-80">
                            <div class="h-title" id="visi-misi" style="padding-top:0px;">
                                VISI DAN MISI
                            </div>
                            <hr style="width: 25%; float: left;"> <br>
                            <div class="sub-visi pl-40">
                                <div class="h-subtitle h-m-title pb-40"><i class="fa fa-binoculars"></i> VISI </div>
                              
                                <img src="<?= base_url('assets/user/images/tentang/visi-bingkai.jpg') ?>" alt="">
                            </div><br><br>
                            <div class="sub-misi pl-40">
                                <div class="h-subtitle h-m-title"><i class="fa fa-line-chart"></i> MISI </div>
                                <div class="h-body h-m-body pt-20 pl-30">
                                    <b>To be a world class business company we, PT Smart Techtex are honest to customers and responsible to
                                        social requirement by applying best Management & Quality system.</b>
                                </div>
                            </div>
                        </div>
                        <div class="factory-header">
                            <div class="h-title" id="our-focus"><span style="font-weight:500">THE</span> <b style="color:#d50000">HIGHEST VALUE</b> <span style="font-weight:500">OF BEING IS</span> <b style="color:#d50000">SATISFYING CUSTOMERS</b></div>
                            <hr style="width:55%; float: left;"> <br>
                        </div>
                        <div class="factory pb-40 pl-40">
                            <div class="prl hideimg">
                                <img class="imgbg pt-40" src="<?= base_url('assets/user/images/background/tqm.png') ?>" width="30%">
                            </div>

                            <div class="htitle">
                                <div class="h-subtitle h-m-title">
                                    <i class="fa fa-shield"></i> Total Quality Management (TQM)
                                </div> <br>
                                <div class="h-body h-m-body pl-40">
                                    Kami menerapkan TQM dalam bekerja dengan <br>
                                    tujuan untuk mencapai target kualitas <br>
                                    sehingga tercapai kepuasan dari konsumen kami <br>
                                    <i>(Customer Satisfaction)</i>. <br> <br>

                                    Dengan didukung oleh bahan baku terbaik, <br>alat, teknologi dan SDM yang kami miliki, kami <br>
                                    siap untuk menghadirkan material building yang<br> anda impikan.
                                </div> <br>
                            </div> <br>
                            <div class="sub-factory pl-40">
                                <div class="h-body h-m-body">
                                    Jangan ragu lagi.. segera dapatkan dan miliki keunggulan <br>dari produk kami:<br>
                                    <ol style="margin-left: 15px;">
                                        <li>Produk dengan kualitas terbaik <i>(Best Quality)</i> </li>
                                        <li>Bahan ramah lingkungan <i>(Environment Friendly)</i> </li>
                                        <li>Ukuran akurat/ presisi <i>(Precision)</i> </li>
                                        <li>Berestetika tinggi <i>(High Aesthetics)</i> </li>
                                        <li>Tahan untuk pemakaian jangka panjang <i>(Durable)</i> </li>
                                        <li>Inovasi yang terus menerus <i>(Improvement)</i> </li>
                                        <li>Pengiriman cepat <i>(Quick Delivery)</i> </li>
                                        <li>Pelayanan prima <i>(Before and After Sales Service)</i> </li>
                                        <li>Garansi lebih lama <i>(More Longer Warranty)</i> </li>
                                    </ol>
                                </div>
                            </div> <br><br><br>
                            <div class="hsubtitle">
                                <div class="h-subtitle h-m-title pb-20">
                                    <i class="fa fa-user"></i> Customer Satisfaction Management (CSM)
                                </div>

                                <div class="sub-visi-misi pl-40 pb-20">
                                    <div class="h-body h-m-body">
                                        <strong> # Delivery </strong>
                                    </div>
                                    <div class="h-body h-m-body">
                                        Kecepatan pengiriman menjadi salah satu fokus kami dalam memberikan pelayan terbaik untuk konsumen kami. Oleh karenanya kami berkomitmen untuk memberikan pelayanan delivery terbaik kepada customer kami.
                                        <br><br>Dengan ditunjang armada, sistem manajemen kerja dan sumber daya manusia yang kami miliki, kami siap mendukung pengiriman kemanapun sesuai dengan permintaan konsumen kami. Sesuai dengan motto delivery kami: CEPAT.. TEPAT..AKURAT!
                                    </div>
                                </div>
                                <div class="sub-visi-misi pl-40">
                                    <div class="h-body h-m-body">
                                        <strong> # Before and After Sales </strong>
                                    </div>
                                    <div class="h-body h-m-body">
                                        Kami memberikan pelayan <i><b>Before and After Sales</b></i> kepada setiap customer kami.
                                        Jangan ragu untuk berkonsultasi dengan team kami yang sudah berpengalaman untuk mendapatkan informasi yang dapat dijadikan referensi anda dalam menentukan pilihan produk dengan tepat dan sesuai dengan kebutuhan anda.
                                        <br><br>Kami juga siap membantu anda apabila ada masalah yang ditemui dalam proses aplikasi produk.
                                        Kami siap membantu pastikan produk kami terpasang sesuai dengan hasil anda harapkan.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="factory-quotes pb-80 pt-60">
                            <div class="h-title" id="who-are-we">
                                <span style="font-weight:600">We Are</span> <b style="color:#d50000">PMA</b> <span style="font-weight:600">(Investment from Korea management by Korean)
                                    with factory in Cirebon and with 12 branch in all over Indonesia </span>
                            </div>
                        </div> <br>
                        <div class="factory pb-80">
                            
                            <div class="h-title" id="history">
                                HISTORY
                            </div>
                            <hr style="width: 20%; float: left;">
                            </br>
                            <div class="h-body pl-40">
                                <div class="h-subtitle">
                                    Sejarah Singkat Perusahaan
                                </div> <br>
                                <div class="row btop" style="width:500px">
                                    <h3><b>2012</b></h3>
                                    <p>PT Smart Techtex mulai berdiri 16 Juli 2012</p>
                                </div>
                                <br>
                                <div class="row btop" style=" height:270px">
                                    <h3><b>2013</b></h3>
                                    <p>- Smart Techtex membangun pabrik pertama di Cirebon pada tanggal 26 April 2013 dan mulai open rekruitmen karyawan</p>
                                    <p style="margin-top: -20px;">- November 2012 PT Smart Techtex memulai produksi perdana, dengan produk Pintu ABS, Jendela UPVC, WPC Deck, WPC Dinding dan Plafon</p>
                                </div><br>
                                <div class="row btop" style="height:200px">
                                    <h3><b>2014</b></h3>
                                    <p>- Tanggal 26 Februari 2014 produk S-Plus resmi dilaunching</p>
                                    <p style="margin-top: -20px;">- Membuka Showroom di Jakarta, Bandung dan Surabaya</p>
                                    <p style="margin-top: -20px;">- 23 Oktober 2014, Merk S-Plus resmi terdaftar di Dirjen Hak Kekayaan Intelektual Indonesia</p>
                                </div><br>
                                <div class="row btop" style="height:150px">
                                    <h3><b>2015</b></h3>
                                    <p>Membuka Showroom di Bekasi, Semarang, Jogja, Bali</p>
                                </div><br>
                                <div class="row btop" style="height:200px">
                                    <h3><b>2016</b></h3>
                                    <p>- Membuka Showroom ke – 2 di Surabaya berikut membangun pabrik assembling di Surabaya</p>
                                    <p style="margin-top: -20px;">- Membuka Showroom di Serpong Tangerang</p>
                                    <p style="margin-top: -20px;">- Launching produk Sunshade</p>
                                </div><br>
                                <div class="row btop" style="height:170px">
                                    <h3><b>2017</b></h3>
                                    <p>- Membuka Showroom ke – 2 di Bandung</p>
                                    <p style="margin-top: -20px;">- Membuka Showroom & Assembling di Medan</p>
                                </div><br>
                                <div class="row btop" style="height:200px">
                                    <h3><b>2018</b></h3>
                                    <p>- Membuka showroom di Cibubur</p>
                                    <p style="margin-top: -20px;">- Launching produk Solid Surface, Kitchen set dan furniture</p>
                                    <p style="margin-top: -20px;">- PT. Smart Techtex menerima penghargaan dari KPP Cirebon</p>
                                </div><br>
                                <div class="row btop" style="height:170px">
                                    <h3><b>2020</b></h3>
                                    <p>- Launching produk Pintu NAMO</p>
                                    <p style="margin-top: -20px;">- PT.Smart Techtex menerima penghargaan CSR dari Pemerintah Kabupaten Cirebon </p>
                                </div><br><br>
                            </div><br><br>
                        </div>

                       
                    </div>
                </div>
            </div> 

        </div> -->