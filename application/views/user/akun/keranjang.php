<?php $this->load->view('user/header') ?>
<head><title>Keranjang</title></head>
<main class="ps-main pt-40">
    <div class="ps-section ps-owl-root">
        <div class="ps-container  pb-40">
        <div class="ps-cart-listing">
          <center><h3 style="padding-bottom: 50px;">Keranjang Belanja Anda</h3></center>
            <table class="table ps-cart__table">
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Harga</th>
                  <th>Kuantitas</th>
                  <th>Total</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php $total = 0;?>
                <?php if(empty($cart)): ?>
                <tr>
                    <td colspan="4">
                      <center><img src="<?php echo base_url().'assets/user/images/producticon.png'?>"></center>
                      <center style="padding-top: 10px;">Keranjang belanja Anda kosong</center>
                      <center style="padding-top: 20px;"><button type="button" class="btn btn-light">
                        <a href="<?=base_url('produk/all')?>">Belanja Sekarang</a></button></center>
                    </td>
                </tr>
                <?php else: ?>
                <?php foreach($cart as $c): ?>
                <?php $total += $c->keranjang_total; ?>
                <tr>
                  <td><a class="ps-product__preview" href="#"><img class="mr-15" src="<?=base_url('assets/user/images/produk/'.$c->produk_gambar)?>" alt="" width="60"><?=$c->produk_judul?></a></td>
                  <td>Rp <?=number_format($c->keranjang_total/$c->keranjang_kuantitas)?></td>
                  <td>
                    <input class="form-control qty" type="number" style="width:50%;" name="kuantitas" min="1" data-id="<?=$c->keranjang_id?>" data-harga="<?=$c->produk_harga?>" value="<?=$c->keranjang_kuantitas?>"></td>
                  <td class="t<?=$c->keranjang_id?>">Rp <?=number_format($c->keranjang_total)?></td>
                  <td>
                    <div class="ps-remove remove_cart" data-id="<?=$c->keranjang_id?>" data-nm="<?=$c->produk_judul?>"></div>
                  </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
           <!--  <div class="ps-cart_rmvall">
              <h3>Hapus semua produk</h3>
            </div> -->
            <div class="ps-cart__actions">
              <div class="ps-cart__promotion">
                <div class="form-group">
                  <!-- <div class="ps-form--icon"><i class="fa fa-angle-right"></i>
                    <input class="form-control" type="text" placeholder="Promo Code">
                  </div> -->
                </div>
                <div class="form-group">
                  <!-- <button class="ps-btn ps-btn--gray">Continue Shopping</button> -->
                </div>
              </div>
              <div class="ps-cart__total">
                <h3>Total Harga: &emsp; <span class="thrg"> Rp <?=number_format($total)?></span></h3>
               <!--  <button type="button" class="btn btn-primary btncart" id="update_to_cart"><a href="<?=base_url('checkout')?>">Checkout</button></a> -->
               <button type="button" class="btn btn-primary btncart" id="update_to_cart"><a href="<?=base_url('checkout')?>">Checkout</a></button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script>
        $('.remove_cart').click(function(){
            var id      = $(this).attr('data-id');
            var nm      = $(this).attr('data-nm');

            if(confirm("Hapus produk "+nm+" dari keranjang ?")){
                $.post("<?=base_url("ajax/remove_cart_by_id")?>",{id:id},function(result){
                    if(result === 'success'){
                        location.reload();
                    }
                });
            }
        })

        $('.qty').change(function(){
            $(this).prop('disabled',true);
            var qty = $(this).val();
            var cid = $(this).attr('data-id');
            var hrg = $(this).attr('data-harga');
            $.post("<?=base_url('akun/ajax_cart_update')?>",{ cid:cid, kuantitas:qty },function(response){
              $('.qty').prop('disabled',false);
              var new_hrg = hrg*qty;
              $('.tq'+cid).html(qty);
              $('.t'+cid).html("Rp "+new_hrg.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,"));
              //update total harga
              $.post("<?=base_url('akun/get_cart_total')?>",{uid:<?=$this->session->userdata('user_id')?>},function(response){
                $('.thrg').html(response);
              });

              // update total item
              $.post("<?=base_url('akun/get_cart_items')?>",{uid:<?=$this->session->userdata('user_id')?>},function(response){
                $('.tcitm').html(response);
              })
            })
        })
    </script>
    <?php $this->load->view('user/footer') ?>