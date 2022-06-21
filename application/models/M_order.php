<?php

class M_order extends CI_Model
{

    // public function getProduk($slug)
    // {
    //     return $this->db->join('tbl_produk_varian', 'tbl_produk_varian.produk_id=tbl_produk.produk_id')
    //         ->where('produk_slug', $slug)
    //         ->group_by('varian_nama')
    //         ->get('tbl_produk')->result();
    // }

    //lama
    // public function getProduk($slug)
    // {
    //     return $this->db->join('tbl_produk_varian', 'tbl_produk_varian.produk_id=tbl_produk.produk_id')
    //         ->where('varian_nama', $slug)
    //         ->group_by('varian_nama')
    //         ->get('tbl_produk')->result();
    // }


    // public function getVarian($varian)
    // {
    //     return $this->db->where('varian_nama', $varian)
    //         ->get('tbl_produk_varian')->result();
    // }

    //new
    public function getProduk($slug)
    {
        return $this->db->join('tbl_varian_coba', 'tbl_varian_coba.produk_kategori=tbl_produk.produk_id')
            ->where('varian_nama', $slug)
            ->group_by('varian_nama')
            ->get('tbl_produk')->result();
    }

    public function getVarian($varian)
    {
        return $this->db->where('varian_nama', $varian)
            ->get('tbl_varian_coba')->result();
    }



    public function get_all_category()
    {
        $data = $this->db->select('*')
            ->from('tbl_kategoriproduk')
            ->order_by('id_kategori_produk', 'desc')
            ->get()
            ->result();
        return $data;
    }
    public function get_all_sub_category()
    {
        $data = $this->db->select('*')
            ->from('tbl_subkategoriproduk')
            ->order_by('id_subkategori_produk', 'desc')
            ->get()
            ->result();
        return $data;
    }

    /////////////////FILTER PRODUCT//////////////////

    public function post_sub($id_subkategori_produk)
    {
        $data = $this->db->select('*')
            ->from('tbl_produk_varian')
            ->where('id_subkategori_produk', $id_subkategori_produk)
            ->get()
            ->result();
        return $data;
    }

    public function post_subx($id_subkategori_produk)
    {
        return $this->db->join('tbl_produk_varian', 'tbl_produk_varian.produk_id=tbl_produk.produk_id')
            ->where('id_subkategori_produk', $id_subkategori_produk)
            ->group_by('varian_nama')
            ->get('tbl_produk')->result();
    }

    public function post_tipe($id_tipe_produk)
    {
        $this->db->select('*');
        $this->db->from('tbl_produk_varian');
        $this->db->where('id_tipe_produk', $id_tipe_produk);
        return $this->db->get()->result();
    }

    public function post_arrival($produk_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_produk_varian');
        $this->db->where('produk_id', $produk_id);
        return $this->db->get()->result();
    }

    public function get_product_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_produk_varian');
        $this->db->like('nama', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get()->result();
    }




    /////////////////END FILTER PRODUCT//////////////////

    // public function getPrice($id)
    // {
    //     return $this->db->where('varian_id', $id)
    //         ->get('tbl_produk_varian')->result();
    // }

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


    // function update_pengguna_pelanggan($data, $kode)
    // {
    //     $this->db->where('pengguna_id', $kode);
    //     return $this->db->update('tbl_pengguna', $data);
    // }


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

    function get_all_transaksi()
    {
        $this->db->select('*');
        $this->db->from('tbl_pembelian');
        $this->db->join('tbl_pelanggan', 'tbl_pelanggan.id=tbl_pembelian.pelanggan_id');
        return $this->db->get()->result();
    }

    public function view_where()
    {
        $this->db->select('*');
        $this->db->from('tbl_pengguna');
        $this->db->where('pengguna_status', 1);
        return $this->db->get()->result();
    }
}
