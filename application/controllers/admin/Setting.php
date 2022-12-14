<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	private $notif; 
	public function __construct(){
		parent::__construct();

		$this->notif = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'proses']));
	}

	public function index()
	{
		$jam['jam_buka'] = $this->M_capil->getWhere('jam',['id'=>1])->buka;
		$jam['jam_tutup'] = $this->M_capil->getWhere('jam',['id'=>1])->tutup;
		$jam['sesi_buka'] = $this->M_capil->getWhere('jam',['id'=>1])->sesi_buka;
		$jam['sesi_tutup'] = $this->M_capil->getWhere('jam',['id'=>1])->sesi_tutup;
		$jam['set_buka'] = $this->M_capil->getWhere('jam',['id'=>1])->set_buka;
		$jam['set_tutup'] = $this->M_capil->getWhere('jam',['id'=>1])->set_tutup;

		// var_dump($jam);die();
		$this->load->view('templates/admin/header',['notif'=>$this->notif]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/setting',$jam);
		$this->load->view('templates/admin/footer');
	}

	public function set_jam_kerja(){
		$jam['buka'] = $this->input->post('buka');
		$jam['tutup'] = $this->input->post('tutup');

		$this->M_capil->edit('jam',$jam,['id'=>1]);
		$this->session->set_flashdata('sukses','
			<div class="alert alert-success" role="alert">
			  Data Berhasil di ubah
			</div>');
		redirect(base_url('admin/setting'));

	}

	public function set_sesi_pendaftaran(){
		$jam['sesi_buka'] = $this->input->post('sesi_buka');
		$jam['sesi_tutup'] = $this->input->post('sesi_tutup');

		$this->M_capil->edit('jam',$jam,['id'=>1]);
		$this->session->set_flashdata('sukses','
			<div class="alert alert-success" role="alert">
			  Data Berhasil di ubah
			</div>');
		redirect(base_url('admin/setting'));

	}

	public function set_report(){

		$jam['set_buka'] = $this->input->post('set_buka');
		$jam['set_tutup'] = $this->input->post('set_tutup');

		$this->M_capil->edit('jam',$jam,['id'=>1]);
		$this->session->set_flashdata('sukses','
			<div class="alert alert-success" role="alert">
			  Data Berhasil di ubah
			</div>');
		redirect(base_url('admin/setting'));

	}

	public function reset_berkas(){

		$pemohon = $this->CForm->ascToNum($this->M_capil->getAll('tbl_pemohon'),'id');
		foreach ($pemohon as $value) {
			$this->M_capil->edit('tbl_pemohon',['no_antrian'=>null],['id'=>$value]);
		}

		$berkas = $this->CForm->ascToNum($this->M_capil->getAll('tbl_berkas'),'id');
		foreach ($berkas as $berkas_id) {
			$this->M_capil->delete('tbl_berkas',['id'=>$berkas_id]);
		}

		$antrian = $this->CForm->ascToNum($this->M_capil->getAll('tbl_antrian'),'id');
		foreach ($antrian as $antrian_id) {
			$this->M_capil->delete('tbl_antrian',['id'=>$antrian_id]);
		}

		$this->session->set_flashdata('sukses','
			<div class="alert alert-success" role="alert">
			  Data Berhasil di ubah
			</div>');
		redirect(base_url('admin/setting'));

	}

	
	

}
