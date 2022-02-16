<?php
$meta['title']          = 'e-Katalog - S-Plus Indonesia';
$meta['description']    = 'Kumpulan foto galeri proyek S-Plus Indonesia yang sudah digunakan oleh pengguna produk S-Plus yang tersebar di berbagai wilayah Indonesia';
$meta['keywords']       = 'galeri splus indonesia, proyek splus indonesia, portfolio splus indonesia';
$this->load->view('user/header', $meta) ?>
<?php if ($this->agent->is_mobile()) : ?>
    <div class="ps-contact ps-section pb-80 pt-40">
        <div class="ps-container text-center">
            <span class="h-subtitle h-m-title">E-KATALOG S-PLUS</span>
            <hr style="width: 8%; border: 1px solid e24545; margin-bottom: 20px;">
            <div class="gallery-header pb-80">
                <div class="gallery-body">
                    <!-- <style>
                        .dropbtn {
                            background-color: red;
                            color: white;
                            padding: 3px;
                            font-size: 16px;
                            border: none;
                            cursor: pointer;
                        }

                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: f9f9f9;
                            min-width: 130px;
                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                            z-index: 1;
                        }

                        .dropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }

                        .dropdown-content a:hover {
                            background-color: red
                        }

                        .dropdown:hover .dropdown-content {
                            display: block;
                        }

                        .dropdown:hover .dropbtn {
                            background-color: 3e8e41;
                        }
                    </style>
                    <div class="dropdown" style="margin-bottom: 20px;">
                        <span class="fa fa-search" style="width:20px;height:20px;"></span><button class="dropbtn">Kategori E-katalog</button>
                        <div class="dropdown-content">
                            <a href="<?= base_url('assets/katalog-pdf/ABS Door.pdf') ?>" class="w3-bar-item w3-button">ABS DOOR</a>
                            <a href="<?= base_url('assets/katalog-pdf/NAMO Door.pdf') ?>" class="w3-bar-item w3-button">NAMO DOOR</a>
                            <a href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>" class="w3-bar-item w3-button">UPVC DOOR</a>
                            <a href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>" class="w3-bar-item w3-button">UPVC WINDOW</a>
                            <a href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>" class="w3-bar-item w3-button">PLAFON UPVC</a>
                            <a href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>" class="w3-bar-item w3-button">MASKER</a>
                            <a href="<?= base_url('assets/katalog-pdf/Kitchen Set.pdf') ?>" class="w3-bar-item w3-button">KITCHEN SET</a>
                            <a href="<?= base_url('assets/katalog-pdf/Parasol.pdf') ?>" class="w3-bar-item w3-button">PARASOL</a>
                            <a href="<?= base_url('assets/katalog-pdf/Roll Insect Screen.pdf') ?>" class="w3-bar-item w3-button">ROLL INSECT SCREEN</a>
                            <a href="<?= base_url('assets/katalog-pdf/Sun Shade.pdf') ?>" class="w3-bar-item w3-button">SUN SHADE</a>
                            <a href="<?= base_url('assets/katalog-pdf/deck tile.pdf') ?>" class="w3-bar-item w3-button">WPC DECK TILE</a>
                            <a href="<?= base_url('assets/katalog-pdf/Iroom.pdf') ?>" class="w3-bar-item w3-button">IROOM</a>
                            <a href="<?= base_url('assets/katalog-pdf/vinyl flooring.pdf') ?>" class="w3-bar-item w3-button">VINYL FLOORING</a>
                            <a href="<?= base_url('/pintu') ?>" class="w3-bar-item w3-button">PINTU</a>
                        </div>
                    </div>
                    <br> -->


                    <style>
                        .grid-container {
                            display: grid;
                            grid-template-columns: auto auto auto;
                            padding: 10px;
                            border-radius: 20px;
                            justify-items: left;
                            align-items: center;
                            justify-content: start;
                            align-content: center;
                            border-style: groove;
                        }

                        .grid-itemx {

                            padding: 2px;
                            font-size: 8px;
                            text-align: center;
                            margin-right: 15px;

                        }
                    </style>

                    <div class="grid-container">
                        <a class="grid-itemx " href="<?= base_url('assets/katalog-pdf/ABS Door.pdf') ?>"><i class="fa fa-tags"></i> <b>ABS DOOR</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/NAMO Door.pdf') ?>"><i class="fa fa-tags"></i> <b>NAMO DOOR</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>"><i class="fa fa-tags"></i> <b>UPVC DOOR</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>"><i class="fa fa-tags"></i> <b>UPVC WINDOW</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>"><i class="fa fa-tags"></i> <b>PLAFON UPVC</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>"><i class="fa fa-tags"></i> <b>MASKER</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/vinyl flooring.pdf') ?>"><i class="fa fa-tags"></i> <b>VINYL FLOORING</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Parasol.pdf') ?>"><i class="fa fa-tags"></i> <b>PARASOL</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Roll Insect Screen.pdf') ?>"><i class="fa fa-tags"></i> <b>ROLL INSECT SCREEN</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Sun Shade.pdf') ?>"><i class="fa fa-tags"></i> <b>SUN SHADE</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/deck tile.pdf') ?>"><i class="fa fa-tags"></i> <b>WPC DECK TILE</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Iroom.pdf') ?>"><i class="fa fa-tags"></i> <b>IROOM</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Kitchen Set.pdf') ?>"><i class="fa fa-tags"></i> <b>KITCHEN SET</b></a>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/ABS Door.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    ABS DOOR    -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/abs.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">ABS Door (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/NAMO Door.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    NAMO DOOR    -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/namo.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">NAMO Door (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    UPVC Door   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/upvc-door.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">UPVC Door (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    UPVC Window -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/upvc-window.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">UPVC Window (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    PINTU Masker    -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/Masker.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Masker (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Parasol.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    PINTU Parasol   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/parasol.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Parasol (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/deck tile.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    WPC Deck Tile   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/deck tile.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Tile (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Iroom.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    IROOM   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/iroom.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">IROOM (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/pvc-foam.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Vinyl Flooring   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/pvc-foam.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">PVC Foam (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Plafon UPVC -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/plafon.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Plafon UPVC (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/vinyl flooring.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Vinyl Flooring   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/vinyl.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Vinyl Flooring (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Roll Insect Screen.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    ROLL INSECT SCREEN   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/roll-insect-screen.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Roll Insect Screen (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Kitchen Set.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Kitchen Set -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/kitchen-set.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Kitchen Set (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Sun Shade.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Sun Shade   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/sun-shade.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Sun Shade (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('e-katalog/pintu') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    PINTU FLIP  -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/abs-flip-book.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">PINTU (Flip Book)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php else : ?>
    <div class="ps-contact ps-section pb-80 pt-40" style="background: url('<?= base_url('assets/user/images/background/bgproduk/shorombg.jpg') ?>'); background-size: cover;" class="pt-10">
        <div class="ps-container text-center">
            <span class="h-subtitle h-m-title">E-KATALOG S-PLUS</span>
            <hr style="width: 8%; border: 1px solid e24545; margin-bottom: 30px;">
            <div class="gallery-header pb-80">
                <div class="gallery-body">
                    <!-- <style>
                        .dropbtn {
                            background-color: red;
                            color: white;
                            padding: 3px;
                            font-size: 16px;
                            border: none;
                            cursor: pointer;
                        }

                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: f9f9f9;
                            min-width: 130px;
                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                            z-index: 1;
                        }

                        .dropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }

                        .dropdown-content a:hover {
                            background-color: red
                        }

                        .dropdown:hover .dropdown-content {
                            display: block;
                        }

                        .dropdown:hover .dropbtn {
                            background-color: 3e8e41;
                        }
                    </style> -->
                    <!-- <div class="dropdown" style="margin-right: 1100px;margin-bottom: 20px;">
                        <span class="fa fa-search" style="width:20px;height:20px;"></span><button class="dropbtn">Kategori E-katalog</button>
                        <div class="dropdown-content">
                            <a href="<?= base_url('assets/katalog-pdf/ABS Door.pdf') ?>" class="w3-bar-item w3-button">ABS DOOR</a>
                            <a href="<?= base_url('assets/katalog-pdf/NAMO Door.pdf') ?>" class="w3-bar-item w3-button">NAMO DOOR</a>
                            <a href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>" class="w3-bar-item w3-button">UPVC DOOR</a>
                            <a href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>" class="w3-bar-item w3-button">UPVC WINDOW</a>
                            <a href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>" class="w3-bar-item w3-button">PLAFON UPVC</a>
                            <a href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>" class="w3-bar-item w3-button">MASKER</a>
                            <a href="<?= base_url('assets/katalog-pdf/Kitchen Set.pdf') ?>" class="w3-bar-item w3-button">KITCHEN SET</a>
                            <a href="<?= base_url('assets/katalog-pdf/Parasol.pdf') ?>" class="w3-bar-item w3-button">PARASOL</a>
                            <a href="<?= base_url('assets/katalog-pdf/Roll Insect Screen.pdf') ?>" class="w3-bar-item w3-button">ROLL INSECT SCREEN</a>
                            <a href="<?= base_url('assets/katalog-pdf/Sun Shade.pdf') ?>" class="w3-bar-item w3-button">SUN SHADE</a>
                            <a href="<?= base_url('assets/katalog-pdf/deck tile.pdf') ?>" class="w3-bar-item w3-button">WPC DECK TILE</a>
                            <a href="<?= base_url('assets/katalog-pdf/Iroom.pdf') ?>" class="w3-bar-item w3-button">IROOM</a>
                            <a href="<?= base_url('assets/katalog-pdf/vinyl flooring.pdf') ?>" class="w3-bar-item w3-button">VINYL FLOORING</a>
                            <a href="<?= base_url('/pintu') ?>" class="w3-bar-item w3-button">PINTU</a>
                        </div>
                    </div> -->

                    <br>
                    <style>
                        .grid-container {
                            display: grid;
                            grid-template-columns: auto auto auto auto auto auto auto;

                            padding: 20px;
                            border-radius: 20px;
                            justify-items: left;
                            align-items: center;
                            justify-content: start;
                            align-content: center;
                            border-style: groove;
                        }

                        .grid-itemx {

                            padding: 2px;
                            font-size: 14px;
                            text-align: center;
                            margin-right: 15px;

                        }
                    </style>

                    <div class="grid-container">
                        <a class="grid-itemx " href="<?= base_url('assets/katalog-pdf/xxx.pdf') ?>"><i class="fa fa-tags"></i> <b>ABS DOOR</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Namo.pdf') ?>"><i class="fa fa-tags"></i> <b>NAMO DOOR</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>"><i class="fa fa-tags"></i> <b>UPVC DOOR</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>"><i class="fa fa-tags"></i> <b>UPVC WINDOW</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>"><i class="fa fa-tags"></i> <b>PLAFON UPVC</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>"><i class="fa fa-tags"></i> <b>MASKER</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/vinyl flooring.pdf') ?>"><i class="fa fa-tags"></i> <b>VINYL FLOORING</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Parasol.pdf') ?>"><i class="fa fa-tags"></i> <b>PARASOL</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Roll Insect Screen.pdf') ?>"><i class="fa fa-tags"></i> <b>ROLL INSECT SCREEN</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Sun Shade.pdf') ?>"><i class="fa fa-tags"></i> <b>SUN SHADE</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/deck tile.pdf') ?>"><i class="fa fa-tags"></i> <b>WPC DECK TILE</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Iroom.pdf') ?>"><i class="fa fa-tags"></i> <b>IROOM</b></a>
                        <a class="grid-itemx" href="<?= base_url('assets/katalog-pdf/Kitchen Set.pdf') ?>"><i class="fa fa-tags"></i> <b>KITCHEN SET</b></a>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/xxx.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    ABS DOOR    -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/abs.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">xxx (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Namo.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    NAMO DOOR    -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/namo.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">NAMO Door (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    UPVC Door   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/upvc-door.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">UPVC Door (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    UPVC Window -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/upvc-window.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">UPVC Window (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Sun Shade.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Sun Shade   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/sun-shade.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Sun Shade (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    PINTU Masker    -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/Masker.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Masker (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Parasol.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    PINTU Parasol   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/parasol.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Parasol (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Kitchen Set.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Kitchen Set -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/kitchen-set.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Kitchen Set (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/deck tile.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    WPC Deck Tile   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/deck tile.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Tile (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Iroom.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    IROOM   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/iroom.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">IROOM (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/pvc-foam.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Vinyl Flooring   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/pvc-foam.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">PVC Foam (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Plafon UPVC -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/plafon.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Plafon UPVC (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/Roll Insect Screen.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    ROLL INSECT SCREEN   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/roll-insect-screen.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Roll Insect Screen (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('assets/katalog-pdf/vinyl flooring.pdf') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    Vinyl Flooring   -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/vinyl.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">Vinyl Flooring (Download)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                            <a href="<?= base_url('e-katalog/pintu') ?>" target="_blank">
                                <!--<div class="header-gallery">-->
                                <!--    PINTU FLIP  -->
                                <!--</div>-->
                                <div class="container_images">
                                    <div class="content_img">
                                        <img src="<?= base_url('assets/katalog-pdf/abs-flip-book.jpg') ?>" alt="" class="image" width="100%">
                                    </div>
                                    <div class="text-center">
                                        <div class="text-overlay-ss">PINTU (Flip Book)</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php $this->load->view('user/footer') ?>