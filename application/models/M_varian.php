<?php
class M_varian extends CI_Model
{

	function get_all_varian()
	{
		// $hsl = $this->db->query("SELECT * FROM tbl_produk_varian join tbl_produk on varian_produk_id=produk_id join tbl_kategori on varian_kategori_id=kategori_id ORDER BY varian_id ASC");
		$hsl = $this->db->query("SELECT * FROM tbl_produk_varian a JOIN 
		tbl_produk b ON a.produk_id=b.produk_id
		JOIN tbl_kategori c ON b.produk_id=c.kategori_id ORDER BY a.produk_id ASC");
		return $hsl;
	}


	function get_all_varian_filter($kategori)
	{
		if (empty($kategori) || $kategori == 'all') :
			$hsl = $this->db->query("SELECT * FROM tbl_produk_varian a JOIN 
			tbl_produk b ON a.produk_id=b.produk_id
			JOIN tbl_kategori c ON b.produk_id=c.kategori_id ORDER BY a.produk_id ASC");
			return $hsl;
		else :
			$hsl = $this->db->query("SELECT * FROM tbl_produk_varian a JOIN 
			tbl_produk b ON a.produk_id=b.produk_id
			JOIN tbl_kategori c ON b.produk_id=c.kategori_id where b.produk_kategori='$kategori' ORDER BY a.produk_id ASC");
			return $hsl;
		endif;
	}

	function simpan_varian($varian_nama, $varian_deskripsi, $user_id, $user_nama, $varian_gambar)
	{
		$hsl = $this->db->query("insert into tbl_produk_varian(varian_nama,varian_deskripsi,varian_pengguna_id,varian_author,varian_gambar_utama) values ('$varian_nama','$varian_deskripsi','$user_id','$user_nama','$varian_gambar')");
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
