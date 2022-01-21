<?php
class M_dependentSelect extends CI_Model
{

    function kategori()
    {
        // $this->db->order_by('id_kategori', 'ASC');
        $kategori = $this->db->query("SELECT * FROM tbl_kategori ORDER BY kategori_id ASC");
        return $kategori->result_array();
    }

    function produk($kategori_id)
    {

        $produk = "<option value='0'>--pilih--</pilih>";

        $this->db->order_by('produk_id', 'ASC');
        $p = $this->db->get_where('produk', array('kategori_id' => $kategori_id));

        foreach ($p->result_array() as $data) {
            $produk .= "<option value='$data[produk_id]'>$data[produk_nama]</option>";
        }

        return $produk;
    }
}
