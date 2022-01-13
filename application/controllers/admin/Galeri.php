<?php
class Galeri extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_galeri');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

	function index(){
		$x['data']=$this->m_galeri->get_all_galeri();
		$this->load->view('admin/v_galeri',$x);
	}

	function filter($kategori = 'semua'){
		$this->session->set_userdata('current_filter_url',$kategori);
		$x['data']=$this->m_galeri->get_all_galeri($kategori);
		$this->load->view('admin/v_galeri',$x);
	}

	function simpan_galeri(){

        $config['upload_path'] = './assets/user/images/galeri/'.$_POST['xkategori']; //path folder
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
                $config['source_image']='./assets/user/images/galeri/'.$_POST['xkategori'].'/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '80%';
                $config['new_image']= './assets/user/images/galeri/'.$_POST['xkategori'].'/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
				$data = array(
					'galeri_pengguna_id'	=> $this->session->userdata('idadmin'),
					'galeri_judul'			=> strip_tags($this->input->post('xjudul')),
					'galeri_gambar'			=> $gbr['file_name'],
					'galeri_kategori'		=> strip_tags($this->input->post('xkategori')),
					'galeri_subkategori'	=> strip_tags($this->input->post('xsubkategori')));

				
				$this->m_galeri->simpan_galeri($data);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/galeri/filter/'.$this->session->userdata('current_filter_url'));
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/galeri/filter/'.$this->session->userdata('current_filter_url'));
            }
        }else{
            redirect('admin/galeri/filter/'.$this->session->userdata('current_filter_url'));
        }

	}

	function update_galeri(){

	            $config['upload_path'] = './assets/user/images/galeri/'.$_POST['xkategori_edit']; //path folder
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
						$config['source_image']='./assets/user/images/galeri/'.$_POST['xkategori_edit'].'/'.$gbr['file_name'];
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '80%';
						$config['new_image']= './assets/user/images/galeri/'.$_POST['xkategori_edit'].'/'.$gbr['file_name'];
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();

						$data = array(
							'galeri_pengguna_id'	=> $this->session->userdata('idadmin'),
							'galeri_judul'			=> strip_tags($this->input->post('xjudul_edit')),
							'galeri_gambar'			=> $gbr['file_name'],
							'galeri_kategori'		=> strip_tags($this->input->post('xkategori_edit')),
							'galeri_subkategori'	=> strip_tags($this->input->post('xsubkategori_edit')));
						
						$old = $this->db->get_where('tbl_galeri',['galeri_id' => $_POST['id'], 'galeri_pengguna_id' => $this->session->userdata('idadmin')])->row();
						$path='./assets/user/images/galeri/'.$old->galeri_kategori.'/'.$old->galeri_gambar;
						unlink($path);
						$this->m_galeri->update_galeri($data,$_POST['id']);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/galeri/filter/'.$this->session->userdata('current_filter_url'));
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/galeri/filter/'.$this->session->userdata('current_filter_url'));
	                }

	            }else{
					$data = array(
						'galeri_pengguna_id'	=> $this->session->userdata('idadmin'),
						'galeri_judul'			=> strip_tags($this->input->post('xjudul_edit')),
						'galeri_kategori'		=> strip_tags($this->input->post('xkategori_edit')),
						'galeri_subkategori'	=> strip_tags($this->input->post('xsubkategori_edit')));

					$this->m_galeri->update_galeri($data,$_POST['id']);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/galeri/filter/'.$this->session->userdata('current_filter_url'));
	            }

	}

	function hapus_galeri(){
		
		$data = $this->db->get_where('tbl_galeri',['galeri_id' => $_POST['id'], 'galeri_pengguna_id' => $this->session->userdata('idadmin')])->row();
		$path='./assets/user/images/galeri/'.$data->galeri_kategori.'/'.$data->galeri_gambar;
		unlink($path);
		$this->m_galeri->hapus_galeri($_POST['id']);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/galeri/filter/'.$this->session->userdata('current_filter_url'));
	}

}
