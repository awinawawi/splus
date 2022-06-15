<?php
class Varian extends CI_Controller
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

		$this->load->model('m_varian');
		$this->load->model('m_produk');
		$this->load->model('m_dependentSelect');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index()
	{
		$x['alb'] = $this->m_produk->get_all_produk();
		$x['data'] = $this->m_varian->get_all_varian();
		$this->load->view('admin/v_varian', $x);
	}

	function filter($kelas)
	{

		$x['data'] = $this->m_varian->get_all_varian_filter($kelas);
		$x['alb'] = $this->m_produk->get_all_produk();
		$this->load->view('admin/v_varian', $x);
	}

	//simpan varian new
	function simpan_varian_new()
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
				$varian_nama = strip_tags($this->input->post('nama_varian'));
				$varian_deskripsi = strip_tags($this->input->post('deskripsi_varian'));
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$produk_kelas = strip_tags($this->input->post('kelas'));
				$this->m_varian->simpan_varian_new($varian_nama, $produk_kelas, $varian_deskripsi, $user_id, $user_nama, $gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/varian');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/varian');
			}
		} else {
			redirect('admin/varian');
		}
	}


	function update_varian_new()
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
				$varian_id = $this->input->post('kode');

				// $subkategori_nama = strip_tags($this->input->post('subkategori_nama'));
				// $subkategori_deskripsi = strip_tags($this->input->post('subkategori_deskripsi'));

				$varian_nama = $this->input->post('varian_nama');
				$varian_deskripsi = $this->input->post('varian_deskripsi');

				$images = $this->input->post('gambar');
				$path = './assets/user/images/galeri/all_produk/' . $images;
				unlink($path);
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				// $produk_kategori = strip_tags($this->input->post('kategori'));
				$produk_kelas = $this->input->post('kelas');
				// $this->m_subkategori->update_subkategori($subkategori_id, $subkategori_nama, $produk_kategori, $subkategori_deskripsi, $user_id, $user_nama, $gambar);
				$this->m_varian->update_varian_new($varian_id, $varian_nama, $produk_kelas, $varian_deskripsi, $gambar);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/varian');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/varian');
			}
		} else {
			$varian_id = $this->input->post('kode');
			// $subkategori_nama = strip_tags($this->input->post('subkategori_nama'));
			$varian_nama = $this->input->post('varian_nama');
			$varian_deskripsi = strip_tags($this->input->post('varian_deskripsi'));
			$kode = $this->session->userdata('idadmin');
			$user = $this->m_pengguna->get_pengguna_login($kode);
			$p = $user->row_array();
			$user_id = $p['pengguna_id'];
			$user_nama = $p['pengguna_nama'];
			$produk_kelas = $this->input->post('kelas');
			// $this->m_subkategori->update_subkategori_tanpa_img($subkategori_id, $subkategori_nama, $produk_kategori, $subkategori_deskripsi, $user_id, $user_nama);
			$this->m_varian->update_varian_new_tanpa_img($varian_id, $varian_nama, $produk_kelas, $varian_deskripsi);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/varian ');
		}
	}

	function hapus_varian_new()
	{
		$kode = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$path = './assets/user/images/galeri/all_produk/' . $gambar;
		unlink($path);
		$this->m_varian->hapus_varian_new($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/varian');
	}

	//End simpan varian new



	function simpan_varian()
	{
		$config['upload_path'] = './assets/user/images/galeri/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/user/images/galeri/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 500;
				$config['height'] = 400;
				$config['new_image'] = './assets/user/images/galeri/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$varian_gambar = $gbr['file_name'];
				$varian_nama = strip_tags($this->input->post('nama_varian'));
				$varian_nama = strip_tags($this->input->post('nama_varian'));
				$kategori = strip_tags($this->input->post('kategori'));
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$varian_deskripsi = $this->input->post('deskripsi');
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$this->m_varian->simpan_varian($varian_nama, $varian_deskripsi, $user_id, $user_nama, $varian_gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/varian');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/varian');
			}
		} else {
			redirect('admin/varian');
		}
	}

	function update_varian()
	{

		$config['upload_path'] = './assets/user/images/galeri/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/user/images/galeri/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 500;
				$config['height'] = 400;
				$config['new_image'] = './assets/user/images/galeri/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name'];
				$varian_id = $this->input->post('kode');
				$varian_nama = strip_tags($this->input->post('xnama_varian'));
				$varian_deskripsi = strip_tags($this->input->post('xdeskripsi_varian'));
				$images = $this->input->post('gambar');
				$path = './assets/user/images/galeri/' . $images;
				unlink($path);
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$this->m_varian->update_varian($varian_id, $varian_nama, $varian_deskripsi, $user_id, $user_nama, $gambar);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/varian');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/varian');
			}
		} else {
			$varian_id = $this->input->post('kode');
			$varian_nama = strip_tags($this->input->post('xnama_varian'));
			$varian_deskripsi = strip_tags($this->input->post('xdeskripsi_varian'));
			$kode = $this->session->userdata('idadmin');
			$user = $this->m_pengguna->get_pengguna_login($kode);
			$p = $user->row_array();
			$user_id = $p['pengguna_id'];
			$user_nama = $p['pengguna_nama'];
			$this->m_varian->update_varian_tanpa_img($varian_id, $varian_nama, $varian_deskripsi, $user_id, $user_nama);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/varian');
		}
	}

	function hapus_varian()
	{
		$kode = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$path = './assets/user/images/galeri/' . $gambar;
		unlink($path);
		$this->m_varian->hapus_varian($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/varian');
	}

	function ambil_data()
	{
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');
		if ($modul == 'produk') {
			echo $this->m_dependentSelect->produk($id);
		}
	}
}
