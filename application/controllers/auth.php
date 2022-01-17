<?php

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('authModel');
		$this->load->library('form_validation');
	}

	public function index() 
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
  }

  public function proses_login()
  {

  	$this->form_validation->set_rules('username', 'Username', 'required', [
  		'required' => 'Username Wajib Diisi!!'
  	]);
  	$this->form_validation->set_rules('password', 'Password', 'required', [
  		'required' => 'Password Wajib Diisi!!'
  	]);
  	if($this->form_validation->run() == FALSE)
  	{
  		$this->index();
  	}else{
  		$username = $this->input->post('username');
  		$password = $this->input->post('password');

  		$user = $username;
  		$pass = MD5($password);

  		$cek = $this->authModel->cek_login($user, $pass);

  		if ($cek->num_rows() > 0)
  		{
  			foreach($cek->result() as $c)
  			{
  				$sess_data['username'] = $c->username;
  				$sess_data['email'] = $c->email;
  				$sess_data['level'] = $c->level;

  				$this->session->set_userdata($sess_data);
  			}
  			if ($sess_data['level'] == 'admin') 
  			{
  			redirect('dashboard');
  			}else{
  				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf Username dan Password Anda Salah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
  				redirect('auth');
  			}
  		}else{
  			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Maaf Username dan Password Anda Salah<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
  				redirect('auth');
  		}
  	}
  }

  public function logout()
  {
  	$this->session->sess_destroy();
  	redirect('auth');
  }
}