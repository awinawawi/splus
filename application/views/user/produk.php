<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-section--features-product ps-section masonry-root pb-40 bg-grey">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="pb-50 pt-50">
                    <center>Semua Produk</center>
                </h3>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="5" data-col-sm="2" data-col-xs="2" data-gap="30"
                    data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        <?php foreach($paginasi['produk_limit'] as $p): ?>
                        <div class="grid-item accecories">
                            <div class="grid-item__content-wrapper">
                                <div class="ps-shoe mb-30">
                                    <div class="ps-shoe__thumbnail">
                                        <img
                                            src="<?=base_url('assets/user/images/produk/'.$p->produk_gambar)?>"
                                            alt=""><a class="ps-shoe__overlay"
                                            href="<?=base_url('produk/'.strtolower(str_replace(" ","-",$p->produk_judul)))?>"></a>
                                    </div>
                                    <div class="ps-shoe__content">
                                        <div class="ps-shoe__variants">
                                            <div class="ps-shoe__variant normal">
                                                <!-- other images -->
                                                <img src="<?=base_url('assets/user/images/produk/'.$p->produk_gambar)?>"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                                href="<?=base_url('produk/'.strtolower(str_replace(" ","-",$p->produk_judul)))?>"><?=$p->produk_judul?></a>
                                            <p class="ps-shoe__categories"><a
                                                    href="<?=base_url('kategori/'.strtolower(str_replace(" ","-",$p->kategori_nama)).'')?>"><?=strtolower($p->kategori_nama)?></a>,<a
                                                    href="<?=base_url('kategori/'.strtolower(str_replace(" ","-",$p->kategori_nama)).'/'.strtolower(str_replace(" ","-",$p->produk_type)).'')?>">
                                                    <?=strtolower($p->produk_type)?></a></p>
                                                    <!-- <span class="ps-shoe__price">Rp <?=number_format($p->produk_harga)?></span> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-30 pb-50">
        <div class="ps-pagination">
            <?=$paginasi['pagination']?>
        </div>
    </div>
    <!--footer-->
    <?php $this->load->view('user/footer') ?>