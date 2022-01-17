<?php

class Fasilitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('fasilitasModel');
		$this->load->model('userModel');
	}

	public function view()
	{
		$data = $this->userModel->ambil_data($this->session->userdata['username']);
		$data = array(
			'username' => $data->nama,
			'level' => $data->level,
		);
		$this->load->view('template/header');
		$this->load->view('template/sidebar',$data);
		$this->load->view('template/footer');
	}
	
	public function index()
	{ 
		$data['fasilitas'] = $this->fasilitasModel->tampil_fasilitas();
		$this->view();
		$this->load->view('fasilitas/fasilitas',$data);
	}

	public function input()
	{
		$this->form_validation->set_rules('kode_fasilitas','Kode Fasilitas', 'required',[
  		'required' => 'Kode Fasilitas Wajib Diisi!!'
  	]);
		$this->form_validation->set_rules('nama_fasilitas','Nama Fasilitas', 'required',[
  		'required' => 'Nama Fasilitas Wajib Diisi!!'
  	]);
		if ($this->form_validation->run() == FALSE)
		{
		$this->view();
		$this->load->view('fasilitas/tambah_fasilitas');
		}else{
			$data['fasilitas'] = $this->fasilitasModel->tambah_fasilitas();
			$this->session->set_flashdata('pesan', 'Ditambahkan');
			redirect('fasilitas/index');
		}
	}

	public function ubah ($id)
	{

		$data['fasilitas'] = $this->fasilitasModel->getFasilitasById($id);
		$this->form_validation->set_rules('kode_fasilitas','Kode Fasilitas', 'required',[
  		'required' => 'Kode Fasilitas Wajib Diisi!!'
  	]);
		$this->form_validation->set_rules('nama_fasilitas','Nama Fasilitas', 'required',[
  		'required' => 'Nama Fasilitas Wajib Diisi!!'
  	]);
		if ($this->form_validation->run() == FALSE)
		{
		$this->view();
		$this->load->view('fasilitas/edit_fasilitas',$data);
		}else{
			$this->fasilitasModel->ubah_fasilitas();
			$this->session->set_flashdata('pesan', 'Diedit');
			redirect('fasilitas/index');
		}
	}

	public function hapus($id)
	{
		$this->fasilitasModel->hapus_fasilitas($id);
		$this->session->set_flashdata('pesan', 'Dihapus');
		redirect('fasilitas/index');
	}

}