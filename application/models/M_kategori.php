<?php
class M_kategori extends CI_Model
{

	function get_all_kategori()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_kategori ORDER BY kategori_id ASC");
		return $hsl;
	}
	function simpan_kategori($kategori_nama, $kategori_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("insert into tbl_kategori(kategori_nama,kategori_deskripsi,kategori_pengguna_id,kategori_author,kategori_cover) values ('$kategori_nama','$kategori_deskripsi','$user_id','$user_nama','$gambar')");
		return $hsl;
	}
	function update_kategori($kategori_id, $kategori_nama, $kategori_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("update tbl_kategori set kategori_nama='$kategori_nama',kategori_deskripsi = '$kategori_deskripsi',kategori_pengguna_id='$user_id',kategori_author='$user_nama',kategori_cover='$gambar' where kategori_id='$kategori_id'");
		return $hsl;
	}
	function update_kategori_tanpa_img($kategori_id, $kategori_nama, $kategori_deskripsi, $user_id, $user_nama)
	{
		$hsl = $this->db->query("update tbl_kategori set kategori_nama='$kategori_nama',kategori_deskripsi = '$kategori_deskripsi',kategori_pengguna_id='$user_id',kategori_author='$user_nama' where kategori_id='$kategori_id'");
		return $hsl;
	}
	function hapus_kategori($kode)
	{
		$hsl = $this->db->query("delete from tbl_kategori where kategori_id='$kode'");
		return $hsl;
	}
}
