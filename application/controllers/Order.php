<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('M_order');
    }

    public function index()
    {
        // $this->load->view('user/order/index');

        $a = array(
            "page"  => "Order Page"

        );
        print_r($a);
    }

    public function produk($slug)
    {
        $produk     = $this->M_order->getProduk($slug);
        empty($produk) ? redirect(base_url()) : true;
        $this->load->view('user/order/produk', ['varian' => $produk]);
    }

    public function produk_kategori($slug)
    {
        $produk     = $this->M_order->getProduk($slug);
        empty($produk) ? redirect(base_url()) : true;
        $this->load->view('user/order/produk_kategori', ['varian' => $produk]);
    }


    //FILTER-------------------------------------------------------//

    function show()
    {
        $min_range = $this->input->post('amount1');
        $max_range = $this->input->post('amount2');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='1' 
        AND a.varian_harga_meter BETWEEN '" . $min_range . "' AND '" . $max_range . "'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='1'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_pintu', $data);
    }

    function show_jendela()
    {
        $min_range = $this->input->post('amount1');
        $max_range = $this->input->post('amount2');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='2' 
        AND a.varian_harga_meter BETWEEN '" . $min_range . "' AND '" . $max_range . "'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='2'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }

    function show_interior()
    {
        $min_range = $this->input->post('amount1');
        $max_range = $this->input->post('amount2');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='3' 
        AND a.varian_harga_meter BETWEEN '" . $min_range . "' AND '" . $max_range . "'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='3'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }

    function show_exterior()
    {
        $min_range = $this->input->post('amount1');
        $max_range = $this->input->post('amount2');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='4' 
        AND a.varian_harga_meter BETWEEN '" . $min_range . "' AND '" . $max_range . "'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='4'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }

    function show_aksesoris()
    {
        $min_range = $this->input->post('amount1');
        $max_range = $this->input->post('amount2');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='5' 
        AND a.varian_harga_meter BETWEEN '" . $min_range . "' AND '" . $max_range . "'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='5'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }

    function show_masker()
    {
        $min_range = $this->input->post('amount1');
        $max_range = $this->input->post('amount2');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='6' 
        AND a.varian_harga_meter BETWEEN '" . $min_range . "' AND '" . $max_range . "'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='6'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }



    function cari_pintu()
    {
        $keyword = $this->input->post('keyword');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='1' and a.varian_nama LIKE '$keyword%'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='1'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_pintu', $data);
    }

    function cari_window()
    {
        $keyword = $this->input->post('keyword');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='2' and a.varian_nama LIKE '$keyword%'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='2'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }

    function cari_interior()
    {
        $keyword = $this->input->post('keyword');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='3' and  a.varian_nama LIKE '$keyword%'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='3'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_interior', $data);
    }

    function cari_exterior()
    {
        $keyword = $this->input->post('keyword');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='4' and  a.varian_nama LIKE '$keyword%'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='4'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_exterior', $data);
    }

    function cari_aksesoris()
    {
        $keyword = $this->input->post('keyword');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='5' and  a.varian_nama LIKE '$keyword%'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='5'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_aksesoris', $data);
    }

    function cari_masker()
    {
        $keyword = $this->input->post('keyword');
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='6' and  a.varian_nama LIKE '$keyword%'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian where produk_id='6'  GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_masker', $data);
    }

    function product_pintu($id_subkategori_produk)
    {
        // $data = array(
        //     'brand_data' => $this->M_order->post_sub()
        // );
        // $this->load->view('ecommerce/v_product_pintu', $data);

        // $data['brand_data'] = $this->M_order->post_sub($id_subkategori_produk);
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='1' and a.id_subkategori_produk='$id_subkategori_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['all_subkategori'] = $this->db->query(" SELECT * from tbl_subkategoriproduk where id_kategori_produk='1' order by id_subkategori_produk Asc ");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='1' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_pintu', $data);
    }


    function tipe($id_tipe_produk)
    {
        // $data = array(
        //     'brand_data' => $this->M_order->post_sub($id_subkategori_produk)
        // );
        // $this->load->view('ecommerce/filter/v_product_pintu', $data);

        // $data['brand_data'] = $this->M_order->post_sub($id_subkategori_produk);
        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='1' and a.id_tipe_produk='$id_tipe_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='1' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_pintu', $data);
    }


    function product_jendela($id_subkategori_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='2' and a.id_subkategori_produk='$id_subkategori_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='2' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }

    function tipe_jendela($id_tipe_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='2' and a.id_tipe_produk='$id_tipe_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='2' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_window', $data);
    }


    function product_interior($id_subkategori_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='3' and a.id_subkategori_produk='$id_subkategori_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='3' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_interior', $data);
    }

    function tipe_interior($id_tipe_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='3' and a.id_tipe_produk='$id_tipe_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='3' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_interior', $data);
    }

    function product_exterior($id_subkategori_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='4' and a.id_subkategori_produk='$id_subkategori_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='4' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_exterior', $data);
    }

    function tipe_exterior($id_tipe_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='4' and a.id_tipe_produk='$id_tipe_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='4' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_exterior', $data);
    }

    function product_aksesoris($id_subkategori_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='5' and a.id_subkategori_produk='$id_subkategori_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='5' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_aksesoris', $data);
    }

    function tipe_aksesoris($id_tipe_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='5' and a.id_tipe_produk='$id_tipe_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='5' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_aksesoris', $data);
    }

    function product_masker($id_subkategori_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='6' and a.id_subkategori_produk='$id_subkategori_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        // $data['all_category'] = $this->db->query("SELECT * from tbl_kategoriproduk where id_kategori_produk='5' order by id_kategori_produk Asc");
        // $data['all_sub_category'] = $this->db->query("SELECT * from tbl_subkategoriproduk where id_kategori_produk='5' order by id_subkategori_produk Asc");
        $data['tipe'] = $this->db->query("SELECT * FROM tbl_produk_varian WHERE produk_id='6' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_masker', $data);
    }

    function tipe_masker($id_tipe_produk)
    {

        $data['brand_data'] = $this->db->query("SELECT a.varian_nama,a.varian_type,a.varian_gambar_utama,c.produk_nama,
        a.varian_gambar_depan,CONCAT(FORMAT(a.varian_harga_meter, 0)) AS varian_harga_meter,c.produk_slug FROM tbl_produk_varian a 
        INNER JOIN tbl_produk c ON a.produk_id=c.produk_id where a.produk_id='6' and a.id_tipe_produk='$id_tipe_produk'
        GROUP BY a.varian_nama ORDER BY a.id_tipe_produk");
        $data['tipe'] = $this->db->query(" SELECT * FROM tbl_produk_varian WHERE produk_id='6' GROUP BY id_tipe_produk ORDER BY id_tipe_produk");
        $this->load->view('ecommerce/filter/v_product_masker', $data);
    }


    //END FITER----------------------------------------------------------//


    /////////////////FILTER ATAS/////////////////////

    /////////////////FILTER ATAS END////////////////////






    public function subkategori_window()
    {
        $this->load->view('ecommerce/v_product_window');
    }

    public function subkategori_interior()
    {
        $this->load->view('ecommerce/v_product_interior');
    }
    public function subkategori_exterior()
    {
        $this->load->view('ecommerce/v_product_exterior');
    }
    public function subkategori_aksesoris()
    {
        $this->load->view('ecommerce/v_product_aksesoris');
    }
    public function subkategori_masker()
    {
        $this->load->view('ecommerce/v_product_masker');
    }

    //end filter

    public function produk_varian()
    {
        $_POST ? true : redirect('order');
        $varian     = $this->M_order->getVarian($_POST['varian']);
        echo json_encode($varian);
    }

    public function produk_varian_harga()
    {
        $_POST ? true : redirect('order');
        $varian     = $this->M_order->getPrice($_POST['varian']);
        echo json_encode($varian);
    }

    public function keranjang()
    {
        $id             = $this->session->userdata('user_session_id');
        $data['cart']   = $this->M_order->getCart($id);
        $this->load->view('user/order/cart', $data);
    }

    // public function tambah_keranjang()
    // {
    //     $this->session->set_userdata('user_session_id', $_POST['session_id']);
    //     $this->M_order->addCart($_POST);
    //     redirect('cart');
    // }

    public function tambah_keranjang()
    {
        if (!empty($this->session->userdata('idadmin'))) {
            $this->session->set_userdata('user_session_id', $_POST['session_id']);
            $this->M_order->addCart($_POST);
            redirect('cart');
        } else {

            $this->load->view('admin/v_login');
        }

        // $this->session->set_userdata('user_session_id', $_POST['session_id']);
        // $this->M_order->addCart($_POST);
        // redirect('cart');
    }

    public function update_keranjang()
    {
        foreach ($_POST['kuantitas'] as $key => $value) {
            $old = $this->M_order->getCartId($key);
            $update = [
                'keranjang_id'      => $key,
                'jumlah_produk'     => $value,
                'harga_produk'      => (($old->lebar_produk / 1000 * $old->tinggi_produk / 1000) * $old->harga_produk_meter) * $value,
            ];
            $this->M_order->updateCart($update);
        }

        redirect('cart');
    }

    public function delete_keranjang($id)
    {
        $this->M_order->deleteCart($id);
        redirect('cart');
    }

    public function postUserSession()
    {
        $this->session->set_userdata('user_session_id', $_POST['session_id']);
    }

    // ajax request address and shipment
    public function getProvince()
    {
        $url = "https://pro.rajaongkir.com/api/province";
        echo json_encode($this->getAddress($url));
    }

    public function getCity($id)
    {
        $url = "https://pro.rajaongkir.com/api/city?province=" . $id;
        echo json_encode($this->getAddress($url));
    }

    public function getDistrict($id)
    {
        $url = "https://pro.rajaongkir.com/api/subdistrict?city=" . $id;
        echo json_encode($this->getAddress($url));
    }

    // Api Request
    private function getAddress($url)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array("key: dbfe53e978898ea8e87d7602e123cab8"),
        ));

        $response = json_decode(curl_exec($curl));
        return $response->rajaongkir->results;
    }

    public function getCost()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://pro.rajaongkir.com/api/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=108&originType=city&destination=" . $_POST['destination'] . "&destinationType=subdistrict&weight=5000&courier=" . $_POST['courier'],
            CURLOPT_HTTPHEADER => array(
                "key: dbfe53e978898ea8e87d7602e123cab8",
                "Content-Type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $response = json_decode(curl_exec($curl));
        foreach ($response->rajaongkir->results[0]->costs as $v) {
            $html = '<div class="row pl-20"><input type="radio" value="' . $response->rajaongkir->results[0]->name . ',' . $v->service . ',' . $v->cost[0]->value . '" name="kurir" class="form-control col-lg-3 btn_courier_cost" style="width:20px;height:30px"><div class="col-lg-9 pt-10">' . $v->service . ' ( Rp ' . number_format($v->cost[0]->value) . ' ) <span class="pl-5">' . $v->cost[0]->etd . ' hari</span></div></div>';
            echo $html;
        };
    }

    // Create Order
    public function createOrder()
    {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tlp = $_POST['telepon'];
        $hp = $_POST['handphone'];
        $prov = $_POST['provinsi'];
        $kota = $_POST['kota'];
        $kec = $_POST['kecamatan'];
        $almt = $_POST['alamat'];
        $pos = $_POST['kodepos'];

        if (empty($nama) || empty($email) || empty($tlp) || empty($hp)) {
            $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'Informasi pelanggan harus lengkap..')))
                ->_display();
            exit();
        } else
        if (empty($prov) || empty($kota) || empty($kec) || empty($almt) || empty($pos)) {
            $this->output
                ->set_status_header(403)
                ->set_content_type('application/json')
                ->set_output(json_encode(array('status' => 'Informasi alamat pengiriman harus lengkap..')))
                ->_display();
            exit();
        }

        $data               = $_POST;
        $dataCustomer = array(
            'session_id'    => $this->session->userdata('user_session_id'),
            'nama'          => $nama,
            'email'         => $email,
            'telepon'       => $tlp,
            'handphone'     => $hp,
            'alamat'        => $almt,
            'kecamatan'     => $kec,
            'kota'          => $kota,
            'provinsi'      => $prov,
            'kodepos'       => $pos
        );

        $customer = $this->M_order->inputCustomer($dataCustomer);
        $data['pelanggan_id'] = $customer;

        // split kurir info
        $kurir              = explode(",", $_POST['kurir']);
        // $faktur             = 'SMTT/' . date('d-m-y') . '/' . rand(1111, 9999);
        $faktur             = 'SMTT-' . date('dmy') . '-' . rand(1111, 9999);

        $kode = $this->session->userdata('idadmin');
        $dataOrder = array(
            'pelanggan_id'          => $data['pelanggan_id'],
            'session_id'            => $this->session->userdata('user_session_id'),
            'faktur'                => $faktur,
            'pengguna_id'           => $kode,

            'tanggal_pengiriman'    => $_POST['tanggal_pengiriman'],
            'kurir_pengiriman'      => $kurir[0],
            'layanan_pengiriman'    => $kurir[1],
            'ongkos_pengiriman'     => $kurir[2],
            'catatan_pembelian'     => $_POST['catatan_pembelian'],
            'metode_pembayaran'     => $_POST['metode_pembayaran']
        );

        $cart  = $this->M_order->getCart($this->session->userdata('user_session_id'));
        foreach ($cart as $c) {
            $dataOrder['nama_produk']        = $c->nama_produk;
            $dataOrder['tipe_produk']        = $c->tipe_produk;
            $dataOrder['harga_produk_meter'] = $c->harga_produk_meter;
            $dataOrder['lebar_produk']       = $c->lebar_produk;
            $dataOrder['tinggi_produk']      = $c->tinggi_produk;
            $dataOrder['warna_produk']       = $c->warna_produk;
            $dataOrder['jumlah_produk']      = $c->jumlah_produk;
            $dataOrder['harga_produk']       = $c->harga_produk;
            //input data order
            $order = $this->M_order->createOrder($dataOrder);
            if ($order) { //hapus cart
                $this->M_order->deleteCart($c->keranjang_id);
            }
        }


        //new_update pelanggan_id agar bisa join ke tbl_pengguna untuk mengetahui alamat pengguna.

        // $kode = $this->session->userdata('idadmin');
        // $datapelanggan = array(
        //     'pelanggan_id'          => $data['pelanggan_id']
        // );
        // $this->M_order->update_pengguna_pelanggan($datapelanggan, $kode);







        $email = $_POST['email'];
        $this->sendEmail($email, $faktur);
        $this->sendEmail('splusindo255@gmail.com', $faktur);
        echo $faktur;
    }

    private function sendEmail($email, $faktur = null)
    {
        $data['order'] = $this->M_order->getOrder($faktur);
        $from_email = "quotation@splusindonesia.com";
        $to_email   = $email;
        $html       = $this->load->view('user/order/email', $data, true);

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://srv58.niagahoster.com',
            'smtp_port' => 465,
            'smtp_user' => $from_email,
            'smtp_pass' => 'smtt@2511',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from($from_email, 'S-Plus Indonesia');
        $this->email->to($to_email);
        $this->email->subject('Order Barang S-Plus Indonesia');
        $this->email->message($html);

        //Send mail 
        if ($this->email->send()) {
            $this->session->set_flashdata("notif", "Email berhasil terkirim.");
        } else {
            $this->session->set_flashdata("notif", "Email gagal dikirim.");
            echo "gagal";
        }
    }
}
