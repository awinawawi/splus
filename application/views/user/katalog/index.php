<?php
$meta['title']          = ' e-katalog- S-Plus Indonesia';
$meta['description']    = 'Kumpulan foto galeri proyek S-Plus Indonesia yang sudah digunakan oleh pengguna produk S-Plus yang tersebar di berbagai wilayah Indonesia';
$meta['keywords']       = 'galeri splus indonesia, proyek splus indonesia, portfolio splus indonesia';
$this->load->view('user/header', $meta) ?>
<div class="ps-contact ps-section pb-80 pt-40" style="background: url('<?= base_url('assets/user/images/background/bgproduk/shorombg.jpg') ?>'); background-size: cover;" class="pt-10">
    <div class="ps-container text-center">
        <span class="h-subtitle h-m-title">E-KATALOG S-PLUS</span>
        <!-- <hr style="width: 8%; border: 1px solid #e24545; margin-bottom: 30px;"> -->
        <div class="gallery-header pb-80">
            <div class="gallery-body">
                <!-- <div>
                    <select name="cars" id="cars" style="margin-right: 1000px;margin-bottom: 20px;">
                        <option value="ABS" id="abs">ABS Door</option>
                        <option value="NAMO">NAMO Door</option>
                        <option value="UPVC_Door">UPVC Door</option>
                        <option value="UPVC_Window">UPVC Window</option>
                        <option value="NAMO">Plafon UPVC</option>
                        <option value="Masker">Masker</option>
                        <option value="Parasol">Parasol</option>
                        <option value="Kitchen">Kitchen Set</option>
                        <option value="Roll">Roll Insect Screen</option>
                        <option value="Sun">Sun Shade</option>
                        <option value="WPC">WPC Deck Tile</option>
                        <option value="IROOM">IROOM</option>
                        <option value="Vinyl">Vinyl Flooring</option>
                        <option value="pintu">Pintu</option>
                    </select>
                </div> -->



                <style>
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
                        background-color: #f9f9f9;
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
                        background-color: #3e8e41;
                    }
                </style>

                <div class="dropdown" style="margin-right: 1100px;margin-bottom: 20px;">
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
                <br>
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/ABS Door.pdf') ?>" target="_blank" id="abs">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/abs.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> ABS Door </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/NAMO Door.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/namo.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> NAMO Door </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/pintu-upvc.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/upvc-door.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> UPVC Door </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/UPVC Window.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/upvc-window.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> UPVC Window </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/Plafon.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/plafon.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> Plafon UPVC </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/masker.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/Masker.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> Masker <br> </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/Parasol.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/parasol.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> Parasol <br> </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/Kitchen Set.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/kitchen-set.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> Kitchen Set </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/Roll Insect Screen.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/roll-insect-screen.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> Roll Insect Screen </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/Sun Shade.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/sun-shade.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> Sun Shade </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/deck tile.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/deck tile.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss">WPC Deck Tile <br> </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/Iroom.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/iroom.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss">IROOM <br> </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('assets/katalog-pdf/vinyl flooring.pdf') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/vinyl.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss">Vinyl Flooring <br> </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 pb-20">
                        <a href="<?= base_url('/pintu') ?>" target="_blank">
                            <div class="container_images">
                                <div class="content_img">
                                    <img src="<?= base_url('assets/katalog-pdf/abs-flip-book.jpg') ?>" alt="" class="image" width="100%">
                                </div>
                                <div class="text-center">
                                    <div class="text-overlay-ss"> PINTU (Flip Book)</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('user/footer') ?>