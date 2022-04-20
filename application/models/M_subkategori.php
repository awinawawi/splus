<?php
class M_subkategori extends CI_Model
{

	function get_all_kategori()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_subkategori a 
		INNER JOIN tbl_kategori b ON a.produk_kategori=b.kategori_id 
		ORDER BY subkategori_id ASC");
		return $hsl;
	}
	function simpan_kategori($subkategori_nama, $produk_kategori, $subkategori_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("insert into tbl_subkategori(subkategori_nama,produk_kategori, subkategori_deskripsi,subkategori_pengguna_id,subkategori_author,subkategori_cover) values ('$subkategori_nama','$produk_kategori','$subkategori_deskripsi','$user_id','$user_nama','$gambar')");
		return $hsl;
	}
	function update_kategori($subkategori_id, $produk_kategori, $subkategori_nama, $subkategori_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("update tbl_subkategori set subkategori_nama='$subkategori_nama',produk_kategori='$produk_kategori',subkategori_deskripsi = '$subkategori_deskripsi',subkategori_pengguna_id='$user_id',subkategori_author='$user_nama',subkategori_cover='$gambar' where subkategori_id='$subkategori_id'");
		return $hsl;
	}
	function update_kategori_tanpa_img($subkategori_id, $produk_kategori, $subkategori_nama, $subkategori_deskripsi, $user_id, $user_nama)
	{
		$hsl = $this->db->query("update tbl_subkategori set subkategori_nama='$subkategori_nama',produk_kategori='$produk_kategori',subkategori_deskripsi = '$subkategori_deskripsi',subkategori_pengguna_id='$user_id',subkategori_author='$user_nama' where subkategori_id='$subkategori_id'");
		return $hsl;
	}
	function hapus_kategori($kode)
	{
		$hsl = $this->db->query("delete from tbl_subkategori where subkategori_id='$kode'");
		return $hsl;
	}
}
