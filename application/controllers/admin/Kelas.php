<?php
class Kelas extends CI_Controller
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

		$this->load->model('m_kelas');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index()
	{
		$x['data'] = $this->m_kelas->get_all_kelas();
		$this->load->view('admin/v_kelas', $x);
	}

	function simpan_kelas()
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
				$kelas_nama = strip_tags($this->input->post('xnama_kelas'));
				$kategori = strip_tags($this->input->post('xkategori'));
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$this->m_kelas->simpan_kelas($kelas_nama, $kelas_deskripsi, $user_id, $user_nama, $gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/kelas');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/kelas');
			}
		} else {
			redirect('admin/kelas');
		}
	}

	function update_kelas()
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
				$kelas_id = $this->input->post('kode');
				$kelas_nama = strip_tags($this->input->post('xnama_kelas'));
				$kelas_deskripsi = strip_tags($this->input->post('xdeskripsi_kelas'));
				$images = $this->input->post('gambar');
				$path = './assets/user/images/galeri/' . $images;
				unlink($path);
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$this->m_kelas->update_kelas($kelas_id, $kelas_nama, $kelas_deskripsi, $user_id, $user_nama, $gambar);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/kelas');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/kelas');
			}
		} else {
			$kelas_id = $this->input->post('kode');
			$kelas_nama = strip_tags($this->input->post('xnama_kelas'));
			$kelas_deskripsi = strip_tags($this->input->post('xdeskripsi_kelas'));
			$kode = $this->session->userdata('idadmin');
			$user = $this->m_pengguna->get_pengguna_login($kode);
			$p = $user->row_array();
			$user_id = $p['pengguna_id'];
			$user_nama = $p['pengguna_nama'];
			$this->m_kelas->update_kelas_tanpa_img($kelas_id, $kelas_nama, $kelas_deskripsi, $user_id, $user_nama);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/kelas');
		}
	}

	function hapus_kelas()
	{
		$kode = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$path = './assets/user/images/galeri/' . $gambar;
		unlink($path);
		$this->m_kelas->hapus_kelas($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/kelas');
	}
}