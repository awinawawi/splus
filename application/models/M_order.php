<?php

class M_order extends CI_Model
{

    public function getProduk($slug)
    {
        return $this->db->join('tbl_produk_varian', 'tbl_produk_varian.produk_id=tbl_produk.produk_id')
            ->where('produk_slug', $slug)
            ->group_by('varian_nama')
            ->get('tbl_produk')->result();
    }

    public function getVarian($varian)
    {
        return $this->db->where('varian_nama', $varian)
            ->get('tbl_produk_varian')->result();
    }

    public function getPrice($id)
    {
        return $this->db->where('varian_id', $id)
            ->get('tbl_produk_varian')->result();
    }

    public function addCart($data)
    {
        return $this->db->insert('tbl_produk_keranjang', $data);
    }



    public function Addrr($data)
    {
        $data = array(
            'nama_produk' => $this->input->post('nama_produk'),
            'tipe_produk' => $this->input->post('tipe_produk'),
            'warna_produk' => $this->input->post('warna_produk'),
            'jumlah_produk' => $this->input->post('jumlah_produk'),
            'lebar_produk' => $this->input->post('lebar_produk'),
            'tinggi_produk' => $this->input->post('tinggi_produk'),
            'harga_produk_meter' => $this->input->post('harga_produk_meter'),
            'harga_produk' => $this->input->post('harga_produk')
        );


        return $this->db->insert('tbl_produk_keranjang', $data);
    }

    public function getCart($session)
    {
        return $this->db->get_where('tbl_produk_keranjang', ['session_id' => $session])->result();
    }

    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_produk_varian');
        $this->db->join('tbl_kategoriproduk', 'tbl_produk_varian.produk_id = tbl_kategoriproduk.produk_id', 'left');
        $this->db->order_by('tbl_produk_varian.produk_id', 'asc');
        return $this->db->get()->result();
    }

    public function getCartId($id)
    {
        return $this->db->get_where('tbl_produk_keranjang', ['keranjang_id' => $id])->row();
    }

    public function updateCart($data)
    {
        $this->db->where('keranjang_id', $data['keranjang_id']);
        return $this->db->update('tbl_produk_keranjang', $data);
    }

    public function deleteCart($id)
    {
        return $this->db->delete('tbl_produk_keranjang', ['keranjang_id' => $id]);
    }

    public function checkCustomer($session_id)
    {
        return $this->db->get_where('tbl_pelanggan', ['session_id' => $session_id])->row();
    }

    public function inputCustomer($data)
    {
        $this->db->insert('tbl_pelanggan', $data);
        return $this->db->insert_id();
    }



    public function createOrder($data)
    {
        return $this->db->insert('tbl_pembelian', $data);
    }

    public function getOrder($faktur)
    {
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id=tbl_pembelian.pelanggan_id')
            ->where('tbl_pembelian.faktur', $faktur);
        return $this->db->get('tbl_pembelian')->result();
    }
}
