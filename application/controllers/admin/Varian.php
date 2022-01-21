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
		$this->load->model('m_dependentSelect');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->m_varian->get_all_varian();
		$this->load->view('admin/v_varian', $x);
	}

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
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$this->m_varian->simpan_varian($varian_nama, $varian_deskripsi, $user_id, $user_nama, $gambar);
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
