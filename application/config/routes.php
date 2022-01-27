<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']    = 'homepage';
$route['v_kategori']              = 'homepage/v_kategori';
$route['kategori/(:any)']       = 'homepage/kategori/$1';
$route['kategori/(:any)/(:any)'] = 'homepage/kategori/$1/$2';
$route['e-katalog']             = 'homepage/katalog';
$route['e-katalog/(:any)']      = 'homepage/katalog/$1';
$route['katalog']               = 'homepage/katalog';
$route['katalog/(:any)']        = 'homepage/katalog/$1';
$route['hubungi-kami']          = 'homepage/hubungi_kami';
$route['tentang-kami']          = 'homepage/tentang_kami';
$route['karire']                = 'homepage/karire';
$route['pemesanan']             = 'homepage/pemesanan';

$route['Ecommerce']             = 'homepage/Ecommerce';
$route['product_pintu']         = 'homepage/product_pintu';
$route['product_window']        = 'homepage/product_window';
$route['product_interior']      = 'homepage/product_interior';
$route['product_exterior']      = 'homepage/product_exterior';
$route['product_aksesoris']     = 'homepage/product_aksesoris';
$route['product_masker']        = 'homepage/product_masker';
$route['product_all']           = 'homepage/product_all';
$route['contact']               = 'homepage/contact';
$route['testimoni']  = 'homepage/testimoni';


$route['galeri']                = 'homepage/galeri';
$route['galeri/(:any)']         = 'homepage/galeri/$1';
$route['galeri/(:any)/(:any)']  = 'homepage/galeri/$1/$2';
$route['galeri-video']          = 'homepage/galeri_video';
$route['pemasangan/(:any)']     = 'homepage/instalasi/$1';
$route['standar-pengukuran']    = 'homepage/standar_pengukuran';
$route['hubungi-kami/(:any)']   = 'homepage/showroom/$1';
$route['kebijakan-privasi']     = 'homepage/kebijakan_privasi';
$route['syarat-ketentuan']      = 'homepage/syarat_ketentuan';
$route['faq']                   = 'homepage/faq';
$route['karir']                 = 'homepage/karir';

// Transaksi
$route['order']                     = 'order';
$route['order/(:any)']              = 'order/produk/$1';
$route['order/(:any)']              = 'order/produk_kategori/$1';
$route['get_product_varian']        = 'order/produk_varian';
$route['get_product_varian_price']  = 'order/produk_varian_harga';
$route['cart']                      = 'order/keranjang';
$route['add_to_cart']               = 'order/tambah_keranjang';
$route['update_cart']               = 'order/update_keranjang';
$route['remove-cart/(:num)']        = 'order/delete_keranjang/$1';
$route['create-order']              = 'order/createOrder';

// Pemesanan
$route['pemesanan1']                 = 'pemesanan/getAllProduct';

// Ajax Get Cost and Address
$route['ajax_post_user_session']    = 'order/postUserSession';
$route['ajax_order_get_province']   = 'order/getProvince';
$route['ajax_order_get_city/(:num)'] = 'order/getCity/$1';
$route['ajax_order_get_district/(:num)'] = 'order/getDistrict/$1';
$route['ajax_order_get_cost']       = 'order/getCost';

// 404 redirect
$route['404_override']          = 'homepage';
$route['translate_uri_dashes']  = FALSE;
