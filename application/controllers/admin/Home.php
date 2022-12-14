<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect(base_url('login'));
		}
		// var_dump($this->CForm->time_now(true));die();
		
		$jam['jam_buka'] = $this->M_capil->getWhere('jam',['id'=>1])->buka;
		$jam['jam_tutup'] = $this->M_capil->getWhere('jam',['id'=>1])->tutup;
		$jam['sesi_buka'] = $this->M_capil->getWhere('jam',['id'=>1])->sesi_buka;
		$jam['sesi_tutup'] = $this->M_capil->getWhere('jam',['id'=>1])->sesi_tutup;
		$jam['set_buka'] = $this->M_capil->getWhere('jam',['id'=>1])->set_buka;
		$jam['set_tutup'] = $this->M_capil->getWhere('jam',['id'=>1])->set_tutup;

		if($this->CForm->time_now(true) >= $jam['jam_tutup']){
			$data_berkas = $this->CForm->ascToNum($this->M_capil->getAllWhere('tbl_berkas',['tgl'=>$this->CForm->time_now()]),'id');
			$data_antrian = $this->CForm->ascToNum($this->M_capil->getAll('tbl_antrian'),'id');
			$data_pemohon = $this->CForm->ascToNum($this->M_capil->getAll('tbl_pemohon'),'id');

			foreach ($data_antrian as $value) {
				$this->M_capil->delete('tbl_antrian',['id'=>$value]);
			}

			foreach ($data_berkas as $row_berkas) {
				$this->M_capil->edit('tbl_berkas',['status'=>'selesai'],['id'=>$row_berkas]);
			}

			foreach ($data_pemohon as $row_pemohon) {
				$this->M_capil->edit('tbl_pemohon',['no_antrian'=>null],['id'=>$row_pemohon]);
			}
		}

		if($this->CForm->time_now(true) >= $jam['set_buka'] && $this->CForm->time_now(true) <= $jam['set_tutup']){
			$data_berkas_riwayat = $this->CForm->ascToNum($this->M_capil->getAllWhere('tbl_berkas',['status'=>'selesai']),'id');
			foreach ($data_berkas_riwayat as $row_berkas_riwayat) {
				$this->M_capil->delete('tbl_berkas',['id'=>$row_berkas_riwayat]);
			}
		}



	}

	public function index()
	{
		$data['pemohon'] = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_berkas'],['id','id_pemohon']);
		$data['total_user'] = count($this->M_capil->getAll('tbl_pemohon'));
		$data['total_proses'] = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'proses']));
		$data['total_antri'] = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'antri']));
		$data['total_selesai'] = $this->M_capil->getAllWhere('tbl_berkas',['status'=>'selesai']);
		$data['riwayat'] = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_berkas'],['id','id_pemohon'],['status'=>'selesai']);

		// var_dump($data['riwayat']);
		// die();

		$this->load->view('templates/admin/header',['notif'=>$data['total_proses']]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/index',$data);
		$this->load->view('templates/admin/footer');
	}


	public function export() {

		$data['laporan'] = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_berkas'],['id','id_pemohon'],['status'=>'selesai']);

	    $this->load->library('pdf');
	    $this->pdf->setPaper('A4', 'potrait');
	    $this->pdf->filename = 'laporan.pdf';
	    $this->pdf->load('admin/view_laporan', $data);

	}
		

}