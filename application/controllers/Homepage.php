<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

	public function __construct()
	{
		Parent::__construct();
		// 		$this->load->model('M_produk');
		$this->load->model('M_pengunjung');
		$this->load->model('M_pelanggan');
		$this->load->model('M_galeri');

		//count pengunjung
		$this->M_pengunjung->count_visitor();
	}

	public function index()
	{
		// 		$x['produk'] 	= $this->M_produk->get_new_product();
		$x['paginasi']	= $this->paginasi(12);
		$this->load->view('user/home', $x);
	}

	public function kategori($name, $produk = null)
	{
		// $category		= str_replace('s plus','s-plus', str_replace('-',' ',$name));
		// $x['title']		= strtoupper($category);
		// $x['produk'] 	= $this->M_produk->get_product_category($category);
		// $this->load->view('user/produk_kategori',$x);

		if ($name == 's-plus-pintu') {
			if (empty($produk)) {
				$this->load->view('user/produk/pintu/v_kategori_pintu');
			} else if ($produk == 'abs') {                                                         //abs door routes Group
				$this->load->view('user/produk/pintu/abs_door/v_kategori_abs');
			} else if ($produk == 'classic') {
				$this->load->view('user/produk/pintu/abs_door/v_pintu_classic');
			} else if ($produk == 'fortebello') {
				$this->load->view('user/produk/pintu/abs_door/v_pintu_fortebello');
			} else if ($produk == 'premium') {
				$this->load->view('user/produk/pintu//abs_door/premium/v_kategori_premium');
			} else if ($produk == 'premium-general') {
				$this->load->view('user/produk/pintu/abs_door/premium/v_pintu_premium');
			} else if ($produk == 'premium-deco') {
				$this->load->view('user/produk/pintu/abs_door/premium/v_pintu_premium_deco');
			} else if ($produk == 'grande') {
				$this->load->view('user/produk/pintu/abs_door/premium/v_pintu_grande');
			} else if ($produk == 'upvc') {                                                           //upvc door routes Group
				$this->load->view('user/produk/pintu/upvc_door/v_kategori_upvc');
			} else if ($produk == 'felice') {                                                           //upvc door routes Group
				$this->load->view('user/produk/pintu/upvc_door/v_pintu_felice');
			} else if ($produk == 'art-door') {
				$this->load->view('user/produk/pintu/abs_door/v_pintu_art_door');
			} else if ($produk == 'exterior-door') {
				$this->load->view('user/produk/pintu/abs_door/v_pintu_exterior_door');
			} else if ($produk == 'kusen') {
				$this->load->view('user/produk/pintu/v_pintu_kusen');
			} else if ($produk == 'aksesoris-pintu') {
				$this->load->view('user/produk/pintu/v_pintu_aksesoris');
			} else if ($produk == 'namo') {
				$this->load->view('user/produk/pintu/namo_door/v_kategori_namo');
			} else if ($produk == 'iroom_door') {
				$this->load->view('user/produk/pintu/iroom_door/v_kategori_iroom');
			} else if ($produk == 'room') {
				$this->load->view('user/produk/pintu/iroom_door/v_iroom_door');
			} else if ($produk == 'armour') {
				$this->load->view('user/produk/pintu/iroom_door/v_iroom_armour');
			} else if ($produk == 'syn') {
				$this->load->view('user/produk/pintu/iroom_door/v_iroom_syn');
			} else if ($produk == 'coming') {
				$this->load->view('user/produk/pintu/iroom_door/v_comingsoon');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-upvc-jendela') {
			if (empty($produk)) {
				$this->load->view('user/produk/jendela/v_kategori_jendela');
			} else if ($produk == 'kaca-mati') {
				$this->load->view('user/produk/jendela/v_jendela_fixed');
			} else if ($produk == 'jungkit') {
				$this->load->view('user/produk/jendela/v_jendela_jungkit');
			} else if ($produk == 'sliding') {
				$this->load->view('user/produk/jendela/v_jendela_sliding');
			} else if ($produk == 'kombinasi') {
				$this->load->view('user/produk/jendela/v_jendela_kombinasi');
			} else if ($produk == 'swing') {
				$this->load->view('user/produk/jendela/v_jendela_swing');
			} else if ($produk == 'balcon') {
				$this->load->view('user/produk/jendela/v_jendela_balcon');
			} else if ($produk == 'kombinasi') {
				$this->load->view('user/produk/jendela/v_jendela_kombinasi');
			} else if ($produk == 'jendela_upvc') {
				$this->load->view('user/produk/jendela/v_kategori_jendela_upvc');
			} else if ($produk == 'jendela_IROOM') {
				$this->load->view('user/produk/jendela/v_kategori_jendela_iroom');
			} else if ($produk == 'window') {
				$this->load->view('user/produk/jendela/iroom_jendela/v_iroom_window');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-interior-material') {
			if (empty($produk)) {
				$this->load->view('user/produk/interior-material/v_kategori_inlife');
			} else if ($produk == 'plafon_upvc') {
				$this->load->view('user/produk/interior-material/plafon/v_kategori_plafon_upvc');
			} else if ($produk == 'polos') {
				$this->load->view('user/produk/interior-material/plafon/v_plafon_polos');
			} else if ($produk == 'laminate') {
				$this->load->view('user/produk/interior-material/plafon/v_plafon_laminate');
			} else if ($produk == 'deco') {
				$this->load->view('user/produk/interior-material/plafon/v_plafon_deco');
			} else if ($produk == 'plafon') {
				$this->load->view('user/produk/interior-material/plafon/v_splus_plafon');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-wpc') {
			if (empty($produk)) {
				$this->load->view('user/produk/v_splus_wpc');
			} else if ($produk == 'deck-tile') {
				$this->load->view('user/produk/wpc/v_wpc_deck');
			} else if ($produk == 'wall-partition') {
				$this->load->view('user/produk/wpc/v_wpc_wall');
			} else if ($produk == 'wpc_kategori') {
				$this->load->view('user/produk/wpc/v_kategori_wpc');
			} else if ($produk == 'wpc') {
				$this->load->view('user/produk/wpc/v_kategori_outlife');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-sun-shade') {
			if (empty($produk)) {
				$this->load->view('user/produk/v_splus_shade'); //gk kepake
			} else if ($produk == 'alumunium') {
				$this->load->view('user/produk/interior-material/shade/v_shade_aluminium');
			} else if ($produk == 'blackout') {
				$this->load->view('user/produk/interior-material/shade/v_shade_blackout');
			} else if ($produk == 'combi') {
				$this->load->view('user/produk/interior-material/shade/v_shade_combi');
			} else if ($produk == 'honeycomb') {
				$this->load->view('user/produk/interior-material/shade/v_shade_honey');
			} else if ($produk == 'roll-screen') {
				$this->load->view('user/produk/interior-material/shade/v_shade_roll_screen');
			} else if ($produk == 'vertical') {
				$this->load->view('user/produk/interior-material/shade/v_shade_vertical');
			} else if ($produk == 'wood') {
				$this->load->view('user/produk/interior-material/shade/v_shade_wood');
			} else if ($produk == 'sun-screen') {
				$this->load->view('user/produk/interior-material/shade/v_shade_sun_screen');
			} else if ($produk == 'sun-shead') {
				$this->load->view('user/produk/interior-material/shade/v_kategori_sunshade');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-solid-surface') {
			if (empty($produk)) {
				$this->load->view('user/produk/v_splus_solid'); //gk kepake
			} else if ($produk == 'chip') {
				$this->load->view('user/produk/interior-material/solid/v_solid_chip');
			} else if ($produk == 'deco') {
				$this->load->view('user/produk/interior-material/solid/v_solid_deco');
			} else if ($produk == 'solid') {
				$this->load->view('user/produk/interior-material/solid/v_kategori_solid');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-kitchen-set') {
			if (empty($produk)) {
				$this->load->view('user/produk/interior-material/v_splus_kitchen');
			}
		} elseif ($name == 's-plus-face-mask') {
			// $this->load->view('user/produk/masker/v_kategori_masker');
			if (empty($produk)) {
				$this->load->view('user/produk/masker/v_kategori_masker');
			} else if ($produk == 'dewasa') {
				$this->load->view('user/produk/masker/v_splus_face_mask_dewasa');
			} else if ($produk == 'anak') {
				$this->load->view('user/produk/masker/v_splus_face_mask_anak');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-namo-pintu') {
			if (empty($produk)) {
				$this->load->view('user/produk/v_splus_namo');
			} else if ($produk == 'namo_eco') {
				$this->load->view('user/produk/pintu/namo_door/v_splus_eco');
			} else if ($produk == 'namo_laminate') {
				$this->load->view('user/produk/pintu/namo_door/v_splus_laminate');
			} else if ($produk == 'namo_vaneer') {
				$this->load->view('user/produk/pintu/namo_door/v_splus_vaneer');
			} else if ($produk == 'namo_timber') {
				$this->load->view('user/produk/pintu/namo_door/v_splus_timber');
			} else if ($produk == 'namo_artdoor') {
				$this->load->view('user/produk/pintu/namo_door/v_splus_artdoor');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-pvc-foam-board') {
			if (empty($produk)) {
				$this->load->view('user/produk/interior-material/v_splus_pvc_foam_board');
			} else if ($produk == 'ambalan') {
				$this->load->view('user/produk/interior-material/ambalan/v_ambalan');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-vinyl-flooring') {
			if (empty($produk)) {
				$this->load->view('user/produk/v_splus_vinyl'); //gk kepake
			} else if ($produk == 'vinyl-flooring') {
				$this->load->view('user/produk/interior-material/vinyl-flooring/v_vinyl_flooring');
			} else if ($produk == 'woven-vinyl-flooring') {
				$this->load->view('user/produk/interior-material/vinyl-flooring/v_woven_vinyl_flooring');
			} else if ($produk == 'vinyl_kategori') {
				$this->load->view('user/produk/interior-material/vinyl-flooring/v_kategori_vinyl');
			} else {
				return redirect(base_url());
			}
		} elseif ($name == 's-plus-iroom') {
			if (empty($produk)) {
				$this->load->view('user/produk/v_splus_iroom');
			} else {
				redirect(base_url());
			}
		} elseif ($name == 's-plus-upvc-pintu') {
			if (empty($produk)) {
				$this->load->view('user/produk/v_splus_upvc');
			} else if ($produk == 'upvc_felice') {
				$this->load->view('user/produk/pintu/upvc_door/v_splus_upvc_felice');
			} else if ($produk == 'upvc_sash') {
				$this->load->view('user/produk/pintu/upvc_door/v_splus_upvc_sash');
			} else {
				redirect(base_url());
			}
		} else {
			return redirect(base_url());
		}
	}

	public function produk($name = null)
	{
		if (!empty($name) && !is_numeric($name) && $name != "all") :
			// Detail produk
			$type 				= $this->db->get_where('tbl_produk', array('produk_judul' => str_replace('-', ' ', $name)))->row();
			$x['produk'] 		= $this->M_produk->get_detail_product(str_replace('-', ' ', $name));
			$x['produk_lain']	= $this->M_produk->get_related_product($type->produk_type);
			$x['ukuran']		= $this->M_produk->get_size_product(str_replace('-', ' ', $name));
			if (!empty($x['produk'])) {
				$this->load->view('user/produk_detail', $x);
			} else {
				return redirect(base_url());
			}

		elseif (is_numeric($name) || $name == "all") :
			$x['paginasi']		= $this->paginasi(20);
			$this->load->view('user/produk', $x);

		else :
			return redirect(base_url());
		endif;
	}

	public function cart()
	{
		$this->load->view('user/produk_cart');
	}

	public function hubungi_kami()
	{
		$this->load->view('user/contact');
	}

	public function katalog($katalog = null)
	{
		if (empty($katalog)) {
			$this->load->view('user/katalog/index');
		} else {
			if (!$katalog == 'pintu') {
				return redirect(base_url());
			}

			$this->load->view('user/katalog/' . $katalog);
		}
	}

	public function tentang_kami()
	{
		$this->load->view('user/tentang_kami');
	}

	public function karire()
	{
		$this->load->view('user/karir');
	}

	public function pemesanan()
	{
		$this->load->view('user/pemesanan');
	}

	//----------E-commerce-------------//

	public function Ecommerce()
	{
		// $this->load->view('user/v_perbaikan');
		$this->load->view('ecommerce/v_ecommerce');
	}

	public function product_pintu()
	{

		$this->load->view('ecommerce/v_product_pintu');
	}

	public function product_window()
	{
		$this->load->view('ecommerce/v_product_window');
	}

	public function product_interior()
	{
		$this->load->view('ecommerce/v_product_interior');
	}

	public function product_exterior()
	{
		$this->load->view('ecommerce/v_product_exterior');
	}

	public function product_aksesoris()
	{
		$this->load->view('ecommerce/v_product_aksesoris');
	}

	public function product_masker()
	{
		$this->load->view('ecommerce/v_product_masker');
	}

	public function product_all()
	{
		$this->load->view('ecommerce/v_product_all');
	}

	public function contact()
	{
		$this->load->view('ecommerce/contact');
	}

	public function testimoni()
	{
		$this->load->view('ecommerce/v_testimoni');
	}

	//----------End-------------//



	public function v_kategori()
	{
		$this->load->view('user/v_kategori');
	}

	public function get_all_product()
	{
		$data = $this->db->select('*')
			->from('tbl_kategoriproduk')
			->order_by('id_kategori_produk', 'desc')
			->get()
			->result();
		return $data;
	}

	public function galeri($q = null, $sq = null)
	{
		if ($q == 'splus-pintu-abs-upvc' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'pintu');
			$this->load->view('user/galeri/pintu', $data);
		} elseif ($q == 'namo' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'namo');
			$this->load->view('user/galeri/namo', $data);
		} elseif ($q == 'splus-jendela-upvc' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'jendela');
			$this->load->view('user/galeri/jendela', $data);
		} elseif ($q == 'splus-plafon' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'plafon');
			$this->load->view('user/galeri/plafon', $data);
		} elseif ($q == 'splus-wpc' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'wpc');
			$this->load->view('user/galeri/wpc', $data);
		} elseif ($q == 'splus-sun-shade' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'shade');
			$this->load->view('user/galeri/shade', $data);
		} elseif ($q == 'splus-solid-surface' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'solid');
			$this->load->view('user/galeri/solid', $data);
		} elseif ($q == 'splus-kitchen-set' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'kitchen');
			$this->load->view('user/galeri/kitchen', $data);
		} elseif ($q == 'aktifitas' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'aktifitas');
			$this->load->view('user/galeri/aktifitas', $data);
		} elseif ($q == 'aktifitas' && !empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'aktifitas', $sq);
			$this->load->view('user/galeri/sub_aktifitas', $data);
		} elseif ($q == 'project' && empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'project');
			$this->load->view('user/galeri/project', $data);
		} elseif ($q == 'project' && !empty($sq)) {
			$data['galeri'] = $this->M_galeri->get_galeri_web($q = 'project', $sq);
			$this->load->view('user/galeri/sub_project', $data);
		} else {
			$this->load->view('user/galeri');
		}
	}

	public function galeri_video()
	{
		$this->load->view('user/galeri_video');
	}

	public function standar_pengukuran()
	{
		$this->load->view('user/standar_pengukuran');
	}

	public function karir()
	{
		$this->load->view('user/karir');
	}
	public function detail_kategori()
	{
		$this->load->view('user/produk/v_splus_door');
	}
	// extended controller
	public function paginasi($limit)
	{

		$config['base_url'] = base_url('produk');
		$config['total_rows'] = $this->db->get('tbl_produk')->num_rows();
		$config['per_page'] = $limit;
		$config['uri_segment'] = 2;
		$config['num_links'] = 3;

		// Style Pagination
		$config['full_tag_open']   = '<ul class="pagination">';
		$config['full_tag_close']  = '</ul>';

		$config['first_link']      = 'First';
		$config['first_tag_open']  = '<li>';
		$config['first_tag_close'] = '</li>';

		$config['last_link']       = 'Last';
		$config['last_tag_open']   = '<li>';
		$config['last_tag_close']  = '</li>';

		$config['next_link']       = '<i class="fa fa-angle-right"></i>';
		$config['next_tag_open']   = '<li>';
		$config['next_tag_close']  = '</li>';

		$config['prev_link']       = '<i class="fa fa-angle-left"></i>';
		$config['prev_tag_open']   = '<li>';
		$config['prev_tag_close']  = '</li>';

		$config['cur_tag_open']    = '<li class="active"><a href="#">';
		$config['cur_tag_close']   = '</a></li>';

		$config['num_tag_open']    = '<li>';
		$config['num_tag_close']   = '</li>';

		$this->pagination->initialize($config); // Set config
		$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		$data['pagination'] = $this->pagination->create_links();
		// 		$data['produk_limit'] = $this->M_produk->get_product_limit($config['per_page'],$page);
		return $data;
	}

	public function notfound()
	{
		$this->load->view('error_page');
	}

	public function instalasi($page = null)
	{
		if ($page == "pintu") {
			$this->load->view('user/pemasangan/pemasangan_pintu');
		} else
		if ($page == "jendela") {
			$this->load->view('user/pemasangan/pemasangan_jendela');
		} else
		if ($page == "plafon") {
			$this->load->view('user/pemasangan/pemasangan_plafon');
		} else
		if ($page == "sunshade") {
			$this->load->view('user/pemasangan/pemasangan_sunshade');
		} else
		if ($page == "splus") {
			$this->load->view('user/pemasangan/pemasangan');
		} else
		if ($page == "wpc") {
			$this->load->view('user/pemasangan/pemasangan_wpc');
		} else
		if ($page == "kitchen-set") {
			$this->load->view('user/pemasangan/pemasangan_kitchen');
		} else {
			return redirect(base_url());
		}
	}

	public function showroom($cabang = null)
	{
		if ($cabang == "gallery-jakarta") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'jabodetabek') : '');
			$this->load->view('user/showroom/jakarta');
		} else
		if ($cabang == "gallery-bekasi") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'jabodetabek') : '');
			$this->load->view('user/showroom/bekasi');
		} else
		if ($cabang == "gallery-cibubur") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'jabodetabek') : '');
			$this->load->view('user/showroom/cibubur');
		} else
		if ($cabang == "gallery-tangerang") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'jabodetabek') : '');
			$this->load->view('user/showroom/tangerang');
		} else
		if ($cabang == "gallery-cawang") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'jabodetabek') : '');
			$this->load->view('user/showroom/cawang');
		} else
		if ($cabang == "gallery-bogor") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'jabodetabek') : '');
			$this->load->view('user/showroom/bogor');
		} else
		if ($cabang == "gallery-medan") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'medan') : '');
			$this->load->view('user/showroom/medan');
		} else
		if ($cabang == "gallery-bandung1") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'bandung') : '');
			$this->load->view('user/showroom/bandung_satu');
		} else
		if ($cabang == "gallery-bandung2") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'bandung') : '');
			$this->load->view('user/showroom/bandung_dua');
		} else
		if ($cabang == "gallery-jogjakarta") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'yogyakarta') : '');
			$this->load->view('user/showroom/jogja');
		} else
		if ($cabang == "gallery-semarang") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'semarang') : '');
			$this->load->view('user/showroom/semarang');
		} else
		if ($cabang == "gallery-bali") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'bali') : '');
			$this->load->view('user/showroom/bali');
		} else
		if ($cabang == "gallery-surabaya1") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'surabaya') : '');
			$this->load->view('user/showroom/surabaya_satu');
		} else
		if ($cabang == "gallery-surabaya2") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'surabaya') : '');
			$this->load->view('user/showroom/surabaya_dua');
		} else
		if ($cabang == "gallery-palembang") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'palembang') : '');
			$this->load->view('user/showroom/palembang');
		} else
		if ($cabang == "gallery-cirebon") {
			(!empty($cabang) ? $this->session->set_userdata('showroom-list', 'cirebon') : '');
			$this->load->view('user/showroom/cirebon');
		} else {
			return redirect(base_url());
		}
	}

	public function kebijakan_privasi()
	{
		$this->load->view('user/kebijakan_privasi');
	}

	public function syarat_ketentuan()
	{
		$this->load->view('user/syarat_ketentuan');
	}

	public function faq()
	{
		$this->load->view('user/faq');
	}

	public function resetpassword($token = null)
	{
		if (empty($token)) {
			if ($_POST) {
				$cek = $this->M_pelanggan->profile($_POST['email']);
				if (!empty($cek) && $cek->pelanggan_status != 'verify') {

					$email	= $_POST['email'];
					$kode 	= rand(100000, 999999);
					$token 	= base64_encode($email . "," . $kode);

					$update_token = array(
						'pelanggan_token' 	=> $kode,
						'pelanggan_email'	=> $email
					);

					$this->M_pelanggan->update($update_token);
					$this->email->from('support@splusindonesia.com', 'Support Splus Indonesia');
					$this->email->to($email);
					$this->email->subject('Konfirmasi reset password');
					$message = "Untuk melanjutkan proses reset password, silahkan klik link dibawah ini : <br>
								<a href=\"" . base_url('recovery/') . $token . "\" target=\"_blank\">verifikasi</a>";

					$this->email->message($message);
					if ($this->email->send()) {
						$this->session->set_flashdata('msg', '<span class="alert alert-success"><i class="fa fa-check"></i> Email konfirmasi berhasil dikirimkan.</span>');
						return redirect(base_url('recovery'));
					} else {
						$this->session->set_flashdata('msg', '<span class="alert alert-danger"><i class="fa fa-remove"></i> Terjadi kesalahan, coba lagi!</span>');
						return redirect(base_url('recovery'));
					}
				} else {
					$this->session->set_flashdata('msg', '<span class="alert alert-danger"><i class="fa fa-remove"></i> Email tidak terdaftar atau akun belum aktif.</span>');
					return redirect(base_url('recovery'));
				}
			} else {
				$this->load->view('user/reset_password');
			}
		} else {
			if (!$_POST) {
				$split 	= explode(",", base64_decode($token));
				$cek	= $this->M_pelanggan->login($split[0]);
				if (!empty($cek) && $cek->pelanggan_token == $split[1]) {
					$x['email']		= $split[0];
					$x['token']		= $token;
					$this->load->view('user/new_password', $x);
				} else {
					return redirect(base_url());
				}
			} else {
				$data = array(
					'pelanggan_email'	=> $_POST['email'],
					'pelanggan_password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
					'pelanggan_token'	=> rand(100000, 999999)
				);

				$update = $this->M_pelanggan->update($data);
				if ($update) {
					$get_data  = $this->M_pelanggan->login($_POST['email']);
					$session = array(
						'user_id'   => $get_data->pelanggan_id,
						'nama'      => $get_data->pelanggan_nama,
						'username'  => $get_data->pelanggan_username,
						'email'     => $get_data->pelanggan_email,
						'telpon'    => $get_data->pelanggan_telpon,
						'user_login' => TRUE
					);

					$this->session->set_userdata($session);
					return redirect(base_url('akun'));
				} else {
					return redirect(base_url());
				}
			}
		}
	}

	// Login and Signup
	public function login()
	{
		($this->session->userdata('user_login') ? redirect('akun') : $this->load->view('user/login'));
	}

	public function store_login()
	{

		$username   = strip_tags(str_replace("'", "", $this->input->post('username', TRUE)));
		$password   = strip_tags(str_replace("'", "", $this->input->post('password', TRUE)));
		$cek        = $this->M_pelanggan->login($username);
		if (!empty($cek)) {
			$hash   = $cek->pelanggan_password;
			if (password_verify($password, $hash)) {
				$session = array(
					'user_id'   => $cek->pelanggan_id,
					'nama'      => $cek->pelanggan_nama,
					'username'  => $cek->pelanggan_username,
					'email'     => $cek->pelanggan_email,
					'telpon'    => $cek->pelanggan_telpon,
					'user_login' => TRUE
				);

				$this->db->update('tbl_pelanggan', array('pelanggan_token' => rand(111111, 999999)));
				$this->session->set_userdata($session);
				return redirect(base_url('akun'));
			} else {
				$this->session->set_flashdata('error_msg', 'Password yang dimasukan, salah!');
				return redirect(base_url('login'));
			}
		} else {
			$this->session->set_flashdata('error_msg', 'User tidak ditemukan!');
			return redirect(base_url('login'));
		}
	}

	public function verify_signup($token = null)
	{

		if (!empty($token) && !$_POST) {
			// verifikasi token
			$split 	= explode(",", base64_decode($token));
			$cek	= $this->M_pelanggan->login($split[0]);

			if (!empty($cek) && $cek->pelanggan_token == $split[1] && $cek->pelanggan_status == 'verify') {
				$x['email']		= $split[0];
				$x['token']		= $token;
				$this->load->view('user/signup', $x);
			} else {
				return redirect(base_url('login'));
			}
		} elseif ($_POST) {

			// update data ke database
			$data = array(
				'pelanggan_nama' 	=> $_POST['nama'],
				'pelanggan_telpon'	=> $_POST['telpon'],
				'pelanggan_ttl'		=> $_POST['ttl'],
				'pelanggan_provinsi' => $_POST['provinsi'],
				'pelanggan_kota'	=> $_POST['kota'],
				'pelanggan_kecamatan' => $_POST['kecamatan'],
				'pelanggan_kelurahan' => $_POST['kelurahan'],
				'pelanggan_kodepos'	=> $_POST['kodepos'],
				'pelanggan_alamat'	=> $_POST['alamat'],
				'pelanggan_email'	=> $_POST['email'],
				'pelanggan_username' => $_POST['username'],
				'pelanggan_password' => password_hash($_POST['password'], PASSWORD_BCRYPT),
				'pelanggan_token'	=> rand(100000, 999999),
				'pelanggan_status'	=> 'active'
			);

			$update = $this->M_pelanggan->update($data);
			if ($update) {
				$get_data  = $this->M_pelanggan->login($_POST['email']);
				$session = array(
					'user_id'   => $get_data->pelanggan_id,
					'nama'      => $get_data->pelanggan_nama,
					'username'  => $get_data->pelanggan_username,
					'email'     => $get_data->pelanggan_email,
					'telpon'    => $get_data->pelanggan_telpon,
					'user_login' => TRUE
				);

				$this->session->set_userdata($session);
				return redirect(base_url('akun'));
			}
		} else {
			return redirect(base_url('login'));
		}
	}

	public function store_signup()
	{

		$email	= $_POST['email'];
		$kode 	= rand(100000, 999999);
		$token 	= base64_encode($email . "," . $kode);

		$exist	= $this->M_pelanggan->login($email);
		$data 	= array(
			'pelanggan_email'		=> $email,
			'pelanggan_token' 		=> $kode,
			'pelanggan_status' 		=> 'verify'
		);

		if (empty($exist) || $exist->pelanggan_status == 'verify') {

			if (empty($exist)) {
				$this->M_pelanggan->signup($data);
			} else {
				$update_token = array(
					'pelanggan_token' 	=> $kode,
					'pelanggan_email'	=> $email
				);

				$this->M_pelanggan->update($update_token);
			}

			$this->email->from('support@splusindonesia.com', 'Support Splus Indonesia');
			$this->email->to($email);
			$this->email->subject('Konfirmasi pendaftaran akun email');
			$message = "Terimakasih telah bergabung dengan <b>S-Plus Indonesia</b><br>
						Untuk melanjutkan proses pendaftaran, silahkan klik link dibawah ini : <br>
						<a href=\"" . base_url('verify/') . $token . "\" target=\"_blank\">verifikasi</a>";

			$this->email->message($message);
			if ($this->email->send()) {
				$this->session->set_flashdata('success_signup', 'Email konfirmasi berhasil dikirim!');
				return redirect(base_url('login'));
			} else {
				$this->session->set_flashdata('error_signup', 'Terjadi kesalahan, coba lagi!');
				return redirect(base_url('login'));
			}
		} else {
			$this->session->set_flashdata('error_signup', 'Email sudah terdaftar!');
			return redirect(base_url('login'));
		}
	}

	// ajax request 
	function ajax_search($q = null)
	{
		$data 	= $this->M_produk->get_ajax_search(urldecode($q));
		if (!empty($q) && !empty($data)) {
			foreach ($data as $d) {
				$key 		= urldecode($q);
				$res_key	= $d->produk_judul;
				$res_key	= str_ireplace($key, "<b>$key</b>", $res_key);
				echo '<div><br><a href="' . base_url('produk/' . strtolower(str_replace(" ", "-", $d->produk_judul))) . '">' . $res_key . '</a></div>';
			}
		} else {
			echo "empty";
		}
	}

	// get informasi wilayah
	function ajax_wilayah($data = null, $id = null)
	{
		if ($data == 'provinsi') {
			return $this->wilayah->get_provinsi();
		} else if ($data == 'kota') {
			return $this->wilayah->get_kota($id);
		} else if ($data == 'kecamatan') {
			return $this->wilayah->get_kecamatan($id);
		} else if ($data == 'kelurahan') {
			return $this->wilayah->get_kelurahan($id);
		} else {
			return redirect(base_url());
		}
	}
}
