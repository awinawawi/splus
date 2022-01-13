<?php $this->load->view('user/header') ?>
<main class="ps-main">
    <div class="ps-product--detail pt-60">
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-lg-offset-1">
                    <div class="ps-product__thumbnail">
                        <div class="ps-product__preview">
                            <div class="ps-product__variants">
                                <div class="item"><img
                                        src="<?=base_url('assets/user/images/produk/'.$produk->produk_gambar)?>"></div>
                            </div>
                            <a class="popup-youtube ps-product__video"
                                href="https://www.youtube.com/watch?v=99670Nzg2K4"><img
                                    src="https://i.ytimg.com/vi/99670Nzg2K4/hqdefault.jpg"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="ps-product__image">
                            <div class="item"><img class="zoom"
                                    src="<?=base_url('assets/user/images/produk/'.$produk->produk_gambar)?>" alt=""
                                    data-zoom-image="<?=base_url('assets/user/images/produk/'.$produk->produk_gambar)?>">
                            </div>
                        </div>
                    </div>
                    <div class="ps-product__thumbnail--mobile">
                        <div class="ps-product__main-img"><img
                                src="<?=base_url('assets/user/images/produk/'.$produk->produk_gambar)?>" alt=""></div>
                        <div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true"
                            data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false"
                            data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3"
                            data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
                            <img src="<?=base_url('assets/user/images/produk/'.$produk->produk_gambar)?>" alt=""></div>
                    </div>
                    <div class="ps-product__info">
                        <h1><?=$produk->produk_judul?></h1>
                        <p class="ps-product__category"><a
                                href="<?=base_url('kategori/'.strtolower(str_replace(" ","-",$produk->kategori_nama)).'')?>">
                                <?=strtolower($produk->kategori_nama)?></a>,<a
                                href="<?=base_url('kategori/'.strtolower(str_replace(" ","-",$produk->kategori_nama)).'/'.strtolower(str_replace(" ","-",$produk->produk_type)).'')?>">
                                <?=strtolower($produk->produk_type)?></a></p>
                        <h3 class="ps-product__price">Rp. <?=number_format(array_values(array_slice($ukuran, -1))[0]->produk_harga)?></h3>
                        <p>
                            Tanggal posting <?=date_format(date_create($produk->produk_tanggal), 'd M Y')?>
                        </p>
                        <!-- <div class="ps-product__block ps-product__style">
                            <h4>Type Produk</h4>
                            <ul>
                                <li><a
                                        href="<?=base_url('produk/'.strtolower(str_replace(' ','-',$produk->produk_judul)))?>"><img
                                            src="<?=base_url('assets/user/images/produk/'.$produk->produk_gambar)?>"
                                            alt=""></a></li>
                            </ul>
                        </div> -->
                        <div class="ps-product__block ps-product__size">
                            <h4>Pilihan Warna</h4>
                            <?php $split_warna = explode(",",$produk->produk_warna); ?>
                            <?php foreach($split_warna as $sw): ?>
                                <div class="radio">
                                    <label><input type="radio" name="warna" value="<?=$sw?>" checked><?=$sw?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="ps-product__block ps-product__size">
                            <h4>Pilihan Ukuran</h4>
                            <?php foreach($ukuran as $uk): ?>
                                <div class="radio">
                                    <label><input type="radio" id="ukuran" name="ukuran" data-harga="Rp. <?=number_format($uk->produk_harga)?>" value="<?=str_replace(",","x",$uk->produk_ukuran)?>" checked><?=str_replace(",","x",$uk->produk_ukuran)?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="ps-product__block ps-product__size">
                            <h4>Kuantitas</h4>
                            <div class="form-group">
                                <?php if(count($ukuran) > 1): ?>
                                    <input type="hidden" name="harga" value="<?= array_values(array_slice($ukuran, -1))[0]->produk_harga ?>">
                                    <input type="hidden" name="pid" value="<?= array_values(array_slice($ukuran, -1))[0]->produk_id ?>">
                                <?php else: ?>
                                    <input type="hidden" name="harga" value="<?=$produk->produk_harga?>">
                                    <input type="hidden" name="pid" value="<?=$produk->produk_id ?>">
                                <?php endif; ?>
                                <input class="form-control" type="number" name="kuantitas" value="1" max="<?=$produk->produk_stok?>">
                            </div>
                            <span style="margin-left: 10px;">Stok : <?=$produk->produk_stok?></span>
                        </div>

                        <?php if($this->session->userdata('user_login')): ?>
                        <div class="ps-product__shopping">
                            <button type="button" class="ps-btn mb-10" id="add_to_cart">
                                 Tambah Keranjang
                            </button>
                        </div>
                        <?php else: ?>
                            <!-- <div class="ps-product__shopping">
                                <a class="ps-btn mb-10" href="<?=base_url('login')?>">Harap Login</a>
                            </div> -->
                            <button type="button" class="ps-btn mb-10" data-toggle="modal" data-target="#loginModal">
                                 Tambah Keranjang
                            </button>
                            <!-- Modal -->
                                 <div class="modal fade" id="loginModal" role="dialog">
                                    <div class="modal-dialog modal-sm">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">LOGIN</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>Silahkan masuk/daftar terlebih dahulu untuk lanjut ke proses selanjutnya</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                          <button type="button" class="btn btn-primary"><a href="<?=base_url('login')?>" style="text-decoration:none;color:inherit;">OK</a></button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        <?php endif; ?>
                        <script>
                            $('#add_to_cart').click(function(e){
                                // cek class
                                var btn = $('#add_to_cart').hasClass("add_cart_success");
                                if(!btn){
                                    $('#add_to_cart').prepend('<i class="fa fa-spin fa-spinner"></i>');
                                    $('#add_to_cart').prop('disabled',true);

                                    var pid = $('input[name="pid"]').val();
                                    var wrn = $('input[name="warna"]:checked').val();
                                    var uid = <?php echo (empty($this->session->userdata('user_id')) ? "null" : $this->session->userdata('user_id') )?>;
                                    var qty = $('input[name="kuantitas"]').val();
                                    var tot = Number(qty)*Number($('input[name="harga"]').val());
                                    var ukr = $('input[name="ukuran"]:checked').val();

                                    $.post("<?=base_url('ajax/add_to_cart')?>", {
                                        produk_id:pid, user_id:uid, warna:wrn, kuantitas:qty, total:tot, ukuran:ukr,
                                        produk_stok: <?=$produk->produk_stok?>
                                    },function (result) {
                                            var spl = result.split("+");
                                            if(spl[0] === 'success'){
                                                $('#add_to_cart').html('<i class="fa fa-check"></i> Berhasil tambah keranjang');
                                                $('#add_to_cart').prop('disabled',false);
                                                $('#add_to_cart').css('background-color','green');
                                                $('#add_to_cart').addClass('add_cart_success');

                                                // realtime tambah data ke cart
                                                var hrg_total = "Rp "+tot.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,");
                                                var html = '<div class="ps-cart__content">\
                                                                <div class="ps-cart-item"><a class="ps-cart-item__close" href="#" data-id="'+spl[1]+'" data-qty="'+qty+'" data-total="'+tot+'"></a>\
                                                                    <div class="ps-cart-item__thumbnail"><a href="#"></a><img src="<?=base_url('assets/user/images/produk/'.$produk->produk_gambar)?>" alt=""></div>\
                                                                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="#"><?=$produk->produk_judul?></a>\
                                                                    <p><span>Qty:<i class="tq'+spl[1]+'">'+qty+'</i></span><span class="t'+spl[1]+'"><i>'+hrg_total+'</i></span></p>\
                                                                    </div>\
                                                                </div>\
                                                            </div>';

                                                $('.ps-cart__listing').prepend(html);
                                                //update total harga
                                                $.post("<?=base_url('akun/get_cart_total')?>",{uid:<?=$this->session->userdata('user_id')?>},function(response){
                                                    $('.thrg').html(response);
                                                });

                                                // update total item
                                                $.post("<?=base_url('akun/get_cart_items')?>",{uid:<?=$this->session->userdata('user_id')?>},function(response){
                                                    $('.tcitm').html(response);
                                                })
                                            }
                                        },
                                    );
                                }else{
                                    window.location='<?=base_url('cart')?>';
                                }
                            });
                            $(document).ready(function(){
                                $('input[name="ukuran"]').change(function(){
                                    var harga = $(this).attr('data-harga');
                                    $('.ps-product__price').html(harga);
                                    $('input[name="harga"]').val(harga);
                                })
                            })
                        </script>
                    </div>
                    <div class="clearfix"></div>
                    <div class="ps-product__content mt-50">
                        <ul class="tab-list" role="tablist">
                            <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab"
                                    data-toggle="tab">Deskripsi</a></li>
                            <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Petunjuk
                                    Instalsi</a></li>
                            <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">Informasi
                                    Tambahan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content mb-60">
                        <div class="tab-pane active" role="tabpanel" id="tab_01">
                            <p>
                                <?=$produk->produk_deskripsi?>
                            </p>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_02">
                            Petunjuk instalasi
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab_03">
                            Informasi tambahan
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section ps-section--top-sales ps-owl-root">
        <div class="ps-container">
            <div class="ps-section__header">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="ps-section__title">PRODUK LAINNYA</h3>
                    </div>
                </div>
            </div>
            <div class="ps-section__content">
                <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true"
                    data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="5"
                    data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4"
                    data-owl-duration="1000" data-owl-mousedrag="on">

                    <!-- Produk Lainnya -->
                    <!-- list product -->
                    <?php foreach($produk_lain as $pl): ?>
                    <div class="ps-shoes--carousel">
                        <div class="ps-shoe">
                            <div class="ps-shoe__thumbnail">
                                <div class="ps-badge"><span>New</span></div>
                                <!-- <div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div> -->
                                <img src="<?=base_url('assets/user/images/produk/'.$pl->produk_gambar)?>" alt=""><a
                                    class="ps-shoe__overlay"
                                    href="<?=base_url('produk/'.strtolower(str_replace(" ","-",$pl->produk_judul)))?>"></a>
                            </div>
                            <div class="ps-shoe__content">
                                <div class="ps-shoe__variants">
                                    <div class="ps-shoe__variant normal">
                                        <!-- other images -->
                                        <img src="<?=base_url('assets/user/images/produk/'.$pl->produk_gambar)?>"
                                            alt="">
                                    </div>
                                </div>
                                <div class="ps-shoe__detail"><a class="ps-shoe__name"
                                        href="<?=base_url('produk/'.strtolower(str_replace(" ","-",$pl->produk_judul)))?>"><?=$pl->produk_judul?></a>
                                    <p class="ps-shoe__categories"><a
                                            href="<?=base_url('kategori/'.strtolower(str_replace(" ","-",$pl->kategori_nama)).'')?>"><?=strtolower($pl->kategori_nama)?></a>,<a
                                            href="<?=base_url('kategori/'.strtolower(str_replace(" ","-",$pl->kategori_nama)).'/'.strtolower(str_replace(" ","-",$pl->produk_type)).'')?>">
                                            <?=strtolower($pl->produk_type)?></a></p><span class="ps-shoe__price">Rp
                                        <?=number_format($pl->produk_harga)?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <!-- end list product -->

                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php $this->load->view('user/footer') ?>
