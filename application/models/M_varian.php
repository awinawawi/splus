<?php
class M_varian extends CI_Model
{

	function get_all_varian()
	{
		$hsl = $this->db->query("SELECT * FROM tbl_produk_varian ORDER BY varian_id ASC");
		return $hsl;
	}
	function simpan_varian($varian_nama, $varian_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("insert into tbl_produk_varian(varian_nama,varian_deskripsi,varian_pengguna_id,varian_author,varian_cover) values ('$varian_nama','$varian_deskripsi','$user_id','$user_nama','$gambar')");
		return $hsl;
	}
	function update_varian($varian_id, $varian_nama, $varian_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("update tbl_produk_varian set varian_nama='$varian_nama',varian_deskripsi = '$varian_deskripsi',varian_pengguna_id='$user_id',varian_author='$user_nama',varian_cover='$gambar' where varian_id='$varian_id'");
		return $hsl;
	}
	function update_varian_tanpa_img($varian_id, $varian_nama, $varian_deskripsi, $user_id, $user_nama)
	{
		$hsl = $this->db->query("update tbl_produk_varian set varian_nama='$varian_nama',varian_deskripsi = '$varian_deskripsi',varian_pengguna_id='$user_id',varian_author='$user_nama' where varian_id='$varian_id'");
		return $hsl;
	}
	function hapus_varian($kode)
	{
		$hsl = $this->db->query("delete from tbl_produk_varian where varian_id='$kode'");
		return $hsl;
	}
}
