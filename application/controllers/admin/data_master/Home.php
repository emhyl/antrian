<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $notif; 
	public function __construct(){
		parent::__construct();
		$this->notif = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'proses']));
	}

	public function index($tbl_name_url = null)
	{
		$tbl_name = '';
		$options = [
			'method' => 'num',
			'field' => [
				'id' => [
					'use' => false
				]
			]
		];
		switch ($tbl_name_url){
			case 'data_login':
			$tbl_name = 'tbl_login';
			$this->session->set_flashdata('tbl_name',$tbl_name);
			$this->session->set_flashdata('tbl_name_lbl',$tbl_name_url);
			$options['field']['status']['tag'] = [
				'select' => true,
				'data' => ['admin','pemohon']
			];
			break;
			
			case 'data_pemohon':
			$tbl_name = 'tbl_pemohon';
			$this->session->set_flashdata('tbl_name',$tbl_name);
			$this->session->set_flashdata('tbl_name_lbl',$tbl_name_url);
			$options['field']['no_antrian'] = [
				'use' => false,
				];
			break;

			case 'data_berkas':
			$tbl_name = 'tbl_berkas';
			$this->session->set_flashdata('tbl_name',$tbl_name);
			$this->session->set_flashdata('tbl_name_lbl',$tbl_name_url);
			$options['field']['jenis_pengurusan']['tag'] = [
				'select' => true,
				'data' => ['KTP','KK']
			];
			$options['field']['status']['tag'] = [
				'select' => true,
				'data' => ['antri','proses','selesai']
			];
			$options['field']['tgl'] = [
				'type' => 'date',
			];
			break;
			
			case 'data_user':
			$tbl_name = 'tbl_user';
			$this->session->set_flashdata('tbl_name',$tbl_name);
			$this->session->set_flashdata('tbl_name_lbl',$tbl_name_url);
			break;

			case 'data_antrian':
			$tbl_name = 'tbl_antrian';
			$this->session->set_flashdata('tbl_name',$tbl_name);
			$this->session->set_flashdata('tbl_name_lbl',$tbl_name_url);
			break;
		}

	
		$data['table_field'] = $this->M_capil->getField($tbl_name);
		$data['table'] = $this->M_capil->getAll($tbl_name);
		$data['table_input'] = $this->CForm->form_input($data['table_field']	,$options);

		// var_dump($data['table_input']);die();
		$this->load->view('templates/admin/header',['notif'=>$this->notif]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/table/index',$data);
		$this->load->view('templates/admin/footer',['footer'=>true]);
	}

	public function delete($id = null){
		$tbl_name = $this->session->flashdata('tbl_name');
		$tbl_name_url = $this->session->flashdata('tbl_name_lbl');
		if($tbl_name){
			$this->M_capil->delete($tbl_name,['id'=>$id]);
			$this->session->set_flashdata('sukses_delete','
					<div class="alert alert-success p-2" role="alert">
					  Data berhasil dihapus!
					</div>
			');
			redirect(base_url('admin/data_master/'.$tbl_name_url));
		}
	}

	public function add(){
		$tbl_name = $this->session->flashdata('tbl_name');
		$tbl_name_url = $this->session->flashdata('tbl_name_lbl');
		unset($_POST['btn-add']);
		$data = [];
		foreach($_POST as $key => $row){
			$data[$key] = $this->input->post($key);
		}
		$this->M_capil->add($tbl_name,$data);
		$this->session->set_flashdata('sukses_add','
				<div class="alert alert-success p-2" role="alert">
				  Data berhasil ditambahakan!
				</div>
		');
		redirect(base_url('admin/data_master/'.$tbl_name_url));
	}

	public function edit($id = null){
		

		if(isset($_POST['btn-save'])){
			unset($_POST['btn-save']);
			$tbl_new = $this->session->flashdata('tbl_name');
			$tbl_new_lbl = $this->session->flashdata('tbl_name_lbl');
			$data = [];
			foreach($_POST as $key => $row){
				$data[$key] = $this->input->post($key);
			}

			if($this->M_capil->edit($tbl_new,$data,['id'=>$id])){
				$this->session->set_flashdata('sukses_edit','
						<div class="alert p-2 alert-success" role="alert">
						  Data berhasil di ubah!
						</div>
				');
				redirect(base_url('admin/data_master/'.$tbl_new_lbl));
			}
			

		}else{
			$tbl_name = $this->session->flashdata('tbl_name');
			$tbl_name_lbl = $this->session->flashdata('tbl_name_lbl');
			$this->session->set_flashdata('tbl_name',$tbl_name);
			$this->session->set_flashdata('tbl_name_lbl',$tbl_name_lbl);
		}

		$options = [
			'method' => 'key',
			'tags' => [
				'edit' => true
			],
			'field' => [
				'id' => [
					'use' => false
				],
				'no_antrian' => [
					'use' => true,
					'req' => false
				]
			]
		];

		$data_db =  $this->M_capil->getWhere($tbl_name,['id'=>$id]);
		$data['input'] = $this->CForm->form_input($data_db,$options);
		$data['id'] = $id;
		// var_dump($data);die();
		$this->load->view('templates/admin/header',['notif'=>$this->notif]);
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/table/tbl_edit',$data);
		$this->load->view('templates/admin/footer');
	}

	

}
