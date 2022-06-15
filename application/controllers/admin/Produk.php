<?php
class Produk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if (!isset($_SESSION['logged_in'])) {
			redirect(base_url('administrator'));
		};

		if ($this->session->userdata('level') != 1) {
			redirect(base_url('admin/dashboard'));
		}

		$this->load->model('m_subkategori');
		$this->load->model('m_produk');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

	function filter($kategori)
	{

		$x['data'] = $this->m_produk->get_all_produk_filter($kategori);
		$x['alb'] = $this->m_subkategori->get_all_kategori();
		$this->load->view('admin/v_produk', $x);
	}


	function index()
	{
		// if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
		// 	$filter = $_GET['filter']; // Ambil data filder yang dipilih user

		// 	if ($filter == '1') { // Jika filter nya 1 (per tanggal)
		// 		$tgl = $_GET['tanggal'];

		// 		$ket = 'Data Transaksi Tanggal ' . date('d-m-y', strtotime($tgl));
		// 		$url_cetak = 'transaksi/cetak?filter=1&tahun=' . $tgl;
		// 		$transaksi = $this->TransaksiModel->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
		// 	} else if ($filter == '2') {
		// 		$bulan = $_GET['bulan'];
		// 		$tahun = $_GET['tahun'];
		// 		$nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

		// 		$ket = 'Data Transaksi Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
		// 		$url_cetak = 'transaksi/cetak?filter=2&bulan=' . $bulan . '&tahun=' . $tahun;
		// 		$transaksi = $this->TransaksiModel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
		// 	} else { // Jika filter nya 3 (per tahun)
		// 		$tahun = $_GET['tahun'];

		// 		$ket = 'Data Transaksi Tahun ' . $tahun;
		// 		$url_cetak = 'transaksi/cetak?filter=3&tahun=' . $tahun;
		// 		$transaksi = $this->TransaksiModel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
		// 	}
		// } else { // Jika user tidak mengklik tombol tampilkan
		// 	$ket = 'Semua Data Transaksi';
		// 	$url_cetak = 'transaksi/cetak';
		// 	$transaksi = $this->m_produk->get_all_produk(); // Panggil fungsi view_all yang ada di TransaksiModel
		// }

		// $data['ket'] = $ket;
		// $data['transaksi'] = $transaksi;
		// $data['option_tahun'] = $this->m_produk->option_tahun();

		$x['data'] = $this->m_produk->get_all_produk();
		$x['alb'] = $this->m_subkategori->get_all_kategori();
		$this->load->view('admin/v_produk', $x);
	}


	function simpan_kelas()
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
				$kelas_nama = strip_tags($this->input->post('nama_kelas'));
				$kelas_deskripsi = strip_tags($this->input->post('deskripsi_kelas'));
				$kode = $this->session->userdata('idadmin');
				$user = $this->m_pengguna->get_pengguna_login($kode);
				$p = $user->row_array();
				$user_id = $p['pengguna_id'];
				$user_nama = $p['pengguna_nama'];
				$produk_kategori = strip_tags($this->input->post('kategori'));
				$this->m_produk->simpan_kelas($kelas_nama, $produk_kategori, $kelas_deskripsi, $user_id, $user_nama, $gambar);
				echo $this->session->set_flashdata('msg', 'success');
				redirect('admin/produk');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/produk');
			}
		} else {
			redirect('admin/produk');
		}
	}


	function update_kelas()
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
				$kelas_id = $this->input->post('kode');

				// $subkategori_nama = strip_tags($this->input->post('subkategori_nama'));
				// $subkategori_deskripsi = strip_tags($this->input->post('subkategori_deskripsi'));

				$kelas_nama = $this->input->post('kelas_nama');
				$kelas_deskripsi = $this->input->post('kelas_deskripsi');

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
				$this->m_produk->update_kelas($kelas_id, $kelas_nama, $produk_kategori, $kelas_deskripsi, $gambar);
				echo $this->session->set_flashdata('msg', 'info');
				redirect('admin/produk');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/produk');
			}
		} else {
			$kelas_id = $this->input->post('kode');
			// $subkategori_nama = strip_tags($this->input->post('subkategori_nama'));
			$kelas_nama = $this->input->post('kelas_nama');
			$kelas_deskripsi = strip_tags($this->input->post('kelas_deskripsi'));
			$kode = $this->session->userdata('idadmin');
			$user = $this->m_pengguna->get_pengguna_login($kode);
			$p = $user->row_array();
			$user_id = $p['pengguna_id'];
			$user_nama = $p['pengguna_nama'];
			$produk_kategori = $this->input->post('kategori');
			// $this->m_subkategori->update_subkategori_tanpa_img($subkategori_id, $subkategori_nama, $produk_kategori, $subkategori_deskripsi, $user_id, $user_nama);
			$this->m_produk->update_kelas_tanpa_img($kelas_id, $kelas_nama, $produk_kategori, $kelas_deskripsi);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/produk');
		}
	}



	function update_produk()
	{

		$config['upload_path'] = './assets/user/images/produk/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['filefoto']['name'])) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/user/images/produk/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['max_width']   = 1500;
				$config['max_height']  = 1500;
				$config['new_image'] = './assets/user/images/produk/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$produk_gambar = $gbr['file_name'];
				$produk_id = $this->input->post('kode');
				$produk_nama = strip_tags($this->input->post('judul'));
				$produk_slug = url_title($this->input->post('judul'), '-', true);
				$produk_deskripsi = $this->input->post('deskripsi');
				$produk_kategori = strip_tags($this->input->post('kategori'));
				$produk_gambar = $this->input->post('gambar');
				$path = './assets/user/images/produk/' . $produk_gambar;
				unlink($path);
				$this->m_produk->update_produk($produk_id, $produk_slug, $produk_nama,  $produk_kategori, $produk_gambar, $produk_deskripsi);
				$this->session->set_flashdata('msg', 'info');
				redirect('admin/produk');
			} else {
				echo $this->session->set_flashdata('msg', 'warning');
				redirect('admin/produk');
			}
		} else {
			$produk_id = $this->input->post('kode');
			$judul = strip_tags($this->input->post('judul'));
			$slug = url_title($this->request->getVar('judul'), '-', true);
			$deskripsi = $this->input->post('deskripsi');
			$author = $this->input->post('author');
			$kategori = strip_tags($this->input->post('kategori'));
			$kode = $this->session->userdata('idadmin');
			$user = $this->m_pengguna->get_pengguna_login($kode);
			$p = $user->row_array();
			$user_id = $p['pengguna_id'];
			$user_nama = $p['pengguna_nama'];
			$this->m_produk->update_produk_tanpa_img($produk_id, $judul, $slug, $deskripsi, $author, $kategori, $user_id, $user_nama);
			echo $this->session->set_flashdata('msg', 'info');
			redirect('admin/produk');
		}
	}


	function hapus_kelas()
	{
		$kode = $this->input->post('kode');
		$gambar = $this->input->post('gambar');
		$path = './assets/user/images/galeri/all_produk/' . $gambar;
		unlink($path);
		$this->m_produk->hapus_kelas($kode);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/produk');
	}

	function hapus_produk()
	{
		$kode = $this->input->post('kode');
		$kategori = $this->input->post('kategori');
		$gambar = $this->input->post('gambar');
		$path = './assets/user/images/produk/' . $gambar;
		unlink($path);
		$this->m_produk->hapus_produk($kode, $kategori);
		echo $this->session->set_flashdata('msg', 'success-hapus');
		redirect('admin/produk');
	}

	public function cetak()
	{
		if (isset($_GET['filter']) && !empty($_GET['filter'])) { // Cek apakah user telah memilih filter dan klik tombol tampilkan
			$filter = $_GET['filter']; // Ambil data filder yang dipilih user

			if ($filter == '1') { // Jika filter nya 1 (per tanggal)
				$tgl = $_GET['tanggal'];

				$ket = 'Data Transaksi Tanggal ' . date('d-m-y', strtotime($tgl));
				$transaksi = $this->TransaksiModel->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di TransaksiModel
			} else if ($filter == '2') { // Jika filter nya 2 (per bulan)
				$bulan = $_GET['bulan'];
				$tahun = $_GET['tahun'];
				$nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

				$ket = 'Data Transaksi Bulan ' . $nama_bulan[$bulan] . ' ' . $tahun;
				$transaksi = $this->TransaksiModel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
			} else { // Jika filter nya 3 (per tahun)
				$tahun = $_GET['tahun'];

				$ket = 'Data Transaksi Tahun ' . $tahun;
				$transaksi = $this->TransaksiModel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
			}
		} else { // Jika user tidak mengklik tombol tampilkan
			$ket = 'Semua Data Transaksi';
			$transaksi = $this->TransaksiModel->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
		}

		$data['ket'] = $ket;
		$data['transaksi'] = $transaksi;

		ob_start();
		$this->load->view('print', $data);
		$html = ob_get_contents();
		ob_end_clean();

		require_once('./assets/html2pdf/html2pdf.class.php');
		// $pdf = new HTML2PDF('P', 'A4', 'en');
		$pdf->WriteHTML($html);
		$pdf->Output('Data Transaksi.pdf', 'D');
	}

	function pdf()
	{
		if (!isset($_GET['kategori']) || $_GET['kategori'] == "all") {
			$x['produk'] = $this->m_produk->get_all_produk()->result();
		} else {
			$x['produk'] = $this->m_produk->get_produk_by_kategori_id($_GET['kategori'])->result();
		}

		$html = $this->load->view('reports/produk_report', $x, true);
		$this->pdf->generate($html, "Laporan Data Produk");
	}

	function ajax_get_type($id)
	{
		$data = $this->m_produk->get_ajax_product_type($id);
		if (empty($data)) echo 'empty';
		foreach ($data as $d) {
			echo "<option>" . $d->produk_type . "</option>";
		}
	}

	function base64toimage($data)
	{
		$b64 = explode(',', $data);
		$bin = base64_decode($b64[1]);
		$im  = imageCreateFromString($bin);
		if (!$im) {
			die('Base64 value is not a valid image');
		}
		$img_file = './assets/user/images/produk/filename.png';
		imagepng($im, $img_file, 0);
	}
}
