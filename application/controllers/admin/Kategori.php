<?php
class Kategori extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
		};

		if($this->session->userdata('level') != 1){
			redirect(base_url('admin/dashboard')); 
		}

		$this->load->model('m_kategori');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->m_kategori->get_all_kategori();
		$this->load->view('admin/v_kategori',$x);
	}

	function simpan_kategori(){
				$config['upload_path'] = './assets/user/images/galeri/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                     $gbr = $this->upload->data();
	                     //Compress Image
	                     $config['image_library']='gd2';
	                     $config['source_image']='./assets/user/images/galeri/'.$gbr['file_name'];
	                     $config['create_thumb']= FALSE;
	                     $config['maintain_ratio']= FALSE;
	                     $config['quality']= '60%';
	                     $config['width']= 500;
	                     $config['height']= 400;
	                     $config['new_image']= './assets/user/images/galeri/'.$gbr['file_name'];
	                     $this->load->library('image_lib', $config);
	                     $this->image_lib->resize();

	                     $gambar=$gbr['file_name'];
											 $kategori_nama=strip_tags($this->input->post('xnama_kategori'));
											 $kategori_deskripsi=strip_tags($this->input->post('xdeskripsi_kategori'));
											 $kode=$this->session->userdata('idadmin');
											 $user=$this->m_pengguna->get_pengguna_login($kode);
											 $p=$user->row_array();
											 $user_id=$p['pengguna_id'];
											 $user_nama=$p['pengguna_nama'];
											 $this->m_kategori->simpan_kategori($kategori_nama,$kategori_deskripsi,$user_id,$user_nama,$gambar);
											 echo $this->session->set_flashdata('msg','success');
											 redirect('admin/kategori');
									}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/kategori');
	                }

	            }else{
									redirect('admin/kategori');
							}

	}

	function update_kategori(){

	            $config['upload_path'] = './assets/user/images/galeri/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/user/images/galeri/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 500;
	                        $config['height']= 400;
	                        $config['new_image']= './assets/user/images/galeri/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $gambar=$gbr['file_name'];
	                        $kategori_id=$this->input->post('kode');
	                        $kategori_nama=strip_tags($this->input->post('xnama_kategori'));
	                        $kategori_deskripsi=strip_tags($this->input->post('xdeskripsi_kategori'));
							$images=$this->input->post('gambar');
							$path='./assets/user/images/galeri/'.$images;
							unlink($path);
							$kode=$this->session->userdata('idadmin');
							$user=$this->m_pengguna->get_pengguna_login($kode);
							$p=$user->row_array();
							$user_id=$p['pengguna_id'];
							$user_nama=$p['pengguna_nama'];
							$this->m_kategori->update_kategori($kategori_id,$kategori_nama,$kategori_deskripsi,$user_id,$user_nama,$gambar);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin/kategori');

	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/kategori');
	                }

	            }else{
									$kategori_id=$this->input->post('kode');
			            $kategori_nama=strip_tags($this->input->post('xnama_kategori'));
			            $kategori_deskripsi=strip_tags($this->input->post('xdeskripsi_kategori'));
									$kode=$this->session->userdata('idadmin');
									$user=$this->m_pengguna->get_pengguna_login($kode);
									$p=$user->row_array();
									$user_id=$p['pengguna_id'];
									$user_nama=$p['pengguna_nama'];
									$this->m_kategori->update_kategori_tanpa_img($kategori_id,$kategori_nama,$kategori_deskripsi,$user_id,$user_nama);
									echo $this->session->set_flashdata('msg','info');
									redirect('admin/kategori');
	            }

	}

	function hapus_kategori(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/user/images/galeri/'.$gambar;
		unlink($path);
		$this->m_kategori->hapus_kategori($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/kategori');
	}

}
