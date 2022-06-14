<?php
class M_produk extends CI_Model
{



	function get_all_produk()
	{

		// $hsl = $this->db->query("SELECT * FROM tbl_produk join tbl_kategori on produk_kategori_id=kategori_id ORDER BY produk_id ASC");
		// $hsl = $this->db->query("SELECT * FROM tbl_produk a JOIN tbl_kategori b ON a.id_kategori_produk=b.kategori_id ORDER BY a.produk_id ASC");
		// $hsl = $this->db->query("SELECT * FROM tbl_produk join tbl_kategori on produk_kategori=kategori_id ORDER BY produk_id ASC");

		$hsl = $this->db->query("SELECT * FROM tbl_kelas a JOIN tbl_subkategori b ON a.produk_subkategori=b.subkategori_id ORDER BY kelas_id ASC");
		return $hsl;
	}

	function get_all_produk_filter($kategori)
	{
		if (empty($kategori) || $kategori == 'all') :
			$hsl = $this->db->query("SELECT * FROM tbl_produk join tbl_kategori on produk_kategori=kategori_id 
		  ORDER BY produk_id ASC");
			return $hsl;
		else :
			$hsl = $this->db->query("SELECT * FROM tbl_produk join tbl_kategori on produk_kategori=kategori_id 
			where produk_kategori='$kategori'  ORDER BY produk_id ASC");
			return $hsl;
		endif;
	}

	function simpan_produk($produk_slug, $produk_nama, $produk_kategori_id, $produk_kategori, $produk_gambar, $produk_deskripsi)
	{
		$this->db->trans_start();
		$this->db->query("insert into tbl_produk(produk_slug, produk_nama,produk_kategori_id,produk_kategori,produk_gambar,produk_deskripsi) values ('$produk_slug', '$produk_nama','$produk_kategori_id','$produk_kategori','$produk_gambar','$produk_deskripsi')");
		// $this->db->query("update tbl_kategori set kategori_count=kategori_count+1 where kategori_id='$kategori'");
		$this->db->trans_complete();
		if ($this->db->trans_status() == true)
			return true;
		else
			return false;
	}

	function update_produk($produk_id, $produk_slug, $produk_nama,  $produk_kategori, $produk_gambar, $produk_deskripsi)
	{
		$hsl = $this->db->query("update tbl_produk set produk_slug='$produk_slug', produk_nama='$produk_nama', produk_kategori='$produk_kategori', produk_gambar='$produk_gambar', produk_deskripsi='$produk_deskripsi' where produk_id='$produk_id'");
		return $hsl;
	}
	function update_produk_tanpa_img($produk_id, $produk_slug, $produk_nama,  $produk_kategori, $produk_deskripsi)
	{
		$hsl = $this->db->query("update tbl_produk set produk_slug='$produk_slug', produk_nama='$produk_nama', produk_kategori='$produk_kategori', produk_deskripsi='$produk_deskripsi' where produk_id='$produk_id'");
		return $hsl;
	}
	function hapus_produk($kode, $kategori)
	{
		$this->db->trans_start();
		$this->db->query("delete from tbl_produk where produk_id='$kode'");
		$this->db->query("update tbl_kategori set kategori_count=kategori_count-1 where kategori_id='$kategori'");
		$this->db->trans_complete();
		if ($this->db->trans_status() == true)
			return true;
		else
			return false;
	}

	//Front-End
	// function get_produk_home()
	// {
	// 	$hsl = $this->db->query("SELECT tbl_produk.*,DATE_FORMAT(produk_tanggal,'%d/%m/%Y') AS tanggal,kategori_nama FROM tbl_produk join tbl_kategori on produk_kategori_id=kategori_id ORDER BY produk_id DESC limit 4");
	// 	return $hsl;
	// }

	// function get_produk_by_kategori_id($idkategori)
	// {
	// 	$hsl = $this->db->query("SELECT tbl_produk.*,DATE_FORMAT(produk_tanggal,'%d/%m/%Y') AS tanggal,kategori_nama FROM tbl_produk join tbl_kategori on produk_kategori_id=kategori_id where produk_kategori_id='$idkategori' ORDER BY produk_id DESC");
	// 	return $hsl;
	// }

	// public function view_by_month($month, $year)
	// {
	// 	$this->db->where('MONTH(produk_tanggal)', $month); // Tambahkan where bulan
	// 	$this->db->where('YEAR(produk_tanggal)', $year); // Tambahkan where tahun
	// 	return $this->db->get('tbl_produk')->result(); // Tampilkan data transaksi sesuai bulan dan tahun yang diinput oleh user pada filter
	// }

	// public function view_by_year($year)
	// {
	// 	$this->db->where('YEAR(produk_tanggal)', $year); // Tambahkan where tahun
	// 	return $this->db->get('tbl_produk')->result(); // Tampilkan data transaksi sesuai tahun yang diinput oleh user pada filter
	// }

	// public function option_tahun()
	// {
	// 	$this->db->select('YEAR(produk_tanggal) AS tahun'); // Ambil Tahun dari field tgl
	// 	$this->db->from('tbl_produk'); // select ke tabel transaksi
	// 	$this->db->order_by('YEAR(produk_tanggal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
	// 	$this->db->group_by('YEAR(produk_tanggal)'); // Group berdasarkan tahun pada field tgl
	// 	return $this->db->get()->result(); // Ambil data pada tabel transaksi sesuai kondisi diatas
	// }

	//get new product with limit 8
	function get_new_product()
	{
		$this->db->join('tbl_kategori', 'kategori_id = produk_kategori_id', 'left');
		$this->db->limit(8);
		$this->db->order_by('produk_id', 'DESC');
		return $this->db->get('tbl_produk')->result();
	}

	// get product with pagination
	function get_product_limit($limit, $page)
	{
		$this->db->join('tbl_kategori', 'kategori_id = produk_kategori_id', 'left');
		$this->db->limit($limit, $page);
		$this->db->order_by('produk_id', 'DESC');
		return $this->db->get('tbl_produk')->result();
	}

	// get product by category
	function get_product_category($category)
	{
		$this->db->join('tbl_kategori', 'kategori_id = produk_kategori_id');
		$this->db->group_by('produk_id');
		return $this->db->get_where('tbl_produk', array('kategori_nama' => $category))->result();
	}

	// get product detail
	function get_detail_product($x)
	{
		$this->db->join('tbl_kategori', 'kategori_id = produk_kategori_id', 'left');
		return $this->db->get_where('tbl_produk', array('produk_id' => $x))->row();
	}

	function get_size_product($x)
	{
		$this->db->select('produk_id,produk_ukuran,produk_harga');
		return $this->db->get_where('tbl_produk', array('produk_id' => $x))->result();
	}

	//get related product
	function get_related_product($x)
	{
		$this->db->join('tbl_kategori', 'kategori_id=produk_kategori_id', 'left');
		$this->db->limit(8);
		return $this->db->get_where('tbl_produk', array('produk_type' => $x))->result();
	}

	//Ajax request
	function get_ajax_search($q)
	{
		$this->db->join('tbl_kategori', 'kategori_id=produk_kategori_id', 'left');
		$this->db->like('produk_id', $q, 'both');
		// $this->db->or_like('produk_type',$q,'both');
		// $this->db->or_like('kategori_nama',$q,'both');
		return $this->db->get('tbl_produk')->result();
	}

	function get_ajax_product_type($id)
	{
		$this->db->select('produk_type');
		$this->db->order_by('produk_type', 'ASC');
		$this->db->group_by('produk_type');
		return $this->db->get_where('tbl_produk', array('produk_kategori_id' => $id))->result();
	}
}
