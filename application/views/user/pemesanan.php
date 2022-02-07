<?php
$meta['title']          = 'E-commerce - S-Plus Indonesia';
$meta['description']    = 'S-Plus Pintu menjadikan ruangan Anda menjadi nyaman dan penuh ketenangan yang dipancarkan oleh berbagai macam warna dan tekstur yang khas. Dengan tekstur kayu yang sangat mirip dengan kayu yang sebenarnya memberi kesan keindahan yang alami.';
$meta['keywords']       = 'pintu abs, jual pintu abs, jual pintu abs murah, jual pintu abs berkualitas, jual pintu abs terbaik, pintu abs murah, pintu abs minimalis, pintu abs elegan, pintu abs terbaik, pintu abs berkualitas, pintu abs s plus, pintu abs vs upvc';
$this->load->view('user/header', $meta) ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="row pb-50 pt-50">
                <?php if (!$this->agent->is_mobile()) : ?>
                    <!-- desktop view sidebar -->
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 bg-white shd">
                        <aside class="ps-widget--sidebar ">
                            <div class="ps-widget__header">
                                <h3>KATEGORI</h3>
                            </div>
                            <!-- <div class="ps-widget__content ">
                                <ul class="ps-list--arrow">
                                    <li class="panel-title" data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-pintu') ?>"><b>PINTU</b>
                                        </a>
                                        <ul id="test">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test1a"><a href="#">PINTU ABS</a>
                                                <ul id="test1a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/classic') ?>">Classic</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/fortebello') ?>">Fortebello</a></li>
                                                    <li class="sm panel-title" id="closee"><a href="#">Premium</a></li>
                                                    <ul>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-general') ?>">General</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/premium-deco') ?>">Deco</a></li>
                                                        <li class="sn" id="menu"><a href="<?= base_url('kategori/s-plus-pintu/grande') ?>">Grande</a></li>
                                                    </ul>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/art-door') ?>">Art Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/exterior-door') ?>">Exterior Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/kusen') ?>">Kusen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-pintu/aksesoris-pintu') ?>">Aksesoris</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test1b"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>PINTU UPVC</b></a>
                                                <ul id="test1b" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#felice') ?>">Felice</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-pintu#sash') ?>">Sash Door</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test1c"><a href="<?= base_url('kategori/s-plus-namo-pintu') ?>">PINTU NAMO</a>
                                                <ul id="test1c" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#laminate-door') ?>">Laminate Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#eco-door') ?>">ECO Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#veneer-solid-door') ?>">Veneer Solid Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#timber-joint-door') ?>">Timber Joint Door</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-namo-pintu#art-door') ?>">ART Door</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse"><a href="#">PINTU IROOM</a>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test2">
                                        <a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>"><b>JENDELA</b></a>
                                        <ul id="test2">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test2a"><a href="<?= base_url('kategori/s-plus-upvc-jendela') ?>">JENDELA UPVC</a>
                                                <ul id="test2a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kaca-mati') ?>">Jendela Kaca Mati</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/jungkit') ?>">Jendela Jungkit</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/sliding') ?>">Jendela Sliding</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/swing') ?>">Jendela Swing</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-upvc-jendela/kombinasi') ?>">Jendela Kombinasi</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test2b"><a href="<?= base_url('kategori/s-plus-upvc-pintu') ?>"><b>JENDELA IROOM</b></a>
                                                <ul id="test2b" class="panel-collapse collapse">

                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test3">
                                        <a href="<?= base_url('kategori/s-plus-interior-material') ?>"><b>INLIFE</b></a>
                                        <ul id="test3">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3a"><a href="<?= base_url('kategori/s-plus-interior-material') ?>">PLAFON UPVC</a>
                                                <ul id="test3a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material#polos') ?>">Plafon Polos</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material#laminate') ?>">Plafon Laminate</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-interior-material#deco') ?>">Plafon Deco</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3b"><a href="<?= base_url('kategori/s-plus-sun-shade') ?>"><b>SUN SHADE</b></a>
                                                <ul id="test3b" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">Combi Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/roll-screen') ?>">Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/sun-screen') ?>">Sun Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/blackout') ?>">Blackout Roll Screen</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/vertical') ?>">Vertical Blind</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/wood') ?>">Horizontal Wood</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/alumunium') ?>">Horizontal Aluminium</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-sun-shade/honeycomb') ?>">Honeycomb</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3c"><a href="<?= base_url('kategori/s-plus-solid-surface') ?>"><b>SOLID SURFACE</b></a>
                                                <ul id="test3c" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#chip') ?>">CHIP</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-solid-surface#deco') ?>">DECO</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title"><a href="<?= base_url('kategori/s-plus-kitchen-set') ?>"><b>KITCHEN SET</b></a></li>
                                            <li class="sm panel-title"><a href="<?= base_url('kategori/s-plus-pvc-foam-board') ?>"><b>PVC FOAM BOARD</b></a></li>
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test3d"><a href="<?= base_url('kategori/s-plus-vinyl-flooring') ?>"><b>VINYL FLOORING</b></a>
                                                <ul id="test3d" class="panel-collapse collapse">
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/vinyl-flooring') ?>">Vinyl Flooring</a></li>
                                                    <li class="sm"><a href="<?= base_url('kategori/s-plus-vinyl-flooring/woven-vinyl-flooring') ?>">Woven Vinyl Flooring</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test4">
                                        <a href="<?= base_url('kategori/s-plus-wpc') ?>"><b>OUTLIFE</b></a>
                                        <ul id="test4">
                                            <li class="sm panel-title" data-toggle="collapse" data-target="#test4a"><a href="<?= base_url('kategori/s-plus-wpc') ?>">WPC</a>
                                                <ul id="test4a" class="panel-collapse collapse">
                                                    <li class="sm"><a href="#deck">Deck Tile</a></li>
                                                    <li class="sm"><a href="#wall">Wall Partition</a></li>
                                                </ul>
                                            </li>
                                            <li class="sm panel-title"><a href='https://sinargarden.com/parasol'><b>PARASOL</b></a></li>

                                        </ul>
                                    </li>

                                    <li class="panel-title " data-toggle="collapse" data-target="#test">
                                        <a href="<?= base_url('kategori/s-plus-face-mask') ?>"><b>MASKER</b></a>
                                    </li>
                                </ul>
                            </div> -->

                            <!-- <div class="ps-widget__content ">
                                <div class="block-sidebar__item">
                                    <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                        <h4 class="widget-filters__title widget__title">Kategori</h4>
                                        <div class="widget-filters__list">


                                            <ul class="ps-list--arrow" style="padding-left: 15px;">

                                                <?php $query = $this->db->get('tbl_kategoriproduk');
                                                foreach ($query->result_array() as $kat) {
                                                ?>

                                                    <li class="filter-categories__item filter-categories__item--child" style="background-color:white;">
                                                        <a href="<?= base_url('cpemesanan/pemesanan1/') . $kat['kategori_seo'] ?>"><?= $kat['nama_kategori'] ?></a>
                                                    </li>

                                                <?php } ?>

                                            </ul>


                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="ps-widget__content ">
                                <div class="block-sidebar__item">
                                    <div class="widget-filters widget widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                                        <ul class="ps-list--arrow" style="padding-left: 15px;">
                                            <li class="panel-title " data-toggle="collapse" data-target="#test">PINTU
                                                <span class="badge pull-right"></span>

                                                <ul id="test" class="panel-collapse collapse" style="padding-left: 15px;">
                                                    <?php $query = $this->db->query('select * from tbl_subkategoriproduk WHERE id_kategori_produk like "%1%" ');
                                                    foreach ($query->result_array() as $kat) {
                                                    ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="<?= base_url('cpemesanan/pemesanan1/') . $kat['subkategori_seo'] ?>"><?= $kat['nama_subkategori'] ?></a>

                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                            </li>
                                            <li class="panel-title" data-toggle="collapse" data-target="#test1">JENDELA
                                                <span class="badge pull-right"></span>
                                                <ul id="test1" class="panel-collapse collapse" style="padding-left: 15px;">
                                                    <?php $query = $this->db->query('select * from tbl_subkategoriproduk WHERE id_kategori_produk like "%2%"');
                                                    foreach ($query->result_array() as $kat) {
                                                    ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="<?= base_url('cpemesanan/pemesanan1/') . $kat['subkategori_seo'] ?>"><?= $kat['nama_subkategori'] ?></a>

                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                            </li>
                                            <li class="panel-title" data-toggle="collapse" data-target="#test2">INLIFE
                                                <span class="badge pull-right"></span>
                                                <ul id="test2" class="panel-collapse collapse" style="padding-left: 15px;">
                                                    <?php $query = $this->db->query('select * from tbl_subkategoriproduk WHERE id_kategori_produk like "%3%"');
                                                    foreach ($query->result_array() as $kat) {
                                                    ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="<?= base_url('cpemesanan/pemesanan1/') . $kat['subkategori_seo'] ?>"><?= $kat['nama_subkategori'] ?></a>

                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                            </li>
                                            <li class="panel-title" data-toggle="collapse" data-target="#test3">OUTLIFE
                                                <span class="badge pull-right"></span>
                                                <ul id="test3" class="panel-collapse collapse" style="padding-left: 15px;">
                                                    <?php $query = $this->db->query('select * from tbl_subkategoriproduk WHERE id_kategori_produk like "%4%"');
                                                    foreach ($query->result_array() as $kat) {
                                                    ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="<?= base_url('cpemesanan/pemesanan1/') . $kat['subkategori_seo'] ?>"><?= $kat['nama_subkategori'] ?></a>

                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                            </li>
                                            <li class="panel-title" data-toggle="collapse" data-target="#test4">MASKER
                                                <span class="badge pull-right"></span>
                                                <ul id="test4" class="panel-collapse collapse" style="padding-left: 15px;">
                                                    <?php $query = $this->db->query('select * from tbl_subkategoriproduk WHERE id_kategori_produk like "%5%"');
                                                    foreach ($query->result_array() as $kat) {
                                                    ?>
                                                        <li class="filter-categories__item filter-categories__item--child">
                                                            <a href="<?= base_url('cpemesanan/pemesanan1/') . $kat['subkategori_seo'] ?>"><?= $kat['nama_subkategori'] ?></a>

                                                        </li>
                                                    <?php } ?>

                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <br></br>
                            <div class="ps-widget__content">
                                <div class="block-sidebar__item d-none d-lg-block">

                                    <div class="ps-widget__header">
                                        <h3>MEREK</h3>
                                    </div>
                                    <div style="height: 200px; overflow-y: auto; overflow-x: hidden;">
                                        <?php $query = $this->db->query('SELECT DISTINCT(varian_nama) FROM tbl_produk_varian');
                                        foreach ($query->result_array() as $kat) {
                                        ?>
                                            <div class="form-check" style="padding-left: 10px;">
                                                <label>
                                                    <input class="common_selector storage" type="checkbox" onclick="location.href='<?= base_url('cpemesanan/pemesanan1/') ?>' ">
                                                    <?= $kat['varian_nama'] ?></BR>
                                                </label>
                                            </div>

                                        <?php } ?>
                                    </div>

                                </div>
                            </div>

                        </aside>
                    </div>

                <?php endif; ?>
                <!-- desktop view cotent -->
                <div class="col-md-9">
                    <div class="ps-box pb-40 pt-20 pl-20 pr-20 bg-white shd">
                        <div class="">
                            <center>
                                <span class="h-subtitle h-m-title"><strong>OUR PRODUCTS</strong></span>
                            </center>
                            <br>/<br>
                            <div class="row">
                                <?php $query = $this->db->query('SELECT b.nama_kategori,a.varian_nama,a.varian_gambar_utama,a.varian_harga_meter FROM tbl_produk_varian a 
                                                                INNER JOIN tbl_kategoriproduk b ON a.produk_id=b.id_kategori_produk');
                                foreach ($query->result_array() as $kat) {

                                ?>

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 pb-20" data-layout="grid-4-full" data-with-features="false">
                                        <div class="container_images">
                                            <div class="card-header syahrul border-bottom-0">
                                                <h3 class=""><b><?= $kat['varian_nama'] ?></b></h2>
                                                    <p class="syahrul text-sm"><b>kategori: </b><?= $kat['nama_kategori'] ?></p>

                                            </div>
                                            <div class="content_img">
                                                <a href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>">
                                                    <!-- <img src="<?= base_url('assets/user/images/kategori/splus-shade/combi/1.jpg') ?>" alt="" class="image" width="80%"> -->
                                                    <img src="<?= base_url('assets/user/images/kategori/produk/' . $kat['varian_gambar_utama']) ?>" class="image" width="80%">
                                                    <div>More Detail</div>
                                                </a>
                                            </div>

                                            <div class="text-overlay-ss">
                                                <a class="text-left" style="color:white; font: size 20px;"><b>IDR.<?= number_format($kat['varian_harga_meter'], 0) ?></b></a>
                                                <a><br></a>
                                                <a class="text-left" href="<?= base_url('kategori/s-plus-sun-shade/combi') ?>" class="btn btn-primary">
                                                    <i class="fa fa-cart-plus"></i> Add
                                                </a>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="products-view__pagination ">
                                        <?php echo $this->pagination->create_links(); ?>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view('user/footer') ?>