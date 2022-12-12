<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemohon extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['pemohon'] = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_berkas'],['id','id_pemohon'],['status'=>'proses']);
		$data['total_proses'] = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'proses']));
		
		$this->load->view('templates/admin/header',['notif'=>$data['total_proses']]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/pemohon',$data);
		$this->load->view('templates/admin/footer');
	}

	public function konfirmasi($id=null){
		$jml_antrian = count($this->M_capil->getAll('tbl_antrian'));
		$berkas = $this->M_capil->getWhere('tbl_berkas',['id'=>$id]);
		if(!is_null($id) && $berkas){
			$this->M_capil->edit('tbl_berkas',['status'=>'antri'],['id'=>$id]);
			if( $jml_antrian == 0 ){
				$this->M_capil->edit('tbl_pemohon',['no_antrian'=>1],['id'=>$berkas->id_pemohon]);
				$this->M_capil->add('tbl_antrian',['id_pemohon'=>$berkas->id_pemohon,'status'=>'proses']);
			}else{
				$id_prev = $this->M_capil->getLast('tbl_antrian')->id_pemohon;
				$no_next = $this->M_capil->getWhere('tbl_pemohon',['id'=>$id_prev])->no_antrian + 1;
				$this->M_capil->edit('tbl_pemohon',['no_antrian'=>$no_next],['id'=>$berkas->id_pemohon]);
				
				$this->M_capil->add('tbl_antrian',['id_pemohon'=>$berkas->id_pemohon,'status'=>'antri']);
			}
			redirect(base_url('admin/pemohon'));

		}else{
			redirect(base_url('admin/pemohon'));
		}
	}

}
