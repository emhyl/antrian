<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Antrian extends CI_Controller {
	private $antrian;
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect(base_url('login'));
		}
		$this->antrian = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_berkas'],['id','id_pemohon'],['status'=>'antri','tgl'=>$this->CForm->time_now()]);
	}

	public function index()
	{
		$data['antrian'] = $this->antrian;
		$data['no_antrian'] = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_antrian'],['id','id_pemohon'],['status'=>'proses']);

		if($data['no_antrian']){
			$data['no_antrian'] = $data['no_antrian'][0];
		}
		
		
		$data['total_proses'] = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'proses']));
		// var_dump($data['no_antrian']);die();

		$this->load->view('templates/admin/header',['notif'=>$data['total_proses']]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/antrian',$data);
		$this->load->view('templates/admin/footer');
	}

	public function next($id=null,$no=null){

		if(!is_null($id)){
			if($no < count($this->antrian)){

				$id_pemohon = $this->M_capil->getWhere('tbl_antrian',['id'=>$id])->id_pemohon;
				$pemohon = $this->M_capil->getWhere('tbl_pemohon',['id'=>$id_pemohon]);
				$no_next = $pemohon->no_antrian + 1;
				$id_pemohon_next = $this->M_capil->getWhere('tbl_pemohon',['no_antrian'=>$no_next])->id;
	
				// $this->M_capil->edit('tbl_pemohon',['no_antrian'=>null],['id'=>$id_pemohon]);
				
				// $this->M_capil->edit('tbl_berkas',['status'=>'selesai'],['id_pemohon'=>$id_pemohon]);
				$this->M_capil->edit('tbl_antrian',['status'=>'selesai'],['id_pemohon'=>$id_pemohon]);
				$this->M_capil->edit('tbl_antrian',['status'=>'proses'],['id_pemohon'=>$id_pemohon_next]);

				// redirect(base_url('admin/antrian'));
			}
			if($no == 1){
				$id_pemohon = $this->M_capil->getWhere('tbl_antrian',['id'=>$id])->id_pemohon;
				$this->M_capil->edit('tbl_antrian',['status'=>'selesai'],['id_pemohon'=>$id_pemohon]);
			}


		}

		redirect(base_url('admin/antrian'));
	}

}
