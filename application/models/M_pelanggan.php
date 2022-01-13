<?php
class M_pelanggan extends CI_Model{

    function login($data){
        $this->db->where('pelanggan_username',$data);
        $this->db->or_where('pelanggan_email',$data);
        $this->db->or_where('pelanggan_telpon',$data);
        return $this->db->get('tbl_pelanggan')->row();
    }

    function signup($data){
        return $this->db->insert('tbl_pelanggan',$data);
    }

    function update($data){
        $this->db->set($data);
        $this->db->where('pelanggan_email',$data['pelanggan_email']);
        return $this->db->update('tbl_pelanggan');
    }

    function update_setting($data,$id){
        $this->db->set($data);
        $this->db->where('pelanggan_id',$id);
        return $this->db->update('tbl_pelanggan');
    }

    function profile($email){
        return $this->db->get_where('tbl_pelanggan', array('pelanggan_email' => $email))->row();
    }


    // Cart
    function cart($uid){
        $this->db->join('tbl_produk','produk_id=keranjang_produk_id','LEFT');
        return $this->db->get_where('tbl_pelanggan_keranjang', array('keranjang_pelanggan_id' => $uid))->result();
    }

    function add_to_cart($data){
        $this->db->set($data);
        $this->db->insert('tbl_pelanggan_keranjang');
        return $this->db->insert_id();
    }

    function get_cart_by_id($id){
        $this->db->join('tbl_produk','produk_id=keranjang_produk_id','LEFT');
        return $this->db->get_where('tbl_pelanggan_keranjang', array('keranjang_id'=>$id))->row();
    }

    function update_cart($data){
        $this->db->set($data);
        $this->db->where('keranjang_id',$data['keranjang_id']);
        return $this->db->update('tbl_pelanggan_keranjang');
    }

    function update_stock($stok){
        $this->db->set($stok);
        $this->db->where('produk_id',$stok['produk_id']);
        return $this->db->update('tbl_produk');
    }

    function cart_delete($id){
        return $this->db->delete('tbl_pelanggan_keranjang', array('keranjang_id' => $id));
    }

    // Checkout
    function checkout($uid){
        $this->db->join('tbl_pelanggan','pelanggan_id=keranjang_pelanggan_id','LEFT');
        $this->db->join('tbl_produk','produk_id=keranjang_produk_id','LEFT');
        return $this->db->get_where('tbl_pelanggan_keranjang', array('keranjang_pelanggan_id' => $uid))->result();
    }

    function place_order($data){
        return $this->db->insert('tbl_pelanggan_pesanan',$data);
    }

    // daftar pesanan

    function pesanan($id){
        $this->db->select('pesanan_faktur,SUM(pesanan_total) as pesanan_total,pesanan_status');
        $this->db->group_by('pesanan_faktur');
        return $this->db->get_where('tbl_pelanggan_pesanan', array('pesanan_pelanggan_id' => $id))->result();
    }

    function order_detail($faktur,$id){
        $this->db->where('pesanan_faktur',$faktur);
        $this->db->where('pesanan_pelanggan_id',$id);
        $this->db->join('tbl_pelanggan','pelanggan_id=pesanan_pelanggan_id');
        $this->db->join('tbl_produk','produk_id=pesanan_produk_id');
        return $this->db->get('tbl_pelanggan_pesanan')->result();
    }
}
