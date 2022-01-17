<?php

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategoriModel');
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
		$data['kategori'] = $this->kategoriModel->tampil_kategori();
		$this->view();
		$this->load->view('kategori/kategori',$data);
	}

	public function input()
	{
		$this->form_validation->set_rules('kode_kategori','Kode Kategori', 'required',[
  		'required' => 'Kode Kategori Wajib Diisi!!'
  	]);
		$this->form_validation->set_rules('nama_kategori','Nama Kategori', 'required',[
  		'required' => 'Nama Kategori Wajib Diisi!!'
  	]);
		if ($this->form_validation->run() == FALSE)
		{
		$this->view();
		$this->load->view('kategori/tambah_kategori');
		}else{
			$this->kategoriModel->tambah_kategori();
			$this->session->set_flashdata('pesan', 'Ditambahkan');
			redirect('kategori/index');
		}
	}

	public function ubah ($id)
	{

		$data['kategori'] = $this->kategoriModel->getKategoriById($id);
		$this->form_validation->set_rules('kode_kategori','Kode Kategori', 'required',[
  		'required' => 'Kode Kategori Wajib Diisi!!'
  	]);
		$this->form_validation->set_rules('nama_kategori','Nama Kategori', 'required',[
  		'required' => 'Nama Kategori Wajib Diisi!!'
  	]);
		if ($this->form_validation->run() == FALSE)
		{
		$this->view();
		$this->load->view('kategori/edit_kategori',$data);
		}else{
			$this->kategoriModel->ubah_kategori();
			$this->session->set_flashdata('pesan', 'Diedit');
			redirect('kategori/index');
		}
	}


	public function hapus($id)
	{
		$this->kategoriModel->hapus_kategori($id);
		$this->session->set_flashdata('pesan', 'Dihapus');
		redirect('kategori/index');
	}
}