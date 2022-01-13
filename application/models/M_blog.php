<?php
class M_blog extends CI_Model{

	function get_all_blog($kategori = null){
		if(empty($kategori) || $kategori == 'semua'):
			return 	$this->db->order_by('blog_id','DESC')
					->get_where('tbl_blog', ['blog_pengguna_id' => $this->session->userdata('idadmin')])
					->result();
		else:
			return 	$this->db->order_by('blog_id','DESC')
					->get_where('tbl_blog', ['blog_pengguna_id' => $this->session->userdata('idadmin'), 'blog_kategori' => $kategori])
					->result();
		endif;
	}

	function simpan_galeri($data){
		return 	$this->db->insert('tbl_galeri',$data);
	}

	function update_galeri($data,$id){
		return 	$this->db->set($data)->where(['galeri_pengguna_id' => $this->session->userdata('idadmin'), 'galeri_id' => $id])
				->update('tbl_galeri');
	}

	function hapus_galeri($id){
		return $this->db->delete('tbl_galeri',['galeri_id' => $id]);
	}

	//Front-End
	function get_galeri_web($kategori, $subkategori = null){
		if(empty($subkategori)){
			if($kategori == 'aktifitas'){
				return $this->db->group_by('galeri_subkategori')->get_where('tbl_galeri',['galeri_kategori' => $kategori])->result();
			}else{
				return $this->db->get_where('tbl_galeri',['galeri_kategori' => $kategori])->result();
			}
		}else{
			return $this->db->get_where('tbl_galeri',['galeri_kategori' => $kategori, 'galeri_subkategori' => str_replace('-',' ',$subkategori)])->result();
		}
	}


}
