<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $id_login;
	private $data_user;

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('user')){
			redirect(base_url('login'));
		}

		$this->id_login = $this->session->userdata('user')->id;
		$this->data_user = $this->M_capil->getWhere('tbl_pemohon',['id_login' => $this->id_login]);
	}

	public function index()
	{
		$chk_antrian = $this->M_capil->getWhere('tbl_antrian',['status'=>'proses']);
		if($chk_antrian){
			$data['no_proses'] = $this->M_capil->getWhere('tbl_pemohon',['id'=>$chk_antrian->id_pemohon])->no_antrian;

		}else{
			$data['no_proses'] = false;
		}
		$data['riwayat'] = $this->M_capil->getAllWhere('tbl_berkas',['id_pemohon'=>$this->data_user->id,'status'=>'selesai']);
		$data['total_antrian'] = count($this->M_capil->getAll('tbl_antrian'));
		$data['nomor_antrian'] = $this->data_user->no_antrian;


		$this->load->view('templates/user/header',['dt_user' => $this->data_user]);
		$this->load->view('user/index',$data);
		$this->load->view('templates/user/footer');
	}

	public function nomor_antrian($jenis  = null)
	{

		$data = [];
		$data['sts_jenis'] = false;
		$jenis_url = null;

		if(!is_null($jenis)){

			$data['sts_jenis'] = true;

			switch ($jenis) {
				case 'ktp':
					$data['jenis_pengurusan'] = 'KTP';
					$data['ikon'] = 'ktp.png';
					$data['jenis_url'] = 'ktp';
					# code...
					break;
				
				case 'kartu_keluarga':
					$data['jenis_pengurusan'] = 'KARTU KELUARGA';
					$data['ikon'] = 'kk.png';
					$data['jenis_url'] = 'kartu_keluarga';
					# code...
					break;
				case 'akta_kelahiran':
					$data['jenis_pengurusan'] = 'AKTA KELAHIRAN';
					$data['ikon'] = 'akta.png';
					$data['jenis_url'] = 'akta_kelahiran';
					# code...
					break;
				case 'akta_kematian':
					$data['jenis_pengurusan'] = 'AKTA KEMATIAN';
					$data['ikon'] = 'akta_mati.png';
					$data['jenis_url'] = 'akta_kematian';
					# code...
					break;
			}
		}

		$chk_antrian = $this->M_capil->getWhere('tbl_antrian',['status'=>'proses']);
		if($chk_antrian){
			$data['no_proses'] = $this->M_capil->getWhere('tbl_pemohon',['id'=>$chk_antrian->id_pemohon])->no_antrian;

		}else{
			$data['no_proses'] = false;
		}

		$data['sts_antrian'] = $this->M_capil->getWhere('tbl_antrian',['id_pemohon'=>$this->data_user->id]);
		$data['total_antrian'] = count($this->M_capil->getAll('tbl_antrian'));
		$data['nomor_antrian'] = $this->data_user->no_antrian;

		if($this->M_capil->getWhere('tbl_berkas',['id_pemohon'=>$this->data_user->id,'status'=>'proses'])){
			$data['status_proses'] = true;
		}else{
			$data['status_proses'] = false;

		}

// =======================bagian jam pendaftaran=============================

		if($this->CForm->time_now(true) >= 8 && $this->CForm->time_now(true) <=16 ){
			$data['sesi_daftar'] = true;
		}else{
			$data['sesi_daftar'] = false;
		}

		if($this->CForm->time_now(true) >= 8 && $this->CForm->time_now(true) < 16 ){
			$data['jam_buka'] = true;
		}else{
			$data['jam_buka'] = false;
		}
		// var_dump($data['status_proses']); die();

		$this->load->view('templates/user/header',['dt_user' => $this->data_user]);
		$this->load->view('user/nomor_antrian',$data);
		$this->load->view('templates/user/footer');
	}

	public function tentang()
	{

		$this->load->view('templates/user/header',['dt_user' => $this->data_user]);
		$this->load->view('user/tentang');
		$this->load->view('templates/user/footer');
	}

	public function reset()
	{
		$data['data'] = $this->data_user;
		$this->load->view('templates/user/header',['dt_user' => $this->data_user]);
		$this->load->view('user/reset',$data);
		$this->load->view('templates/user/footer');
	}

}
