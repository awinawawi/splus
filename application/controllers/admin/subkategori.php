<?php
class subkategori extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['logged_in'])) {
			$url = base_url('administrator');
			redirect($url);
		};

		if ($this->session->userdata('level') != 1) {
			redirect(base_url('admin/dashboard'));
		}

		$this->load->model('m_subkategori');
		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->m_subkategori->get_all_kategori();
		$x['alb'] = $this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_subkategori', $x);
	}

	function simpan_subkategori()
	{
		$config['upload_path'] = './assets/user/images/galeri/all_produk/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/user/images/galeri/all_produk/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 500;
				$config['height'] = 400;
				$config['new_image'] = './assets/user/images/galeri/all_produk/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
				$subkategori_nama = strip_tags($this->input->post('nama_kategori'));
				$subkategori_deskripsi = strip_tags($this->input->post('deskripsi_kategori'));
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$produk_kategori = strip_tags($this->input->post('kategori'));
				$this->m_subkategori->simpan_kategori($subkategori_nama, $produk_kategori, $subkategori_deskripsi, $user_id, $user_nama, $gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/subkategori');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/subkategori');
			}
		} else {
			redirect('admin/subkategori');
		}
	}

	function update_subkategori()
	{

		$config['upload_path'] = './assets/user/images/galeri/all_produk/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/user/images/galeri/all_produk/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 500;
				$config['height'] = 400;
				$config['new_image'] = './assets/user/images/galeri/all_produk/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
				$subkategori_id = $this->input->post('kode');

				// $subkategori_nama = strip_tags($this->input->post('subkategori_nama'));
				// $subkategori_deskripsi = strip_tags($this->input->post('subkategori_deskripsi'));

				$subkategori_nama = $this->input->post('subkategori_nama');
				$subkategori_deskripsi = $this->input->post('subkategori_deskripsi');

				$images = $this->input->post('gambar');
				$path = './assets/user/images/galeri/all_produk/' . $images;
				unlink($path);
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				// $produk_kategori = strip_tags($this->input->post('kategori'));
				$produk_kategori = $this->input->post('kategori');
				// $this->m_subkategori->update_subkategori($subkategori_id, $subkategori_nama, $produk_kategori, $subkategori_deskripsi, $user_id, $user_nama, $gambar);
				$this->m_subkategori->update_subkategori($subkategori_id, $subkategori_nama, $produk_kategori, $subkategori_deskripsi, $gambar);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/subkategori');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/subkategori');
			}
		} else {
			$subkategori_id = $this->input->post('kode');
			// $subkategori_nama = strip_tags($this->input->post('subkategori_nama'));
			$subkategori_nama = $this->input->post('subkategori_nama');
			$subkategori_deskripsi = strip_tags($this->input->post('subkategori_deskripsi'));
			$kode = $this->session->userdata('idadmin');
			$user = $this->m_pengguna->get_pengguna_login($kode);
			$p = $user->row_array();
			$user_id = $p['pengguna_id'];
			$user_nama = $p['pengguna_nama'];
			$produk_kategori = $this->input->post('kategori');
			// $this->m_subkategori->update_subkategori_tanpa_img($subkategori_id, $subkategori_nama, $produk_kategori, $subkategori_deskripsi, $user_id, $user_nama);
			$this->m_subkategori->update_subkategori_tanpa_img($subkategori_id, $subkategori_nama, $produk_kategori, $subkategori_deskripsi);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/subkategori');
		}
	}

	function hapus_subkategori()
	{
		$kode = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$path = './assets/user/images/galeri/all_produk/' . $gambar;
		unlink($path);
		$this->m_subkategori->hapus_subkategori($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/subkategori');
	}
}
