<?php
class M_galeri extends CI_Model
{

	function get_all_galeri($kategori = null)
	{
		if (empty($kategori) || $kategori == 'semua') :
			return 	$this->db->order_by('galeri_id', 'DESC')
				->get_where('tbl_galeri', ['galeri_pengguna_id' => $this->session->userdata('idadmin')])
				->result();
		else :
			return 	$this->db->order_by('galeri_id', 'DESC')
				->get_where('tbl_galeri', ['galeri_pengguna_id' => $this->session->userdata('idadmin'), 'galeri_kategori' => $kategori])
				->result();
		endif;
	}



	function simpan_galeri($data)
	{
		return 	$this->db->insert('tbl_galeri', $data);
	}

	function update_galeri($data, $id)
	{
		return 	$this->db->set($data)->where(['galeri_pengguna_id' => $this->session->userdata('idadmin'), 'galeri_id' => $id])
			->update('tbl_galeri');
	}

	function hapus_galeri($id)
	{
		return $this->db->delete('tbl_galeri', ['galeri_id' => $id]);
	}

	//Front-End
	function get_galeri_web($kategori, $subkategori = null)
	{
		if (empty($subkategori)) {
			if ($kategori == 'aktifitas' || $kategori == 'project') {
				return $this->db->group_by('galeri_subkategori')->get_where('tbl_galeri', ['galeri_kategori' => $kategori])->result();
			} else {
				return $this->db->get_where('tbl_galeri', ['galeri_kategori' => $kategori])->result();
			}
		} else {
			return $this->db->get_where('tbl_galeri', ['galeri_kategori' => $kategori, 'galeri_subkategori' => str_replace('-', ' ', $subkategori)])->result();
		}
	}
}
