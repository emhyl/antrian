<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {
	private $id_login;
	private $data_user;

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect(base_url('login'));
		}
		
		$this->id_login = $this->session->userdata('user')->id;
		$this->data_user = $this->M_capil->getWhere('tbl_pemohon',['id_login' => $this->id_login]);
		// var_dump($this->nm_user);
		// die();

	}

	public function index($jenis = null)
	{
		if($this->input->post('btn-upload') == ""){
			$data = [];
			// var_dump($_FILES);
			// var_dump($jenis);

			$data['id_pemohon'] = $this->data_user->id;
			$data['jenis_pengurusan'] = $jenis;


			$config['upload_path']          = './assets/user/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('blangko')){
				// var_dump($this->upload->display_errors());
				// die();
			    $this->session->set_flashdata('message', '

			    <div class="alert alert-danger alert-dismissible fade show" role="alert">
			        <strong>Gagal</strong> '.'Gagal upload file.!'.'
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			        <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
			    
			    ');
			    redirect(base_url('nomor_antrian'));
			    die;
			}else{
			    $data['blangko'] = $this->upload->data('file_name');                  

			} 

			$data['status'] = 'proses';
			$data['tgl'] = $this->CForm->time_now();
			$this->M_capil->add('tbl_berkas',$data);

		}else{
			redirect(base_url('nomor_antrian'));
		}

	}
	
	public function update()
	{
		$post = $this->input->post();
		if(isset($post['btn-update'])){
			
			$data['nama'] = $post['nama'];
			$data['no_hp'] = $post['no_hp'];
			$data['alamat'] = $post['alamat'];

			$this->M_capil->edit('tbl_pemohon',$data,['id'=>$this->data_user->id]);
			$this->session->set_flashdata('sukses', '

			<div class="alert alert-success alert-dismissible fade show" role="alert">
			    <strong>Sukses</strong> '.'Profil berhasil diubah.!'.'
			    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			    </button>
			</div>
			
			');

		}
		redirect(base_url('home/reset'));
	}

	public function reset()
	{
		$post = $this->input->post();
		if(isset($post['btn-reset'])){
			
			$data_reset = $this->M_capil->getWhere('tbl_login',['id'=>$this->id_login]);
			$pass = $data_reset->password;
		
			$pass_old = $post['pass_old'];
			$data['password'] = $post['new_pass'];

			if($pass == $pass_old){
				$this->M_capil->edit('tbl_login',$data,['id'=>$this->id_login]);

				$this->session->set_flashdata('sukses', '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				    <strong>Sukses</strong> '.'Password berhasil diubah.!'.'
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
				</div>
				
				');
			}else{
				$this->session->set_flashdata('gagal', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				    <strong>Gagal</strong> '.'Password gagal diubah.!'.'
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
				</div>
				
				');
			}
		}
		redirect(base_url('home/reset'));
	}



}
