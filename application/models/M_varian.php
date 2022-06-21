<?php
class M_varian extends CI_Model
{

	function get_all_varian()
	{
		// $hsl = $this->db->query("SELECT * FROM tbl_produk_varian join tbl_produk on varian_produk_id=produk_id join tbl_kategori on varian_kategori_id=kategori_id ORDER BY varian_id ASC");
		// $hsl = $this->db->query("SELECT * FROM tbl_produk_varian a JOIN 
		// tbl_produk b ON a.produk_id=b.produk_id
		// JOIN tbl_kategori c ON b.produk_id=c.kategori_id ORDER BY a.produk_id ASC");

		// $hsl = $this->db->query("SELECT * FROM tbl_varian_coba a JOIN tbl_kelas b ON a.produk_kelas=b.kelas_id ORDER BY varian_id ASC");
		$hsl = $this->db->query("SELECT * FROM tbl_varian_coba a JOIN tbl_kelas b ON a.produk_kelas=b.kelas_id
		JOIN tbl_subkategori c ON c.subkategori_id= b.produk_subkategori JOIN tbl_kategori d 
		ON d.kategori_id=c.produk_kategori  ORDER BY a.varian_id ASC");
		return $hsl;
	}


	function get_all_brand()
	{

		$hsl = $this->db->query("SELECT * FROM tbl_brand ");
		return $hsl;
	}


	function get_all_varian_filter($kelas)
	{
		if (empty($kelas) || $kelas == 'all') :
			// $hsl = $this->db->query("SELECT * FROM tbl_produk_varian a JOIN 
			// tbl_produk b ON a.produk_id=b.produk_id
			// JOIN tbl_kategori c ON b.produk_id=c.kategori_id ORDER BY a.produk_id ASC");
			$hsl = $this->db->query("SELECT * FROM tbl_varian_coba a JOIN 
			tbl_kelas b ON a.produk_kelas=b.kelas_id Order by varian_id ASC");
			return $hsl;
		else :
			// $hsl = $this->db->query("SELECT * FROM tbl_produk_varian a JOIN 
			// tbl_produk b ON a.produk_id=b.produk_id
			// JOIN tbl_kategori c ON b.produk_id=c.kategori_id where b.produk_kategori='$kategori' ORDER BY a.produk_id ASC");
			$hsl = $this->db->query("SELECT * FROM tbl_varian_coba a JOIN 
			tbl_kelas b ON a.produk_kelas=b.kelas_id where a.produk_kelas='$kelas' Order by varian_id ASC");
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



	//simpan varian//

	// function simpan_varian_new($varian_nama, $produk_kelas, $varian_deskripsi, $user_id, $user_nama, $gambar)
	// {
	// 	$hsl = $this->db->query("insert into tbl_varian_coba(varian_nama,produk_kelas, varian_deskripsi,varian_pengguna_id,varian_author,varian_cover) values ('$varian_nama','$produk_kelas','$varian_deskripsi','$user_id','$user_nama','$gambar')");
	// 	return $hsl;
	// }

	function simpan_varian_new(
		$produk_kategori,
		$produk_subkategori,
		$produk_kelas,
		$produk_brand,
		$varian_nama,
		$satuan,
		$berat,
		$harga,
		$diskon,
		$stok,
		$warna,
		$varian_deskripsi,
		$user_id,
		$user_nama,
		$gambar
	) {
		$hsl = $this->db->query("insert into tbl_varian_coba(produk_kategori,produk_subkategori,produk_kelas,produk_brand,varian_nama,satuan,berat,harga_konsumen,diskon,stok,varian_warna,varian_deskripsi,varian_pengguna_id,varian_author,varian_cover) 
		values ('$produk_kategori','$produk_subkategori','$produk_kelas','$produk_brand','$varian_nama','$satuan','$berat','$harga','$diskon','$stok','$warna','$varian_deskripsi','$user_id','$user_nama','$gambar')");
		return $hsl;
	}


	// function update_varian_new($varian_id, $varian_nama, $produk_kelas, $varian_deskripsi, $gambar)
	// {
	// 	$hsl = $this->db->query("update tbl_varian_coba set varian_nama='$varian_nama',produk_kelas='$produk_kelas',varian_deskripsi = '$varian_deskripsi',varian_cover='$gambar' where varian_id='$varian_id'");
	// 	return $hsl;
	// }

	// 	function update_varian_new_tanpa_img($varian_id, $varian_nama, $produk_kelas, $varian_deskripsi)
	// {
	// 	$hsl = $this->db->query("update tbl_varian_coba set varian_nama='$varian_nama',produk_kelas='$produk_kelas',varian_deskripsi = '$varian_deskripsi'
	// 	where varian_id='$varian_id'");
	// 	return $hsl;
	// }

	function update_varian_new(
		$varian_id,
		$produk_kategori,
		$produk_subkategori,
		$produk_kelas,
		$produk_brand,
		$varian_nama,
		$satuan,
		$berat,
		$harga,
		$diskon,
		$stok,
		$warna,
		$varian_deskripsi,
		$gambar
	) {
		$hsl = $this->db->query("update tbl_varian_coba set produk_kategori='$produk_kategori',produk_subkategori='$produk_subkategori',produk_kelas='$produk_kelas',produk_brand='$produk_brand',
		varian_nama='$varian_nama',satuan='$satuan',berat='$berat',harga_konsumen='$harga',diskon='$diskon',stok='$stok',
		varian_warna='$warna',varian_deskripsi = '$varian_deskripsi',varian_cover='$gambar' where varian_id='$varian_id'");
		return $hsl;
	}

	function update_varian_new_tanpa_img(
		$varian_id,
		$produk_kategori,
		$produk_subkategori,
		$produk_kelas,
		$produk_brand,
		$varian_nama,
		$satuan,
		$berat,
		$harga,
		$diskon,
		$stok,
		$warna,
		$varian_deskripsi
	) {
		$hsl = $this->db->query("update tbl_varian_coba set produk_kategori='$produk_kategori',produk_subkategori='$produk_subkategori',produk_kelas='$produk_kelas',produk_brand='$produk_brand',
		varian_nama='$varian_nama',satuan='$satuan',berat='$berat',harga_konsumen='$harga',diskon='$diskon',stok='$stok',
		varian_warna='$warna',varian_deskripsi = '$varian_deskripsi' where varian_id='$varian_id'");
		return $hsl;
	}



	function hapus_varian_new($kode)
	{
		$hsl = $this->db->query("delete from tbl_varian_coba where varian_id='$kode'");
		return $hsl;
	}

	/// anjing cape bnget bangsat kerja sendiri
}
