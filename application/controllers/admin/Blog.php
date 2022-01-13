<?php
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_blog');
		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}

	function index(){
		$x['data']=$this->m_blog->get_all_blog();
		$this->load->view('admin/v_blog',$x);
	}

	function filter($kategori = 'semua'){
		$this->session->set_userdata('current_filter_url',$kategori);
		$x['data']=$this->m_blog->get_all_blog($kategori);
		$this->load->view('admin/v_blog',$x);
	}

	function simpan_blog(){

        $config['upload_path'] = './assets/user/images/blog/'.$_POST['xkategori']; //path folder
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
                $config['source_image']='./assets/user/images/blog/'.$_POST['xkategori'].'/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '80%';
                $config['new_image']= './assets/user/images/blog/'.$_POST['xkategori'].'/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
				$data = array(
					'blog_pengguna_id'	=> $this->session->userdata('idadmin'),
					'blog_judul'			=> strip_tags($this->input->post('xjudul')),
					'blog_gambar'			=> $gbr['file_name'],
					'blog_kategori'		=> strip_tags($this->input->post('xkategori')),
					'blog_subkategori'	=> strip_tags($this->input->post('xsubkategori')));

                $this->m_blog->simpan_blog($data);
                echo $this->session->set_flashdata('msg','success');
                redirect('admin/blog/filter/'.$this->session->userdata('current_filter_url'));
            }else{
                echo $this->session->set_flashdata('msg','warning');
                redirect('admin/blog/filter/'.$this->session->userdata('current_filter_url'));
            }
        }else{
            redirect('admin/blog/filter/'.$this->session->userdata('current_filter_url'));
        }

	}

	function update_blog(){

	            $config['upload_path'] = './assets/user/images/blog/'.$_POST['xkategori_edit']; //path folder
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
						$config['source_image']='./assets/user/images/blog/'.$_POST['xkategori_edit'].'/'.$gbr['file_name'];
						$config['create_thumb']= FALSE;
						$config['maintain_ratio']= FALSE;
						$config['quality']= '80%';
						$config['new_image']= './assets/user/images/blog/'.$_POST['xkategori_edit'].'/'.$gbr['file_name'];
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();

						$data = array(
							'blog_pengguna_id'	=> $this->session->userdata('idadmin'),
							'blog_judul'			=> strip_tags($this->input->post('xjudul_edit')),
							'blog_gambar'			=> $gbr['file_name'],
							'blog_kategori'		=> strip_tags($this->input->post('xkategori_edit')),
							'blog_subkategori'	=> strip_tags($this->input->post('xsubkategori_edit')));
						
						$old = $this->db->get_where('tbl_blog',['blog_id' => $_POST['id'], 'blog_pengguna_id' => $this->session->userdata('idadmin')])->row();
						$path='./assets/user/images/blog/'.$old->blog_kategori.'/'.$old->blog_gambar;
						unlink($path);
						$this->m_blog->update_blog($data,$_POST['id']);
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/blog/filter/'.$this->session->userdata('current_filter_url'));
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/blog/filter/'.$this->session->userdata('current_filter_url'));
	                }

	            }else{
					$data = array(
						'blog_pengguna_id'	=> $this->session->userdata('idadmin'),
						'blog_judul'			=> strip_tags($this->input->post('xjudul_edit')),
						'blog_kategori'		=> strip_tags($this->input->post('xkategori_edit')),
						'blog_subkategori'	=> strip_tags($this->input->post('xsubkategori_edit')));

					$this->m_blog->update_blog($data,$_POST['id']);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/blog/filter/'.$this->session->userdata('current_filter_url'));
	            }

	}

	function hapus_blog(){
		
		$data = $this->db->get_where('tbl_blog',['blog_id' => $_POST['id'], 'blog_pengguna_id' => $this->session->userdata('idadmin')])->row();
		$path='./assets/user/images/blog/'.$data->blog_kategori.'/'.$data->blog_gambar;
		unlink($path);
		$this->m_blog->hapus_blog($_POST['id']);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/blog/filter/'.$this->session->userdata('current_filter_url'));
	}

}
