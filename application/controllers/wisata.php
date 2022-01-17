<?php

	class Wisata extends CI_Controller
	{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('wisataModel');
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
			$data['destinasi'] = $this->wisataModel->get_data('destinasi')->result_array();
			$data['kategori'] = $this->wisataModel->get_data('kategori')->result_array();
			$data['fasilitas'] = $this->wisataModel->get_data('fasilitas')->result_array();
		$this->view();
		$this->load->view('wisata/wisata', $data);
		}

		public function input()
		{
			$this->form_validation->set_rules('nama_wisata','Nama Wisata', 'required',[
	  		'required' => 'Nama Wisata Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('deskripsi','Deskripsi', 'required',[
	  		'required' => 'Deskripsi Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('kode_kategori','Pilih Kategori', 'required',[
	  		'required' => 'Pilih Kategori Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('kode_fasilitas','Pilih Fasilitas', 'required',[
	  		'required' => 'Pilih Fasilitas Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('buka','Waktu Buka', 'required',[
	  		'required' => 'Waktu Buka Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('tutup','Waktu Tutup', 'required',[
	  		'required' => 'Waktu Tutup Wajib Diisi!!'
	  	]);
			if ($this->form_validation->run() == FALSE)
			{
			$data['kategori'] = $this->wisataModel->get_data('kategori')->result_array();
			$data['fasilitas'] = $this->wisataModel->get_data('fasilitas')->result_array();
			$this->view();
			$this->load->view('wisata/tambah_wisata',$data);
			}else{
				$data['destinasi'] = $this->wisataModel->tambah_wisata();
				$this->session->set_flashdata('pesan', 'Ditambahkan');
				redirect('wisata/index');
			}
		}

		public function ubah ($id)
		{

			$data['destinasi'] = $this->wisataModel->getWisataById($id);
			$this->form_validation->set_rules('nama_wisata','Nama Wisata', 'required',[
	  		'required' => 'Nama Wisata Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('deskripsi','Deskripsi', 'required',[
	  		'required' => 'Deskripsi Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('kode_kategori','Pilih Kategori', 'required',[
	  		'required' => 'Pilih Kategori Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('kode_fasilitas','Pilih Fasilitas', 'required',[
	  		'required' => 'Pilih Fasilitas Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('buka','Waktu Buka', 'required',[
	  		'required' => 'Waktu Buka Wajib Diisi!!'
	  	]);
			$this->form_validation->set_rules('tutup','Waktu Tutup', 'required',[
	  		'required' => 'Waktu Tutup Wajib Diisi!!'
	  	]);
			if ($this->form_validation->run() == FALSE)
			{
			$data['kategori'] = $this->wisataModel->get_data('kategori')->result_array();
			$data['fasilitas'] = $this->wisataModel->get_data('fasilitas')->result_array();
			$this->view();
			$this->load->view('wisata/edit_wisata',$data);
			}else{
				$this->wisataModel->ubah_wisata();
				$this->session->set_flashdata('pesan', 'Diedit');
				redirect('wisata/index');
			}
		}

		public function hapus($id)
		{
			$this->wisataModel->hapus_wisata($id);
			$this->session->set_flashdata('pesan', 'Dihapus');
			redirect('wisata/index');
		}
	}