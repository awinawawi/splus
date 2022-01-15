<?php
class M_kelas extends CI_Model
{

	function get_all_kelas()
	{
		$hsl = $this->db->query("SELECT tbl_kelas.*,DATE_FORMAT(kelas_tanggal,'%d %M %Y') AS tanggal FROM tbl_kelas ORDER BY kelas_id ASC");
		return $hsl;
	}
	function simpan_kelas($kelas_nama, $kelas_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("insert into tbl_kelas(kelas_nama,kelas_deskripsi,kelas_pengguna_id,kelas_author,kelas_cover) values ('$kelas_nama','$kelas_deskripsi','$user_id','$user_nama','$gambar')");
		return $hsl;
	}
	function update_kelas($kelas_id, $kelas_nama, $kelas_deskripsi, $user_id, $user_nama, $gambar)
	{
		$hsl = $this->db->query("update tbl_kelas set kelas_nama='$kelas_nama',kelas_deskripsi = '$kelas_deskripsi',kelas_pengguna_id='$user_id',kelas_author='$user_nama',kelas_cover='$gambar' where kelas_id='$kelas_id'");
		return $hsl;
	}
	function update_kelas_tanpa_img($kelas_id, $kelas_nama, $kelas_deskripsi, $user_id, $user_nama)
	{
		$hsl = $this->db->query("update tbl_kelas set kelas_nama='$kelas_nama',kelas_deskripsi = '$kelas_deskripsi',kelas_pengguna_id='$user_id',kelas_author='$user_nama' where kelas_id='$kelas_id'");
		return $hsl;
	}
	function hapus_kelas($kode)
	{
		$hsl = $this->db->query("delete from tbl_kelas where kelas_id='$kode'");
		return $hsl;
	}
}
