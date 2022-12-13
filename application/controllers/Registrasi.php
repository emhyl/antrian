<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// if($this->session->userdata('admin')){
		// 	$this->session->sess_destroy();
		// }
		// $this->load->model('M_capil');
	}

	public function index()
	{

		if( isset($_POST['btn_registarsi']) ){

			$data_login['username'] = $this->input->post('username');
			$data_login['password'] = $this->input->post('password');
			$data_login['status'] = 'pemohon';

			$post = $this->input->post();
			$auth = $this->M_capil->getWhere('tbl_login',['username'=>$post['username']]);
			// var_dump($auth);die();
			if(!$auth){
				$this->M_capil->add('tbl_login',$data_login);
				$id_login = $this->M_capil->getLast('tbl_login');

				$data_pemohon['id_login'] = $id_login->id;
				$data_pemohon['nama'] = $post['nama'];
				$data_pemohon['no_hp'] = $post['no_hp'];
				$data_pemohon['alamat'] = $post['alamat'];
				$data_pemohon['no_antrian'] = null;

				// var_dump($id_login);die();

				$this->M_capil->add('tbl_pemohon',$data_pemohon);

				$this->session->set_flashdata('success','
					<div class="alert alert-success p-2" role="alert">
					 	Akun berhasil dibuat.!
					</div>
				');

			}else{
				$this->session->set_flashdata('err','
					<div class="alert alert-warning p-2" role="alert">
					 	username telah digunakan.!
					</div>
				');
			}

			redirect(base_url('registrasi'));
			die();
			// else{
			// 	$this->session->set_flashdata('err_login','
			// 		<div class="alert alert-danger p-2" role="alert">
			// 		 	username atau password yang anda masukkan salah.!
			// 		</div>
			// 	');
			// }
			
		}
		$this->load->view('registrasi');
	}

	public function logOut(){
		$this->session->unset_userdata('admin');
		redirect(base_url('login'));
	}

}
